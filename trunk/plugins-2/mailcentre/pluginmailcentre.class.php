<?php

	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	
	class PluginMailCentre extends PluginBase
	{
	
		function PluginMailCentre()
		{
			$this->PluginBase();		
		
			$this->id = "mailcentre";
			$this->desc = "Allows site administrators to send emails to users";
			$this->author = "The pLog Team";
			$this->locale = Array();				
			
			// register our menu entries
			$this->addMenuEntry( "/menu/adminSettings", "MailCentre", "", "" );	
			$this->addMenuEntry( "/menu/adminSettings/MailCentre", "composeMessage", "?op=mailcentreSendMail" );
			$this->addMenuEntry( "/menu/adminSettings/MailCentre", "sentMail", "?op=mailcentreSentMail" );
			
			// register a few actions
			$this->registerAdminAction( "mailcentreSendMail", "MailCentreSendMail" );
			$this->registerAdminAction( "mailcentreSentMail", "MailCentreSentmail" );			
			$this->registerAdminAction( "mailcentreSendMessage", "MailCentreSendMessage" );
			$this->registerAdminAction( "mailcentreUserSelector", "MailCentreUserSelectorAction" );	
			$this->registerAdminAction( "mailcentreShowMessage", "MailCentreViewSentMail" );
			$this->registerAdminAction( "mailcentreDeleteMessage", "MailCentreDeleteSentMailAction" );
			$this->registerAdminAction( "mailcentreDeleteMessages", "MailCentreDeleteSentMailAction" );			
			
			// and check if the database tables are there
			$this->_checkTables();			
		}
		
		/**
		 * @private
		 */
		function _checkTables()
		{
			// create the table to keep track of the voters, so that people cannot vote
			// more than once
			$fields = "
			      id I(10) NOTNULL PRIMARY AUTOINCREMENT,
			      recipients TEXT NOTNULL DEFAULT '',
			      recipients_cc TEXT NOTNULL DEFAULT '',
			      recipients_bcc TEXT NOTNULL DEFAULT '',
			      subject C(255) NOTNULL DEFAULT '',
			      body XL NOTNULL DEFAULT '',
				  date T(14) DEFDATE
				  ";
				  
			$db =& Db::getDb();				  
			$dbPrefix = Db::getPrefix();
			$tableName = $dbPrefix."mailcentre_sent";

			// create the data dictionary and create the table if necessary
            $dict = NewDataDictionary( $db );
            $sqlArray = $dict->ChangeTableSQL( $tableName, $fields );
            $result = $dict->ExecuteSQLArray( $sqlArray );
            
            if( !$result )
            	die( "There was an error creating the plugin tables!" );			
			
            return true;		
		}			
	}
?>