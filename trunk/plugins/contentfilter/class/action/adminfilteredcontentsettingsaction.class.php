<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/view/adminfilteredcontentsettingsview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class AdminFilteredContentSettingsAction extends AdminAction
	{
		
		function AdminFilteredContentSettingsAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new AdminFilteredContentSettingsView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>