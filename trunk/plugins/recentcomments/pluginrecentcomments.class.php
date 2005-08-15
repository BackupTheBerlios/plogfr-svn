<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    
    /**
     * Plugin that offers features to return a recent article comments from the current blog
     */
    class PluginRecentComments extends PluginBase
    {
        var $prefix;
        var $pluginEnabled;
        var $maxComments;
            
        function PluginRecentComments()
        {
            $this->PluginBase();
  
            $this->id = "recentcomments";
            $this->author = "Mark Wu";
            $this->desc = "This plugin offers the most recently article comments.";
  
            $this->prefix = Db::getPrefix();
            
            $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN", "es_ES" );
            
            $this->init();
        }

		function init()
		{
            $this->registerAdminAction( "recentcomments", "PluginRecentCommentsConfigAction" );
			$this->registerAdminAction( "updateRecentCommentsConfig", "PluginRecentCommentsUpdateConfigAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageRecentPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageRecentPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageRecentPlugins", "RecentComments", "?op=recentcomments", "" );            
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
		    $this->pluginEnabled = $blogSettings->getValue( "plugin_recentcomments_enabled" );
	        $this->maxComments = $blogSettings->getValue( "plugin_recentcomments_maxcomments" );
	    }
	    
	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }

        /**
         * Returns the recent comments object of current blog
         */
        function getRecentComments($maxComments = 0, $based = 'BLOG')
        {
            $comments = new ArticleComments();
            $blogId = $this->blogInfo->getId();
            
            if ($based == 'BLOG') {   
                $query = "SELECT ".$this->prefix."articles_comments.* FROM ".$this->prefix."articles_comments, ".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."articles_comments.article_id = ".$this->prefix."articles.id AND ".$this->prefix."articles.blog_id = ".$blogId." AND ".$this->prefix."articles.status=1";
                $query .= " AND ".$this->prefix."articles_comments.status = 0";
                $query .= " ORDER BY ".$this->prefix."articles_comments.date DESC";
            } elseif ($based == 'SITE') {
                $query = "SELECT ".$this->prefix."articles_comments.* FROM ".$this->prefix."articles_comments, ".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."articles_comments.article_id = ".$this->prefix."articles.id AND ".$this->prefix."articles.status=1";
                $query .= " AND ".$this->prefix."articles_comments.status = 0";
                $query .= " ORDER BY ".$this->prefix."articles_comments.date DESC";
            } else {
                return false;
            }

            if( $maxComments > 0 ) 
            {
                $query .= " LIMIT " . $maxComments; 
            } else {
                $query .= " LIMIT " . $this->maxComments;
            }

            $result = $comments->_db->Execute( $query ); 

            if( !$result ) 
                return false; 
            
            $recentcomments = Array();
            while( $row = $result->FetchRow()) { 
               array_push( $recentcomments, $comments->_fillCommentInformation($row)); 
            } 

            return $recentcomments; 
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