<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admineditresourcealbumview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminresourceslistview.class.php" );	
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Shows information about a resource
     */
    class AdminUpdateResourceAlbumAction extends AdminAction
    {

    	var $_albumId;
        var $_albumName;
        var $_albumDescription;
        var $_parentId;
        var $_showAlbum;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminUpdateResourceAlbumAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "albumId", new IntegerValidator());
			$this->registerFieldValidator( "albumName", new StringValidator());
			$this->registerFieldValidator( "parentId", new IntegerValidator());
			$this->registerField( "albumDescription" );
			$this->registerField( "showAlbum" );
			$view = new AdminEditResourceAlbumView( $this->_blogInfo, "editresourcealbum" );
			$view->setErrorMessage( $this->_locale->tr("error_updating_album" ));
			$this->setValidationErrorView( $view );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	$this->_albumId = $this->_request->getValue( "albumId" );
        	$this->_parentId = $this->_request->getValue( "parentId" );
            $this->_albumName = Textfilter::filterAllHTML($this->_request->getValue( "albumName" ));			
            $this->_albumDescription = Textfilter::filterAllHTML($this->_request->getValue( "albumDescription" ));
            $this->_showAlbum = $this->_request->getValue( "showAlbum" );
            if( $this->_showAlbum == "" )
            	$this->_showAlbum = 0;			
		
            // fetch the albums for this blog
            $albums = new GalleryAlbums();
            $album = $albums->getAlbum( $this->_albumId, $this->_blogInfo->getId());

            if( !$album ) {
            	$this->_view = new AdminResourcesListView( $this->_blogInfo );( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_album" ) );
                $this->setCommonData();

                return false;
            }

            // update the fields in the object
            $album->setName( $this->_albumName );
            $album->setDescription( $this->_albumDescription );
            $album->setParentId( $this->_parentId );
            $album->setShowAlbum( $this->_showAlbum );
			
			$this->notifyEvent( EVENT_PRE_ALBUM_UPDATE, Array( "album" => &$album ));
            // and update the data in the database
            if( !$albums->updateAlbum( $album )) {
            	$this->_view = new AdminResourcesListView( $this->_blogInfo );( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_updating_album" ) );
            	$this->setCommonData();

                return false;
            }

            $this->_view = new AdminResourcesListView( $this->_blogInfo );
            $this->_view->setSuccessMessage( $this->_locale->pr("album_updated_ok", $album->getName()));
			$this->notifyEvent( EVENT_POST_ALBUM_UPDATE, Array( "album" => &$album ));			
            $this->setCommonData();
			
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId(), false );

            // better to return true if everything fine
            return true;
        }
    }
?>
