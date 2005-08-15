<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/trackbacks.class.php" );
    
    /**
     * Plugin that offers features to return a recent trackbacks from the current blog
     */
    class PluginRecentTrackbacks extends PluginBase
    {
        var $prefix;
        var $pluginEnabled;
        var $maxTrackbacks;
            
        function PluginRecentTrackbacks()
        {
            $this->PluginBase();
  
            $this->id = "recenttrackbacks";
            $this->author = "Mark Wu";
            $this->desc = "This plugin offers the most recently article trackbacks.";

            $this->prefix = Db::getPrefix();
            
            $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN", "es_ES" );
            
            $this->init();
            
        }

		function init()
		{
            $this->registerAdminAction( "recenttrackbacks", "PluginRecentTrackbacksConfigAction" );
			$this->registerAdminAction( "updateRecentTrackbacksConfig", "PluginRecentTrackbacksUpdateConfigAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageRecentPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageRecentPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageRecentPlugins", "RecentTrackbacks", "?op=recenttrackbacks", "" );            
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
		    $this->pluginEnabled = $blogSettings->getValue( "plugin_recenttrackbacks_enabled" );
	        $this->maxTrackbacks = $blogSettings->getValue( "plugin_recenttrackbacks_maxtrackbacks" );
	    }
	    
	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }

        /**
         * Returns the recent trackbacks object of current blog
         */
        function getRecentTrackbacks($maxTrackbacks = 0, $based = 'BLOG')
        {
            $trackbacks = new Trackbacks();
            $blogId = $this->blogInfo->getId();
            
            if ($based == 'BLOG') { 
                $query = "SELECT ".$this->prefix."trackbacks.* FROM ".$this->prefix."trackbacks, ".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."trackbacks.article_id = ".$this->prefix."articles.id AND ".$this->prefix."articles.blog_id = ".$blogId." AND ".$this->prefix."articles.status = 1";
                $query .= " ORDER BY ".$this->prefix."trackbacks.date DESC";
            } elseif ($based == 'SITE') {
                $query = "SELECT ".$this->prefix."trackbacks.* FROM ".$this->prefix."trackbacks, ".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."trackbacks.article_id = ".$this->prefix."articles.id AND ".$this->prefix."articles.status = 1";
                $query .= " ORDER BY ".$this->prefix."trackbacks.date DESC";
            } else {
                return false;
            }

            if( $maxTrackbacks > 0 ) 
            {
                $query .= " LIMIT " . $maxTrackbacks; 
            } else {
                $query .= " LIMIT " . $this->maxTrackbacks;
            }

            $result = $trackbacks->_db->Execute( $query ); 

            if( !$result ) 
                return false; 
            
            $recenttrackbacks = Array();
            while( $row = $result->FetchRow()) { 
               array_push( $recenttrackbacks, $trackbacks->_fillTrackbackInformation($row)); 
            } 

            return $recenttrackbacks; 
        }
        
        function getArticle( $artId )
        {
            $articles = new Articles();
            $blogId = $this->blogInfo->getId();
            
            $query = "SELECT * FROM ".$this->prefix."articles WHERE id = ".$artId;

               $query .= " AND blog_id = ".$blogId;

            $query .= ";";

            // we send the query and then fetch the first array with the result
            $result = $articles->_db->Execute( $query );

            if( $result == false )
                return false;

            if ( $result->RecordCount() == 0)
                return false;

            $row = $result->FetchRow( $result );

            $article = $articles->_fillArticleInformation( $row );

            return $article;
        }
    }
?>