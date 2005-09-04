<?php

    include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/file/file.class.php" );

    define( "PLOG_PROJECT_PAGE", "http://www.plogworld.net" );
    
    if ( !defined("DEFAULT_VERSION_FILE") )
      define( "DEFAULT_VERSION_FILE", PLOG_CLASS_PATH . "version.php" );

    /**
     * \ingroup Misc
     *
     * Returns the current version of plog as well as a link to the project page
     */
    class Version extends Object 
    {

        /**
         * Returns the current version of pLog, determined by the value of the $version
         * variable in the version.php file.
         * If the file is not available, the result is unknown.
         * @static
         * @return The version identifier.
         */
        function getVersion()
        {
            $versionFile = PLOG_CLASS_PATH."version.php";
            if( File::isReadable( $versionFile ))
                include_once( $versionFile );
            else
                $version = "UNKNOWN";

            return $version;
        }

        /**
         * Returns the official page of the project.
         *
         * @return The official project page.
         * @static
         */
        function getProjectPage()
        {
            return PLOG_PROJECT_PAGE;
        }
    }
?>