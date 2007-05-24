<?php
/**
 * MODx language File
 *
 * @author davaeron
 * @package MODx
 * @version 1.0
 *
 * Filename:       /install/lang/svenska/svenska.inc.php
 * Language:       Svenska
 * Encoding:       iso-8859-1
 *
 * Translation: Pontus �gren (Pont)
 * Date: 2007-05-24
 */




$_lang['license'] = '<p class="title">MODx Licensavtal</p>
    <hr style="text-align:left;height:1px;width:100%;" />
    <h4>Du m�ste godk�nna licensen innan installationen kan forts�tta.</h4>
    <p>Anv�ndning av den h�r mjukvaran lyder under GPL-licensen. F�r att hj�lpa dig f�rst�
       vad GPL-licensen �r och hur den p�verkar dina m�jligheter att anv�nda mjukvaran, s�
       har vi gjort f�ljande sammanfattning.</p>
    <h4>GNU General Public License (GPL) �r en licens f�r Fri Mjukvara.</h4>
    <p>Som alla licenser f�r Fri Mjukvara ger den dig f�ljande fyra friheter:</p>
    <ul>
        <li>Friheten att k�ra programmet f�r alla �ndam�l.</li>
        <li>Friheten att studera hur programmet fungerar och anpassa det efter dina �nskem�l.</li>
        <li>Friheten att distribuera kopior s� att du kan hj�lpa din granne. </li>
        <li>Friheten att f�rb�ttra programmet och publicera dina f�rb�ttringar till
            allm�nheten, s� att hela gemenskapen kan dra nytta av dom.</li>
    </ul>
    <p>Du kan �tnjuta de ovan specificerade friheterna f�rutsatt att du f�ljer
       de uttryckliga krav som licensen uttalar. De huvudsakliga kraven �r:</p>
    <ul>
        <li>Du m�ste p� varje kopia du distribuerar, tydligt och p� l�mpligt s�tt
            publicera ett till�mpligt meddelande om copyright och en garantifriskrivning,
            beh�lla alla meddelanden som refererar till den h�r licensen och fr�nvaron
            av garanti samt ge varje mottagare av programmet en kopia av GNU GPL-licensen
            tillsammans med programmet. Alla �vers�ttningar av GNU GPL-licensen m�ste
            �tf�ljas av det o�versatta originalet.</li>

        <li>Om du modifierar din kopia eller kopior av programmet eller n�gon del av det,
            eller utvecklar ett program baserat p� det, s� f�r du distribuera det resulterande
            arbetet f�rutsatt att du g�r det under GNU GPL-licensen. Alla �vers�ttningar av
            GNU GPL-licensen m�ste �tf�ljas av det o�versatta originalet.</li>

        <li>Om du kopierar eller distribuerar programmet, s� m�ste det �tf�ljas av den
            motsvarande kompletta maskinl�sbara k�llkoden eller ett skriftligt erbjudande,
            giltigt minst tre �r, att l�mna ut den motsvarande kompletta maskinl�sbara
            k�llkoden.</li>

        <li>Ovanst�ende krav kan h�vas om du ges till�telse av innehavaren av copyrighten.</li>

        <li>Din r�tt att citera samt andra r�ttigheter p�verkas inte av ovanst�ende.</li>
    </ul>
    <p>Ovanst�ende �r en sammanfattning av GNU GPL-licensen. Genom att forts�tta godk�nner du
       GNU GPL-licensen - inte ovanst�ende. Ovanst�ende �r en enkel sammanfattning och dess korrekthet
       kan inte garanteras. En stark rekommendation �r att du l�ser den fullst�ndiga <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU GPL-licensen</a> innan du
       forts�tter. Den �terfinns ocks� i filen license.txt som distribueras tillsammans med det h�r
       programmet.<br />
       Det finns en <a href="http://danielnylander.se/gpl/" target="_blank">inofficiell svensk
       �vers�ttning</a>.</p>';
$_lang["encoding"] = 'iso-8859-1';	//charset encoding for html header
$_lang["modx_install"] = 'MODx &raquo; Installation';
$_lang["loading"] = 'Laddar...';
$_lang["Begin"] = 'Starta';
$_lang["status_connecting"] = ' Anslutning till v�rddatorn: ';
$_lang["status_failed"] = 'misslyckades!';
$_lang["status_passed"] = 'godk�nd';
$_lang["status_checking_database"] = '...    Kontrollerar databas: ';
$_lang["status_failed_could_not_select_database"] = 'misslyckades - kunde inte v�lja databas';
$_lang["status_failed_table_prefix_already_in_use"] = 'misslyckades - tabellprefixet anv�nds redan!';
$_lang["welcome_message_welcome"] = 'V�lkommen till installationsprogrammet f�r MODx.';
$_lang["welcome_message_text"] = 'Det h�r programmet kommer att v�gleda dig genom hela installationen.';
$_lang["welcome_message_select_begin_button"] = 'Klicka p� "Starta" f�r att forts�tta:';
$_lang["installation_mode"] = 'Installationstyp';
$_lang["installation_new_installation"] = 'Ny installation';
$_lang["installation_install_new_copy"] = 'Installera en ny kopia av ';
$_lang["installation_install_new_note"] = '<br />Observera att detta valet kan skriva �ver data som finns i databasen.';
$_lang["installation_upgrade_existing"] = 'Uppgradera existerande<br />installation';
$_lang["installation_upgrade_existing_note"] = 'Uppgradera dina nuvarande filer och databas.';
$_lang["installation_upgrade_advanced"] = 'Avancerad uppgradering<br />av installation<br /><small>(redigera databasens konfiguration)</small>';
$_lang["installation_upgrade_advanced_note"] = 'F�r avancerade databasadministrat�rer eller vid flytt till servrar med en annan teckenupps�ttning f�r anslutning.<br /><b>Du kommer att beh�va databasens fullst�ndiga namn, anv�ndarenamn, l�senord och anslutnings/kollationeringsdetaljer.</b>';
$_lang["connection_screen_connection_information"] = 'Anslutningsuppgifter';
$_lang["connection_screen_connection_and_login_information"] = 'Databasens anslutnings- och inloggningsuppgifter';
$_lang["connection_screen_connection_note"] = 'Ange namnet p� databasen som skapats f�r MODx. Om det inte finns n�gon databas �n kommer installationsprogrammet att f�rs�ka skapa en �t dig. Det h�r kan komma att misslyckas beroende p� MySQL-konfigurationen eller databasens �tkomstr�ttigheter f�r din dom�n/installation.';
$_lang["connection_screen_database_name"] = 'Databasnamn:';
$_lang["connection_screen_table_prefix"] = 'Tabellprefix:';
$_lang["connection_screen_collation"] = 'Kollationering:';
$_lang["connection_screen_character_set"] = 'Teckenupps�ttning f�r anslutning:';
$_lang["connection_screen_database_info"] = 'Ange inloggningsuppgifterna f�r din databas.';
$_lang["connection_screen_database_host"] = 'Databasens v�rd:';
$_lang["connection_screen_database_login"] = 'Databasens inloggningsnamn:';
$_lang["connection_screen_database_pass"] = 'Databasens l�senord:';
$_lang["connection_screen_test_connection"] = 'Prova anslutningen';
$_lang["connection_screen_default_admin_user"] = 'Administrat�rskonto';
$_lang["connection_screen_default_admin_note"] = 'Nu ska du ange ett antal uppgifter f�r det administrativa kontot. Du kan fylla i ditt eget namn h�r och ett l�senord som du inte gl�mmer i f�rsta taget. Du kommer att beh�va de h�r uppgifterna n�r du ska logga in p� det administrativa kontot efter att installationen �r klar.';
$_lang["connection_screen_default_admin_login"] = 'Administrat�rens anv�ndarnamn:';
$_lang["connection_screen_default_admin_email"] = 'Administrat�rens epost:';
$_lang["connection_screen_default_admin_password"] = 'Administrat�rens l�senord:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Bekr�fta l�senord:';
$_lang["optional_items"] = 'Valbara alternativ';
$_lang["optional_items_note"] = 'Ange dina installationsalternativ och klicka p� Installera:';
$_lang["sample_web_site"] = 'Prov-webbplats';
$_lang["install_overwrite"] = 'Installera/skriv �ver';
$_lang["sample_web_site_note"] = 'Observera att detta kommer att <b style="color:#CC0000;">skriva �ver</b> existerande dokument och resurser.';
$_lang["checkbox_select_options"] = 'Alternativ f�r kryssrutor:';
$_lang["all"] = 'Alla';
$_lang["none"] = 'Inga';
$_lang["toggle"] = 'V�xla';
$_lang["templates"] = 'Mallar';
$_lang["install_update"] = 'Installera/uppdatera';
$_lang["chunks"] = 'Chunks';
$_lang["modules"] = 'Moduler';
$_lang["plugins"] = 'Plugins';
$_lang["snippets"] = 'Snippets';
$_lang["preinstall_validation"] = 'Kontroller innan installation';
$_lang["summary_setup_check"] = 'Installationsprogrammet har gjort ett antal test f�r att kontrollera att allt �r klart f�r att starta installationen.';
$_lang["checking_php_version"] = "Kontrollerar PHP-version: ";
$_lang["failed"] = 'Misslyckades!';
$_lang["ok"] = 'OK!';
$_lang["you_running_php"] = ' - Du k�r PHP ';
$_lang["modx_requires_php"] = ', och MODx kr�ver PHP 4.1.0 eller senare.';
$_lang["php_security_notice"] = '<legend>S�kerhetsmeddelande</legend><p>�ven om MODx kommer att fungera med din PHP-version, s� rekommenderas det inte att anv�nda MODx med den versionen. Din PHP-version �r s�rbar f�r ett antal s�kerhetsh�l. Uppgradera till PHP-version 4.3.8 eller senare, vilka �tg�rdar de h�r h�len. Det rekommenderas att du uppgraderar till den h�r versionen f�r att skydda din webbplats.</p>';
$_lang["checking_sessions"] = 'Kontrollerar att sessioner �r korrekt konfigurerade: ';
$_lang["checking_if_cache_exist"] = 'Kontrollerar att katalogen <span class="mono">assets/cache</span> existerar: ';
$_lang["checking_if_cache_writable"] = 'Kontrollerar att katalogen <span class="mono">assets/cache</span> �r skrivbar: ';
$_lang["checking_if_cache_file_writable"] = 'Kontrollerar att filen <span class="mono">assets/cache/siteCache.idx.php</span> �r skrivbar: ';
$_lang["checking_if_cache_file2_writable"] = 'Kontrollerar att filen <span class="mono">assets/cache/sitePublishing.idx.php</span> �r skrivbar: ';
$_lang["checking_if_images_exist"] = 'Kontrollerar att katalogen <span class="mono">assets/images</span> existerar: ';
$_lang["checking_if_images_writable"] = 'Kontrollerar att katalogen <span class="mono">assets/images</span> �r skrivbar: ';
$_lang["checking_if_export_exists"] = 'Kontrollerar att katalogen <span class="mono">assets/export</span> existerar: ';
$_lang["checking_if_export_writable"] = 'Kontrollerar att katalogen <span class="mono">assets/export</span> �r skrivbar: ';
$_lang["checking_if_config_exist_and_writable"] = 'Kontrollerar att filen <span class="mono">manager/includes/config.inc.php</span> existerar och �r skrivbar: ';
$_lang["config_permissions_note"] = 'F�r nya installationer i Linux/Unix-milj� m�ste en tom fil med namnet <span class="mono">config.inc.php</span> skapas i katalogen <span class="mono">manager/includes/</span> med �tkomstr�ttigheterna satta till 0666.';
$_lang["creating_database_connection"] = 'Skapar en anslutning till databasen: ';
$_lang["database_connection_failed"] = 'Anslutningen till databasen misslyckades!';
$_lang["database_connection_failed_note"] = 'Kontrollera databasens inloggningsuppgifter och f�rs�k igen.';
$_lang["database_use_failed"] = 'Databasen kunde inte v�ljas!';
$_lang["database_use_failed_note"] = 'Kontrollera databasens �tkomstr�ttigheter f�r den angivna anv�ndaren och f�rs�k igen.';
$_lang["checking_table_prefix"] = 'Kontrollerar tabellprefixet `';
$_lang["table_prefix_already_inuse"] = ' - Tabellprefixet anv�nds redan i den h�r databasen!';
$_lang["table_prefix_already_inuse_note"] = 'Installationsprogrammet kunde inte installera i den valda databasen eftersom den redan inneh�ller tabeller med det prefix du angav. Ange ett nytt prefix och k�r installationsprogrammet igen.';
$_lang["table_prefix_not_exist"] = ' - Tabellprefixet finns inte i den h�r databsen!';
$_lang["table_prefix_not_exist_note"] = 'Installationsprogrammet kunde inte installera i den valda databasen eftersom den inte inneh�ller tabeller med det prefix du angav f�r uppgradering. V�lj ett existerande prefix och k�r installationsprogrammet igen.';
$_lang["setup_cannot_continue"] = 'Installationsprogrammet kan tyv�rr inte forts�tta p� grund av ovanst�ende ';
$_lang["error"] = 'fel';
$_lang["errors"] = 'fel'; //Plural form
$_lang["please_correct_error"] = '. Korrigera felet';
$_lang["please_correct_errors"] = '. Korrigera felen'; //Plural form
$_lang["and_try_again"] = ', och f�rs�k igen. Om du beh�ver hj�lp med att klura ut hur du ska �tg�rda problemet';
$_lang["and_try_again_plural"] = ', och f�rs�k igen. Om du beh�ver hj�lp med att klura ut hur du ska �tg�rda problemen'; //Plural form
$_lang["visit_forum"] = ', s� bes�k <a href="http://www.modxcms.com/forums/" target="_blank">MODx forum</a>.';
$_lang["testing_connection"] = 'Kontrollerar anslutningen...';
$_lang["btnback_value"] = 'Tillbaka';
$_lang["btnnext_value"] = 'N�sta';
$_lang["retry"] = 'F�rs�k igen';
$_lang["alert_enter_database_name"] = 'Du m�ste ange ett namn p� databasen!';
$_lang["alert_table_prefixes"] = 'Tabellprefix m�ste b�rja med en bokstav!';
$_lang["alert_enter_host"] = 'Du m�ste ange en v�rd f�r databasen!';
$_lang["alert_enter_login"] = 'Du m�ste ange databasens inloggningsnamn!';
$_lang["alert_enter_adminlogin"] = 'Du m�ste ange ett anv�ndarnamn f�r systemets administrativa konto!';
$_lang["alert_enter_adminpassword"] = 'Du m�ste ange ett l�senord f�r systemets administrativa konto!';
$_lang["alert_enter_adminconfirm"] = 'Det administrativa l�senordet och bekr�ftelsen �verensst�mmer inte!';
$_lang["iagree_box"] = 'Jag godk�nner villkoren i denna licens.';
$_lang["btnclose_value"] = 'St�ng';
$_lang["running_setup_script"] = 'K�r installationsprogrammet... v�nta lite';
$_lang["modx_footer1"] = '&copy; 2005-2007 the <a href="http://www.modxcms.com/" target="_blank" style="color: green; text-decoration:underline">MODx</a> Content Mangement Framework (CMF) project. Med ensamr�tt. MODx �r licensierad under GNU GPL.';
$_lang["modx_footer2"] = 'MODx �r fri programvara. Vi uppmuntrar dig att vara kreativ och anv�nda MODx p� vilket s�tt du vill. Vara bara noga med att bevara k�llkoden fri om du g�r �ndringar och sedan v�ljer att omdistribuera din modifierade version av MODx.';
$_lang["setup_database"] = 'Installationsprogrammet kommer nu att f�rs�ka konfigurera databasen:<br />';
$_lang["setup_database_create_connection"] = 'Skapar anslutning till databasen: ';
$_lang["setup_database_create_connection_failed"] = 'Anslutningen till databasen misslyckades!';
$_lang["setup_database_create_connection_failed_note"] = 'Kontrollera databasens inloggningsuppgifter och f�rs�k igen.';
$_lang["setup_database_selection"] = 'V�ljer databas `';
$_lang["setup_database_selection_failed"] = 'Val av databas misslyckades...';
$_lang["setup_database_selection_failed_note"] = 'Databasen existerar inte. Installationsprogrammet kommer att f�rs�ka skapa den.';
$_lang["setup_database_creation"] = 'Skapar databas `';
$_lang["setup_database_creation_failed"] = 'Databasen kunde inte skapas!';
$_lang["setup_database_creation_failed_note"] = ' - Installationsprogrammet kunde inte skapa databasen!';
$_lang["setup_database_creation_failed_note2"] = 'Installationsprogrammet kunde inte skapa databasen och ingen databas med samma namn existerar. Det �r troligt att din webbhosts s�kerhetsint�llningar inte till�ter externa script att skapa en databas. Skapa en databas enligt webbhostens instruktioner och k�r installationsprogrammet igen.';
$_lang["setup_database_creating_tables"] = 'Skapar databastabeller: ';
$_lang["database_alerts"] = 'Databasvarningar!';
$_lang["setup_couldnt_install"] = 'MODx installationsprogram kunde inte l�gga till/�ndra n�gra tabeller i den valda databasen.';
$_lang["installation_error_occured"] = 'F�ljande fel uppstog under installationen';
$_lang["during_execution_of_sql"] = ' under k�rningen av SQL-fr�gan ';
$_lang["some_tables_not_updated"] = 'N�gra tabeller uppdaterades inte. Det h�r kan bero p� tidigare modifikationer.';
$_lang["installing_demo_site"] = 'Installerar prov-webbplats: ';
$_lang["writing_config_file"] = 'Skriver konfigurationsfil: ';
$_lang["cant_write_config_file"] = 'MODx kunde inte skriva konfigurationsfilen. Kopiera f�ljande till filen ';
$_lang["cant_write_config_file_note"] = 'N�r det �r klart kan du logga in i MODx administrationskonto genom att ange adressen DinWebbplats.se/manager/ i din webbl�sare.';
$_lang["unable_install_template"] = 'Kunde inte installera mall.  Fil';
$_lang["unable_install_chunk"] = 'Kunde inte installera chunk.  Fil';
$_lang["unable_install_module"] = 'Kunde inte installera modul.  File';
$_lang["unable_install_plugin"] = 'Kunde inte installera plugin.  Fil';
$_lang["unable_install_snippet"] = 'Kunde inte installera snippet.  Fil';
$_lang["not_found"] = 'hittades inte';
$_lang["upgraded"] = 'Uppgraderad';
$_lang["installed"] = 'Installerad';
$_lang["running_database_updates"] = 'K�r uppdateringar f�r databasen: ';
$_lang["installation_successful"] = 'Installationen lyckades!';
$_lang["to_log_into_content_manager"] = 'Du kan logga in i inneh�llshanteraren (manager/index.php) genom att klicka p� \"St�ng\"-knappen.';
$_lang["install"] = 'Installera';
$_lang["remove_install_folder_auto"] = 'Ta bort installations-katalogen och -filerna fr�n min webbplats<br />&nbsp;(Den h�r operationen kr�ver att raderingsr�ttigheter �r angivna f�r installationskatalogen).';
$_lang["remove_install_folder_manual"] = 'Kom ih�g att ta bort katalogen &quot;<b>install</b>&quot; innan du loggar in i inneh�llshanteraren.';
$_lang["install_results"] = 'Installationsresultat';
$_lang["installation_note"] = '<strong>Notera:</strong> Efter att ha loggat in i inneh�llshanteraren b�r du redigera och spara dina systeminst�llningar innan du b�rjar arbeta med din webbplats. G� till Verktyg -> Konfiguration i inneh�llshanteraren.';
$_lang["upgrade_note"] = '<strong>Notera:</strong> Innan du b�rjar surfa p� din webbplats b�r du logga in i inneh�llshanteraren p� ett administrativt konto och kontrollera och spara dina konfigurationsinst�llningar.';
?>