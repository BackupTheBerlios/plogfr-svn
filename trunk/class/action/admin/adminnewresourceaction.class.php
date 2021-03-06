<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminnewresourceview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminnewalbumview.class.php" );	
    include_once( PLOG_CLASS_PATH."class/view/admin/adminerrorview.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresourcestorage.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Adds a new resource to an album
     */
    class AdminNewResourceAction extends AdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminNewResourceAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }
		
		function validate()
		{
			// check that all the folders are in place
			if( !GalleryResourceStorage::checkBaseStorageFolder()) {
				$this->_view = new AdminErrorView( $this->_blogInfo );
				$this->_view->setMessage( $this->_locale->tr("error_gallery_folder_missing" ));
				$this->setCommonData();
				
				return false;
			}
			
			return true;
		}

        /**
         * Carries out the specified action
         */
        function perform()
        {
            // check that we have at least one album where to put our pictures
            $albums = new GalleryAlbums();			
            if( $albums->getNumUserAlbums( $this->_blogInfo->getId()) == 0 ) {
            	$this->_view = new AdminNewAlbumView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_must_create_album_first"));
                $this->setCommonData();

            	return false;
            }

            // if all's fine, continue...
            $this->_view = new AdminNewResourceView( $this->_blogInfo );
            $this->setCommonData();
            $this->_view->setValue( "albums", $blogAlbums );

            // better to return true if everything fine
            return true;
        }
    }
?>
