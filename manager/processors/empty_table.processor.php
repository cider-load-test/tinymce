<?php 
if(IN_MANAGER_MODE!="true") die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODx Content Manager instead of accessing this file directly.");
if(!$modx->hasPermission('settings') && $_REQUEST['a']==55) {	
	$e->setError(3);
	$e->dumpError();	
}

$sql = "TRUNCATE TABLE $dbase.".$table_prefix."manager_log;";
$rs = @mysql_query($sql);

$header="Location: index.php?a=13";
header($header);

?>