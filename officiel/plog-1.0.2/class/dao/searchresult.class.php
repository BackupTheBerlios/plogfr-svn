<?php

    include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	
	define( "SEARCH_RESULT_ARTICLE", 1 );
	define( "SEARCH_RESULT_CUSTOM_FIELD", 2 );
	define( "SEARCH_RESULT_COMMENT", 3 );
    
    /**
     * represents a result from a search query.
     *
     * Includes things like the relevance and a reference to the article object
     * that matched the query
	 *
	 * \ingroup DAO
     */
    class SearchResult extends Object
    {
        
        var $_relevance;
        var $_article;
		var $_resultType;
        
		/**
		 * Constructor
		 * 
		 * @param relevance The relevance factor
		 * @param article The Article object that matched the search terms
		 * @param type Whether the search result is coming from an article, comment or custom field
		 * @see getType()
		 */
        function SearchResult( $relevance, $article, $type )
        {
            $this->Object();
            
            $this->_relevance = $relevance;
            $this->_article   = $article;
			$this->_type      = $type;
        }
        
		/**
		 * returns the Article object, if any
		 *
		 * @return an Article object
		 */
        function getArticle()
        {
            return $this->_article;
        }
        
		/**
		 * returns the relevance of the result
		 *
		 * @return an integer specfying the relevance of the result
		 */
        function getRelevance()
        {
            return $this->_relevance;
        }
		
		/**
		 * returns the type of the result. 
		 *
		 * @return The returned result is one of the following values:
		 * Possible values are:
		 * - SEARCH_RESULT_ARTICLE
		 * - SEARCH_RESULT_CUSTOM_FIELD
		 * - SEARCH_RESULT_COMMENT
		 */		 
		function getType()
		{
			return $this->_type;
		}
    }
?>