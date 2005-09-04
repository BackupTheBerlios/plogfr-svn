<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	
    /**
     * \ingroup View
     * @private
     */	
	class AdminUserProfileView extends AdminTemplatedView
	{
		var $_userInfo;
	
		function AdminUserProfileView( $blogInfo, $userInfo )
		{
			$this->AdminTemplatedView( $blogInfo, "usersettings" );
			
			$this->_userInfo = $userInfo;
			
			$this->setValue( "userFullName", $userInfo->getFullName());
			$this->setValue( "userEmail", $userInfo->getEmail());
			$this->setValue( "userAbout", $userInfo->getAboutMyself());
		}
		
		function render()
		{
			$this->setValue( "user", $this->_userInfo );		
			parent::render();
		}
	}
?>