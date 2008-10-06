<?php
/*
 * Title: Search Class
 * Purpose:
 *    The Search class contains all functions common to AjaxSearch functionalities
 *
 *    Version: 1.8  - Coroico (coroico@wangba.fr) 
 *    
 *    24/07/2008  
 *     
 *    Jason Coward (opengeek - jason@opengeek.com)
 *    Kyle Jaebker (kylej - kjaebker@muddydogpaws.com)
 *    Ryan Thrash (rthrash - ryan@vertexworks.com) 
*/

define('AS_DBGFILE', dirname(__FILE__) . '/../ajaxSearch_log.txt');   // Name of debug file

class Search {

  // debug
  var $dbg;     // debug flag
  var $dbgFd;   // debug file descriptor


/**
 * Load the configuration file 
 */
  function loadConfig(& $msgErr) {

    $valid = false;
    $msgErr = '';
    
    // include configuration file 
    if (substr($this->cfg['config'], 0, 5) != "@FILE") $configFile = AS_PATH."configs/".$this->cfg['config'].".config.php";
    else $configFile = MODX_BASE_PATH . trim(substr($this->cfg['config'], 5));

    if (file_exists($configFile)) {
      include $configFile;
      $valid = true;
    }
    else {
      $msgErr = $configFile . ' not found ! check your config parameter or the existing of your configuration file!';
    }
    return $valid;
  }
  
/**
 * Load the language file 
 */
  function loadLang() {

    $_lang = array(); // language labels

    // include default language file
    $this->language = 'english';
    include AS_PATH."lang/{$this->language}.inc.php";

    // include other language file if set
    if (($this->cfg['language'] != '') && ($this->cfg['language'] != $this->language)) {
      if (file_exists(AS_PATH."lang/{$this->cfg['language']}.inc.php"))
        include AS_PATH."lang/".$this->cfg['language'].".inc.php";
        $this->language = $this->cfg['language'];
    }
    $this->_lang = $_lang;
  }

/**
 *  setDatabaseCharset : initialize the dbCharset, isPhp5 and the appropriate 
 *                       PCRE modifiers depending of the charset of database
 */
  function setDatabaseCharset(){
    global $database_connection_charset;
     
    $this->dbCharset = $database_connection_charset; // database charset
    $this->pcreModifier = ($database_connection_charset == "utf8") ? 'iu' : 'i';
    $this->setIsPhp5(); // set the boolen isPhp5
    return;
  }


/**
 *  setIsPhp5 : set the boolean isPhp5
 */ 
  function setIsPhp5(){
    // Initialize isPhp5 boolean
    $this->isPhp5 = (version_compare(phpversion(), "5.0.0", ">=")) ? true : false;
  }
  
/**
 * Strip the searchString with the user StripInput function
 * 
 * @param string $searchString term searched
 * @param string $advSearch adanced Search parameter
 *    
 */
  function stripSearchString(&$searchString,$stripInput,&$advSearch) {

    $searchString = trim($searchString);
    if (function_exists($stripInput)) $searchString = $stripInput($searchString,$advSearch);
    else $searchString = $this->defaultStripInput($searchString);
    $valid = ($searchString !== '') ? true : false;
    return $valid;
  }

/**
 * Default user StripInput function
 *  
 * @param string $searchString term searched
 */
  function defaultStripInput($searchString){

    if ($searchString !== ''){  
      // Remove escape characters
      $searchString = stripslashes($searchString);

      // Remove modx sensitive tags
      $searchString = stripTags($searchString);

      // Strip HTML tags
      $searchString = stripHtml($searchString);  
    }  
    return $searchString;
  }

/**
 * Do the search
 * 
 * @param string $searchString term searched
 * @param string $advSearch adanced Search parameter
 *    
 */
  function doSearch($searchString,$advSearch) {
    global $modx;

    $records = NULL;
    if ($this->initSearchContext()) {
      $select = $this->getSelect($searchString,$advSearch);
      $records = $modx->db->query($select);
    }
    return $records;
  }

/**
 * get the subSelect sql statement
 * 
 * @param string $searchString term searched
 * @param string $advSearch adanced Search parameter    
 */
  function getSelect($searchString,$advSearch){

    $searchString = mysql_real_escape_string($searchString);

    $subSelect = $this->getSubSelect();
    $aliasSubSelect = 'cnt'; // alias for the sub select statement

    $search = array();  
    switch( $advSearch ) {
      case 'exactphrase':
        $search[0] = $searchString;
        $whereClause = $this->getClause($aliasSubSelect,'or');
        $whereOper = '';
        break;

      case 'allwords':
        $search = explode(" ", $searchString);
        $whereClause = $this->getClause($aliasSubSelect,'or');
        $whereOper = 'AND';
        break;

      case 'nowords':
        $search = explode(" ", $searchString);
        $whereClause = $this->getClause($aliasSubSelect,'andnot');
        $whereOper = 'AND';
        break;

      case 'oneword':
      default:
        $search = explode(" ", $searchString);
        $whereClause = $this->getClause($aliasSubSelect,'or');
        $whereOper = 'OR';
    }

    // build of request - select clause
    $pref = $aliasSubSelect . '.';

    // id field of the main table. Usually "id"
    $sql = "SELECT " . $pref . $this->main['id'] . ',';

    // displayed date fields of the main table
    if (isset($this->main['date'])) foreach($this->main['date'] as $date) $sql .= ' ' . $pref . $date . ',';

    // display all the displayed fields of the main table
    foreach($this->main['displayed'] as $displayed) $sql .= ' ' . $pref . $displayed . ',';

    // display all the displayed fields of joined tables
    if (isset($this->joined)) foreach($this->joined as $joined) {
    	foreach($joined['displayed'] as $displayed) $sql .= ' ' . $pref . $joined['tb_alias'] . '_' . $displayed . ',';
    }
    
    // display id of phx field if required
    if (isset($this->joined)) foreach($this->joined as $joined) {
      if (isset($joined['phx']) && isset($joined['phx_alias'])) {
        $sql .= ' ' . $pref . $joined['phx_alias'] . ',';
      }
    }   
    $sql = substr($sql,0,strlen($sql)-1);

    // build of request - from clause. Use of subselect
    $sql .= ' FROM (' . $subSelect . ") AS " . $aliasSubSelect . ' WHERE';

    // build of request - where clause regarding the search string
    foreach ($search as $searchTerm){  
      $sql .=   preg_replace('/word/', $searchTerm, $whereClause).$whereOper;
    }
    $sql = substr($sql,0,strlen($sql)-strlen($whereOper)-1);

    // build of request - order by 
    $sql .= $this->getOrderBy();

    if ($this->dbg) $this->dbgLog('sql= ',$sql);
    
    return $sql;
  }

/**
 * Check and initialize the description of the tables & content fields 
 * used in the sub-select sql search  
 * @author Coroico (www.modx.wangba.fr) 
 */
  function initSearchContext(){

    global $modx;

    // unset the variable to reinit the context
    unset($this->main);
    unset($this->joined);
    
    $mainDefined = false;
    $this->withContent = false;
    $part = explode('|',$this->cfg['whereSearch']); // which tables and which fields ?

    foreach($part as $p){
    
      $p_array = explode(':',$p);
      $ptable = $p_array[0];
      $pfields = $p_array[1];
      
      switch ($ptable){      
        case 'content':
          // Content ========================================= search in content
          $this->main = array(
              'tb_name' => $modx->getFullTableName('site_content'),
              'tb_alias' => 'sc',
              'id' => 'id',
              'searchable' => array('pagetitle','longtitle','description','alias','introtext','menutitle','content'),
              'displayed' => array('pagetitle','longtitle','description','alias','introtext','menutitle','content'),
              'date' =>array('publishedon'),
              'filters' => array(),
              'jfilters'  => array()
          );
          if ($pfields != '' ) {
            unset($this->main['searchable']);
            if ($pfields == 'null' or $pfields == 'NULL') $this->main['searchable'] = array();
            else $this->main['searchable'] = explode(',',$pfields); // overwrite the default values
          }
          $this->withContent = true;
          $mainDefined = true;

          // selected list of ID allowed
          if ($this->validListIDs($this->listIDs)) $this->main['filters'][] = array(
              'field' => 'id',
              'oper' => 'in',
              'value' => $this->listIDs
          );
          // documents should be published
          $this->main['filters'][] = array(
              'field' => 'published',
              'oper' => '=',
              'value' => '1'  
          );
          // documents should be searchable
          $this->main['filters'][] = array(
              'field' => 'searchable',
              'oper' => '=',
              'value' => '1'  
          );
          // documents should'nt be deleted
          $this->main['filters'][] = array(
              'field' => 'deleted',
              'oper' => '=',
              'value' => '0'  
          );
          // documents hidden or not from menu
          if (($this->cfg['hideMenu'] == 0 ) || ($this->cfg['hideMenu'] == 1 )) $this->main['filters'][] = array(
              'field' => 'hidemenu',
              'oper' => '=',
              'value' => $this->cfg['hideMenu']
          );
          // content of type reference searchable or not 
          if ($this->cfg['hideLink'] == 1) $this->main['filters'][] = array(
              'field' => 'type',
              'oper' => '=',
              'value' => '\'document\''
          );
          // document group allowed regarding user authentification
          if ($this->validListIDs($this->cfg['docgrp'])) {
            $this->main['jfilters'][] = array(
              'tb_name' => $modx->getFullTableName('document_groups'),
              'tb_alias' => 'dg',
              'main' => 'id',
              'join' => 'document',
              'field' => 'document_group',
              'oper' => 'isnull or in',
              'value' => $this->cfg['docgrp']  
            );
          }
          else {
            // documents should be public
            $this->main['filters'][] = array(
                'field' => 'privateweb',
                'oper' => '=',
                'value' => '0'  
            );     
          }
          break;

        // Tvs ===============================search in template variable values
        // keep care of tb_alias change. The tb_alias of joined tables is also used by tvPhx parameter
        case 'tv':
          $this->joined[] = array(
              'tb_name' => $modx->getFullTableName('site_tmplvar_contentvalues'),
              'tb_alias' => 'tv',
              'main' => 'id',
              'join' => 'contentid',
              'searchable' => array('value'),
              'displayed' => array('value'),
              'concat_separator' => ', ',
              'phx' => 'name, value',
              'phx_alias' => 'tv_id',
              'filters' => array(),
              'jfilters'  => array()
          );
          $j = count($this->joined) - 1;
          if ($pfields != '' ) {
            unset($this->joined[$j]['searchable']);
            if ($pfields == 'null' or $pfields == 'NULL') $this->main['searchable'] = array();
            else $this->main['searchable'] = explode(',',$pfields); // overwrite the default values
          }
          // tv concatenation with allowed tv name
          if ($listTvs = $this->validListTvs($this->cfg['withTvs'])) {
            $this->joined[$j]['jfilters'][] = array(
              'tb_name' => $modx->getFullTableName('site_tmplvars'),            
              'tb_alias' => 'tmpl',
              'main' => 'tmplvarid',
              'join' => 'id',
              'field' => 'name',
              'oper' => 'in',
              'value' => $listTvs
            );
          }
          break;

        // Jot =========================================== search in jot content
        case 'jot':
          $this->joined[] = array(
              'tb_name' => $modx->getFullTableName('jot_content'),
              'tb_alias' => 'jot',
              'main' => 'id',
              'join' => 'uparent',
              'searchable' => array('content'),
              'displayed' => array('content'),
              'concat_separator' => ', ',
              'filters' => array()
          );
          $j = count($this->joined) - 1;
          if ($pfields != '' ) {
            unset($this->joined[$j]['searchable']);
            if ($pfields == 'null' or $pfields == 'NULL') $this->main['searchable'] = array();
            else $this->main['searchable'] = explode(',',$pfields); // overwrite the default values

          }
          // comments should be published
          $j = count($this->joined) - 1;
          $this->joined[$j]['filters'][] = array(
              'field' => 'published',
              'oper' => '=',
              'value' => '1'  
          );
          break;

        // Maxigallery ================================= search in image gallery
        case 'maxigallery':
          $this->joined[] = array(
              'tb_name' => $modx->getFullTableName('maxigallery'),
              'tb_alias' => 'gal',
              'main' => 'id',
              'join' => 'gal_id',
              'searchable' => array('title','descr'),
              'displayed' => array('title','descr','filename'),
              'concat_separator' => ', ',
              'filters' => array()
          );
          $j = count($this->joined) - 1;
          if ($pfields != '' ) {
            unset($this->joined[$j]['searchable']);
            if ($pfields == 'null' or $pfields == 'NULL') $this->main['searchable'] = array();
            else $this->main['searchable'] = explode(',',$pfields); // overwrite the default values
          }
          // image should be published
          $j = count($this->joined) - 1;
          $this->joined[$j]['filters'][] = array(
              'field' => 'hide',
              'oper' => '=',
              'value' => '0'  
          );
          
          break;

        // search in your own table
        default:
          // get the tables description by a user function otherwise ignore it!
          if (function_exists($wtable)) {
            $wtable($main,$joined,$this->listIDs,$pfields);
            if ($main) {
              $this->main = $main; // substitute the default main table
              $mainDefined = true;
            }
            if ($joined) {
              // addition of a joined table
              if (count($joined['displayed'])>0) $this->joined[] = $joined;
            }
          }
          break;
      }
    }
    return $mainDefined;
  }

/**
 * returns the sub-select sql search
 *  
 * @author Coroico (www.modx.wangba.fr) 
 */
  function getSubSelect(){

    // select clause from main table (id, searchable and date fields)
    $select = "SELECT " . $this->main['tb_alias'] . '.' . $this->main['id'] . ", ";    
    foreach($this->main['displayed'] as $searchable) $select .= $this->main['tb_alias'] . '.' . $searchable . ", ";
    if (isset($this->main['date'])) 
      foreach($this->main['date'] as $date) $select .= $this->main['tb_alias'] . '.' . $date . ", ";    

    // select clause from joined tables
    if (isset($this->joined)) foreach($this->joined as $joined){
      $jpref = $joined['tb_alias'] . '.';
      $nbd = count($joined['displayed']);
      for($d=0;$d<$nbd;$d++){
        $select .= 'GROUP_CONCAT( DISTINCT ' . $jpref . $joined['displayed'][$d];
        $select .= ' ORDER BY ' . $jpref . $joined['displayed'][$d];
        $select .= ' SEPARATOR "' . $joined['concat_separator'] . '" ) AS ' . $joined['tb_alias'] . '_' . $joined['displayed'][$d] . ', ';   
      }
    }
    
    // select clause from joined tables for Phx
    if (isset($this->joined)) foreach($this->joined as $joined){
      $jpref = $joined['tb_alias'] . '.';
      if (isset($joined['phx']) && isset($joined['phx_alias'])) {
        $select .= 'GROUP_CONCAT( DISTINCT CAST(' . $jpref . $joined['main'] . ' AS CHAR)';
        $select .= ' SEPARATOR "," ) AS ' . $joined['phx_alias'] . ', ';
      }
    }
    
    $select = substr($select, 0, strlen($select) -2);

    // from & where clause from joined tables
    $from = ' FROM ' . $this->main['tb_name'] . ' ' . $this->main['tb_alias'] . ' ';
    if (isset($this->joined)) foreach($this->joined as $joined){
      $from .= 'LEFT JOIN ' . $joined['tb_name'] . ' ' . $joined['tb_alias'];
      $from .= ' ON ' . $this->main['tb_alias'] . '.' . $joined['main'] . ' = ' . $joined['tb_alias'] . '.' . $joined['join'] . ' ';
    }

    // where clause from Main table (filters)
    $where = '';
    if (isset($this->main['filters'])) foreach($this->main['filters'] as $filter){
      $where .= $this->getFilter($this->main['tb_alias'],$filter) . ' AND ';
    }

    // from & where clauses from Main table (joined filters)
    if (isset($this->main['jfilters'])) foreach($this->main['jfilters'] as $filter){
      $from .= 'LEFT JOIN ' . $filter['tb_name'] . ' ' . $filter['tb_alias'];
      $from .= ' ON ' . $this->main['tb_alias'] . '.' . $filter['main'] . ' = ' . $filter['tb_alias'] . '.' . $filter['join'] . ' ';
      $where .= $this->getFilter($filter['tb_alias'],$filter) . ' AND ';     
    }

    // where clause from joined tables (filters)
    if (isset($this->joined)) foreach($this->joined as $joined){
      foreach($joined['filters'] as $filter) {
        $where .= $this->getFilter($joined['tb_alias'],$filter) . ' AND ';
      }
    }
    
    // where clause from joined tables (joined filters)
    if (isset($this->joined)) foreach($this->joined as $joined){
      if (isset($joined['jfilters'])) foreach($joined['jfilters'] as $filter) {
      $from .= 'LEFT JOIN ' . $filter['tb_name'] . ' ' . $filter['tb_alias'];
      $from .= ' ON ' . $joined['tb_alias'] . '.' . $filter['main'] . ' = ' . $filter['tb_alias'] . '.' . $filter['join'] . ' ';
      $where .= $this->getFilter($filter['tb_alias'],$filter) . ' AND ';     
      }
    }   
    if ($where != '') $where = 'WHERE (' . substr($where, 0, strlen($where) -5) . ')';
    
    // group
    $group = ' GROUP BY ' . $this->main['tb_alias'] . '.' . $this->main['id'];

    $sql = $select . $from . $where . $group;
    
    return $sql;
  }

/**
 * Get the Order By statement clause 
 */
  function getOrderBy(){
    $orderBy = '';
    if ($this->cfg['order']){
      $order = explode(',',$this->cfg['order']);
      $orderBy = ' ORDER BY ';
      foreach($order as $ord) $orderBy .= $ord . ', ';
      $orderBy = substr($orderBy,0,strlen($orderBy)-2);
    }
    return $orderBy;
  }

/**
 * Sort results by rank value
 * 
 * @param string $searchString term searched
 * @param string $advSearch adanced Search parameter    
 */
  function sortResultsByRank($searchString,$advSearch){

    $rkFields = array();
    
    if ($this->cfg['rank']){
      $searchString = strtolower($searchString);  
      // sort search results by rank (nb extracts)
      $rkParam = explode(',',$this->cfg['rank']);
      foreach($rkParam as $rk){
        $rankParam = explode(':',$rk);
        $name = $rankParam[0];
        $weight = (isset($rankParam[1]) ? $rankParam[1] : 1);
        $rkFields[] = array('name' => $name,'weight' => $weight);
      }
      // adds the rank with value as new field to each result
      $nbResults = count($this->searchResults);
      for($i=0;$i<$nbResults;$i++) {
        $this->searchResults[$i]['rank'] = 0;
        foreach($rkFields as $rf){
          $this->searchResults[$i]['rank'] += $this->getRank($searchString,$advSearch,$this->searchResults[$i][$rf['name']],$rf['weight']);
        }
      }
      // sort the results by rank
      $i = 0;
      foreach($this->searchResults as $key => $row) {
        $rank[$key] = $row['rank'];
        $ascOrder[$key] = $i++;
      }
      array_multisort($rank, SORT_DESC, $ascOrder, SORT_ASC, $this->searchResults);
    }
  }

/**
 * get the rank value
 * 
 * @param string $searchString term searched
 * @param string $advSearch adanced Search parameter
 * @param string $field field used by ranking
 * @param int $weight weight linked by the user to the field       
 */
  function getRank($searchString,$advSearch,$field,$weight){

    $search = array();
    $rank = 0;

    if ($advSearch != 'nowords'){
      switch( $advSearch ) {
        case 'exactphrase':
          $search[0] = $searchString;
          break;

        case 'allwords':
        case 'oneword':
          $search = explode(" ", $searchString);
      }
      if ($this->dbCharset == 'utf8') {
        $field = mb_strtolower($field);
        foreach($search as $srch) $rank += mb_substr_count($field,$srch);
      }
      else {
        $field = strtolower($field);
        foreach($search as $srch) $rank += substr_count($field,$srch);
      }
      $rank = $rank * $weight;
    }
    return $rank;
  }

/**
 * get filter where clause
 * 
 * @param string $alias alias of the field used as filter
 * @param string $filter filter array       
 */
  function getFilter($alias, $filter){

    $where = '(';
    // = (EQUAL)
    if (($filter['oper'] == '=') || ($filter['oper'] == 'EQUAL')){
      $where .= $alias . '.' . $filter['field'] . '=' . $filter['value'];
    }
    // > (GREAT THAN)
    else if (($filter['oper'] == '>') || ($filter['oper'] == 'GREAT THAN')){
      $where .= $alias . '.' . $filter['field'] . '>' . $filter['value'];        
    }
    // > (LESS THAN)
    else if (($filter['oper'] == '<') || ($filter['oper'] == 'LESS THAN')){
      $where .= $alias . '.' . $filter['field'] . '<' . $filter['value'];        
    }
    // in (IN)
    else if (($filter['oper'] == 'in') || ($filter['oper'] == 'IN')){
      $where .= $alias . '.' . $filter['field'] . ' IN (' . $filter['value'] . ')';        
    }
    // isnull or in (ISNULL OR IN)
    else if (($filter['oper'] == 'isnull or in') || ($filter['oper'] == 'ISNULL OR IN')){
      $where .= 'ISNULL(' . $alias . '.' . $filter['field'] . ')';
      $where .= ' OR (' . $alias . '.' . $filter['field'] . ' IN (' . $filter['value'] . '))';           
    }
    $where .= ')';

    return $where;
  }

/**
 * getClause : return the where clause to use  
 */
  function getClause($aliasSubSelect,$type='or'){

    $partial = array(
      'or' => " LIKE '%word%' OR ",
      'andnot' => " NOT LIKE '%word%' AND "
    ); 
    
    // table prefix      
    $pref = $aliasSubSelect . ".";
    
    $like = $partial[$type];
    $clause = " (";  

    foreach($this->main['searchable'] as $searchable) $clause .= $pref . $searchable . $like;

    if (isset($this->joined)) foreach($this->joined as $joined){
      foreach($joined['searchable'] as $searchable) $clause .= $pref . $joined['tb_alias'] . '_' . $searchable . $like;
    }
    $clause = substr($clause, 0, strlen($clause)-4) . ") ";
    return $clause;
  }

/**
 * cleanText : strip function to clean outputted results  
 */
  function cleanText($text,$stripOutput) {

    if (function_exists($stripOutput)) $text = $stripOutput($text);
    else $text = $this->defaultStripOutput($text);
    return $text;
  }
  
/**
 * defaultStripOutput : default ouput strip function  
 */
  function defaultStripOutput($text){

    if ($text !== ''){
      // replace line breaking tags with whitespace
      $text = stripLineBreaking($text);
      // strip modx sensitive tags
      $text = stripTags($text);
      // strip Jscripts
      $text = stripJscripts($text);
      // strip html tags. Tags should be correctly ended
      $text = stripHTML($text);  
    }
    return $text;
  }

/**
 * getSelectList : get the search terms list
 */
  function getSelectList($searchWordList){
    $list = '';
    $swl = explode(',',$searchWordList);
    $searchFunction = array_shift($swl); 
    if (function_exists($searchFunction)) $list = $searchFunction($swl);
    return $list;
  }
  
/**
 * initBreadcrumbs : initialize the breadcrumbs variables
 */
  function initBreadcrumbs(){
    if ($this->cfg['breadcrumbs']){
      $bc = explode(',',$this->cfg['breadcrumbs']); 
      if (function_exists($bc[0])) {
        $this->breadcrumbs['type'] = 'function';
      } elseif ($this->snippet_exists($bc[0])) {
        $this->breadcrumbs['type'] = 'snippet'; 
      } else {
        $this->cfg['breadcrumbs'] = false;
      }
      
      
      if ($this->cfg['breadcrumbs']){
        $this->breadcrumbs['name'] = array_shift($bc);
        $this->breadcrumbs['params'] = array();
        foreach($bc as $prm){
          $param = explode(':',$prm);
          $this->breadcrumbs['params'][$param[0]] = (isset($param[1]) ? $param[1] : 0);
        } 
      }     
    }
  }

/**
 * snippet_exists : check the existing of a snippet
 */
  function snippet_exists($snippetName){
  
    global $modx;
  
    $tbl = "{$modx->dbConfig['dbase']}.`{$modx->dbConfig['table_prefix']}site_snippets`";
    $select= "SELECT * FROM " . $tbl . " WHERE " . $tbl . ".name='" . mysql_escape_string($snippetName) . "';";
    $rs = $modx->db->query($select);
    return $modx->recordCount($rs);
  }

/**
 * initTvPhx : initialize tvPhx variables
 */
  function initTvPhx(){
  
    if ($this->cfg['tvPhx']){
      $tvs = explode(',',$this->cfg['tvPhx']);
      foreach($tvs as $tv) {
        $tvInfo = explode(':',$tv);
        if (isset($tvInfo[1]) && (function_exists($tvInfo[1]))) {
          $this->tvphx[] = $tvInfo; 
        }
      }
    }
  }
/**
 * initExtractVariables : Initialize the Extract variables
 */
  function initExtractVariables(){
    $extr = explode(':',$this->cfg['extract']);
    $this->extractNb = $extr[0];      // number of extracts per document
    $this->extractFields = explode(',',$extr[1]);   // list of fields to use for the extract
  }
  
/**
 * returns extracts with highlighted searchterms
 * 
 * @param string content to analyse
 * @param string search terms
 * @param string advanced search parameter (oneword,allwords,exactphrase,noword)
 * @param string highlight class
 * @param int number of extracts found 
 * @return final extract with highlighted searchterms
 * 
 * @author Coroico (www.modx.wangba.fr)
 */
  function getExtract($text, $searchString, $advSearch, $highlightClass, & $nbExtr) {

    $finalExtract = '';

    if (($text !== '') && ($searchString !== '') && ($this->extractNb > 0) && ($advSearch !== 'nowords')){

      $extracts = array();

      if ($this->dbCharset == 'utf8') {
        // convert of all Html entities before extraction
        // require version 5.0 and upper : http://bugs.php.net/bug.php?id=25670
        if ($this->isPhp5) $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
        $mbStrpos = 'mb_strpos';
        $mbStrlen = 'mb_strlen';
        $mbStrtolower = 'mb_strtolower';
        $mbSubstr = 'mb_substr';
        $mbStrrpos = 'mb_strrpos';
      }
      else {
        // convert of all Html entities before extraction
        // require PHP 4.3
        $text = html_entity_decode($text, ENT_QUOTES);
        $mbStrpos = 'strpos';
        $mbStrlen = 'strlen';
        $mbStrtolower = 'strtolower';
        $mbSubstr = 'substr';
        $mbStrrpos = 'strrpos';
      }

      $rank = 0;    
      $textLength = $mbStrlen($text);

      $searchList = $this->getSearchWords($searchString,$advSearch);

      // get all the extracts
      foreach($searchList as $searchTerm){

        // rank of the searchterm
        $rank++;
        // position of the first character of searchTerm
        $wordLeft = $mbStrpos($mbStrtolower($text), $mbStrtolower($searchTerm));
        // length of the searchTerm
        $wordLength = $mbStrlen($searchTerm);

        $iExtr = 0;
        while(is_int($wordLeft) && ($iExtr < $this->extractNb)){
          // position of the last character of searchTerm
          $wordRight = $wordLeft + $wordLength - 1;

          // position of the first character of extract
          $left = intval($wordLeft - ($this->cfg['extractLength'])/2 + $wordLength/2);

          // position of the last character of extract
          $right = $left + $this->cfg['extractLength'] - 1;

          if ($left <0 ) $left = 0;
          if ($right > $textLength) $right = $textLength;

          $extrLength = $right - $left + 1; 

          $extracts[]= array(
              'word' => $searchTerm,
              'wordLeft' => $wordLeft,
              'wordRight' => $wordRight,
              'rank' => $rank,
              'left' => $left,
              'right' => $right,
              'etcLeft' => $this->cfg['extractEllips'],
              'etcRight' => $this->cfg['extractEllips']

          );
          $pos = $wordLeft + $wordLength;

          $wordLeft = $mbStrpos($mbStrtolower($text), $mbStrtolower($searchTerm),$pos);    
          $iExtr++;
        }
      }

      // sort the extracts by left and right position  
      $nbExtr = count($extracts); // number of relevant extracts founded
      if ($nbExtr > 1){
        for($i=0;$i<$nbExtr;$i++) {
          $lft[$i] = $extracts[$i]['left'];
          $rght[$i] = $extracts[$i]['right'];
        }         
        array_multisort($lft, SORT_ASC, $rght, SORT_ASC, $extracts);    

        // find the closest space character on the left & rigth side (west side story !!)
        for($i=0;$i<$nbExtr;$i++) {
          // on the left
          $begin = $mbSubstr($text,0,$extracts[$i]['left']);
          if ($begin != '') $extracts[$i]['left'] = (int) $mbStrrpos($begin,' ');
          // on the right
          $end = $mbSubstr($text,$extracts[$i]['right']+1,$textLength - $extracts[$i]['right']);
          if ($end != '') $dr = (int) $mbStrpos($end,' ');
          if (is_int($dr)) $extracts[$i]['right']  += $dr + 1;
        }

        // avoid the extract intersections
        if ($extracts[0]['left'] == 0) $extracts[0]['etcLeft'] = '';
        for($i=1;$i<$nbExtr;$i++){
          // intersect on the left
          if ($extracts[$i]['left'] < $extracts[$i-1]['wordRight']) {
            $extracts[$i-1]['right'] = $extracts[$i-1]['wordRight'];
            $extracts[$i]['left'] = $extracts[$i-1]['right'] + 1;
            $extracts[$i-1]['etcRight'] = $extracts[$i]['etcLeft'] = '';
          }
          else if ($extracts[$i]['left'] < $extracts[$i-1]['right']) {
            $extracts[$i-1]['right'] = $extracts[$i]['left'];
            $extracts[$i-1]['etcRight'] = $extracts[$i]['etcLeft'] = '';         
          }
        }
      }

      // build the final extract
      for($i=0;$i<$nbExtr;$i++) {
        $finalExtract .= $extracts[$i]['etcLeft'] . $mbSubstr($text,$extracts[$i]['left'],$extracts[$i]['right'] - $extracts[$i]['left']+1) . $extracts[$i]['etcRight'] . $this->cfg['extractSeparator'];    
      }
      $finalExtract = $mbSubstr($finalExtract,0,$mbStrlen($finalExtract)-$mbStrlen($this->cfg['extractSeparator']));

      // highligth the search terms if needed
      if ($this->cfg['highlightResult']){
        $count = 1;
        foreach($searchList as $searchTerm){
          $finalExtract = preg_replace( '/' . preg_quote( $searchTerm, '/' ) . '/' .$this->pcreModifier, '<span class="'.$highlightClass.' '.$highlightClass.$count.'">\0</span>', $finalExtract);
          $class .= ' '.$highlightClass.$count;
          $count++;
        }
      }
    }  
    return $finalExtract;
  }
  
/**
 *  getSearchWords : depending advSearch, get the search words
 */
  function getSearchWords($search, $advSearch){

    $searchList = array();
    if (($advSearch == 'nowords') || (!$search)) return $searchList; 

    if ($advSearch == 'exactphrase') $searchList[] = $search;
    else $searchList = explode(' ',$search);

    return $searchList;
  }

/**
 *  initClassVariables : initialize the required Class values
 */
  function initClassVariables($search, $advSearch){
    // prefix for results
    if ($this->cfg['ajaxSearch']) $this->asClass['prefix'] = PREFIX_AJAX_RESULT_CLASS;
    else $this->asClass['prefix'] = PREFIX_RESULT_CLASS;
    
    // highlight Class depending of search words
    $this->asClass['highlight'] = $this->getHighlightClass($search, $advSearch );
  }
  
/**
 *  getHighlightClass : depending the search words, set up the highlight classes
 */
  function getHighlightClass($search, $advSearch){
    $hClass = '';
    $searchList = $this->getSearchWords($search, $advSearch);
    if (count($searchList)){
      $hClass = HIGHLIGHT_CLASS;
      $count = 1;
      foreach($searchList as $searchTerm) {
        $hClass .= ' ' . HIGHLIGHT_CLASS . $count;
        $count++;
      }
    }
    return $hClass;
  }

/**
 *  validListIDs : check the validity of a value separated list of Ids
 */
  function validListIDs($IDs){
    if (preg_match('/^([0-9]+,)*[0-9]+$/',$IDs) == 0) return false;
    return true;
  }

/**
 *  validListTVs : check the validity of a value separated list of TVs name
 */
  function validListTvs($listTvs){

    global $modx;
    
    $tvs = explode(',',$listTvs);
    $checked_tvs = array();
    
  	//-- get tmplvar id to check if the TV exists
		$tplName = $modx->getFullTableName('site_tmplvars');
    foreach($tvs as $tv){
  		$tplRS = $modx->db->select('id', $tplName, 'name="' . $tv . '"');
  		if ($modx->db->getRecordCount($tplRS)) $checked_tvs[] = $tv;
    }

    $list = '';    
    $nbtv = count($checked_tvs);
    if ($nbtv >0) {
      $list = "'{$checked_tvs[0]}'";
      for($i=1;$i<$nbtv;$i++) $list .= ",'{$checked_tvs[$i]}'";
      return $list;
    }
    else return false;
  }

/**
 *  getListIDs : with basic filtering get the IDs where to search
 */
  function getListIDs() {

    global $modx;

    $listIDs = $this->cfg['listIDs'];
    $idType = $this->cfg['idType'];
    $depth = $this->cfg['depth'];
    
    if (!strlen($listIDs)) return $listIDs;     // listIDs ='' means all documents

    // get the listIDs from the parents or documents parameter
    switch($idType) {
      case "parents":
        $arrayIDs = explode(",",$listIDs);
        $listIDs = implode(',',$this->getChildIDs($arrayIDs, $depth));
      break;

      case "documents":
      break;
    }
    
    // exclude the unwanted IDs with the filter parameter
    if ($this->cfg['filter']){
      // interpret possible searchString metacharacter before to use
      $filter = $this->interpretFilterMetaCharacters();
      // build the filter list
      $parsedFilters = $this->parseFilters($filter);

      // get the rows linked to the unfiltered listIDs
      $this->listIDs = $listIDs;
      if ($this->initSearchContext()) {
        $select = $this->getSubSelect(); // do the subselect with listIDs
        $rs = $modx->db->query($select);
        while ($row = mysql_fetch_assoc($rs)) {
          $rows[] = $row;
        }
        // filter the listIDs
        if (!class_exists('asFilter')) include_once AS_PATH . "classes/filter.class.inc.php";
      	$filter = new asFilter();
  	    $rows = $filter->execute($rows,$parsedFilters);
  	    if (count($rows) > 0) {
          foreach ($rows as $key => $value) {
           $filteredIDs[] = $value[$this->main['id']];
          }
          $listIDs = implode(',',$filteredIDs);       
        }
      }
    }

    return $listIDs;
  }

/**
 *  interpretFilterMetaCharacters : interpret the possible metacharacter of the filter order
 */
  function interpretFilterMetaCharacters() {
    $filter = $this->cfg['filter'];
    
    $filter = preg_replace('/#/i',$this->searchString,$filter);
    return $filter;
  }

/**
 *  getChildIDs : Get the IDs ready to be processed
 *  From Ditto snippet by Mark Kaplan
 */
  function getChildIDs($IDs, $depth) {
    global $modx;

    $depth = intval($depth);
    $kids = array();
    $docIDs = array();

    if ($depth == 0 && $IDs[0] == 0 && count($IDs) == 1) {
      foreach ($modx->documentMap as $null => $document) {
        foreach ($document as $parent => $id) {
          $kids[] = $id;
        }
      }
      return $kids;
    } else if ($depth == 0) {
      $depth = 10000;
      // Impliment unlimited depth...
    }

    foreach ($modx->documentMap as $null => $document) {
      foreach ($document as $parent => $id) {
        $kids[$parent][] = $id;
      }
    }

    foreach ($IDs AS $seed) {
      if (!empty($kids[intval($seed)])) {
        $docIDs = array_merge($docIDs,$kids[intval($seed)]);
        unset($kids[intval($seed)]);
      }
    }
    $depth--;

    while($depth != 0) {
      $valid = $docIDs;
      foreach ($docIDs as $child=>$id) {
        if (!empty($kids[intval($id)])) {
          $docIDs = array_merge($docIDs,$kids[intval($id)]);
          unset($kids[intval($id)]);
        }
      }
      $depth--;
      if ($valid == $docIDs) $depth = 0;
    }

    return array_unique($docIDs);
  }

/**
 *  parseFilters : Split up the filters into an array and add the required fields to the fields array
 *  From Ditto snippet by Mark Kaplan
 */
  function parseFilters($filter=false,$cFilters=false,$globalDelimiter='|',$localDelimiter=',') {
    $parsedFilters = array("basic"=>array(),"custom"=>array());
    $filters = explode($globalDelimiter, $filter);
    if ($filter && count($filters) > 0) {
      foreach ($filters AS $filter) {
        if (!empty($filter)) {
          $filterArray = explode($localDelimiter, $filter);
          $source = $filterArray[0];
          $value = $filterArray[1];
          $mode = (isset ($filterArray[2])) ? $filterArray[2] : 1;
          $parsedFilters["basic"][] = array("source"=>$source,"value"=>$value,"mode"=>$mode);
        }
      }
    }
    if ($cFilters) {
      foreach ($cFilters as $name=>$value) {
        if (!empty($name) && !empty($value)) {
          $parsedFilters["custom"][$name] = $value[1];          
        }
      }
    }
    return $parsedFilters;
  }
  
/**
 *  cleanIDs : clean IDs list of unwanted characters
 *  From Ditto snippet by Mark Kaplan
 */
  function cleanIDs($IDs) {
    //Define the pattern to search for
    $pattern = array (
      '`(,)+`', //Multiple commas
      '`^(,)`', //Comma on first position
      '`(,)$`' //Comma on last position
    );

    //Define replacement parameters
    $replace = array (
      ',',
      '',
      ''
    );

    //Clean startID (all chars except commas and numbers are removed)
    $IDs = preg_replace($pattern, $replace, $IDs);

    return $IDs;
  }

/**
 *  setResultLink : set the ResultLink PHx
 */
  function setResultLink($row){

    global $modx;

    $id = $this->main['id']; 
    $hClass = $this->asClass['highlight'];
    
    if ($this->cfg['highlightResult'] && $hClass) {
      $resultLink = $modx->makeUrl($row[$id],'','searched='.urlencode($this->searchString).'&amp;advsearch='.urlencode($this->advSearch).'&amp;highlight='.urlencode($hClass));
    } else {
      $resultLink = $modx->makeUrl($row[$id]);
    }

    $this->varResult['resultClass'] = $this->asClass['prefix'];
    $this->varResult['resultLinkClass'] = $this->asClass['prefix'].'Link';
    $this->varResult['resultLink'] = $resultLink;
  }  

/**
 *  addExtractToRow : add the extract result to each row
 */
  function addExtractToRow($row){

    $text = '';
    $nbExtr = 0;

    if ($this->extractNb) {
      // From row get all the fields allowed to use for extract
      foreach($this->extractFields as $f) if($row[$f]) $text .= $row[$f] . ' ';

      // clean the text if needed
      $text = $this->cleanText($text,$this->cfg['stripOutput']);

      // get the extract
      $text = $this->getExtract($text,$this->searchString,$this->advSearch,HIGHLIGHT_CLASS,$nbExtr);

    }
    $row['extract'] = $text; // set the concatened extracts    
    return $row;
  }

/**
 *  setResultExtract : set the ResultExtract PHx
 */  
  function setResultExtract($row){
    if ($this->extractNb) {
      $this->varResult['extractShow'] = 1;
      $this->varResult['extractClass'] = $this->asClass['prefix'] . 'Extract';
      $this->varResult['extract'] = $row['extract'];
    } else {
      $this->varResult['extractShow'] = 0;
    }
  }

/**
 *  setResultBreadcrumbs : set the ResultBreadcrumbs PHx
 */  
  function setResultBreadcrumbs($row){
    global $modx;
    
    if ($this->cfg['breadcrumbs']) {
      if ($this->breadcrumbs['type'] == 'function'){
        // Breadcrumbs as a custom function
        $bc = $this->breadcrumbs['name']($this->main,$row,$this->breadcrumbs['params']);        
      }
      elseif ($this->withContent) {
        // Breadcrumb as a snippet with the content as main table
        // save current document information
        $current_id = $modx->documentObject['id'];
        $current_parent = $modx->documentObject['parent'];
        $current_pagetitle = $modx->documentObject['pagetitle'];
        $current_longtitle = $modx->documentObject['longtitle'];
        $current_menutitle = $modx->documentObject['menutitle'];
        $current_description = $modx->documentObject['description'];
        // replace it by the document found
        $id = $this->main['id'];
        $modx->documentObject['id'] = $row[$id];
        $parentIds = $modx->getParentIds($row[$id],1);
        $pid= array_pop($parentIds);
        $modx->documentObject['parent'] = $pid;
        $modx->documentObject['pagetitle'] = $row['pagetitle'];
        $modx->documentObject['longtitle'] = $row['longtitle'];
        $modx->documentObject['menutitle'] = $row['menutitle'];
        $modx->documentObject['description'] = $row['description'];
        // run the Breadcrumbs snippet  
        $bc = $modx->runSnippet($this->breadcrumbs['name'],$this->breadcrumbs['params']);
        // restore the current document
        $modx->documentObject['id'] = $current_id;
        $modx->documentObject['parent'] = $current_parent;   
        $modx->documentObject['pagetitle'] = $current_pagetitle;
        $modx->documentObject['longtitle'] = $current_longtitle;
        $modx->documentObject['menutitle'] = $current_menutitle;
        $modx->documentObject['description'] = $current_description;        
      }
      // display result
      $this->varResult['breadcrumbsShow'] = 1;
      $this->varResult['breadcrumbsClass'] = $this->asClass['prefix'] . 'Breadcrumbs';
      $this->varResult['breadcrumbs'] = $bc;
    } 
    else {
      $this->varResult['breadcrumbsShow'] = 0;
    }
  }

/**
 *  setResultTvPhx : set the resultTvPhx PHx
 */  
  function setResultTvPhx($row){
    global $modx;

    if ($this->cfg['tvPhx']) {     
        foreach($this->tvphx as $tbv){
        $alias = $tbv[0];
        $display = $tbv[1];
        $id = $row[$this->main['id']];  // id of the main table row
        // get from row the "id" of tv
        $nbj = count($this->joined);
        for($j=0;$j<$nbj;$j++){
          if ($this->joined[$j]['tb_alias'] == $alias) break;
        }
        if ($j < $nbj){
          $main = $this->joined[$j]['phx_alias'];  // field name for the id of tv
          // get the main from the row
          if (isset($row[$main]) && ($row[$main]!= NULL)) {
            $listMain = explode(',',$row[$main]); // list ids of TV
            $phx = explode(',',$this->joined[$j]['phx']);
            $fname = $phx[0];  // field name of Tv name field
            $fvalue = $phx[1]; // field name of TV value field
            
            // set Phx for each id of tv
            foreach($listMain as $main){
              $output = $display($main,$id,$fname,$fvalue,$name); // render the variable outputs
              if ($output) {
                $this->varResult[$name.'Show'] = 1;
                $this->varResult[$name.'Class'] = $this->asClass['prefix'] . ucfirst($name);
                $this->varResult[$name] = $output;
              }
              else {
                $this->varResult[$name.'Show'] = 0;              
              }
            }
          }
        }
      }
    }
  }

/**
 *  setResultSearchable : set fields like id, displayed, date, rank as PHx
 */ 
  function setResultSearchable($row){

    // set Phx for the "id" of the main table
    $id = $this->main['id'];    
    $this->varResult[$id] = $row[$id];

    // set Phx for date fields of the main table
    if (isset($this->main['date'])) foreach($this->main['date'] as $field) $this->setPhxField($field,$row,'date');

    // set Phx for displayed fields of the main table
    foreach($this->main['displayed'] as $field) $this->setPhxField($field,$row,'string');

    // set Phx for displayed fields from joined tables.
    if (isset($this->joined)) foreach($this->joined as $joined){
      foreach($joined['displayed'] as $field) {
        $f = $joined['tb_alias'] . '_' . $field;
        $this->setPhxField($f,$row,'string');
      }
    }
    
    // if rank requested publish the rank value
    if ($this->cfg['rank']) $this->setPhxField('rank',$row,'int');
  }

/**
 *  setPhxField : set a field as PHx
 */ 
  function setPhxField($field,$row,$type='string'){

    $showField = $field . "Show";    // boolean show
    $classField = $field . "Class";  // name of class
    $contentField = $row[$field];
    if ($contentField != '') {
      $this->varResult[$showField] = 1;
      $this->varResult[$classField] = $this->asClass['prefix'] . ucfirst($field);

      if ($type == 'string'){
        $this->varResult[$field] = $this->cleanText($contentField,$this->cfg['stripOutput']);
      }
      elseif ($type =='date'){
        $this->varResult[$field] = date($this->cfg['formatDate'],$contentField);      
      }
      else {
        $this->varResult[$field] = $contentField;
      }
    }
    else {
        $this->varResult[$showField] = 0;
    }
  }
  
/**
 *  setDebug level
 */
  function setDebug(){
     
    $dbg = (int) $this->cfg['debug'];
    if ($dgb == 2 || $dbg == 1) $this->dbg = $dbg;
    else $this->dbg = 0; 
    if ($this->dbg) $this->dbgFd = fopen(AS_DBGFILE,'a+');
    return;
  }
  
/**
 *  set Debug log record
 */
  function dbgLog($lab,$val){

    $when = date('[j-M-y h:i:s]  ');  
    if (is_array($val)) {
      foreach($val as $key => $value) fwrite($this->dbgFd,$when.$key." = ".$value."\n\n");
    }
    else {
      fwrite($this->dbgFd,$when.$lab.$val."\n\n");
    }
    return;
  }

}
  
//
// =============================================================================
//
/**
 *  displayTV : render TV output.
 *  used by tvPhx parameter for tv
 *    
 */
  function displayTV($id,$docid,$fname,$fvalue,& $name){
    global $modx;

    $output = '';
    $basepath= $modx->config["base_path"] . "manager/includes";
    include_once $basepath . "/tmplvars.format.inc.php";
    include_once $basepath . "/tmplvars.commands.inc.php";

    $tb1 = $modx->getFullTableName("site_tmplvar_contentvalues");
    $tb2 = $modx->getFullTableName("site_tmplvars");
    $select = "SELECT stv.name,stc.tmplvarid,stc.contentid,stv.type,stv.display,stv.display_params,stc.value";
    $select .= " FROM ".$tb1." stc LEFT JOIN ".$tb2." stv ON stv.id=stc.tmplvarid ";
    $select .= " WHERE stc.id='".$id."' AND stc.contentid='".$docid."' ";
    $rs = $modx->db->query($select);

    if (count($rs)== 1) {
      $row = $modx->fetchRow($rs);
      $name = $row['name'];
      $output = getTVDisplayFormat($row['name'], $row['value'], $row['display'], $row['display_params'], $row['type'], $docid);
    }
    return $output;
  }
  
//
// =============================================================================
//
// Below functions could be used in end-user fonctions

/**
 *  stripTags : Remove modx sensitive tags
 */
function stripTags($text){
  // Regular expressions of things to remove from search string
  $modRegExArray[] = '~\[\[(.*?)\]\]~';   // [[snippets]]
  $modRegExArray[] = '~\[!(.*?)!\]~';     // [!noCacheSnippets!]
  $modRegExArray[] = '!\[\~(.*?)\~\]!is'; // [~links~]
  $modRegExArray[] = '~\[\((.*?)\)\]~';   // [(settings)]
  $modRegExArray[] = '~{{(.*?)}}~';       // {{chunks}}
  $modRegExArray[] = '~\[\*(.*?)\*\]~';   // [*attributes*]
  $modRegExArray[] = '~\[\+(.*?)\+\]~';   // [+phx+]

  // Remove modx sensitive tags
  foreach ($modRegExArray as $mReg)$text = preg_replace($mReg,'',$text);
  return $text;
}

/**
 *  stripHtml : Remove HTML sensitive tags
 */
function stripHtml($text){
  return strip_tags($text);
}

/**
 *  stripHtmlExceptImage : Remove HTML sensitive tags except image tag
 */
function stripHtmlExceptImage($text){
  $text = strip_tags($text,'<img>');
  return $text;
}

/**
 *  stripJscript : Remove jscript
 */
function stripJscripts($text){
  // strips jscripts
  $text = preg_replace( "'<script[^>]*>.*?</script>'si", "", $text );
  $text = preg_replace( '/{.+?}/', '', $text);
  return $text;
}

/**
 *  stripLineBreaking : replace line breaking tags with whitespace
 */
function stripLineBreaking($text){
  // replace line breaking tags with whitespace
  $text = preg_replace( "'<(br[^/>]*?/|hr[^/>]*?/|/(div|h[1-6]|li|p|td))>'si", ' ', $text );
  return $text;
}

?>