<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );

    /**
     * Provides a singleton for accessing the db.
     */
	class ExtDb extends Object {

		function ExtDb()
		{
        		$this->Object();
		}

		function &getDb($dbhost, $dbuser, $dbpass, $dbdatabase)
		{
			static $extdb;

            if( !isset( $extdb )) {

                $extdb = NewADOConnection('mysql');

                $username = $dbuser;
                $password = $dbpass;
                $host     = $dbhost;
                $dbname   = $dbdatabase;

            	if( !$extdb->PConnect( $host, $username, $password, $dbname )) {
            		throw( new Exception( "Fatal error: could not connect to the database!" ));
                	die();
            	}

            	// just in case, forcing to use indexing by field name instead of
            	// by field number
            	$extdb->SetFetchMode( ADODB_FETCH_ASSOC );
            }

            return $extdb;
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
		
			if (get_magic_quotes_gpc) {
				$string = stripslashes($string);
			}
			
			$string = str_replace("'", "''", $string);
			
			return $string;
		}
	}
?>
