<?php
/************************************************************************

	Main menu page

	**********************************************
	- File:			index.php
	- Date:			July 07, 2011
	- Version:		1.0
	- Author:		AdNovea (Laurent)
	- Modified by:	Andy Chuo (QNAPAndy)
	- Modified by:  internaut19 (Cristian)
        - Modified by:  Spigot
	- Description:  PMS Admin main page

*************************************************************************/

	require(".config/conf.php");
	add_language_list("index");
	include('.config/header.php');

	// Check applications status and Start/Stop servers
	include('.config/check.php');

	// Display sections
	load_language("menu");	// Load common language strings
	set_js_vars();

	// Top panel pulldown for PMS admin center
	echo "
	<div id='header'>
		<div class='meat'>
			<h1><span>Transmission</span></h1>
			<div id='tagline'><span>A Fast, Easy, and Free BitTorrent Client</span></div>
			<div id='tagline2'></div>
			<div id='gearshift'></div>
		</div>
	</div>
	<div style='display: table; height: 785px; overflow: hidden; margin: auto;'>
		<div style='display: table-cell; '>
			<div style='margin-top:200px'>
				<div class='cssParsedBox' id='iconimg'>
				<p>$is_running</p>
				<p>&nbsp;&nbsp;$twx_is_running</p>
				<p>$per_is_running</p>
				<p>$upk_is_running</p>
                                <p>$au_is_running</p>
                                <p>$dbd_is_running</p>
                                <p>$blocklistupd_is_running</p>
				</div>
				<div id='main'>";					
					echo "					
					<div id='accordion'>
						<h3 class='toggler'>
							<table cellspacing='0' border='0'>
								<tr align='left'>
									<td align='left' style='padding-left: 15px; padding-top: 3px;'><img border='0' src='images/arrow.gif' alt=''></td>
									<td width='80' style='padding-top: 3px;'>&nbsp;"._MENU_APP_STARTER."</td>
								</tr>
							</table>
						</h3>
						<div class='element'>
							<table cellspacing='0' border='0' style='margin-left: 50px; width: 355px;'>
								<tr>
									<td width='10'></td>
									<td align='center'>						 
										<a href='?lid=$lid&amp;restart=1'><img border='0' src='images/start.png' alt='start transmission' width='64'></a>
									</td>
									<td valign='top' align='center'>	
										<a href='?lid=$lid&amp;restart=2'><img border='0' src='images/stop.png' alt='stop transmission' width='64'></a>
									</td>
									<td valign='top' align='center'>	
										<a href='?lid=$lid&amp;restart=3'><img border='0' src='images/restart.png' alt='restart transmission' width='64'></a>
									</td>
									<td width='10'></td>
								</tr>
								<tr>
									<td width='10'></td>								
									<td valign='top' align='center'>						 
										<span>"._MENU_START_TRANSMISSION."</span>
									</td>
									<td valign='top' align='center'>	
										<span>"._MENU_STOP_TRANSMISSION."</span>
									</td>
									<td valign='top' align='center'>	
										<span>"._MENU_RESTART_TRANSMISSION."</span>
									</td>										
								</tr>
								<tr height='8'></tr>
							</table>
						</div>";											
					echo "					
						<h3 class='toggler'>
							<table cellspacing='0' border='0'>
								<tr align='left'>
									<td align='left' style='padding-left: 15px; padding-top: 3px;'><img border='0' src='images/arrow.gif' alt=''></td>
									<td width='80' style='padding-top: 3px;'>&nbsp;"._MENU_ADD_ONS."</td>
								</tr>
							</table>
						</h3>
						<div class='element'>
							<table cellspacing='0' border='0' style='margin-left: 50px; width: 355px;'>
								<tr>
									<td width='10'></td>
									<td align='center' width='89'>
										<a href='.config/edit.php?lid=English&amp;cfg=addons_conf&amp;file=conf/addons.conf&amp;action=save' rev='$lb_size' rel='lightbox[conf]'>
										<img border='0' src='images/edit-48.png' alt='' width='64' height='64'></a><br>
									</td>
									<td align='center' width='89'>
										<a style='cursor: pointer;' onclick=\"javascript: jQuery('#dialog_addons_changer').dialog('open');\">
										<img border='0' src='images/read_me.png' width='64' height='64'><br>
									</td>
									<td align='center' width='89'>
											<a href='?lid=$lid&amp;Backup=1'><img border='0' src='images/Backup_button.png' alt='backup addons config file' width='64' height='64'></a>
									</td>
									<td align='center' width='89'>
											<a href='?lid=$lid&amp;Restore=1'><img border='0' src='images/Restore_button.png' alt='restore addons config file' width='64' height='64'></a>
									</td>
									<td width='10'></td>										
								</tr>
								<tr>
									<td width='10'></td>									
									<td align='center' width='89'>						 
										<span>"._MENU_ADD_ONS_CONF."</span>
									</td>
									<td align='center' width='89'>						 
										<span>"._MENU_ADD_ONS_README."</span>
									</td>
									<td align='center' width='89'>
											<span>"._MENU_ADD_ONS_BACKUP_CONF."</span>
									</td>
									<td align='center' width='89'>
											<span>"._MENU_ADD_ONS_RESTORE_CONF."</span>
									</td>
									<td width='10'></td>
								</tr>
								<tr height='8'></tr>
							</table>
						</div>";
						echo "
						<h3 class='toggler'>
							<table cellspacing='0' border='0'>
								<tr align='left'>
									<td align='left' style='padding-left: 15px; padding-top: 3px;'><img border='0' src='images/arrow.gif' alt=''></td>
									<td width='190' style='padding-top: 3px;'>&nbsp;"._MENU_CONFIG_EDITOR."</td>
								</tr>
							</table>
						</h3>
						<div class='element'>
							<table cellspacing='0' border='0' style='margin-left: 50px; width: 355px;'>
								<tr>
									<td width='10'></td>
									<td align='center' width='89'>
										<a href='.config/edit.php?lid=English&amp;cfg=transmission_conf&amp;file=conf/settings.json&amp;action=save' rev='$lb_size' rel='lightbox[conf1]'>
										<img border='0' src='images/edit-48.png' alt='' width='64' height='64'></a><br>
									</td>
									<td align='center' width='89'>
											<a href='?lid=$lid&amp;Backup=2'><img border='0' src='images/Backup_button.png' alt='backup config file' width='64'></a>
									</td>
									<td align='center' width='89'>
											<a href='?lid=$lid&amp;Restore=2'><img border='0' src='images/Restore_button.png' alt='restore config file' width='64'></a>
									</td>
									<td width='10'></td>
								</tr>
								<tr>
									<td width='10'></td>
									<td align='center' width='89'>						 
										<span>"._MENU_SETTINGS_JSON."</span>
									</td>
									<td align='center' width='89'>
										<span>"._MENU_SETTINGS_BACKUP_CONF."</span>
									</td>
									<td align='center' width='89'>
										<span>"._MENU_SETTINGS_RESTORE_CONF."</span>
									</td>
									<td width='10'></td>
								</tr>
								<tr height='8'></tr>
							</table>
						</div>";
						echo "
						<h3 class='toggler'>
							<table cellspacing='0' border='0'>
								<tr align='left'>
									<td align='left' style='padding-left: 15px; padding-top: 3px;'><img border='0' src='images/arrow.gif' alt=''></td>
									<td width='190' style='padding-top: 3px;'>&nbsp;"._MENU_UTILITIES."</td>
								</tr>
							</table>
						</h3>
						<div class='element'>
							<table cellspacing='0' border='0' style='margin-left: 50px; width: 355px;'>
								<tr>
									<td align='center'>
										<a href='.config/edit.php?lid=$lid&amp;cfg=email_notify&amp;file=scripts/email_notifier/config&amp;action=save' rev='$lb_size2' rel='lightbox[conf2]'>
										<img border='0' src='images/email.png' alt='' width='64'></a><br>
									</td>
									<!-- <td align='center'>
										<a href='.config/edit.php?lid=$lid&amp;cfg=max_running_torrents&amp;file=scripts/max-running-torrents/config&amp;action=save' rev='$lb_size' rel='lightbox[conf3]'>
										<img border='0' src='images/max_jobs.png' alt='' width='64'></a><br>
									</td> -->
									<td align='center'>
										<a style='cursor: pointer;' onclick=\"javascript:  jQuery('#dialog_frontend').dialog('open');\">
										<img border='0' src='images/frontend.png' alt='' width='64'></a><br>
									</td>
									<td align='center'>
										<a style='cursor: pointer;' onclick=\"javascript: jQuery('input:radio[name=frontend_name]').filter('[value=".CUR_FRONTEND."]').attr('checked','checked'); jQuery('#dialog_frontend_changer').dialog('open');\">
										<img border='0' src='images/frontend_changer.png' alt='' width='64'></a><br>
									</td>									
									<td align='center'>
										<a style='cursor: pointer;' onclick=\"javascript:  jQuery('#dialog_update').dialog('open');\">
										<img border='0' src='images/software_update.png' alt='' width='64'></a><br>
									</td>	
								</tr>
								<tr>
									<td align='center'>						 
										<span>"._MENU_EMAIL_NOTIFIER."</span>
									</td>
									<!-- <td align='center'>							 
										<span>"._MENU_MAX_RUNNING_JOBS."</span>
									</td> -->
									<td align='center'>								 
										<span>"._MENU_DOWNLOADS."</span>
									</td>	
									<td align='center'>						 
										<span>"._MENU_FRONTEND_CHANGER."</span>
									</td>								
									<td align='center'>						 
										<span>"._MENU_APP_UPDATE."</span>
									</td>	
								</tr>
								<tr height='5'></tr>
							</table>
						</div>";						
						echo "
						<h3 class='toggler'>
							<table cellspacing='0' border='0'>
								<tr align='left'>
									<td align='left' style='padding-left: 15px; padding-top: 3px;'><img border='0' src='images/arrow.gif' alt=''></td>
									<td width='190' style='padding-top: 3px;'>&nbsp;"._MENU_LOG_VIEWER."</td>
								</tr>
							</table>
						</h3>
						<div class='element'>
							<table cellspacing='5' border='0' style='margin-left: 15px; width: 355px;'>
								<tr>
									<td width='5'></td>	
									<td align='center' width='89'>
										<a style='cursor: pointer;' onclick=\"javascript: jQuery('#dialog_console').dialog('open'); TimerRun = true; TimerSet = false; loadFile(1);\">
											<img border='0' src='images/console.png' width='64'><br>
										</a>
									</td>
									<td width='5'></td>	
									<td align='center' width='89'>
										<a style='cursor: pointer;' onclick=\"javascript: jQuery('#dialog_console').dialog('open'); TimerRun = true; TimerSet = false; loadFile(2);\">
											<img border='0' src='images/console.png' width='64'><br>
										</a>
									</td>									
									<td width='5'></td>	
									<td align='center' width='89'>
										<a style='cursor: pointer;' onclick=\"javascript: jQuery('#dialog_console').dialog('open'); TimerRun = true; TimerSet = false; loadFile(3);\">
											<img border='0' src='images/console.png' width='64'><br>
										</a>
									</td>
									<td width='5'></td>
									<td align='center' width='89'>
											<a style='cursor: pointer;' onclick=\"javascript: jQuery('#dialog_console').dialog('open'); TimerRun = true; TimerSet = false; loadFile(4);\">
													<img border='0' src='images/console.png' width='64'><br>
											</a>
									</td>
									</td>
								</td>
								</tr>									
								<tr>
									<td width='5'></td>	
									<td align='center' width='89'>						 
										<span>"._MENU_LOG_CONSOLE."</span>
									</td>
									<td width='5'></td>
									<td align='center' width='89'>						 
										<span>"._MENU_LOG_UNPACK."</span>
									</td>	
									<td width='5'></td>
									<td align='center' width='89'>						 
										<span>"._MENU_LOG_PERISCOPE."</span>
									</td>
									<td width='5'></td>
									<td align='center' width='89'>
											<span>"._MENU_LOG_DBDOWNLOADER."</span>
									</td>
								</tr>
								<tr>
									<td width='5'></td>
									<td align='center' width='89'>
											<a style='cursor: pointer;' onclick=\"javascript: jQuery('#dialog_console').dialog('open'); TimerRun = true; TimerSet = false; loadFile(5);\">
													<img border='0' src='images/console.png' width='64'><br>
											</a>
									</td>
								</td>
								</tr>
								<tr>
										<td width='5'></td>
										<td align='center' width='89'>
												<span>"._MENU_LOG_BLOCKLISTUPD."</span>
										</td>
								</tr>
								<tr height='8'></tr>
							</table>
						</div>
					</div> <!-- accordion -->
				</div> <!-- main -->				
			</div> <!-- wrapper floatholder -->
		</div>
	</div>
	<div id='footer'><p>"._COPYRIGHTS."</p></div>
	<div id='dialog_console' title='Log Console'>
		<div class='contentdiv'>
			<div id='console' style='width: 785px; height: 720px;'></div>

		</div>
	</div>

	<div id='dialog_addons_changer' title='ReadMe'>
		<div id='ReadMe' style='width: 795px; height: 720px;'>
			<div style='float: left; width: 670px;'>
				<div id='frontend_logo'><img src='images/torrent_watch.png' alt='TorrentWatchx Logo' height='54' width='54' /></div>
				<h2 class='dialog_heading'>TorrentWatch-X</h2>
				<div class='dialog_message'>
				<p>TorrentWatch-X is a web based tool used to automate downloads of tv shows via torrents and rss based.</p>
				<p>Features:</p>
				<ul>
				<li>RSS feeds from a few torrent sites who offer TV shows.</li>
				<li>Save torrent file in any folder so any torrent client can pick it up.</li>
				<li>Tell Transmission to save data in any folder</li>
				</ul>
				<h3>Project home page<a href=http://code.google.com/p/torrentwatch-x target='_blank'>&nbsp;<img src='images/icon_new_window.gif' width='12' height='12' border='0' /></a></h3>
				</div>
			<hr style='width:85%; margin-left:80px;'>
			</div>
			<div style='float: left; width: 670px;'>
				<div id='frontend_logo'><img src='images/periscope.png' alt='Periscope Logo' /></div>
				<h2 class='dialog_heading'>Periscope Plugin</h2>
				<div class='dialog_message'>
				<p>Periscope is a subtitles searching module written in python that tries to find a correct match for a given video file. When enabled periscope will periodically search on the OpenSubtitles site for the best possible match.</p>
				<h3>Project home page<a href=http://code.google.com/p/periscope/ target='_blank'>&nbsp;<img src='images/icon_new_window.gif' width='12' height='12' border='0' /></a></h3>
				</div>		
			<hr style='width:85%; margin-left:80px;'>
			</div>
			<div style='float: left; width: 670px;'>
				<div id='frontend_logo'><img src='images/archive_logo.png' alt='UnrarUnzip Logo' height='54' width='54' /></div>
				<h2 class='dialog_heading'>Unpack Function</h2>
				<div class='dialog_message'>
				<p>When this function will be enabled, Transmission will unrar/unzip any archives that are downloaded without the need of any configuration. Current supported archive types .rar, .zip, .001. <br /> The script also allows to unrar/unzip password protected files but in order to do that you will need to provide some default passwords. The passwords can be defined in the addons.conf file.</p>
				<br />
				</div>
			<hr style='width:85%; margin-left:80px;'>
			</div>
			<div style='float: left; width: 670px;'>
				<div id='frontend_logo'><img src='images/update.png' alt='autoupdate Logo' height='54' width='54' /></div>
				<h2 class='dialog_heading'>Autoupdate Function</h2>
				<div class='dialog_message'>
				<p>When this function will be enabled, Transmission will check for QPKG updates, download and install them automatically.</p>
				<p>WARNING: ENABLE THIS FUNCTION ONLY IF YOU CAN DOWNLOAD FILES FROM <u><a href=http://www.dropbox.com>DROPBOX</a></u>.</p>
				<br />
				</div>
					<hr style='width:85%; margin-left:80px;'>
			</div>
					<div style='float: left; width: 670px;'>
							<div id='frontend_logo'><img src='images/Torrent_folder.png' alt='Dropbox downloader' height='54' width='54' /></div>
							<h2 class='dialog_heading'>Dropbox downloader</h2>
							<div class='dialog_message'>
							<p>When this function will be enabled, Transmission will check for specific file containing list of torrents links in your Dropbox (public folder). Then Transmission automatically adds all links and downloads them.</p>
				<p>LEAVE LAST LINE EMPTY IN YOUR FILE!
							<p>WARNING: ENABLE THIS FUNCTION ONLY IF YOU CAN DOWNLOAD FILES FROM <u><a href=http://www.dropbox.com>DROPBOX</a></u>.</p>
							<br />
							</div>
					<hr style='width:85%; margin-left:80px;'>							
					</div>			
					<div style='float: left; width: 670px;'>
							<div id='frontend_logo'><img src='images/Torrent_folder.png' alt='Blocklist updater' height='54' width='54' /></div>
							<h2 class='dialog_heading'>Blocklist updater</h2>
							<div class='dialog_message'>
							<p>This function updates Transmission's Block list from multiple sites in defined time period.</p>
							<br />
							</div>
					<hr style='width:85%; margin-left:80px;'>							
					</div>			
					<div style='float: left; width: 670px;'>
							<div id='frontend_logo'><img src='images/Torrent_folder.png' alt='Backup n restore' height='54' width='54' /></div>
							<h2 class='dialog_heading'>Backup & restore</h2>
							<div class='dialog_message'>
							<p>Specifies folder location for Backup/Restore of configurations files (Transmission/Add-ons/TorrentWatchX). </p>
							</div>
					</div>	
		</div>
	</div>
	<div id='dialog_frontend' title='Frontend Downloads'>
		<div id='ReadMe' style='width: 795px; height: 270px;'>
			<h1 align='center'><u>For PC</u></h1>
			<div style='float: left; width: 375px; height: 200px;'>
				<div id='frontend_logo'><img src='images/logo2.png' alt='Transmission Logo' /></div>
					<h2 class='dialog_heading'>Transmission Remote GUI</h2>
					<div class='dialog_message'>
						<p>Transmission Remote GUI is a cross platform, fast and feature rich  front-end to control the Transmission torrent daemon remotely. It provide many more funcationalities then the built-in web front-end and is available for download from the links below. Choose the operating system you intend to use it on.</p>
						<br /><p>version 5.0.1</p><br />
						<div id='download_link'>
							<a href='http://transmisson-remote-gui.googlecode.com/files/transgui-5.0.1-setup.exe'>Windows&nbsp;&nbsp;</a>|
							<a href='http://transmisson-remote-gui.googlecode.com/files/transgui-5.0.1.dmg'>Mac OS X&nbsp;&nbsp;</a>|
							<a href='http://transmisson-remote-gui.googlecode.com/files/transgui-5.0.1-i386-linux.zip'>Linux i386&nbsp;&nbsp;</a>|
							<a href='http://transmisson-remote-gui.googlecode.com/files/transgui-5.0.1-x86_64-linux.zip '>Linux x86_64</a>
						</div>
					</div>
			</div>
			<div style='float: right; width: 375px; height: 200px;'>
				<div id='frontend_logo'><img src='images/welcomefinish.png' alt='Transmission Logo' /></div>
				<h2 class='dialog_heading'>Transmission Remote dotnet</h2>
				<div class='dialog_message'>
					<p>Transmission-remote-dotnet is a Windows remote client to the RPC interface of transmission-daemon, which is part of the Transmission BitTorrent client. The application is quite like uTorrent in appearance and currently supports almost all the RPC specification.</p>
					<br /><p>version 3.24.3</p><br />
					<div id='download_link'>
						<a href='http://transmission-remote-dotnet.googlecode.com/files/transmission-remote-dotnet-3.24.3-installer.exe'>Windows</a>
					</div>
				</div>
			</div>
		</div>
		<div id='ReadMe' style='width: 795px; height: 270px; margin: -1px 0px 0px 0px;'>
			<h1 align='center'><u>For Mobile</u></h1>
			<div style='float: left; width: 375px;'>
				<div id='frontend_logo'><img src='images/logo3.png' alt='Transdroid Logo' /></div>
				<h2 class='dialog_heading'>Transdroid - <font color='grey'>for Android Phone</font></h2> 
				<div class='dialog_message'>				
					<p>Transdroid is an Android remote client for your torrent application running on a server or home computer. Currently Transmission, uTorrent, Bittorrent, Deluge, Vuze and rTorrent are supported. It can show the active torrents, pause, resume or remove them and new torrents can be added via URL, RSS feed or using the integrated search.</p>
					<br /><p>version 2.1.4</p><br />
					<div id='download_link'>
						<a href='https://github.com/erickok/transdroid/releases/download/v2.1.4/transdroid-2.1.4.apk'>Android</a>
					</div>
				</div>
			</div>
			<div style='float: right; width: 375px;'>
				<div id='frontend_logo'><img src='images/transmission-remote.png' width='48' alt='Transdroid Logo' /></div>
				<h2 class='dialog_heading'>Transmission Remote <font color='grey'>for Windows Mobile 7</font></h2>
				<div class='dialog_message'>				
					<p>Transmission Remote is a nonfree app to let you control Transmission remotely from a Windows Mobile 7 phone.</p>
					<br /><p>version 1.0.0.0</p><br />
					<div id='download_link'>
						<a href='zune://navigate/?appID=70b6c169-78f6-df11-9264-00237de2db9e'>Window Mobile 7</a>
					</div>				
					<br />
					<br />
				</div>
			</div>		
		</div>
	</div>
	<div id='dialog_frontend_changer' title='Frontend Changer'>
		<div id='ReadMe' style='width: 795px; height: 160px;'>
			<form name='testing' action='' style='margin: 0px 0px 0px 10px'>
				<div id='radio' style='float: left left'>
					<input type='radio' id='radio1' name='frontend_name' value='default' />
					<label for='radio1'>Default</label>
					<input type='radio' id='radio2' name='frontend_name' value='gearbox' />
					<label for='radio2'>Gearbox</label>
					<input type='radio' id='radio3' name='frontend_name' value='kettu' />
					<label for='radio3'>Kettu</label>	
					<input type='radio' id='radio4' name='frontend_name' value='trcontrol' />
					<label for='radio4'>Transmission Web Control</label>
					<input id='button' value='Apply' type='submit' style='height:28px; width:50px; margin: 0.4em 0px 5px 5px'; font-size: 10px;/>	
				</div>	
				<div id='toggler'>
					<div id='default' class='ui-widget-content ui-corner-all' style='margin:20px 20px 20px 20px; padding: 10px;'>
						<b>Transmission Default Web Frontend</b><br /><br />
						<p>
							This is the default Transmission web frontend.
						</p>
					</div>
					<div id='gearbox' class='ui-widget-content ui-corner-all' style='margin:20px 20px 20px 20px; padding: 10px;'>
						<b>Gearbox</b><br /><br />
						<p>
							A simple web gui for Transmission.
						</p>
					</div>
							<div id='kettu' class='ui-widget-content ui-corner-all' style='margin:20px 20px 20px 20px; padding: 10px;'>
						<b>Kettu</b><br /><br />
						<p>
							Rewrite of the Transmission Web Client with jQuery, Sammy and Mustache .
						</p>
					</div>       
					<div id='trcontrol' class='ui-widget-content ui-corner-all' style='margin:20px 20px 20px 20px; padding: 10px;'>
							<b>Transmission Web Control</b><br /><br />
						<p>
							Transmission Web Control is a custom web UI
						</p>
					</div>
	 
				</div>	
			</form>
		</div>
	</div>
	<div id='dialog_update' title='Apps & Add-ons'>
		<div id='ReadMe' style='width: 795px; height: 180px;'>
			<h1 align='center'><u>Update applications & Add-ons</u></h1>
			<div style='float: left; width: 375px;'>
				<div id='frontend_logo'><img src='images/logo2.png' alt='Software update' /></div>
				<h2 class='dialog_heading'>Transmission remote</h2>			
				<table cellspacing='0' border='0' style='margin-left: 50px; width: 155px;'>
					<tr>
						<td width='10'></td>									
						<td align='center' width='89'>
								<a href='?lid=$lid&amp;UpdateAppAddOns=1'><img border='0' src='images/system_software_update.png' alt='update transmission remote' width='64'></a>
						</td>							
					</tr>
					<tr>
						<td width='10'></td>									
						<td align='center' width='89'>
								<span>"._MENU_APPS_N_ADD_ONS_UPDATE_TRANREMOTE."</span>
						</td>
					</tr>
				</table>			
			</div>
			<div style='float: right; width: 375px;'>
				<div id='frontend_logo'><img src='images/twb_logo.png' alt='Software update' /></div>
				<h2 class='dialog_heading'>Transmission web control</h2>			
				<table cellspacing='0' border='0' style='margin-left: 50px; width: 155px;'>
					<tr>
						<td width='10'></td>									
						<td align='center' width='89'>
								<a href='?lid=$lid&amp;UpdateAppAddOns=2'><img border='0' src='images/system_software_update.png' alt='update transmission remote web control' width='64'></a>
						</td>							
					</tr>
					<tr>
						<td width='10'></td>									
						<td align='center' width='89'>
								<span>"._MENU_APPS_N_ADD_ONS_UPDATE_TRANWEBCONTROL."</span>
						</td>
					</tr>
					
				</table>			
			</div>	
		</div>
		<div id='ReadMe' style='width: 795px; height: 180px; margin: -1px 0px 0px 0px;'>
			<h1 align='center'><u>Backup & Restore</u></h1>
			<div style='float: left; width: 375px;'>
				<div id='frontend_logo'><img src='images/logo2.png' alt='Backup TWX' /></div>
				<h2 class='dialog_heading'>TorrentWatchX</h2>
				<table cellspacing='0' border='0' style='margin-left: 50px; width: 255px;'>
					<tr>
						<td width='10'></td>									
						<td align='center' width='89'>
								<a href='?lid=$lid&amp;Backup=3'><img border='0' src='images/Backup_button.png' alt='backup config file' width='64'></a>
						</td>
						<td align='center' width='89'>
								<a href='?lid=$lid&amp;Restore=3'><img border='0' src='images/Restore_button.png' alt='backup config file' width='64'></a>
						</td>
						<td width='10'></td>										
					</tr>
					<tr>
						<td width='10'></td>									
						<td align='center' width='89'>
								<span>"._MENU_APPS_N_ADD_ONS_BACKUP_CONF."</span>
						</td>
						<td align='center' width='89'>
								<span>"._MENU_APPS_N_ADD_ONS_RESTORE_CONF."</span>
						</td>
						<td width='10'></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

  ";
	include('.config/footer.php');

?>

