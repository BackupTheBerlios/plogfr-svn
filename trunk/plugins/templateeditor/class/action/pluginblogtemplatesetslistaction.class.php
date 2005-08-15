<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplatesetslistview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginBlogTemplateSetsListAction extends BlogOwnerAdminAction
	{
		
		function PluginBlogTemplateSetsListAction( $actionInfo, $request )
		{
			$this->BlogOwnerAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>