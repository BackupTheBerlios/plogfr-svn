<?php


	include_once( PLOG_CLASS_PATH."class/database/dbobject.class.php" );

	/**
     * Represents a trackback item.
	 *
	 * \ingroup DAO
     */
    class TrackBack extends DbObject 
	{

    	var $_url;
        var $_title;
        var $_articleId;
        var $_excerpt;
        var $_blogName;
        var $_date;
        var $_dateObject;
        var $_id;
		var $_article;

        /**
         * Constructor. Creates a new trackback object.
         *
         * @param url The permalink of the post.
         * @param title The title of the post.
         * @param articleId The article id to which this trackback item was pointing.
         * @param excerpt An excerpt of the post.
         * @param blogName The name of the blog which is ping backing to us.
         * @param date Date of the post.
         * @param id Identifier of this item.
         */
        function TrackBack( $url, $title, $articleId, $excerpt, $blogName, $date, $id = -1)
        {
			$this->DbObject();
        	$this->_url = $url;
            $this->_title = $title;
            $this->_articleId = $articleId;
            $this->_excerpt = $excerpt;
            $this->_blogName = $blogName;
            $this->_date = $date;
            $this->_dateObject = new Timestamp( $this->_date );
            $this->_id = $id;
			
			// this will be initialized later
			$this->_article = null;
        }

        /**
         * Returns the permalink of the post that sent the trackback link.
         *
         * @return A string with the permalink.
         */
        function getUrl()
        {
        	return $this->_url;
        }

        /**
         * Returns the value of the title parameter, as in the trackback ping request. According to the definition
         * of the trackback ping specification, it can be empty.
         *
         * @return The title of the entry.
         */
        function getTitle()
        {
        	return $this->_title;
        }

        /**
         * Returns the article identifier of the article for which this trackback link was received.
         *
         * @param An integer containing the article identifier of this entry.
         */
        function getArticleId()
        {
        	return $this->_articleId;
        }

        /**
         * According to the specification of the trackback protocol, the excerpt is a short string giving
         * more information about the entry related to the ping. Normally, it will be at most, the first 255
         * characters of the entry, but it could also be empty since it is not mandatory.
         *
         * @return A string representing the excerpt.
         */
        function getExcerpt()
        {
        	return $this->_excerpt;
        }

        /**
         * Returns the name of the blog which sent the trackback ping.
         *
         * @return A string containing the name of the blog which sent the trackback ping.
         */
        function getBlogName()
        {
        	return $this->_blogName;
        }

        /**
         * Returns the date as of the SQL database (14-digit date) of when the trackback ping was received.
         *
         * @return A 14-digit date representation.
         */
        function getDate()
        {
        	return $this->_date;
        }

        /**
         * Returns the identifier of this entry in the database.
         *
         * @return An integer containing the identifier of this trackback in the database.
         */
        function getId()
        {
        	return $this->_id;
        }
		
		/**
		 * sets the id of the trackback
		 *
		 * @param id New database id of the object
		 */
		function setId( $id )
		{
			$this->_id = $id;
		}

        /**
         * Returns the Timestamp object corresponding to the SQL-like date. The Timestamp class offers
         * convenience methods, easier to use if we want to fetch only the year, month, day, etc.
         *
         * @return A Timestamp object representing the date.
         */
        function getDateObject()
        {
        	return $this->_dateObject;
        }
		
		/**
		 * returns the Article object to which this one trackback points
		 *
		 * @return An Article object
		 */
		function getArticle()
		{
			// if we haven't loaded the article yet
			if( $this->_article == null ) {
				include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
				
				// load the article and return it
				$articles = new Articles();
				$this->_article = $articles->getBlogArticle( $this->_articleId );
			}
			
			return( $this->_article );
		}
    }
?>
