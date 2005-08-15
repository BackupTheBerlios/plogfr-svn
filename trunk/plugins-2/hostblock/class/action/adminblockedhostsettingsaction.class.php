<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/hostblock/class/view/adminblockedhostsettingsview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class AdminBlockedHostSettingsAction extends AdminAction
	{
		
		function AdminBlockedHostSettingsAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new AdminBlockedHostSettingsView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>