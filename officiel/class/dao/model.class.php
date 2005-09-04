<?php

    /**
	 * \defgroup DAO
	 *	
     * DAO stands for "Data Access Object" and represents a data model according to the MVC architecture. 
	 *
	 * DAO classes isolate developers of all the intricacies of the database structure, so that for example
	 * loading a post from the dabase is as easy as:
	 *
	 * <pre>
	 *   $articles = new Articles();
	 *   $userPost = $arcticles->getBlogArticle( 15 );
	 * </pre>
	 *
	 * Otherwise, developers would need to write an SQL query every time we need to load an article from the database. In
	 * general, DAO classes provide access to reading, updating and removing data from the database. In pLog, we usually
	 * have two classes per entity: a smaller one that contains no database access logic and that only contains the
	 * information necessary (usually, it represents a row from the database), and the second will be a bigger
	 * class that includes SQL code and database logic and that provides all the methods outlined above (read, update
	 * and remove from the database) Examples of this are Articles and Article, or Users and UserInfo. 
	 *
	 * Other relevant DAO classes are ArticleComments and UserComment, MyLink and MyLinks, etc.
	 *
	 * All classes that extend the base Model class, automatically inherit an open connection to the database 
	 * (via the private attribute Model::_db) and several other database-related methods. 
	 *
	 * If you need to implement some kind of data access, please extend from Model.
     *
	 */

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/database/db.class.php" );

	/**
	 * default database prefix, if none other specified
	 */
    define( "DEFAULT_DB_PREFIX", "plog_" );

	/**
	 * whether database-level debugging is enabled
	 */
	define( "DAO_DEBUG_ENABLED", false );

	/**
	 * how many items per page by default, when paging is enabled
	 */
	define( "DEFAULT_ITEMS_PER_PAGE", 15 );
	
	/**
	 * whether we're going to use paging or not.
	 */
	define( "DEFAULT_PAGING_ENABLED", -1 );

	/**
	 * \ingroup DAO
	 *
     * This class provides all the classes extending it with a database connection so that classes don't have to 
	 * worry about that. Later on, the Model classes will be used by the corresponding action object.
     */
    class Model extends Object 
	{

		var $_db;		
        var $_prefix;

        /**
         * So far, it only initializes the connection to the database, using the ADOdb API.
         */
		function Model()
        {
            $this->Object();

            $this->_db =& Db::getDb();

            // fetch the database prefix            
            $this->_prefix = Db::getPrefix();

			$this->_db->debug=DAO_DEBUG_ENABLED;
        }

		/**
		 * executes a query with certain limits (for paging, for ex.
		 *
		 * @param query
		 * @param page
		 * @param itemsPerPage
		 * @see Execute
		 * @return A ResultSet or false if errors
		 */        
        function Execute( $query, $page = DEFAULT_PAGING_ENABLED, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
        {
			// if paging is enabled...
			if( $page > DEFAULT_PAGING_ENABLED ) {
				$start = (($page - 1) * $itemsPerPage);
				$limits = " LIMIT $start, $itemsPerPage";
				$query .= " $limits";
			}
		
			$result = $this->_db->Execute( $query );

			// if the query generated an error, write a message to the sql error log file
			if( !$result ) {
				$log =& LoggerManager::getLogger( "sqlerr" );
				$error = $this->DbError();
				$log->error( "The following query = \n{$query}\ngenerated the following error message = \n{$error}" );
			}
				
			return( $result );
        }

		/**
		 * executes and caches a query, using ADOdb's built-in caching features
		 *
		 * @param query the query to execute
		 */
		function CacheExecute( $query ) 
		{
			$queryCache=& Db::getDbCache();
			
			// we should only cache 'SELECT' queries
			if( substr($query, 0, 6) == "SELECT" ) {
				if( empty($queryCache[$query])) {
					$queryCache[$query] = $this->_db->Execute( $query );
				}
					
				$result = $queryCache[$query];
			}
			else {
				$result = $this->_db->Execute( $query );
			}
			
			return $result;
		}

        /**
         * Returns the last error message from the database.
         */
        function DbError()
        {
        	return $this->_db->ErrorMsg();
        }

		/**
		 * returns the current database prefix
		 *
		 * @return the current database prefix
		 */
        function getPrefix()
        {
        	return $this->_prefix;
        }

		/**
		 * retrieves the number of records in a table given an optional condition
		 *
		 * @param table
		 * @param cond
		 * @return the number of items or 0 if none or error
		 */
		function getNumItems( $table, $cond = "" )
		{
			// build up the query
			if( $cond != "" ) $cond = "WHERE $cond";
			$query = "SELECT COUNT(*) AS total FROM $table $cond";

			// execute it
			$result = $this->Execute( $query );

			if( !$result )
				return 0;
			
			// if no error, get the result
			$row = $result->FetchRow();
			$total = $row["total"];
			if( $total == "" ) $total = 0;
			
            $result->Close();			

			return $total;
		}
    }
?>