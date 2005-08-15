<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    
    /**
     * Plugin that offers features to returns the top read posts object of current blog
     */
    class PluginTopReadPosts extends PluginBase
    {

        var $prefix;
        var $pluginEnabled;
        var $maxPosts;  
    
        function PluginTopReadPosts()
        {
            $this->PluginBase();
  
            $this->id = "topreadposts";
            $this->author = "Mark Wu";
            $this->desc = "This plugin offers the rank list of articles by number of read.";  

            $this->prefix = Db::getPrefix();
            
            $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN" );
            
            $this->init(); 
        }

		function init()
		{
            $this->registerAdminAction( "topreadposts", "PluginTopReadPostsConfigAction" );
			$this->registerAdminAction( "updateTopReadPostsConfig", "PluginTopReadPostsUpdateConfigAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageTopPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageTopPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageTopPlugins", "TopReadPosts", "?op=topreadposts", "" );            
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
		    $this->pluginEnabled = $blogSettings->getValue( "plugin_topreadposts_enabled" );
	        $this->maxPosts = $blogSettings->getValue( "plugin_topreadposts_maxposts" );
	    }
	    
	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }
 
        /**
         * Returns the top read posts object of current blog
         */
        function getTopReadPosts($maxPosts = 0, $based = 'BLOG')
        {
            $articles = new Articles();
            $blogId = $this->blogInfo->getId();
            
            if ($based == 'BLOG') { 
                $query = "SELECT * FROM ".$this->prefix."articles";
                $query .= " WHERE blog_id = ".$blogId." AND status = 1";
                $query .= " ORDER BY num_reads DESC";                
            } elseif ($based == 'SITE') {
                $query = "SELECT * FROM ".$this->prefix."articles";
                $query .= " WHERE status = 1";
                $query .= " ORDER BY num_reads DESC";
            } else {
                return false;
            }

            if( $maxPosts > 0 ) 
            {
                $query .= " LIMIT " . $maxPosts; 
            } else {
                $query .= " LIMIT " . $this->maxPosts;
            }

            $result = $articles->_db->Execute( $query ); 

            if( !$result ) 
                return false; 
            
            $topreadposts = Array();
            while( $row = $result->FetchRow()) { 
               $article = $articles->_fillArticleInformation( $row );
               array_push( $topreadposts, $article); 
            } 

            return $topreadposts; 
        }
    }
?>