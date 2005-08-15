<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );		
    include_once( PLOG_CLASS_PATH."class/misc/glob.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginBlogTemplateSubFolderListView extends AdminPluginTemplatedView
	{
        var $_templateId;
        var $_subFolderId;

		function PluginBlogTemplateSubFolderListView( $blogInfo, $templateId, $subFolderId )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "templateeditor", "blogtemplatesubfolderlist" );
			$this->_templateId = $templateId;
			$this->_subFolderId = $subFolderId;			
		}
		
		function render()
		{
			// get a list with all the global template sets
        	$ts = new TemplateSets();
            $blogTemplateSets = $ts->getBlogTemplateSets( $this->_blogInfo->getId(), false );

			// get a list with all the specific template files 
        	$ts = new TemplateSetStorage();
            
            $blogId = $this->_blogInfo->getId();
            $templateFolder = $ts->getTemplateFolder($this->_templateId, $blogId);
            $templateFolder = $templateFolder . $this->_subFolderId;

			// Get template files according extension
            $templateFiles = $this->getTemplateFiles( $templateFolder );

            $this->setValue( "currentTemplate", $this->_templateId );
            $this->setValue( "currentSubFolder", $this->_subFolderId );
            $this->setValue( "templateSets", $blogTemplateSets );
            $this->setValue( "templateFiles", $templateFiles );

			parent::render();
		}

		function getTemplateFiles( $folder ) {
            $templateFiles = Array();
            $files = Glob::myGlob( $folder, "*" );
            foreach ($files as $file) {
                if ( !File::isDir($file) ) {
                    $tmp['name'] = basename($file);
                    $tmp['size'] = filesize($file);
                    $tmp['isEditable'] = $this->isValidExtension( $tmp['name'] );
                    $tmp['isImage'] = $this->isImage( $tmp['name'] );
                    $tmp['url'] = $file;
                    array_push ($templateFiles, $tmp);
                }
            }
            return $templateFiles;
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

        function isImage( $name )
        {
		    $extensionList = explode(",", "jpg,gif,png,bmp");            
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