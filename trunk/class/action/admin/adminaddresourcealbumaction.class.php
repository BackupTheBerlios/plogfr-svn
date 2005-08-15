<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminnewalbumview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminresourceslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Adds a new album
     */
    class AdminAddResourceAlbumAction extends AdminAction
    {

    	var $_albumName;
        var $_albumDescription;
        var $_parentId;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminAddResourceAlbumAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			// validation stuff
			$this->registerFieldValidator( "albumName", new StringValidator());
			$this->registerFieldValidator( "parentId", new IntegerValidator());
			$this->_form->registerField( "albumDescription" );
			$this->setValidationErrorView( new AdminNewAlbumView( $this->_blogInfo ));
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			// fetch our data
        	$this->_albumName = Textfilter::filterAllHTML($this->_request->getValue( "albumName" ));
            $this->_albumDescription = Textfilter::filterAllHTML($this->_request->getValue( "albumDescription" ));
            $this->_parentId = $this->_request->getValue( "parentId" );			
			
			// create the album
        	$albums = new GalleryAlbums();			
			$t = new Timestamp();
			$album = new GalleryAlbum( $this->_blogInfo->getId(), $this->_albumName, 
			                           $this->_albumDescription, 
									   GALLERY_RESOURCE_PREVIEW_AVAILABLE,
									   $this->_parentId, 
									   $t->getTimestamp(),
									   Array(),
									   true );
									   
			$this->notifyEvent( EVENT_PRE_ALBUM_ADD, Array( "album" => &$album ));
			// and add it to the database
            $result = $albums->addAlbum( $album );
           	$this->_view = new AdminResourcesListView( $this->_blogInfo, Array( "albumId" => $this->_parentId ));
            if( $result ) {
                $this->_view->setSuccessMessage( $this->_locale->pr( "album_added_ok", $album->getName()));
				$this->notifyEvent( EVENT_POST_ALBUM_ADD, Array( "album" => &$album ));								
				// clear the cache if everything went fine
				CacheControl::resetBlogCache( $this->_blogInfo->getId(), false );
            }
            else {
                $this->_view->setErrorMessage( $this->_locale->tr("error_adding_album" ) );
            }
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>