<?php
/************************************************************************

	Status Checking

	**********************************************
	- File:			check.php
	- Date:			July 07, 2011
	- Version:		1.0
	- Author:		AdNovea (Laurent)
	- Modified by:	Andy Chuo (QNAPAndy)
	- Modified by:  internaut19 (Cristian)
        - Modified by:  Spigot
	- Description:  Start/Stop/Check the Transmission 

*************************************************************************/
	
	define("RUNNING",	TRANSMISSION_RUNNING);
	define("STOPPED",	TRANSMISSION_NOT_RUNNING);
	define("TWX_ENABLED",	TORRENT_WATCH_ENABLED);
	define("TWX_DISABLED",	TORRENT_WATCH_DISABLED);
	define("PER_ENABLED",	PERISCOPE_ENABLED);
	define("PER_DISABLED",	PERISCOPE_DISABLED);
	define("UPK_ENABLED",	UNPACK_ENABLED);
	define("UPK_DISABLED",	UNPACK_DISABLED);
    define("AU_ENABLED",    AUTOUPDATE_ENABLED);
    define("AU_DISABLED",   AUTOUPDATE_DISABLED);
    define("DBD_ENABLED",   DBDOWNLOADER_ENABLED);
    define("DBD_DISABLED",  DBDOWNLOADER_DISABLED);
    define("BLISTUPD_ENABLED",   BLOCKLISTUPD_ENABLED);
    define("BLISTUPD_DISABLED",  BLOCKLISTUPD_DISABLED);


	$frontend_name = $_GET['frontend_name'];
	$name = $_POST['name'];

	// Start, Stop or Restart tranmission (doesn't always work !!!)
	if ($_GET['restart'] == 1) exec(WRITE_HTTP."transmission=start".WRITE_LOG);
	if ($_GET['restart'] == 2) exec(WRITE_HTTP."transmission=stop".WRITE_LOG);
	if ($_GET['restart'] == 3) exec(WRITE_HTTP."transmission=restart".WRITE_LOG);
	// Apply addons settings
	if ($_GET['restart'] == 4) exec(WRITE_HTTP."addons_conf".WRITE_LOG);
	if ($_GET['frontend_name'] != NULL) exec(WRITE_HTTP."change_frontend=".$frontend_name."".WRITE_LOG);
	if (isset($_GET['restart'])) sleep(7);
	if ($_GET['UpdateAppAddOns'] == 1) exec(WRITE_HTTP."transmission=update_application".WRITE_LOG);
	if ($_GET['UpdateAppAddOns'] == 2) exec(WRITE_HTTP."transmission=update_trans_web_control".WRITE_LOG);
	// Backup/restore config files
	if ($_GET['Backup'] == 1) exec(WRITE_HTTP."transmission=backup_addons_conf".WRITE_LOG);
	if ($_GET['Backup'] == 2) exec(WRITE_HTTP."transmission=backup_transmission_conf".WRITE_LOG);
	if ($_GET['Backup'] == 3) exec(WRITE_HTTP."transmission=backup_twx_conf".WRITE_LOG);	
	if ($_GET['Restore'] == 1) exec(WRITE_HTTP."transmission=restore_addons_conf".WRITE_LOG);
	if ($_GET['Restore'] == 2) exec(WRITE_HTTP."transmission=restore_transmission_conf".WRITE_LOG);	
	if ($_GET['Restore'] == 3) exec(WRITE_HTTP."transmission=restore_twx_conf".WRITE_LOG);	

	// Check if transmission.pid exists and if Transmission is running
	if (file_exists(TRANSMISSION_PID_FILE)) $is_running = RUNNING; else $is_running = STOPPED;
	// Check if torrentwatch-x is enabled or not
	if (CUR_TWX_STATUS == 1) $twx_is_running = TWX_ENABLED; else $twx_is_running = TWX_DISABLED;
	// Check if periscope is enabled or not
	if (CUR_PER_STATUS == 1) $per_is_running = PER_ENABLED; else $per_is_running = PER_DISABLED;
	// Check if unpack function is enabled is enabled or not
	if (CUR_UPK_STATUS == 1) $upk_is_running = UPK_ENABLED; else $upk_is_running = UPK_DISABLED;
        // Check if autoupdate is enabled or not
        if (CUR_AU_STATUS == 1) $au_is_running = AU_ENABLED; else $au_is_running = AU_DISABLED;
        // Check if Dropbox downloader function is enabled is enabled or not
        if (CUR_DBD_STATUS == 1) $dbd_is_running = DBD_ENABLED; else $dbd_is_running = DBD_DISABLED;
        // Check if Blocklist updater function is enabled is enabled or not
        if (CUR_BLOCKLISTUPD_STATUS == 1) $blocklistupd_is_running = BLISTUPD_ENABLED; else $blocklistupd_is_running = BLISTUPD_DISABLED;
?>
 
