<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpclient.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/requestgenerator.class.php" );

    
    /**
     * implements notification of 
     */
    class PluginSiteMap extends PluginBase
    {
        var $pluginEnabled;
        var $cacheFolder;


        function PluginSiteMap()
        {
            $this->PluginBase();
            
            $this->id = "sitemap";
            $this->desc = "Generates Google Sitemap for all permalinks.";
            $this->author = "Paul Westbrook";
            $this->locales = Array( "en_UK", "de_DE" );
            
            $this->init();
        }

        /**
         * registers all the filters and actions that we're going to use
         */
        function init()
        {           
            // register the events we want
            $this->registerNotification( EVENT_POST_POST_ADD );
            $this->registerNotification( EVENT_POST_POST_UPDATE );
            $this->registerNotification( EVENT_POST_POST_DELETE );
            
            // register an action that will allow users to see which comments have not been
            // accepted yet
            $this->registerAdminAction( "sitemapPluginSettings", "AdminSiteMapPluginSettingsAction" );
            $this->registerAdminAction( "sitemapPluginUpdateSettings", "AdminSiteMapPluginUpdateSettingsAction" );
            
            // add a menu entry
            $menu =& Menu::getMenu();
            if( !$menu->entryExists( "/menu/controlCenter/manageSettings" ))                     
                $this->addMenuEntry( "/menu/controlCenter", "manageSettings", "", "", true, false );
            $this->addMenuEntry( "/menu/controlCenter/manageSettings", "sitemapPluginSettings", "admin.php?op=sitemapPluginSettings", "", true, false );
        }

        function register()
        {
            $config =& Config::getConfig();

            $this->cacheFolder = $config->getValue('temp_folder');
            $this->cacheFolder = $this->cacheFolder.'/sitemap/'.$this->blogInfo->getId();
            if( !File::exists( $this->cacheFolder )) {
                File::createDir( $this->cacheFolder );
            }

            $blogSettings = $this->blogInfo->getSettings();
            $this->pluginEnabled = $blogSettings->getValue( "plugin_sitemap_enabled" );
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
            if( $eventType != EVENT_POST_POST_ADD &&
                $eventType != EVENT_POST_POST_UPDATE &&
                $eventType != EVENT_POST_POST_DELETE ) 
            {
                return true;
            }


            // Load all of the settings for this blog
            $this->register();
            
            // do nothing if the plugin is not enabled!
            $blogSettings = $this->blogInfo->getSettings();
            if( !$blogSettings->getValue( "plugin_sitemap_enabled" ))
            {
                // error_log( "plugin not enabled" );
                return true;
            }
              
            $this->GenerateSiteMap( );
              
            return true;
        }
        
        /**
         * Turns on notification for the specified article
         *
         */
        
        function GenerateSiteMap( )
        {
            // articles object
            $articles = new Articles;

             $list = $articles->getBlogArticles(
                $this->blogInfo->getId(),  
                -1,  // date
                -1, // all articles
                0,  // all categories
                POST_STATUS_PUBLISHED  // only published articles
            );

            $url = $this->blogInfo->getBlogRequestGenerator();

            // Data from the xml file that needs to be there.
            $xmlData =  "<?xml version='1.0' encoding='UTF-8'?>\n".
                          "<urlset xmlns=\"http://www.google.com/schemas/sitemap/0.84\"\n".
                          "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\n".
                          "xsi:schemaLocation=\"http://www.google.com/schemas/sitemap/0.84\n".
                          "http://www.google.com/schemas/sitemap/0.84/sitemap.xsd\">\n";
                              
             
            // Iterate over the posts and create an entry for each.
            foreach($list as $item)
            {
                $xmlData =  $xmlData . "<url>\n";
                $xmlData =  $xmlData . "<loc>\n";
                $xmlData =  $xmlData . htmlspecialchars( $url->postPermalink( $item ) ) . "\n";
                $xmlData =  $xmlData . "</loc>\n";
                $xmlData =  $xmlData . "</url>\n";
            }
            $xmlData =  $xmlData . "</urlset>\n";
                
                
            $compressedFile = $this->cacheFolder."/sitemap.gz";  

            
            // Save this to a compressed file.
            $gz = gzopen($compressedFile,'w9');
            if ( $gz )
            {
                gzwrite($gz, $xmlData);
                gzclose($gz);
            }
            
            $blogSettings = $this->blogInfo->getSettings();
            if( $blogSettings->getValue( "plugin_sitemap_notify_google_enabled" ))
            {
                 // Send the request to google
                $rg =& RequestGenerator::getRequestGenerator( $this->blogInfo );
                $rewriteFile = "/sitemap" . $this->blogInfo->getId() . ".gz";
                $rewriteFileUrl = $rg->getUrl($rewriteFile);
                
                $pingUrl = "http://www.google.com/webmasters/sitemaps/ping?sitemap=" . urlencode($rewriteFileUrl);
                
                $handle = fopen( $pingUrl, "r" );
                fclose( $handle );

            }
        }
    }  
?>