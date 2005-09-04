<?php

/**

\mainpage

<b>Welcome to the pLog API!</b>

<p>This is the starting point of the pLog API. The API provides an abstraction layer to represent
all entities that are used in pLog: Articles, Users, Blogs, etc. The API borrows a lot of ideas from
strong object-oriented languages such as Java and C# so do not be surprised if some of the design decisions
look strangely familiar.
</p>
<p>Every object in pLog extends the Object class, or at least all those objects created internally
inherit from this class (while you are free not to follow this pattern when creating your own custom
classes) The Object class provides some very basic methods related to dealing with classes such as getting
the name of a class, getting access to its attributes or methods. It is closely modelled after the same
Java class.</p>
<p>This documentation should only be used as a reference, and for checking which methods each class has and to
get some basic information about them. This documentation does not try to be an in-depth introduction to the
pLog API and the best place for developers to get acquainted with pLog is the wiki: http://wiki.plogworld.net/index.php/Developers_Documentation
 */	 
	 
    if(PHP_VERSION < 5)
	    include_once( PLOG_CLASS_PATH."class/object/exception.class.php" );

	include_once( PLOG_CLASS_PATH."class/logger/loggermanager.class.php" );
    include_once( PLOG_CLASS_PATH."debug.php" );
	
	/**
	 * \defgroup Core
	 *
	 * These classes are at the lowest level of the pLog object model. Included here is the Object class,
	 * which is the base class from which all other classes in pLog inherit. The Core package also includes
	 * classes for dealing with <b>simulated</b> exceptions in PHP4 (they are disabled in PHP5 and the
	 * framework will use native exceptions), and a bit of reflection too using PHP4's reflection
	 * features.
	 */

	/**
	 * \ingroup Core
	 * 
	 * This is the highest class on the top of our hierarchy. Provides some common methods
     * useful to deal with objects, an also some commodity methods for debugging such as
     * toString, which will dump the names and the values of the attributes of the object.
     * All the objects should inherit from this one and call this constructor manually, due
     * to PHP not automatically calling the parent's class constructor when inheriting.
	 */
	class Object {

    	var $_objId;
		var $log;

    	/**
         * Constructor
         */
		function Object()
		{
			// initialize logging -- enable this only for debugging purposes
			//$this->log =& LoggerManager::getLogger( "default" );
            if (is_object($this->log))
                $this->log->debug('Memory used: ' . memory_get_usage());
		}

        function __getObjectId()
        {
        	return $this->_objId;
        }

		/**
		 * Returns a string with a representation of the class
         * @return The string representing the object
		 */
		function toString()
		{
			// returns the name of the class
			$ret_str = get_class( $this )." ".$this->_dumpVars();

			return $ret_str;
		}

		function _dumpVars()
		{
			$vars = get_object_vars( $this );

			$keys = array_keys( $vars );

			$res = "[";

			foreach( $keys as $key )
				$res .= " ".$key."=".$vars[$key];

			$res .= " ]";

			return $res;
		}

		/**
		 * Returns the name of the class
         * @return String with the name of the class
		 */
		function className()
		{
			return get_class( $this );
		}

		/**
		 * Returns the name of the parent class
         * @return String containing the name of the parent class
		 */
		function getParentClass()
		{
			$parent_class_name = get_parent_class( $this );

			return $parent_class_name;
		}

		/**
		 * Returns true if the current class is a subclass of the given
		 * class
         * @param $object The object.
         * @return True if the object is a subclass of the given object or false otherwise.
		 */
		function isSubclass( $object )
		{
			return is_subclass_of( $this, $object->className());
		}

		/**
		 * Returns an array containing the methods available in this class
         * @return Array containing all the methods available in the object.
		 */
		function getMethods()
		{
			return get_class_methods( $this );
		}

        /**
         * Returns true if the class is of the given type.
         *
         * @param object Object
         * @return Returns true if they are of the same type or false otherwise.
         */
		function typeOf( $object )
		{
			return is_a( $this, $object->className());
		}
	}
?>
