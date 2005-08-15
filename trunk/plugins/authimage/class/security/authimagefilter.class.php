<?php

	include_once( PLOG_CLASS_PATH."class/security/pipelinefilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/file/file.class.php" );	
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );	

    // custom error code that will be returned to the pipeline whenever an
    // error is found... Be careful so as to not to have two different modules
    // use the same code!!
    define( "AUTHIMAGE_FILTER_MATCH_FOUND", 1011 );

    /**
     * Filters the text posted in a comment by a user, to prevent spam-bots. This
     * filter only works if the incoming request has the "op" parameter as
     * "AddComment", because then it means that we're posting a comment. If it's not
     * like that, then we'll quit. Otherwise, the process will continue as normally.
     */
	class AuthImageFilter extends PipelineFilter 
	{

    	function AuthImageFilter( $pipelineRequest )
        {
        	$this->PipelineFilter( $pipelineRequest );
        }

        function filter()
        {
        	// get some info
            $blogInfo = $this->_pipelineRequest->getBlogInfo();
            $request  = $this->_pipelineRequest->getHttpRequest();

        	// check if this section has been enabled or disabled
            $blogSettings = $blogInfo->getSettings();
		    $pluginEnabled = $blogSettings->getValue( "plugin_authimage_enabled" );
            if( !$pluginEnabled) {
            	$result = new PipelineResult();
                return $result;
            }

            // we only have to filter the contents if the user is posting a comment
            // so there's no point in doing anything else if that's not the case
            if( $request->getValue( "op" ) != "AddComment" ) {
            	$result = new PipelineResult();
                return $result;
            }

            $config =& Config::getConfig();
            $cacheFolder = $config->getValue('temp_folder');
			$cacheFolder = $cacheFolder.'/authimage/'.$blogInfo->getId();

            // text and topic of the comment
            $key = $blogSettings->getValue( "plugin_authimage_key" );
            $code = $request->getValue( "authImage" );
            $encrypt = $this->encrypt($code, $key);
            $tempFile = $cacheFolder."/".$encrypt.".gif";
           	if ( !File::exists( $tempFile ) ) {
               	// if there is a match, we can quit and reject this request
                $locale = $blogInfo->getLocale();
                $result = new PipelineResult( false, AUTHIMAGE_FILTER_MATCH_FOUND, $locale->tr("error_authimage_code") );
                return $result;
            }
            
            // if everything went fine, we can say so by returning
            // a positive PipelineResult object
            $result = new PipelineResult();
            return $result;
        }

        function encrypt($string, $key) {
            $plainText = $string.$key;
            $encodeText = md5($plainText);
            return $encodeText;
        }        
    }
?>
