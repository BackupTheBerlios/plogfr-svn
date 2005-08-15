<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/authimage/class/view/pluginauthimageconfigview.class.php" );		

		
	/**
	 * updates the plugin configuration
	 */
	class PluginAuthImageUpdateConfigAction extends AdminAction
	{
		var $_pluginEnabled;
		var $_length;
		var $_key;
		var $_expiredTime;
		var $_default;
		
		function PluginAuthImageUpdateConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function validate()
		{
            $this->_pluginEnabled = $this->_request->getValue( "pluginEnabled" );
            $this->_pluginEnabled = ($this->_pluginEnabled != "" );
            $this->_length = $this->_request->getValue( "length" );
            if( $this->_length <= 0 || $this->_length > 6 || !ctype_digit($this->_length)) {
                $this->_view = new PluginAuthImageConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("authimage_error_length"));
                $this->setCommonData();

                return false;                
            }
            $this->_key = $this->_request->getValue( "key" );
            if( $this->_key == "" ) {
                $this->_view = new PluginAuthImageConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("authimage_error_key"));
                $this->setCommonData();

                return false;                
            }
            $this->_expiredTime = $this->_request->getValue( "expiredTime" );
            if( $this->_expiredTime < 0 || $this->_expiredTime > 86400 || !ctype_digit($this->_expiredTime) ) {
                $this->_view = new PluginAuthImageConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("authimage_error_expiredtime"));
                $this->setCommonData();

                return false;                
            }                                    
            $this->_default = $this->_request->getValue( "default" );

			return true;
		}
		        
		function perform()
		{
            // // update the plugin configurations to blog setting
			$blogSettings = $this->_blogInfo->getSettings();
            $blogSettings->setValue( "plugin_authimage_enabled", $this->_pluginEnabled );
            $blogSettings->setValue( "plugin_authimage_length", $this->_length );
            $blogSettings->setValue( "plugin_authimage_key", $this->_key );
            $blogSettings->setValue( "plugin_authimage_expiredtime", $this->_expiredTime );
            $blogSettings->setValue( "plugin_authimage_default", $this->_default );
            $this->_blogInfo->setSettings( $blogSettings ); 
		
			// save the blogs settings
			$blogs = new Blogs();
            if( !$blogs->updateBlog( $this->_blogInfo->getId(), $this->_blogInfo )) {
                $this->_view = new PluginAuthImageConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
                $this->setCommonData();

                return false;
            }
			
			// if everything went ok...
            $this->_blogInfo->setSettings( $blogSettings );
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();
			
			$this->_view = new PluginAuthImageConfigView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("authimage_settings_saved_ok"));
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			
            
            return true;		
		}
	}
?>