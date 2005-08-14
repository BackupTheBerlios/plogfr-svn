<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/emailvalidator.class.php" );	
    include_once( PLOG_CLASS_PATH."class/view/admin/admineditsiteuserview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminsiteuserslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/passwordvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );	
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );

    /**
     * \ingroup Action
     * @private
     *
	 * updates user settings
	 */
    class AdminUpdateUserProfileAction extends SiteAdminAction 
	{

    	var $_userId;
        var $_userPassword;
        var $_userEmail;
        var $_userAbout;
        var $_userFullName;
        var $_adminPrivs;
		var $_userProperties;

    	function AdminUpdateUserProfileAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerField( "userFullName" );
			$this->registerFieldValidator( "userEmail", new EmailValidator());
			$this->registerFieldValidator( "userPictureId", new IntegerValidator());
			$this->registerField( "userAbout" );
			$this->registerField( "properties" );
			$this->registerField( "userIsSiteAdmin" );
			$this->registerField( "userName" );
			$this->registerFieldValidator( "userProfilePassword", new PasswordValidator(), true );
			$this->registerFieldValidator( "userStatus", new IntegerValidator());
			$view = new AdminEditSiteUserView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_updating_user"));
			$this->setValidationErrorView( $view );
        }
		
        function perform()
        {
			// get the data
        	$this->_userId = $this->_request->getValue( "userId" );
            $this->_userPassword = trim(Textfilter::filterAllHTML($this->_request->getValue( "userProfilePassword" )));
            $this->_userEmail = Textfilter::filterAllHTML($this->_request->getValue( "userEmail" ));
            $this->_userAbout = Textfilter::filterAllHTML($this->_request->getValue( "userAbout" ));
            $this->_userFullName = Textfilter::filterAllHTML($this->_request->getValue( "userFullName" ));
            $this->_adminPrivs = $this->_request->getValue( "userIsSiteAdmin" );
			$this->_userProperties = $this->_request->getValue( "properties" );
			$this->_userStatus = $this->_request->getValue( "userStatus" );

        	// load the user settings
            $users = new Users();
            $user  = $users->getUserInfoFromId( $this->_userId );

            // if no info could be fetched, shown an error and quit
            if( !$user ) {
            	$this->_view = new AdminSiteUsersListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_invalid_user") );
                $this->setCommonData();
                return false;
            }
			
            // update the user settings
            $user->setEmail( $this->_userEmail );
            $user->setAboutMyself( $this->_userAbout );
            $user->setSiteAdmin( $this->_adminPrivs );
            $user->setFullName( $this->_userFullName );
			$user->setProperties( $this->_userProperties );
			$user->setStatus( $this->_userStatus );
            if( $this->_userPassword != "" )
            	$user->setPassword( $this->_userPassword );
				
			$this->notifyEvent( EVENT_PRE_USER_UPDATE, Array( "user" => &$user ));

            // and now update them
            if( !$users->updateUser( $user )) {
            	$this->_view =  new AdminSiteUsersListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_user") );
                $this->setCommonData();
                return false;
            }
			
			// the post-update event... if needed
			$this->notifyEvent( EVENT_POST_USER_UPDATE, Array( "user" => &$user ));			

            $this->_view = new AdminSiteUsersListView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->pr("user_updated_ok", $user->getUsername()));
            $this->setCommonData();

            return true;
        }
    }
?>