<?php

	include_once( PLOG_CLASS_PATH.'class/view/view.class.php' );
    include_once( PLOG_CLASS_PATH.'class/template/templateservice.class.php' );
	include_once( PLOG_CLASS_PATH.'class/net/http/httpcache.class.php' );	
	
	/**
	 * different smarty cache modes that we can use
	 */
	define( 'SMARTY_VIEW_CACHE_DISABLED', 0 );
	define( 'SMARTY_VIEW_CACHE_ENABLED', 1 );
	define( 'SMARTY_VIEW_CACHE_CHECK', 2 );
	
	/**
	 * \ingroup View
	 *
	 * Implementation of views in the plog framework with support for Smarty templates. This is the first
	 * useful class that extends from View that adds some functionality, such as working with BlogInfo objects
	 * and providing support for smarty templates. 
	 *
	 * This class uses the TemplateService class for dealing with templates.
	 *
	 * @see BlogView
	 */
	class SmartyView extends View
	{
	
		var $_cachingEnabled;
		var $_templateName;
		var $_template;
		var $_data;
		var $_viewId;

        /**
         * Constructor of the class
		 *
		 * @param blogInfo A valid BlogInfo object representing the blog to which this View belongs
		 * @param templateName A template name
		 * @param cachingEnabled either SMARTY_VIEW_CACHE_ENABLED, SMARTY_VIEW_CACHED_DISABLED, SMARTY_VIEW_CACHE_CHECK.
		 * If left as SMARTY_VIEW_CACHE_CHECK, the blog settings will checked to determine whether caching is enabled
		 * or not.
		 * @param data Data that will be used to generate a unique id for the cached view (it will be ignored
		 * if caching is not enabled)
         */
		function SmartyView( $blogInfo, $templateName, $cachingEnabled = SMARTY_VIEW_CACHE_CHECK, $data = Array())
        {
			// parent constructor
			$this->View();
			
			if( $cachingEnabled == SMARTY_VIEW_CACHE_CHECK ) {
				// detect whether caching should be enabled or not
				$config =& Config::getConfig();			
				$cachingEnabled = $config->getValue( "template_cache_enabled" );
			}
			
			// whether caching is enabled or not
			$this->_cachingEnabled = $cachingEnabled;
				
			// save the blogInfo object
			$this->_blogInfo = $blogInfo;

			// name of the tepmlate
			$this->_templateName = $templateName;
			
			// get the right CachedTemplate or Template object
            $blogSettings = $this->_blogInfo->getSettings();			
			$ts = new TemplateService();			
			if( $this->isCachingEnabled()) {
				// get a CachedTemplate object
				$this->_template = $ts->CachedTemplate( $this->_templateName, $blogSettings->getValue( 'template' ), $this->_blogInfo );
				// data used to calculate the view id
				$this->_data = $data;
				// and generate the right cache id for it
				$this->_data["blogId"] = $blogInfo->getId();				
				$this->_viewId = $this->generateCacheId();
			}
			else
				$this->_template = $ts->Template( $this->_templateName, $blogSettings->getValue( 'template' ), $this->_blogInfo );
        }
		
		/**
		 * returns true if caching is enabled for this particular view
		 *
		 * @return true if caching is enabled or not.
		 */
		function isCachingEnabled()
		{
			return $this->_cachingEnabled;
		}
		
		
		/**
		 * returns true if the current view is cached or false if it is not or caching is disabled
		 *
		 * @return true if view enabled or false otherwise
		 */
		function isCached()
		{
			if( $this->isCachingEnabled())
				$isCached = $this->_template->isCached( $this->_viewId );
			else
				$isCached = false;
			
			return $isCached;
		}		
		

		/**
		 * generates a unique identifier for this view. The cache identifier is generated
		 * based on the last parameter passed to the view constructor
		 *
		 * @param returns a unique id for this view
		 */
		function generateCacheId()
		{
            $viewId = "";
			foreach( $this->_data as $key => $value )
				$viewId .= "$key=$value";

			$viewId = md5($this->_blogInfo->getId()."-".$viewId);
			
			return $viewId;
		}
				
		/**
		 * returns this view's id
		 *
		 * @return this view's id
		 */
		function getSmartyViewId()
		{
			return $this->_viewId;
		}
		
		/**
		 * returns true whether the support for HTTP condiditional requests
		 * is enabled or not
		 *
		 * @return true if support is enabled or false otherwise
		 */
		function isTemplateHttpCacheEnabled()
		{
			$config =& Config::getConfig();
			
			if( $config->getValue( "template_cache_enabled" ))
				$httpCacheEnabled = $config->getValue( "template_http_cache_enabled" );
			else
				$httpCacheEnabled = false;

			return( $httpCacheEnabled );
		}
		
		function getCacheTimeSeconds()
		{
			$config =& Config::getConfig();
			
			$cacheTime = $config->getValue( "template_cache_lifetime" );
			
			if( $cacheTime == "" || !is_numeric($cacheTime))
				$cacheTime = 1; // [almost] no value, just one second of caching
			if( $cacheTime == -1 )
				$cacheTime = 788400000; // a veeery long time!
			if( $cacheTime > 788400000)
				$cacheTime = 788400000;

			return( $cacheTime );
		}

        /**
		 * Renders the view using the Smarty template object that we created in the constructor. This method
		 * sends data to the client so it should be called as the last bit of code in our custom classes
		 * extending SmartyView.
         *
		 * It has no paramaters and returns nothing.
         */
        function render()
        {
			// the View class also needs to do some things...
			parent::render();
		
	        $sendOutput = true;
	        
			// check if plog is configured to use conditional http headers and stuff like
			// that... Also, use the HttpCache class to determine whether we should send the
			// content or not
			if( $this->isTemplateHttpCacheEnabled() && $this->isCached()) {
				// some debug information
				$timestamp = $this->_template->getCreationTimestamp();
				// and now send the correct headers
				
				if( HttpCache::httpConditional( $timestamp, $this->getCacheTimeSeconds()))
					$sendOutput = false;
					
				$header = "Last-Modified: ".gmdate('D, d M Y H:i:s', $timestamp).' GMT';
				header( $header );					
			}
			else {
				// send the results if needed				
				$sendOutput = true;
			}
			
			if( $sendOutput ) {
				// pass all the values to the template object
				$this->_template->assign( $this->_params->getAsArray());			
			
				// and finally send the contents of the template
				print( $this->_template->fetch( $this->getSmartyViewId()));			
			}
        }
     }
?>
