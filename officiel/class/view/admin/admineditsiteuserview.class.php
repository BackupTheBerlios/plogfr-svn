<?php

	include_once( PLOG_CLASS_PATH.'class/view/admin/admintemplatedview.class.php' );
	include_once( PLOG_CLASS_PATH.'class/view/admin/adminerrorview.class.php' );
	include_once( PLOG_CLASS_PATH.'class/dao/users.class.php' );
	include_once( PLOG_CLASS_PATH.'class/dao/userstatus.class.php' );
	
    /**
     * \ingroup View
     * @private
     *	
	 * shows the view to edit a user
	 */
	class AdminEditSiteUserView extends AdminTemplatedView
	{
		
		var $_user;
		
		function AdminEditSiteUserView( $blogInfo, $userInfo = null )
		{			
			// check if we have something in the session...
			if( $userInfo == null ) {
				$this->_user = $this->getSessionValue( 'editUserInfo' );
            }
			else {
				$this->_user = $userInfo;
				$this->setSessionValue( 'editUserInfo', $this->_user );
			}	
				
			if( $this->_user ) {
				// in case everything went fine...
				$this->AdminTemplatedView( $blogInfo, 'userprofile' );
				// user settings
				$this->setValue( 'userId', $this->_user->getId());
				$this->setValue( 'userStatus', $this->_user->getStatus());
				$this->setValue( 'userName', $this->_user->getUsername());
				$this->setValue( 'userEmail', $this->_user->getEmail());
				$this->setValue( 'userIsSiteAdmin', $this->_user->isSiteAdmin());
				$this->setValue( 'userAbout', $this->_user->getAboutMyself());
				$this->setValue( 'userFullName', $this->_user->getFullName());
			}
			else {
				// or else an error
				$this->AdminErrorView( $blogInfo );
				$this->setMessage( 'Error loading user data from the session' );
			}
		}
		
		function render()
		{
            // fetch the blogs to which this user belongs
			$users = new Users();
            $userBlogs = $users->getUsersBlogs( $this->_user->getId());
			$this->notifyEvent( EVENT_BLOGS_LOADED, Array( 'blogs' => &$userBlogs ));

            // otherwise, transfer it to the template context and let the
            // template do the rest
            $this->setValue( 'edituser', $this->_user );
            $this->setValue( 'edituserblogs', $userBlogs );
			// list of available status
			$this->setValue( 'userStatusList', UserStatus::getStatusList());
			
			parent::render();
		}
	}
?>
