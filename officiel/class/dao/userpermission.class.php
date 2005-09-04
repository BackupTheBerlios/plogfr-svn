<?php

	/**
	 * represents a permission from the database
	 *
	 * \ingroup DAO
	 */
	class UserPermission extends DbObject 
	{

    	var $_userId;
        var $_blogId;
        var $_permId;
        var $_id;

    	function UserPermission( $userId, $blogId, $permId, $id = -1 )
        {
			$this->DbObject();
        	$this->_userId = $userId;
            $this->_blogId = $blogId;
            $this->_permId = $permId;
            $this->_id     = $id;
        }

        function getId()
        {
        	return $this->_id;
        }

        function getBlogId()
        {
        	return $this->_blogId;
        }

        function getPermId()
        {
        	return $this->_permId;
        }

        function getUserId()
        {
        	return $this->_userId;
        }
    }
?>
