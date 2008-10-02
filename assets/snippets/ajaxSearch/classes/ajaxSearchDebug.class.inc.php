<?php
/*
 * Title: AjaxSearchDebug
 * Purpose:
 *    The AjaxSearchDebug class contains all functions used to debug AjaxSearch
 *    Based on FirePHP. See http://www.firephp.org 
 *
 *    Version: 1.8.1  - Coroico (coroico@wangba.fr) 
 *    
 *    02/10/2008  
 *      
*/

define('AS_DBGFILE', dirname(__FILE__) . '/../ajaxSearch_log.txt');   // Name of debug file
define('AS_DBGFIREPHP', dirname(__FILE__) . '/FirePHPCore/FirePHP.class.php');   // FirePHP library location

class AjaxSearchDebug{

  var $typeDbg;    // 1: file  2: fireBug console
  
  var $asFirePhp;  // firePhp instance
  var $asDbgFd;    // file descriptor

  function AjaxSearchDebug($version,$type) {
  
    if (!(version_compare(phpversion(), "5.0.0", ">=")) && (($type == 3 || $type=4))) $type--; 
    $this->typeDbg = $type;
    $header = "AjaxSearch ".$version." - Php".phpversion()." - MySql ".mysql_get_server_info();

    switch($type){
      // debug trace in a file
      case 1:
      case 2:
        $this->asDbgFd = fopen(AS_DBGFILE,'w+');
        $this->dbgLog($header);
        fclose($this->asDbgFd);
        $this->asDbgFd = fopen(AS_DBGFILE,'a+');
        break;
      // debug trace in the firebug console
      case 3:
      case 4:
        include_once(AS_DBGFIREPHP);
        ob_start();
        $this->dbgLog($header);
      break;
    }
  }
  
/**
 *  set Debug log record
 */
  function dbgLog(){

    $args = func_get_args();
    
    if ($this->typeDbg == 1 || $this->typeDbg == 2) {
      // write trace in a file 
      $when = date('[j-M-y h:i:s]  ');
      $nba = count($args);
      $result = $when;
      if ($nba > 1){
          $result .= $args[1] . " : ";
      }
      if (is_array($args[0])) {
        $result .= print_r($args[0], true)."\n";   
      }
      else $result .= $args[0] . "\n";
      fwrite($this->asDbgFd,$result);
      return true;
    }
    else {
      $args[] = 'INFO';
      //$instance = FirePHP::getInstance(true);
      require_once(AS_DBGFIREPHP);
      $instance = FirePHP::getInstance(true);
      return call_user_func_array(array($instance,'fb'),$args);
    }
    return true;
  }
}
?>