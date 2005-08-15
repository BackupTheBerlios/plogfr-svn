<?php
    include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesets.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );		
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplatesetslistview.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/file/myfile.class.php" );	

    /**
     * Removes global templates from disk.
     */
    class PluginBlogCopyTemplateSetAction extends BlogOwnerAdminAction
    {

    	var $_templateId;
    	var $_newTemplateId;
    	var $_type;

        function PluginBlogCopyTemplateSetAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

		function validate()
		{
            $this->_templateId = $this->_request->getValue( "templateId" );
            $this->_newTemplateId = $this->_request->getValue( "newTemplateId" );
            if( !$this->isValidTamplateSetName( $this->_newTemplateId ) ) {
                $this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("templateeditor_error_templateset_name"));
                $this->setCommonData();

                return false;
            }
            
            $this->_type = $this->_request->getValue( "type" );
            if( $this->_type != 1 && $this->_type != 2) {
                $this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("templateeditor_error_templateset_type"));
                $this->setCommonData();

                return false;
            }
            
            return true;
		}        

        function perform()
        {
			// get a list with all the global template sets
			if ( $this->_type == 1 ) {
            	$ts = new TemplateSets();
                $blogTemplateSets = $ts->getBlogTemplateSets( $this->_blogInfo->getId(), false );
                
                foreach ($blogTemplateSets as $template) {
                    if ( $template->getName() == $this->_newTemplateId ) {
                    	$this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
                    	$this->_view->setErrorMessage( $this->_locale->tr("error_duplicate_templateset_name"));
                        $this->setCommonData();
                        return false;
                    }
                }
    
            	$ts = new TemplateSetStorage();
                $blogId = $this->_blogInfo->getId();
                $sourceTemplateFolder = $ts->getTemplateFolder($this->_templateId);
                $newTemplateFolder = $ts->getBlogBaseTemplateFolder($blogId) . $this->_newTemplateId;
                
                if ( MyFile::copyDir($sourceTemplateFolder, $newTemplateFolder) ) {
                    $ts->addTemplate($this->_newTemplateId, $blogId);
                } else {
                    File::deleteDir($newTemplateFolder);
                    $this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
                    $this->_view->setErrorMessage( $this->_locale->tr("error_copying_templateset"));
                    $this->setCommonData();
                    return false;            
                }
            } else {
            	$ts = new TemplateSets();
                $blogTemplateSets = $ts->getBlogTemplateSets( $this->_blogInfo->getId(), false );
                
                foreach ($blogTemplateSets as $template) {
                    if ( $template->getName() == $this->_newTemplateId ) {
                    	$this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
                    	$this->_view->setErrorMessage( $this->_locale->tr("error_duplicate_templateset_name"));
                        $this->setCommonData();
                        return false;
                    }
                }
    
            	$ts = new TemplateSetStorage();
                $blogId = $this->_blogInfo->getId();
                $sourceTemplateFolder = $ts->getTemplateFolder($this->_templateId, $blogId);
                $newTemplateFolder = $ts->getBlogBaseTemplateFolder($blogId) . $this->_newTemplateId;
                
                if ( MyFile::copyDir($sourceTemplateFolder, $newTemplateFolder) ) {
                    $ts->addTemplate($this->_newTemplateId, $blogId);
                } else {
                    File::deleteDir($newTemplateFolder);
                    $this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
                    $this->_view->setErrorMessage( $this->_locale->tr("error_copying_templateset"));
                    $this->setCommonData();
                    return false;                
                }                
            }

			// if everything went ok...
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();
            
			$this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
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
               return true;
            } else {
               return false;
            }
        }
    }
?>
