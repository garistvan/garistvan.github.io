#!/bin/sh
#--------------------------------------------
#  tranmission.cgi
#
#
#	HISTORY:
#       2008/12/12 -    Written by Laurent (Ad'Novea)
#		2008/08/20 -	idea from Y.C. Ken Chen
#
#--------------------------------------------

#No external access
#Thanks to Dimitri91

if [ "${REMOTE_ADDR}" != "127.0.0.1" ]; then
   echo "Location:/"
   echo ""
   exit
fi

# Retreive command line parameters
	paramVar1=`echo $QUERY_STRING | cut -d \& -f 1 | cut -d \= -f 1`
	paramVal1=`echo $QUERY_STRING | cut -d \& -f 1 | cut -d \= -f 2`
	paramVar2=`echo $QUERY_STRING | cut -d \& -f 2 | cut -d \= -f 1`
	paramVal2=`echo $QUERY_STRING | cut -d \& -f 2 | cut -d \= -f 2`
	paramVar3=`echo $QUERY_STRING | cut -d \& -f 3 | cut -d \= -f 1`
	paramVal3=`echo $QUERY_STRING | cut -d \& -f 3 | cut -d \= -f 2`
	paramVar4=`echo $QUERY_STRING | cut -d \& -f 4 | cut -d \= -f 1`
	paramVal4=`echo $QUERY_STRING | cut -d \& -f 4 | cut -d \= -f 2`
	paramVar5=`echo $QUERY_STRING | cut -d \& -f 3 | cut -d \= -f 1`
	paramVal5=`echo $QUERY_STRING | cut -d \& -f 3 | cut -d \= -f 2`
	paramVar6=`echo $QUERY_STRING | cut -d \& -f 4 | cut -d \= -f 1`
	paramVal6=`echo $QUERY_STRING | cut -d \& -f 4 | cut -d \= -f 2`	
	
	SYS_MODEL=`/sbin/getcfg system model`;

# Determine Platform type
	CPU_MODEL=`uname -m`
	KERNEL=`uname -mr | cut -d '-'  -f 1 | cut -d ' '  -f 1`
#	if [ "${KERNEL}" == "2.6.12.6" ] ; then CHROOTED=1; else CHROOTED=0; fi

# Debugging
	echo -e "content-type: text/html\n"
	echo -e "\n`date`"
	echo -e "\nCPU=${CPU_MODEL} / KERNEL=${KERNEL}"
	echo -e "\nSCRIPT: transmission.cgi param1[${paramVar1}=${paramVal1}] param2[${paramVar2}=${paramVal2}] param3[${paramVar3}=${paramVal3}] param4[${paramVar4}=${paramVal4}]"

	
	case $paramVar1 in
		# Start/Stop Transmission
		transmission)
			echo -e "Transmission: ${paramVal1}"
			/etc/init.d/transmission.sh $paramVal1
			;;
		addons_conf)
			echo -e "Transmission: Configuring settings.json"
			/etc/init.d/transmission.sh addons_conf
			;;
		config)
			echo -e "Transmission: Configuring settings.json"
			/etc/init.d/transmission.sh config
			;;
		max_running_torrents)
			echo -e "Transmission: Setting max running torrents"
			/etc/init.d/transmission.sh max-running-torrents
			;;
		email_notify)
			echo -e "Transmission: Setting up email notifications"
			/etc/init.d/transmission.sh setup_email_notifier
			;;	
		change_frontend)
			echo -e "Transmission: Change the web frontend to $paramVal2"
			/etc/init.d/transmission.sh change_frontend $paramVal2
			;;
		update_application)
			echo -e "Transmission: Updating Transmisssion"
			/etc/init.d/transmission.sh update_application
			;;
		update_trans_web_control)
			echo -e "Transmission: Updating Transmission web control"
			/etc/init.d/transmission.sh update_trans_web_control
			;;
		backup_addons_conf)
			echo -e "Transmission: Backing up Transmission add ons config"
			/etc/init.d/transmission.sh backup_addons_conf
			;;
		restore_addons_conf)
			echo -e "Transmission: Restoring Transmission add ons config"
			/etc/init.d/transmission.sh restore_addons_conf
			;;			
		backup_transmission_conf)
			echo -e "Transmission: Backing up Transmission config"
			/etc/init.d/transmission.sh backup_transmission_conf
			;;
		restore_transmission_conf)
			echo -e "Transmission: Restoring Transmission config"
			/etc/init.d/transmission.sh restore_transmission_conf
			;;			
		backup_twx_conf)
			echo -e "Transmission: Backing up Transmission config"
			/etc/init.d/transmission.sh backup_twx_conf
			;;
		restore_twx_conf)
			echo -e "Transmission: Restoring Transmission config"
			/etc/init.d/transmission.sh restore_twx_conf
			;;	
			
		# Invalid command line parameters
		*)
			echo -e "ERROR: wrong params"
			;;
	esac

	echo -e "\nEND OF SCRIPT: transmission.cgi"
exit $?

