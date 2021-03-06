<?php

/*
 * Title: Language File
 * Purpose:
 *      Default Swedish language file for Ditto
 *     
 * Note:
 *      New language keys should added at the bottom of this page
 *
 * Translation: Pontus ?gren (Pont)
 * Date: 2007-03-07
 */

$_lang['language'] = "svenska";

$_lang['abbr_lang'] = "sv";

$_lang['file_does_not_exist'] = " finns inte. Kontrollera filen.";

$_lang['extender_does_not_exist'] = "extendern finns inte. Kontrollera den.";

$_lang['default_template'] = <<<TPL

    <div class="ditto_item" id="ditto_item_[+id+]">
        <h3 class="ditto_pageTitle"><a href="[~[+id+]~]">[+pagetitle+]</a></h3>
        <div class="ditto_documentInfo">av <strong>[+author+]</strong> den [+date+]</div>
        <div class="ditto_introText">[+introtext+]</div>
    </div>

TPL;

$_lang["bad_tpl"] = "<p>&[+tpl+] inneh?ller inga platsh?llare eller ocks? ?r det ett ogiltigt chunk-namn, kodblock eller filnamn. Kontrollera det.</p>";

$_lang['no_documents'] = '<p>Inga dokument hittades.</p>';

$_lang['resource_array_error'] = 'Fel i resursf?ltet';

$_lang['prev'] = "&lt; F?reg?ende";

$_lang['next'] = "N?sta &gt;";

$_lang['button_splitter'] = "|";

$_lang['default_copyright'] = "[(site_name)] 2007";	

$_lang['invalid_class'] = "Ditto-klassen ?r ogiltig. Kontrollera den.";

$_lang['none'] = "Inga";

$_lang['edit'] = "Redigera";

$_lang['dateFormat'] = "%y-%b-%d %H:%M";

// Debug Tab Names

$_lang['info'] = "Information";

$_lang['modx'] = "MODx";

$_lang['fields'] = "F?lt";

$_lang['templates'] = "Mallar";

$_lang['filters'] = "Filter";

$_lang['prefetch_data'] = "F?rh?mtad data";

$_lang['retrieved_data'] = "H?mtad data";

// Debug Text

$_lang['placeholders'] = "Platsh?llare";

$_lang['params'] = "Parametrar";

$_lang['basic_info'] = "Grundl?ggande information";

$_lang['document_info'] = "Dokumentinformation";

$_lang['debug'] = "Debug";

$_lang['version'] = "Version";

$_lang['summarize'] = "Summera";

$_lang['total'] = "Totalt";

$_lang['sortBy'] = "Sortera efter";

$_lang['sortDir'] = "Sorteringsriktning";

$_lang['start'] = "Starta";
         
$_lang['stop'] = "Stoppa";

$_lang['ditto_IDs'] = "IDn";

$_lang['ditto_IDs_selected'] = "Valda IDn";

$_lang['ditto_IDs_all'] = "Alla IDn";

$_lang['open_dbg_console'] = "?ppna Debugkonsolen";

$_lang['save_dbg_console'] = "Spara Debugkonsolen";

?>