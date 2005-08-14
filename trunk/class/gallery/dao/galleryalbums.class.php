<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/timestamp.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbum.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );

    /**
	 * \ingroup Gallery
	 *
     * Database access for GalleryAlbum objects.
	 *
	 * Please keep in mind that in the context of this library, every album has to have an user who
	 * owns it. When this library is used within pLog, users don't own albums but blogs do so we will
	 * use blog identifier instead of user identifiers. The reason for this change on how things are
	 * called was that this library can also be used outside pLog, and outside pLog we will most likely
	 * not have blogs but users.
	 *
	 * @see GalleryAlbum
	 * @see Model
     */
    class GalleryAlbums extends Model
    {

    	var $_childAlbums;
        var $resources;
		var $_counts;

		/**
		 * Constructor. Calls the Model constructor and does nothing more.
		 */
    	function GalleryAlbums()
        {
        	$this->Model();
            $this->_childAlbums = Array();
			// to speed up things a bit...
			$this->_counts = null;
        }

        /**
         * Returns an array with all the albums that belong to the given
         * owner
         *
         * @param ownerId The identifier of the owner whose albums we'd like to fetch
         * @param onlyShownAlbums Returns only those albums that have the show_album
         * field set to true, or all of them otherwise
		 * @param page The page we'd like to see
		 * @param itemsPerPage number of items per page
		 * @return An array containing GalleryAlbum objects, representing the
         * albums we fetched from the db.
         */
        function getUserAlbums( $ownerId, $onlyShownAlbums = false, $page = DEFAULT_PAGING_ENABLED, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
        {
        	$query = "SELECT id, owner_id, description,
        	                 name, flags, parent_id,
        	                 date, properties, show_album
        	          FROM ".$this->getPrefix()."gallery_albums WHERE owner_id = $ownerId";
            if( $onlyShownAlbums )
            	$query .=" AND show_album = 1";

            return $this->_getAlbumsFromQuery( $query, $page, $itemsPerPage );
        }

		/**
		 * Returns a specific album from the database.
		 *
		 * @param id A valid album identifier.
		 * @param ownerId (optional) The album should have the given id _and_ it should
		 * belong to the given user.
		 * @param fetchResources (optional) Whether at the same time, we should also fetch the
		 * resources that are associated to this album. Set it to 'false' if you only need
		 * to access the album and do not need to use methods such as GalleryAlbum::getResources()
		 * to fetch the resources that have been categorized under this album. It of course
		 * saves resources and database queries.
		 * @param onlyShownAlbums Forces to retrieve only the albums that have been set to appear
		 * in the main page. If set to 'true', we will generate an error if the album exists, 
		 * has the specified id and belongs to the specified user _but_ it is not supposed to be 
		 * shown in the main page.
		 * @return Returns a valid GalleryAlbum object or 'false' if the album could not be found.
		 */
        function getAlbum( $id, $ownerId = -1, $fetchResources = true, $onlyShownAlbums = false )
        {
        	// make sure that we don't have this album yet...
            if( isset($this->cache[$id])) {
            	return $this->cache[$id];
            }

            // otherwise, continue the normal process...
        	$query = "SELECT id, owner_id, description,
        	                 name, flags, parent_id,
        	                 date, properties, show_album 
        	          FROM ".$this->getPrefix()."gallery_albums 
        	          WHERE id = $id";
            if( $ownerId != -1 )
            	$query .= " AND owner_id = $ownerId";
            if( $onlyShownAlbums )
            	$query .= " AND show_album = 1";
			
			return $this->_getAlbumFromQuery( $query );
        }
		
		/**
		 * Returns a specific album from the database given its 'mangled name'
		 *
		 * @param id A valid album identifier.
		 * @param ownerId (optional) The album should have the given id _and_ it should
		 * belong to the given user.
		 * @param fetchResources (optional) Whether at the same time, we should also fetch the
		 * resources that are associated to this album. Set it to 'false' if you only need
		 * to access the album and do not need to use methods such as GalleryAlbum::getResources()
		 * to fetch the resources that have been categorized under this album. It of course
		 * saves resources and database queries.
		 * @param onlyShownAlbums Forces to retrieve only the albums that have been set to appear
		 * in the main page. If set to 'true', we will generate an error if the album exists, 
		 * has the specified id and belongs to the specified user _but_ it is not supposed to be 
		 * shown in the main page.
		 * @return Returns a valid GalleryAlbum object or 'false' if the album could not be found.
		 */
		function getAlbumByName( $id, $ownerId = -1, $fetchResources = true, $onlyShownAlbums = false )
		{
            // otherwise, continue the normal process...
        	$query = "SELECT id, owner_id, description,
        	                 name, flags, parent_id,
        	                 date, properties, show_album 
        	          FROM ".$this->getPrefix()."gallery_albums 
        	          WHERE mangled_name = '".Db::qstr($id)."'";
            if( $ownerId != -1 )
            	$query .= " AND owner_id = $ownerId";
            if( $onlyShownAlbums )
            	$query .= " AND show_album = 1";
				
			return $this->_getAlbumFromQuery( $query );
		}
		
		/**
		 * @private
		 */
		function _getAlbumFromQuery( $query )
		{
            $result = $this->Execute( $query );

            if( !$result )
            	return false;
				
			if( $result->RowCount() == 0 )
				return false;

            $row = $result->FetchRow();
            $album = $this->_fetchAlbumInformation($row);

            // ...and keep a copy of the object we just fetched
            // just in case, one  never knows :)
            $this->cache[$row['id']] = $album;

            return $album;
		}

        /**
         * Returns an array with all the child albums of the given album, but only
         * the ones at the first level (it is not recursive!)
         *
         * @param albumId The album identfitier whose children we'd like to get.
		 * @param ownerId To whom should this album belong.
         * @param onlyShownAlbums Returns only those albums that have the show_album
         * field set to true, or all of them otherwise
         * @return An array of GalleryAlbum objects
         */
        function getChildAlbums( $albumId, $ownerId, $onlyShownAlbums = false )
        {		
        	$query = "SELECT id, owner_id, description,
        	                 name, flags, parent_id,
        	                 date, properties, show_album 
        	          FROM ".$this->getPrefix()."gallery_albums
                      WHERE parent_id = $albumId AND
					  owner_id = $ownerId";
            if( $onlyShownAlbums )
            	$query .= " AND show_album = 1";

            return $this->_getAlbumsFromQuery( $query );
        }
		
        /**
         * @private
	     * @see getUserAlbums
         */
        function _getAlbumsFromQuery( $query, $page = DEFAULT_PAGING_ENABLED, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
        {
            $result = $this->Execute( $query, $page, $itemsPerPage );

            // return empty array if the query didn't succeed
            if( !$result )
            	return Array();

            $albums = Array();
            while( $row = $result->FetchRow()) {
            	array_push( $albums, $this->_fetchAlbumInformation( $row ));
            }

            return $albums;
        }

        /**
         * Adds an album to the database
         *
		 * @param album A GalleryAlbum object, with all its data filled in
		 * @return Returns true if successful or false otherwise.
		 * @see GAlleryAlbum
         */
		function addAlbum( $album )
        {
            $tf = new Textfilter();
        	$query = "INSERT INTO ".$this->getPrefix()."gallery_albums (
                      owner_id, description, name, flags, parent_id, properties, 
                      show_album, normalized_name, normalized_description, mangled_name )
                      VALUES (".
                      $album->getOwnerId().", '".Db::qstr($album->getDescription())."', '".
					  Db::qstr($album->getName())."', 0, ".$album->getParentId().", '".
                      serialize($album->getProperties())."', 1,'".
                      Db::qstr($tf->normalizeText($album->getName()))."','".
                      Db::qstr($tf->normalizeText($album->getDescription()))."', '".
					  $tf->urlize($album->getName())."');";
					  
            $result = $this->Execute( $query );
            
            if( !$result )
                return false;
                
            // return the id of the last row we inserted, which will be the id of the album
            $result = $this->_db->Insert_ID();
            
            return $result;
        }

        /**
         * @private
         */
        function getNumChildren( $albumId )
        {
        	$query = "SELECT COUNT(*) AS num_children FROM ".$this->getPrefix()."gallery_albums
                      WHERE parent_id = $albumId";
            $result = $this->Execute( $query );
            if( !$result )
            	return 0;

            $row = $result->FetchRow();

            return $row["num_children"];
        }

        /**
         * updates an album in the db
         *
         * @param album A GalleryAlbum object that already exists in the db.
		 * @param Returns true if successful or false otherwise.
         */
        function updateAlbum( $album )
        {
            if ($album->getId() == $album->getParentId()){
				return false;
			}
			$tf = new TextFilter();
        	$query = "UPDATE ".$this->getPrefix()."gallery_albums SET
                      description = '".Db::qstr($album->getDescription())."',
                      name = '".Db::qstr($album->getName())."',
                      parent_id = ".$album->getParentId().",
                      properties = '".serialize($album->getProperties())."',
                      show_album = ".$album->getShowAlbum().",
                      normalized_name = '".Db::qstr($tf->normalizeText($album->getName()))."',
                      normalized_description = '".Db::qstr($tf->normalizeText($album->getDescription()))."',
					  mangled_name = '".$tf->urlize($album->getName())."'
                      WHERE id = ".$album->getId().";";

             return $this->Execute( $query );
        }

        /**
         * removes an album from the db
         *
         * @param albumId The album identifier
         * @param userId The user identifier to whom the album belongs (optional)
		 * @return True if successful or false otherwise.
         */
        function deleteAlbum( $albumId, $userId = -1 )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."gallery_albums
                      WHERE id = $albumId";
            if( $userId != -1 )
            	$query .= " AND owner_id = $userId";

            return $this->Execute( $query );
        }

		/**
		 * @private
		 */
        function _getNumResourcesOld( $albumId )
        {
        	$query = "SELECT COUNT(*) AS total FROM ".$this->getPrefix()."gallery_resources
                      WHERE album_id = $albumId";

            $result = $this->Execute( $query );

            if( !$result )
            	return 0;

            $row = $result->FetchRow();

            if( $row["total"] == "" )
            	return 0;
            else
            	return $row["total"];
        }
		
		/**
		 * @private 
		 * Alternative version as the above, faster when loading lots of albums
		 */
		function _getNumResources( $albumId )
		{
			// if we haven't loaded them all yet...
			$prefix = $this->getPrefix();
			if( $this->_counts == null ) {
				$query = "SELECT album_id, COUNT(*) AS total FROM {$prefix}gallery_resources GROUP BY album_id";
			
				$result = $this->Execute( $query );
				
				if( !$result )
					return 0;
					
				while( $row = $result->FetchRow()) {
					$id = $row["album_id"];
					$this->_counts[$id] = $row["total"];
				}
			}
			
            $total = "";
            if ( array_key_exists( $albumId, $this->_counts ) )
            {
                $total = $this->_counts[$albumId];
            }
			if( $total == "" ) $total = 0;
			
			return $total;
		}
		
		/**
		 * returns how many albums this user has
		 *
		 * @param userId The number of albums that this user has
		 * @return The number of albums, or 0 if none or error
		 */
		function getNumUserAlbums( $userId )
		{
			$prefix = $this->getPrefix();
			$table = "{$prefix}gallery_albums";
			$cond = "owner_id = '".Db::qstr($userId)."'";
				
			return( $this->getNumItems( $table, $cond ));
		}
		
		/**
		 * returns all the albums of the blog in an array. The key of the array is the
		 * parent id of all the albums in the position, and each position is either an
		 * array with all the albums that share the same parent id or empty if none
		 *
		 * @param userId 
		 * @param albumId
		 * @return An associative array
		 */
		function getUserAlbumsGroupedByParentId( $userId, $albumId = 0 )
		{
			$prefix = $this->getPrefix();
			$query = "SELECT id, owner_id, description,
        	                 name, flags, parent_id,
        	                 date, properties, show_album 
        	          FROM {$prefix}gallery_albums 
			          WHERE owner_id = '".Db::qstr($userId)."'
					  ORDER BY name ASC";

			$result = $this->Execute( $query );
			
			if( !$result )
				return Array();
				
			$albums = Array();
			$ids = Array();
			$ids[] = 0;
			while( $row = $result->FetchRow()) {
				$album = new GalleryAlbum( $row["owner_id"],
										$row["name"],
										$row["description"],
										$row["flags"],
										$row["parent_id"],
										$row["date"],
										unserialize($row["properties"]),
										$row["show_album"],
										$row["id"] );
				$key = $album->getParentId();
				if( !array_key_exists( $key, $albums ) || $albums["$key"] == "" )
					$albums["$key"] = Array();
				$albums["$key"][] = $album;
				
				$ids[] = $album->getId();
			}
			
			return $albums;
		}
		
		/**
		 * returns the albums of a blog ordered in the same way as they are nested. Please use
		 * $album->getValue("level") to check their proper nesting.
		 *
		 * @param userId
		 */
		function getNestedAlbumList( $userId )
		{
			$albums = $this->getUserAlbumsGroupedByParentId( $userId );
			$nestedAlbums = $this->_getNestedAlbumList( $albums );
			
			return $nestedAlbums;
		}
		
		
		/** 
		 * @static
		 * @private
		 */
		function _getNestedAlbumList( $albums, $start = 0, $level = -1 ) 
		{
			$level++;
			if( !array_key_exists( $start, $albums ) || $albums["$start"] == "" )
				return Array();
				
			foreach( $albums["$start"] as $album ) {
				// do the replacing
				$album->setValue( "level", $level );
				$results[] = $album;
				
				// make a recursive call				
				$tmp = $this->_getNestedAlbumList( $albums, $album->getId(), $level);
				foreach( $tmp as $tmpAlbum )
					$results[] = $tmpAlbum;
			}
			
			return $results;
		}			

        /**
         * @private
         */
        function _fetchAlbumInformation( $row, $fetchResources = true, $onlyShownAlbums = false )
        {
        	$album = new GalleryAlbum( $row["owner_id"],
                                       $row["name"],
                                       $row["description"],
                                       $row["flags"],
                                       $row["parent_id"],
                                       $row["date"],
                                       unserialize($row["properties"]),
                                       $row["show_album"],
                                       $row["id"] );

            // fetch the number of children and the GalleryAlbum child
            // objects that "hang" from this one
            //$album->setNumChildren( $this->getNumChildren($row["id"]));
			$id = $row["id"];
			$ownerId = $row["owner_id"];
			if( !isset($this->_childAlbums[$id])) {
				$this->_childAlbums[$id] = $this->getChildAlbums( $id, $ownerId );
			}
            $album->setChildren( $this->_childAlbums[$id] );

            $album->setNumResources( $this->_getNumResources( $id ));

            return $album;
        }
    }
?>