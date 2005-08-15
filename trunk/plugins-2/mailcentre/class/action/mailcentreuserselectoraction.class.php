<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/view/mailcentreuserselectorview.class.php" );
		
	class MailCentreUserSelectorAction extends SiteAdminAction
	{
		
		function MailCentreUserSelectorAction( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );			
		}
		
		function perform()
		{
			$this->_view = new MailCentreUserSelectorView( $this->_blogInfo );
			$this->setCommonData();
			
			return( true );
		}
	}
?>