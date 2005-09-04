<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );

	/**
	 * \ingroup Config
	 * 
	 * Class inspired by the java class Properties.
	 */
	class Properties extends Object 
	{

		var $_props;

        /**
         * Constructor.
         *
         * @param values If $values == null, then the object will be initialized empty.
         * If it contains a valid PHP array, all the properties will be initialized at once.
         */
		function Properties( $values = null )
		{
			$this->Object();

            if( $values == null )
				$this->_props = Array();
            else
            	$this->_props = $values;
		}

        /**
         * Sets a value in our hash table.
         *
         * @param key Name of the value in the hash table
         * @param value Value that we want to assign to the key '$key'
         */
		function setValue( $key, $value )
		{
			$this->_props[$key] = $value;
		}

        /**
         * Returns the value associated to a key
         *
         * @param key Key whose value we want to fetch
		 * @param defaultValue value that we should return in case the one we're looking for
		 * is empty or does not exist
         * @return Value associated to that key
         */
		function getValue( $key, $defaultValue = null )
		{
            if( !isset($this->_props[$key]) ) {
                return $defaultValue;
            } else {
			    $value = $this->_props[$key];
			    if( empty($value) )
                    if( $defaultValue != null )
                        $value = $defaultValue;
					
                return $value;
            }
		}

		/**
		 * Method overwritten from the Object class
         * @return Returns a nicer representation of our contents
		 */
		function toString()
		{
			print_r( $this->_props );
		}

        /**
         * Returns the internal arrary used to store the properties as a PHP array
         * @return Internal array as a PHP array
         */
		function getAsArray()
		{
			return $this->_props;
		}

        /**
         * Returns an array containing all the keys used
         *
         * @return Array containing all the keys
         */
		function getKeys()
		{
			return array_keys( $this->_props );
		}

        /**
         * Returns an array containing the values
         *
         * @return Array containing the values
         */
		function getValues()
		{
			return array_values( $this->_props );
		}
		
		/**
		 * returns whether a given key exists in the table
		 *
		 * @param key The key name
		 * @return True if the key exists, false otherwise
		 */
        function keyExists( $key )
        {
            return( array_key_exists( $key, $this->_props ));
        }
	}
?>
