<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userpermission.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );	

    //
    // :KLUDGE: This should be done in a better way...
    //
    define( "PERMISSION_SITE_ADMIN", 1 );
    define( "PERMISSION_BLOG_USER", 2 );
    define( "PERMISSION_BLOG_OWNER", 3 );

    /**
     * Handles user permissions.
	 *
	 * \ingroup DAO
     */
	class UserPermissions extends Model 
	{

    	function UserPermissions()
        {
        	$this->Model();

            //print("user constructor<br/>");
        }

        /**
         * Retrieves the permissions for a given user.
         *
         * @param userId The user identifier
         * @param blogId The blog identifier
         * @return An Array of UserPermission objects with all the different permissions
         * that the user has for the given blog. the array can be empty if the user has no
         * privileges over a blog.
         */
        function getUserPermissions( $userId, $blogId )
        {
            $perms = Array();

        	// check if the user is the owner
            $query = "SELECT owner_id FROM ".$this->getPrefix()."blogs WHERE id = '".Db::qstr($blogId)."'";
            $result = $this->Execute( $query );
            if( $result ) {
            	$row = $result->FetchRow();
                if( $row["owner_id"] == $userId ) {
                	$perm = new UserPermission( $userId, $blogId, PERMISSION_BLOG_OWNER, 0 );
                    array_push( $perms, $perm );
                }
            }

            // we can continue now to check for other permissions, even though BLOG_OWNER level
            // is higher than any other
        	$query = "SELECT * FROM ".$this->getPrefix()."users_permissions WHERE user_id = '".Db::qstr($userId)."' AND blog_id = '".Db::qstr($blogId)."'";

            $result = $this->Execute( $query );
            //$result = $this->_db->CacheExecute( 60, $query );

            if( !$result )
            	return false;

            while( $row = $result->FetchRow()) {
            	array_push( $perms, $this->_fillUserPermissionInformation( $row ));
            }

            return $perms;
        }

        /**
         * @private
         */
        function _fillUserPermissionInformation( $row )
        {
        	$perm = new UserPermission( $row["user_id"], $row["blog_id"], $row["permission_id"], $row["id"] );

            return $perm;
        }

        /**
         * Returns true if the user is a site global admininistrator
         *
         * @param userId The user identifier
         * @return True if user is a global administrator or false otherwise
         */
        function isSiteAdmin( $userId )
        {
        	if( isset($this->cache[$userId])) {
            	//print("user cached<br/>");
                $result = $this->cache[$userId];
            }
            else {

        		$query = "SELECT * FROM ".$this->getPrefix()."users_permissions WHERE permission_id = 1 AND user_id = '".Db::qstr($userId)."'";

            	$result = $this->Execute( $query );

                $this->cache[$userId] = $result;
                //print("user fetching!<br/>");
            }

            if( !$result )
            	return false;

            if( $result->RowCount() == 0 )
            	return false;

            // let's double check and make completely sure...
            $row = $result->FetchRow();
            if( $row["user_id"] == $userId )
            	return true;
            else
            	return false;
        }

        /**
         * Gives administrator permissions to the given user id
         *
         * @param userId The identifier of the user
         */
        function setSiteAdmin( $userId )
        {
        	// first check if the user already has administrator permissions
        	if( $this->isSiteAdmin( $userId ))
            	return true;

            // if not, we can proceed and give them
            $query = "INSERT INTO ".$this->getPrefix()."users_permissions (user_id,blog_id,permission_id) VALUES ( $userId, 0, 1 );";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
            else
            	return true;
        }

        /**
         * Removes administration permissions from a user
         * @param userId the user from who we'd like to revoke the permissions
         *
         * @return Returns something
         */
        function revokeSiteAdmin( $userId )
        {
        	// we don't have to do anything if the user is not an administrator
        	if( !$this->isSiteAdmin( $userId ))
            	return true;

            // if he or she is, we can proceed and remove the permission
            $query = "DELETE FROM ".$this->getPrefix()."users_permissions WHERE user_id = $userId AND blog_id = 0 AND permission_id = 1;";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
            else
            	return true;
        }

        /**
         * Gives or takes administrator permission from a user, depending on the value of the
         * siteAdmin parameter. If set to true, it will give permissions to the user, or it will
         * remove them otherwise.
         *
         * @param userId The user identifier.
         * @param siteAdmin A boolean value
         * @return Returns always true.
         */
        function updateSiteAdmin( $userId, $siteAdmin )
        {
        	if( $siteAdmin )
            	$result = $this->setSiteAdmin( $userId );
            else
            	$result = $this->revokeSiteAdmin( $userId );

            return $result;
        }

        /**
         * Grants a permission to a user, for a given blog.
         * Any permission can be granted, as long as it exists.
         *
         * @param userId The user which will receive the permission
         * @param blogId The blog to which this permission will be given for this user
         * @param permissionId The identifier of the permission that will be granted
         * @return Returns true if the permission was set or already existed, or false
         * if there was any problem.
         */
        function grantPermission( $userId, $blogId, $permissionId )
        {
        	// check if the permission has already been granted
            $query = "SELECT * FROM ".$this->getPrefix()."users_permissions
                      WHERE user_id = $userId AND blog_id = $blogId
                      AND permission_id = $permissionId";

            $result = $this->Execute( $query );

            // the permission has already been granted so there's nothing else to do here
            if( $result && $result->RowCount() == 1 )
            	return true;

            // if not, grant it now
            $query = "INSERT INTO ".$this->getPrefix()."users_permissions
                      (blog_id,user_id,permission_id) VALUES( $blogId, $userId, $permissionId)";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
            else
            	return true;
        }

        /**
         * Removes a permission from a user, for a given blog.
         *
         * @param userId The user which will be revoked the permission
         * @param blogId The blog to which this permission will be revoked
         * @param permissionId The identifier of the permission that will be revoked
         * @return Returns true if the permission didn't exist or if the permission was
         * successfully removed, or false otherwise.
         */
        function revokePermission( $userId, $blogId, $permissionId )
        {
        	// check if the permission has already been removed or doesn't exist
            $query = "SELECT * FROM ".$this->getPrefix()."users_permissions
                      WHERE user_id = $userId AND blog_id = $blogId
                      AND permission_id = $permissionId";

            $result = $this->Execute( $query );

            if( !$result )
            	return true;

            if( $result->RowCount() == 0 )
            	return true;

            // if not, grant it now
            $query = "DELETE FROM ".$this->getPrefix()."users_permissions
                      WHERE blog_id = $blogId AND user_id = $userId AND permission_id = $permissionId";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
            else
            	return true;
        }

        /**
         * removes all the permissions for a given blog, useful when we're removing
         * the blog from the database.
         *
         * @param blogId The blog from which we'd like to remove the permissions.
         * @return true
         */
        function revokeBlogPermissions( $blogId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."users_permissions
                      WHERE blog_id = $blogId";

            $result = $this->Execute( $query );

            return $result;
        }

		/**
		* updates the list of users that have access to the blog. But this method works so
		 * that it first removes all current permissions and then recreates them again
		 * based on the given list of users
		 *
		 * @param blogId
		 * @param userIdList An associative array with user ids
		 * @return true if successful or false otherwise
		 */
		function updateBlogUserPermissions( $blogId, $userList )
		{
			// first of all, remove all the permissions
			$this->revokeBlogPermissions( $blogId );
			
			// make sure that we're dealing with an array
			if( !is_array( $userList )) {
				return false;
			}
			
			// loop through the array and recreate the permissions
			foreach( $userList as $userId ) {
				if( $userId > 0 ) {
					$this->grantPermission( $userId, $blogId, PERMISSION_BLOG_USER );
				}
			}
			
			return true;
		}

        /**
         * revokes all the permissions that a user may have
         *
         * @param userId The identifier of the user
         * @return true
         */
        function revokeUserPermissions( $userId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."users_permissions
                      WHERE user_id = $userId";

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * Retrieves all the users with some permission in a blog
         *
         * @param blogId The identifier of the blog from which we'd like to fetch the settings
         * @return An Array of UserPermission objects with all the different users with permissions 
         * has for the given blog. the array can be empty if the blog has no
         * users with permissions
         */
        function getBlogUsersPermissions( $blogId )
        {
			$query = "SELECT * FROM ".$this->getPrefix()."users_permissions WHERE blog_id = ".$blogId.";";
            $result = $this->Execute( $query );

            if (!$result)
                return false;

            $perms = array();
            while( $row = $result->FetchRow()) {
            	array_push( $perms, $this->_fillUserPermissionInformation( $row ));
            }

            return $perms;
        }
		
		/**
		 * returns the usernames of the users who have permissions in a blog
		 *
		 * @param blogId
		 * @retur An array of UserInfo objects
		 */ 
		function getBlogUsers( $blogId )
		{
			$query = "SELECT * FROM ".$this->getPrefix()."users_permissions WHERE blog_id = '".Db::qstr($blogId)."'";
            $result = $this->Execute( $query );

            if (!$result)
                return false;

            $blogUsers = array();
			$users = new Users();
            while( $row = $result->FetchRow()) {
            	$blogUsers[] = $users->getUserInfoFromId( $row["user_id"] );
            }

            return $blogUsers;		
		}
    }
?>