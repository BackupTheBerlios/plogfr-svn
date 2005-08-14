<?php

	include_once( PLOG_CLASS_PATH."class/data/validator/validator.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/misc/glob.class.php" );	

	define( "UPLOAD_MAX_SIZE", 2000000 );

    define( "UPLOAD_VALIDATOR_ERROR_UPLOAD_TOO_BIG", -1 );
    define( "UPLOAD_VALIDATOR_ERROR_FORBIDDEN_EXTENSION", -2 );

	/**
	 * \ingroup Validator
	 *
     * Given a FileUpload object, checks that it is not bigger than the maximum size allowed
     * and that it does not have one of the forbidden extensions.
     *
     * The maximum size allowed is controlled via the 'maximum_file_upload_size' configuration setting 
     * and the list of forbidden extensions can be configured via the upload_forbidde_files configuration
     * setting.
     *
     * If the validation is unsuccessful, the error codes UPLOAD_VALIDATOR_ERROR_UPLOAD_TOO_BIG or 
     * UPLOAD_VALIDATOR_ERROR_FORBIDDEN_EXTENSION will be set.
     */
	class UploadValidator extends Validator 
	{

        /**
         * Constructor. Initializes the rule.
         */
    	function UploadValidator()
        {
        	$this->Validator();
        }

    	/**
         * Returns true if the file is a valid upload, after making it go through all
         * our tests.
         *
         * @param upload An FileUpload object containing information about the file
         * @return Returns true if it is valid or a negative value meaning an error otherwise:
         * <ul><li>ERROR_UPLOAD_TOO_BIG (-1): The file bigger than the maximum allowed size</li>
         * <li>ERROR_FORBIDDEN_EXTENSION: The file has a forbidden extension.</li></ul>
         */
    	function validate( $upload )
        {
        	$config =& Config::getConfig();

            $forbiddenFilesStr = $config->getValue( "upload_forbidden_files" );
            $maxUploadSize     = $config->getValue( "maximum_file_upload_size" );
			
			// check if we received an object of the right type, or else just quit
			if( $upload == null ) {
				return false;
			}

            // first of all, check the size
            if( $maxUploadSize != 0 && $upload->getSize() > $maxUploadSize ) {
            	return UPLOAD_VALIDATOR_ERROR_UPLOAD_TOO_BIG;
            }

            // return true if there's nothing to do
            if( empty($forbiddenFilesStr) || !$forbiddenFilesStr )
            	return true;

            // check if the filename extension is forbidden or not
            $fileName = basename($upload->getFileName());
            foreach( explode( " ", $forbiddenFilesStr ) as $file ) {
            	if( Glob::myFnmatch( $file, $fileName )) {
                	return UPLOAD_VALIDATOR_ERROR_FORBIDDEN_EXTENSION;
                }
            }

        	return true;
        }
    }
?>
