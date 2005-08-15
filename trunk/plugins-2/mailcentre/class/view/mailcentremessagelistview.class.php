<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/dao/mailmessages.class.php" );
	
	class MailCentreMessageListView extends AdminPluginTemplatedView
	{		
		function MailCentreMessageListView( $blogInfo )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "mailcentre", "messagelist" );
		}
		
		function render()
		{
			// load all the mail messages sent so far
			$messages = new MailMessages();
			$allMessages = $messages->getMessages();
			
			$this->setValue( "messages", $allMessages );
			
			parent::render();
		}
	}
?>