<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/linkparser.class.php" );	
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/url.class.php" );
	
	/**
	 * \ingroup Net_HTTP
	 *
	 * encapsulates most of the logic needed to extract info about
	 * the subdomain, given a subdomain url
	 */
	class Subdomains extends Object
	{
		/**
		 * returns an array with two positions: $array["username"] and $array["blogname"] as
		 * extracted from the request. This method is static
		 *
		 * @static
		 * @return an associative array
		 */
		function getSubdomainInfoFromRequest()
		{
			$config =& Config::getConfig();
			$url = new Url( $config->getValue( "subdomains_base_url"));
			$lp =  new LinkParser( $url->getHost());
			$server = HttpVars::getServer();
			$httpHost = $server["HTTP_HOST"];
			$result = $lp->parseLink( $httpHost );	
			
			return( $result );
		}
		
		/**
		 * returns true if a given url is using a subdomain or not. It works by comparing
		 * the url with "base_url" from the plog_config table. If they match, then the incoming
		 * url is *not* using subdomains. Otherwise, it will return true
		 *
		 * @param url If null, use $_SERVER["HTTP_HOST"]
		 * @return true if the given url is subdomained or not
		 * @static
		 */
		function isSubdomainUrl( $url = null )
		{
			// prepare the url
			if( $url == null ) {
				$server = HttpVars::getServer();
				$urlObject = new Url( "http://".$server["HTTP_HOST"] );
			}
			else
				$urlObject = new Url( $url );
			
			// and now get the base_url
			$config =& Config::getConfig();
			$baseUrlObject = new Url( $config->getValue( "base_url" ));
			
			// and finally check if whether they match or not
			if( $urlObject->getHost() == $baseUrlObject->getHost())
				$isSubdomain = false;
			else
				$isSubdomain = true;
			
			// return it...
			return( $isSubdomain );
		}
	}
?>