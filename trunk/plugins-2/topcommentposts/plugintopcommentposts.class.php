<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    
    /**
     * Plugin that offers features to returns the top comment posts object of current blog
     */
    class PluginTopCommentPosts extends PluginBase
    {
        var $prefix;
        var $pluginEnabled;
        var $maxPosts;        
    
        function PluginTopCommentPosts()
        {
            $this->PluginBase();
  
            $this->id = "topcommentposts";
            $this->author = "Mark Wu";
            $this->desc = "This plugin offers the rank list of articles by number of comments.";
  
            $this->prefix = Db::getPrefix();
            
           $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN" );
            
            $this->init();            
        }

		function init()
		{
            $this->registerAdminAction( "topcommentposts", "PluginTopCommentPostsConfigAction" );
			$this->registerAdminAction( "updateTopCommentPostsConfig", "PluginTopCommentPostsUpdateConfigAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageTopPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageTopPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageTopPlugins", "TopCommentPosts", "?op=topcommentposts", "" );            
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
		    $this->pluginEnabled = $blogSettings->getValue( "plugin_topcommentposts_enabled" );
	        $this->maxPosts = $blogSettings->getValue( "plugin_topcommentposts_maxposts" );
	    }
	    
	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }

        /**
         * Returns the top comment posts object of current blog
         */
        function getTopCommentPosts($maxPosts = 0, $based = 'BLOG')
        {
            $comments = new ArticleComments();
            $blogId = $this->blogInfo->getId();
 
            if ($based == 'BLOG') {           
                $query = "SELECT ".$this->prefix."articles_comments.article_id,count(".$this->prefix."articles_comments.article_id) as comment_count"; 
                $query .= " FROM ".$this->prefix."articles_comments, ".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."articles_comments.article_id = ".$this->prefix."articles.id AND ".$this->prefix."articles.blog_id = ".$blogId." AND ".$this->prefix."articles.status = 1";
                $query .= " GROUP BY ".$this->prefix."articles_comments.article_id ORDER BY comment_count DESC";
            } elseif ($based == 'SITE') {
                $query = "SELECT ".$this->prefix."articles_comments.article_id,count(".$this->prefix."articles_comments.article_id) as comment_count"; 
                $query .= " FROM ".$this->prefix."articles_comments, ".$this->prefix."articles";
                $query .= " WHERE ".$this->prefix."articles_comments.article_id = ".$this->prefix."articles.id AND ".$this->prefix."articles.status = 1";
                $query .= " GROUP BY ".$this->prefix."articles_comments.article_id ORDER BY comment_count DESC";
            } else {
                return false;
            }

            if( $maxPosts > 0 ) 
            {
                $query .= " LIMIT " . $maxPosts; 
            } else {
                $query .= " LIMIT " . $this->maxPosts;
            }

            $result = $comments->_db->Execute( $query ); 

            if( !$result ) 
                return false; 
            
            $topcommentposts = Array();
            while( $row = $result->FetchRow()) { 
               $article = $this->getArticle($row["article_id"]);
               array_push( $topcommentposts, $article); 
            } 

            return $topcommentposts; 
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