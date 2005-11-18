<?php

/*
 *  Written by: Adam Crownoble
 *  Contact: adam@obledesign.com
 *  Created: 8/14/2005
 *  Modified: 10/24/2005 - Removed links hrefs
 *  For: MODx cms (modxcms.com)
 *  Description: Class for the QuickEditor
 */

/*
                             License

QuickEdit - A MODx module which allows the editing of content via
            the frontent of the site
Copyright (C) 2005  Adam Crownoble

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

<<<<<<< .mine
if(!isset($_lang)) { $_lang = array(); }

=======
$_lang = array();

>>>>>>> .r491
class QuickEditor {

 function QuickEditor() {

  include_once('contentVariable.class.inc.php');
<<<<<<< .mine

  global $modx;
  global $base_path;
  global $_lang;

  $this->output = '';

  if(!$_lang) {
   $modPath = $GLOBALS['quick_edit_path'];
   $lang = $modx->config['manager_language'];
   $qe_lang_path = $mod_path.'/lang/'.$lang.'.inc.php';
   $manager_lang_path = $base_path.'manager/includes/lang/'.$lang.'.inc.php';
   include_once($modPath.'/lang/english.inc.php');
   if(file_exists($qe_lang_path)) { include_once($qe_lang_path); }
   include_once($manager_lang_path);
  }

=======

  global $modx;
  global $base_path;
  global $_lang;

  $this->output = '';
  $lang = $modx->config['manager_language'];
  $lang_path = $base_path.'manager/includes/lang/'.$lang.'.inc.php';
  include_once($lang_path);

>>>>>>> .r491
 }

 function renderEditorHTML($docId, $varId, $modId) {

  /*
   *  This code generates a page meant for editing a single template
   *  variable or the pagetitle, longtitile, description or content of a
   *  page from the frontend of a website. It is meant to be used with the
   *  mergeFrontendEditableLinks() function.
   *  This page should be able to handle any type of TV on any page.
   */

  global $modx;
  global $_lang;

  $basePath = $modx->config['base_path'];
  $modPath = $GLOBALS['quick_edit_path']; // Path to the Quick Edit folder, set in the QuickEdit module preferences

  include_once($basePath.'manager/includes/tmplvars.inc.php');
  include_once($basePath.'manager/includes/tmplvars.commands.inc.php');
  include_once($basePath.'manager/includes/tmplvars.format.inc.php');

  $modPath = $GLOBALS['quick_edit_path']; // Path to the Quick Edit folder, set in the QuickEdit module preferences
  $cv = new ContentVariable;
  $cv->set($varId, $docId);

  // PSUEDO CONSTANTS
  $module_exec_action = 112;

  $editor_html = '';
  $varContent = '';
  $allowed = true;

  if(!$modx->hasPermission('edit_document')) {

   $modx->event->alert($_lang['access_permission_denied']);
   $allowed = false;
   
  } elseif(!$cv->checkPermissions()) {
   
   $modx->event->alert($_lang['access_permission_denied']);
   $allowed = false;
   
  } elseif(!$cv->id) {

   // Mage sure the the content variable exists
   $modx->event->alert($_lang['QE_cant_find_content']);
   $allowed = false;

  } elseif(!$cv->checkPermissions()) {

   // Make sure we have permission to edit it
   $modx->event->alert($_lang['access_permission_denied']);
   $allowed = false;

  } elseif($cv->locked()) {

   // Make sure the document isn't locked
   $modx->event->alert($_lang['QE_someone_editing']);
   $allowed = false;
   
  }

  if($allowed) {

   $perms = $_SESSION['mgrPermissions'];

   $modx->db->connect();

   // HTML PREP
   if($cv->type == 'richtext') {

    // invoke OnRichTextEditorInit event
    $event_output = $modx->invokeEvent("OnRichTextEditorInit", array('editor'=>$modx->config['which_editor'], 'elements'=>array('tv'.$cv->name)));

    if(is_array($event_output)) {
     $editor_html = implode("",$event_output);
    }

   }

   $tv_html = renderFormElement($cv->type, $cv->name, $cv->default_text, $cv->elements, $cv->content);

   // Get the name of the TV
   if(!($tv_desc = $cv->description)) {
   } elseif(!($tv_desc = $cv->caption)) {
   } else {	$tv_desc = $cv->name; }

   // HTML
$html = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<<<<<<< .mine
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$_lang[QE_lang]}" xml:lang="{$_lang[QE_xml_lang]}">
=======
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
>>>>>>> .r491
<head>

<meta http-equiv="Content-Type" content="text/html; charset={$_lang[QE_charset]}" />
<meta name="description" content="{$_lang[QE_description]}" />
<title>{$_lang[QE_title]}</title>

<link type="text/css" rel="stylesheet" href="../{$modPath}/styles/editor.css" />
<script language="JavaScript" src="media/script/datefunctions.js"></script>
<script language="JavaScript" src="../{$modPath}/javascript/editor.js"></script>

</head>
<body>

<form id="tv_form" class="{$cv->type}" name="mutate" method="post" enctype="multipart/form-data" action="index.php">
<input type="hidden" name="save" value="1" />
<input type="hidden" name="a" value="{$module_exec_action}" />
<input type="hidden" name="id" value="{$modId}" />
<input type="hidden" name="doc" value="{$docId}" />
<input type="hidden" name="var" value="{$varId}" />
<input type="hidden" name="variablesmodified" value="">

<div id="toolbar">

<<<<<<< .mine
<h1>{$_lang[edit]} {$cv->caption}</h1>
=======
<h1>{$_lang[edit]} {$cv->name}</h1>
>>>>>>> .r491

<a href="javascript: save();"><img src="media/images/icons/save.gif" alt="{$_lang[save]}" /> {$_lang[save]}</a>
<a href="javascript: cancel();"><img src="media/images/icons/cancel.gif" alt="{$_lang[cancel]}" /> {$_lang[cancel]}</a>

</div>

<<<<<<< .mine
<div id="description">{$_lang[edit]} {$cv->description}</div>
=======
<div id="description">{$_lang[edit]} {$tv_desc}</div>
>>>>>>> .r491

<div id="tv_container">

{$tv_html}

</div>

<input type="submit" name="save" style="display:none;" />

</form>

$editor_html

<script type="text/javascript">

 // Resize the window to fit the TV
 fitWindow();

</script>

</body>
</html>
EOD;

   echo($html);
   
  }

 }

 function save($docId, $varId) {

 /*
  *  Written by Adam Crownoble (adam@obledesign.com) 7/30/2005
  *  This page saves a template variable or the pagetitle, longtitle,
  *  description or content that was edited through the frontend editor.
  *  After saving the content, it runs javascript to automatically
  *  refresh the parent window and close the pop-up edit window.
  */

  global $modx;

  $modPath = $GLOBALS['quick_edit_path']; // Path to the Quick Edit folder, set in the QuickEdit module preferences
  $db = $modx->db->config['dbase'];
  $pre = $modx->db->config['table_prefix'];
  $html = '';
  $result = null;
  $allowed = false;

  $cv = new ContentVariable;
  $cv->set($varId, $docId);

  if($modx->hasPermission('save_document') && $cv->checkPermissions()) {

   if($caption =="") {
    $caption  = $name ? $name:"Untitled Variable";
   }

   // Get the template variable value
   foreach($_POST as $postKey=>$postValue) {
    if(substr($postKey, 0, 2) == 'tv') {
     $value = $postValue;
    }
   }

   if(is_array($value)) {
    $value = implode('||', $value);
   }

   $value_prep = $modx->db->escape($value);

   if(is_numeric($cv->id)) {

    // Define the tmplvars vairable by reference for plugin support
    $tmplvars[$cv->id] = &$value_prep;
    // invoke OnBeforeDocFormSave event
    $modx->invokeEvent('OnBeforeDocFormSave', array('mode'=>'upd', 'id'=>$docId));

    $sql = "SELECT id
            FROM {$db}.`{$pre}site_tmplvar_contentvalues`
            WHERE `tmplvarid` = '$cv->id'
            AND `contentid` = '$docId';";
    $result = $modx->db->query($sql);

    if($modx->db->getRecordCount($result)) {

     $sql = "UPDATE {$db}.`{$pre}site_tmplvar_contentvalues`
             SET `value` = '{$value_prep}'
             WHERE `tmplvarid` = '{$cv->id}'
             AND `contentid` = '{$docId}';";

    } else {

     $sql = "INSERT INTO {$db}.`{$pre}site_tmplvar_contentvalues`(tmplvarid, contentid, value)
             VALUES('{$cv->id}', '{$docId}', '{$value_prep}');";
             
    }

   } elseif(in_array($cv->id,array('pagetitle', 'longtitle', 'description', 'content', 'alias', 'introtext', 'menutitle'))) {

    // Define vairable with the content id as it's name by reference for plugin support
    $cv_id = $cv->id;
    $$cv_id = &$value_prep;
    // invoke OnBeforeDocFormSave event
    $modx->invokeEvent('OnBeforeDocFormSave', array('mode'=>'upd', 'id'=>$docId));

    $sql = "UPDATE {$db}.`{$pre}site_content`
            SET `{$cv->id}` = '{$value_prep}'
            WHERE `id` = '{$docId}';";

   }

   if($sql) { $result = $modx->db->query($sql); }

   if(!$result){

    $modx->logEvent(0, 0, "<p>Save failed!</p><strong>SQL:</strong><pre>$sql</pre>", 'QuickEditor');

   } else {

    // invoke OnDocFormSave event
    $modx->invokeEvent('OnDocFormSave', array('mode'=>'new', 'id'=>$docId));

    // empty cache
    include_once('../manager/processors/cache_sync.class.processor.php');
    $sync = new synccache();
    $sync->setCachepath("../assets/cache/");
    $sync->setReport(false);
    $sync->emptyCache(); // first empty the cache

   }

  }

 }

 function renderSaveAndCloseHTML() {

  $modPath = $GLOBALS['quick_edit_path']; // Path to the Quick Edit folder, set in the QuickEdit module preferences

$html = <<<EOD
<html>

<head>

<title>{$_lang[close]}</title>

<script language="JavaScript" src="../{$modPath}/javascript/editor.js"></script>
<script type="text/javascript">

reloadAndClose();

</script>

</head>

<body>

<p style="text-align:center;"><a href="javascript: postSave();">{$_lang[close]}</a></p>

</body>

</html>
EOD;

  echo($html);

 }

}

?>
