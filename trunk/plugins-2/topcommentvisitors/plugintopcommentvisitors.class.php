<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    
    /**
     * Plugin that offers features to returns the top comment visitors object of current blog
     */
    class PluginTopCommentVisitors extends PluginBase
    {
        var $prefix;
        var $pluginEnabled;
        var $maxVisitors;        

        function PluginTopCommentVisitors()
        {
            $this->PluginBase();
  
            $this->id = "topcommentvisitors";
            $this->author = "Mark Wu";
            $this->desc = "This plugin offers the rank list of visitors by number of comments.";
  
            $this->prefix = Db::getPrefix();
            
            $this->db =& Db::getDb();
            
            $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN" );
            
            $this->init();            
        }

		function init()
		{
            $this->registerAdminAction( "topcommentvisitors", "PluginTopCommentVisitorsConfigAction" );
			$this->registerAdminAction( "updateTopCommentVisitorsConfig", "PluginTopCommentVisitorsUpdateConfigAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageTopPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageTopPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageTopPlugins", "TopCommentVisitors", "?op=topcommentvisitors", "" );            
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
		    $this->pluginEnabled = $blogSettings->getValue( "plugin_topcommentvisitors_enabled" );
	        $this->maxVisitors = $blogSettings->getValue( "plugin_topcommentvisitors_maxvisitors" );
	    }
	    
	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }
 
        /**
         * Returns the top comment visitors of current blog
         */
        function getTopCommentVisitors($maxVisitors = 0, $based = 'BLOG')
        {
            $blogId = $this->blogInfo->getId();
            
            if ($based == 'BLOG') {
                $query = "SELECT ".$this->prefix."articles_comments.user_name,max(".$this->prefix."articles_comments.user_url) AS user_url,count(".$this->prefix."articles_comments.user_name) AS user_count";
                $query .= " FROM ".$this->prefix."articles_comments,".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."articles.blog_id=".$blogId." AND ".$this->prefix."articles_comments.article_id=".$this->prefix."articles.id AND ".$this->prefix."articles.status=1";
                $query .= " GROUP BY ".$this->prefix."articles_comments.user_name ORDER BY user_count DESC";
            } elseif ($based == 'SITE') {
                $query = "SELECT ".$this->prefix."articles_comments.user_name,max(".$this->prefix."articles_comments.user_url) AS user_url,count(".$this->prefix."articles_comments.user_name) AS user_count";
                $query .= " FROM ".$this->prefix."articles_comments,".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."articles_comments.article_id=".$this->prefix."articles.id AND ".$this->prefix."articles.status=1";
                $query .= " GROUP BY ".$this->prefix."articles_comments.user_name ORDER BY user_count DESC";
            } else {
                return false;
            }

            if( $maxVisitors > 0 ) 
            {
                $query .= " LIMIT " . $maxVisitors; 
            } else {
                $query .= " LIMIT " . $this->maxVisitors;
            }

            $result = $this->db->Execute( $query ); 

            if( !$result ) 
                return false; 
            
            $topcommentvisitors = Array();
            while( $row = $result->FetchRow()) { 
               array_push( $topcommentvisitors, $row); 
            } 

            return $topcommentvisitors; 
        }
    }
?>