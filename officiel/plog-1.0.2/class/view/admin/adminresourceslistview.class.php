<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );	
	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresourcequotas.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );
	
	define( "ROOT_ALBUM_ID", 0 );
	
    /**
     * \ingroup View
     * @private
     *	
	 * lists the resources
	 */
	class AdminResourcesListView extends AdminTemplatedView
	{
		var $_albumId;
		var $_page;
		var $_resourceType;

	
		function AdminResourcesListView( $blogInfo, $params = Array())
		{
			$this->AdminTemplatedView( $blogInfo, "resources" );
			
			// fetch and save the albumId parameter in the request, if not available as a
			// constructor parameter
			$this->_albumId = $params["albumId"];
			if( $this->_albumId == "" ) 
				$this->_albumId = $this->getSessionValue( "albumId", ROOT_ALBUM_ID );

			// in case we didn't get any album id at all!
			if( $this->_albumId == "" )
				$this->_albumId = ROOT_ALBUM_ID;
				
			$this->setSessionValue( "albumId", $this->_albumId );

			$this->_resourceType = GALLERY_RESOURCE_ANY;

			// base url for the pager so that it can be changed by parent classes
			// such as AdminSimpleResourcesListView
			$this->_pagerUrl = "?op=resources&amp;albumId=".$this->_albumId."&amp;page=";
		}
		
		function render()
		{
			// get the page from the request
			$this->_page = $this->getCurrentPageFromRequest();

	        	// and the current album
        		$galleryAlbums = new GalleryAlbums();
			$galleryResources = new GalleryResources();

			if( $this->_albumId > ROOT_ALBUM_ID && $this->_page > 0 ) {
        	    		$album = $galleryAlbums->getAlbum( $this->_albumId, $this->_blogInfo->getId());
				if( !$album || $album == "") {
					$this->_albumId = ROOT_ALBUM_ID;
				}
				else {
					//$resources = $album->getResources();
					$resources = $galleryResources->getUserResources( $this->_blogInfo->getId(), $this->_albumId, $this->_resourceType, $this->_page, DEFAULT_ITEMS_PER_PAGE );
					$numResources = $galleryResources->getNumUserResources( $this->_blogInfo->getId(), $this->_albumId, $this->_resourceType );
				}
			}
			else {
				$albums = $galleryAlbums->getChildAlbums( $this->_albumId, $this->_blogInfo->getId());
				$resources = Array();
			}
			
			// get a list with the nested albums
			$userAlbums = $galleryAlbums->getNestedAlbumList( $this->_blogInfo->getId());
			
			// event about the albums we just loaded
			$this->notifyEvent( EVENT_ALBUMS_LOADED, Array( "albums" => &$userAlbums ));
			
			$this->setValue( "albumsList", $userAlbums );

			// fetch some statistics and continue
			$quotaUsage = GalleryResourceQuotas::getBlogResourceQuotaUsage( $this->_blogInfo->getId());
			$totalResources = $galleryResources->getNumResources( $this->_blogInfo->getId());
			$currentQuota = GalleryResourceQuotas::getBlogResourceQuota( $this->_blogInfo->getId());
			$this->setValue( "quotausage", $quotaUsage );
			$this->setValue( "totalresources", $totalResources );
			$this->setValue( "quota", $currentQuota );

			// and now export info about the albums and so on but only 
			// if we're browsing the first page only (albums do not appear anymore after the first page)
            $this->setValue( "album", $album );
			if( $this->_albumId > ROOT_ALBUM_ID && $this->_page < 2 )
				$this->setValue( "albums", $album->getChildren());
			else
				$this->setValue( "albums", $albums );
	        
			// event about the resources
			$this->notifyEvent( EVENT_RESOURCES_LOADED, Array ( "resources" => &$resources ));
			$this->setValue( "resources", $resources );

			// finally, create and export the pager
			$pager = new Pager( $this->_pagerUrl, $this->_page, $numResources, DEFAULT_ITEMS_PER_PAGE );
			$this->setValue( "pager", $pager );
			
			parent::render();
		}
	}
?>