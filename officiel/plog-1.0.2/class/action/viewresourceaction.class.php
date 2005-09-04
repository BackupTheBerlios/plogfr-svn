<?php

	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );

	define( "VIEW_RESOURCE_TEMPLATE", "resource" );

    /**
     * \ingroup Action
     * @private
     *
     * This class shows a resource and its information
     */
	class ViewResourceAction extends BlogAction
    {

        var $_resourceId;
		var $_albumId;
		var $_albumName;
		var $_resourceName;

		function ViewResourceAction( $actionInfo, $request )
        {
			$this->BlogAction( $actionInfo, $request );
        }

        // checks that the articleId is valid
        function validate()
        {
        	$this->_resourceId = $this->_request->getValue( "resId" );
            $this->_resourceName = $this->_request->getValue( "resource" );
			$this->_albumId = $this->_request->getValue( "albumId" );
			$this->_albumName = $this->_request->getValue( "albumName" );
            
            if( $this->_resourceName == "" ) {
            	$validator = new IntegerValidator();
                // if the information is not correct, we better show a message and quit
                if( !$validator->validate( $this->_resourceId )) {
                	$this->_view = new ErrorView( $this->_blogInfo, "error_incorrect_resource_id" );
                    $this->setCommonData();

                    return false;
                }
            }
			
			// if no album id parameter in the url, forget about the whole thing
			if( $this->_albumId == "" && $this->_albumName == "")
				$this->_albumId = -1;

            return true;
        }

        function perform()
        {
        	$galleryResources = new GalleryResources();
			$galleryAlbums = new GalleryAlbums();
			
			// initialize the view
            $this->_view = new BlogView( $this->_blogInfo,
										 VIEW_RESOURCE_TEMPLATE,
										 SMARTY_VIEW_CACHE_CHECK,
										 Array( "resourceId" => $this->_resourceId,
										        "resourceName" => $this->_resourceName, 
										        "albumName" => $this->_albumName,
										        "albumId" => $this->_albumId ));
			// if it's cached, do nothing
			if( $this->_view->isCached()) {
				return true;
			}
			
			// otherwise continue as normal...
			
			// try to find the album to which this resource belongs
			if( $this->_albumName ) {
				$album = $galleryAlbums->getAlbumByName( $this->_albumName, $this->_blogInfo->getId(), false, false);
				if( !$album ) {
					$this->_view = new ErrorView( $this->_blogInfo );
					$this->_view->setValue( "message", "error_fetching_resource" );
					$this->setCommonData();
					return false;
				}
				$this->_albumId = $album->getId();				
			}

            // fetch the album we're trying to browse
            if( $this->_resourceName != "" ) {
            	$resource = $galleryResources->getResourceFile( $this->_blogInfo->getId(), $this->_resourceName, $this->_albumId );
            }
            else {
            	$resource = $galleryResources->getResource( $this->_resourceId, $this->_blogInfo->getId(), $this->_albumId );
            }

            // check if the album was correctly fetched
            if( !$resource ) {
            	$this->_view = new ErrorView( $this->_blogInfo );
                $this->_view->setValue( "message", "error_fetching_resource" );
                $this->setCommonData();

                return false;
            }

            // if all went fine, continue loading the next and previous resources so that
			// navigation can be made easier...
			$nextResource = $galleryResources->getNextResource( $resource );
			$prevResource = $galleryResources->getPreviousResource( $resource );
			
			// generate events for all the resources we just loaded
			$this->notifyEvent( EVENT_RESOURCE_LOADED, Array( "resource" => &$resource ));
			if( $nextResource ) $this->notifyEvent( EVENT_RESOURCE_LOADED, Array( "resource" => &$nextResource )); 
			if( $prevResource ) $this->notifyEvent( EVENT_RESOURCE_LOADED, Array( "resource" => &$prevResource ));
            $this->_view->setValue( "resource", $resource );
			$this->_view->setValue( "prevresource", $prevResource );
			$this->_view->setValue( "nextresource", $nextResource );
            $this->setCommonData();

            // and return everything normal
            return true;
        }
    }
?>