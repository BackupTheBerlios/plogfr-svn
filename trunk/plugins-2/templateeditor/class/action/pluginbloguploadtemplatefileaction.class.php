<?php

    include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplateslistview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplatesubfolderlistview.class.php" );

	/**
	 * shows a form with the current configuration
	 */
	class PluginBlogUploadTemplateFileAction extends BlogOwnerAdminAction
	{
        var $_templateId;
        var $_subFolderId;
        var $_files;
        		
		function PluginBlogUploadTemplateFileAction( $actionInfo, $request )
		{
			$this->BlogOwnerAdminAction( $actionInfo, $request );
		}

        function validate()
        {
        	// make sure that the user is uploading a file
            $this->_files = HttpVars::getFiles();
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_subFolderId = $this->_request->getValue( "subFolderId" );            

            // check if there's any file to upload
            if( count($this->_files) != 1 ) {
                if ( empty($this->_subFolderId) ) {
                    $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
                } else {
                    $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
                }
    			$this->_view->setErrorMessage( $this->_locale-tr("error_must_upload_file") );
                $this->setCommonData();                

                return false;
            }

            if( !$this->isValidExtension( $this->_files['resourceFile']['name'] ) ) {
                if ( empty($this->_subFolderId) ) {
                    $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
                } else {
                    $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
                } 
                $this->_view->setErrorMessage( $this->_locale->tr("templateeditor_error_templatefile_extension"));
                $this->setCommonData();

                return false;
            }               

            return true;
        }		
		
		function perform()
		{
        	// uploads the file and moves it to the correct folder
            $uploads  = new FileUploads( $this->_files );
            
            // make sure were it should go
        	$ts = new TemplateSetStorage();

            $blogId = $this->_blogInfo->getId();
            $destFolder = $ts->getTemplateFolder($this->_templateId, $blogId);        
            if ( !empty($this->_subFolderId) ) $destFolder = $destFolder . $this->_subFolderId . "/";
            
            // and move it there
            $processedUploads = $uploads->process( $destFolder );
            
            // check for the different error conditions we can have
            if( $processedUploads == FILE_UPLOADS_NOT_ENABLED ) {
                if ( empty($this->_subFolderId) ) {
                    $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
                } else {
                    $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
                }
    			$this->_view->setErrorMessage( $this->_locale->tr("error_uploads_disabled") );
                $this->setCommonData();  

                return false;
            }

            $fileResult = $processedUploads[0];
            if( $fileResult->getError()) {
                if ( empty($this->_subFolderId) ) {
                    $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
                } else {
                    $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
                }
    			$this->_view->setErrorMessage( $this->_locale->tr("error_adding_template_file") );
                $this->setCommonData();  

                return false;
            }            
            
            if ( empty($this->_subFolderId) ) {
                $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
            } else {
                $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
            }
            $this->_view->setSuccessMessage( $this->_locale->pr("template_file_added_ok", $this->_templateId));
			$this->setCommonData();
			
			return true;
		}

        function isValidExtension( $name )
        {
			$config =& Config::getConfig();
			$allowedExtension = $config->getValue( "plugin_templateeditor_allowedextension" );
			$allowedExtension = $allowedExtension . ",jpg,gif,png,bmp";
		    $extensionList = explode(",", $allowedExtension);            
            $fileExtension = array_pop(explode('.', $name));
            foreach ($extensionList as $extension) {
                if ( $fileExtension == trim($extension) ) {
                    return true;   
                }
            }
            return false;
        }		
	}
?>