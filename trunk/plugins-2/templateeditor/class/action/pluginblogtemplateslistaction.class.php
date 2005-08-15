<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplateslistview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplatesubfolderlistview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginBlogTemplatesListAction extends BlogOwnerAdminAction
	{
        var $_templateId;
        var $_subFolderId;
        		
		function PluginBlogTemplatesListAction( $actionInfo, $request )
		{
			$this->BlogOwnerAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_subFolderId = $this->_request->getValue( "subFolderId" );     
            
            if ( empty($this->_subFolderId) ) {
                $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
            } else {
                $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
            }
            
			$this->setCommonData();
			
			return true;
		}
	}
?>