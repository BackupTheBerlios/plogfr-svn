<?php

	/**
	 * \defgroup Database
	 *
	 * Database-related objects
	 */

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/configfilestorage.class.php" );
    include_once( PLOG_CLASS_PATH."class/database/adodb/adodb.inc.php" );

    /**
	 * \ingroup Database
	 *
     * Provides a singleton for accessing the db and interfaces with ADOdb
     */
	class Db extends Object 
	{

		function Db()
		{
        	$this->Object();
		}

		function &getDb()
		{
			static $db;

            if( !isset( $db )) {
            	// we need to connect to the db
                $fileConfig = new ConfigFileStorage();

                $db = NewADOConnection('mysql');

                $username = $fileConfig->getValue( "db_username" );
                $password = $fileConfig->getValue( "db_password" );
                $host     = $fileConfig->getValue( "db_host" );
                $dbname   = $fileConfig->getValue( "db_database" );

            	if( !$db->PConnect( $host, $username, $password, $dbname )) {
            		throw( new Exception( "Fatal error: could not connect to the database!" ));
                	die();
            	}

            	// just in case, forcing to use indexing by field name instead of
            	// by field number
            	$db->SetFetchMode( ADODB_FETCH_ASSOC );
            }

            return $db;
		}

		function &getDbCache()
		{
			static $dbcache;

            if( !isset( $dbcache )) {
            	$dbcache=Array();
            }

            return $dbcache;
		}
		
		/**
		 * returns the prefix as configured for this database connection
		 *
		 * @return A string containing the database prefix
		 * @static
		 */
		function getPrefix()
		{
			$fileConfig = new ConfigFileStorage();
			$prefix = $fileConfig->getValue( "db_prefix" );
			return( $prefix );	
		}

		/**
		 * Prepares a string for an SQL query by escaping apostrophe
		 * characters. If the PHP configuration setting 'magic_quotes_gpc'
		 * is set to ON, it will first strip the added slashes. Apostrophe
		 * characters are doubled, conforming with the ANSI SQL standard.
		 * The SQL parser makes sure that the escape token is not entered
		 * in the database so there is no need to modify the data when it
		 * is read from the database.
		 *
		 * @param  string $string
		 * @return string
		 * @access public
		 */
		function qstr($string) {

			if (get_magic_quotes_gpc()) {
				$string = stripslashes($string);
			}

			$string = str_replace("'", "''", $string);

			return $string;
		}
	}
?>
