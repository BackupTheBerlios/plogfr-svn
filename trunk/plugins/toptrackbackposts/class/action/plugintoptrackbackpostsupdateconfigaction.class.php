<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminplugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/toptrackbackposts/class/view/plugintoptrackbackpostsconfigview.class.php" );
		
	/**
	 * updates the plugin configuration
	 */
	class PluginTopTrackbackPostsUpdateConfigAction extends AdminAction
	{
		var $_pluginEnabled;
		var $_maxPosts;
		
		function PluginRTopTrackbackPostsUpdateConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function validate()
		{
            $this->_pluginEnabled = $this->_request->getValue( "pluginEnabled" );
            $this->_pluginEnabled = ($this->_pluginEnabled != "" );			
            $this->_maxPosts = $this->_request->getValue( "maxPosts" );
            if( $this->_maxPosts <= 0 || !ctype_digit($this->_maxPosts) ) {
                $this->_view = new PluginTopTrackbackPostsConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("toptrackbackposts_error_maxposts"));
                $this->setCommonData();

                return false;                  
            }        	                
			
			return true;
		}
		        
		function perform()
		{
            // // update the plugin configurations to blog setting
			$blogSettings = $this->_blogInfo->getSettings();
            $blogSettings->setValue( "plugin_toptrackbackposts_enabled", $this->_pluginEnabled );
            $blogSettings->setValue( "plugin_toptrackbackposts_maxposts", $this->_maxPosts );
            $this->_blogInfo->setSettings( $blogSettings ); 
		
			// save the blogs settings
			$blogs = new Blogs();
            if( !$blogs->updateBlog( $this->_blogInfo->getId(), $this->_blogInfo )) {
                $this->_view = new PluginTopTrackbackPostsConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
                $this->setCommonData();

                return false;                  
            }
			
			// if everything went ok...
            $this->_blogInfo->setSettings( $blogSettings );
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();

			$this->_view = new PluginTopTrackbackPostsConfigView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("toptrackbackposts_settings_saved_ok"));
			$this->setCommonData();	
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());						
            
            return true;		
		}
	}
?>