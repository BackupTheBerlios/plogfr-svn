<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/misc/glob.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/requestgenerator.class.php" );    
	
	/**
	 * deals with backgrounds in disk and so on...
	 */
	class AuthImage extends Object
	{
        /**
         * tries to detect and load all the different backgrounds that can be found in the
         * backgrounds folder, so that the user can chose the nicest one :)
		 *
		 * @static
         */
        function scanBackgoundImages()
        {
            $gifImages = Glob::glob( AUTHIMAGE_BACKGROUND_FOLDER , '*.gif');
            
            $backgroundImages = Array();
            
            if ( !empty($gifImages) ) {
                foreach($gifImages as $image) {
                    $imageName =  basename($image);
                    array_push( $backgroundImages, $imageName);
                }
            }

            return $backgroundImages;
        }		
	}
?>