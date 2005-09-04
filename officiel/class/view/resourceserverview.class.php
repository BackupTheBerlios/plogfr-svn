<?php

	include_once( PLOG_CLASS_PATH.'class/view/view.class.php' );
	include_once( PLOG_CLASS_PATH.'class/net/http/httpcache.class.php' );

	// the three different modes that a resource can be requested
	define( 'RESOURCE_VIEW_MODE_DEFAULT', '' );
	define( 'RESOURCE_VIEW_MODE_PREVIEW', 'preview' );
	define( 'RESOURCE_VIEW_MODE_MEDIUM', 'medium' );
    define( 'DEFAULT_HTTP_CACHE_LIFETIME', '86400');
    define( 'RESOURCE_DEFAULT_CHUNK_SIZE', '32768' );

    /**
     * \ingroup View
     * @private
     */	
	class ResourceServerView extends View
	{
	
		var $_resource;
		var $_mode;
	
		function ResourceServerView( $resource = null, $mode = RESOURCE_VIEW_MODE_DEFAULT )
		{
			$this->View();
			
			$this->_resource = $resource;
			$this->_mode = $mode;
			
			if( $this->_resource != null )
				$this->_initResponse();
		}
		
		/**
		 * @private
		 * Initializes the mime type needed for this resource and the headers, if any is needed
		 */
		function _initResponse()
		{
			$this->addHeaderResponse( 'Pragma: public' );
			$this->addHeaderResponse( 'Accept-Ranges: bytes' );
			$this->addHeaderResponse( 'Content-Disposition: inline; filename='.rawurlencode($this->_resource->getFileName()));

			// depending on what we're sending, the content of the headers will vary...
			if( $this->_mode == RESOURCE_VIEW_MODE_PREVIEW )
				$this->addHeaderResponse( 'Content-Type: '.$this->_resource->getThumbnailMimeType());
			elseif( $this->_mode == RESOURCE_VIEW_MODE_MEDIUM )
				$this->addHeaderResponse( 'Content-Type: '.$this->_resource->getThumbnailMimeType());
			else {
				$data = $this->_resource->getMetadataReader();
				$this->addHeaderResponse( 'Content-Type: '.$this->_resource->getMimeType());
				$this->addHeaderResponse( 'Content-Length: '.$data->getFileSize());
			}				
			
			return true;
		}
		
		/**
		 * we need to overwrite this method or else the View class will be sending the wrong
		 * content type and character encoding... We overwrite it to do nothing, since we have
		 * already sent the content type in _initResponse()
		 *
		 * @see View::sendContentType()		  
		 */
		function sendContentType()
		{
			return( true );	
		}		
		
		function render()
		{
			// call the render method in the main view class... it will take care of sending the headers
			// for us and so on...
			parent::render();
			
			// if there is no resource to send... then we can quit right away!
			if( $this->_resource == null )
				return;
			
			// let's see if we really need to send some data or not...
			// send also some headers that will help caching, if configured to do so
			$config =& Config::getConfig();
			$useCaching = $config->getValue( 'resource_server_http_cache_enabled' );
			if( $useCaching ) {
				// send the "Last-Modified" header
				$resDate = $this->_resource->getTimestamp();
				$lastModified = $resDate->getDate( DATE_FORMAT_UNIXTIME );
				$cacheLifetime = $config->getValue( 'resource_server_http_cache_lifetime', DEFAULT_HTTP_CACHE_LIFETIME );
				
				// check if we have to resent the data and if not, then we're done!
				if( HttpCache::httpConditional( $lastModified, $cacheLifetime ))
					exit();
			}
			
			// if we need to send something, then let's do it now and finish
			if( $this->_mode == RESOURCE_VIEW_MODE_PREVIEW )
				print( $this->_resource->getPreview());
			elseif( $this->_mode == RESOURCE_VIEW_MODE_MEDIUM )
				print( $this->_resource->getMediumSizePreview());
			else {
				while($chunk =& $this->_resource->getDataChunk( RESOURCE_DEFAULT_CHUNK_SIZE ))
					echo( $chunk );				
			}
			
			return true;
		}
	}
?>