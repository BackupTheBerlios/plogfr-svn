<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginsitetemplatesetslistview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginSiteTemplateSetsListAction extends SiteAdminAction
	{
		
		function PluginSiteTemplateSetsListAction( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginSiteTemplateSetsListView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>