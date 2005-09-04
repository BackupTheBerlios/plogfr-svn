<?php

	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );

	/**
	 * obtains combined lists of albums and resources, so that it can be properly
	 * shown in the view
	 */
	class GalleryItemsList extends Object
	{
		
		function GalleryItemsList()
		{
			$this->Object();
		}

		function getGalleryItems( $ownerId, $albumId = GALLERY_NO_ALBUM, $resourceType = GALLEY_RESOURCE_ANY, $page = DEFAULT_PAGING_ENABLED, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
		{
			// initialize the objects that we're going to use to get our data
			$albums = new GalleryAlbums();
			$resources = new GalleryResources();

		}

		function getNumGalleryItems( $ownerId, $albumId = GALLERY_NO_ALBUM, $resourceType = GALLEY_RESOURCE_ANY, $page = DEFAULT_PAGING_ENABLED, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
		{

		}
	}
?>