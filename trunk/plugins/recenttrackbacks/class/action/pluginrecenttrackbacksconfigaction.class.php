<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/recenttrackbacks/class/view/pluginrecenttrackbacksconfigview.class.php" );		

	/**
	 * shows a form with the current configuration
	 */
	class PluginRecentTrackbacksConfigAction extends AdminAction
	{
		
		function PluginRecentTrackbacksConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginRecentTrackbacksConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>