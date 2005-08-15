<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/topcommentvisitors/class/view/plugintopcommentvisitorsconfigview.class.php" );		

	/**
	 * shows a form with the current configuration
	 */
	class PluginTopCommentVisitorsConfigAction extends AdminAction
	{
		
		function PluginTopCommentVisitorsConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginTopCommentVisitorsConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>