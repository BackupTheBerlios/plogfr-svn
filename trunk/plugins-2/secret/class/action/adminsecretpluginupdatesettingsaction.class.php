<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/secret/class/view/adminsecretpluginsettingsview.class.php" );	
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfields.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfield.class.php" );	

    class AdminSecretPluginUpdateSettingsAction extends BlogOwnerAdminAction 
	{
	
		var $_pluginEnabled;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminSecretPluginUpdateSettingsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }
		
		function validate()
		{
            $this->_pluginEnabled = $this->_request->getValue( "pluginEnabled" );
            $this->_pluginEnabled = ($this->_pluginEnabled != "" );			
			
			return true;
		}
		
		/**
		 * checks if the fields already exist and if not, creates them
		 */
		function _createFields()
		{
			$customFields = new CustomFields();
			$blogFields = $customFields->getBlogCustomFields( $this->_blogInfo->getId());
			
			
			// check if the checkbox fields exists
			if( !array_key_exists( "password_protected", $blogFields )) {
				_debug("creating password field!");
				$protectedField = new CustomField( "password_protected",
				                                   $this->_locale->tr("password_protected_help"),
												   CUSTOM_FIELD_CHECKBOX,
												   $this->_blogInfo->getId());
				$customFields->addCustomField( $protectedField );
			}
			else {
				_debug("enabling! password field!");
				$protectedField = $blogFields["password_protected"];
				$protectedField->setHidden( false );
				$customFields->updateCustomField( $protectedField );
			}
			
			// check if the field for the password exists
			if( !array_key_exists( "password_field", $blogFields )) {
				_debug("creating pass-word field!");
				$passwordField = new CustomField( "password_field",
				                                  $this->_locale->tr("password_field_help"),
												   CUSTOM_FIELD_TEXTBOX,
												   $this->_blogInfo->getId());
				$customFields->addCustomField( $passwordField );
			}
			else {
				_debug("enabling! pass-word field!");
				$passwordField = $blogFields["password_field"];
				$passwordField->setHidden( false );
				$customFields->updateCustomField( $passwordField );			
			}
			
			return true;
		}
		
		/**
		 * checks if the fields already exist and if so, disables them (sets them to be "hidden")
		 */
		function _updateFields()
		{
			$customFields = new CustomFields();
			$blogFields = $customFields->getBlogCustomFields( $this->_blogInfo->getId());
			
			
			// check if the checkbox fields exists
			if( array_key_exists( "password_protected", $blogFields )) {
				_debug("hiding! password field!");
				$protectedField = $blogFields["password_protected"];
				$protectedField->setHidden( true );
				$customFields->updateCustomField( $protectedField );
			}
			
			// check if the field for the password exists
			if( array_key_exists( "password_field", $blogFields )) {
				_debug("hiding! pass-word field!");
				$passwordField = $blogFields["password_field"];
				$passwordField->setHidden( true );
				$customFields->updateCustomField( $passwordField );
			}
			
			return true;
		}		

        /**
         * Carries out the specified action
         */
        function perform()
        {
            // update the plugin configurations to blog setting
			$blogSettings = $this->_blogInfo->getSettings();
            $blogSettings->setValue( "plugin_secret_enabled", $this->_pluginEnabled );
            $this->_blogInfo->setSettings( $blogSettings ); 
			
			// save the blogs settings
			$blogs = new Blogs();
            if( !$blogs->updateBlog( $this->_blogInfo->getId(), $this->_blogInfo )) {
                $this->_view = new AdminSecretPluginSettingsView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_settings"));
                $this->setCommonData();

                return false;                
            }
			
			// check if the fields already exist and if not, create them
			if( $this->_pluginEnabled )
				$this->_createFields();
			else
				$this->_updateFields();
			
			// if everything went ok...
            $this->_blogInfo->setSettings( $blogSettings );
            $this->_session->setValue( "blogInfo", $this->_blogInfo );
            $this->saveSession();
			
			$this->_view = new AdminSecretPluginSettingsView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("secret_settings_saved_ok"));			
			$this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());			
            
            return true;	            
        }
    }
?>
