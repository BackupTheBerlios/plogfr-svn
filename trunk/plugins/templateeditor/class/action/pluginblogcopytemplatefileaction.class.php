<?php
    include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );		
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplateslistview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplatesubfolderlistview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/file/myfile.class.php" );	

    /**
     * Removes global templates from disk.
     */
    class PluginBlogCopyTemplateFileAction extends BlogOwnerAdminAction
    {

    	var $_templateId;
        var $_subFolderId;    	
    	var $_fileId;
    	var $_newFileId;

        function PluginBlogCopyTemplateFileAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

		function validate()
		{
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_subFolderId = $this->_request->getValue( "subFolderId" );
            $this->_fileId = $this->_request->getValue( "fileId" );
            $this->_newFileId = $this->_request->getValue( "newFileId" );
            if( !$this->isValidTamplateFileName( $this->_newFileId ) ) {
                if ( empty($this->_subFolderId) ) {
                    $view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
                } else {
                    $view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
                } 
                $this->_view->setErrorMessage( $this->_locale->tr("templateeditor_error_templatefile_name"));
                $this->setCommonData();

                return false;
            }
            if( !$this->isValidExtension( $this->_newFileId ) ) {
                if ( empty($this->_subFolderId) ) {
                    $view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
                } else {
                    $view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
                }
                $this->_view->setErrorMessage( $this->_locale->tr("templateeditor_error_templatefile_extension"));
                $this->setCommonData();

                return false;
            }            
			return true;
		}        

        function perform()
        {
        	$ts = new TemplateSetStorage();
            $blogId = $this->_blogInfo->getId();
            $templateFolder = $ts->getTemplateFolder($this->_templateId, $blogId);
            if ( !empty($this->_subFolderId) ) $templateFolder = $templateFolder . $this->_subFolderId . "/";

			// Get template files according extension
            $templateFiles = $this->getTemplateFiles( $templateFolder );            
            
            foreach ($templateFiles as $file) {
                if ( $file['name'] == $this->_newFileId ) {
                    if ( empty($this->_subFolderId) ) {
                        $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
                    } else {
                        $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
                    }
                	$this->_view->setErrorMessage( $this->_locale->tr("error_duplicate_templatefile_name"));
                    $this->setCommonData();
                    return false;
                }
            }

            $sourceFile = $templateFolder . $this->_fileId;
            $newFile = $templateFolder . $this->_newFileId;
            
            if ( !File::copy($sourceFile, $newFile) ) {
                if ( empty($this->_subFolderId) ) {
                    $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
                } else {
                    $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
                }
                $this->_view->setErrorMessage( $this->_locale->tr("error_copying_templatefile"));
                $this->setCommonData();
                return false;                
            }

			// if everything went ok...
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();
            
            if ( empty($this->_subFolderId) ) {
                $this->_view = new PluginBlogTemplatesListView( $this->_blogInfo, $this->_templateId );
            } else {
                $this->_view = new PluginBlogTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
            }
			$this->_view->setSuccessMessage( $this->_locale->tr("templateeditor_templatefile_copyed_ok"));
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			
            
            return true;
        }

        function isValidTamplateFileName( $name )
        {
		    $pattern = '/^[a-zA-Z0-9\._-]*$/';
            if (preg_match($pattern, $name) ) {
               return true;
            } else {
               return false;
            }
        }
        
        function isValidExtension( $name )
        {
			$config =& Config::getConfig();
			$allowedExtension = $config->getValue( "plugin_templateeditor_allowedextension" );
		    $extensionList = explode(",", $allowedExtension);            
            $fileExtension = array_pop(explode('.', $name));
            foreach ($extensionList as $extension) {
                if ( $fileExtension == trim($extension) ) {
                    return true;   
                }
            }
            return false;
        }

		function getTemplateFiles( $folder ) {
			$config =& Config::getConfig();
			$allowedExtension = $config->getValue( "plugin_templateeditor_allowedextension" ); 
			if ( $allowedExtension == "" ) $allowedExtension = "css,inc,template,txt";
		    $extensionList = explode(",", $allowedExtension);
            $templateFiles = Array();
		    for ($i = 0; $i < count($extensionList); $i++) {
		        $extension = "*." . trim($extensionList[$i]);
                $files = Glob::myGlob( $folder, $extension );
                foreach ($files as $file) {
                    $tmp['name'] = basename($file);
                    $tmp['size'] = filesize($file);
                    array_push ($templateFiles, $tmp);
                }
            }
            return $templateFiles;
        }	        
    }
?>
