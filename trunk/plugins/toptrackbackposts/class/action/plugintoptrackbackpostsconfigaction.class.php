<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/toptrackbackposts/class/view/plugintoptrackbackpostsconfigview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginTopTrackbackPostsConfigAction extends AdminAction
	{
		
		function PluginTopTrackbackPostsConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginTopTrackbackPostsConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>