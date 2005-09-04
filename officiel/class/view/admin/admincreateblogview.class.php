<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
	
    /**
     * \ingroup View
     * @private
     */	
	class AdminCreateBlogView extends AdminTemplatedView
	{
	
		function AdminCreateBlogView( $blogInfo )
		{
			$this->AdminTemplatedView( $blogInfo, "createblog" );
		}
		
		function render()
		{
            // get all the users in the site
            $users = new Users();
            $siteUsers = $users->getAllUsers();
			$this->notifyEvent( EVENT_USERS_LOADED, Array( "users" => &$siteUsers ));
            $this->setValue( "siteusers", $siteUsers );
            
            parent::render();		
		}
	}
?>