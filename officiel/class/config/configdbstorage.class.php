<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/configfilestorage.class.php" );
	include_once( PLOG_CLASS_PATH."class/database/db.class.php" );

    /**
	 * \ingroup Config
	 *
     * Storage backend that stores/retrieves the data from the plog_config
     * table.
     * The structore of the table is as follows:
	 *
     * - id: setting identifier
     * - config_key: Name of the setting. Can't be empty
     * - config_value: Value assigned to the key
     * - value_type: This field can take several values and gives the class
     * a hint regardign the type of the value:
     * -- 1: integer. The config_value field represents is value.
     * -- 2: boolean. It is saved as 1 == true and 0 == false.
     * -- 3: string. It is saved as is.
     * -- 4: object. The object is saved in a seralized way.
     * -- 5: array. The arrays are also saved serialized. This is transparently
     * done inside the save() and saveValue() methods, and therefore the user
     * does not have to worry about doing it.
     * -- 6: float. It is saved as is.
     * 
     * Type detection is provided via the built-in mechanisms that PHP offers.
     * </ul>
     */
    class ConfigDbStorage extends ConfigAbstractStorage 
    {
        // ADOdb handler
        var $_db;

        // array used to store the options
        var $_data;
		
    	// information needed to connect to the db server
        var $_dbPrefix;		
        
        /**
         * Connects to the database using the parameters in the config file.
         *
         */
    	function ConfigDbStorage( $params = null )
        {            
            // initialize the connection
            $this->_db =& Db::getDb();
            // get the prefix
            $this->_dbPrefix = Db::getPrefix();

            // and finally, load the whole data
            $this->_loadData();
        }

        /**
         * Internal function that loads all the data from the table and puts in into
         * our array. It should be apparently faster that making an SQL query every time
         * we need to get a value.
         *
         * @private
         */
        function _loadData()
        {
        	$this->_data = Array();

            // build and execute the query
            $query = "SELECT * FROM ".$this->_dbPrefix."config";
            $result = $this->_db->Execute( $query );

            // this is a severe error
            if( !$result ) {
	            print($this->_db->ErrorMsg());
            	throw( new Exception( "There was an error loading the configuration data from the database. And this is bad..." ));
                die();
            }

            // otherwise, go through the records and put them in the array
            while( $row = $result->FetchRow()) {
            	$key = $row["config_key"];
                $value = $row["config_value"];
                $dataType = $row["value_type"];

                // arrays and objects are saved serialized so we should check
                // the type and deserialize that if necessary
                if( $dataType == TYPE_OBJECT || $dataType == TYPE_ARRAY ) {
                	$this->_data[$key] = unserialize( stripslashes($value));
                    if( $dataType == TYPE_ARRAY && $this->_data[$key] == "" )
                    	$this->_data[$key] = Array();
                }
                else
                	$this->_data[$key] = $value;
            }

            return true;
        }

        function getValue( $key, $defaultValue = null )
        {
            if(!array_key_exists($key, $this->_data) ||
                $this->_data[$key] == "" || 
                $this->_data[$key] == null) {
                return $defaultValue;
            } else {
                return $this->_data[$key];
            }
        }

        function setValue( $key, $value )
        {
        	$this->_data[$key] = $value;

            return true;
        }

        function getAsArray()
        {
        	return $this->_data;
        }

        function getConfigFileName()
        {
        	return "database";
        }

        function reload()
        {
        	$this->_loadData();
        }

        function getKeys()
        {
        	return array_keys($this->_data);
        }

        function getValues()
        {
        	return array_values($this->_data);
        }

        /**
         * Internal function that returns true if the given key exists in the database.
         *
         * @private
         * @param key The name of the key we'd like to check
         * @return Returns true if it exists or false otherwise.
         */
        function _keyExists( $key )
        {
        	$query = "SELECT * FROM ".$this->_dbPrefix."config WHERE config_key = '$key'";

            //$this->_db->debug=true;
            $result = $this->_db->Execute( $query );

            if( !$result )
            	return false;

            if( $result->RowCount() > 0 )
            	return true;
            else
            	return false;
        }

		/**
		 * @private
		 */
        function _updateValue( $key, $value )
        {
        	// if the key exists, we have to update it
            $type = $this->_getType( $value );
            switch( $type ) {
				 case TYPE_INTEGER:
                 case TYPE_BOOLEAN:
                 case TYPE_FLOAT:
                 	$query = "UPDATE ".$this->_dbPrefix."config SET config_value =
                             '$value', value_type = $type WHERE config_key = '$key'";
                    break;
                 case TYPE_STRING: // need to add quotes here
                 	$query = "UPDATE ".$this->_dbPrefix."config SET config_value =
                             '".Db::qstr($value)."', value_type = $type WHERE config_key = '$key'";
                    break;
                 case TYPE_ARRAY:
                 case TYPE_OBJECT:	// need to serialize here
                 	$serValue = addslashes(serialize( $value ));
                 	$query = "UPDATE ".$this->_dbPrefix."config SET config_value =
                             '$serValue', value_type = $type WHERE config_key = '$key'";
                    break;
                 default:
                 	throw( new Exception( "_updateValue: _getType produced an unexpected value of $type when checking value \"$value\""));
                    die();
             }
			 
             $result = $this->_db->Execute( $query );

             if( $result )
             	return true;
             else
             	return false;
        }

		/**
		 * @private
		 */
        function _insertValue( $key, $value )
        {
        	$type = $this->_getType( $value );
            switch( $type ) {
            	case TYPE_INTEGER:
                case TYPE_BOOLEAN:
                case TYPE_FLOAT:
                	$query = "INSERT INTO ".$this->_dbPrefix."config (config_key,config_value,value_type)
                              VALUES( '$key', '$value', $type )";
                    break;
                case TYPE_STRING: // need to add quotes here
                     $query = "INSERT INTO ".$this->_dbPrefix."config (config_key,config_value,value_type)
                              VALUES( '$key', '".Db::qstr($value)."', $type )";
                     break;
                case TYPE_ARRAY:
                case TYPE_OBJECT:	// need to serialize here
                 	$serValue = addslashes(serialize( $value ));
                    $query = "INSERT INTO ".$this->_dbPrefix."config (config_key,config_value,value_type)
                              VALUES( '$key', '$serValue', $type )";
                    break;
                default:
                    throw( new Exception( "_insertValue: _getType produced an unexpected value of $type" ));
                    die();
             }

             $result = $this->_db->Execute( $query );

             if( $result )
             	return true;
             else
             	return false;
        }

        /**
         * Puts all the settings back to the database.
         *
         * It is done so that we first check if the key exists. If it does, we then
         * send an update query and update it. Otherwise, we add it.
         *
         * @param key The name of the key
         * @param The value.
         * @return True if successful or false otherwise
         */
        function save()
        {
            // load all the data
        	foreach( $this->_data as $key => $value ) {
            	$this->saveValue( $key, $value );
            }

            // saveValue is already reloading the data for us everytime!
            return true;
        }

        /**
         * Puts just one setting back to the database.
         *
         * It is done so that we first check if the key exists. If it does, we then
         * send an update query and update it. Otherwise, we add it.
         *
         * @param key The name of the key
         * @param The value.
         * @return True if successful or false otherwise
         */
        function saveValue( $key, $value )
        {
            if( $this->_keyExists( $key )) {
                // just update it in the db
                $result = $this->_updateValue( $key, $value );
            }
            else {
            	 // we have to first insert the data into the db
                 $result = $this->_insertValue( $key, $value );
            }

            // we better reload the data just in case
            $this->reload();

            return $result;
        }
    }
?>
