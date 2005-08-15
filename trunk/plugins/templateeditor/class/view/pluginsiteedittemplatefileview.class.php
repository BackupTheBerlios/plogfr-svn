<?php
	
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );		
    include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/file/myfile.class.php" );
    
	/**
	 * implements the main view of the feed reader plugin
	 */
	class PluginSiteEditTemplateFileView extends AdminPluginTemplatedView
	{
        var $_templateId;
        var $_fileId;
        var $_backupId;

		function PluginSiteEditTemplateFileView( $blogInfo, $templateId, $fileId, $backupId )
		{
			$this->AdminPluginTemplatedView( $blogInfo, "templateeditor", "siteedittemplatefile" );
			
			$this->_templateId = $templateId;
			$this->_fileId = $fileId;
			$this->_backupId = $backupId;
		}
		
		function render()
		{
            $config =& Config::getConfig();
            $maxBackupFiles = $config->getValue( "plugin_templateeditor_maxbackupfiles" );
            if ($maxBackupFiles == "") $maxBackupFiles = 5;

			// get a list with all the specific template files 
        	$ts = new TemplateSetStorage();
            
            $blogId = $this->_blogInfo->getId();
            $templateFolder = $ts->getTemplateFolder($this->_templateId);
            $backupFolder = $templateFolder . "backups/";
			if( !File::exists( $backupFolder )) {
				File::createDir( $backupFolder );
			}
           
            if ( !$this->_backupId ) {
                $filename = $templateFolder . $this->_fileId;
            } else {
                $filename = $backupFolder . $this->_fileId . "_" . $this->_backupId;
            }
            $backupFilePattern = $this->_fileId . "_*";

            $bakFiles = Glob::myGlob( $backupFolder, $backupFilePattern );
            sort($bakFiles);
            $backupFiles = Array();
            $backupFileCount = 0;
            for ($i = count($bakFiles) - 1; $i >= 0; $i--) {
                $bakFile = $bakFiles[$i];
                if ( $backupFileCount < $maxBackupFiles ) {
                    $bakElements = explode ( "_" ,$bakFile);
                    $bakId = $bakElements[count($bakElements)-1];
                    $bakTime = strftime ( "%Y/%m/%d - %H:%M:%S", $bakId );
                    $file['time'] = $bakTime;
                    $file['backupId'] = basename($bakId);
                    array_push ($backupFiles, $file);
                    $backupFileCount++;
                } else {
                    File::delete($bakFile);
                }
            }

        	$file = new MyFile($filename);
            $fileContent = $file->readFileContent();
            
            $this->setValue( "backupId", $this->_backupId );
            $this->setValue( "backupFiles", $backupFiles );
            $this->setValue( "currentTemplate", $this->_templateId );
            $this->setValue( "currentFile", $this->_fileId );
            $this->setValue( "fileContent", $fileContent );
            		
			parent::render();
		}
	}
?>