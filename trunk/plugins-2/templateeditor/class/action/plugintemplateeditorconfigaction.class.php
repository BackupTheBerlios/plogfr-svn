<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/plugintemplateeditorconfigview.class.php" );	

	/**
	 * shows a form with the current configuration
	 */
	class PluginTemplateEditorConfigAction extends SiteAdminAction
	{
		
		function PluginTemplateEditorConfigAction( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_view = new PluginTemplateEditorConfigView( $this->_blogInfo );
			
			$this->setCommonData();
			
			return true;
		}
	}
?>