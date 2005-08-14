<?php

	include_once( PLOG_CLASS_PATH."class/template/template.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	
	/**
	 * \ingroup Template
	 *
	 * Extends the Template class to provide support for cached templated. This class adds
	 * two additional methods that are not available in Template:
	 *
	 * - CachedTemplate::isCached() to know whether the current CachedTemplate is working on cached contents
	 * - CachedTemplate::clearCache() to clear the current cached contents of this template
	 * - CachedTemplate::getCreationTimestamp() to determine when the current cached version was created
	 *
	 * @see TemplateService
	 * @see Template
	 */
	class CachedTemplate extends Template 
    {

		/**
		 * Constructor.
		 *
         * @param cacheLifeTime How many seconds we would like to cache the template
		 */
		function CachedTemplate( $templateFile, $cacheLifetime = 300 )
        {
        	// create the Smarty object and set the security values			
			$this->Template( $templateFile );
            $config =& Config::getConfig();			
            $this->caching = $config->getValue( "template_cache_enabled");
            $this->cache_lifetime =  $config->getValue( "template_cache_lifetime" );
            //$this->cache_dir    = $config->getValue( "temp_folder" )

			// whatever is between the {dynamic}...{/dynamic} tags shouldn't be cached
			$this->register_block('dynamic', "_smarty_nocache", false);
			
        }

        /**
         * Renders the template and returns the contents as an string
         *
         * @return The result as an string
         */
        function fetch( $cacheId )
        {
        	return Smarty::fetch( $this->_templateFile, $cacheId );
        }

		/**
		 * returns wether this template is cached or not
		 *
		 * @param cacheId The cache identifier
		 * @return true if the template is cached or false otherwise
		 */
		function isCached( $cacheId )
		{
			$isCached = $this->is_cached( $this->_templateFile, $cacheId );
			
			return $isCached;
		}
		
		/**
		 * clears the cache whose id is $cacheId
		 *
		 * @param cacheId The id of the cache that we'd like to clear
		 * @return nothing
		 */
		function clearCache( $cacheId )
		{
			return $this->clear_cache( $this->_templateFile, $cacheId );
		}
		
        /**
         * Displays the result of rendering the template
         *
         * @return Always true
         */
        function display( $cacheId )
        {
        	Smarty::display( $this->_templateFile, $cacheId );
			
			return true;
        }
		
		/**
		 * returns the date when this template was created
		 *
		 * @param the UNIX timestamp when this template was created
		 */
		function getCreationTimestamp()
		{
			$timestamp = $this->_cache_info['timestamp'];
			
			// if the page was just generated, smarty doesn't have this information
			if( $timestamp == "" )
				$timestamp = time();
				
			return $timestamp;
		}
    }
	
	
	/**
	 * @private
	 * this tells smarty *not* to cache contents, in case we need it
	 */
	function _smarty_nocache($param, $content, $smarty ) 
	{
		return $content;
	}
?>
