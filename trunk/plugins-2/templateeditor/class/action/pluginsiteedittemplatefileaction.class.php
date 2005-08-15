<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginsiteedittemplatefileview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginsiteeditsubfoldertemplatefileview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginSiteEditTemplateFileAction extends SiteAdminAction
	{
        var $_templateId;
        var $_subFolderId;      
        var $_fileId;
        var $_backupId;
        		
		function PluginSiteEditTemplateFileAction( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_subFolderId = $this->_request->getValue( "subFolderId" );
            $this->_fileId = $this->_request->getValue( "fileId" );
            $this->_backupId = $this->_request->getValue( "backupId" );
            
            if ( empty($this->_subFolderId) ) {
                $this->_view = new PluginSiteEditTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_fileId, $this->_backupId );
            } else {
                $this->_view = new PluginSiteEditSubFolderTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_subFolderId, $this->_fileId, $this->_backupId );
            }
            
			$this->setCommonData();
			
			return true;
		}
	}
?>