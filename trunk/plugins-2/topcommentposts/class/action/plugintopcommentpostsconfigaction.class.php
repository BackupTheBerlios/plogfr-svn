<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/topcommentposts/class/view/plugintopcommentpostsconfigview.class.php" );	

	/**
	 * shows a form with the current configuration
	 */
	class PluginTopCommentPostsConfigAction extends AdminAction
	{
		
		function PluginTopCommentPostsConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginTopCommentPostsConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>