<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );		
    include_once( PLOG_CLASS_PATH."class/misc/glob.class.php" );

	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginSiteTemplatesListView extends AdminPluginTemplatedView
	{
        var $_templateId;

		function PluginSiteTemplatesListView( $blogInfo, $templateId )
		{
			$this->_templateId = $templateId;
    	    $this->AdminPluginTemplatedView( $blogInfo, "templateeditor", "sitetemplateslist" );
		}
		
		function render()
		{
			// get a list with all the global template sets
        	$ts = new TemplateSets();
            $globalTemplates = $ts->getGlobalTemplateSets();
            
            // Add rss & summary templateset to beginning of templatesets
            $rssTemplate =& new TemplateSet( "rss", TEMPLATE_SET_GLOBAL, 0);
            $summaryTemplate =& new TemplateSet( "summary", TEMPLATE_SET_GLOBAL, 0);
            array_unshift( $globalTemplates, $rssTemplate, $summaryTemplate );         

			// get a list with all the specific template files 
        	$ts = new TemplateSetStorage();
            
            $blogId = $this->_blogInfo->getId();
            $templateFolder = $ts->getTemplateFolder($this->_templateId);

			// Get template files according extension
            $templateFiles = $this->getTemplateFiles( $templateFolder );

            $this->setValue( "currentTemplate", $this->_templateId );
            $this->setValue( "templateSets", $globalTemplates );
            $this->setValue( "templateFiles", $templateFiles );
            
            $templateSubFolders = $this->getTemplateSubFolders( $templateFolder );
            $this->setValue( "templateSubFolders", $templateSubFolders );
            		
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

		function getTemplateSubFolders( $folder ) {
            $templateSubFolders = Array();
            $files = Glob::myGlob( $folder, "*" );
            foreach ($files as $file) {
                if ( File::isDir($file) ) {
                    $tmp['name'] = basename($file);
                    if ( $tmp['name'] != "backups" ) {
                        array_push ($templateSubFolders, $tmp);
                    }
                }
            }
            return $templateSubFolders;
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