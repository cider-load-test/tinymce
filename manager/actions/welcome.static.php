<?php
if(IN_MANAGER_MODE!="true") die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODx Content Manager instead of accessing this file directly.");
unset($_SESSION['itemname']); // clear this, because it's only set for logging purposes

if(!isset($settings_version) || $settings_version!=$version) {
	// seems to be a new install - send the user to the configuration page
?>
<script type="text/javascript">document.location.href="index.php?a=17";</script>
<?php
	exit;
}

?>
<div class="subTitle" style="margin-bottom:0px">
	<span class="right"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/_tx_.gif" width="1" height="5" /><br /><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/home.gif" />&nbsp;<?php echo $_lang["home"]; ?></span>
</div>

<!-- welcome -->
<div class="sectionBody" style="margin-top:0px;">
<table border="0" cellpadding="5" width="100%">
  <tr>
    <td width="10%" align="right">
		<img src='media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/misc/logo.png' alt='<?php echo $_lang["logo_slogan"]; ?>' />
		<br /><br />
	</td>
	<td>
	<span style="font-size:18px;font-weight:bold"><?php echo "$site_name"; ?> </span><br />
	<?php echo $_lang["welcome_title"]; ?><br /><br />
<?php if($modx->hasPermission('messages')) { ?>
		<a href="index.php?a=10"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/mail_generic.gif" /></a>
		<span style="color:#909090;font-size:15px;font-weight:bold">&nbsp;Inbox<?php echo $_SESSION['nrnewmessages']>0 ? " (<span style='color:red'>".$_SESSION['nrnewmessages']."</span>)":""; ?></span><br /><span class="comment"><?php printf($_lang["welcome_messages"], $_SESSION['nrtotalmessages'], "<span style='color:red;'>".$_SESSION['nrnewmessages']."</span>") ?></span>
<?php } ?>
	</td>
  </tr>
</table>
<div>&nbsp;</div>
<table border="0" cellpadding="3">
	<tr>
<?php 	if($modx->hasPermission('new_user')||$modx->hasPermission('edit_user')) { ?>
	  <td align="center"><a class="hometblink" href="index.php?a=75"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/security.gif" width="32" height="32" alt="<?php echo $_lang['user_management_title']; ?>" /><br /><?php echo $_lang['security']; ?></a></td>
	  <td style="color:silver">|</td>
<?php 	} ?>
<?php 	if($modx->hasPermission('new_web_user')||$modx->hasPermission('edit_web_user')) { ?>
	  <td align="center"><a class="hometblink" href="index.php?a=99"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/web_users.gif" width="32" height="32" alt="<?php echo $_lang['web_user_management_title']; ?>" /><br /><?php echo $_lang['web_users']; ?></a></td>
	  <td style="color:silver">|</td>
<?php 	} ?>
<?php 	if($modx->hasPermission('new_module') || $modx->hasPermission('edit_module') || $modx->hasPermission('exec_module')) { ?>
	  <td align="center"><a class="hometblink" href="index.php?a=106"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/modules.gif" width="32" height="32" alt="<?php echo $_lang['manage_modules']; ?>" /><br /><?php echo $_lang['modules']; ?></a></td>
	  <td style="color:silver">|</td>
<?php 	} ?>
<?php if($modx->hasPermission('new_template') || $modx->hasPermission('edit_template') || $modx->hasPermission('new_snippet') || $modx->hasPermission('edit_snippet') || $modx->hasPermission('new_plugin') || $modx->hasPermission('edit_plugin') || $modx->hasPermission('manage_metatags')) { ?>
	  <td align="center"><a class="hometblink" href="index.php?a=76"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/resources.gif" width="32" height="32" alt="<?php echo $_lang['resource_management']; ?>" /><br /><?php echo $_lang['resources']; ?></a></td>
	  <td style="color:silver" width="50">|</td>
<?php 	} ?>
<?php if($modx->hasPermission('bk_manager')) { ?>
	  <td align="center"><a class="hometblink" href="index.php?a=93"><img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/backup.gif" width="32" height="32" alt="<?php echo $_lang['bk_manager']; ?>" /><br /><?php echo $_lang['backup']; ?></a></td>
<?php 	} ?>
	</tr>
</table>
</div>
<div class="sectionBody" style="border:0px; padding:0px;">
<script type="text/javascript" src="media/script/tabpane.js"></script>
<div class="tab-pane" id="welcomePane" style="border:0px">
	<script type="text/javascript">
		tpPane = new WebFXTabPane(document.getElementById( "welcomePane" ),false);
	</script>

	<!-- system check -->
	<?php
	// do some config checks
	include_once "config_check.inc.php";
	if($config_check_results != $_lang['configcheck_ok']) {
	?>
	<div class="tab-page" id="tabcheck" style="padding-left:0px; padding-right:0px">
		<h2 class="tab"><?php echo $_lang["settings_config"] ?></h2>
		<script type="text/javascript">tpPane.addTabPage( document.getElementById( "tabcheck" ) );</script>
			<div class="sectionHeader"><?php echo $_lang["configcheck_title"]; ?></div><div class="sectionBody">
			<img src="media/style/<?php echo $manager_theme ? "$manager_theme/":""; ?>images/icons/event2.gif" />
			<?php echo $config_check_results;	?>
			</div>
	</div>
	<?php } ?>

	<!-- recent activities -->
	<div class="tab-page" id="tabAct" style="padding-left:0px; padding-right:0px">
		<h2 class="tab"><?php echo $_lang["recent_docs"] ?></h2>
		<script type="text/javascript">tpPane.addTabPage( document.getElementById( "tabAct" ) );</script>
		<div class="sectionHeader"><?php echo $_lang["activity_title"]; ?></div><div class="sectionBody">
			<?php echo $_lang["activity_message"]; ?><br /><br /><ul>
		<?php
		$sql = "SELECT id, pagetitle, description FROM $dbase.".$table_prefix."site_content WHERE $dbase.".$table_prefix."site_content.deleted=0 AND ($dbase.".$table_prefix."site_content.editedby=".$modx->getLoginUserID()." OR $dbase.".$table_prefix."site_content.createdby=".$modx->getLoginUserID().") ORDER BY editedon DESC LIMIT 10";
		$rs = mysql_query($sql);
		$limit = mysql_num_rows($rs);
		if($limit<1) {
			echo "\t".$_lang["no_activity_message"];
		} else {
			for ($i = 0; $i < $limit; $i++) {
				$content = mysql_fetch_assoc($rs);
				if($i==0) {
					$syncid = $content['id'];
				}
		?>
						<li><span style="width: 40px; text-align:right;"><?php echo $content['id']; ?></span> - <span style="width: 200px;"><a href='index.php?a=3&amp;id=<?php echo $content['id']; ?>'><?php echo $content['pagetitle']; ?></a></span><?php echo $content['description']!='' ? ' - '.$content['description'] : '' ; ?></li>
		<?php
			}
		}
		?>
		</ul></div>
	</div>

	<!-- your info -->
	<div class="tab-page" id="tabYour" style="padding-left:0px; padding-right:0px">
		<h2 class="tab"><?php echo $_lang["info"] ?></h2>
		<script type="text/javascript">tpPane.addTabPage( document.getElementById( "tabYour" ) );</script>
		<div class="sectionHeader"><?php echo $_lang["yourinfo_title"]; ?></div><div class="sectionBody">
			<?php echo $_lang["yourinfo_message"]; ?><br /><br />
			<table border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td width="150"><?php echo $_lang["yourinfo_username"]; ?></td>
				<td width="20">&nbsp;</td>
				<td><b><?php echo $modx->getLoginUserName(); ?></b></td>
			  </tr>
			  <tr>
				<td><?php echo $_lang["yourinfo_role"]; ?></td>
				<td>&nbsp;</td>
				<td><b><?php echo $_SESSION['mgrPermissions']['name']; ?></b></td>
			  </tr>
			  <tr>
				<td><?php echo $_lang["yourinfo_previous_login"]; ?></td>
				<td>&nbsp;</td>
				<td><b><?php echo strftime('%d-%m-%y %H:%M:%S', $_SESSION['mgrLastlogin']+$server_offset_time); ?></b></td>
			  </tr>
			  <tr>
				<td><?php echo $_lang["yourinfo_total_logins"]; ?></td>
				<td>&nbsp;</td>
				<td><b><?php echo $_SESSION['mgrLogincount']+1; ?></b></td>
			  </tr>
			</table>
		</div>
	</div>

	<!-- online -->
	<div class="tab-page" id="tabOnline" style="padding-left:0px; padding-right:0px">
		<h2 class="tab"><?php echo $_lang["online"] ?></h2>
		<script type="text/javascript">tpPane.addTabPage( document.getElementById( "tabOnline" ) );</script>
		<div class="sectionHeader"><?php echo $_lang["onlineusers_title"]; ?></div><div class="sectionBody">
			<?php echo $_lang["onlineusers_message"]; ?><b><?php echo strftime('%H:%M:%S', time()+$server_offset_time); ?></b>):<br /><br />
			<table border="0" cellpadding="1" cellspacing="1" width="100%" bgcolor="#707070">
			  <thead>
			  <tr>
				<td><b><?php echo $_lang["onlineusers_user"]; ?></b></td>
				<td><b><?php echo $_lang["onlineusers_userid"]; ?></b></td>
				<td><b><?php echo $_lang["onlineusers_ipaddress"]; ?></b></td>
				<td><b><?php echo $_lang["onlineusers_lasthit"]; ?></b></td>
				<td><b><?php echo $_lang["onlineusers_action"]; ?></b></td>
			  </tr>
			  </thead>
			  <tbody>
			<?php
			$timetocheck = (time()-(60*20));//+$server_offset_time;

			include_once "actionlist.inc.php";

			$sql = "SELECT * FROM $dbase.".$table_prefix."active_users WHERE $dbase.".$table_prefix."active_users.lasthit>'$timetocheck' ORDER BY username ASC";
			$rs = mysql_query($sql);
			$limit = mysql_num_rows($rs);
			if($limit<1) {
				echo "No active users found.<br /><br />";
			} else {
				for ($i = 0; $i < $limit; $i++) {
					$activeusers = mysql_fetch_assoc($rs);
					$currentaction = getAction($activeusers['action'], $activeusers['id']);
					$webicon = ($activeusers['internalKey']<0)? "<img  src='images/tree/web.gif' alt='Web user' />":"";
					echo "<tr bgcolor='#FFFFFF'><td><b>".$activeusers['username']."</b></td><td>$webicon&nbsp;".abs($activeusers['internalKey'])."</td><td>".$activeusers['ip']."</td><td>".strftime('%H:%M:%S', $activeusers['lasthit']+$server_offset_time)."</td><td>$currentaction</td></tr>";
				}
			}
			?>
			</tbody>
			</table>
		</div>
	</div>

</div>
</div>

<script type="text/javascript">
try {
	top.menu.Sync(<?php echo $syncid; ?>);
} catch(oException) {
	xyy=window.setTimeout("loadagain(<?php echo $syncid; ?>)", 1000);
}
</script>

<br />