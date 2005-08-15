<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogedittemplatefileview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogeditsubfoldertemplatefileview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginBlogEditTemplateFileAction extends BlogOwnerAdminAction
	{
        var $_templateId;
        var $_subFolderId;       
        var $_fileId;
        var $_backupId;
        		
		function PluginBlogEditTemplateFileAction( $actionInfo, $request )
		{
			$this->BlogOwnerAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_subFolderId = $this->_request->getValue( "subFolderId" );
            $this->_fileId = $this->_request->getValue( "fileId" );
            $this->_backupId = $this->_request->getValue( "backupId" );
            
            $this->_view = new PluginBlogEditTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_fileId, $this->_backupId );
            if ( empty($this->_subFolderId) ) {
                $this->_view = new PluginBlogEditTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_fileId, $this->_backupId );
            } else {
                $this->_view = new PluginBlogEditSubFolderTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_subFolderId, $this->_fileId, $this->_backupId );
            }
            
			$this->setCommonData();
			
			return true;
		}
	}
?>