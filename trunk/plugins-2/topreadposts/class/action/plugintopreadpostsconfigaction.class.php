<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/topreadposts/class/view/plugintopreadpostsconfigview.class.php" );	

	/**
	 * shows a form with the current configuration
	 */
	class PluginTopReadPostsConfigAction extends AdminAction
	{
		
		function PluginTopReadPostsConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginTopReadPostsConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>