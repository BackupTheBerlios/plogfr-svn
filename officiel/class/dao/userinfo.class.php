<?php

	include_once( PLOG_CLASS_PATH."class/database/dbobject.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresource.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );

    /**
     * Represents a user in our application. Includes information such as the username,
     * password, email, etc.
	 *
	 * \ingroup DAO
     */
	class UserInfo extends DbObject 
	{

		var $_username;
		var $_password;
		var $_id;
		var $_aboutmyself;
		var $_email;
		var $_blogs;
        var $_siteAdmin;
        var $_fullName;
		var $_resourcePictureId;
		var $_resourcePicture;
		var $_status;

		function UserInfo( $username, $password, $email, $aboutMyself, $fullName, $resourcePictureId = 0, $properties = Array(), $id = 0 )
		{
			$this->DbObject();

			$this->setUsername( $username );
			$this->_password = $password;
			$this->_id = $id;
			$this->_aboutmyself = $aboutMyself;
			$this->_email = $email;
			$this->_blogs = "";
			$this->_fullName = $fullName;
            $this->_siteAdmin = false;
			$this->setPictureId( $resourcePictureId );
			$this->setProperties( $properties );
			
			// by defaults, users are in status "active"
			$this->setStatus( USER_STATUS_ACTIVE );
		}

		/**
		 * @return returns the username
		 */
		function getUsername()
		{
			return $this->_username;
		}

		function getPassword()
		{
			return $this->_password;
		}

		function getId()
		{
			return $this->_id;
		}

		function getAboutMyself()
		{
			return $this->_aboutmyself;
		}

		function getEmail()
		{
			return $this->_email;
		}

		function getBlogs()
		{
			return $this->_blogs;
		}
		
		function getFullName()
		{
		  return $this->_fullName;
		}

		function setUsername( $newUsername )
		{
			$this->_username = Textfilter::filterAllHTML( $newUsername );
		}

		function setPassword( $newPassword )
		{
			$this->_password = md5($newPassword);
		}
	
		function setId( $newId )
		{
			$this->_id = $newId;
		}

		function setAboutMyself( $newAboutMyself )
		{
			$this->_aboutmyself = $newAboutMyself;
		}

		function setEmail( $newEmail )
		{
			$this->_email = $newEmail;
		}

		function setBlogs( $blogs )
		{
			$this->_blogs = $blogs;
		}

        function isSiteAdmin()
        {
        	return $this->_siteAdmin;
        }

        function setSiteAdmin( $siteAdmin )
        {
        	$this->_siteAdmin = $siteAdmin;
        }
        
        function setFullName( $fullName )
        {
            $this->_fullName = $fullName;
        }
		
		function setPictureId( $resourceId )
		{
			$this->_resourcePictureId = $resourceId;
			$this->_resourcePicture = null;
		}
		
		function getPictureId()
		{
			return $this->_resourcePictureId;
		}
		
		function setPicture( $resource )
		{
			$this->_resourcePicture = $resource;
			$this->_resourcePictureId = $resource->getId();
		}
		
		/**
		 * returns a GalleryResource object with the picture chosen by the user
		 * as his/her 'avatar'. I think it's better this way than if we just store
		 * a url pointing to an image
		 * 
		 * @return a GalleryResource object
		 */
		function getPicture()
		{
			// only load if this user really has a picture...
			if( !$this->_resourcePicture && $this->hasPicture()) {
				$this->_loadPicture();
			}
			
			return $this->_resourcePicture;
		}
		
		/**
		 * returns true if the user has selected a picture previously
		 *
		 *Ê@return a boolean value, true if there is a picture or false otherwise
		 */
		function hasPicture()
		{
			return( $this->_resourcePictureId != 0 && $this->_resourcePictureId != "" && $this->_loadPicture() != null );
		}
		
		/**
		 * @private
		 * loads the user picture. Returns a GalleryObject if successful or false otherwise
		 */
		function _loadPicture()
		{
			include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
			$resources = new GalleryResources();
			$picture = $resources->getResource( $this->_resourcePictureId );
			
			if( !$picture ) 
				$this->_resourcePicture = null;
			else 
				$this->_resourcePicture = $picture;
				
			return( $this->_resourcePicture );
		}
		
		/**
		 * returns the status of the blog
		 *
		 * @return the current status of the blog
		 */
		function getStatus()
		{
			return( $this->_status );
		}
		
		/**
		 * sets the current status of the blog
		 *
		 * @param status
		 * @return always true
		 */
		function setStatus( $status )
		{
			$this->_status = $status;
			
			return true;	
		}		
	}
?>
