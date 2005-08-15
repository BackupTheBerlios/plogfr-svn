<?php
	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/archive/archive.php" );

    /**
     * Removes global templates from disk.
     */
    class PluginSiteArchiveTemplateSetAction extends SiteAdminAction
    {

    	var $_templateIds;

        function PluginSiteArchiveTemplateSetAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	$this->_templateId = $this->_request->getValue( "templateId" );
        	
        	$ts = new TemplateSetStorage();
            $blogId = $this->_blogInfo->getId();
            $baseTemplateFolder = $ts->getBaseTemplateFolder();
            
			$templateArchive = new zip_file($this->_templateId.".zip");
			$templateArchive->set_options(array( 'basedir' => $baseTemplateFolder,
											     'overwrite' => 1,
											     'inmemory' => 1 ));
			$templateArchive->add_files($this->_templateId);
			$templateArchive->create_archive();
			$templateArchive->download_file();
            
            return true;
        }
    }
?>