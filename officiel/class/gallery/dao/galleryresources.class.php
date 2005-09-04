<?php

	/**
	 * \defgroup Gallery
	 *
	 * The pLog Gallery module encapsulates all the logic necessary for:
	 *
	 * - Dealing with files and their places in disk
	 * - Dealing with albums, which are virtual groups of disks
	 * - Automatic generation of thumbnails and medium-sized thumbnails, according to our configuration
	 * - Automatic extraction of metadata from a set of supported formats. This is achieved
	 * via the getID3 library.
	 */

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/timestamp.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresource.class.php" );
    include_once( PLOG_CLASS_PATH."class/file/fileupload.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresourcestorage.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/getid3/getid3.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/galleryconstants.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/resizers/galleryresizer.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/uploadvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresourcequotas.class.php" );

    /**
	 * \ingroup Gallery
	 * 
     * database access for GalleryResource objects. Provides methods for adding, retrieving, updating and removing
	 * resources from the database
	 *
	 * @see Model
	 * @see GalleryResource 
     */
    class GalleryResources extends Model
    {
    	var $albums;

    	/**
         * maps extensions to resource types
         */
       var $_extensionToType = Array(
       	"jpg" => GALLERY_RESOURCE_IMAGE,
        "jpeg" => GALLERY_RESOURCE_IMAGE,
        "png" => GALLERY_RESOURCE_IMAGE,
        "gif" => GALLERY_RESOURCE_IMAGE,
        "bmp" => GALLERY_RESOURCE_IMAGE,
        "mp3" => GALLERY_RESOURCE_SOUND,
		"mp2" => GALLERY_RESOURCE_SOUND,
        "wav" => GALLERY_RESOURCE_SOUND,
        "au" => GALLERY_RESOURCE_SOUND,
		"aac" => GALLERY_RESOURCE_SOUND,
		"mp4" => GALLERY_RESOURCE_SOUND,
        "wma" => GALLERY_RESOURCE_SOUND,
		"ogg" => GALLERY_RESOURCE_SOUND,
		"mod" => GALLERY_RESOURCE_SOUND,
		"mid" => GALLERY_RESOURCE_SOUND,
		"midi" => GALLERY_RESOURCE_SOUND,
        "avi" => GALLERY_RESOURCE_VIDEO,
		"mpg" => GALLERY_RESOURCE_VIDEO,
		"mpeg" => GALLERY_RESOURCE_VIDEO,
        "wmv" => GALLERY_RESOURCE_VIDEO,
		//"asf" => GALLERY_RESOURCE_VIDEO,
        "mov" => GALLERY_RESOURCE_VIDEO,
        "divx" => GALLERY_RESOURCE_VIDEO,
		"rm" => GALLERY_RESOURCE_VIDEO,
		"swf" => GALLERY_RESOURCE_VIDEO,
		"qt" => GALLERY_RESOURCE_VIDEO,
        "pdf" => GALLERY_RESOURCE_DOCUMENT,
        "zip" => GALLERY_RESOURCE_ZIP
       );

    	function GalleryResources()
        {
        	$this->Model();

            $this->albums = new GalleryAlbums();
			
			//$this->_db->debug=true;
        }

        /**
         * Fetches GalleryResource objects from the database
         *
         * @param resourceId The id of the resource we'd like to fetch
		 * @param ownerId Optional, the id of the owner
		 * @param albumId Optional, the id of the album to which this resoruce should belong
         * @return Returns a GalleryResource object representing the resource
         */
        function getResource( $resourceId, $ownerId = -1, $albumId = -1 )
        {
        	$query = "SELECT id, owner_id, album_id, description,
        	          date, flags, resource_type, file_path, file_name,
        	          metadata, thumbnail_format
        	          FROM ".$this->getPrefix()."gallery_resources
                      WHERE id = $resourceId";
            if( $ownerId > 0 )
            	$query .= " AND owner_id = $ownerId";
			if( $albumId > 0 )
				$query .=" AND album_id = $albumId";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            if( $result->RecordCount() == 0 )
            	return false;

            $row = $result->FetchRow();
            $resource = $this->_fillResourceInformation( $row );
			
			return $resource;
        }
		
		/**
		 * given a resource id, tries to find the next one in the sequence
		 *
		 * @param resource A GalleryResource object that represents the resource whose next
		 * object we'd like to load
         * @return Returns a GalleryResource object representing the next resource, or false
		 * if there was no next resource
         */		 
		function getNextResource( $resource )
		{
			$prefix = $this->getPrefix();
			$albumId = $resource->getAlbumId();
			$date = $resource->getDate();
			$id = $resource->getId();
			$query = "SELECT id, owner_id, album_id, description,
        	                 date, flags, resource_type, file_path, file_name,
        	                 metadata, thumbnail_format 
        	          FROM {$prefix}gallery_resources 
			          WHERE album_id = '$albumId' AND date >= '$date' AND id > $id
					  ORDER BY date ASC,id ASC LIMIT 1";

			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
			if( $result->RecordCount() == 0 )
				return false;
				
			$row = $result->FetchRow();
			$resource = $this->_fillResourceInformation( $row );
			
			return $resource;
		}

		/**
		 * given a resource id, tries to find the previus one in the sequence
		 *
		 * @param resource A GalleryResource object that represents the resource whose next
		 * object we'd like to load
         * @return Returns a GalleryResource object representing the previous resource, or false
		 * if there was no previous resource
         */		 		
		function getPreviousResource( $resource )
		{
			$prefix = $this->getPrefix();
			$albumId = $resource->getAlbumId();
			$date = $resource->getDate();
			$id = $resource->getId();
			$query = "SELECT id, owner_id, album_id, description,
        	                 date, flags, resource_type, file_path, file_name,
        	                 metadata, thumbnail_format 
        	          FROM {$prefix}gallery_resources 
			          WHERE album_id = '$albumId' AND date <= '$date' AND id < $id
					  ORDER BY date DESC,id DESC LIMIT 1";

			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
			if( $result->RecordCount() == 0 )
				return false;
				
			$row = $result->FetchRow();
			$resource = $this->_fillResourceInformation( $row );
			
			return $resource;		
		}

        /**
         * Returns all the resources that belong to a blog
         *
         * @param blogId The blog to which the resources belong
         * @param albumId Filters by album
		 * @param page
		 * @param itemsPerPage
         * @return Returns an array of GalleryResource objects with all
         * the resources that match the given conditions, or empty
         * if none could be found.
         */
        function getUserResources( $ownerId, $albumId = GALLERY_NO_ALBUM, $resourceType = GALLERY_RESOURCE_ANY, $page = DEFAULT_PAGING_ENABLED, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
        {
        	$query = "SELECT id, owner_id, album_id, description,
        	                 date, flags, resource_type, file_path, file_name,
        	                 metadata, thumbnail_format 
        	          FROM ".$this->getPrefix()."gallery_resources
                      WHERE owner_id = '".Db::qstr($ownerId)."'";
            if( $albumId > GALLERY_NO_ALBUM )
            	$query .= " AND album_id = '".Db::qstr($albumId)."'";
			if( $resourceType > GALLERY_RESOURCE_ANY )
				$query .= " AND resource_type = '".Db::qstr($resourceType)."'";


			$query .= " ORDER BY album_id, date ASC";

            $result = $this->Execute( $query, $page, $itemsPerPage );

            if( !$result )
            	return Array();

            $resources = Array();
            while( $row = $result->FetchRow()) {
				$res = new GalleryResource( $row["owner_id"],
											$row["album_id"],
											$row["description"],
											$row["flags"],
											$row["resource_type"],
											$row["file_path"],
											$row["file_name"],
											unserialize($row["metadata"]),
											$row["date"],
											$row["thumbnail_format"],
											$row["id"] );

				// we should also try to get some information about
				// to which album this resource belongs
				if( $albumId != GALLERY_NO_ALBUM ) {
					// since we're loading all the resources of the same album, it makes no sense
					// to load the same album every time... so let's load the album only on the first
					// try and then use the "cached" version
					if( $album == null ) {
						$album = $this->albums->getAlbum( $row["album_id"], $row["owner_id"], false );
					}
					$res->setAlbum( $album );
				}
				else {
					$resAlbum = $this->albums->getAlbum( $row["album_id"], $row["owner_id"], false );
					$res->setAlbum( $resAlbum );
				}
				
				array_push( $resources, $res );
            }

            return $resources;
        }
		
		/**
		 * returns the number of items given certain conditions
		 *
		 * @param ownerId The id of the user whose amount of albums we'd like to check
		 * @param albumId Optional, the id of the album, in case we'd only like to know the number of resources in a certain album.
		 * use the constant GALLERY_NO_ALBUM to disable this parameter
		 * @param resourceType An additional filter parameter, so that we can only count a certain type of resources.
		 * Defaults to the constant GALLERY_RESOURCE_ANY
		 * @see getUserResources
		 * @return the total number of items
		 */
		function getNumUserResources( $ownerId, $albumId = GALLERY_NO_ALBUM, $resourceType = GALLEY_RESOURCE_ANY )
		{
			$prefix = $this->getPrefix();
			$table  = "{$prefix}gallery_resources";
            if( $albumId > GALLERY_NO_ALBUM )
            	$cond .= "album_id = '".Db::qstr($albumId)."'";
			if( $resourceType > GALLERY_RESOURCE_ANY )
				$cond .= " AND resource_type = '".Db::qstr($resourceType)."'";
				
			// return the number of items
			return( $this->getNumItems( $table, $cond ));
		}

		/**
		 * Adds a row related to a resource to the database. You should usually use
		 * GalleryResources::addResource() or GalleryResources::addResourceFromDisk(), which are more
		 * suitable and will do most of the job for you.
		 *
		 * @param ownerId
		 * @param albumId
		 * @param description
		 * @param flags
		 * @param resourceType
		 * @param filePath
		 * @param fileName
		 * @param metadata
		 * @return a valid resource id or false otherwise
		 * @see addResource
		 */
		function addResourceToDatabase( $ownerId, $albumId, $description, $flags, $resourceType, 
											$filePath, $fileName, $metadata )
		{
			// prepare the metadata to be stored in the db
			$serMetadata = Db::qstr( serialize($metadata));
			// get the correct thumbnail format
			$config =& Config::getConfig();
			$thumbnailFormat = $config->getValue( "thumbnail_format" );
			// prepare some other stuff
			$tf = new Textfilter();
			$normalizedDescription = $tf->normalizeText( $description );

			// finally put the query together and execute it
			$query = "INSERT INTO ".$this->getPrefix()."gallery_resources(
						  owner_id, album_id, description, flags, resource_type,
						  file_path, file_name, metadata, thumbnail_format, normalized_description) VALUES (
						  $ownerId, $albumId, '".Db::qstr($description)."', $flags, $resourceType,
						  '$filePath', '$fileName', '$serMetadata', '$thumbnailFormat',
				  '".Db::qstr($normalizedDescription)."');";	
						  
			$result = $this->Execute( $query );

			// check the return result
			if( !$result )
				return GALLERY_ERROR_ADDING_RESOURCE;		

			// get the id that was given to the record
			$resourceId = $this->_db->Insert_ID();

			// check if we have two resources with the same filename now
			// check if there already exists a file with the same name
			//
			// if that's the case, then we should rename the one we just
			// added with some random prefix, to make it different from the
			// other one...
			if( $this->isDuplicatedFilename( $fileName )) {
				$query = "UPDATE ".$this->getPrefix()."gallery_resources
						  SET file_name = '$resourceId-$fileName'
						  WHERE id = $resourceId";

				$this->Execute( $query );

			}
		
			return $resourceId;	
		}

		/**
		 * generates the thumbnail of a file that we have just added.
		 *
		 * @param resFile the resource file from which we're trying to generate the
		 * thubmail.
		 * @param fileName The name and path of the new thumbnail we're going to create
		 */
		function generateResourceThumbnail( $resFile, $resourceId, $ownerId )
		{
			// get some configuration settings regarding the size of the
			// thumbnails, and also the default format for thumbnails
			$config =& Config::getConfig();
			$previewHeight = $config->getValue( "thumbnail_height", GALLERY_DEFAULT_THUMBNAIL_HEIGHT );
			$previewWidth  = $config->getValue( "thumbnail_width", GALLERY_DEFAULT_THUMBNAIL_WIDTH );
			$previewKeepAspectRatio = $config->getValue( "thumbnails_keep_aspect_ratio" );
			
			// get the file extension
			$fileParts = explode( ".", $resFile );
			$fileExt = strtolower($fileParts[count($fileParts)-1]);
			$fileName = $ownerId."-".$resourceId.".".$fileExt;
			
			// and start the resizing process
			$resizer = new GalleryResizer( $resFile );
			GalleryResourceStorage::checkPreviewsStorageFolder( $ownerId );
			$outFile = GalleryResourceStorage::getPreviewsFolder( $ownerId ).$fileName;
			
			// and finally, we can generate the preview!
			$result = $resizer->generate( $outFile, $previewHeight, $previewWidth, $previewKeepAspectRatio );
			
			return $result;
		}
		
		/**
		 * generates the medium-sized thumbnail of a file that we have just added
		 *
		 * @param resFile the resource file from which we're trying to generate the
		 * thubmail.
		 * @param fileName The name and path of the new thumbnail we're going to create
		 */
		function generateResourceMediumSizeThumbnail( $resFile, $resourceId, $ownerId )
		{
			// get some configuration settings regarding the size of the
			// thumbnails, and also the default format for thumbnails
			$config =& Config::getConfig();
			$previewHeight = $config->getValue( "medium_size_thumbnail_height", GALLERY_DEFAULT_MEDIUM_SIZE_THUMBNAIL_HEIGHT );
			$previewWidth  = $config->getValue( "medium_size_thumbnail_width", GALLERY_DEFAULT_MEDIUM_SIZE_THUMBNAIL_WIDTH );
			$previewKeepAspectRatio = $config->getValue( "thumbnails_keep_aspect_ratio" );
			
			// get the file extension
			$fileParts = explode( ".", $resFile );
			$fileExt = strtolower($fileParts[count($fileParts)-1]);
			$fileName = $ownerId."-".$resourceId.".".$fileExt;
			
			// and start the resizing process
			$resizer = new GalleryResizer( $resFile );
			GalleryResourceStorage::checkMediumSizePreviewsStorageFolder( $ownerId );
			$outFile = GalleryResourceStorage::getMediumSizePreviewsFolder( $ownerId ).$fileName;
			
			// and finally, we can generate the preview!
			$result = $resizer->generate( $outFile, $previewWidth, $previewHeight, $previewKeepAspectRatio );
			
			return $result;
		}
		
		/**
		 * @private
		 * @param fileName
		 * @param metadata
		 */
		function _getResourceType( $fileName, &$metadata )
		{
  			// find out the right resource type based on the extension
			// get the resource type
			$fileParts = explode( ".", $fileName );
			$fileExt = strtolower($fileParts[count($fileParts)-1]);
			
			//asf need special working
			if ("asf" == $fileExt ){			 
                if (!($metadata["audio"]["codec"]))                            
                    $resourceType = GALLERY_RESOURCE_SOUND;
                else 
                    $resourceType = GALLERY_RESOURCE_VIDEO;
             }           
 		     else {
    			if( array_key_exists( $fileExt, $this->_extensionToType ))
	   			     $resourceType = $this->_extensionToType[ $fileExt ];
		  	   else
				    $resourceType = GALLERY_RESOURCE_UNKNOWN;
            }
            
            return( $resourceType );					
		}

        /**
         * adds a resource to the database. This method requires a FileUpload parameter and it
		 * will take care of processing the upload file and so on. If the file is already in disk and we'd
		 * like to add it, please check GalleryResources::addResourceFromDisk()
		 * This method will also take care of extracting the metadata from the file and generating the
		 * thumbnail in the required format, according to our configuration.
		 *
		 * @param ownerId
		 * @param albumId
		 * @param description
		 * @param upload A FileUpload object
		 * @see FileUpload
		 * @see GalleryResources::addResourceFromDisk()
		 * @return It will return one of the following constants:
		 * - GALLERY_ERROR_RESOURCE_TOO_BIG
		 * - GALLERY_ERROR_RESOURCE_FORBIDDEN_EXTENSION
		 * - GALLERY_ERROR_QUOTA_EXCEEDED
		 * - GALLERY_ERROR_ADDING_RESOURCE
		 * - GALLERY_ERROR_UPLOADS_NOT_ENABLED
		 * or the identifier of the resource that was just added if the operation succeeded.
         */
        function addResource( $ownerId, $albumId, $description, $upload )
        {
            // check if quotas are enabled, and if this file would make us go
            // over the quota
            if( GalleryResourceQuotas::isBlogOverResourceQuota( $ownerId, $upload->getSize())) {
                return GALLERY_ERROR_QUOTA_EXCEEDED;
            }
			
            // first of all, validate the file using the
            // upload validator class. It can return
            // UPLOAD_VALIDATOR_ERROR_UPLOAD_TOO_BIG (-1)
            // or
            // UPLOAD_VALIDATOR_ERROR_FORBIDDEN_EXTENSION (-2)
            // in case the file is not valid.
            $uploadValidator = new UploadValidator();
            $error = $uploadValidator->validate( $upload );
            if( $error < 0 )
                return $error;
            
            // get the metadata
            $getId3 = new GetID3();
            $metadata = $getId3->analyze( $upload->getTmpName());
            // nifty helper method from the getid3 package
            getid3_lib::CopyTagsToComments($metadata);            
            
            $resourceType = $this->_getResourceType( $upload->getFileName(), $metadata );
            
            // set the flags
            $flags = 0;
            if( $resourceType == GALLERY_RESOURCE_IMAGE )
                $flags = $flags|GALLERY_RESOURCE_PREVIEW_AVAILABLE;
                
            $info = $this->_filterMetadata( $metadata, $resourceType );               
      		
            // add the record to the database
            $fileName = $upload->getFileName();
			$resourceId = $this->addResourceToDatabase( $ownerId, $albumId, $description, $flags, $resourceType, $filePath, $fileName, $info );
			if( !$resourceId )
				return false;
			
            // and finally move the file to the right place in disk
            // move the file to disk
            $storage = new GalleryResourceStorage();
            $resFile = $storage->storeUpload( $resourceId, $ownerId, $upload );
            
            // if the file cannot be read, we will also remove the record from the
            // database so that we don't screw up
            $fileReadable = File::isReadable( $resFile );
			
            if( !$resFile || $resFile < 0 || !$fileReadable ) {
                // if something went wrong, we should not keep the record in the db
                $query = "DELETE FROM ".$this->getPrefix()."gallery_resources WHERE id = $resourceId";
                $this->Execute( $query );
                return $resFile;
            }
			
            // and finally, we can generate the thumbnail only if the file is an image, of course :)
            if( $resourceType == GALLERY_RESOURCE_IMAGE ) {
                $this->generateResourceThumbnail( $resFile, $resourceId, $ownerId );
				$this->generateResourceMediumSizeThumbnail( $resFile, $resourceId, $ownerId );
            }
			
            // return the id of the resource we just added
            return $resourceId;
        }
        
        /**
         * @private
         * Returns an array with only those bits of metadata as generate by getid3 that
         * we'd like to keep, instead of one huge array
         *
         * @param metadata
         * @param resourceType
         */
        function _filterMetadata( &$metadata, $resourceType ) 
        {
            $info = Array();
            $info["md5_file"] = $metadata["md5_file"];
            $info["md5_data"] = $metadata["md5_data"];
            $info["filesize"]= $metadata["filesize"];
            $info["fileformat"] = $metadata["fileformat"]; 
            $info["comments"] = $metadata["comments"];
                        
            if($resourceType == GALLERY_RESOURCE_IMAGE){
                $info["video"] = $metadata["video"];
                $info["jpg"]["exif"]["FILE"] = $metadata["jpg"]["exif"]["FILE"];
                $info["jpg"]["exif"]["COMPUTED"] = $metadata["jpg"]["exif"]["COMPUTED"];
                $info["jpg"]["exif"]["IFD0"] = $metadata["jpg"]["exif"]["IFD0"];
                $metadata["jpg"]["exif"]["EXIF"]["MakerNote"] = "";
                $info["jpg"]["exif"]["EXIF"] = $metadata["jpg"]["exif"]["EXIF"];
             }  
             else  if($resourceType == GALLERY_RESOURCE_SOUND){
                $info["audio"] = $metadata["audio"];
                $info["playtime_string"] = $metadata["playtime_string"];
                $info["playtime_seconds"] = $metadata["playtime_seconds"];
             }   
             else  if($resourceType == GALLERY_RESOURCE_VIDEO){
                $info["video"] = $metadata["video"];
                $info["audio"] = $metadata["audio"];
                $info["playtime_seconds"] = $metadata["playtime_seconds"];                
                $info["playtime_string"] = $metadata["playtime_string"];                
             }
             else if( $resourceType == GALLERY_RESOURCE_ZIP ) {
                $info["zip"]["compressed_size"] = $metadata["zip"]["compressed_size"];
                $info["zip"]["uncompressed_size"] = $metadata["zip"]["uncompressed_size"];
                $info["zip"]["entries_count"] = $metadata["zip"]["entries_count"];
                $info["zip"]["copmression_method"] = $metadata["zip"]["copmression_method"];
                $info["zip"]["compression_speed"] = $metadata["zip"]["compression_speed"];
             }
             
             return( $info );            
        }
        
        /**
         * adds a resource to the gallery when the resource is already stored on disk, instead of
         * it coming from an upload as it usually happens. This method is better than 
		 * GalleryResources::addResource() when instead of dealing with uploaded files, the file
		 * is already in disk and all that is left to do is to add it to the database.
         *
         * @param ownerId
         * @param albumId
         * @param description
         * @param fullFilePath The real path where the file is stored. This is expected to be
		 * its final and permanent destination
		 * @return It will return one of the following constants:
		 * - GALLERY_ERROR_RESOURCE_TOO_BIG
		 * - GALLERY_ERROR_RESOURCE_FORBIDDEN_EXTENSION
		 * - GALLERY_ERROR_QUOTA_EXCEEDED
		 * - GALLERY_ERROR_ADDING_RESOURCE
		 * - GALLERY_ERROR_UPLOADS_NOT_ENABLED
		 * or the identifier of the resource that was just added if the operation succeeded.
         */
        function addResourceFromDisk( $ownerId, $albumId, $description, $fullFilePath )
        {
            // check if quotas are enabled, and if this file would make us go
            // over the quota
            if( GalleryResourceQuotas::isBlogOverResourceQuota( $ownerId, File::getSize( $fullFilePath ))) {
                return GALLERY_ERROR_QUOTA_EXCEEDED;
            }
            
            $fileName = basename( $fullFilePath );
            $filePath = dirname( $fullFilePath );
        
            // get the metadata
            $getId3 = new GetID3();
            $metadata = $getId3->analyze( $fullFilePath );
            // nifty helper method from the getid3 package
            getid3_lib::CopyTagsToComments($metadata);                      
    
            $resourceType = $this->_getResourceType( $fullFilePath, $metadata );
            $info = $this->_filterMetadata( $metadata, $resourceType );            		
			    
            // set the flags
            $flags = 0;
            if( $resourceType == GALLERY_RESOURCE_IMAGE )
                $flags = $flags|GALLERY_RESOURCE_PREVIEW_AVAILABLE;
    
            // add the record to the database            
            $resourceId = $this->addResourceToDatabase( $ownerId, $albumId, $description, $flags, $resourceType, 
                                                        $filePath, $fileName, $metadata );
            if( !$resourceId )
                return false;
    
            // and finally move the file to the right place in disk
            // move the file to disk
            $storage = new GalleryResourceStorage();
            $resFile = $storage->storeFile( $resourceId, $ownerId, $fullFilePath,
                                            RESOURCE_STORAGE_STORE_MOVE );
            
            // if the file cannot be read, we will also remove the record from the
            // database so that we don't screw up
            $fileReadable = File::isReadable( $resFile );
            if( !$resFile || $resFile < 0 || !$fileReadable ) {
                // if something went wrong, we should not keep the record in the db
                $query = "DELETE FROM ".$this->getPrefix()."gallery_resources
                          WHERE id = $resourceId";
    
                $this->Execute( $query );
                
                return $resFile;
            }
    
            // and finally, we can generate the thumbnail only if the file is an image, of course :)
            if( $resourceType == GALLERY_RESOURCE_IMAGE ) {
                $this->generateResourceThumbnail( $resFile, $resourceId, $ownerId );
            }
            
            // return the id of the resource we just added
            return $resourceId;        
        }

        /**
         * retrieves a resource, given its filename and its owner
         *
         * @param ownerId
         * @param fileName
         * @return Returns a GalleryResource object containing the given resource
         * or false if the resource doesn't exist.
         */
        function getResourceFile( $ownerId, $fileName, $albumId = -1 )
        {
        	$query = "SELECT id, owner_id, album_id, description,
        	          date, flags, resource_type, file_path, file_name,
        	          metadata, thumbnail_format 
        	          FROM ".$this->getPrefix()."gallery_resources
                      WHERE owner_id = $ownerId AND
                      file_name = '$fileName'";
					  
			if( $albumId > 0 )
				$query .= " AND album_id = $albumId";

            $result = $this->Execute( $query );
            if( !$result )
            	return false;

            if( $result->RecordCount() == 0 )
            	return false;

            $row = $result->FetchRow();

            return $this->_fillResourceInformation( $row );
        }

        /**
         * updates a resource in the database.
         *
         * @param resource A GalleryResource object with the information of the
         * resource we'd like to update.
		 * @return Returns true if successful or false otherwise
         */
        function updateResource( $resource ) 
        {
            $tf = new TextFilter();
        	$query = "UPDATE ".$this->getPrefix()."gallery_resources
                      SET album_id = ".$resource->getAlbumId().",
                      description = '".Db::qstr($resource->getDescription())."',
                      flags = ".$resource->getFlags().",
                      resource_type = ".$resource->getResourceType().",
                      file_path = '".$resource->getFilePath()."',
                      file_name = '".$resource->getFileName()."',
                      metadata = '".Db::qstr(serialize($resource->getMetadata()))."',
					  thumbnail_format ='".$resource->getThumbnailFormat()."',
                      date = '".$resource->getDate()."',
                      normalized_description = '".Db::qstr($tf->normalizeText( $resource->getDescription()))."'
                      WHERE id = ".$resource->getId();

            $result = $this->Execute( $query );

            if( !$result )
            	return false;
            else
            	return true;
        }

        /**
         * removes a resource from the database and disk
         *
         * @param resourceId The identifier of the resource we'd like to remove
         * @param ownerId Identifier of the owner of the resource. Optional.
         * @return Returns true if resource deleted ok or false otherwise.
         */
        function deleteResource( $resourceId, $ownerId = -1 )
        {
        	// first, get informaiton abotu the resource
            $resource = $this->getResource( $resourceId, $ownerId );

            // now, remove it from the db
            $query = "DELETE FROM ".$this->getPrefix()."gallery_resources
                      WHERE id = $resourceId";
            if( $ownerId > 0 )
            	$query .= " AND owner_id = $ownerId";

            $result = $this->Execute( $query );

            // if there was an error, we quit here
            if( !$result )
            	return false;

            // otherwise, proceed and remove the file from disk
            $storage = new GalleryResourceStorage();
            return $storage->remove( $resource );
        }

		/**
		 * returns true if the given filename already exists in the db
		 *
		 * @param fileName
		 * @return true if the filename already exists or false otherwise
		 */
        function isDuplicatedFilename( $fileName )
        {
        	$query = "SELECT COUNT(*) AS total FROM ".$this->getPrefix()."gallery_resources
                      WHERE file_name = '$fileName'";

            $result = $this->Execute( $query );

            $row = $result->FetchRow();
            if( $row["total"] == 0 || $row["total"] == 1 )
            	return false;
            else
            	return true;
        }
		
		/**
		 * Returns the total number of resources of the given blog
		 *
		 * @param userId
		 * @param albumId
		 * @return The number of total resources
		 */
		function getNumResources( $userId, $albumId = -1 )
		{
			$query = "SELECT COUNT(*) AS total FROM ".$this->getPrefix()."gallery_resources
			          WHERE owner_id = $userId";
			if( $albumId > 0 )
				$query .= " AND album_id = $albumId";
				
			$result = $this->Execute( $query );
			
			if( !$result )
				return 0;
				
			$row = $result->FetchRow();
			return $row["total"];
		}
		
        /**
         * @private
         */
        function _fillResourceInformation( $row )
        {
        	$res = new GalleryResource( $row["owner_id"],
                                        $row["album_id"],
                                        $row["description"],
                                        $row["flags"],
                                        $row["resource_type"],
                                        $row["file_path"],
                                        $row["file_name"],
                                        unserialize($row["metadata"]),
                                        $row["date"],
										$row["thumbnail_format"],
                                        $row["id"] );

             // we should also try to get some information about
             // to which album this resource belongs
             $album = $this->albums->getAlbum( $row["album_id"], $row["owner_id"], false );
             $res->setAlbum( $album );
              // print_r(unserialize($row["metadata"]));

             return $res;
        }
    }
?>
