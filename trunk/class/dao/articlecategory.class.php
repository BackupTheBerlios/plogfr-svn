<?php

	include_once( PLOG_CLASS_PATH."class/database/dbobject.class.php" );

    /**
	 * \ingroup DAO
	 *
     * Represents a category. Every post belongs to exactly one category, but categories
     * are also passed to the template as an array, so that they can be displayed
     * in a column... or something :)
     */
	class ArticleCategory extends DbObject 
	{

		var $_id;
		var $_name;
		var $_url;
        var $_blogId;
        var $_numArticles;
        var $_inMainPage;
		var $_parentId;
		var $_parentCategory;
		var $_description;
		var $_lastModification;

		function ArticleCategory( $name, $url, $blogId, $inMainPage, $description = "", $numArticles = 0, $properties = Array(), $id = -1, $lastModification=null, $parentId = null)
		{
			$this->DbObject();
			$this->_name = $name;
            $this->_url = $url;
			$this->_id = $id;
            $this->_blogId = $blogId;
		    $this->setInMainPage( $inMainPage );
            $this->_numArticles = $numArticles;
			$this->setProperties( $properties );
			$this->_parentId = $parentId;
			$this->_description = $description;
			$this->_lastModification = new Timestamp($lastModification);
			$this->_articles = Array();
			$this->_numArticles = Array();
		}

        /**
         * @private
         */
		function setId( $newId )
		{
			$this->_id = $newId;
		}

        /**
         * @private
         */
		function setName( $newName )
		{
			$this->_name = $newName;
		}

        /**
         * @private
         */
		function setURL( $newURL )
		{
			$this->_url = $newURL;
		}

        /**
         * @private
         */
        function setBlogId( $blogId )
        {
        	$this->_blogId = $blogId;
        }
		
		/**
		 * sets the parent category id
		 *
		 * @param parentId The id of the parent category
		 */
		function setParentId( $parentId )
		{
			$this->_parentId = $parentId;
		}
		
		/**
		 * sets the parent ArticleCategory object
		 *
		 * @param An ArticleCategory object representing the parent category
		 */
		function setParentCategory( $parentCategory )
		{
			$this->_parentCategory = $parentCategory;
		}
		
		/**
		 * sets the description
		 *
		 * @param description
		 */
		function setDescription( $desc )
		{
			$this->_description = $desc;
		}

        /**
         * Returns the identifier assigned to this category.
         *
         * @return An integer value with the category number.
         */
		function getId()
		{
			return $this->_id;
		}

        /**
         * Returns the name assigned to the category.
         *
         * @return A string value with the name assigned to the category.
         */
		function getName()
		{
			return $this->_name;
		}

        /**
         * @private
         */
		function getURL()
		{
			return $this->_url;
		}

        /**
         * Returns the identifier of the blog to which this category belongs.
         *
         * @return An integer value containing the identifier to which this category belongs.
         */
        function getBlogId()
        {
        	return $this->_blogId;
		}

        /**
         * Returns how many articles have been categorized under this category.
         *
		 * @param status A valid post status
         * @return An integer value
         */
        function getNumArticles( $status = POST_STATUS_PUBLISHED )
        {
			$origStatus = $status;
			if( $status == POST_STATUS_ALL ) 
				$status = 0;
		
			if( !is_array( $this->_numArticles[$status] ) || $this->_numArticles[$status] == null ) {
				$categories = new ArticleCategories();
				$this->_numArticles[$status] = $categories->getNumArticlesCategory( $this->getId(), $origStatus );
			}
			
			return( $this->_numArticles[$status] );
        }
		
		/**
		 * shorthand method for getting the total number of articles in the category, regardless of the
		 * status
		 *
		 * @return the total number of posts
		 */
		function getNumAllArticles()
		{
			return( $this->getNumArticles( POST_STATUS_ALL ));
		}
		
		/**
		 * returns the articles categorized here
		 *
		 * @param an array of Article obejcts
		 */
		function getArticles( $status = POST_STATUS_PUBLISHED )
		{
			if( !is_array( $this->_articles[$status] ) || $this->_articles[$status] == null ) {
				$articles = new Articles();
				// you've got to love these huge method calls...
				$this->_articles[$status] = $articles->getBlogArticles( $this->getBlogId(), 
				                                                        -1, 
												            	  	    -1,
															            $this->getId(),
															            $status );
			}
			
			return( $this->_articles[$status] );
		}
		
		/**
		 * returns the id of the parent category
		 *
		 * @return The id of the parent category
		 */
		function getParentId()
		{
			return $this->_parentId;
		}
		
		/**
		 * returns the parent ArticleCategory object
		 *
		 * @return An ArticleCategory object representing the parent category
		 */
		function getParentCategory()
		{
			return $this->_parentCategory;
		} 

        /**
         * Returns true if the category has been configured to be shown in the main
         * page or not.
         *
         * @return True wether the category is shown in main page, or false otherwise.
         */
        function isInMainPage()
        {
        	return $this->_inMainPage;
        }

        /**
         * If set to true, enables the category to be shown in the main page, or false
         * otherwise.
         *
         * @param show True or false, depending wether we'd like to show the category in
         * the main page or not.
         */
        function setInMainPage( $show )
        {
		if( $show )
			$this->_inMainPage = 1;
		else
			$this->_inMainPage = 0;
        }
		
		/**
		 * returns the description
		 *
		 * @return The description
		 */
		function getDescription()
		{
			return $this->_description;
		}

		/**
		 * returns the last modification date
		 *
		 * @return A Timestamp object
		 */
		function getLastModification()
		{
			return $this->_lastModification;
		}

        function setLastModification( $newDate )
        {
            $this->_lastModification = $newDate;
        }
        
	}
?>
