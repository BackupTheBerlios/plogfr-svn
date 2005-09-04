<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/referer.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/url.class.php" );
	
	define( "REFERRERS_LIST_ITEMS_PER_PAGE", 15 );	

    /**
     * Data access class (or model) to handle all the referers.
	 *
	 * \ingroup DAO
     */
    class Referers extends Model 
	{

    	var $_enabled;

    	/**
         * Constructor.
         */
    	function Referers()
        {
        	$this->Model();

            $config =& Config::getConfig();
            $this->_enabled = $config->getValue( "referer_tracker_enabled" );
        }

        /**
         * Adds a referer to the database.
         *
         * @param refererHeader The referer header as was received by PHP.
         * @param articleId The article being hit by this referer.
         * @return Returns true if successful or false otherwise.
         */
        function addReferer( $refererHeader, $articleId, $blogId )
        {
        	// quit inmediately if this is not enabled...
        	if( !$this->_enabled )
            	return;

        	// we only add a new referer if we come from somewhere else than our own server
            $ourHost = $_SERVER["HTTP_HOST"];

            $refererUrl = new Url( $refererHeader );

            // if they're the same, we quit
            if( $refererUrl->getHost() == $ourHost || $refererUrl->getHost() == "" ) {
            	return;
            }

            // we have to check if a referer with that information exists
            // in the database
            $query = "UPDATE ".$this->getPrefix()."referers SET hits = hits + 1 WHERE url = '".Db::qstr($refererHeader).
                     "' AND article_id = '".Db::qstr($articleId)."' AND blog_id = '".Db::qstr($blogId)."';";
            $result = $this->Execute( $query );
            if( !$result )
            	return false;

            // check how many rows were updated this time.
            if( $this->_db->Affected_Rows() == 0 ) {
            	// we have to insert the row manually
                $query2 = "INSERT INTO ".$this->getPrefix()."referers (url,article_id,blog_id) 
                           VALUES ('".Db::qstr($refererHeader)."','".Db::qstr($articleId)."','".Db::qstr($blogId)."');";
                $result2 = $this->Execute( $query2 );
            }

            return true;
        }

        /**
         * Reads all the referers for a given article.
         *
         * @param articleId The identifier of the article from which we want to know
         * the referers.
         * @return An array of Referer objects with the information about all the referers
         * for this article, or false if the article does not have any referer.
         */
        function getArticleReferers( $articleId, $blogId = 0, $page = 0, $itemsPerPage = 0 )
        {
			return $this->_getReferers( $blogId, $articleId, $page, $itemsPerPage );
        }

        /**
         * Retrieves all the referers from the database.
         *
         * @return An array of Referer objects containing all the referers from the
         * database, or false if there are no referers.
         */
        function getAllReferers( $page = 0, $itemsPerPage = 0)
        {
			return $this->_getReferers( 0, 0, $page, $itemsPerPage );
        }

        /**
         * Returns a list with all the referers for a blog.
         *
         * @param blogId Blog identifier. If not specified, retrieves all the referers.
		 * @param page current page
		 * @param itemsPerPage defaults to REFERRERS_LIST_ITEMS_PER_PAGE
         * @return An array with all the referers for a blog.
         * article.
         */
        function getBlogReferers( $blogId = 0, $page = 0, $itemsPerPage = REFERRERS_LIST_ITEMS_PER_PAGE)
		{
			return $this->_getReferers( $blogId, 0, $page, $itemsPerPage );
        }
		
		/**
		 * @private
		 * builds up and executes a query based on the conditions passed as parameters
		 */
		function _getReferers( $blogId = 0, $articleId = 0, $page = -1, $itemsPerPage = REFERRERS_LIST_ITEMS_PER_PAGE )
		{		
        	$query = "SELECT * FROM ".$this->getPrefix()."referers";
			
			$conds = false;
			if( $blogId > 0 ) {
				$where .= " blog_id = '".Db::qstr($blogId)."'";
				$conds = true;
			}
			
			if( $articleId > 0 ) {
				if( $conds ) $where .= " AND ";
				$where .= " article_id = '".Db::qstr($articleId)."'";
				$conds = true;
			}
			
			if( $conds )
				$query .= " WHERE $where";
					  
			$query .= " ORDER BY last_date DESC";

            $result = $this->Execute( $query, $page, $itemsPerPage );

            if( !$result )
            	return Array();

            $referers = Array();
            while( $row = $result->FetchRow())
            	array_push( $referers, $this->_fillRefererInformation( $row ));

            return $referers;
		
		}

        /**
         * Private function.
         */
        function _fillRefererInformation( $row )
        {
        	$referer = new Referer( $row["url"], $row["article_id"], $row["blog_id"], $row["last_date"], $row["hits"], $row["id"] );

            return $referer;
        }
		
		/**
		 * retrieves information about one particular referrer
		 *
		 * @param referrerId
		 * @param blogId
		 * @return false if unsuccessful or a Referer object if successful
		 */
		function getBlogReferer( $referrerId, $blogId = -1 )
		{
			$prefix = $this->getPrefix();
			$query = "SELECT * FROM {$prefix}referers
			          WHERE id = '".Db::qstr($referrerId)."'";
			if( $blogId > 0 )
				$query .= " AND blog_id = '".Db::qstr($blogId)."'";
				
			$result = $this->Execute( $query );
			
			if( !$result )
				return false;
				
			if( $result->RowCount() == 0 )
				return false;
				
			$row = $result->FetchRow();
			$referrer = $this->_fillRefererInformation( $row );
			
			return $referrer;
		}
		
		/**
		 * removes a referrer from the database
		 *
		 * @param referrerId
		 * @param blogId
		 * @return True if successful or false otherwise
		 */
		function deleteBlogReferer( $referrerId, $blogId = -1 )
		{
			$prefix = $this->getPrefix();
			$query = "DELETE FROM {$prefix}referers
			          WHERE id = '".Db::qstr($referrerId)."'";
			if( $blogId > 0 )
				$query .= " AND blog_id = '".Db::qstr($blogId)."'";
				
			$result = $this->Execute( $query );
			
			return $result;
		}
		
		/**
		 * returns how many referrers the blog has
		 *
		 *Ê@param blogId
		 * @param articleId
		 * @return a number
		 */
		function getBlogTotalReferers( $blogId, $articleId = -1 )
		{
			$prefix = $this->getPrefix();
			$table  = "{$prefix}referers";
			$cond = "blog_id = '".Db::qstr($blogId)."'";
			if( $articleId > -1 )
				$cond .= " AND article_id = '".Db::qstr($articleId)."'";
			
			return( $this->getNumItems( $table, $cond ));
		}
    }
?>
