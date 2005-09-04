<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/emailvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/passwordvalidator.class.php" );	
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminuserprofileview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Action that shows a form to change the settings of the current user.
     */
    class AdminUpdateUserSettingsAction extends AdminAction 
	{

        var $_userPassword;
        var $_userConfirmPassword;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminUpdateUserSettingsAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
            $this->registerField( "confirmPassword" );
			$this->registerField( "userFullName" );
			$this->registerFieldValidator( "userEmail", new EmailValidator());
			$this->registerFieldValidator( "userPictureId", new IntegerValidator());
			$this->registerField( "userAbout" );
			$this->registerField( "properties" );
			$this->registerField( "userSettingsPassword" );
			$view = new AdminUserProfileView( $this->_blogInfo, $this->_userInfo );
			$view->setErrorMessage( $this->_locale->tr("error_updating_user_settings"));
			$this->setValidationErrorView( $view );
        }

        /**
         * Validates that the information we've just received from the blog settings
         * form is valid... We have to be really sure about this one!!!
         */
        function validate()
        {
            // if all correct, we can proceed
            $this->_userPassword = trim($this->_request->getValue( "userSettingsPassword" ));
            $this->_userConfirmPassword = trim($this->_request->getValue( "confirmPassword" ));
			
            $valid = parent::validate();			

            // check that the password is correct and confirm it
            if( $this->_userPassword != "" ) {
            	$passwordVal = new PasswordValidator();
            	if( !$passwordVal->validate( $this->_userPassword )) {
					$this->_form->setFieldValidationStatus( "userSettingsPassword", false );					
                	$this->setCommonData( true );
                	return false;
            	}
            	if( $this->_userPassword != $this->_userConfirmPassword ) {
					$this->_form->setFieldValidationStatus( "confirmPassword", false );
                	$this->setCommonData( true );
                	return false;
            	}
            }
			
			return $valid;
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// update the user information
            $this->_userInfo->setEmail( Textfilter::filterAllHTML($this->_request->getValue( "userEmail" )));
            if( $this->_userPassword != "" )
            	$this->_userInfo->setPassword( $this->_userPassword );
            $this->_userInfo->setAboutMyself( Textfilter::filterAllHTML($this->_request->getValue( "userAbout" )));
            $this->_userInfo->setFullName( Textfilter::filterAllHTML($this->_request->getValue( "userFullName" )));
			$this->_userInfo->setPictureId( $this->_request->getValue( "userPictureId" ));
			$this->_userInfo->setProperties( $this->_request->getValue( "properties" ));
			$this->notifyEvent( EVENT_PRE_USER_UPDATE, Array( "user" => &$this->_userInfo ));			
            $this->_session->setValue( "userInfo", $this->_userInfo );
            $this->saveSession();			

            // update the user information
           	$this->_view =  new AdminUserProfileView( $this->_blogInfo, $this->_userInfo );
            $users = new Users();
            if( !$users->updateUser( $this->_userInfo ))
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_user_settings"));
			else {
				$this->_view->setSuccessMessage( $this->_locale->pr("user_settings_updated_ok", $this->_userInfo->getUsername()));
				// if everything fine, also say so...
				$this->notifyEvent( EVENT_POST_USER_UPDATE, Array( "user" => &$this->_userInfo ));
			}

            $this->setCommonData();

            return true;
        }
    }
?>
