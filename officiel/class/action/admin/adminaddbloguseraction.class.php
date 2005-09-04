<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminbloguserslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/mail/emailservice.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Adds a user to the blog
     */
    class AdminAddBlogUserAction extends BlogOwnerAdminAction 
	{

    	var $_sendNotification;
        var $_notificationText;
        var $_newUsername;

    	function AdminAddBlogUserAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "newBlogUserName", new StringValidator());
			$this->_sendNotification = ($this->_request->getValue( "sendNotification" ) != "" );
			if( $this->_sendNotification )
				$this->registerFieldValidator( "newBlogUserText", new StringValidator());
			else
				$this->registerField( "newBlogUserText" );				
			$this->registerField( "sendNotification" );
			$view = new AdminTemplatedView( $this->_blogInfo, "addbloguser" );
			$view->setErrorMessage( $this->_locale->tr("error_adding_user"));
			$this->setValidationErrorView( $view );
        }

        function sendNotificationEmail( $userInfo )
        {
            // if everything went fine, we can now send the confirmation email
            // only if the user specified a valid email address
            if( $userInfo->getEmail() != "" ) {
            	// build an email message
                $message = new EmailMessage();
                $message->setBody( $this->_notificationText );
                $message->setSubject( "pLog Notification" );
                $message->addTo( $userInfo->getEmail());
                $message->setFrom( $this->_userInfo->getEmail());
                // and finally send it
                $emailService = new EmailService();
                $emailService->sendMessage( $message );
            }

            return true;
        }

        function perform()
        {
            $this->_notificationText = $this->_request->getValue( "newBlogUserText" );
        	$this->_newUsername = Textfilter::filterAllHTML($this->_request->getValue( "newBlogUserName" ));
		
        	// see if the user exists
            $users = new Users();
            $userInfo = $users->getUserInfoFromUsername( $this->_newUsername );
            if( !$userInfo ) {
            	$this->_view = new AdminTemplatedView( $this->_blogInfo, "addbloguser" );
                $this->_view->setErrorMessage( $this->_locale->pr("error_invalid_user"), $this->_newUsername );
				$this->_form->setFieldValidationStatus( "newBlogUserName", false );
                $this->setCommonData( true );

                return false;
            }
			$this->notifyEvent( EVENT_USER_LOADED, Array( "user" => &$userInfo ));			

            // now we can add this user to the blog
            $userPerms = new UserPermissions();
            $res = $userPerms->grantPermission( $userInfo->getId(), $this->_blogInfo->getId(), PERMISSION_BLOG_USER );
			$this->notifyEvent( EVENT_PRE_USER_UPDATE, Array( "user" => &$userInfo ));
            if( !$res ) {
            	// there was an error adding the user to the blog
            	$this->_view = new AdminTemplatedView( $this->_blogInfo, "addbloguser" );
                $this->_view->setErrorMessage( $this->_locale->pr("error_adding_user", $userInfo->getUsername()));
                $this->setCommonData();

                return false;
            }
			$this->notifyEvent( EVENT_POST_USER_UPDATE, Array( "user" => &$userInfo ));

            // send a notification if enabled
            if( $this->_sendNotification ) {
            	$this->sendNotificationEmail( $userInfo );
            }

            $this->_view = new AdminBlogUsersListView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->pr("user_added_to_blog_ok", $userInfo->getUsername()));
            $this->setCommonData();

            return true;
        }
    }
?>