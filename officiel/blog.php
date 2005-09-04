<?php

    if (!defined( "PLOG_CLASS_PATH" )) {
        define( "PLOG_CLASS_PATH", dirname(__FILE__)."/");
    }
    
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/customurlhandler.class.php" );
    
    // get the configuration data
    $config =& Config::getConfig();
    
    // in order to maintain compatilibity with previous version, and the alternative
    // format of search-engine friendly urls
    if( $config->getValue( "request_format_mode" ) == SEARCH_ENGINE_FRIENDLY_MODE ) {
        include_once( PLOG_CLASS_PATH."error.php" );
        die();
    }
                          
    $server = HttpVars::getServer();
	$requestParser = new CustomUrlHandler();
	$requestParser->process( $server["REQUEST_URI"] );	
	$vars = $requestParser->getVars();
	$params = $requestParser->getParams();
	$includeFile = $requestParser->getIncludeFile();
	
	//
	// fill in the request with the parameters we need
	//
	$vars["op"] = "op";
	foreach( $vars as $key => $value ) {
		if( is_array( $params ) && array_key_exists( $key, $params ) && $params["$key"] != "" ) 
			HttpVars::setRequestValue( $vars["$key"], $params["$key"] );
	}

	// and transfer execution to the main script
    include_once( PLOG_CLASS_PATH.$includeFile );
?>