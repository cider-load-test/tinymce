<?php
/*
 * Title: AjaxSearch Class
 * Purpose:
 *    The AjaxSearch class contains all variables and functions 
 *    used to display search form and results 
 *
 *    Version: 1.8.1  - Coroico (coroico@wangba.fr) 
 *     
 *    Jason Coward (opengeek - jason@opengeek.com)
 *    Kyle Jaebker (kylej - kjaebker@muddydogpaws.com)
 *    Ryan Thrash (rthrash - ryan@vertexworks.com) 
 *
 * Updated: 02/10/2008 - whereSearch, withTvs, new sql query, debug 
 * Updated: 24/07/2008 - Added rank, order & filter, breadcrumbs, tvPhx, cleardefault parameters    
 * Updated: O2/07/2008 - New extract algorithm, search in tv, jot and maxygallery
 * Updated: O2/07/2008 - Added Phx templating & chunk parameters
 * Updated: 06/03/2008 - Added Hidden from menu and advanced search
 * Updated: 01/02/2008 - Added several fixes and a security patch
 * Updated: 17/11/2007 - Added IDs document selection
 * Updated: 06/11/2007 - Encoding troubles corrected
 * 
 * Updated: 01/22/07 - Added templating/language/mootools support
 * Updated: 01/03/07 - Added fixes/updates from forum
 * Updated: 09/18/06 - Added user permissions to searching
 * Updated: 03/20/06 - All variables are set in the main snippet & snippet call   
*/

define('MIN_CHARS',3);     // minimum number of characters admitted in case of a wrong &minChars parameter
define('EXTRACT_MIN',50);  // minimum length of extract
define('EXTRACT_MAX',800); // maximum length of extract

define('FORM_ID','id="ajaxSearch_form" ');    // ajaxSearch form id
define('OUTPUT_ID','<div id="ajaxSearch_output"></div>'); // output id

// some usefull class definition
define('HIGHLIGHT_CLASS','ajaxSearch_highlight');             // token used for highlighting
define('PREFIX_AJAX_RESULT_CLASS','AS_ajax_result');          // ajax result prefix class
define('PREFIX_RESULT_CLASS','ajaxSearch_result');            // non-ajax result prefix class
define('INTROFAILURE_CLASS','AS_ajax_resultsIntroFailure');   // intro failure class


include_once dirname(__FILE__)."/search.class.inc.php";

class AjaxSearch extends Search{

// public
  var $cfg = array();   // configuration parameters

// private
  var $language;        // language name
  var $_lang;           // language labels
  
  var $searchString;    // term searched
  var $advSearch;       // advanced search option
  var $dbCharset;       // database charset
  var $pcreModifier;    // PCRE modifier
  var $isPhp5;          // Php version >= 5.0.0
 
  var $searchFormId;    // ajaxSearch form id
  var $offset;          // paging offset
  var $withContent;     // content as main table
  var $listIDs;         // list of Id allowed
    
  var $breadcrumbs = array();     // breadcrumbs infos
  var $tvphx = array();           // tvPhx infos

  var $extractNb;                 // maximum number of extracts per document
  var $extractFields = array();   // fields to use for extraction

  // Search context  
  var $main = array();       // main content table
  var $joined = array();     // joined tables

  // chunkie variables
  var $chkResults;
  var $varResults = array();
  var $chkResult;
  var $varResult = array();
  var $tplRes; 
  var $chkLayout;
  var $varLayout = array();

  // class variables
  var $asClass = array();

  // search results
  var $searchResults = array();

  
  function AjaxSearch($cfg) {
  
    // load configuration snippet options
    $this->cfg = $cfg;
  }

/**
 * run : run the search
 */
  function run(){

    global $modx;

    $this->setDebug();    // set debug levels
    
    if ($this->dbg) {
      $this->asDebug->dbgLog($this->cfg,"AjaxSearch - User configuration - Before parameter checking");   // user parameters
      $this->asDebug->dbgLog($this->readConfigFile(),"AjaxSearch - Configuration file");                  // configuration file
    }
    
    $this->loadLang();    // load language labels
    
    if (!$this->checkDatabaseCharset($msg)) return $msg;  // Check database charset

    $this->checkParams();   // check parameters and init some variables

    $validSearch = $this->validSearchString($msg);  // Initialize search string & advanced search mode

    $searchAction = $this->setResultsPage();    // set searchAction
    $this->setClearDefault();                   // set clear Default js function
    $this->setAjaxSearchHeader();               // set header

    $this->initChkVariables(); // initialize chunkie variables

    // set input form if needed
    $this->setInputForm($validSearch,$searchAction);

    if ($this->cfg['AS_showResults']) {
      if ($validSearch) {
        // ------------------------------------------- non-ajax mode. Display of results
         $results = '';

        $this->initClassVariables(); // initialize class variables
      
        // get the IDs
        $this->getListIDs();

        if ($this->dbg) $this->asDebug->dbgLog($this->cfg,"AjaxSearchPopup - User configuration - Before doSearch");   // user parameters

        // Do the search and get the results
        $rs = $this->doSearch();

        $nbrs = $modx->recordCount($rs);
        if ($nbrs > 0) {

          $this->setResultsPagination($nbrs);  // set pagination if needed

          $this->initExtractVariables(); // initialize extractNb and extractFields

          // output results in searchResults array
          $useLimit = ($this->cfg['grabMax'] > 0)? $this->offset + $this->cfg['grabMax'] : $nbrs;
          for ($y = $this->offset; ($y < $useLimit) && ($y < $nbrs); $y++) {
            $moveToRow = mysql_data_seek($rs,$y);
            $row = $modx->db->getRow($rs);
            $result = $this->addExtractToRow($row);
            $this->searchResults[] = $result; 
            if (($this->dbg)%2 == 0) $this->asDebug->dbgLog($result,"AjaxSearchPopup - Output result before ranking");   // search results
          }
          
          // sort search results by rank if needed
          $this->sortResultsByRank($this->searchString,$this->advSearch); 

          $nbResults = count($this->searchResults);
          for($i=0;$i<$nbResults;$i++){
            $this->chkResult = new asChunkie($this->tplRes);
            $this->varResult = array();
          
            // set result link as PHx
            $this->setResultLink($this->searchResults[$i]);

            // set result extract as PHx
            $this->setResultExtract($this->searchResults[$i]);

            // set result breadcrumbs as PHx
            $this->setResultBreadcrumbs($this->searchResults[$i]);

            // set result TvPhx as PHx
            $this->setResultTvPhx($this->searchResults[$i]);
                        
            // set result fields like id, searchable, date, rank as PHx
            $this->setResultSearchable($this->searchResults[$i]);

            // parse the template and output the result
            $this->chkResult->AddVar("as", $this->varResult); 
            $results .= $this->chkResult->Render()."\n";
            unset($this->varResult);
            unset($this->chkResult);
          }
          // output results
          $this->varResults['noResults'] = 0;
          $this->varResults['listResults'] = $results;
        } else {
          // no results found
          $this->varResults['noResults'] = 1;
          $this->varResults['noResultClass'] = 'AS_ajax_resultsIntroFailure';
          $this->varResults['noResultText'] = $this->_lang['as_resultsIntroFailure'];
        }

        $this->chkResults->AddVar("as", $this->varResults);
        $this->varLayout['showResults'] = 1;
        $this->varLayout['results'] = $this->chkResults->Render()."\n";
        unset($this->varResults);
        unset($this->chkResults);
      } // end if validSearch

      else if (!$validSearch && isset($_POST['sub'])) {
        // message to show if search was performed but for something invalid
        $this->varResults['noResults'] = 1;
        $this->varResults['noResultClass'] = 'AS_ajax_resultsIntroFailure';
        $this->varResults['noResultText'] = $msg;

        $this->chkResults->AddVar("as", $this->varResults);
        $this->varLayout['showResults'] = 1;
        $this->varLayout['results'] = $this->chkResults->Render()."\n";
        unset($this->varResults);
        unset($this->chkResults);
      }

      else { // init the input field
        $this->varLayout['showResults'] = 0;
        $this->varLayout['showIntro'] = 1;
        $this->varLayout['introMessage'] = $this->_lang['as_introMessage'];
      } // end if not validSearch
    } // end if showResults

    if ($this->cfg['ajaxSearch']) {
      $this->varLayout['showIntro'] = 0;
      $this->varLayout['showResults'] = 1;
      $this->varLayout['results'] = OUTPUT_ID;
    }
    $this->chkLayout->AddVar("as", $this->varLayout);
    $output = $this->chkLayout->Render()."\n";
    unset($this->varLayout);
    unset($this->chkLayout);

    return $output;
  }

/**
 * checkDatabaseCharset : check the database charset
 * 
 * @param string $msgErr error message
 * @return validity (true/false)    
 */
  function checkDatabaseCharset(& $msgErr){
  
    $valid = true;
    $msgErr = '';
    $this->setDatabaseCharset();  // initialize the database charset

    // check if the mbstring extension is required and loaded
    if ($this->dbCharset == 'utf8' && !extension_loaded('mbstring')) {
        $msgErr = "<br /><h3>Error: php_mbstring extension required</h3><br />";
        $valid = false;
    }
    return $valid;
  }

/**
 * Check user params 
 */
  function checkParams(){

    global $modx;

    // Check some input parameters and initialize some others
    if ($this->cfg['minChars'] < MIN_CHARS) $this->cfg['minChars'] = MIN_CHARS;

    if ($this->cfg['extractLength'] < EXTRACT_MIN) $this->cfg['extractLength'] = EXTRACT_MIN;
    if ($this->cfg['extractLength'] > EXTRACT_MAX) $this->cfg['extractLength'] = EXTRACT_MAX;

    if (($this->cfg['hideMenu'] != 0) && ($this->cfg['hideMenu'] != 1) && ($this->cfg['hideMenu'] != 2)) $this->cfg['hideMenu'] = 2;

    // check the number of extract and the fields to use with
    $extr = explode(':',$this->cfg['extract']);
    if (($extr[0] == '') || (!is_numeric($extr[0]))) $extr[0] = 0;
    if (($extr[1] == '') || (is_numeric($extr[1]))) $extr[1] = 'content';
    $this->extractNb = $extr[0];
    $this->extractFields = explode(',',$extr[1]);
    $this->cfg['extract'] = $extr[0] . ":" . $extr[1];

    //check for paging offset
    $this->offset = (isset($_GET['AS_offset'])) ? $_GET['AS_offset'] : 0;

    if ($this->cfg['ajaxSearch']) {
      // check opacity parameter
      if ($this->cfg['opacity'] < 0.) $this->cfg['opacity'] = 0.;
      if ($this->cfg['opacity'] > 1.) $this->cfg['opacity'] = 1.;

      $this->searchFormId = FORM_ID;
    }
    else {
      $this->searchFormId = '';    
    }

    // Initialize ID group where to look for
    $listIDs = ($this->cfg['idType'] == "parents") ? $this->cfg['parents'] : $this->cfg['documents'];
    $this->cfg['listIDs'] = $this->cleanIDs($listIDs);

    // Initialize document group
    $this->cfg['docgrp'] = '';
    if ($docgrp = $modx->getUserDocGroups()) {
      $this->cfg['docgrp'] = implode(",", $docgrp);
    }

    // Initialize tvPhx
    $this->initTvPhx();

    // Initialize breadcrumbs
    $this->initBreadcrumbs();
    
  }

/**
 * validSearchString : valid the input search term
 */
  function validSearchString(& $msgErr){

    $valid = false;
    $msgErr = '';
    $this->searchString = '';
    $this->advSearch = $this->cfg['advSearch']; // init from snippet call

    if ( isset($_POST['search']) || isset($_GET['AS_search']) || isset($_GET['FSF_search'])) {
      // Prefer post to get
      if (isset($_POST['search'])) {
        $this->searchString = $_POST['search'];
        if (is_array($this->searchString)) $this->searchString = implode(' ',array_values($this->searchString));   // use of searchWordList 
      } elseif (isset($_GET['AS_search'])) {
        $this->searchString = urldecode($_GET['AS_search']);
      } else {
        // Code to make tag cloud snippet work with this search
        $this->searchString = $_GET['FSF_search'];
      }
      if (isset($_POST['advSearch'])) $this->advSearch = $_POST['advSearch'];
      else if (isset($_GET['advsearch'])) $this->advSearch = $_GET['advsearch'];
    }

    if (mb_strlen($this->searchString) >= $this->cfg['minChars']){
      //Clean the searchString
      $valid = $this->stripSearchString($this->searchString,$this->cfg['stripInput'],$this->advSearch);
      if (!$valid) $msgErr = $this->_lang['as_resultsIntroFailure'];
    }
    else {
      $valid = false;
      $msgErr = sprintf($this->_lang['as_minChars'],$this->cfg['minChars']);
    }
    return $valid;
  }

/**
 * setClearDefault : set the clear default js function
 */
  function setClearDefault(){
    global $modx;
    if ($this->cfg['clearDefault']) {
      //Adding the clearDefault javascript library
      $modx->regClientStartupScript($this->cfg['jsClearDefault']);
    }
  }

/**
 * setAjaxSearchHeader : set the ajax header with the appropriate variables
 */
  function setAjaxSearchHeader(){

    global $modx;

    if ($this->cfg['ajaxSearch']) {
      //Adding the javascript libraries & variables to the header
      if ($this->cfg['jScript'] == 'jquery') {
        if ($this->cfg['addJscript']) $modx->regClientStartupScript($this->cfg['jsJquery']);
        $jsInclude = AS_SPATH.'js/ajaxSearch-jquery.js';
      }
      else {
        if ($this->cfg['addJscript']) $modx->regClientStartupScript($this->cfg['jsMootools']);
        $jsInclude = AS_SPATH.'js/ajaxSearch.js';
      }
      $modx->regClientStartupScript($jsInclude);

      $jsVars =<<<EOD
<!-- start AjaxSearch header -->
<script type="text/javascript">
//<![CDATA[      
config = '{$this->cfg['config']}';
as_version = '{$this->cfg['version']}';
debug = {$this->cfg['debug']};
as_language = '{$this->cfg['language']}';
opacity = {$this->cfg['opacity']};
advSearch = '{$this->advSearch}';
whereSearch = '{$this->cfg['whereSearch']}';
withTvs = '{$this->cfg['withTvs']}';
order = '{$this->cfg['order']}';
rank = '{$this->cfg['rank']}';
minChars = {$this->cfg['minChars']};
ajaxMax = {$this->cfg['ajaxMax']};
showMoreResults = {$this->cfg['showMoreResults']};
moreResultsPage = {$this->cfg['moreResultsPage']};
extract = '{$this->cfg['extract']}';
extractLength = {$this->cfg['extractLength']};
extractEllips = '{$this->cfg['extractEllips']}';
extractSeparator = '{$this->cfg['extractSeparator']}';
formatDate = '{$this->cfg['formatDate']}';
liveSearch = {$this->cfg['ajaxSearchType']};
docgrp = '{$this->cfg['docgrp']}';
listIDs = '{$this->cfg['listIDs']}';
idType = '{$this->cfg['idType']}';
depth = {$this->cfg['depth']};
highlightResult = {$this->cfg['highlightResult']};
hideMenu = {$this->cfg['hideMenu']};
hideLink = {$this->cfg['hideLink']};
as_filter = '{$this->cfg['filter']}';
tplAjaxResult = '{$this->cfg['tplAjaxResult']}';
tplAjaxResults = '{$this->cfg['tplAjaxResults']}';
stripInput = '{$this->cfg['stripInput']}';
stripOutput = '{$this->cfg['stripOutput']}';
breadcrumbs = '{$this->cfg['breadcrumbs']}';
tvPhx = '{$this->cfg['tvPhx']}';
//]]>
</script>
<!-- end AjaxSearch header -->
EOD;

      $modx->regClientStartupScript($jsVars);
    }
  }

/**
 * initChkVariables : Initialize the chunkie variables used
 */
  function initChkVariables(){

    // include chunkie class and read templates once
    if (!class_exists('asChunkie')) include_once AS_PATH . "classes/chunkie.class.inc.php";
    $tplResults = $this->cfg['tplResults'];
    if ($tplResults == '') $tplResults = "@FILE:" . AS_SPATH . 'templates/results.tpl.html';        
    $this->chkResults = new asChunkie($tplResults);       // results outer

    $tplResult = $this->cfg['tplResult'];
    if ($tplResult == '') $tplResult = "@FILE:" . AS_SPATH . 'templates/result.tpl.html';        
    $this->chkResult = new asChunkie($tplResult);     // result
    $this->tplRes = "@CODE:" . $this->chkResult->template;

    $this->chkLayout = new asChunkie($this->cfg['tplLayout']);   // layout
  }

/**
 * setResultsPagination : Set the pagination of results
 */
  function setResultsPagination($nbrs){

    global $modx;

    $grabMax = $this->cfg['grabMax'];
    if ($grabMax > 0){

      $chkPaging = new asChunkie($this->cfg['tplPaging']);   // paging
      $tplPgg = "@CODE:" . $chkPaging->template;
      unset($chkPaging);

      $numResultPages = ceil($nbrs/$grabMax);
      $resultPagingText = ($nbrs>$grabMax) ? $this->_lang['as_paginationTextMultiplePages'] : $this->_lang['as_paginationTextSinglePage'] ;
      $resultPageLinkNumber = 1;
      $resultPageLinks = '';

      for ( $nrp = 0; $nrp < $nbrs && $nbrs > $grabMax; $nrp += $grabMax ){
        $chkPaging = new asChunkie($tplPgg); 
        $varLink = array();
        if ($this->offset == ($resultPageLinkNumber-1)*$grabMax){
          $varLink['tpl'] = 'pagingLinksCurrent';
        } else {
          $varLink['tpl'] = 'pagingLinks';
          $varLink['pagingLink'] = $modx->makeUrl($modx->documentIdentifier,'','AS_offset='.$nrp.'&AS_search='.urlencode($this->searchString).'&amp;advsearch='.urlencode($this->advSearch));
        }
        $varLink['pagingSeparator'] = ($nrp + $grabMax < $nbrs) ? $pageLinkSeparator : '' ;          
        $varLink['pagingText'] = $resultPageLinkNumber;

        $resultPageLinkNumber++;

        // parse the template and output the paging link
        $chkPaging->AddVar("as", $varLink); 
        $resultPageLinks .= $chkPaging->Render()."\n";
        unset($varLink);
        unset($chkPaging);
      }

      $varPaging = array();
      $varPaging['tpl'] = 'paging';
      $varPaging['pagingText'] = $resultPagingText;
      $varPaging['pagingLinks'] = $resultPageLinks;

      // parse the template and output the paging links
      $chkPaging = new asChunkie($tplPgg);
      $chkPaging->AddVar("as", $varPaging); 
      $this->varResults['paging'] = $chkPaging->Render()."\n";
      unset($varPaging);
      unset($chkPaging);

      $resultsFoundText = ($nbrs > 1)? $this->_lang['as_resultsFoundTextMultiple'] : $this->_lang['as_resultsFoundTextSingle'] ;
      if ($this->extractNb) {
        $searchList = $this->getSearchWords($this->searchString, $this->advSearch);
        $hits = 1;
        $searchwords = '';
        foreach ($searchList as $words) {
          $searchwords .= '<span class="ajaxSearch_highlight ajaxSearch_highlight'.$hits.'">'.$words.'</span>&nbsp;';
          $hits++;
        }
        // Remove trailing '&nbsp;'
        $searchwords = substr($searchwords, 0, strlen($searchwords) -6);
        $this->varResults['resultInfoText'] = sprintf($resultsFoundText,$nbrs,$searchwords);
      } else {
        $this->varResults['resultInfoText'] = sprintf($resultsFoundText,$nbrs,$this->searchString);
      }
    } // end if grabMax
  }

/**
 * setResultsPage : Set the result page
 */
  function setResultsPage(){
    global $modx;
      // establish results page
    if (isset($this->cfg['AS_landing']) && !is_bool($this->cfg['AS_landing'])) { // set in snippet
      $searchAction = "[~" . $this->cfg['AS_landing'] . "~]";
    } elseif ($this->cfg['resultsPage'] > 0) { // locally set
      $searchAction = "[~" . $this->cfg['resultsPage'] . "~]";
    } else { //otherwise
      $searchAction = "[~" . $modx->documentIdentifier . "~]";
    }
    return $searchAction;
  }

/**
 * setInputForm : Set the input form
 */
  function setInputForm($validSearch, $searchAction){

    // establish input form

    if (($validSearch && $this->cfg['AS_showForm']) || $this->cfg['AS_showForm']){
      $this->varLayout['showForm'] = '1';
      $this->varLayout['formId'] = $this->searchFormId;
      $this->varLayout['formAction'] = $searchAction;

      // set up a drop dow select list from the searchWordList parameter
      if ($this->cfg['searchWordList']){
        $searchList = explode (',',$this->getSelectList($this->cfg['searchWordList']));
        $slist = '';
        foreach($searchList as $searchTerm){
          $slist .= '<option value="'.$searchTerm.'">' . $searchTerm . '</option>'."\n";
        }
        $this->varLayout['selectList'] = $slist;
      }
      else  {
        $this->varLayout['inputValue'] = ($this->searchString == '' && $this->_lang['as_boxText'] != '') ? $this->_lang['as_boxText'] : $this->searchString;
        $this->varLayout['inputOptions'] = ($this->_lang['as_boxText']) ? ' onfocus="this.value=(this.value==\''.$this->_lang['as_boxText'].'\')? \'\' : this.value ;"' : '';
      }
      $this->varLayout['submitText'] = $this->_lang['as_searchButtonText'];  

      // propagate the hidden input advSearch parameter
      $this->varLayout['advSearch'] = $this->advSearch;

      // or let the end user use radio buttons to choose
      $this->varLayout['oneword'] = 'oneword';
      $this->varLayout['onewordText'] = $this->_lang['oneword'];
      $this->varLayout['onewordChecked'] = ($this->advSearch == 'oneword' ? 'checked ="checked"' : '');
      $this->varLayout['allwords'] = 'allwords';
      $this->varLayout['allwordsText'] = $this->_lang['allwords'];  
      $this->varLayout['allwordsChecked'] = ($this->advSearch == 'allwords' ? 'checked ="checked"' : '');
      $this->varLayout['exactphrase'] = 'exactphrase';
      $this->varLayout['exactphraseText'] = $this->_lang['exactphrase'];  
      $this->varLayout['exactphraseChecked'] = ($this->advSearch == 'exactphrase' ? 'checked ="checked"' : '');
      $this->varLayout['nowords'] = 'nowords';
      $this->varLayout['nowordsText'] = $this->_lang['nowords'];  
      $this->varLayout['nowordsChecked'] = ($this->advSearch == 'nowords' ? 'checked ="checked"' : '');

    } else {
      $this->varLayout['showForm'] = '0';
    }
  }
}

?>