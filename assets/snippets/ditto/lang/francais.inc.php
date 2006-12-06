<?php

/**
 * Nom du fichier: assets/snippets/ditto/french.inc.php
 * Fonction:       Fichier de langue francis� pour Ditto.
 * Auteur:         The MODx Project
 * Date:           2006/12/05
 * Version:        1.0.2
 * Version de Modx:0.9.5
*/

// NOTE: De nouveaux param�tres de langue seront ajout�s � la fin de cette page

$_lang['file_does_not_exist'] = " n'existe pas. Veuillez v�rifier le fichier.";

$_lang['default_template'] = '
    <div class="ditto_summaryPost">
        <h3><a href="[~[+id+]~]">[+title+]</a></h3>
        <div>[+summary+]</div>
        <p>[+link+]</p>
        <div style="text-align:right;">par <strong>[+author+]</strong> le [+date+]</div>
    </div>
';

$_lang['blank_tpl'] = "Le mod�le utilis� pour Ditto est vide ou il y a une erreur dans le nom du chunk, merci de le v�rifier.";

$_lang['missing_placeholders_tpl'] = 'Le mod�le utilis� pour Ditto ne contient pas de conteneur, merci de v�rifier votre mod�le affich� ci-dessous: <br /><br /><hr /><br /><br />';

$_lang['missing_placeholders_tpl_2'] = '<br /><br /><hr /><br />';

$_lang['default_splitter'] = "<!-- splitter -->";

$_lang['more_text'] = "Voir la suite...";

$_lang['no_entries'] = '<p>Aucun document n\'a �t� trouv�.</p>';

$_lang['date_format'] = "%d/%b/%y %H:%M";

$_lang['archives'] = "Archive";

$_lang['prev'] = "&lt; Pr�c�dent";

$_lang['next'] = "Suivant &gt;";

$_lang['button_splitter'] = "|";

$_lang['default_copyright'] = "[(site_name)] 2006";	

$_lang['rss_lang'] = "fr";

$_lang['debug_summarized'] = "Nombre cens� �tre r�sum� (summarize):";

$_lang['debug_returned'] = "<br />Nombre cens� �tre retourn�:";

$_lang['debug_retrieved_from_db'] = "Nombre total dans la base de donn�es:";

$_lang['debug_sort_by'] = "Tri� par (sortby):";

$_lang['debug_sort_dir'] = "Sens du tri (sortdir):";

$_lang['debug_start_at'] = "Commence �";

$_lang['debug_stop_at'] = "et s'arr�te �";

$_lang['debug_out_of'] = "hors de";

$_lang['debug_document_data'] = "Donn�es du document pour";

$_lang['default_archive_template'] = "<a href='[~[+id+]~]'>[+title+]</a> (<span class=\"ditto_date\">[+date+]</span>)";

$_lang['invalid_class'] = "La class utilis�e par Ditto est invalide. Vous devriez la v�rifier.";
?>