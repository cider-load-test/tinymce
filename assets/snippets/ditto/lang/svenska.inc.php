<?php

/**
 * Filename:       assets/snippets/ditto/svenska.inc.php
 * Function:       Swedish language file for Ditto.
 * Author:         The MODx Project
 * Version:        1.0.2
 * MODx version:   0.9.5
 *
 * Translation:    Pontus �gren
 * Date:           4/12/2006
*/

// NOTE: New language keys should added at the bottom of this page

$_lang['file_does_not_exist'] = " finns inte. Kontrollera filen.";

$_lang['default_template'] = '
    <div class="ditto_summaryPost">
        <h3><a href="[~[+id+]~]">[+title+]</a></h3>
        <div>[+summary+]</div>
        <p>[+link+]</p>
        <div style="text-align:right;">av <strong>[+author+]</strong> den [+date+]</div>
    </div>
';

$_lang['blank_tpl'] = "�r tom eller s� har du stavat kodstyckets namn fel. Var sn�ll och kontrollera.";

$_lang['missing_placeholders_tpl'] = 'En av dina Ditto-mallar saknar platsh�llare. Kontrollera nedanst�ende mall: <br /><br /><hr /><br /><br />';

$_lang['missing_placeholders_tpl_2'] = '<br /><br /><hr /><br />';

$_lang['default_splitter'] = "<!-- delare -->";

$_lang['more_text'] = "L�s mer...";

$_lang['no_entries'] = '<p>Inga poster funna.</p>';

$_lang['date_format'] = "%d-%b-%y %H:%M";

$_lang['archives'] = "Arkiv";

$_lang['prev'] = "&lt; F�reg�ende";

$_lang['next'] = "N�sta &gt;";

$_lang['button_splitter'] = "|";

$_lang['default_copyright'] = "[(site_name)] 2006";	

$_lang['rss_lang'] = "sv";

$_lang['debug_summarized'] = "Antal dokument som f�rv�ntades bli summerade (summarize):";

$_lang['debug_returned'] = "<br />Totalt antal som f�rv�ntas returneras:";

$_lang['debug_retrieved_from_db'] = "Antal i databasen:";

$_lang['debug_sort_by'] = "Sortera efter (sortBy):";

$_lang['debug_sort_dir'] = "Sorteringsriktning (sortDir):";

$_lang['debug_start_at'] = "B�rja vid";

$_lang['debug_stop_at'] = "och stanna vid";

$_lang['debug_out_of'] = "av";

$_lang['debug_document_data'] = "Dokumentdata f�r ";

$_lang['default_archive_template'] = "<a href=\"[~[+id+]~]\">[+title+]</a> (<span class=\"ditto_date\">[+date+]</span>)";

$_lang['invalid_class'] = "Ditto-klassen �r ogiltig. Kontrollera den.";

// New language key added 2-July-2006 to 5-July-2006

// Keys deprecated : $_lang['api_method'] and $_lang['GetAllSubDocs_method'] 

$_lang['tvs'] = "Mallvariabler:";

$_lang['api'] = "Anv�nder den nya APIn f�r MODx 0.9.2.1";

?>