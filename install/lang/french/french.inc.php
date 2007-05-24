<?php
/**
 * MODx language File
 *
 * @author Gr�gory Pakosz (guardian)
 * @package MODx
 * @version 1.0
 * 
 * Filename:       /install/lang/french/french.inc.php
 * Language:       English
 * Encoding:       iso-8859-1
 */

$_lang['license'] = '<p class="title">MODx Contrat de Licence.</p>
	    <hr style="text-align:left;height:1px;width:90%" />
		<h4>Vous devez accepter les termes du contrat de licence avant de poursuivre l\'installation.</h4>
		<p>L\'utilisation de ce logiciel est soumise � la licence GPL. Pour vous aider � comprendre ce qu\'est
    la licence GPL et de quelle mani�re elle r�git vos droits d\'utilisation de ce logiciel, nous vous en
    proposons le r�sum� suivant:</p>
		<h4>La Licence Publique G�n�rale GNU est une licence du logiciel libre.</h4>
		<p>Comme toute licence du logiciel libre, elle vous accorde les quatre libert�s suivantes:</p>
		<ul>
            <li>La libert� d\'utilisation du logiciel. </li>
            <li>La libert� d\'�tudier le fonctionnement du logiciel et de l\'adapter � vos besoins. </li>
            <li>La libert� d\'en redistribuer des copies. </li>
            <li>La libert� d\'am�liorer le fonctionnement du logiciel et de rendre publiques vos modifications pour que celles-ci
            profitent � toute la communaut�. </li>
		</ul>
		<p>Vous pouvez exercer les libert�s mentionn�es dans le pr�sent document � condition de respecter rigoureusement les principales
    conditions de cette licence:</p>
		<ul>
            <li>Vous devez apposer sur chaque copie, de mani�re ad hoc et parfaitement visible,
            l\'avis de droit d\'auteur ad�quat et une exon�ration de garantie ; garder intacts
            tous les avis faisant r�f�rence � la pr�sente Licence et � l\'absence de toute garantie ;
            et fournir � tout destinataire du Logiciel autre que vous-m�me un exemplaire de la
            Licence G�n�rale Publique GNU en m�me temps que le Logiciel. Toute traduction de la Licence
            Publique G�n�rale GNU doit �tre accompagn�e de la version originale de la Licence
            Publique G�n�rale GNU.</li>
            
            <li>Si vous modifiez votre copie ou des copies du logiciel, ou n\'importe quelle
            partie de celui-ci, vous avez le droit de redistribuer le travail d�riv� � condition de le faire
            sous les conditions impos�es par la Licence G�n�rale Publique GNU. Toute traduction de la Licence
            Publique G�n�rale GNU doit �tre accompagn�e de la version originale de la Licence
            Publique G�n�rale GNU. </li>

            <li>Si vous copiez ou distribuez le logiciel, vous devez l\'accompagner de l\'int�gralit�
            du code source correspondant, sous une forme lisible par un ordinateur, ou de l\'accompagner
            d\'une proposition �crite, valable pendant au moins trois ans, de fournir � tout tiers, une
            copie int�grale du code source correspondant sous une forme lisible par un ordinateur.</li>
            
            <li>Chacune de ces conditions peut �tre lev�e si vous obtenez l\'autorisation du
            titulaire des droits.</li>

            <li>Ce qui pr�c�de n\'affecte en rien vos droits en tant qu\'utilisateur (exceptions
            au droit d\'auteur : copies r�serv�es � l\'usage priv� du copiste, courtes citations, parodie...)</li>
        </ul>
		<p>Ceci est un r�capitulatif des claues principales de la Licence G�n�rale Public GNU. En acceptant le contrat
    de licence, vous vous engagez � respecter la licence GNU GPL dans son int�gralit�. Le r�sum� propos� ci-dessus
    est uniquement destin� � vous faciliter sa compr�hension et compl�tude n\'est pas garantie. Il est vivement
    recommand� de lire la version int�grale de la <a href="http://www.gnu.org/copyleft/gpl.html" target=_blank>Licence G�n�rale Publique GNU</a>
    avant de poursuivre l\'installation. Vous en trouverez �galement une copie dans le fichier de licence qui accompagne
    la distribution de ce Logiciel.</p>';
$_lang["encoding"] = 'iso-8859-1';	//charset encoding for html header
$_lang["modx_install"] = 'MODx &raquo; Installation';
$_lang["loading"] = 'Chargement...';
$_lang["Begin"] = 'D�marrer';
$_lang["status_connecting"] = ' Connexion � l\'h�te: ';
$_lang["status_failed"] = 'echec!';
$_lang["status_passed"] = 'succ�s';
$_lang["status_checking_database"] = '...    V�rification de la base de donn�es: ';
$_lang["status_failed_could_not_select_database"] = 'echec - impossible de s�lectionner la base de donn�es';
$_lang["status_failed_table_prefix_already_in_use"] = 'echec - prefixe de table d�j� utilis�!';
$_lang["welcome_message_welcome"] = 'Bienvenue dans le programme d\'installation de MODx.';
$_lang["welcome_message_text"] = 'Ce programme vous guidera tout au long de la phase d\'installation.';
$_lang["welcome_message_select_begin_button"] = 'Appuyez sur le bouton `D�marrer` pour commencer l\'installation:';
$_lang["installation_mode"] = 'Type d\'installation';
$_lang["installation_new_installation"] = 'Nouvelle Installation';
$_lang["installation_install_new_copy"] = 'Installation d\'une nouvelle copie';
$_lang["installation_install_new_note"] = 'Attention, cette option est susceptible d\'�craser les donn�es de la base.';
$_lang["installation_upgrade_existing"] = 'Mise A Jour d\'une installation existante';
$_lang["installation_upgrade_existing_note"] = 'Mise � jour des fichiers existants et de la base de donn�es.';
$_lang["installation_upgrade_advanced"] = 'Mise A Jour Avanc�e<br /><small>(configuration de la base de don�es)</small>';
$_lang["installation_upgrade_advanced_note"] = 'Destin� aux administrateurs avanc�s ou � la migration vers un serveur de base de donn�es disposant d\'un encodage diff�rent. <b>Vous devez disposer du nom complet de la base de donn�es, de l\'identifiant utilisateur, du mot de passe et des details de connexion/collation.</b>';
$_lang["connection_screen_connection_information"] = 'Param�tres de Connexion';
$_lang["connection_screen_connection_and_login_information"] = 'Connection � la Base de Donn�es et Identification';
$_lang["connection_screen_connection_note"] = 'Veuillez saisir le nom de la base de donn�es cr��e pour MODx. Si la base est inexistante, le programme d\'installation tentera de la cr�er pour vous. Cette op�ration est susceptible d\'�chouer en fonction de la configuration MySQL ou des droits d\'acc�s � la base de donn�es pour votre domaine/installation.';
$_lang["connection_screen_database_name"] = 'Nom de la Base:';
$_lang["connection_screen_table_prefix"] = 'Pr�fixe de Table:';
$_lang["connection_screen_collation"] = 'Collation:';
$_lang["connection_screen_character_set"] = 'Jeu de caract�res de la connexion:';
$_lang["connection_screen_database_info"] = 'Veuillez saisir l\'identifiant utilisateur de la base de donn�es.';
$_lang["connection_screen_database_host"] = 'Serveur h�bergeant la base:';
$_lang["connection_screen_database_login"] = 'Identifiant utilisateur de la base:';
$_lang["connection_screen_database_pass"] = 'Mot de passe:';
$_lang["connection_screen_test_connection"] = 'Test de la connexion';
$_lang["connection_screen_default_admin_user"] = 'Administrateur par defaut';
$_lang["connection_screen_default_admin_note"] = 'Vous allez maintenent saisir des informations du compte administrateur princpal. Vous pouvez donner ici votre nom et un mot de passe facile � retenir. Vous aurez besoin de ces informations pour vous connecter comme administrateur apr�s l\'installation.';
$_lang["connection_screen_default_admin_login"] = 'Nom d\'utilisateur administrateur:';
$_lang["connection_screen_default_admin_email"] = 'Email de l\'administrateur:';
$_lang["connection_screen_default_admin_password"] = 'Mot de passe administrateur:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Confirmation du mot de passe:';
$_lang["optional_items"] = 'Options d\'installation';
$_lang["optional_items_note"] = 'Selectionnez les options d\'installation et cliquez sur Installer:';
$_lang["sample_web_site"] = 'Exemple de Site Web';
$_lang["install_overwrite"] = 'Installation/Ecrasement';
$_lang["sample_web_site_note"] = 'Attention, cette op�ration va <b style=\"color:#CC0000\">�craser</b> les documents et ressources existants.';
$_lang["checkbox_select_options"] = 'Cochez pour s�lectionner les options:';
$_lang["all"] = 'Tout';
$_lang["none"] = 'Aucun';
$_lang["toggle"] = 'Toggle';
$_lang["templates"] = 'Gabarits';
$_lang["install_update"] = 'Installation/Mise A Jour';
$_lang["chunks"] = 'Chunks';
$_lang["modules"] = 'Modules';
$_lang["plugins"] = 'Plugins';
$_lang["snippets"] = 'Snippets';
$_lang["preinstall_validation"] = 'Validation de la phase de Pre-Installation';
$_lang["summary_setup_check"] = 'Le programme d\'installation a effectu� une s�rie de v�rifications afin de d�terminer si tout est pr�t pour d�marrer l\'installation.';
$_lang["checking_php_version"] = "V�rification de la version PHP: ";
$_lang["failed"] = 'Failed!';
$_lang["ok"] = 'OK!';
$_lang["you_running_php"] = ' - Vous utilisez PHP ';
$_lang["modx_requires_php"] = ', alors que MODx n�cessite PHP 4.1.0 ou ult�rieur';
$_lang["php_security_notice"] = '<legend>Avertissement S�curit�</legend><p>Bien que MODx fonctionne avec votre version de PHP, nous n\'en recommandons pas l\'utilisation. Votre version de PHP comporte de nombreuses vuln�rabilit�s de s�curit�. Veuillez mettre � jour PHP vers une version 4.3.8 ou sup�rieure afin de corriger ces failles. Cette mise � jour est recommand�e pour la s�curit� de votre site internet.</p>';
$_lang["checking_sessions"] = 'V�rifications des param�tres de sessions: ';
$_lang["checking_if_cache_exist"] = 'V�rification de l\'existence du r�pertoire <span class=\"mono\">assets/cache</span>: ';
$_lang["checking_if_cache_writable"] = 'V�rification des droits en �criture du r�pertoire <span class=\"mono\">assets/cache</span>: ';
$_lang["checking_if_cache_file_writable"] = 'V�rification des droits en �criture du fichier <span class=\"mono\">assets/cache/siteCache.idx.php</span>: ';
$_lang["checking_if_cache_file2_writable"] = 'V�rification des droits en �criture du fichier<span class=\"mono\">assets/cache/sitePublishing.idx.php</span>: ';
$_lang["checking_if_images_exist"] = 'V�rification de l\'existence du r�pertoire <span class=\"mono\">assets/images</span>: ';
$_lang["checking_if_images_writable"] = 'V�rification des droits en �criture du r�pertoire <span class=\"mono\">assets/images</span>: ';
$_lang["checking_if_export_exists"] = 'V�rification de l\'existence du r�pertoire <span class=\"mono\">assets/export</span>: ';
$_lang["checking_if_export_writable"] = 'V�rification des droits en �criture du r�pertoire <span class=\"mono\">assets/export</span>: ';
$_lang["checking_if_config_exist_and_writable"] = 'V�rification de l\'existence et des droits en �criture du fichier <span class=\"mono\">manager/includes/config.inc.php</span>: ';
$_lang["config_permissions_note"] = 'Lors des installations Linux/Unix, veuillez cr�er un nouveau fichier nomm� <span class=\"mono\">config.inc.php</span> dans le r�pertoire <span class=\"mono\">manager/includes/</span> avec les droits d\'acc�s 0666.';
$_lang["creating_database_connection"] = 'Creation de la connexion � la base de donn�es: ';
$_lang["database_connection_failed"] = 'Echec de connexion � la base de donn�es!';
$_lang["database_connection_failed_note"] = 'Veuillez v�rifier les param�tres de connexion � la base de donn�es et r�essayez.';
$_lang["database_use_failed"] = 'Impossible d\'acc�der � la base de donn�es!';
$_lang["database_use_failed_note"] = 'Veuillez verifier les droits d\'acc�s utilisateur � la base de donn�es et r�essayez.';
$_lang["checking_table_prefix"] = 'V�rification du pr�fixe de table `';
$_lang["table_prefix_already_inuse"] = ' - Le pr�fixe de table est d�j� utilis� dans cette base de donn�es!';
$_lang["table_prefix_already_inuse_note"] = 'Le programme d\'installation n\'a pas pu utiliser la base de donn�es sp�cifi�e parce qu\'elle contient d�j� des tables comportant le pr�fixe que vous avez choisi. Veuillez s�lectionner un autre pr�fixe de table et recommencer l\'installation.';
$_lang["table_prefix_not_exist"] = ' - Le prefixe de table n\'existe pas dans la base de donn�es!';
$_lang["table_prefix_not_exist_note"] = 'Le programme d\'installation n\'a pas pu utiliser la base de donn�es sp�cifi�e parce qu\'elle ne contient pas de tables comportant le pr�fixe que vous avez choisi pour la mise � jour. Veuillez choisir un pr�fixe de table existant et recommencer l\'installation.';
$_lang["setup_cannot_continue"] = 'Impossible de poursuivre l\'installation';
$_lang["error"] = 'erreur';
$_lang["please_correct"] = '. Veuillez corriger l\'erreur';
$_lang["and_try_again"] = ', et reessayer. Si vous avez besoin d\'aide pour corriger le probl�me';
$_lang["visit_forum"] = ', visitez les <a href="http://www.modxcms.com/forums/" target="_blank">Forums Utilisateurs de MODx</a>.';
$_lang["testing_connection"] = 'Test de la connexion...';
$_lang["btnback_value"] = 'Pr�cedent';
$_lang["btnnext_value"] = 'Suivant';
$_lang["retry"] = 'R�essayer';
$_lang["alert_enter_database_name"] = 'Vous devez saisir le nom de la base de donn�es!';
$_lang["alert_table_prefixes"] = 'Les pr�fixes de table doivent commencer par une lettre!';
$_lang["alert_enter_host"] = 'Vous devez saisir une adresse You need to enter a value for database host!';
$_lang["alert_enter_login"] = 'Vous devez saisir un nom d\'utilisateur pour la base de donn�es!';
$_lang["alert_enter_adminlogin"] = 'Vous devez saisir un nom d\'utilisateur pour le compte administrateur du syst�me!';
$_lang["alert_enter_adminpassword"] = 'Vous devez saisir un mot de passe pour le compte administrateur du syst�me!';
$_lang["alert_enter_adminconfirm"] = 'Le mot de passe administrateur et la confirmation du mot de passe ne correspondent pas!';
$_lang["iagree_box"] = 'J\'accepte le contrat de license.';
$_lang["btnclose_value"] = 'Fermer';
$_lang["running_setup_script"] = 'Execution du script d\'installation... Veuillez patienter';
$_lang["modx_footer1"] = '&copy; 2005-2007 the <a href="http://www.modxcms.com/" target="_blank" style="color: green; text-decoration:underline">MODx</a> Content Management Framework (CMF) project. All rights reserved. MODx is licensed under the GNU GPL.';
$_lang["modx_footer2"] = 'MODx est un logiciel libre.  Nous vous encourageons � �tre cr�atifs et � utiliser MODx comme bon il vous semble. Votre seule obligation est de redistribuer gratuitement! votre version modifi�e de MODx.';
$_lang["setup_database"] = 'Le programme d\'installation va tenter de configurer la base de donn�es:<br />';
$_lang["setup_database_create_connection"] = 'Creation de la connexion � la base de donn�es: ';
$_lang["setup_database_create_connection_failed"] = 'Echec de connexion � la base de donn�es!';
$_lang["setup_database_create_connection_failed_note"] = 'Veuillez v�rifier les param�tres de connexion � la base de donn�es et r�essayer.';
$_lang["setup_database_selection"] = 'S�lection de la base de donn�es `';
$_lang["setup_database_selection_failed"] = 'La s�lection de la base de donn�es a �chou�...';
$_lang["setup_database_selection_failed_note"] = 'La base de donn�es n\'existe pas. Le programme d\'installation va essayer de la cr�er.';
$_lang["setup_database_creation"] = 'Creation de la base de donn�es `';
$_lang["setup_database_creation_failed"] = 'La cr�ation de la base de donn�es a �chou�!';
$_lang["setup_database_creation_failed_note"] = ' - Le programme d\'installation n\'a pas pu cr�er la base de donn�es!';
$_lang["setup_database_creation_failed_note2"] = 'Le programme d\'installation n\'a pas pu cr�er la base de donn�es, et aucune base de donn�es existante avec le m�me nom n\'a �t� trouv�e. Vraisemblablement, les r�glages de s�curit� de votre h�bergeur n\'autorisent pas les scripts externes � cr�er une base de donn�es. Veuillez suivre la proc�dure mise � disposition par votre h�bergeur afin de cr�er la base, puis recommencez l\'installation.';
$_lang["setup_database_creating_tables"] = 'Creation des tables de la base: ';
$_lang["database_alerts"] = 'Alertes de la base!';
$_lang["setup_couldnt_install"] = 'Le programme d\'installation n\'a pas pu cr�er/modifier certaines tables dans la base de donn�es sp�cifi�e.';
$_lang["installation_error_occured"] = 'Les erreurs suivantes se sont produites au cours de l\'installation';
$_lang["during_execution_of_sql"] = ' lors de l\'execiton de la requ�te SQL ';
$_lang["some_tables_not_updated"] = 'Certaines tables n\'ont pas �t� mises � jour. Ceci peut �tre du � des modifications pr�c�dentes.';
$_lang["installing_demo_site"] = 'Installation du site de d�monstration: ';
$_lang["writing_config_file"] = 'Ecriture des fichiers de configuration: ';
$_lang["cant_write_config_file"] = 'MODx n\'a pas pu �crire le fichier de configuration. Veuillez copier/coller ceci dans le fichier ';
$_lang["cant_write_config_file_note"] = 'Une fois l\'op�ration effectu�e, vous pouvez vous connecter � l\'interface administrateur de MODx en utilisant l\'adresse  VotreSite.com/manager/.';
$_lang["unable_install_template"] = 'Impossible d\'installer le gabarit.  Fichier';
$_lang["unable_install_chunk"] = 'Impossible d\'installer le chunk.  Fichier';
$_lang["unable_install_module"] = 'Impossible d\'installer le module.  Fichier';
$_lang["unable_install_plugin"] = 'Impossible d\'installer le plugin.  Fichier';
$_lang["unable_install_snippet"] = 'Impossible d\'installer le snippet.  File';
$_lang["not_found"] = 'non trouv�';
$_lang["upgraded"] = 'Mis � jour';
$_lang["installed"] = 'Install�';
$_lang["running_database_updates"] = 'Mise � jour de la base de donn�es: ';
$_lang["installation_successful"] = 'Installation r�alis�e avec succ�s!';
$_lang["to_log_into_content_manager"] = 'Pour vous connecter au gestionnaire de contenu (manager/index.php) cliquez sur le bouton `Fermer`.';
$_lang["install"] = 'Install';
$_lang["remove_install_folder_auto"] = 'Effacer automatiquement le repertoire &quot;<b>install</b>&quot; de mon site <br />&nbsp;(Cette op�ration n�cessite des droits d\'acc�s en effacement sur le r�pertoire &quot;<b>install</b>&quot;).';
$_lang["remove_install_folder_manual"] = 'Veuillez effacer le r�pertoire &quot;<b>install</b>&quot; avant de vous connecter au Gestionnaire de Contenu.';
$_lang["install_results"] = 'Etat de l\'installation';
$_lang["installation_note"] = '<strong>Information:</strong> Apr�s vous �tre connect� au manager, vous devez �diter et sauvegarder les param�tres de Configuration Syst�me avant de visiter le site en s�lectionnant <strong>Administration</strong> -> Configuration Syst�me dans le Gestionnaire MODx.';
$_lang["upgrade_note"] = '<strong>Information:</strong> Avant de visiter le site, il vous est conseill� de vous connecter en tant qu\'administrateur au Gestionnaire et de v�rifier les param�tres de Configuration Syst�me.';
?>