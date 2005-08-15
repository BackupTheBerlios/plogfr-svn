<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/trackbacks.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    
    /**
     * Plugin that offers features to returns the top trackback posts object of current blog
     */
    class PluginTopTrackbackPosts extends PluginBase
    {
        var $prefix;
        var $pluginEnabled;
        var $maxPosts;        
    
        function PluginTopTrackbackPosts()
        {
            $this->PluginBase();
  
            $this->id = "toptrackbackposts";
            $this->author = "Mark Wu";
            $this->desc = "This plugin offers the rank list of articles by number of trackbacks.";
  
            $this->prefix = Db::getPrefix();
            
            $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN" );
            
            $this->init();            
        }

		function init()
		{
            $this->registerAdminAction( "toptrackbackposts", "PluginTopTrackbackPostsConfigAction" );
			$this->registerAdminAction( "updateTopTrackbackPostsConfig", "PluginTopTrackbackPostsUpdateConfigAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageTopPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageTopPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageTopPlugins", "TopTrackbackPosts", "?op=toptrackbackposts", "" );            
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
		    $this->pluginEnabled = $blogSettings->getValue( "plugin_toptrackbackposts_enabled" );
	        $this->maxPosts = $blogSettings->getValue( "plugin_toptrackbackposts_maxposts" );
	    }
	    
	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }

        /**
         * Returns the top trackback posts object of current blog
         */
        function getTopTrackbackPosts($maxPosts = 0, $based = 'BLOG')
        {
            $trackbacks = new Trackbacks();
            $blogId = $this->blogInfo->getId();
 
            if ($based == 'BLOG') {           
                $query = "SELECT ".$this->prefix."trackbacks.article_id,count(".$this->prefix."trackbacks.article_id) as trackback_count"; 
                $query .= " FROM ".$this->prefix."trackbacks, ".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."trackbacks.article_id = ".$this->prefix."articles.id AND ".$this->prefix."articles.blog_id = ".$blogId." AND ".$this->prefix."articles.status = 1";
                $query .= " GROUP BY ".$this->prefix."trackbacks.article_id ORDER BY trackback_count DESC";
            } elseif ($based == 'SITE') {
                $query = "SELECT ".$this->prefix."trackbacks.article_id,count(".$this->prefix."trackbacks.article_id) as trackback_count"; 
                $query .= " FROM ".$this->prefix."trackbacks, ".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."trackbacks.article_id = ".$this->prefix."articles.id AND ".$this->prefix."articles.status = 1";
                $query .= " GROUP BY ".$this->prefix."trackbacks.article_id ORDER BY trackback_count DESC";
            } else {
                return false;
            }

            if( $maxPosts > 0 ) 
            {
                $query .= " LIMIT " . $maxPosts; 
            } else {
                $query .= " LIMIT " . $this->maxPosts;
            }

            $result = $trackbacks->_db->Execute( $query ); 

            if( !$result ) 
                return false; 
            
            $toptrackbackposts = Array();
            while( $row = $result->FetchRow()) { 
               $article = $this->getArticle($row["article_id"]);
               array_push( $toptrackbackposts, $article); 
            } 

            return $toptrackbackposts; 
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