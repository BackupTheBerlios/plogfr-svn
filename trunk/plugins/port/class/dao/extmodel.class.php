<?php

    include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/database/adodb/adodb.inc.php" );
    include_once( PLOG_CLASS_PATH."plugins/port/class/database/extdb.class.php" );

    define( DEFAULT_DB_PREFIX, "plog_" );

    /**
     * Represents a data model according to the MVC architecture.
     *
     * This class provides all the classes extending it with a database
     * connection so that classes don't have to worry about that. Later on, the Model
     * classes will be used by the corresponding action object.
     */
    class ExtModel extends Object {

	  var $_db;
        var $_prefix;

        /**
         * So far, it only initializes the connection to the database, using the ADOdb API.
         */
	function ExtModel ($hostname, $username, $password, $dbname, $tableprefix)
      {
		//$this->_fileConfig = new ConfigFileStorage();

           	$this->_db =& ExtDb::getDb($hostname, $username, $password, $dbname);
		$this->_db->SetFetchMode( ADODB_FETCH_ASSOC );
           	$this->_prefix = $tableprefix;

		$this->_db->debug=false;
      }
        
        function Execute( $query )
        {
            return $this->_db->Execute( $query );
        }

        /**
         * Returns the last error message from the database.
         */
        function DbError()
        {
        	return $this->_db->ErrorMsg();
        }

        function getPrefix()
        {
        	return $this->_prefix;
        }
    }
?>
