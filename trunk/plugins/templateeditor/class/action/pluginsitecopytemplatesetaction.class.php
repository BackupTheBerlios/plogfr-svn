<?php
	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesets.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );		
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginsitetemplatesetslistview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/file/myfile.class.php" );	

    /**
     * Removes global templates from disk.
     */
    class PluginSiteCopyTemplateSetAction extends SiteAdminAction
    {

    	var $_templateId;
    	var $_newTemplateId;

        function PluginSiteCopyTemplateSetAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        }

		function validate()
		{
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_newTemplateId = $this->_request->getValue( "newTemplateId" );
            if( !$this->isValidTamplateSetName( $this->_newTemplateId ) ) {
                $this->_view = new PluginSiteTemplateSetsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("templateeditor_error_templateset_name"));
                $this->setCommonData();

                return false;
            }        	                
			return true;
		}        

        function perform()
        {
			// get a list with all the global template sets
        	$ts = new TemplateSets();
            $globalTemplates = $ts->getGlobalTemplateSets();
            
            foreach ($globalTemplates as $template) {
                if ( $template->getName() == $this->_newTemplateId ) {
                	$this->_view = new PluginSiteTemplateSetsListView( $this->_blogInfo );
                	$this->_view->setErrorMessage( $this->_locale->tr("error_duplicate_templateset_name"));
                    $this->setCommonData();
                    return false;
                }
            }

        	$ts = new TemplateSetStorage();
            $blogId = $this->_blogInfo->getId();
            $sourceTemplateFolder = $ts->getTemplateFolder($this->_templateId);
            $newTemplateFolder = $ts->getBaseTemplateFolder() . "/" . $this->_newTemplateId;
            
            if ( MyFile::copyDir($sourceTemplateFolder, $newTemplateFolder) ) {
                $ts->addTemplate($this->_newTemplateId);
            } else {
                File::deleteDir($newTemplateFolder);
                $this->_view = new PluginSiteTemplateSetsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_copying_templateset"));
                $this->setCommonData();
                return false;                
            }

			// if everything went ok...
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();
            
			$this->_view = new PluginSiteTemplateSetsListView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("templateeditor_templateset_copyed_ok"));
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			
            
            return true;
        }

        function isValidTamplateSetName( $name )
        {
		    $pattern = '/^[a-zA-Z0-9_-]*$/';
            if (preg_match($pattern, $name) ) {
            	if ( $name != "admin" && $name != "rss" && $name != "summary" && $name != "wizard" ) {
            		return true;
            	} else {
                	return false;
                }
            } else {
                return false;
            }
        }
    }
?>
