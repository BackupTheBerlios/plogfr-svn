<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/passwordvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/emailvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/userpermissions.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminadduserview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminsiteuserslistview.class.php" );	

    /**
     * \ingroup Action
     * @private
     *
     * Adds a new user to the database.
     */
    class AdminAddUserAction extends SiteAdminAction 
	{

    	var $_userName;
        var $_userPassword;
        var $_userEmail;
		var $_userBlog;
		var $_userFullName;
		var $_properties;
		var $_userStatus;

    	function AdminAddUserAction( $actionInfo, $request )
        {
        	$this->SiteAdminAction( $actionInfo, $request );
        	
        	// for data validation purposes
        	$this->registerFieldValidator( "userName", new StringValidator());
        	$this->registerFieldValidator( "newUserPassword", new PasswordValidator());
        	$this->registerFieldValidator( "userEmail", new EmailValidator());
			$this->registerFieldValidator( "userStatus", new IntegerValidator());
        	$this->registerField( "userFullName" );
        	$this->registerField( "userBlog", new IntegerValidator());
        	$view = new AdminAddUserView( $this->_blogInfo );
        	$this->setValidationErrorView( $view );
        }

        function perform()
        {
	        // fetch the validated data
        	$this->_userName = Textfilter::filterAllHTML($this->_request->getValue( "userName" ));
            $this->_userPassword = $this->_request->getValue( "newUserPassword" );
            $this->_userEmail = Textfilter::filterAllHTML($this->_request->getValue( "userEmail" ));
            $this->_userFullName = Textfilter::filterAllHTML($this->_request->getValue( "userFullName" ));
			$this->_userStatus = $this->_request->getValue( "userStatus" );
			$this->_userBlog = $this->_request->getValue( "userBlog" );
	        
        	// now that we have validated the data, we can proceed to create the user, making
            // sure that it doesn't already exists
            $users = new Users();
            $userInfo = $users->userExists( $this->_userName );
            if( $userInfo ) {
                $this->_form->setFieldValidationStatus( "userName", false );            	
                $this->_view = new AdminAddUserView( $this->_blogInfo );
                $this->setCommonData( true );
                return false;
            }

            // otherwise, we can create a new one
			$user = new UserInfo( $this->_userName, 
			                      $this->_userPassword, 
								  $this->_userEmail, 
								  "", 
								  $this->_userFullName,
								  0,
								  $this->_properties );
			$user->setStatus( $this->_userStatus );
			$this->notifyEvent( EVENT_PRE_USER_ADD, Array( "user" => &$user ));
			$newUserId = $users->addUser( $user );
			
            if( !$newUserId ) {
                $this->_view = new AdminAddUserView( $this->_blogInfo );
                $this->_form->setFieldValidationStatus( "userName", false );
                $this->setCommonData( true );
                return false;
            }
			
			// if the userBlog parameter is different than 0, we have to add a relationship
			// between that user and the blog
			if( $this->_userBlog > 0 ) {
				$permissions = new UserPermissions();
				$result = $permissions->grantPermission( $newUserId, $this->_userBlog, PERMISSION_BLOG_USER );
			}
			
			$this->notifyEvent( EVENT_POST_USER_ADD, Array( "user" => &$user ));

            $this->_view = new AdminSiteUsersListView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->pr("user_added_ok", $user->getUsername()));
            $this->setCommonData();

            return true;
        }
    }
?>