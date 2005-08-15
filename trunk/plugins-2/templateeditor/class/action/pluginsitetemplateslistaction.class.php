<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginsitetemplateslistview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginsitetemplatesubfolderlistview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginSiteTemplatesListAction extends SiteAdminAction
	{
        var $_templateId;
        var $_subFolderId;
        		
		function PluginSiteTemplatesListAction( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_subFolderId = $this->_request->getValue( "subFolderId" );
            
            if ( empty($this->_subFolderId) ) {
                $this->_view = new PluginSiteTemplatesListView( $this->_blogInfo, $this->_templateId );
            } else {
                $this->_view = new PluginSiteTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
            }
            
			$this->setCommonData();
			
			return true;
		}
	}
?>