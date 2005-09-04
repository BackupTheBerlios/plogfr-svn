<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );

	/**
	 * \ingroup File_Unpacker
	 * 
	 * this is the interface that classes wishing to provide additional methods
	 * for unpacking files must implement. Of course PHP4 does not support native
	 * interface and so we have to resort to this kind of tricks but probably you
	 * already know the drill :)
	 */
	class BaseUnpacker extends Object 
	{

    	function BaseUnpacker()
        {
        	$this->Object();
        }

		/**
		 * method that implements the logic for unpacking files ofa  certain type
		 *
		 * @param file The file that we'd like to unpack
		 * @param destFolder the destination folder
		 * @return true if successful or false otherwise
		 */
        function unpack( $file, $destFolder )
        {
        	throw( new Exception( "This method must be implemented by child classes!" ));

            die();
        }
    }

?>
