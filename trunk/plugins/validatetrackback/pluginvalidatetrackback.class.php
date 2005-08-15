<?php

	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/trackbackclient.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/trackbacks.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/http/httpclient.class.php" );
	
	/**
	 * implements moderation of comments
	 */
	class PluginValidateTrackback extends PluginBase
	{
	    var $pluginEnabled;
	    
		function PluginValidateTrackback()
		{
			$this->PluginBase();
			
			$this->id = "validatetrackback";
			$this->desc = "Provides validation of trackbacks.";
			$this->author = "Paul Westbrook";
			$this->locales = Array( "en_UK", "zh_TW", "es_ES" );
			
			$this->init();
		}

		/**
		 * registers all the filters and actions that we're going to use
		 */
		function init()
		{			
			// register the events we want
			$this->registerNotification( EVENT_POST_TRACKBACK_ADD );
			
			// register an action that will allow users to see which comments have not been
			// accepted yet
			$this->registerAdminAction( "validatetrackbackPluginSettings", "AdminValidateTrackbackPluginSettingsAction" );
			$this->registerAdminAction( "validatetrackbackPluginUpdateSettings", "AdminValidateTrackbackPluginUpdateSettingsAction" );
			
			// add a menu entry
			$menu =& Menu::getMenu();
            if( !$menu->entryExists( "/menu/controlCenter/manageAntiSpamPlugins" ))                     
                $this->addMenuEntry( "/menu/controlCenter", "manageAntiSpamPlugins", "", "", true, false );
            $this->addMenuEntry( "/menu/controlCenter/manageAntiSpamPlugins", "validatetrackbackPluginSettings", "admin.php?op=validatetrackbackPluginSettings", "", true, false );
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
			$this->pluginEnabled = $blogSettings->getValue( "plugin_validatetrackback_enabled" );
		}

	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }		
		
		/**
		 * process the events that we have registered
		 *
		 * @see PluginBase::process
		 * @see PluginManager
		 */
		function process( $eventType, $params )
		{
		    // make sure we're processing the right event!
		    if( $eventType != EVENT_POST_TRACKBACK_ADD ) 
		      return true;
			  
			// do nothing if the plugin is not enabled!
			$blogSettings = $this->blogInfo->getSettings();
			if( !$blogSettings->getValue( "plugin_validatetrackback_enabled" ))
				return true;
			  
			// change the stauts of the comment, as is easy as it seems...
			$trackback = $params["trackback"];
			$this->Validate( $trackback );
		      
			return true;
		}
		
	    /**
     	* Fetches a page from the given url.
	     *
	     * @param url The url with the page we would like to fetch.
	     * @return Returns a string with the contents of the page or an empty string if the page
	     * could not be fetched.
	     */
	    function fetchPage( $url )
	    {
    		$s = new HttpClient();
        	$result = $s->fetch( $url );

        	if( !$result ) {
                            if($s->timed_out)
                	//print("timed out!!!");
        		return "";

            }
        	else
        		return $s->results;
    	}
		
		function Validate( $trackback )
		{
            // Get the page
            $url = TextFilter::htmlDecode( $trackback->_url );
            $page = $this->fetchPage( $url );            
            
            // Get the trackback client
            $tbClient = new TrackbackClient();
            
            // get the trackback url
            $tbLinks = $tbClient->getTrackbackLinks( $page, $url );
            if( empty( $tbLinks)) {
                // there were no trackback links in the page
 //               error_log( "Found no trackback urls" );

                // Delete this trackback
                $trackbacks = new Trackbacks();
                
                $trackbacks->deletePostTrackback( $trackback->_id, $trackback->_articleId );
                //print("Error: trackback unavailable<br/>");
            }
		}
	}  
?>