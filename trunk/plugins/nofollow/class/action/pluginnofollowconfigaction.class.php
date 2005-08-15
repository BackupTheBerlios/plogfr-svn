<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/nofollow/class/view/pluginnofollowconfigview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginNoFollowConfigAction extends AdminAction
	{
		
		function PluginNoFollowConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginNoFollowConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>