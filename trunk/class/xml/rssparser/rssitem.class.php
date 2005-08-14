<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	include_once( PLOG_CLASS_PATH."class/xml/rssparser/rssenclosure.class.php" );

    /**
     * \ingroup XML
     *
     * <p>Provides information about an RSS item, fetched from an RSS resource.</p>
     * <p>This class provides methods to get the value of some of the attributes and possible child
     * tags of the &lt;item&lt; tag. In case we need to know about any other value that is not available
     * via one of the 'getter' functions (getTitle(), getImage(), getDescription(), getLink()), we can then get
     * values from the resulting array as generated by the underlying RSS parser using the get() function.
     * The array is an associative array where the keys are the name of the attribute/tag and the values are
     * the value of the attribute/tag.</p>
     */
	class RSSItem extends Object 
	{

		var $_link;
		var $_title;
		var $_image;
		var $_description;
		var $_item;
		var $_enclosures;

        /**
         * Creates an RSSItem object from the output given by the MagpieRSS parser
         *
         * @param item The RSS item.
         */
		function RSSItem( $item )
		{
			$this->_link = $item["link"];
			$this->_title = $item["title"];
			$this->_image = $item["image"];
			$this->_description = $item["description"];
			
			// process the enclosures, if any
			$this->_enclosures = Array();
			if( is_array( $item["enclosure"] )) {
				foreach( $item["enclosure"] as $enclosure ) {
					array_push( $this->_enclosures, new RssEnclosure( $enclosure ));
				}
			}

			// also keep the item just in case
			$this->_item = $item;
		}

        /**
         * Returns the link assigned to the item.
         *
         * @return The link assigned to the item.
         */
		function getLink()
		{
			return $this->_link;
		}

        /**
         * Returns the title assigned to the link.
         *
         * @return Title assigned to the link.
         */
		function getTitle()
		{
			return $this->_title;
		}

        /**
         * Image assigned to the item
         *
         * @return URI of the image assigned to this item
         */
		function getImage()
		{
			return $this->_image;
		}

        /**
         * Description assigned to this item.
         *
         * @param Description assigned to the item.
         */
		function getDescription()
		{
			return $this->_description;
		}

		/**
		 * Even though we provide convenience methods for the most used fields of the
		 * object, might be good to provide one to access the 'item' array generically
         *
         * @param key Name assigned to the item
         * @return The value of the item.
		 */
		function get( $key )
		{
			return $this->_item[$key];
		}
		
		/**
		 * returns a unique id for this item
		 *
		 * @return a unique id
		 */
		function getUniqueId()
		{
			return( md5( $this->getLink().$this->getTitle().$this->getDescription()));
		}
		
		/**
		 * returns one enclosure. If there is more than one, it will only return the first
		 * one
		 *
		 * @return an RssEnclosure object
		 */
		function getEnclosure()
		{
			return( $this->_enclosures[0] );
		}
		
		/**
		 * retursn an array of RssEnclosure objects
		 *
		 * @return an array of RssEnclosure objects, or an empty array if there was none
		 */
		function getEnclosures()
		{
			return( $this->_enclosures );
		}
		
		/**
		 * returns true if the feed has enclosures or false if not
		 *
		 * @return boolean
		 */
		function hasEnclosures()
		{
			return( $this->getNumEnclosures() > 0 );
		}
		
		/**
		 * returns the number of enclosures that this item has
		 *
		 * @return an integer
		 */
		function getNumEnclosures()
		{
			return( count( $this->_enclosures ));
		}
	}
?>
