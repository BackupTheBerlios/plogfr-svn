<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogedittemplatefileview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogeditsubfoldertemplatefileview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplateslistview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplatesubfolderlistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );		
    include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/file/myfile.class.php" );	
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );	

	/**
	 * shows a form with the current configuration
	 */
	class PluginBlogUpdateTemplateFileAction extends BlogOwnerAdminAction
	{
        var $_fileContent;
        var $_templateId;
        var $_subFolderId;     
        var $_fileId;
        		
		function PluginBlogUpdateTemplateFileAction( $actionInfo, $request )
		{
			$this->BlogOwnerAdminAction( $actionInfo, $request );
			
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_subFolderId = $this->_request->getValue( "subFolderId" );
            $this->_fileId = $this->_request->getValue( "fileId" );
            $this->_backupId = $this->_request->getValue( "backupId" );

			$this->registerFieldValidator( "fileContent", new StringValidator());
			$this->registerFieldValidator( "templateId", new StringValidator());
			$this->registerField( "subFolderId" );
			$this->registerFieldValidator( "fileId", new StringValidator());
			$this->registerField( "backupId" );

            if ( empty($this->_subFolderId) ) {
                $view = new PluginBlogEditTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_fileId, $this->_backupId );
            } else {
                $view = new PluginBlogEditSubFolderTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_subFolderId, $this->_fileId, $this->_backupId );
            }
        	$view->setErrorMessage( $this->_locale->tr("error_updating_template_file"));
        	$this->setValidationErrorView( $view );
		}
		
		function perform()
		{
			$this->_fileContent = $this->_request->getValue( "fileContent" );
			
			// get a list with all the specific template files 
        	$ts = new TemplateSetStorage();
            
            $blogId = $this->_blogInfo->getId();
            $templateFolder = $ts->getTemplateFolder($this->_templateId, $blogId);
            if ( !empty($this->_subFolderId) ) $templateFolder = $templateFolder . $this->_subFolderId . "/";
            
            $backupFolder = $templateFolder . "backups/";
			if( !File::exists( $backupFolder )) {
				File::createDir( $backupFolder );
			}
            
            $fileName = $templateFolder . $this->_fileId;
            $backupFileName = $backupFolder . $this->_fileId . "_" . time();
            if( !File::copy($fileName,$backupFileName) ) {
                if ( empty($this->_subFolderId) ) {
                    $this->_view = new PluginBlogEditTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_fileId, $this->_backupId );
                } else {
                    $this->_view = new PluginBlogEditSubFolderTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_subFolderId, $this->_fileId, $this->_backupId );
                }
            	$this->_view->setErrorMessage( $this->_locale->tr("error_backup_template_file"));
                $this->setCommonData();
                return false;            	
            }
            
        	$file = new MyFile($fileName);
        	if( !$file->isWritable() ) {
                if ( empty($this->_subFolderId) ) {
                    $this->_view = new PluginBlogEditTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_fileId, $this->_backupId );
                } else {
                    $this->_view = new PluginBlogEditSubFolderTemplateFileView( $this->_blogInfo, $this->_templateId, $this->_subFolderId, $this->_fileId, $this->_backupId );
                }
            	$this->_view->setErrorMessage( $this->_locale->tr("error_updating_template_file"));
                $this->setCommonData();
                return false;              
            }
            $fileContent = $file->writeFileContent( $this->_fileContent );

			// if everything went ok...
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();

            if ( empty($this->_subFolderId) ) {
                $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
            } else {
                $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
            }            
			$this->_view->setSuccessMessage( $this->_locale->tr("templateeditor_file_saved_ok"));
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			
            
            return true;
		}
	}
?>