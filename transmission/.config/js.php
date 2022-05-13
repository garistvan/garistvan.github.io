<?php
/************************************************************************

	Transmission Admin Web GUI

	**********************************************
	- File:			js.php
	- Date:			Oct 11th, 2010
	- Version:		1.0
	- Author:		AdNovea (Laurent)
	- Modified by:	Andy Chuo (QNAPAndy)
	- Modified by:  Spigot
	- Description:  Transmission Admin main page javascript

*************************************************************************/
	
// Open JS section		
	$jssource =  "
		<script type='text/javascript'>";

// jQuery UI configuration
	$jssource .=  "
			// jQuery UI configuration			
			
			// Debug console files
			docFile0 = '".TRANSMISSION_DEBUG_LOG."';
			docFile1 = '".TRANSMISSION_UNPACK_LOG."';
			docFile2 = '".TRANSMISSION_PERISCOPE_LOG."';
			docFile3 = '".TRANSMISSION_DBDOWNLOADER_LOG."';
                        docFile4 = '".TRANSMISSION_BLOCKLISTUPD_LOG."';
			stNoSelection = '"._ST_NOSELECTION."';

			// jQuery functions			
			$.noConflict();
			jQuery(document).ready(function($) {
				// Log viewer Dialog box				
				jQuery('#dialog_console').dialog({
					autoOpen: false,
					stack: false,
					resizable: false,
					draggable: true,
					show: 'blind',
					width: 800,
					modal: true,
				});
				// Frontend download Dialog box	
				jQuery('#dialog_frontend').dialog({				
					autoOpen: false,				
					stack: false,
					resizable: false,
					draggable: true,
					show: 'blind',
					width: 800,
					modal: true,
				});		
				// Frontend changer Dialog box	
				jQuery('#dialog_frontend_changer').dialog({				
					autoOpen: false,				
					stack: false,
					resizable: false,
					draggable: true,
					show: 'blind',
					width: 800,
					modal: true,
				});	
				jQuery('#dialog_addons_changer').dialog({				
					autoOpen: false,				
					stack: false,
					resizable: false,
					draggable: true,
					show: 'blind',
					width: 800,
					modal: true,
				});			
                                jQuery('#dialog_addons_changer').dialog({
                                        autoOpen: false,
                                        stack: false,
                                        resizable: false,
                                        draggable: true,
                                        show: 'blind',
                                        width: 800,
                                        modal: true,
                                });	
				jQuery('#dialog_update').dialog({				
					autoOpen: false,				
					stack: false,
					resizable: false,
					draggable: true,
					show: 'blind',
					width: 800,
					modal: true,
				});	
	
				jQuery('img.menu_class').click(function () {
					jQuery('ul.the_menu').slideToggle('medium');
				});
				
				jQuery( '#radio' ).buttonset();		
				
				jQuery('input:radio[name=frontend_name]').filter('[value=".CUR_FRONTEND."]').attr('checked', true);

				jQuery(function() {
						$('div#default').hide();
						$('div#gearbox').hide();
						$('div#kettu').hide();
                                                $('div#trcontrol').hide();
					$('input:radio[name=frontend_name]').click(function(){
						var selected = $(this).val();
						$('div#toggler').show(); 
						$('div#default').hide();
						$('div#gearbox').hide();
						$('div#kettu').hide();
                                                $('div#trcontrol').hide();
						$('#'+selected).show();
					});
				});
			});

			window.addEvent('domready', function() {
				//create our Accordion instance
				var myAccordion = new Accordion($('accordion'), 'h3.toggler', 'div.element', {
					opacity: true,
					openAll: false,
					show: [], //close everything
					alwaysHide: true,

					onActive: function(toggler, element){
						toggler.setStyle('color', '#FFFFFF');
					},
					onBackground: function(toggler, element){
						toggler.setStyle('color', '#FFFFFF');
					}
					
				});
			}); 
		</script>";
?>
