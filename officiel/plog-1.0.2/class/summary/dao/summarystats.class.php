<?php

    include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecommentstatus.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlestatus.class.php" );
	
	/**
	 * maximum number of items that will be shown per page in the summary
	 */
	define( "SUMMARY_DEFAULT_ITEMS_PER_PAGE", 15 );

    /**
     * This class implements a few methods that can be used to obtain the list of most recent blogs, posts, commets,
     * most commented articles, etc. It is mainly used by the summary.php script but it can also be used by users
     * wishing to integrate the summary page in their sites.
     *
     * @see BlogInfo
     * @see Article
     *
     * \ingroup DAO	
     */
    class SummaryStats extends Model
    {
        
        var $_now;
        var $_sevenDaysAgo;

        function SummaryStats()
        {
            // initialize ADOdb
            $this->Model();
            
            // common object for all methods so that we can reuse caches
            $this->articles = new Articles();
            $this->blogs = new Blogs();            
            
            // calculate the date limits
            $t = new Timestamp();
            $this->_now = $t->getTimestamp(); 
            // 7 days ago
            $t->subtractSeconds( 7 * 24 * 60 * 60 );
            $this->_sevenDaysAgo = $t->getTimestamp();
        }

        /**
         * Returns the most commented articles so far
         *
         * @param maxPosts The maximum number of posts to return
		 * @param ignoreTopic ignore posts based on a certain topic
		 * @param ignoreText ignore post based on a certain text
         * @return An array of Article objects with the most commented articles
         */
        function getMostCommentedArticles( $maxPosts = 0, $ignoreTopic = "", $ignoreText = "" )
        {
            include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );

			$prefix = $this->getPrefix();
			$query = " SELECT COUNT(*) as total_comments, a.* 
					   FROM {$prefix}articles_comments AS c, 
					        {$prefix}articles AS a, 
					        {$prefix}blogs b
       				   WHERE c.article_id = a.id  
       				         AND a.status = ".POST_STATUS_PUBLISHED." 
       				         AND c.status = ".COMMENT_STATUS_NONSPAM."
       				         AND b.id = a.blog_id
       				         AND b.status = ".BLOG_STATUS_ACTIVE."
       				         AND a.date <= ".$this->_now;

			$query .= " GROUP BY c.article_id ORDER BY total_comments DESC ";

            if( $maxPosts > 0 )
            	$query .= " LIMIT 0,".$maxPosts;


            $result = $this->Execute( $query );

            if( !$result ){
            	return Array();
            }

            $posts = Array();
            while( $row = $result->FetchRow()) {
            	array_push( $posts, $this->articles->_fillArticleInformation($row));
            }
            
            $result->Close();

            return $posts;
        }
		
        /**
         * Returns an array with the most read articles
         *
         * @param maxPosts The maximum number of posts to return
		 * @param ignoreTopic ignore posts based on a certain topic
		 * @param ignoreText ignore post based on a certain text
         * @return an array of Article objects with information about the posts
         * TODO: perfalmence tuning
         */
        function getMostReadArticles( $maxPosts = 0, $ignoreTopic = "", $ignoreText = "" )
        {


             $prefix = $this->getPrefix();
             $query = " SELECT 
                 a.id as id, 
                 a.properties as properties, 
                 a.date as date, 
                 a.user_id as user_id,
                 a.blog_id as blog_id,
                 a.status as status,
                 a.num_reads as num_reads,
                 a.slug as slug
                 FROM {$prefix}articles a
                 WHERE status = ".POST_STATUS_PUBLISHED."
                 AND a.date <= ".$this->_now." AND a.date > ".$this->_sevenDaysAgo;

			$query .= " ORDER BY a.num_reads DESC ";

            if( $maxPosts > 0 )
            	$query .= " LIMIT 0,".$maxPosts;

            $result = $this->Execute( $query );

            if( !$result )
            	return Array();

            $posts = Array();
            while( $row = $result->FetchRow()) {
				$post = $this->articles->_fillArticleInformation($row);
            	array_push( $posts, $post );
            }
            
            $result->Close();            

            return $posts;
        }

        /**
         *returns  list with the most recently created blogs
         *
         * @param maxBlogs The maximum number of blogs to return, or '0' to get all of them
         * @return An array of BlogInfo objects
         * @see BlogInfo
         */
         function getRecentBlogs($maxBlogs = 0)
         {
         	$query = "SELECT * FROM ".$this->getPrefix()."blogs WHERE status = ".BLOG_STATUS_ACTIVE." 
                          ORDER BY id DESC";

            if( $maxBlogs > 0 )
            	$query .= " LIMIT 0,".$maxBlogs;

            $result = $this->Execute( $query );

            if( !$result ){
            	return Array();
            }

            $blogs = Array();
            while( $row = $result->FetchRow()) {
            	$blog = $this->blogs->_fillBlogInformation( $row );
                $blogs[$blog->getId()] = $blog;
            }
            
            $result->Close();            

            return $blogs;
        }

        /**
         * returns an array with the most active blogs
         *
         * @param maxBlogs How many blogs to return
         * @return An array of BlogInfo objects
         * @see BlogInfo
         */
         function getMostActiveBlogs( $maxBlogs = 0 )
         {
			$prefix = $this->getPrefix();
            $query = "SELECT COUNT(*) as t, SUM((num_reads / (TO_DAYS(NOW()) - TO_DAYS(a.date) + 1)) ) as rank, b.*
                       FROM {$prefix}articles AS a
                       INNER JOIN {$prefix}blogs AS b 
                           ON b.id=a.blog_id AND b.status=".BLOG_STATUS_ACTIVE.
                       " WHERE a.date >= ".$this->_sevenDaysAgo." AND a.date <= ".$this->_now." 
                       GROUP BY a.blog_id ORDER BY rank DESC ";

            if( $maxBlogs > 0 )
                $query .= " LIMIT 0,".$maxBlogs;

            $result = $this->Execute( $query );

            if( !$result ){
                return Array();
            }

            $blogs = Array();
            while( $row = $result->FetchRow()) {
                $blog = $this->blogs->_fillBlogInformation( $row );
                $blogs[$blog->getId()] = $blog;
            }
            
            $result->Close();            

            return $blogs;
        }

         /**
		  * Returns all the users registered in the site
          *
          * @return Returns an array with all the users defined for this site. The array
          * is sorted by the user identifier
          */
         function getAllUsersPaged( $page, $itemsPerPage )
         {
            include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
			// calculate the limits...
			if( $page > 0 ) {
				$start = (($page - 1) * $itemsPerPage);
				$stop  = $page * $itemsPerPage;
			}
			else {
				$start = 0;
				$stop  = $itemsPerPage;
			}

         	$query = "SELECT * FROM ".$this->getPrefix()."users
			          ORDER BY id
					  LIMIT $start, $itemsPerPage";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            $users = Array();
			$usersDao = new Users();
            while( $row = $result->FetchRow()) {
            	$user = $usersDao->_fillUserInformation( $row, true );
                $users[$user->getId()] = $user;
            }
            
            $result->Close();            

            return $users;
        }

        /**
         * returns a list with the most recent articles, but only one per blog so that
         * one blog cannot clog the whole main page because they've posted 100 posts today. Posts that were posted
		 * in categories not shown in the main page of each blog will not be shown!
         *
         * @param maxPosts The maximum number of posts to return
		 * @param ignoreTopic ignore posts based on a certain topic
		 * @param ignoreText ignore post based on a certain text
         * @return An array of Article objects with the most recent articles.
         */
        function getRecentArticles( $maxPosts, $ignoreTopic = "", $ignoreText = "" )
        {
            include_once( PLOG_CLASS_PATH . "class/data/timestamp.class.php" );
            include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );

            $t      = new Timestamp();
            $date   = $t->getTimestamp();
			$prefix = $this->getPrefix();

			$query = "SELECT a.id as id, a.id,a.date,
                             a.user_id,a.blog_id, a.status, a.properties,
                             a.num_reads, a.slug
					  FROM {$prefix}articles a, 
					       {$prefix}blogs b
					  WHERE a.date >= ".$this->_sevenDaysAgo." AND a.date <= ".$this->_now."
					        AND a.blog_id = b.id
					        AND b.status = ".BLOG_STATUS_ACTIVE."
					        AND a.status = ".POST_STATUS_PUBLISHED;

			$query .= " ORDER BY a.date DESC LIMIT 0, $maxPosts";

            $result = $this->Execute( $query );

            if( !$result )
                return Array();

            $blogs = Array();
            $posts = Array();
            $i     = 0;

            while( ($row = $result->FetchRow()) && ($i < $maxPosts) ) {
                if (!in_array($row["blog_id"], $blogs))
                {
                    $blogs[] = $row["blog_id"];
                    array_push( $posts, $this->articles->_fillArticleInformation($row) );
                    $i++;
                }
            }
            
            $result->Close();            

            return $posts;
        }

		/**
		 * gets all articles grouped
		 *
		 * @param maxPosts
		 * @param date
		 */
        function getAllArticlesGrouped( $maxPosts = 0, $date = 0)
        {
            $query = "SELECT * FROM ".$this->getPrefix()."articles WHERE status = ".POST_STATUS_PUBLISHED;
            if( $date > 0 )
                $query .= " AND date < '$date'";

            $query .= " ORDER BY date DESC";

            if( $maxPosts > 0 )
                $query .= " LIMIT 0,". ($maxPosts * 3);

            $result = $this->Execute( $query );

            if( !$result )
                return false;

            $posts = Array();
            $count = 0;
            $ids   = array();
            $articles = new Articles();
            
            while( $row = $result->FetchRow()) {

                if (empty($maxPosts))
                {
                    array_push( $posts, $this->articles->_fillArticleInformation($row));
                    $count++;
                }
                else if($count <= $maxPosts && empty($ids[$row["blog_id"]]))
                {
                    $ids[$row["blog_id"]] = true;
                    array_push( $posts, $this->articles->_fillArticleInformation($row));
                    $count++;
                }
            }
            
            $result->Close();            

            return $posts;
        }
    }
?>
