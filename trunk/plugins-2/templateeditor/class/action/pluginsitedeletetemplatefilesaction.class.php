<?php
	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginsitetemplateslistview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginsitetemplatesubfolderlistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );

    /**
     * Removes global templates from disk.
     */
    class PluginSiteDeleteTemplateFilesAction extends SiteAdminAction
    {
        var $_templateId;
        var $_subFolderId;
    	var $_fileIds;
    	var $_op;

        function PluginSiteDeleteTemplateFilesAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );

			$this->_templateId = $this->_request->getValue( "templateId" );
			$this->_subFolderId = $this->_request->getValue( "subFolderId" );
			
			// data validation stuff
        	$this->_op = $actionInfo->getActionParamValue();
        	if( $this->_op == "siteDeleteTemplateFile" )
        		$this->registerFieldValidator( "fileId", new StringValidator());
        	else
        		$this->registerFieldValidator( "fileIds", new ArrayValidator());
            if ( empty($this->_subFolderId) ) {
                $view = new PluginSiteTemplatesListView( $this->_blogInfo, $this->_templateId );
            } else {
                $view = new PluginSiteTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
            }        	
        	$view->setErrorMessage( $this->_locale->tr("error_no_files_selected"));
        	$this->setValidationErrorView( $view );
        }

        function perform()
        {
        	if( $this->_op == "siteDeleteTemplateFile" ) {
        		$fileId = $this->_request->getValue( "fileId" );
        		$this->_fileIds = Array();
        		$this->_fileIds[] = $fileId;
        	}
        	else
        		$this->_fileIds = $this->_request->getValue( "fileIds" );

        	// carry out the
        	$this->_deleteFiles();
        }

        function _deleteFiles()
        {
        	$ts = new TemplateSetStorage();

        	$errorMessage = "";
        	$successMessage = "";
        	$totalOk = 0;

        	$ts = new TemplateSetStorage();
            
            $blogId = $this->_blogInfo->getId();
            $templateFolder = $ts->getTemplateFolder($this->_templateId);
            if ( !empty($this->_subFolderId) ) $templateFolder = $templateFolder . $this->_subFolderId . "/";

            foreach( $this->_fileIds as $fileId ) {
                $filename = $templateFolder . $fileId;
           		// if it's not the default, then try to really remove it from disk
				if( !File::delete( $filename ))
					$errorMessage .= $this->_locale->pr("error_removing_template_file", $fileId )."<br/>";
				else {
					$totalOk++;
					if( $totalOk < 2 )
						$successMessage = $this->_locale->pr("template_file_removed_ok", $fileId);
					else
						$successMessage = $this->_locale->pr( "template_files_removed_ok", $totalOk );
				}
            }

            // create the view and show some feedback
            if ( empty($this->_subFolderId) ) {
                $this->_view = new PluginSiteTemplatesListView( $this->_blogInfo, $this->_templateId );
            } else {
                $this->_view = new PluginSiteTemplateSubFolderListView( $this->_blogInfo, $this->_templateId, $this->_subFolderId );
            }
			if( $errorMessage != "" ) $this->_view->setErrorMessage( $errorMessage );
			if( $successMessage != "" ) $this->_view->setSuccessMessage( $successMessage );
            $this->setCommonData();

            return true;
        }
    }
?>
