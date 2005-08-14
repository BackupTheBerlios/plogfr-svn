<?php


	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/blogview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );

	define( "VIEW_ALBUMS_TEMPLATE", "albums" );
	define( "VIEW_ALBUM_TEMPLATE", "album" );

    /**
     * \ingroup Action
     * @private
     *
     * This class shows an album with resources
     */
	class ViewAlbumAction extends BlogAction
    {

        var $_albumId;

		function ViewAlbumAction( $actionInfo, $request )
        {
			$this->BlogAction( $actionInfo, $request );
        }

        // checks that the articleId is valid
        function validate()
        {
        	$this->_albumId = $this->_request->getValue( "albumId", 0 );
		$this->_albumName = $this->_request->getValue( "albumName" );
			
            return true;
        }

        function perform()
        {
        	$galleryResources = new GalleryResources();
            $galleryAlbums = new GalleryAlbums();

		$browseRootAlbum = ( $this->_albumId == 0 && $this->_albumName == "" ); 
			
			// check which template we should use
            if( $browseRootAlbum )
				$template = VIEW_ALBUMS_TEMPLATE;
            else
				$template = VIEW_ALBUM_TEMPLATE;
            
			// initialize the view and check if it was cached
			$this->_view = new BlogView( $this->_blogInfo, 
			                             $template, 
										 SMARTY_VIEW_CACHE_CHECK,
										 Array( "albumId" => $this->_albumId, "albumName" => $this->_albumName ));
			if( $this->_view->isCached()) {
				// nothing to do if it is cached!
				return true;
			}

            // fetch the album we're trying to browse
            if( $browseRootAlbum ) {
            	// fetch only the first level albums
                $blogAlbums = $galleryAlbums->getChildAlbums( 0, $this->_blogInfo->getId(), true );
				if( count($blogAlbums) == 0 ) {
					$this->_view = new ErrorView( $this->_blogInfo );
					$this->_view->setValue( "message", "error_no_albums_defined" );
				}
				else {
					$this->notifyEvent( EVENT_ALBUMS_LOADED, Array( "albums" => &$blogAlbums ));
					$this->_view->setValue( "albums", $blogAlbums );
				}
            }
            else {
            	// the third parameter is telling _not_ to fetch all those albums that have
                // been disabled and are not to be shown in the page when browsing the album
				if( $this->_albumName ) {
					$album = $galleryAlbums->getAlbumByName( $this->_albumName, $this->_blogInfo->getId(), true, true );
				}
				else {
					$album = $galleryAlbums->getAlbum( $this->_albumId, $this->_blogInfo->getId(), true, true );
				}				
                // check if the album was correctly fetched
                if( !$album ) {
                	$this->_view = new ErrorView( $this->_blogInfo );
                    $this->_view->setValue( "message", "error_fetching_album" );
                    $this->setCommonData();

                    return false;
                }
				$this->notifyEvent( EVENT_ALBUM_LOADED, Array( "album" => &$blogAlbum ));				
                // put the album to the template
                $this->_view->setValue( "album", $album );
            }

            // if all went fine, continue
            $this->setCommonData();
			
            // and return everything normal
            return true;
        }
    }
?>