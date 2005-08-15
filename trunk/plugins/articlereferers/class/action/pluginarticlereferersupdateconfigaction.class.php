<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/articlereferers/class/view/pluginarticlereferersconfigview.class.php" );
			
	/**
	 * updates the plugin configuration
	 */
	class PluginArticleReferersUpdateConfigAction extends AdminAction
	{
		var $_pluginEnabled;
		var $_sortByField;
		var $_maxComments;
		
		function PluginArticleReferersUpdateConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function validate()
		{
            $this->_pluginEnabled = $this->_request->getValue( "pluginEnabled" );
            $this->_pluginEnabled = ($this->_pluginEnabled != "" );	
            $this->_sortByField = $this->_request->getValue( "sortByField" );
            $this->_maxReferers = $this->_request->getValue( "maxReferers" );
            if( $this->_maxReferers < 0 || !ctype_digit($this->_maxReferers) ) {
                $this->_view = new PluginArticleReferersConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("articlereferers_error_maxreferers"));
                $this->setCommonData();

                return false;
            }        	                
			return true;
		}
		        
		function perform()
		{
            // update the plugin configurations to blog setting
			$blogSettings = $this->_blogInfo->getSettings();
            $blogSettings->setValue( "plugin_articlereferers_enabled", $this->_pluginEnabled );
            $blogSettings->setValue( "plugin_articlereferers_sortbyfield", $this->_sortByField );
            $blogSettings->setValue( "plugin_articlereferers_maxreferers", $this->_maxReferers );
            $this->_blogInfo->setSettings( $blogSettings ); 
		
			// save the blogs settings
			$blogs = new Blogs();
            if( !$blogs->updateBlog( $this->_blogInfo->getId(), $this->_blogInfo )) {
                $this->_view = new PluginArticleReferersConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
                $this->setCommonData();

                return false;
            }
			
			// if everything went ok...
            $this->_blogInfo->setSettings( $blogSettings );
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();
			
			$this->_view = new PluginArticleReferersConfigView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("articlereferers_settings_saved_ok"));
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			
            
            return true;		
		}
	}
?>