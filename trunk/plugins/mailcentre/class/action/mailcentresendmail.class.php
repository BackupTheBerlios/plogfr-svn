<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/view/mailcentresendmessageview.class.php" );
	
	class MailCentreSendMail extends SiteAdminAction
	{
		function perform()
		{
			$this->_view = new MailCentreSendMessageView( $this->_blogInfo );
			$this->setCommonData();
			
			return( true );
		}
	}
?>