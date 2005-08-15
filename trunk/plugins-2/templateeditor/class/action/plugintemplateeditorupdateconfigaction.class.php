<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/plugintemplateeditorconfigview.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );	
		
	/**
	 * updates the plugin configuration
	 */
	class PluginTemplateEditorUpdateConfigAction extends AdminAction
	{
		var $_pluginEnabled;
		var $_maxBackupFiles;
		var $_allowedExtension;
		
		function PluginTemplateEditorUpdateConfigAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function validate()
		{
            $this->_pluginEnabled = $this->_request->getValue( "pluginEnabled" );
            $this->_pluginEnabled = ($this->_pluginEnabled != "" );			
            $this->_maxBackupFiles = $this->_request->getValue( "maxBackupFiles" );
            if( $this->_maxBackupFiles <= 0  || !ctype_digit($this->_maxBackupFiles) ) {
                $this->_view = new PluginTemplateEditorConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("templateeditor_error_maxbackupfiles"));
                $this->setCommonData();

                return false;
            }
            $this->_allowedExtension = $this->_request->getValue( "allowedExtension" );
            $val = new StringValidator();
			if ( !$val->validate($this->_allowedExtension) ) {
                $this->_view = new PluginTemplateEditorConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("templateeditor_error_allowedextension"));
                $this->setCommonData();

                return false;
            }			    
			
			return true;
		}
		        
		function perform()
		{
            // // update the plugin configurations to blog setting
			$config =& Config::getConfig();
            $config->setValue( "plugin_templateeditor_enabled", $this->_pluginEnabled );
            $config->setValue( "plugin_templateeditor_maxbackupfiles", $this->_maxBackupFiles );
            $config->setValue( "plugin_templateeditor_allowedextension", $this->_allowedExtension );
		
            if( !$config->save() ) {
                $this->_view = new PluginTemplateEditorConfigView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
                $this->setCommonData();

                return false;
            }
			
			// if everything went ok...
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();

			$this->_view = new PluginTemplateEditorConfigView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("templateeditor_settings_saved_ok"));
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());				
            
            return true;		
		}
	}
?>