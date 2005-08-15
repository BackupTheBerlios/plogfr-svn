<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moblog/class/view/adminmoblogbatchpluginsettingsview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/moblog/class/moblog/moblogconstants.properties.php" );

	class AdminMoblogBatchPluginUpdateSettingsAction extends SiteAdminAction
	{
	
	   var $_pluginEnabled;

		function AdminMoblogBatchPluginUpdateSettingsAction( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );
		}
	
		function validate()
		{
		    $this->_mailServer = $this->_request->getValue( "mailServer" );
		    $this->_port = $this->_request->getValue( "port" );
			$this->_userName = $this->_request->getValue( "userName" );
			$this->_password = $this->_request->getValue( "password" );
			$this->_pseudoBatch = $this->_request->getValue( "pseudoBatch" );
			return true;
		}

		function perform()
		{		
            // update the plugin configurations to blog setting
			$config =& Config::getConfig();
            $config->setValue( "plugin_moblog_mailserver", $this->_mailServer );
            $config->setValue( "plugin_moblog_port", $this->_port );
            $config->setValue( "plugin_moblog_username", $this->_userName );
            $config->setValue( "plugin_moblog_password", $this->_password );
            $config->setValue( "plugin_moblog_pseudobatch", $this->_pseudoBatch );
		
            if( !$config->save() ) {
                $this->_view = new AdminMoblogBatchPluginSettingsView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
                $this->setCommonData();

                return false;
            }
			
			// if everything went ok...
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();

			$this->_view = new AdminMoblogBatchPluginSettingsView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("moblog_settings_saved_ok"));
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());				
            
            return true;
		}
	}
?>