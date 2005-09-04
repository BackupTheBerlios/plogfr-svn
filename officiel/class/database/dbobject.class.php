<?php

    include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    
    /**
	 * \ingroup Database
	 * 
	 * The DbObject is the object that ideally all object representing one database row should
	 * extend. It doesn't provide too many features yet but it is planned to provide them in the
	 * future.
     */
    class DbObject extends Object
    {
    
        var $_properties;
        
        function DbObject()
        {
            $this->Object();
            $this->_properties = Array();
        }
        
        /**
         * assigns a generic value
         *
         * @param key
         * @param value
         * @return true
         */
        function setValue( $key, $value )
        {
            // make sure that we're dealing with an array here...
            if( !is_array($this->_properties))
                $this->_properties = Array();
                
            $this->_properties["$key"] = $value;
            
            return true;
        }
        
        /**
         * fetches a generic value
         *
         * @param key
         * @return the value associated to the key
         */
        function getValue( $key )
        {
            if( !is_array($this->_properties))
                return "";
                
            return $this->_properties["$key"];
        }
        
        /**
         * returns all the properties
         *
         * @return An array with the properties
         */
        function getProperties()
        {
            return $this->_properties;
        }
        
        /**
         * assigns all the properties at once
         *
         * @param properties An associative array
         * @return true
         */
         function setProperties( $properties )
         {
            $this->_properties = $properties;
         }
         
         /**
          * merges the current properties with the ones given
          * in the array passed as a parameter
          *
          * @param properties
          * @return True
          */
          function addProperties( $properties )
          {
            // simply loop through the array and see what we can find...
            foreach( $propertites as $key => $value ) {
                $this->setValue( $key, $value );
            }
            
            return true;
          }
    }
?>