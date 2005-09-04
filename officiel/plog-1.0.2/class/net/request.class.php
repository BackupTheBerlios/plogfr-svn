<?php

    include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/properties.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );

    if ( !defined("CHECK_CONFIG_REQUEST_MODE") )
        define( "CHECK_CONFIG_REQUEST_MODE", 0 );
    if ( !defined("NORMAL_REQUEST_MODE") )
        define( "NORMAL_REQUEST_MODE", 1 );
    if ( !defined("SEARCH_ENGINE_FRIENDLY_MODE") )
        define( "SEARCH_ENGINE_FRIENDLY_MODE", 2);

    /**
     * \ingroup Net
     *
     * Represents a request in our system. Doing so we can in the future
     * change the format requests are recognized since all the dirty
     * stuff would be done here. After that, using an interface of the type
     * getValue( "param" ) would be enough to access those values, regardless
     * if the request was /index.php?op=Default&articleId=10 or
     * /index.php/op/Default/articleId/10.
     */
    class Request extends Properties 
	{

        var $_paramsRaw;

        /**
         * Initializes the request object
         *
         * @param values An associative array that will be used to initialize the object
         */
    	function Request( $values = null )
        {
        	if( $values == null )
        		$this->Properties();
            else
            	$this->Properties( $values );
				
			$this->_stripSlashes = true;
        }
		
		/**
		 * whether parameters should or should not be unescaped automatically
		 *
		 * @param escape
		 */
		function setStripSlashes( $enabled )
		{
			$this->_stripSlashes = $enabled;
		}
		
		/**
		 * reimplemented from Properties::getValue() so that we can correctly
		 * strip slashes from requests where magic_quotes_gpc was enabled
		 *
		 * @param key
		 * @param defaultValue
		 * @return the value
		 */
		function getValue( $key, $defaultValue = null )
		{
			// get the value from the parent
			$value = parent::getValue( $key, $defaultValue );
			
			// now if magic quotes are enabled and the input parameter is not an array
			// and the feature has not been disabled, then strip the slashes
			if( get_magic_quotes_gpc() && !is_array( $value ) && $this->_stripSlashes ) {
				$value = stripslashes( $value );
			}
			
			return( $value );
		}
    }
?>
