<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );

	/**
	 * \ingroup Gallery_resizer
	 *
     * Abstract class for generating thumbnails. It actually provides no methods but only
     * the skeleton of the functions that should be implemented by the generators
     * themselves.
     */
	class GalleryAbstractResizer extends Object 
	{

    	var $_image;
    	var $_outputMethod;

        /**
         * Constructor.
         *
         */
        function GalleryAbstractResizer( $image, $outputMethod )
        {
        	$this->Object();

            $this->_image  = $image;
            $this->_outputMethod = $outputMethod;
        }

        /**
         * Generates the thumbnail
         * Uses the values set in the constructor regarding the width, height and output format
         *
         * @return Returns a the path to the thumbnail that was generated, or empty if error
		 * @see GalleryResizer::generate()
         */
        function generate( $outFile, $width, $height )
        {
        	throw( new Exception( "This function can't be called and must be implemented by child classes!" ));
            die();
        }
    }
?>
