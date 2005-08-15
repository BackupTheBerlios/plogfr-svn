<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/articlereferers/class/view/pluginarticlereferersconfigview.class.php" );	

	/**
	 * shows a form with the current configuration
	 */
	class PluginArticleReferersConfigAction extends AdminAction
	{
		
		function PluginArticleReferersConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginArticleReferersConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>