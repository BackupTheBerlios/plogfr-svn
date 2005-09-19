<?php

    include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userinfo.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userpermissions.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userstatus.class.php" );
    
    /**
     * Model representing the users in our application. Provides the methods such as
     * authentication and querying for users.
	 *
	 * \ingroup DAO
     */
    class Users extends Model
    {

        /**
         * Initializes the model
         */
        function Users()
        {
            $this->Model();

            $this->usercache = Array();

            $this->perms =  new UserPermissions();
        }

        /**
         * Returns true if the user is in the database and the username
         * and password match
         *
         * @param user Username of the user who we'd like to authenticate
         * @param pass Password of the user
         * @return true if user and password correct or false otherwise.
         */
        function authenticateUser( $user, $pass )
        {
            $query = "SELECT * FROM ".$this->getPrefix()."users 
                      WHERE user = '".Db::qstr($user)."' AND password = '".md5($pass)."'
                            AND status = '".USER_STATUS_ACTIVE."'";

            $result = $this->Execute( $query );

            if( $result == false )
                return false;

            if( $result->RecordCount() == 1 )
                return true;
            else
                return false;
        }

        /**
         * Returns all the information associated to the user given
         *
         * @param user Username of the user from who we'd like to get the information
         * @param pass Password of the user we'd like to get the information
         * @return Returns a UserInfo object with the requested information, or false otherwise.
         */
        function getUserInfo( $user, $pass )
        {
            $prefix = $this->getPrefix();
            $query = "SELECT u.id AS id, u.user AS user, u.password AS password, u.email AS email,
                      u.about AS about, u.full_name AS full_name, u.properties AS properties,
                      u.resource_picture_id AS resource_picture_id,
                      IF(p.permission_id = 1, 1, 0 ) AS site_admin,
                      u.status AS status
                      FROM {$prefix}users u LEFT JOIN {$prefix}users_permissions p ON u.id = p.user_id
                      WHERE u.user = '".Db::qstr($user)."' AND u.password = '".md5($pass)."'
                      ORDER BY blog_id";

            $userInfo = $this->_getUserInfoFromQuery( $query );

            return $userInfo;
        }

        /**
         * Retrieves the user information but given only a username
         *
         * @param username The username of the user
         * @return Returns a UserInfo object with the requested information, or false otherwise.
         */
        function getUserInfoFromUsername( $username )
        {
            $prefix = $this->getPrefix();
            $query = "SELECT u.id AS id, u.user AS user, u.password AS password, u.email AS email,
                             u.about AS about, u.full_name AS full_name, u.properties AS properties,
                             u.resource_picture_id AS resource_picture_id,
                             IF(p.permission_id = 1, 1, 0 ) AS site_admin,
                             u.status AS status
                      FROM {$prefix}users u LEFT JOIN {$prefix}users_permissions p ON u.id = p.user_id
                      WHERE u.user = '".Db::qstr($username)."' ORDER BY blog_id";

            $userInfo = $this->_getUserInfoFromQuery( $query );

            return $userInfo;
        }

        /**
         * Retrieves the user infromation but given only a userid
         *
         * @param userId User ID of the user from whom we'd like to get the information
         * @return Returns a UserInfo object with the requested information, or false otherwise.
         */
        function getUserInfoFromId( $userid, $extendedInfo = false )
        {
            if( isset($this->usercache[$userid])) {
                $userInfo = $this->usercache[$userid];
            }
            else {
                $prefix = $this->getPrefix();
                $query = "SELECT u.id AS id, u.user AS user, u.password AS password, u.email AS email,
                                 u.about AS about, u.full_name AS full_name, u.properties AS properties,
                                 u.resource_picture_id AS resource_picture_id,
                                 IF(p.permission_id = 1, 1, 0 ) AS site_admin,
                                 u.status AS status
                          FROM {$prefix}users u LEFT JOIN {$prefix}users_permissions p ON u.id = p.user_id
                          WHERE u.id = $userid ORDER BY blog_id";

                $userInfo = $this->_getUserInfoFromQuery( $query, $extendedInfo );

                $this->usercache[$userid] = $userInfo;
            }

            return $userInfo;
        }

        /**
         * More common code used by several functions
         *
         * Private function used to fill in all the fields of UserInfo objects given
         * a row of the database.
         */
        function _getUserInfoFromQuery( $sql_query, $extendedInfo = false )
        {
            $result = $this->Execute( $sql_query );
            if( !$result )
                return false;

            if( $result->RowCount() == 0 )
                return false;

            $info = $result->FetchRow( $result );

            $userInfo = $this->_fillUserInformation( $info, $extendedInfo );

            return $userInfo;
        }

        /**
         * Given a result record from a Execute call, it will fill in the
         * fields of the object, so that we don't have to repeat the same
         * code too many times
         */
        function _fillUserInformation( $query_result, $extraInfo = false )
        {
            $userInfo = new UserInfo( $query_result["user"], $query_result["password"],
                                      $query_result["email"],
                                      $query_result["about"],
                                      $query_result["full_name"],
                                      $query_result["resource_picture_id"],
                                      unserialize($query_result["properties"]),
                                      $query_result["id"]);

            if( $extraInfo ) {
                // load this data if explicitely required!
                $userBlogs = $this->getUsersBlogs($userInfo->getId());
                $userInfo->setBlogs($userBlogs);
            }

            // set some permissions
            //$userInfo->setSiteAdmin($this->perms->isSiteAdmin( $userInfo->getId()));
            $userInfo->setSiteAdmin( $query_result["site_admin"] );
            $userInfo->setStatus( $query_result["status"] );

            return $userInfo;
        }

        /**
         * Returns an array of BlogInfo objects with the information of all the blogs to which
         * a user belongs
         *
         * @param userId Identifier of the user
         * @return An array of BlogInfo objects to whom the user belongs.
         */
        function getUsersBlogs( $userid, $status = BLOG_STATUS_ALL )
        {
            $usersBlogs = Array();
            $blogs = new Blogs();
            $ids = Array();

            // check if the user is the owner of any blog
            $prefix = $this->getPrefix();
            $owner = "SELECT * FROM {$prefix}blogs WHERE owner_id = ".$userid;			
			if( $status != BLOG_STATUS_ALL ) 
				$owner .= " AND status = '".Db::qstr( $status )."'";
            
			$result = $this->Execute( $owner );

            while( $row = $result->FetchRow($result)) {
                $usersBlogs[] = $blogs->_fillBlogInformation( $row );
                $ids[] = $row["id"];
            }

            // and now check to which other blogs he or she belongs
            $otherBlogs = "SELECT b.* FROM {$prefix}blogs b, {$prefix}users_permissions p 
                           WHERE p.user_id = '".Db::qstr($userid)."' AND b.id = p.blog_id";
            if( !empty($usersBlogs)) {
	         	$blogIds = implode( ",", $ids );
	         	$otherBlogs .= " AND p.blog_id NOT IN (".$blogIds.")";
            }
            if( $status != BLOG_STATUS_ALL )
            	$otherBlogs .= " AND b.status = '".Db::qstr( $status )."'";
            	
            $result = $this->Execute( $otherBlogs );
            // now we know to which he or she belongs, so we only have
            // to load the information about those blogs
            while( $row = $result->FetchRow($result)) {
                $usersBlogs[] = $blogs->_fillBlogInformation( $row );
            }

            return $usersBlogs;
        }

        /**
         * Returns an array with all the users available in the database
         *
		 * @param status
		 * @param includeExtraInfo
         * @param page
         * @param itemsPerPage
         * @return An array containing all the users.
         */
        function getAllUsers( $status = USER_STATUS_ALL, $includeExtraInfo = false, $page = -1, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
        {
	    	if( $status != USER_STATUS_ALL )
	    		$where = "WHERE status = '".Db::qstr($status)."'";
	        
            $query = "SELECT * FROM ".$this->getPrefix()."users $where ORDER BY id ASC $limits";

            $result = $this->Execute( $query, $page, $itemsPerPage );

            $users = Array();

            while ($info = $result->FetchRow( $result ))
                array_push( $users, $this->_fillUserInformation( $info, $includeExtraInfo ));

            return $users;
        }

        /**
         * Updates the information related to a user
         *
         * @param userInfo An UserInfo object containing the <b>already udpated</b> information of the
         * user we would like to update.
         * @return Returns true if ok or false otherwise.
         */
        function updateUser( $userInfo )
        {
            $query = "UPDATE ".$this->getPrefix().
                     "users SET email = '".$userInfo->getEmail().
                     "', about = '".Db::qstr($userInfo->getAboutMyself()).
                     "', password = '".$userInfo->getPassword().
                     "', full_name = '".Db::qstr($userInfo->getFullName()).
                     "', resource_picture_id = '".Db::qstr($userInfo->getPictureId()).
                     "', properties = '".Db::qstr(serialize($userInfo->getProperties())).
                     "', status = '".Db::qstr($userInfo->getStatus()).
                     "' WHERE id = ".$userInfo->getId().";";

            // update the users table
            $result = $this->Execute( $query );

            // and now update the permissions, if there has been any change
            $perms = new UserPermissions();
            $perms->updateSiteAdmin( $userInfo->getId(), $userInfo->isSiteAdmin());

            return $result;
        }

        /**
         * Adds a user to the database.
         *
         * @param user An UserInfo object with the necessary information
         * @return Returns the identifier assigned to the user, or false if there was any error. It will also modify the
		 * UserInfo object passed by parameter and set its database id.
         */
        function addUser( &$user )
        {
            $query = "INSERT INTO ".$this->getPrefix()."users(user,password,email,about,full_name,
                      resource_picture_id,properties,status)
                      VALUES ('".Db::qstr($user->getUserName())."','".md5($user->getPassword())."','".
                      Db::qstr($user->getEmail())."','".Db::qstr($user->getAboutMyself())."','".
                      Db::qstr($user->getFullName())."', '".
                      Db::qstr($user->getPictureId())."', '".
                      Db::qstr(serialize($user->getProperties()))."', '".
                      Db::qstr($user->getStatus())."');";

            $result = $this->Execute( $query );

            if( !$result )
                return false;

            $userId = $this->_db->Insert_ID();
			
			$user->setId( $userId );

            return $userId;
        }

        /**
         * Returns an array with all the users that belong to the given
         * blog.
         *
         * @param blogId The blog identifier.
         * @param includeOwner Wether to include the owner of the blog or not.
         * @return An array with the information about the users who belong in
         * one way or another to that blog.
         */
        function getBlogUsers( $blogId, $includeOwner = true, $status = USER_STATUS_ALL )
        {
            $users = Array();
	        $prefix = $this->getPrefix();

            // get the information about the owner, if requested so
            if( $includeOwner ) {
                $query = "SELECT {$prefix}users.* FROM {$prefix}users, {$prefix}blogs 
                          WHERE {$prefix}users.id = {$prefix}blogs.owner_id AND {$prefix}blogs.id = '".Db::qstr($blogId)."';";
                $result = $this->Execute( $query );

                if( !$result )
                    return false;

                $row = $result->FetchRow();
                array_push( $users, $this->_fillUserInformation( $row ));
            }

            // now get the other users who have permission for that blog.
            $query2 = "SELECT {$prefix}users.* FROM {$prefix}users, {$prefix}users_permissions 
                       WHERE {$prefix}users.id = {$prefix}users_permissions.user_id 
                       AND {$prefix}users_permissions.blog_id = '".Db::qstr($blogId)."';";
            $result2 = $this->Execute( $query2 );
            if( !$result2 ) // if error, return what we have so far...
                return $users;

            while( $row = $result2->FetchRow()) {
                array_push( $users, $this->_fillUserInformation($row));
            }

            return $users;
        }

        /**
         * disables a user
         *
         * @param userId The identifier of the user we are trying to disable
         */
        function disableUser( $userId )
        {
            $query = "UPDATE ".$this->getPrefix()."users 
                      SET status = '".USER_STATUS_DISABLED."'
                      WHERE id = '".Db::qstr($userId)."'";

            $result = $this->Execute( $query );

            if( !$result )
                return false;

            if( $this->_db->Affected_Rows() == 0 )
                return false;

            return true;
        }
        
        /**
         * Removes users from the database
         *
         * @param userId The identifier of the user we are trying to remove
         */
        function deleteUser( $userId )
        {
            // first, delete all of his/her permissions
            $perms = new UserPermissions();
            $perms->revokeUserPermissions( $userId );

            $query = "DELETE FROM ".$this->getPrefix()."users WHERE id = $userId;";

            $result = $this->Execute( $query );

            if( !$result )
                return false;

            if( $this->_db->Affected_Rows() == 0 )
                return false;

            return true;
        }        

        /**
         * returns the total number of users
         *
         * @return total number of users
         */
        function getNumUsers( $status = USER_STATUS_ALL )
        {
            $prefix = $this->getPrefix();
			$table = "{$prefix}users";
            if( $status != USER_STATUS_ALL )
            	$cond = "status = '".Db::qstr($status)."'";
				
			return( $this->getNumItems( $table, $cond ));
        }
        
        /**
         * returns true if the given username exists
         *
         * @param userName
         * @return true if it exists or false otherwise
         */
        function userExists( $userName )
        {
	    	return( $this->getUserInfoFromUsername( $userName ));   
        }

        /**
         * get the blogid of user own
         */
		function getUserBlogId( $username )
		{
            // default blog id
            $blogId = 1;

			$usersBlogs = Array();
            $blogs = new Blogs();

            $userinfo = $this->getUserInfoFromUsername($username);
            // if userinfo is null, this maybe because username is not exists..
            // return 0 means, should go to summary page
            if(!$userinfo) return 0;
            $userid = $userinfo->getId();
            $userid = $userinfo->getId();

        	// check if the user is the owner of any blog
            $owner = "SELECT id FROM ".$this->getPrefix()."blogs WHERE owner_id = ".$userid.";";
            $result = $this->_db->Execute( $owner );

            if(!$result)
                return $blogId;

            while( $row = $result->FetchRow($result)) {
            	$blogId = $row["id"];
            }

            return $blogId;
		}

        /**
         * check if the email account has been registered
         * @return true if the email account has been registered
         */
        function emailExists($email){
            $query = "SELECT email 
                      FROM ".$this->getPrefix()."users 
                      WHERE email = '".Db::qstr($email)."'";

            $result = $this->_db->Execute($query);

            if($result && $result->RecordCount() >= 1)
                return true;
            else 
                return false;
        }
    }
?>
