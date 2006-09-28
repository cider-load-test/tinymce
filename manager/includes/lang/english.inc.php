<?php
/**
 * Filename:       includes/lang/english.inc.php
 * Function:       Default English language file.
 * Encoding:       ISO-Latin-1
 * Author:         The MODx Project Team (originally by Alex Butter)
 * Date:           2005/10/25
 * Version:        1.7
 * MODx version:   0.9.1
*/
// NOTE: New language keys should added at the bottom of this page

$_lang["login_message"] = 'Please enter your login credentials to start your Manager session. Your username and password are case-sensitive, so please enter them carefully!';
$_lang["username"] = 'Username';
$_lang["password"] = 'Password';
$_lang["remember_username"] = 'Remember me';
$_lang["login_button"] = 'Login';
$_lang["home"] = 'Home';

$_lang["my_preferences"] = 'Preferences';
$_lang["site"] = 'Site';
$_lang["launch_site"] = 'View Site';
$_lang["refresh_site"] = 'Clear Cache';
$_lang["content"] = 'Content';
$_lang["add_document"] = 'New Document';
$_lang["add_weblink"] = 'New Weblink';
$_lang["site_schedule"] = 'Schedule';
$_lang["visitor_stats"] = 'Statistics';
$_lang["messages"] = 'Messages';
$_lang["users"] = 'Security';
$_lang["change_password"] = 'Change Password';
$_lang["new_user"] = 'New user';
$_lang["edit_user"] = 'Edit user';
$_lang["new_role"] = 'Create a new role';
$_lang["edit_role"] = 'Edit role';
$_lang["access_permissions"] = 'Access permissions';
$_lang["administration"] = 'Administration';
$_lang["edit_settings"] = 'Configuration';
$_lang["view_sysinfo"] = 'System Info';
$_lang["edit_parser"] = 'Edit parsers';
$_lang["site_parser"] = 'Site parser';
$_lang["action_parser"] = 'Action parser';
$_lang["view_logging"] = 'Manager Actions';
$_lang["manage_files"] = 'Manage Files';
$_lang["remove_locks"] = 'Remove Locks';
$_lang["resources"] = 'Resources';
$_lang["new_template"] = 'New template';
$_lang["edit_template"] = 'Edit template';
$_lang["new_snippet"] = 'New snippet';
$_lang["edit_snippet"] = 'Edit snippet';
$_lang["document_tree"] = 'Document tree';
$_lang["refresh_tree"] = 'Refresh tree';
$_lang["expand_tree"] = 'Expand tree';
$_lang["collapse_tree"] = 'Collapse tree';
$_lang["hide_tree"] = 'Hide tree';
$_lang["show_tree"] = 'Show tree';
$_lang["restore_tree"] = 'Restore tree (default width)';
$_lang["help"] = 'Help';
$_lang["credits"] = 'Credits';
$_lang["about"] = 'About MODx';
$_lang["rebuild"] = 'Rebuild';
$_lang["menu"] = 'Menu';
$_lang["tree"] = 'Tree';
$_lang["manager"] = 'Manager';
$_lang["test_page"] = 'Test page';
$_lang["logout"] = 'Logout';
$_lang["nojava"] = 'Java seems to be disabled. Click <a href="index.php?a=1&f=9&javaDis=1">here</a> to load the non-java menu.';
$_lang["confirm_empty_trash"] = 'This will permanently remove ALL deleted documents?\n\nProceed?'; // changed 06 RC2
$_lang["unable_set_parent"] = 'Unable to set new parent!';
$_lang["confirm_delete_document"] = 'Are you sure you want to delete this document?\nAny children documents will also be deleted.';
$_lang["already_deleted"] = 'has already been deleted.';
$_lang["not_deleted"] = 'has not been deleted.';
$_lang["confirm_undelete"] = '\n\nAny children documents deleted at the same time as this document will also be undeleted, but children documents deleted at an earlier time will still be deleted.';
$_lang["confirm_publish"] = '\n\nPublishing this document now will remove any (un)publishing dates that may have been set. If you wish to set or keep publish or unpublish dates, please choose to \'edit\' the document instead.\n\nProceed?';
$_lang["confirm_unpublish"] = '\n\nUn-publishing this document now will remove any (un)publishing dates that may have been set. If you wish to set or keep publish or unpublish dates, please choose to \'edit\' the document instead.\n\nProceed?';
$_lang["view_document"] = 'View document';
$_lang["edit_document"] = 'Edit document';
$_lang["move_document"] = 'Move document';
$_lang["create_document_here"] = 'Create document here';
$_lang["create_weblink_here"] = 'Create weblink here';
$_lang["delete_document"] = 'Delete document';
$_lang["undelete_document"] = 'Undelete document';
$_lang["publish_document"] = 'Publish document';
$_lang["unpublish_document"] = 'Un-publish document';
$_lang["published_document"] = 'This is a published document.';
$_lang["unpublished_document"] = 'This is an un-published document.';
$_lang["deleted_document"] = 'This is a deleted document.';
$_lang["published_folder"] = 'This is a published folder.';
$_lang["unpublished_folder"] = 'This is an un-published folder.';
$_lang["deleted_folder"] = 'This is a deleted folder.';
$_lang["published_weblink"] = 'This is a published weblink.';
$_lang["unpublished_weblink"] = 'This is an un-published weblink.';
$_lang["deleted_weblink"] = 'This is a deleted weblink.';
$_lang["published_weblink_folder"] = 'This is a published weblink folder.';
$_lang["unpublished_weblink_folder"] = 'This is an un-published weblink folder.';
$_lang["deleted_weblink_folder"] = 'This is a deleted weblink folder.';
$_lang["recycle_bin"] = 'Recycle Bin'; // obsolete
$_lang["empty_recycle_bin"] = 'Purge deleted documents'; // changed 06 rc 2
$_lang["deleted_in_tree"] = 'Show deleted in tree'; // obsolete
$_lang["deleted_in_recycle_bin"] = 'Show deleted in Recycle Bin'; // obsolete
$_lang["recycle_bin_empty"] = 'The Recycle Bin is empty.'; // obsolete
$_lang["loading_doc_tree"] = 'Loading document tree...';
$_lang["loading_menu"] = 'Loading menu...';
$_lang["loading_menu_tree"] = 'Loading document tree and menu...';
$_lang["working"] = 'Working...';
$_lang["confirm_remove_locks"] = 'Users sometimes close their browser while editing documents, templates, snippets or parsers, possibly leaving the item they were editing in locked state. By pressing OK you can remove ALL locks currently in place.\n\nProceed?';
$_lang["welcome_title"] = 'Welcome to your MODx Content Manager';
$_lang["welcome_messages"] = 'Your Inbox contains <strong>%d</strong> message(s), of which <strong>%s</strong> are unread.';
$_lang["activity_title"] = 'Recently edited/ created documents';
$_lang["activity_message"] = 'This list shows the last documents you created or edited:';
$_lang["no_activity_message"] = 'You have not yet created or edited any documents.';
$_lang["yourinfo_title"] = 'Your info';
$_lang["yourinfo_message"] = 'This section shows some information about you:';
$_lang["yourinfo_username"] = 'You are logged in as:';
$_lang["yourinfo_role"] = 'Your role is:';
$_lang["yourinfo_previous_login"] = 'Your last login:';
$_lang["yourinfo_total_logins"] = 'Total number of logins:';
$_lang["onlineusers_title"] = 'Online users';
$_lang["onlineusers_message"] = 'This list shows all users active within the last 20 minutes (current time is ';
$_lang["onlineusers_user"] = 'User';
$_lang["onlineusers_userid"] = 'User\'s ID';
$_lang["onlineusers_ipaddress"] = 'User\'s IP address';
$_lang["onlineusers_lasthit"] = 'Last hit';
$_lang["onlineusers_action"] = 'Action';
$_lang["configcheck_title"] = 'Configuration check';
$_lang["configcheck_notok"] = 'One or more configuration details didn\'t check out OK: ';
$_lang["configcheck_ok"] = 'Check passed OK - no warnings to report.';
$_lang["configcheck_warning"] = 'Configuration warning:';
$_lang["configcheck_admin"] = 'Please contact a systems administrator and warn them about this message!';
$_lang["configcheck_what"] = 'What does this mean?';
$_lang["configcheck_installer"] = 'installer still present';
$_lang["configcheck_installer_msg"] = 'The install/ directory contains the installer for MODx. Just imagine what might happen if an evil person finds this folder and runs the installer! He\'d probably not get too far, because he\'ll need to enter some user information for the database, but it\'s still best to remove this folder from your server.';
$_lang["configcheck_cache"] = 'cache directory not writable';
$_lang["configcheck_cache_msg"] = 'MODx cannot write to the cache directory. MODx will still function as expected, but no caching will take place. To solve this, make the /_cache/ directory writable.';
$_lang["configcheck_lang_difference"] = 'incorrect number of entries in language file';
$_lang["configcheck_lang_difference_msg"] = 'The currently selected language has a different number of entries than the default language. While not necessarily a problem, this may mean the language file needs to be updated.';
$_lang["configcheck_default_msg"] = 'An unspecified warning was found. Which is strange.';
$_lang["clicktopin"] = 'Click to pin this section.';
$_lang["clicktounpin"] = 'Click to unpin this section.';
$_lang["clickonsection"] = 'Click here to expand or collapse this section.';
$_lang["edit"] = 'Edit';
$_lang["save"] = 'Save';
$_lang["delete"] = 'Delete';
$_lang["cancel"] = 'Cancel';
$_lang["find_in_tree"] = 'Find in tree'; // obsolete per 06 RC2
$_lang["preview"] = 'Preview';
$_lang["move"] = 'Move';
$_lang["yes"] = 'Yes';
$_lang["no"] = 'No';
$_lang["online"] = 'Online';
$_lang["offline"] = 'Offline';
$_lang["advanced"] = 'Advanced';
$_lang["regular"] = 'Regular';
$_lang["showing"] = 'Showing';
$_lang["to"] = 'to';
$_lang["total"] = 'total';
$_lang["settings_title"] = 'System configuration';
$_lang["serveroffset_title"] = 'Server offset time:';
$_lang["serveroffset_message"] = 'Select the number of hours time difference between where you are and where the server is. Current time on server is <b>[%s]</b>, current time on server using the currently saved offset is <b>[%s]</b>.';
$_lang["sitename_title"] = 'Site name:';
$_lang["sitename_message"] = 'Enter the name of your site here.';
$_lang["sitestart_title"] = 'Site start:';
$_lang["sitestart_message"] = 'Enter the ID of the document you want to use as homepage here. <b>NOTE: make sure this ID you enter belongs to an existing document, and that it has been published!</b>';
$_lang["errorpage_title"] = 'Error page:';
$_lang["errorpage_message"] = 'Enter the ID of the document you want to send users to if they request a document which doesn\'t actually exist. <b>NOTE: make sure this ID you enter belongs to an existing document, and that it has been published!</b>';
$_lang["sitestatus_title"] = 'Site status:';
$_lang["sitestatus_message"] = 'Select \'online\' to publish your site on the web. If you select \Offline\', your visitors will see the \'Site unavailable message\', and won\'t be able to browse the site.';
$_lang["siteunavailable_title"] = 'Site unavailable message:';
$_lang["siteunavailable_message"] = 'Message to show when the site is offline or if an error occurs. <b>Note: This message will only be displayed if the Site unavailable page option is not set.</b>';
$_lang["friendlyurls_title"] = 'Use friendly URLs:';
$_lang["friendlyurls_message"] = 'This allows you to use search engine friendly URLs with MODx. Please note, this only works for MODx installations running on Apache, and you\'ll need to write a .htaccess file for this to work. See the .htaccess file included in the distribution for more info.';
$_lang["friendlyurlsprefix_title"] = 'Prefix for friendly URLs:';
$_lang["friendlyurlsprefix_message"] = 'Here you can specify the prefix to use for friendly URLs. For example, a prefix setting of \'page\' will turn the URL /index.php?id=2 to the friendly URL /page2.html (assuming the suffix is set to .html). This way you can specify what your users (and search engines) see for links on your site.'; // updated 0.6 - removed htaccess warning
$_lang["friendlyurlsuffix_title"] = 'Suffix for friendly URLs:';
$_lang["friendlyurlsuffix_message"] = 'Here you can specify the suffix for Friendly URLs. Specifying \'.html\' will append .html to all your friendly URLs.'; // updated 0.6 - removed htaccess warning
$_lang["udperms_title"] = 'Use access permissions:';
$_lang["udperms_message"] = 'Access permissions allow you to specify which pages your users are allowed to edit. You\'ll need to assign your users to user groups, your documents to document groups, and then you\'ll need to specify which user groups are allowed to access which document groups. When you first turn this on, only administrators will be allowed to edit any documents.'; // updated 0.6
$_lang["menutype_title"] = 'Menu type:';
$_lang["menutype_message"] = 'Select whether you want to use the advanced Java menu or the regular plain text menu. [Currently you can\'t change this as I still need to re-write the non-java menu, sorry!]';
$_lang["nologentries_title"] = 'Number of log entries:';
$_lang["nologentries_message"] = 'Enter the number of log entries shown per page when you browse the Audit trail.';
$_lang["nomessages_title"] = 'Number of messages:';
$_lang["nomessages_message"] = 'Enter the number of messages to show in inbox when viewing messages.';
$_lang["language_title"] = 'Language:';
$_lang["language_message"] = 'Select the language for the MODx Content Manager.';
$_lang["graphtype_title"] = 'Graph type:';
$_lang["graphtype_message"] = 'Selecting \'Advanced\' will anti-alias the graphs in your reports, but will use more processor power. However, the graphs will look a lot better.';
$_lang["showgraphs_title"] = 'Show graphs:';
$_lang["showgraphs_message"] = 'When generating visitor statistics reports, do you want to show the values in graphs as well as tabular data?';
$_lang["showtestpage_title"] = 'Allow test page:';
$_lang["showtestpage_message"] = 'You can use the Test Page for testing snippets you\'re building. However, if you\'re not using the Test Page, you might want to remove it from the menu by checking \'No\'.';
$_lang["enabledebug_title"] = 'Enable debug:';
$_lang["enabledebug_message"] = 'Selecting \'Yes\' will show some debug information about the different functions in MODx. Generally, you won\'t need to use this, however, if you\'re trying to solve a bug, it may be handy to turn this on.';
$_lang["doc_data_title"] = 'View document data';
$_lang["page_data_title"] = 'Page data';
$_lang["page_data_general"] = 'General';
$_lang["document_title"] = 'Title';
$_lang["document_description"] = 'Description';
$_lang["page_data_changes"] = 'Changes';
$_lang["notset"] = 'Not set';
$_lang["page_data_created"] = 'Created';
$_lang["page_data_edited"] = 'Edited';
$_lang["page_data_status"] = 'Status';
$_lang["page_data_published"] = 'Published';
$_lang["page_data_unpublished"] = 'Un-published';
$_lang["page_data_publishdate"] = 'Publish date';
$_lang["page_data_unpublishdate"] = 'Un-publish date';
$_lang["page_data_cacheable"] = 'Cacheable';
$_lang["page_data_searchable"] = 'Searchable';
$_lang["page_data_markup"] = 'Markup/ structure';
$_lang["page_data_template"] = 'Uses template';
$_lang["page_data_editor"] = 'Edit using rich text editor';
$_lang["page_data_folder"] = 'Document is folder';
$_lang["page_data_source"] = 'Source';
$_lang["page_data_notcached"] = 'This document has not (yet) been cached.';
$_lang["page_data_cached"] = '<b>Source retrieved from cache:</b>';
$_lang["cleaningup"] = 'Cleaning up';
$_lang["actioncomplete"] = '<b>Action was completed successfully!</b><br /> - Please wait while MODx cleans up.';
$_lang["confirm_preview"] = 'This function is crap!\n\nIt only shows the saved version of the page, and not what you just edited. Still want to preview?';
$_lang["edit_document_title"] = 'Create/ edit document';
$_lang["document_identification"] = 'Document identification';
$_lang["weblink_message"] = 'A weblink is a reference to an object on the internet. This could be a document within MODx, a page on another site or an image or other file on the internet.<p>';
$_lang["weblink"] = 'Weblink';
$_lang["document_title_help"] = 'Type the name/ title of the document here. Try to avoid using backslashes in the name!';
$_lang["document_description_help"] = 'You can enter an optional description of the document here.';
$_lang["document_weblink_help"] = 'Type the address of the object you wish to reference with this weblink here.';
$_lang["document_parent"] = 'Document parent';
$_lang["document_parent_help"] = 'Click on the above folder icon to enable (or disable) parent selection then click a document in the tree to set it as this document\'s parent.';
$_lang["document_content"] = 'Document content';
$_lang["document_opt"] = 'Publishing, caching and appearance';
$_lang["document_opt_folder"] = 'Folder?';
$_lang["document_opt_richtext"] = 'Rich text?';
$_lang["document_opt_published"] = 'Published?';
$_lang["document_opt_menu_index"] = 'Menu index';
$_lang["document_opt_emptycache"] = 'Empty cache?';
$_lang["document_opt_folder_help"] = 'Check this to make the document also act as a folder for other documents. You don\'t need to worry about this too much, as MODx generally takes care of folder settings automatically.';
$_lang["document_opt_richtext_help"] = 'Leave this checked to use the rich text editor for editing documents. If your documents contain JavaScript and forms, uncheck this to edit in HTML mode and so that the editor doesn\'t screw your documents up.';
$_lang["document_opt_published_help"] = 'Check this field to have the document published immediately after saving it.';
$_lang["page_data_publishdate_help"] = 'If you set a publish date, the document will be published as soon as the publish date is reached. Click on the calender icon to select a date, or on the icon next to it to remove the publish date. This will then mean the document is never automatically published.';
$_lang["page_data_unpublishdate_help"] = 'If you set an unpublish date, the document will be unpublished as soon as the unpublish date is reached. Click on the calender icon to select a date, or on the icon next to it to remove the unpublish date. This will then mean the document is never automatically unpublished.';
$_lang["document_opt_menu_index_help"] = 'Menu Index is a field you can use for sorting document in your menu snippet(s). You can also use it for any other purpose in your snippets.';
$_lang["page_data_searchable_help"] = 'Checking this field will allow the document to be searched. You can also use this field for other purposes in your snippets.';
$_lang["page_data_cacheable_help"] = 'Leaving this field checked will allow the document to be saved to cache. If your document contains snippets, make sure this field is unchecked.';
$_lang["document_opt_emptycache_help"] = 'Leaving this field checked will make MODx empty the cache after you save the document. This way your visitors will not see an older version of the document.';
$_lang["page_data_template_help"] = 'Here you can select which template the document uses.';
$_lang["warning_not_saved"] = 'The changes you have made have not been saved yet. You can choose to stay on the current page in order to save the changes (\'Cancel\'), or you can leave this page, losing any changes you have made (\'OK\').';
$_lang["functionnotimpl"] = 'Sorry!';
$_lang["functionnotimpl_message"] = 'This function has not been implemented yet.';
$_lang["move_document_title"] = 'Move document';
$_lang["move_document_message"] = 'You can move a document and all it\'s children by selecting a new parent in the tree. If you select a document that is not a folder, it will be changed to a folder. Please click on the new parent in the tree.';
$_lang["document_to_be_moved"] = 'Document to be moved';
$_lang["move_document_new_parent"] = 'Please select a new parent in the document tree.';
$_lang["new_parent"] = 'New parent';
$_lang["edit_parser_title"] = 'Edit Parser';
$_lang["edit_parser_warning"] = '<b style="color:#821517">Editing this file can severely screw your site!</b><br />You are now editing a physical PHP file. Be sure to make a backup of this (in Notepad or something) before saving any changes!';
$_lang["change_password_message"] = 'Please enter your new password, and then enter it again to confirm. Your password needs to be between 6 and 15 characters long.';
$_lang["change_password_new"] = 'New password';
$_lang["change_password_confirm"] = 'Confirm password';
$_lang["confirm_delete_role"] = 'Are you sure you want to delete this role?';
$_lang["role_title"] = 'Create/ edit role';
$_lang["role_name"] = 'Role name';
$_lang["role_content_management"] = 'Content management';
$_lang["role_template_management"] = 'Template management';
$_lang["role_snippet_management"] = 'Snippet management';
$_lang["role_user_management"] = 'User management';
$_lang["role_udperms"] = 'Permissions management';
$_lang["role_role_management"] = 'Roles';
$_lang["role_config_management"] = 'Configuration management';
$_lang["role_frames"] = 'Request manager frames';
$_lang["role_home"] = 'Request manager intro page';
$_lang["role_messages"] = 'View and send messages';
$_lang["role_logout"] = 'Log out of the manager';
$_lang["role_help"] = 'View help pages';
$_lang["role_actionok"] = 'View action completed screen';
$_lang["role_errors"] = 'View error dialog';
$_lang["role_about"] = 'View the about page';
$_lang["role_credits"] = 'View credits';
$_lang["role_change_password"] = 'Change password';
$_lang["role_save_password"] = 'Save password';
$_lang["role_view_docdata"] = 'View a document\'s data';
$_lang["role_create_doc"] = 'Create new documents';
$_lang["role_edit_doc"] = 'Edit a document';
$_lang["role_save_doc"] = 'Save documents';
$_lang["role_delete_doc"] = 'Delete documents';
$_lang["role_cache_refresh"] = 'Empty the site\'s cache';
$_lang["role_create_template"] = 'Create new site templates';
$_lang["role_edit_template"] = 'Edit site templates';
$_lang["role_save_template"] = 'Save templates';
$_lang["role_delete_template"] = 'Delete templates';
$_lang["role_create_snippet"] = 'Create new snippets';
$_lang["role_edit_snippet"] = 'Edit snippets';
$_lang["role_save_snippet"] = 'Save snippets';
$_lang["role_delete_snippet"] = 'Delete snippets';
$_lang["role_new_user"] = 'Create new users';
$_lang["role_edit_user"] = 'Edit users';
$_lang["role_save_user"] = 'Save users';
$_lang["role_delete_user"] = 'Delete users';
$_lang["role_access_persmissions"] = 'Access permissions';
$_lang["role_new_role"] = 'Create new roles';
$_lang["role_edit_role"] = 'Edit roles';
$_lang["role_save_role"] = 'Save roles';
$_lang["role_delete_role"] = 'Delete roles';
$_lang["role_view_logs"] = 'View system logs';
$_lang["role_edit_parser"] = 'Edit the site parsers';
$_lang["role_save_parser"] = 'Save the site parsers';
$_lang["role_edit_settings"] = 'Change site settings';
$_lang["role_file_manager"] = 'Use the file manager';
$_lang["confirm_unblock"] = 'Are you sure you want to unblock this user?';
$_lang["unblock_message"] = 'This user will not be blocked after saving the user\'s data.';
$_lang["confirm_block"] = 'Are you sure you want to block this user?';
$_lang["block_message"] = 'This user will be blocked after saving the user\'s data!';
$_lang["confirm_delete_user"] = 'Are you sure you want to delete this user?';
$_lang["alert_delete_self"] = 'You can\'t delete yourself!';
$_lang["user_title"] = 'Create/Edit user';
$_lang["user_is_blocked"] = 'This user is blocked!';
$_lang["password_gen_method"] = 'New password method';
$_lang["password_gen_gen"] = 'Let MODx generate a password.';
$_lang["password_gen_specify"] = 'Let me specify the password:';
$_lang["password_method"] = 'Password notification method';
$_lang["password_method_email"] = 'Send the new password by e-mail.';
$_lang["password_method_screen"] = 'Show the new password on screen.';
$_lang["password_msg"] = 'The new password for <b>%s</b> is <b>%s</b>.';
$_lang["user_full_name"] = 'Full name';
$_lang["user_email"] = 'E-mail address';
$_lang["user_phone"] = 'Phone number';
$_lang["user_mobile"] = 'Mobile phone number';
$_lang["user_role"] = 'User\'s role';
$_lang["user_logincount"] = 'Number of logins';
$_lang["user_prevlogin"] = 'Last login';
$_lang["user_failedlogincount"] = 'Failed logins';
$_lang["user_block"] = 'Blocked';
$_lang["user_edit_self_msg"] = 'You may need to log out and log in again after saving to fully update your information.</b><br>Also, should you choose to generate a new password for yourself, it will be sent to you through e-mail.';
$_lang["confirm_delete_snippet"] = 'Are you sure you want to delete this snippet?';
$_lang["snippet_title"] = 'Create/ edit snippet';
$_lang["snippet_msg"] = 'Here you can add/ edit snippets. Remember, snippets are \'raw\' PHP code, and if you expect the output of the snippet to be shown at a certain point within the template, you need to return a value from within the snippet.';
$_lang["snippet_name"] = 'Snippet name';
$_lang["snippet_desc"] = 'Description';
$_lang["confirm_delete_template"] = 'Are you sure you want to delete this template?';
$_lang["template_title"] = 'Create/ edit template';
$_lang["template_msg"] = 'Here you can create/ edit templates. Changed/ new templates won\'t be visible in the cached pages of your site until the cache is emptied, however, you can use the preview function on a page to see the template in action.';
$_lang["template_name"] = 'Template name';
$_lang["template_desc"] = 'Description';
$_lang["refresh_title"] = 'Refresh site';
$_lang["refresh_published"] = '<b>%s</b> documents were published.';
$_lang["refresh_unpublished"] = '<b>%s</b> documents were unpublished.';
$_lang["refresh_cache"] = 'Cache: Found <b>%s</b> files in cache directory and deleted <b>%d</b> cache files.<p>New cache files will be created when pages are requested.'; // changed in 0.6
$_lang["about_title"] = 'About MODx';
$_lang["about_msg"] = 'MODx is a <a href="http://modxcms.com/what-is-modx.html" target="_blank">PHP Application Framework and Content Management System</a> licensed under the <a href="../assets/docs/license.txt">GNU GPL</a>.';
$_lang["credits_htmlarea"] = 'HTMLArea was created by mishoo. Currently it\'s the only cross-browser compatible editor available, and it\'s free too!'; // obsolete
$_lang["credits_adodb"] = 'John Lim built this great database abstraction layer. Etomite uses only the MySQL bits, but it\'s lovely nonetheless!'; // obsolete
$_lang["credits_php"] = 'MODx is powered by PHP!'; // obsolete
$_lang["credits_mysql"] = 'MODx is powered by MySQL!'; // obsolete
$_lang["credits_webfx"] = 'MODx uses a number of JavaScripts from Webfx. Great stuff!'; // obsolete
$_lang["credits_dTree"] = 'MODx uses the excellent dTree script from DestroyDrop.com!'; // obsolete
$_lang["credits_shouts_title"] = '<b>Additional thanks to:</b>'; // obsolete
$_lang["credits_shouts_msg"] = '
<ul>
<li><b>Raymond Irving, Ryan Thrash</b> - Project Founders</li>
<li><b>Jason Coward, Victor Brilon, Adam Crownoble, Jeff Whitfield, Remon Sijrier</b> - Core Architecture &amp; Design</li>
</ul>'; // changed (this changes almost every release)  // obsolete
$_lang["messages_title"] = 'Messages';
$_lang["messages_inbox"] = 'Inbox';
$_lang["messages_read_message"] = 'Read message';
$_lang["messages_compose"] = 'Compose a message';
$_lang["messages_not_allowed_to_read"] = 'You\'re not allowed to read this message!';
$_lang["messages_system_user"] = '[System]';
$_lang["messages_reply"] = 'Reply';
$_lang["messages_forward"] = 'Forward';
$_lang["messages_from"] = 'From';
$_lang["messages_sent"] = 'Sent on';
$_lang["messages_subject"] = 'Subject';
$_lang["messages_no_messages"] = 'No messages in Inbox.';
$_lang["messages_private"] = 'Private';
$_lang["messages_category"] = 'Category';
$_lang["messages_send_to"] = 'Send to';
$_lang["messages_user"] = 'A user';
$_lang["messages_group"] = 'A group';
$_lang["messages_all"] = 'Everyone';
$_lang["messages_select_user"] = 'Select a user';
$_lang["messages_select_group"] = 'Select a group';
$_lang["messages_message"] = 'Message';
$_lang["messages_send"] = 'Send';
$_lang["files_title"] = 'File browser';
$_lang["files_files"] = 'Files';
$_lang["files_filetype_notok"] = 'Uploading of this kind of file isn\'t allowed!';
$_lang["files_upload_ok"] = 'File uploaded successfully!';
$_lang["files_upload_copyfailed"] = 'Failed to copy file to destination directory - upload failed!';
$_lang["files_upload_error"] = 'Error';
$_lang["files_upload_error0"] = 'There was a problem with your upload.';
$_lang["files_upload_error1"] = 'The file you are trying to upload is too big.';
$_lang["files_upload_error2"] = 'The file you are trying to upload is too big.';
$_lang["files_upload_error3"] = 'The file you are trying upload was only partially uploaded.';
$_lang["files_upload_error4"] = 'You must select a file for upload.';
$_lang["files_upload_error5"] = 'There was a problem with your upload.';
$_lang["files_dir_listing"] = 'Directory listing for:';
$_lang["files_access_denied"] = 'Access denied!';
$_lang["files_top_level"] = 'To top level';
$_lang["files_up_level"] = 'Up one level';
$_lang["files_filename"] = 'Filename';
$_lang["files_modified"] = 'Modified';
$_lang["files_filesize"] = 'File size';
$_lang["files_fileoptions"] = 'Options';
$_lang["files_directories"] = 'Directories';
$_lang["files_data"] = 'Data';
$_lang["files_dirwritable"] = 'Directory writable?';
$_lang["files_uploadfile"] = 'Upload file';
$_lang["files_uploadfile_msg"] = 'Select a file to upload:';
$_lang["files_upload_inhibited_msg"] = '<b>Upload feature inhibited</b> - make sure uploads are supported and the directory is writable for PHP.<br />';
$_lang["files_editfile"] = 'Edit file';
$_lang["files_viewfile"] = 'View file';
$_lang["files_file_upload"] = 'Upload file';
$_lang["files_uploading"] = 'Uploading <b>%s</b> to <b>%s/</b><br />';
$_lang["files_file_type"] = 'File type: ';
$_lang["search"] = 'Search';
$_lang["search_criteria"] = 'Search criteria';
$_lang["search_criteria_id"] = 'Search by ID';
$_lang["search_criteria_title"] = 'Search by title';
$_lang["search_criteria_content"] = 'Search by content';
$_lang["search_criteria_id_msg"] = 'Enter a document\'s ID to quickly locate that document.';
$_lang["search_criteria_title_msg"] = 'Find all documents with the entered text in their title.';
$_lang["search_criteria_content_msg"] = 'Find all documents with the entered text in their content.';
$_lang["search_results"] = 'Search results';
$_lang["search_empty"] = 'Your search returned no results. Please broaden your search criteria and try again.';
$_lang["search_results_returned_msg"] = 'Your search criteria returned <b>%s</b> documents. If a lot of results are being returned, try to enter a more specific search. The two left-most columns will allow you to find the document in the tree or view the document. The two right most columns show, respectively, if a document has been deleted and what it\'s published status is.<p />';
$_lang["search_results_returned_id"] = 'ID';
$_lang["search_results_returned_title"] = 'Title';
$_lang["search_results_returned_desc"] = 'Description';
$_lang["search_view_docdata"] = 'View this item';
$_lang["search_item_deleted"] = 'This item has been deleted';
$_lang["help_title"] = 'Help';
$_lang["help_msg"] = '<p>You can obtain free community support by <a href="http://modxcms.com/forums" target="_blank">visiting the MODx Forums</a>. There is also a growing body of <a href="http://modxcms.com/documentation" target="_blank">MODx Documentation and Guides</a> that touch on virtually every aspect of MODx.</p><p>We are planning to offer commercial support services for MODx as well. Please <a href="mailto:modx@vertexworks.com?subject=MODx Commercial Support Inquiry">email us if you\'re interested</a>.';

/***************************************************************************/
// new in 0.5.2
/***************************************************************************/

$_lang["configcheck_images"] = 'Images directory not writable';
$_lang["configcheck_images_msg"] = 'The images directory isn\'t writable, or doesn\'t exist. This means the Image Manager functions in the editor will not work!';
$_lang["php_version_check"] = 'MODx is compatible with PHP version 4.0.3 and higher. Please upgrade your PHP installation!';
$_lang["document_alias"] = 'Document\'s alias';
$_lang["document_alias_help"] = 'Here you can select an alias for this document. This will make the document accessible using:\n\nhttp://yourserver/alias\n\nThis only works if you\'re using friendly URLs.';

$_lang["user_management_title"] = 'Manager Users';
$_lang["user_management_msg"] = 'Here you can choose which Content Manager user you wish to edit. Content Manager users are those users who are allowed to log into the Content Manager';
$_lang["role_management_title"] = 'Roles';
$_lang["role_management_msg"] = 'Here you can choose which role you wish to edit.';
$_lang["manage_templates"] = 'Templates';
$_lang["template_management_msg"] = 'Here you can choose which template you wish to edit.';
$_lang["manage_plugins"] = 'Plugins';
$_lang["snippet_management_msg"] = 'Here you can choose which snippet you wish to edit.';
$_lang["resource_management"] = 'Manage resources';
$_lang["parser_not_writable"] = 'The parser you wish to edit is not writable. Please make the file writable (using FTP or your host\'s control panel) before continuing.'; //obsolete
$_lang["server_protocol_title"] = 'Server type:';
$_lang["server_protocol_message"] = 'If your site is on a https connection, please specify so here.';
$_lang["server_protocol_http"] = 'http';
$_lang["server_protocol_https"] = 'https';
$_lang["settings_server"] = 'Server settings'; // deprecated
$_lang["settings_site"] = 'Site settings';
$_lang["settings_furls"] = 'Friendly URL settings';
$_lang["settings_users"] = 'User settings'; //changed 0.6 - shortened
$_lang["settings_ui"] = 'Interface & editor settings'; //changed 0.6 - added editor
$_lang["settings_reports"] = 'Reports settings'; // deprecated
$_lang["settings_editor"] = 'Editor settings'; // deprecated
$_lang["use_editor_title"] = 'Enable editor:';
$_lang["use_editor_message"] = 'Do you want to enable the rich text editor? If you\'re more comfortable writing HTML, then you can turn the editor off using this setting. Note that this setting applies to all documents and all users!';

/***************************************************************************/
// new in 0.5.3
/***************************************************************************/

$_lang["signupemail_title"] = 'Signup e-mail:';
$_lang["signupemail_message"] = 'Here you can set the message sent to your users when you create an account for them and let MODx send them an e-mail containing their username and password. <br /><b>Note:</b> The following placeholders are replaced by the Content Manager when the message is sent: <br /><br />[+sname+] - Name of your web site, <br />[+saddr+] - Your web site email address, <br />[+surl+] - Your site url, <br />[+uid+] - User\'s Login name or id, <br />[+pwd+] - User\'s password, <br />[+ufn+] - User\'s full name. <br /><br /><b>Leave the [+uid+] and [+pwd+] in the e-mail, or else the username and password won\'t be sent in the mail and your users won\'t know their username or password!</b>';
$_lang["emailsender_title"] = 'E-mail address:';
$_lang["emailsender_message"] = 'Here you can specify the e-mail address used when sending users their usernames and passwords.';
$_lang["emailsubject_title"] = 'E-mail subject:';
$_lang["emailsubject_message"] = 'Here you can specify the value of the subject of the signup e-mail.';
$_lang["stay"] = 'Continue editing';
$_lang["saving"] = 'Saving, please wait...';
$_lang["charset_title"] = 'Character encoding:';
$_lang["charset_message"] = 'Please select which character encoding you wish to use in the manager. Please note that MODx has been tested with a number of these encodings, but not all of them. For most languages, the default setting of UTF-8 is preferrable.';
$_lang["reset_failedlogins"] = 'reset';
$_lang["untitled_document"] = 'Untitled document';
$_lang["untitled_weblink"] = 'Untitled weblink';
$_lang["layout_settings_title"] = 'Layout settings'; // deprecated
$_lang["layout_title"] = 'Manager layout:';
$_lang["layout_message"] = 'Use this option to select the layout for the MODx manager.';
$_lang["layout_settings_1"] = 'Basic sidebar layout <br /><span class="comment">Navigation above the document tree.</span>';
$_lang["layout_settings_2"] = 'Top menu layout (IE Only) <br /><span class="comment">Navigation at the top of the screen. Currently only works in IE.</span>';
$_lang["loading_page"] = 'Please wait while MODx loads the page...';

/***************************************************************************/
// new in 0.6
/***************************************************************************/

$_lang["filemanager_path_title"] = 'File Manager Path:';
$_lang["filemanager_path_message"] = 'IIS often does not populate the document_root setting properly, which is used by the file manager to determine what you can look at. If you\'re having problems using the file manager, make sure this path points to the root of your MODx installation.';
$_lang["password_gen_length"] = 'The password you specify needs to be at least 6 characters long.';
$_lang["captcha_code"] = 'Security code';
$_lang["login_captcha_message"] = ' An administrator has enabled Captcha validation, so you\'ll also need to enter the Security code.\n\nIf you have trouble reading the code, click on the code itself to generate a new random code.';
$_lang["captcha_title"] = 'Use CAPTCHA codes:';
$_lang["captcha_message"] = 'Enable this to strengthen security by requiring users to enter a code which is unreadable by machines (and scriptkiddy hacking scripts).';
$_lang["lock_snippet"] = 'Lock snippet for editing';
$_lang["lock_snippet_msg"] = 'Only Administrators (Role ID 1) can edit this snippet.';
$_lang["snippet_locked_message"] = 'This snippet is locked.';
$_lang["lock_template"] = 'Lock template for editing';
$_lang["lock_template_msg"] = 'Only Administrators (Role ID 1) can edit this template.';
$_lang["template_locked_message"] = 'This template is locked.';
$_lang["administrator_role_message"] = 'This role cannot be edited or deleted.';
$_lang["visitor_stats_online"] = 'Now Browsing';
$_lang["track_visitors_title"] = 'Log visits';
$_lang["track_visitors_message"] = 'Logging visits will allow you to view usage statistics for your site, however, logging visits slows down the site parser a little. If you\'re not bothered about visitor statistics, you can safely turn this off and enjoy a small speed boost.';
$_lang["friendly_alias_title"] = 'Use friendly aliases:';
$_lang["friendly_alias_message"] = 'If you are using friendly URLs, and the document has an alias, the alias will always have precedence over the friendly URL. By setting this option to \'yes\', the friendly URL prefix and suffix will also be applied to the alias. For example, if your document with ID 1 has an alias of `introduction`, and you\'ve set a prefix of `` and a suffix of `.html`, setting this option to `yes` will generate `introduction.html`. If there\'s no alias, MODx will generate `1.html` as link.';
$_lang["no_stats_message"] = 'This section usually shows some visitor statistics for your site, however, in MODx configuration you have set `Log visits` to `no`, so no information is being collected.';
$_lang["welcome_visitor_stats"] = 'This table shows some visitor statistics for your site. For more detailed information, please visit the `Visitor Stats` page.<br /><br />';
$_lang["page_impressions"] = 'Page impressions';
$_lang["visitors"] = 'Unique visitors';
$_lang["visits"] = 'Visits';
$_lang["all_time"] = 'All time';
$_lang["this_month"] = 'This month';
$_lang["today"] = 'Today';
$_lang["document_visitor_stats"] = '<br /><br />This table shows some visitor statistics for this document:<br />';
$_lang["resolve_hostnames_title"] = 'Resolve hostnames';
$_lang["resolve_hostnames_message"] = 'Do you want MODx to try to resolve your visitors\' hostnames when they visit your site? Resolving hostnames may create some extra server load, although your visitors won\'t notice this in any way.';
$_lang["stats_title"] = 'Visitor statistics for `%s` from %s to %s';
$_lang["stats_monthly_breakup"] = 'Statistics per month';
$_lang["stats_daily_breakup"] = 'Statistics per day';
$_lang["stats_hourly_breakup"] = 'Statistics per hour';
$_lang["top_howmany_title"] = 'Top how many';
$_lang["top_howmany_message"] = 'When viewing reports, how large should the \'Top ...\' lists be?';
$_lang["stats_top_pages"] = 'Top %s documents';
$_lang["document"] = 'Document';
$_lang["rank"] = 'Rank';
$_lang["stats_top_referrers"] = 'Top %s referring pages';
$_lang["referrer"] = 'Referred by';
$_lang["stats_top_ua"] = 'Top %s user agents';
$_lang["ua"] = 'User agent';
$_lang["stats_top_os"] = 'Top %s operating systems';
$_lang["os"] = 'Operating system';
$_lang["visitors_used_this"] = 'Visitors using this';
$_lang["visitors_came_from_here"] = 'Visitors came from here';
$_lang["no_results"] = 'No results found';
$_lang["no_online_users"] = 'There are no visitors currently browsing your site.';
$_lang["stats_top_hosts"] = 'Top %s hosts';
$_lang["hostname"] = 'Host name';
$_lang["unknown_referer"] = 'Unknown/ Direct/ Bookmark';
$_lang["internal_referer"] = 'Site internal referral';
$_lang["stats_top_entrypages"] = 'Top %s entry documents';
$_lang["visits_started_here"] = 'Visits started here';
$_lang["no_logging_found"] = 'MODx did not find any logging data in the database. This means that logging is turned off, or your site has had no visitors yet.';
$_lang["visitor_online"] = 'Visitors currently viewing your site';
$_lang["visitor_online_message"] = 'This table shows which visitors have been active on your site in the last 20 minutes (since <b>%s</b>).';
$_lang["access_permission_denied"] = 'You do not have the correct permissions for this document.'; // changed 0.6 RC2
$_lang["warning"] = 'Warning!';
$_lang["documents"] = 'Documents';
$_lang["sysinfo_activity_message"] = 'This list show which documents have been recently edited by your users.';
$_lang["datechanged"] = 'Date changed';
$_lang["sysinfo_userid"] = 'User';
$_lang["id"] = 'ID';
$_lang["settings_after_install"] = 'As this is a new install, you are required to control these settings, and change any that you may wish to. After you\'ve controlled the settings, press \'Save\' to update the settings database.<br /><br />';
$_lang["settings_misc"] = 'Miscellaneous settings';
$_lang["udperms_allowroot_title"] = 'Allow root:';
$_lang["udperms_allowroot_message"] = 'Do you want to allow your users to create new documents/ folders in the root of the site? ';
$_lang["access_permission_parent_denied"] = 'You do not have permission to create a document here!';
$_lang["new_htmlsnippet"] = 'New chunk';
$_lang["edit_htmlsnippet"] = 'Edit chunk';
$_lang["manage_htmlsnippets"] = 'Chunks';
$_lang["htmlsnippet_management_msg"] = 'Here you can select which chunk you wish to edit.';
$_lang["confirm_delete_htmlsnippet"] = 'Are you sure you want to delete this chunk?';
$_lang["htmlsnippet_title"] = 'Create/ edit chunk';
$_lang["htmlsnippet_msg"] = 'Here you can add/ edit chunks. Remember, chunks are \'raw\' HTML code, so any PHP code won\'t be processed.';
$_lang["htmlsnippet_name"] = 'Chunk name';
$_lang["htmlsnippet_desc"] = 'Description';
$_lang["lock_htmlsnippet"] = 'Lock chunk for editing';
$_lang["lock_htmlsnippet_msg"] = 'Only Administrators (Role ID 1) can edit this chunk.';
$_lang["htmlsnippet_locked_message"] = 'This chunk is locked.';
$_lang["access_permissions_user_groups"] = 'User groups';
$_lang["access_permissions_document_groups"] = 'Document groups';
$_lang["access_permissions_links"] = 'User/ Document group links';
$_lang["rename"] = 'Rename';
$_lang["remove"] = 'Remove';
$_lang["add"] = 'Add group';
$_lang["access_permissions_introtext"] = 'Here you can manage the user groups and document groups used for access permissions. To add a user to a user group, edit the user and select the groups (s)he should be a member of. To add a document to a user group, edit the document and select the groups it should belong to.';
$_lang["access_permissions_add_user_group"] = 'Create a new user group';
$_lang["access_permissions_add_document_group"] = 'Create a new document group';
$_lang["no_groups_found"] = 'No groups found.';
$_lang["access_permissions_user_group"] = 'User group:';
$_lang["access_permissions_user_group_access"] = 'Document groups this user group has access to:';
$_lang["access_permissions_users_in_group"] = '<b>Users in group:</b> ';
$_lang["access_permissions_no_users_in_group"] = 'None.';
$_lang["access_permissions_documents_in_group"] = '<b>Documents in group:</b> ';
$_lang["access_permissions_no_documents_in_group"] = 'None.';
$_lang["access_permissions_docs_message"] = 'Here you can select which document groups this document belongs to';
$_lang["access_permissions_users_message"] = 'Here you can select which user groups this user belongs to:';
$_lang["access_permissions_users_tab"] = 'Here you can see which user groups have been set up. You can also create new groups, rename groups, delete groups and see which users are members of the different groups. To add a new user to a group or to remove a user from a group, edit the user directly. Administrators (users who have been assigned the role with ID 1) always have access to all documents, so they don\'t need to be added to any groups.';
$_lang["access_permissions_documents_tab"] = 'Here you can see which document groups have been set up. You can also create new groups, rename groups, delete groups and see which documents are in the different groups (hover over the id of the document to see it\'s name). To add a document to a group or remove a document from a group, edit the document directly.';
$_lang["access_permissions_links_tab"] = 'This is where we specify which user groups are given access (i.e. can edit or create children) for the document groups. To link a document group to a user group, select the group from the dropdown, and click on \'Link\'. To remove the link for a certain group, press \'Remove ->\'. This will immediately remove the link.';
$_lang["access_permissions_off"] = '<span class="warning">Access Permissions are not activated.</span> This means any changes made here will not have any effect until Access Permissions are activated.';
$_lang["settings_strip_image_paths_title"] = 'Rewrite image paths?';
$_lang["settings_strip_image_paths_message"] = 'Turning this on will have MODx rewrite image src\'s to be relative instead of absolute. This is very handy if you should ever wish to move your MODx installation (for example from a staging site to a production site). If you have no idea what this means, it\'s best just to leave it set to \'No\'.';
$_lang["uploadable_files_title"] = 'Uploadable File Types:';
$_lang["uploadable_files_message"] = 'Here you can enter a list of files that can be uploaded into \'assets/files/\' using the Resource Manager. Please enter the extensions for the filetypes, seperated by commas.';
$_lang["keywords"] = 'Keywords';
$_lang["keyword"] = 'Keyword';
$_lang["save_all_changes"] = 'Save all changes';
$_lang["new_keyword"] = 'Add new keyword:';
$_lang["confirm_delete_keywords"] = 'Are you sure you want to delete these keywords?';
$_lang["deselect_keywords"] = 'Clear keywords';
$_lang["sort_asc"] = 'Ascending';
$_lang["sort_desc"] = 'Descending';
$_lang["sort_tree"] = 'Sort the tree';
$_lang["folder"] = 'Folder';
$_lang["pagetitle"] = 'Document\'s title';
$_lang["defaulttemplate_title"] = 'Default template';
$_lang["defaulttemplate_message"] = 'Select the default template you wish to use for new documents. You can still select a different template in the document editor, this setting just pre-selects one of your templates for you.';
$_lang["openurl_message"] = 'What URL do you want to open?';
$_lang["openurl"] = 'Open external site';
$_lang["captcha_words_title"] = 'CAPTCHA Words';
$_lang["captcha_words_message"] = 'Here you can enter a list of CAPTCHA words to use if CAPTCHA is enabled. Separate the words with commas. This input field is limited to 255 characters.';
$_lang["editing_file"] = 'Editing file: ';
$_lang["file_not_saved"] = 'Cannot save file, please ensure target directory is writable!';
$_lang["file_saved"] = 'File updated successfully!';
$_lang["confirm_delete_file"] = 'Are you sure you want to delete the file?\n\nThis may stop your site from working properly! Only delete this file if you know for certain what you are doing will not break anything.';
$_lang["deleting_file"] = 'Deleting file `%s`: ';
$_lang["file_not_deleted"] = 'Failed!';
$_lang["file_deleted"] = 'Success!';
$_lang["cache_files_deleted"] = 'The following files were deleted:';
$_lang["export_site_html"] = 'Export site to HTML';
$_lang["export_site_message"] = '<p>Using this function you can export the entire site to HTML files. Please note, however, that you will lose a lot of the MODx functionality should you do so:</p><ul><li>Page reads on the exported files will not be recorded.</li><li>Interactive snippets will NOT work in exported files</li><li>Only regular documents will be exported, Weblinks will not be exported.</li><li>The export process may fail if your documents contain snippets which send redirection headers.</li><li>Depending on how you\'ve written your documents, style sheets and images, the design of your site may be broken. To fix this, you can save/ move your exported files to the same directory where the main MODx index.php file is located.</li></ul><p>Please fill out the form and press \'Export\' to start the export process. The files created will be saved in the location you specify, using, where possible, the document\'s aliases as filenames. While exporting your site, it\'s best to have the MODx configuration item \'Friendly aliases\' set to \'yes\'. Depending on the size of your site, the export may take a while.</p><p><em>Any existing files will be overwritten by the new files if their names are identical!</em></p>';
$_lang["export_site_cacheable"] = 'Include non-cacheable files:';
$_lang["export_site_prefix"] = 'File prefix:';
$_lang["export_site_suffix"] = 'File suffix:';
$_lang["export_site_start"] = 'Start export';
$_lang["export_site_numberdocs"] = '<p><b>Found %s documents to export...</b></p>';
$_lang["export_site_exporting_document"] = 'Exporting file <b>%s</b> of <b>%s</b><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i>%s</i>, id %s</small><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$_lang["export_site_success"] = '<span style="color:#009900">Success!</span>';
$_lang["export_site_failed"] = '<span style="color:#990000">Failed!</span>';
$_lang["export_site_target_unwritable"] = 'Target directory isn\'t writable. Please ensure the directory is writable, and try again.';
$_lang["export_site_time"] = 'Export finished. Export took %s seconds to complete.';
$_lang["export_site_maxtime"] = 'Max export time:';
$_lang["export_site_maxtime_message"] = 'Here you can specify the number of seconds MODx can take to export the site (overriding PHP settings). Enter 0 for unlimited time. Please note, setting 0 or a really high number can do weird things to your server and is not recommended.';
$_lang["page_data_contentType"] = 'Content Type';
$_lang["page_data_contentType_help"] = 'Select the content type for this document. If you\'re not sure which content type the document should have, just leave it as text/html.';
$_lang["defaultcache_title"] = 'Cacheable default';
$_lang["defaultcache_message"] = 'Select \'Yes\' to make all new documents cacheable by default.';
$_lang["defaultpublish_title"] = 'Published default';
$_lang["defaultpublish_message"] = 'Select \'Yes\' to make all new documents published by default.';
$_lang["defaultsearch_title"] = 'Searchable default';
$_lang["defaultsearch_message"] = 'Select \'Yes\' to make all new documents searchable by default.';
$_lang["which_editor_title"] = 'Editor to use:';
$_lang["which_editor_message"] = 'Here you can select which rich text editor you wish to use. You can download and install additional Rich Text editors from the MODx download page.';
$_lang["manage_modules"] = 'Manage Modules';
$_lang["modules_already_installed"] = 'Installed modules';
$_lang["modules_install_new"] = 'Install new module';
$_lang["module_install_info"] = 'Items installed by this module';
$_lang["type"] = 'Type';
$_lang["alias"] = 'Alias';
$_lang["deleted"] = 'Deleted';
$_lang["empty_folder"] = 'This folder is empty';
$_lang["long_title"] = 'Long title'; 
$_lang["document_long_title_help"] = 'Here you can enter a longer title for your document. This is handy for search engines, and might be more descriptive for your document.'; 
$_lang["search_criteria_longtitle"] = 'Search by long title';
$_lang["search_criteria_longtitle_msg"] = 'Find all documents with the entered text in their long title.';
$_lang["empty_recycle_bin_empty"] = 'There are no deleted documents to purge.';
$_lang["createdon"] = 'Creation date';
$_lang["editedon"] = 'Edit date';
$_lang["sort_by"] = 'Sort&nbsp;by:';
$_lang["sort_dir"] = 'Sort&nbsp;direction:';

/***************************************************************************/
// new to modx tech preview
/***************************************************************************/

$_lang["my_account"] = 'My&nbsp;Account';
$_lang["logo_slogan"] = 'MODx Content Manager - \nCreate and do more with less';

$_lang["sys_alert"] = 'System Alert';
$_lang["confirm_delete_plugin"] = 'Are you sure you want to delete this plugin?';
$_lang["plugin_event_msg"] = 'Select the events that you would like this plugin to listen to.';
$_lang["plugin_title"] = 'Create/ edit plugin';
$_lang["plugin_msg"] = 'Here you can add/ edit plugins. Plugins are \'raw\' PHP codes that are invoked whenever the selected System Events are triggered.';
$_lang["plugin_name"] = 'Plugin name';
$_lang["plugin_disabled"] = 'Plugin Disabled';
$_lang["plugin_desc"] = 'Description';
$_lang["plugin_config"] = 'Plugin configuration';
$_lang["lock_plugin"] = 'Lock plugin for editing';
$_lang["lock_plugin_msg"] = 'Only Administrators (Role ID 1) can edit this plugin.';
$_lang["plugin_locked_message"] = 'This plugin is locked.';
$_lang["sunday"] = 'Sunday';
$_lang["monday"] = 'Monday';
$_lang["tuesday"] = 'Tuesday';
$_lang["wednesday"] = 'Wednesday';
$_lang["thursday"] = 'Thursday';
$_lang["friday"] = 'Friday';
$_lang["saturday"] = 'Saturday';
$_lang["comment"] = 'Comment';
$_lang["not_set"] = 'Not set';
$_lang["remove_date"] = 'Remove date';
$_lang["select_date"] = 'Select a date';
$_lang["no_date"] = 'No date';
$_lang["settings_photo"] = 'Photo';
$_lang["user_photo"] = 'User Photo';
$_lang["user_photo_message"] = 'Enter the image url for the this user or use the insert button to selected or upload an image file on the server.';
$_lang["user_fax"] = 'Fax';
$_lang["user_dob"] = 'Date of birth';
$_lang["user_country"] = 'Country';
$_lang["user_state"] = 'State';
$_lang["user_zip"] = 'Zip';
$_lang["user_gender"] = 'Gender';
$_lang["user_male"] = 'Male';
$_lang["user_female"] = 'Female';
$_lang["user_blockeduntil"] = 'Blocked Until';
$_lang["user_blockedafter"] = 'Blocked After';

$_lang["back"] = 'Back';
$_lang["back_title"] = 'Load previous page';
$_lang["forward"] = 'Forward';
$_lang["reload"] = 'Reload';
$_lang["reload_title"] = 'Reloads page';

$_lang["websignupemail_title"] = 'Web Signup e-mail:';
$_lang["websignupemail_message"] = 'Here you can set the message sent to your web users when you create a web account for them and let the Content Manager send them an e-mail containing their username and password. <br /><b>Note:</b> The following placeholders are replaced by the Content Manager when the message is sent: <br /><br />[+sname+] - Name of your web site, <br />[+saddr+] - Your web site email address, <br />[+surl+] - Your site url, <br />[+uid+] - User\'s Login name or id, <br />[+pwd+] - User\'s password, <br />[+ufn+] - User\'s full name. <br /><br /><b>Leave the [+uid+] and [+pwd+] in the e-mail, or else the username and password won\'t be sent in the mail and your users won\'t know their username or password!</b>';
$_lang["webpwdreminder_title"] = 'Web Reminder Email:';
$_lang["webpwdreminder_message"] = 'Enter a message to be sent to your web users whenever they request a new password via email. The Content Manager will send an e-mail containing their new password and activation information. <br /><b>Note:</b> The following placeholders are replaced by the Content Manager when the message is sent: <br /><br />[+sname+] - Name of your web site, <br />[+saddr+] - Your web site email address, <br />[+surl+] - Your site url, <br />[+uid+] - User\'s Login name or id, <br />[+pwd+] - User\'s password, <br />[+ufn+] - User\'s full name. <br /><br /><b>Leave the [+uid+] and [+pwd+] in the e-mail, or else the username and password won\'t be sent in the mail and your users won\'t know their username or password!</b>';

$_lang["click_to_context"] = 'Click to access context menu';
$_lang["snippet_execonsave"] = 'Execute snippet after saving.';
$_lang["snippets_availabe"] = 'Snippets available for you to include in your page';
$_lang["use_alias_path_title"] = 'Use friendly alias path:'; 
$_lang["use_alias_path_message"] = 'Setting this option to \'yes\' will display the full path to the document if the document has an alias. For example, if a document with an alias called \'child\' is located inside a folder with an alias called \'parent\', then the full alias path to the document will be displayed as \'/parent/child.html\'.<br /><b>NOTE: When setting this option to \'Yes\' (turning on alias paths), you must reference things (such as images, css, javascripts, etc) using the absolute path:  e.g., \'/assets/images\' as oppose to \'assets/images\'. By doing so you will prevent the browser (or web server) from appending the relative path to the alias path.</b>'; 
$_lang["scroll_up"] = 'Scroll up';
$_lang["scroll_dn"] = 'Scroll down';
$_lang["all_doc_groups"] = 'All Document Groups (Public)';
$_lang["value"] = 'Value';
$_lang["parameter"] = 'Parameter';
$_lang["insert"] = 'Insert';
$_lang["insert_snippet"] = 'Insert snippet into document';
$_lang["illegal_parent_child"] = 'Parent Assignment:\n\nDocument is a child of the selected document.';
$_lang["illegal_parent_self"] = 'Parent Assignment:\n\nThe selected document cannot be assigned to itself.';
$_lang["manager_theme"] = 'Manager Theme:';
$_lang["manager_theme_message"] = 'Select the Theme for the Content Manager.';
$_lang["document_summary"] = 'Summary (introtext)';
$_lang["document_summary_help"] = 'Type a brief summary of the document';
$_lang["close"] = 'Close';
$_lang["import_site_html"] = 'Import site from HTML';
$_lang["import_site_message"] = 'Using this function you can import an entire HTML site into the database. Please note that you will need to copy your html files and/or folders into the assets/import folder.<p />Please fill out the form and press \'Import\' to start the import process. The files imported will be saved into the selected location, using, where possible, the files name as the document\'s aliases, the page title as the document\'s title.';
$_lang["import_parent_document"] = 'Parent Document:';
$_lang["import_site_start"] = 'Start Import';
$_lang["import_files_found"] = '<b>Found %s documents for import...</b><p/>';
$_lang["import_site_importing_document"] = 'Importing file <b>%s</b> ';
$_lang["import_site_skip"] = '<span style="color:#990000">Skipped!</span>';
$_lang["import_site_success"] = '<span style="color:#009900">Success!</span>';
$_lang["import_site_failed"] = '<span style="color:#990000">Failed!</span>';
$_lang["import_site_time"] = 'Import finished. Import took %s seconds to complete.';
$_lang["import_site_maxtime"] = 'Max import time:';
$_lang["import_site_maxtime_message"] = 'Here you can specify the number of seconds the Content Manager can take to import the site (overriding PHP settings). Enter 0 for unlimited time. Please note, setting 0 or a really high number can do weird things to your server and is not recommended.';
$_lang["duplicate"] = 'Duplicate';
$_lang["confirm_duplicate_record"] = 'Are you sure you want to duplicate this record?';
$_lang["confirm_duplicate_document"] = 'Are you sure you want to duplicate this document/folder?\nSub folders and documents will also be duplicated.';
$_lang["tmplvar_inuse"] = 'The following document(s) are currently using this Template Variable. To continue with the delete operation click the Delete button otherwise click the Cancel button.';
$_lang["tmplvar_change_template_msg"] = 'Changing this template will cause the page to reload the Template Variables. All unsaved changes will be lost.\n\n Are you sure you want to change this template?';
$_lang["tmplvar_access_msg"] = 'Select the document groups that are allowed to modify the content or value of this variable';
$_lang["tmplvar_tmpl_access"] = 'Template Access';
$_lang["tmplvar_tmpl_access_msg"] = 'Select the templates that are allowed to access/process this variable';
$_lang["tmplvars_novars"] = 'No Template Variables found';
$_lang["tmplvars"] = 'Template Variables';
$_lang["tmplvars_management_msg"] = 'Here you can manage the additional variable fields for your documents.';
$_lang["tmplvars_reset_params"] = 'Reset parameters';
$_lang["tmplvars_binding_msg"] = 'This field supports data source bindings using the @ commands';
$_lang["new_tmplvars"] = 'New Template Variable';
$_lang["edit_tmplvars"] = 'Edit Template Variable';
$_lang["confirm_delete_tmplvars"] = 'Are you sure you want to remove this variable and all stored values?';
$_lang["tmplvars_msg"] = 'Here you can add/edit template variables.  The template variables must be enabled for selected templates in order for them to be accessed from snippets and documents just like other content variables.';
$_lang["tmplvars_caption"] = 'Caption';
$_lang["tmplvars_name"] = 'Variable Name';
$_lang["tmplvars_description"] = 'Description';
$_lang["tmplvars_type"] = 'Input Type';
$_lang["tmplvars_elements"] = 'Input Option Values';
$_lang["tmplvars_rank"] = 'Sort Order';
$_lang["tmplvars_default"] = 'Default Value';
$_lang["tmplvars_widget"] = 'Widget';
$_lang["tmplvars_widget_prop"] = 'Widget Properties';
$_lang["lock_tmplvars"] = 'Lock variable for editing';
$_lang["lock_tmplvars_msg"] = 'Only Administrators (Role ID 1) can edit this variable.';
$_lang["tmplvars_locked_message"] = 'This variable is locked.';
$_lang["document_setting"] = 'Document setting';
$_lang["bk_manager"] = 'Backup';
$_lang["upload_maxsize_title"] = 'Maximum upload size';
$_lang["upload_maxsize_message"] = 'Enter the maximum file size that can be uploaded via the file manager. Upload file size must be entered in bytes. <b>NOTE: Large files can take a very long time to upload!</b>';
$_lang["file_folder_deleted"] = 'Folder was successfully deleted!';
$_lang["file_folder_not_deleted"] = 'Unable to delete folder. Please make sure that the folder is empty before deleting it!';
$_lang["confirm_unzip_file"] = 'Are you sure you want to unzip this file?\n\nExisting files will be overwritten.';
$_lang["file_unzip"] = 'Unzip was successful!';
$_lang["file_unzip_fail"] = 'Unzip Failed!';
$_lang["file_folder_created"] = 'Folder created successfully!';
$_lang["file_folder_not_created"] = 'Unable to create folder';
$_lang["file_download_file"] = 'Download File';
$_lang["file_download_unzip"] = 'Unzip File';
$_lang["login_homepage"] = 'Login Home Page';
$_lang["login_homepage_message"] = 'Enter the ID of the document you want to send user to after he/she has logged in. <b>NOTE: make sure the ID you\'ve enter belongs to an existing document, and that it has been published and is accessible by this user!</b>';
$_lang["login_allowed_ip"] = 'Allowed IP Address';
$_lang["login_allowed_ip_message"] = 'Enter the IP addresses that this user is allowed to login from. <b>NOTE: Separate multiple IP addresses with a comma (,)</b>';
$_lang["login_allowed_days"] = 'Allowed Days';
$_lang["login_allowed_days_message"] = 'Select the days that this user is allowed to login.';
$_lang["settings_general"] = 'General';
$_lang["settings_keywords"] = 'Keywords';
$_lang["settings_page_settings"] = 'Page Settings';
$_lang["settings_snippets"] = 'Snippets';
$_lang["settings_properties"] = 'Properties';
$_lang["settings_config"] = 'Configuration';
$_lang["settings_events"] = 'System Events';
$_lang["settings_templvars"] = 'Template Variables';
$_lang["unauthorizedpage_title"] = 'Unauthorized page:';
$_lang["unauthorizedpage_message"] = 'Enter the ID of the document you want to send users to if they have requested a secured or unauthorized document. <b>NOTE: make sure the ID you\'ve enter belongs to an existing document, and that it has been published and is publicly accessible!</b>';
$_lang["template_reset_all"] = 'Reset all pages to use Default template';
$_lang["template_reset_specific"] = 'Reset only \'%s\' pages';
$_lang["show_preview"] = 'Show Preview Window';
$_lang["web_access_permissions_user_group"] = 'Web User group:';
$_lang["web_access_permissions_user_groups"] = 'Web User groups';
$_lang["web_access_permissions"] = 'Web access permissions';
$_lang["web_user_title"] = 'Create/ edit web user';
$_lang["snippet_properties"] = 'Default Properties';

$_lang["add_folder"] = 'New Folder';
$_lang["new_web_user"] = 'New web user';
$_lang["new_plugin"] = 'New plugin';
$_lang["edit_plugin"] = 'Edit plugin';
$_lang["create_folder_here"] = 'Create folder here';
$_lang["preview_msg"] = 'This is a preview of your last saved changes. Click here to <a href="#" onclick="saveRefreshPreview();"><img src="media/images/icons/save.gif" align="absmiddle" height="12"> Save and Refresh</a> your current changes';
$_lang["role_plugin_management"] = 'Plugin management';
$_lang["role_create_plugin"] = 'Create new plugins';
$_lang["role_edit_plugin"] = 'Edit plugins';
$_lang["role_save_plugin"] = 'Save plugins';
$_lang["role_delete_plugin"] = 'Delete plugins';
$_lang["role_bk_manager"] = 'Use the Backup Manager';
$_lang["web_user_management_title"] = 'Web Users';
$_lang["web_user_management_msg"] = 'Here you can choose which web user you wish to edit. Web users are those users who are only allowed to log into the the web site';
$_lang["plugin_management_msg"] = 'Here you can choose which plugin you wish to edit.';
$_lang["manage_snippets"] = 'Snippets';
$_lang["stay_new"] = 'Add another';

$_lang["layout_settings_3"] = 'Three column layout <br /><span class="comment">Navigation to the left of the document tree.</span>';

$_lang["lock_msg"] = '%s is currently editing this %s. Please wait until the other user has finished and try again.';
$_lang["lock_settings_msg"] = '%s is currently editing these settings. Please wait until the other user has finished and try again.';
$_lang["module_management"] = 'Manage Modules';
$_lang["confirm_delete_module"] = 'Are you sure you want to delete this module?';
$_lang["settings_dependencies"] = 'Dependencies';
$_lang["module_title"] = 'Create/ edit Module';
$_lang["module_msg"] = 'Here you can add/edit Modules. A Module is a collection of resources (e.g. plugins, snippets, etc).';
$_lang["module_name"] = 'Module name';
$_lang["module_disabled"] = 'Module disabled';
$_lang["module_desc"] = 'Description';
$_lang["module_config"] = 'Module configuration';
$_lang["lock_module"] = 'Lock module for editing';
$_lang["lock_module_msg"] = 'Only Administrators (Role ID 1) can edit this module.';
$_lang["module_management_msg"] = 'Here you can choose the module you would like to execute or modify. To run the module click on the icon in the grid. To modify the module click on the name of the module.';
$_lang["new_module"] = 'New Module';
$_lang["edit_module"] = 'Edit Module';
$_lang["module_viewdepend_msg"] = 'Here you can view the assigned resources that the module depends on. Click on the \'Manager Dependencies\' button to modify the dependencies';
$_lang["module_depend_msg"] = 'Use the buttons on the right to add or remove resources that this module depends on.';
$_lang["confirm_load_depends"] = 'Are you sure you want to load the Manage Dependencies screen without saving your modifications?';
$_lang["enable_resource"] = 'Enable resource file.';
$_lang["resource"] = 'Resource';
$_lang["wrap_lines"] = 'Wrap lines';
$_lang["icon"] = 'Icon';
$_lang["manage_depends"] = 'Manage Dependencies';
$_lang["group_access_permissions"] = 'User group access';
$_lang["module_group_access_msg"] = 'Select the user groups that are allowed to execute this module from within the Content Manager.';
$_lang["all_usr_groups"] = 'All User Groups (Public)';
$_lang["resource_name"] = 'Resource name';
$_lang["name"] = 'Name';
$_lang["description"] = 'Description';
$_lang["locked"] = 'Locked';
$_lang["disabled"] = 'Disabled';
$_lang["run_module"] = 'Run module';
$_lang["module_edit_click_title"] = 'Click here to edit this module';
$_lang["confirm_delete_record"] = 'Are you sure you want to delete the selected record(s)?';
$_lang["module_resource_title"] = 'Module Dependencies';
$_lang["module_resource_msg"] = 'Here you can add or remove resources that this module depends on. To add a new resource click on the one of the add buttons below.';
$_lang["add_doc"] = 'Add Document';
$_lang["add_snippet"] = 'Add Snippet';
$_lang["add_chunk"] = 'Add Chunk';
$_lang["add_plugin"] = 'Add Plugin';
$_lang["add_template"] = 'Add Template';
$_lang["add_tv"] = 'Add TV';
$_lang["resource_selector_title"] = 'Resource Selector';
$_lang["resource_selector_msg"] = 'Select the resource(s) from the list below and click the \'Insert\' button.';
$_lang["search"] = 'Search';
$_lang["reset"] = 'Reset';
$_lang["snippet"] = 'Snippet';
$_lang["plugin"] = 'Plugin';
$_lang["template"] = 'Template';
$_lang["chunk"] = 'Chunk';
$_lang["tv"] = 'TV';
$_lang["category"] = 'Category';
$_lang["enable_sharedparams"] = 'Enable parameter sharing';
$_lang["enable_sharedparams_msg"] = '<b>NOTE:</b> The above globally unique id (GUID) will be used to uniquely identify this module and it\'s shared parameters. The GUID is also used to form a link between the module and the plugins or snippets accessing the it\'s shared parameters. ';
$_lang["guid"] = 'GUID';
$_lang["update_params"] = 'Update parameter display';
$_lang["import_params"] = 'Import module shared parameters';
$_lang["import_params_msg"] = 'You can import the parameters or settings of a module by selecting the name of the module from the above dropdown menu. <b>NOTE:</b> In order for modules to appear inside the menu, this plugin/snippet must be a part of the module\'s dependency listing and the module must have parameter sharing enabled. ';
$_lang["list_mode"] = 'Turn on/off list mode - used to list all records in the grid.';
$_lang["role_module_management"] = 'Module management';
$_lang["role_new_module"] = 'Create new module';
$_lang["role_edit_module"] = 'Edit module';
$_lang["role_save_module"] = 'Save module';
$_lang["role_delete_module"] = 'Delete module';
$_lang["role_run_module"] = 'Run module';
$_lang["role_eventlog_management"] = 'Event log management';
$_lang["role_view_eventlog"] = 'View event log';
$_lang["role_delete_eventlog"] = 'Delete event log';
$_lang["view_log"] = 'View log';
$_lang["date"] = 'Date';
$_lang["source"] = 'Source';
$_lang["event_id"] = 'Event Id';
$_lang["user"] = 'User';
$_lang["eventlog"] = 'Event log';
$_lang["eventlog_viewer"] = 'System Events';
$_lang["eventlog_msg"] = 'The event log is used to display information, warning and error messages generated by the content manager. The \'source\' column shows the section of the content manager where the message occurred.';
$_lang["clear_log"] = 'Clear log';
$_lang["click_to_view_details"] = 'Click here to view details';
$_lang["information"] = 'Information';
$_lang["error"] = 'Error';
$_lang["confirm_delete_eventlog"] = 'Are you sure you want to delete this event log?';

$_lang["editor_css_path_title"] = 'Path to CSS file:';
$_lang["editor_css_path_message"] = 'Enter the path to your CSS file that you wish to use within the editor. The best way to enter the path is to enter the path from the root of your server, for example: /assets/site/style.css. If you do not wish to load a style sheet into the editor, leave this field blank.';
$_lang["rb_title"] = 'Enable Resource Browser:';
$_lang["rb_message"] = 'Select yes to enable the resource browser. This will allow your users to browse and upload resources such as images, flash and media files on the server.'; 
$_lang["rb_base_dir_title"] = 'Resource path:';
$_lang["rb_base_dir_message"] = 'Enter the physical path to the resource directory. This setting is usually automatically generated. If you\'re using IIS, however, MODx may not be able to work the path out on it\'s own, causing the Resource Browser to show an error. In that case, you can enter the path to the images directory here (the path as you\'d see it in Windows Explorer). <b>NOTE:</b> The resource directory must contain the subfolders images, files, flash and media in order for the resource browser to function correctly.'; 
$_lang["rb_base_url_title"] = 'Resource URL:';
$_lang["rb_base_url_message"] = 'Enter the virtual path to resource directory. This setting is usually automatically generated. If you\'re using IIS, however, MODx may not be able to work the URL out on it\'s own, causing the Resource Browser to show an error. In that case, you can enter the URL to the images directory here (the URL as you\'d enter it on Internet Explorer).';

$_lang["noresults_title"] = 'Number of Results:';
$_lang["noresults_message"] = 'Enter the number of results to show in the data grid when viewing listings and search results.';
$_lang["default"] = 'Default';
$_lang["basic"] = 'Basic';
$_lang["standard"] = 'Standard';
// $_lang["advanced"] = 'Advanced'; // see line 150
$_lang["custom"] = 'Custom';
$_lang["you_got_mail"] = 'You got mail'; 
$_lang["email"] = 'Email'; 
$_lang["click_to_edit_title"] = 'Click here to edit this record';
$_lang["manager_permissions"] = 'Manager Permissions';
$_lang["web_permissions"] = 'Web Permissions';
$_lang["export_site"] = 'Export Static HTML';
$_lang["import_site"] = 'Import HTML';
$_lang["mgr_access_permissions"] = 'Manager access permissions';
$_lang["metatags"] = 'META tags';
$_lang["meta_keywords"] = 'META Keywords';
$_lang["metatags_and_keywords"] = 'META tags and Keywords';
$_lang["metatag_intro"] = 'On this page you can delete, create or edit META tags. To link META tags to documents, click on the <u>META Keywords</u> tab when editing the document, and select the desired META tags and keywords. To add a new tag enter the name and value and click the \'Add tag\' button. To edit the tag click on the name of the tag from within the data grid.';
$_lang["keywords_intro"] = 'To edit a keyword, simply type in the new keyword in the text field next to the keyword you wish to change. To delete a keyword, check the \'delete\' box for that keyword. If you check the keyword\'s delete box, and also change it\'s name, it will be deleted, and the renaming of the keyword will not take place!';
$_lang["manage_metatags"] = 'Manage META tags and Keywords';
$_lang["metatag_message"] = 'On this page you can manage your site\'s META tags and keywords. ';
$_lang["tag"] = 'Tag';
$_lang["require_tagname"] = 'A tag name is required';
$_lang["require_tagvalue"] = 'A tag value is required';
$_lang["confirm_delete_tags"] = 'Are you sure you want to delete the selected META tags?';
$_lang["no_keywords_found"] = 'There are currently no keywords.';
$_lang["add_tag"] = 'Add tag';
$_lang["save_tag"] = 'Save tag';
$_lang["delete_tags"] = 'Delete tags';
$_lang["document_metatag_help"] = 'Select the META tags or keywords you wish to assign to this document. Hold down the CTRL key to select multiple keywords or meta tags.';
$_lang["deselect_metatags"] = 'Clear META tags';
$_lang["no_records_found"] = 'No records found.';
$_lang["role_edit_doc_metatags"] = 'Edit document META tags and keywords';
$_lang["role_manage_metatags"] = 'Manage site META tags and keywords';
$_lang["role_web_user_management"] = 'Web user management';
$_lang["role_new_web_user"] = 'Create new web users';
$_lang["role_edit_web_user"] = 'Edit web users';
$_lang["role_save_web_user"] = 'Save web users';
$_lang["role_delete_web_user"] = 'Delete web users';
$_lang["role_web_access_persmissions"] = 'Web access permissions';
$_lang["document_opt_trackvisit_help"] = 'Log each visitor\'s visit to this page';
$_lang["document_opt_menu_title"] = 'Menu title';
$_lang["document_opt_menu_title_help"] = 'Menu title is a field you can use to display a short title for the document inside your menu snippet(s) or modules.';
$_lang["document_opt_contentdispo"] = 'Content Disposition';
$_lang["document_opt_contentdispo_help"] = 'Use the content disposition field to specify how this document will be handled by the web browser. For file downloads select the Attachment option.';
$_lang["duplicate_alias_found"] = 'Document \'%s\' is already using the alias \'%s\'. Please enter a unique alias.';
$_lang["page_data_web_access"] = 'Web access';
$_lang["page_data_mgr_access"] = 'Manager access';
$_lang["automatic_alias_title"] = 'Automatically generate alias:';
$_lang["automatic_alias_message"] = 'Select \'yes\' to have the system automatically generate an alias based on the document\'s page title when saving.';
$_lang["duplicate_alias_title"] = 'Allow duplicate aliases:';
$_lang["duplicate_alias_message"] = 'Here you can select \'yes\' to allow duplicate aliases to be saved. <b>NOTE: This option should be used with \'Friendly alias path\' option set to \'Yes\' in order to avoid problems when referencing a document.</b>';
$_lang["public"] = 'Public';
$_lang["private"] = 'Private';
$_lang["siteunavailable_page_title"] = 'Site unavailable page:';
$_lang["siteunavailable_page_message"] = 'Enter the ID of the document you want to use as an offline page here. <b>NOTE: make sure this ID you enter belongs to an existing document, and that it has been published!</b>';;
$_lang["custom_contenttype_title"] = 'Custom content types:';
$_lang["custom_contenttype_message"] = 'Here you can add custom content types to be used in your documents. To add a new entry, enter the content type in the text box then click the \'Add\' button.';
$_lang["inline"] = 'Inline';
$_lang["attachment"] = 'Attachment';
$_lang["add"] = 'Add';
$_lang["change_name"] = 'Change name';
$_lang["confirm_name_change"] = 'Changing the user name can affect other applications that are linked to the Content Manager. \n\n Are you sure you want to change this user name?';

$_lang["alert"] = 'Configuration';
$_lang["online"] = 'Online';
$_lang["info"] = 'Info';
$_lang["statistics"] = 'Statistics';
$_lang["recent_docs"] = 'Recent documents';
$_lang["credits_everaldo"] = 'MODx uses a number of icons from Everaldo\'s crystal icon set. Great icons!';
$_lang["security"] = 'Security';
$_lang["web_users"] = 'Web users';
$_lang["backup"] = 'Backup';
$_lang["modules"] = 'Modules';
$_lang["layout_settings_4"] = 'Collapsible top bar layout<br /><span class="comment">Collapsible navigation bar to the top the document tree and main window.</span>';
$_lang["document_opt_show_menu"] = 'Show in menu';
$_lang["document_opt_show_menu_help"] = 'Select this option to show document inside a web menu. Please note that some Menu Builders might choose to ignore this option.';
$_lang["months"] = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
$_lang["days"] = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");

$_lang["optimize_table"] = 'Click here to optimize this table';
$_lang["truncate_table"] = 'Click here to truncate this table';

// TP3.3
$_lang["mgr_login_start"] = 'Manager Login Startup';
$_lang["mgr_login_start_message"] = 'Enter the ID of the document you want to send the user to after he/she has logged into the manager. <b>NOTE: make sure the ID you\'ve enter belongs to an existing document, and that it has been published and is accessible by this user!</b>';
$_lang["allow_mgr_access"] = 'Manager Interface Access';
$_lang["allow_mgr_access_message"] = 'Select this option to enable or disable access to the manager interface. <b>NOTE: If this option is set to no then the user will be redirected the the Manager Login Startup or Site Start web page.</b>';
$_lang["logout_message"] = 'You are currently logged into the Content Manager. If you would like to close your login session please click the "Logout" button. <p />To go to your startup or home page click the "Home" button.';
$_lang["layout_settings_5"] = 'Snap in top menu bar layout<br /><span class="comment">Pops open navigation bar to the top the document tree and main window.</span>';
$_lang["snippet_code"] = 'Snippet code (php)';
$_lang["plugin_code"] = 'Plugin code (php)';
$_lang["module_code"] = 'Module code (php)';
$_lang["chunk_code"] = 'Chunk code (html)';
$_lang["template_code"] = 'Template code (html)';

/***************************************************************************/
// new in 0.9.1
/***************************************************************************/
$_lang["QE_lang"] = 'en';
$_lang["QE_xml_lang"] = 'en';
$_lang["QE_charset"] = 'iso-8859-1';
$_lang["QE_title"] = 'QuickEdit'; // please change only if it violates local trademarks
$_lang["QE_show_links"] = 'Show links';
$_lang["QE_hide_links"] = 'Hide links';
$_lang["QE_someone_editing"] = 'Someone else is editing this document';
$_lang["QE_cant_find_content"] = 'Could not find content to edit';
$_lang["QE_description"] = 'Edit pages from the frontend of the site';

$_lang["system_email_signup"] = 'Hello [+uid+] \n\nHere are your login details for [+sname+] Content Manager:\n\nUsername: [+uid+]\nPassword: [+pwd+]\n\nOnce you log into the Content Manager ([+surl+]), you can change your password.\n\nRegards,\nSite Administrator';
$_lang["system_email_websignup"] = 'Hello [+uid+] \n\nHere are your login details for [+sname+]:\n\nUsername: [+uid+]\nPassword: [+pwd+]\n\nOnce you log into [+sname+] ([+surl+]), you can change your password.\n\nRegards,\nSite Administrator';
$_lang["system_email_webreminder"] = 'Hello [+uid+]\n\nTo active you new password click the following link:\n\n[+surl+]\n\nIf successful you can use the following password to login:\n\nPassword:[+pwd+]\n\nIf you did not request this email then please ignore it.\n\nRegrads,\nSite Administrator';

$_lang["role_view_unpublished"] = 'View Unpublished Documents';
$_lang["duplicate_document"] = 'Duplicate Document';

$_lang["after_saving"] = 'After saving';

$_lang["none"] = 'None';

// ForgotManagerPassword Plugin translatons //
$_lang["forgot_your_password"] = 'Forgot your password?';
$_lang["account_email"] = 'Account email';
$_lang["send"] = 'Send';
$_lang["password_change_request"] = 'Password change request';
$_lang["forgot_password_email_intro"] = 'A request has been made to change the password on your account.';
$_lang["forgot_password_email_link"] = 'Click here to complete the process.';
$_lang["forgot_password_email_instructions"] = 'From there you will be able to change your password from the My Account menu.';
$_lang["forgot_password_email_fine_print"] = '* The URL above will expire once you change your password or after today.';
$_lang["error_sending_email"] = 'Error sending email';
$_lang["could_not_find_user"] = 'Could not find user';
$_lang["user_doesnt_exist"] = 'User does not exist';
$_lang["email_sent"] = 'Email sent';

/***************************************************************************/
// new in 0.9.5
/***************************************************************************/
$_lang["tools"] = 'Tools';
$_lang["reports"] = 'Reports';
$_lang["fe_editor_lang_title"] = 'Front-end Editor Language:';
$_lang["fe_editor_lang_message"] = 'Choose a language for the editor to use when used as a front-end editor.';
$_lang["unable_set_link"] = 'Unable to set the link!';
$_lang["link_attributes"] = 'Link Attributes';
$_lang["link_attributes_help"] = 'Here you can enter attributes for the link for this page, such as target= or rel=.';
$_lang["defaultmenuindex_title"] = 'Menu indexing default';
$_lang["defaultmenuindex_message"] = 'Select \'Yes\' to turn on automatic menu index incrementing by default.';
$_lang["configcheck_configinc"] = 'Config file still writable';
$_lang["configcheck_configinc_msg"] = 'Very naughty people could potentially wreak some havoc on your site and everything associated with it. <strong>Really.</strong> Please make your config file  (/manager/includes/config.inc.php) read only!';
$_lang["resource_categories"] = 'Combined View';
$_lang["no_category"] = 'uncategorized';
$_lang["existing_category"] = 'Existing Category';
$_lang["new_category"] = 'New Category';
$_lang["category_heading"] = 'Category';
$_lang["category_msg"] = 'Here you can view and edit all resources grouped by category.';

//Doc Manager Module
//-- titles
$_lang['DM_module_title'] = 'Document Manager';
$_lang['DM_action_title'] = 'Select an action';
$_lang['DM_range_title'] = 'Specify a Range of Document IDs';
$_lang['DM_tree_title'] = 'Select Documents from the tree';
$_lang['DM_update_title'] = 'Update Completed';
$_lang['DM_sort_title'] = 'Menu Index Editor';

//-- tabs
$_lang['DM_doc_permissions'] = 'Document Permissions';
$_lang['DM_template_variables'] = 'Template Variables';
$_lang['DM_sort_menu'] = 'Sort Menu Items';
$_lang['DM_change_template'] = 'Change Template';
$_lang['DM_publish'] = 'Publish/Unpublish';
$_lang['DM_other'] = 'Other Properties';
 
//-- buttons
$_lang['DM_close'] = 'Close Doc Manager';
$_lang['DM_cancel'] = 'Go Back';
$_lang['DM_go'] = 'Go';
$_lang['DM_save'] = 'Save';
$_lang['DM_sort_another'] = 'Sort Another';

//-- templates tab
$_lang['DM_tpl_desc'] = 'Choose the required template from the table below and then specify the Document IDs which need to be changed. Either by specifying a range of IDs or by using the Tree option below.';
$_lang['DM_tpl_no_templates'] = 'No Templates Found';
$_lang['DM_tpl_column_id'] = 'ID';
$_lang['DM_tpl_column_name'] = 'Name';
$_lang['DM_tpl_column_description'] ='Description';
$_lang['DM_tpl_blank_template'] = 'Blank Template';

$_lang['DM_tpl_results_message']= 'Use the Back button if you need make more changes. The Site Cache has automatically been cleared.';

//-- template variables tab
$_lang['DM_tv_desc'] = 'Specify the Document IDs which need to be changed, either by specifying a range of IDs or by using the Tree option below, then choose the required template from the table and the associated template variables will be loaded. Enter your desired Template Variable values and submit for processing.';
$_lang['DM_tv_template_mismatch'] = 'This document does not use the chosen template.';
$_lang['DM_tv_doc_not_found'] = 'This document was not found in the database.';
$_lang['DM_tv_no_tv'] = 'No Template Variables found for the template.';
$_lang['DM_tv_no_docs'] = 'No documents selected for updating.';
$_lang['DM_tv_no_template_selected'] = 'No template has been selected.';
$_lang['DM_tv_loading'] = 'Template Variables are loading ...';
$_lang['DM_tv_ignore_tv'] = 'Ignore these Template Variables (comma-separated values):';
$_lang['DM_tv_ajax_insertbutton'] = 'Insert';

//-- document permissions tab
$_lang['DM_doc_desc'] = 'Choose the required document group from the table below and whether you wish to add or remove the group. Then specify the Document IDs which need to be changed. Either by specifying a range of IDs or by using the Tree option below.';
$_lang['DM_doc_no_docs'] = 'No Document Groups Found';
$_lang['DM_doc_column_id'] = 'ID';
$_lang['DM_doc_column_name'] = 'Name';
$_lang['DM_doc_radio_add'] = 'Add a Document Group';
$_lang['DM_doc_radio_remove'] = 'Remove a Document Group';

$_lang['DM_doc_skip_message1'] = 'Document with ID';
$_lang['DM_doc_skip_message2'] = 'is already part of the selected document group (skipping)';

//-- sort menu tab
$_lang['DM_sort_pick_item'] = 'Please click the site root or parent document from the MAIN DOCUMENT TREE that you\'d like to sort.'; 
$_lang['DM_sort_updating'] = 'Updating ...';
$_lang['DM_sort_updated'] = 'Updated';
$_lang['DM_sort_nochildren'] = 'Parent does not have any children';
$_lang['DM_sort_noid']='No Document has been selected. Please go back and select a document.';

//-- other tab
$_lang['DM_other_header'] = 'Miscellaneous Document Settings';
$_lang['DM_misc_label'] = 'Available Settings:';
$_lang['DM_misc_desc'] = 'Please pick a setting from the dropdown menu and then the required option. Please note that only one setting can be changed at a time.';

$_lang['DM_other_dropdown_publish'] = 'Publish/Unpublish';
$_lang['DM_other_dropdown_show'] = 'Show/Hide in Menu';
$_lang['DM_other_dropdown_search'] = 'Searchable/Unsearchable';
$_lang['DM_other_dropdown_cache'] = 'Cacheable/Uncacheable';
$_lang['DM_other_dropdown_richtext'] = 'Richtext/No Richtext Editor';
$_lang['DM_other_dropdown_delete'] = 'Delete/Undelete';

//-- radio button text
$_lang['DM_other_publish_radio1'] = 'Publish'; 
$_lang['DM_other_publish_radio2'] = 'Unpublish';
$_lang['DM_other_show_radio1'] = 'Hide in Menu'; 
$_lang['DM_other_show_radio2'] = 'Show in Menu';
$_lang['DM_other_search_radio1'] = 'Searchable'; 
$_lang['DM_other_search_radio2'] = 'Unsearchable';
$_lang['DM_other_cache_radio1'] = 'Cacheable'; 
$_lang['DM_other_cache_radio2'] = 'Uncacheable';
$_lang['DM_other_richtext_radio1'] = 'Richtext'; 
$_lang['DM_other_richtext_radio2'] = 'No Richtext';
$_lang['DM_other_delete_radio1'] = 'Delete'; 
$_lang['DM_other_delete_radio2'] = 'Undelete';

//-- adjust dates 
$_lang['DM_adjust_dates_header'] = 'Set Document Dates';
$_lang['DM_adjust_dates_desc'] = 'Any of the following Document date settings can be changed. Use "View Calendar" option to set the dates.';
$_lang['DM_view_calendar'] = 'View Calendar';
$_lang['DM_clear_date'] = 'Clear Date';

//-- adjust authors
$_lang['DM_adjust_authors_header'] = 'Set Authors';
$_lang['DM_adjust_authors_desc'] = 'Use the dropdown lists to set new authors for the Document.';
$_lang['DM_adjust_authors_createdby'] = 'Created By:';
$_lang['DM_adjust_authors_editedby'] = 'Edited By:';
$_lang['DM_adjust_authors_noselection'] = 'No change';

 //-- labels
$_lang['DM_date_pubdate'] = 'Publish Date:';
$_lang['DM_date_unpubdate'] = 'Unpublish Date:';
$_lang['DM_date_createdon'] = 'Created On Date:';
$_lang['DM_date_editedon'] = 'Edited On Date:';
//$_lang['DM_date_deletedon'] = 'Deleted On Date';

$_lang['DM_date_notset'] = ' (not set)';
//deprecated
$_lang['DM_date_dateselect_label'] = 'Select a Date: ';

//-- document select section
$_lang['DM_select_submit'] = 'Submit';
$_lang['DM_select_range'] = 'Switch back to setting a Document ID Range';
$_lang['DM_select_range_text'] = '<p><strong>Key (where n is a document ID	number):</strong><br /><br />
							  n* - Change setting for this document and immediate children<br /> 
							  n** - Change setting for this document and ALL children<br /> 
							  n-n2 - Change setting for this range of documents<br /> 
							  n - Change setting for a single document</p> 
							  <p>Example: 1*,4**,2-20,25 - This will change the selected setting
						      for documents 1 and its children, document 4 and all children, documents 2 
						      through 20 and document 25.</p>';
$_lang['DM_select_tree'] ='View and select documents using the Document Tree';

//-- process tree/range messages
$_lang['DM_process_noselection'] = 'No selection was made. ';
$_lang['DM_process_novalues'] = 'No values have been specified.';
$_lang['DM_process_limits_error'] = 'Upper limit less than lower limit:';
$_lang['DM_process_invalid_error'] = 'Invalid Value:';
$_lang['DM_process_update_success'] = 'Update was completed successfully, with no errors.';
$_lang['DM_process_update_error'] = 'Update has completed but encountered errors:';
$_lang['DM_process_back'] = 'Back';

//-- manager access logging
$_lang['DM_log_template'] = 'Document Manager: Templates changed.';
$_lang['DM_log_templatevariables'] = 'Document Manager: Template variables changed.';
$_lang['DM_log_docpermissions'] ='Document Manager: Document Permissions changed.';
$_lang['DM_log_sortmenu']='Document Manager: Menu Index operation completed.';
$_lang['DM_log_publish']='Document Manager: Document Manager: Documents Published/Unpublished settings changed.';
$_lang['DM_log_hidemenu']='Document Manager: Documents Hide/Show in Menu settings changed.';
$_lang['DM_log_search']='Document Manager: Documents Searchable/Unsearchable settings changed.';
$_lang['DM_log_cache']='Document Manager: Documents Cacheable/Uncacheable settings changed.';
$_lang['DM_log_richtext']='Document Manager: Documents Use Richtext Editor settings changed.';
$_lang['DM_log_delete']='Document Manager: Documents Delete/Undelete settings changed.';
$_lang['DM_log_dates']='Document Manager: Documents Date settings changed.';
$_lang['DM_log_authors']='Document Manager: Documents Author settings changed.';

$_lang['publish_events']='Publish Events';
$_lang['unpublish_events']='UnPublish Events';
$_lang['all_events']='All Events';
$_lang['no_docs_pending_pubunpub']='No Events Found';
$_lang['no_docs_pending_publishing'] ='No documents pending publishing.';
$_lang['publish_date']='Publish Date';
$_lang["no_docs_pending_unpublishing"]='No documents pending unpublising.';
$_lang['unpublish_date']='Unpublish Date';

//--file manager configuration settings (please note change $_lang['uploadable_files_title'] and $_lang['uploadable_files_message'] earlier in this file)
$_lang["uploadable_images_title"] = 'Uploadable Image Types:';
$_lang["uploadable_images_message"] = 'Here you can enter a list of files that can be uploaded into \'assets/images/\' using the Resource Manager. Please enter the extensions for the image types, seperated by commas.';
$_lang["uploadable_media_title"] = 'Uploadable Media Types:';
$_lang["uploadable_media_message"]= 'Here you can enter a list of files that can be uploaded into \'assets/media/\' using the Resource Manager. Please enter the extensions for the media types, seperated by commas.';
$_lang["uploadable_flash_title"] = 'Uploadable Flash Types:';
$_lang["uploadable_flash_message"]= 'Here you can enter a list of files that can be uploaded into \'assets/flash/\' using the Resource Manager. Please enter the extensions for the flash types, seperated by commas.';

$_lang['failed_login_title'] = 'Failed Login Attempts:';
$_lang['failed_login_message'] = 'Here you can enter the number of failed login attempts that are allowed before a user is blocked.';
$_lang['blocked_minutes_title'] = 'Blocked Minutes:';
$_lang['blocked_minutes_message'] = 'Here you can enter the number of minutes that a user will be blocked for if they reach their maximum number of allowed failed login attempts. Please enter this value as numbers only (no commas, spaces etc.)';
?>
