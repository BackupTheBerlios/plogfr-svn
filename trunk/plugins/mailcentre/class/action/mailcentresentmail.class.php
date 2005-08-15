<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/view/mailcentremessagelistview.class.php" );
	
	class MailCentreSentMail extends SiteAdminAction
	{
		
		function MailCentreSentMail( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
			$this->_view = new MailCentreMessageListView( $this->_blogInfo );
			$this->setCommonData();
			
			return( true );
		}
	}
?>