<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/bayesian/bayesianfiltercore.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );

    /**
     * \ingroup Bayesian
     *
     * some commodity functions have been included here such as making the filter
     * take all the comments from the blog and train the filter using those comments
     * as "good" raw material and so on. These functions do not really belong to the
     * core so I've put them here.
     */
    class BayesianFilterUtils extends Model
    {

    	function BayesianFilterUtils()
        {
        	$this->Model();
        }

        /**
         * marks all the articles from the given blog (or all of them
         * if blogId==0) as non-spam. This is good food for the
         * filter since then it knows which things should be allowed.
         *
         * @static
         * @param blogId The blog
         * @return Always true
         */
        function markArticlesAsNonSpam( $blogId = 0 )
        {
        	// first, gather all posts that should be used to gather "good"
            // for for the filter
            $articles = new Articles();
            if( $blogId == 0 )
            	$blogArticles = $articles->getAllArticles();
            else
            	$blogArticles = $articles->getBlogArticles( $blogId );

            // now, loop through each one of them marking the contents as
            // non-spam
            $bayesian = new BayesianFilterCore();
            foreach( $blogArticles as $article ) {
            	$owner = $article->getUserInfo();
                $bayesian->train( $article->getBlog(),
                                  $article->getTopic(),
                                  $article->getText(),
                                  $owner->getUsername(),
                                  $owner->getEmail(),
                                  "",
                                  false );
            }

            return true;
        }

        /**
         * @private
         */
        function _getAllComments( $blogId = 0 )
        {
        	// we shouldn't be doing things like this but it actually makes things
            // easier... we need to find the blog to which a comment belongs, but turns
            // out that there is no reference to the blog table from the comment table...
            // the solution, as you can see, is to run a nice join query that will
            // give us as much information as we need :)
        	$query = "SELECT c.id AS id, c.topic AS topic, c.text AS text,
                     c.user_email AS user_email, c.user_name AS user_name,
                     c.user_url AS user_url, a.id AS article_id, a.blog_id AS blog_id
                     FROM ".$this->getPrefix()."articles_comments AS c,".$this->getPrefix()."articles AS a
                     WHERE c.article_id = a.id";

        	if( $blogId != 0 ) {
            	$query .= " AND a.blog_id = $blogId";
            }

            $result = $this->Execute( $query );

            $comments = Array();

            // return empty array if problems...
            if( !$result )
            	return $comments;

            // or continue anyway
            while ($row = $result->FetchRow()) {
                array_push( $comments, $row );
            }

            return $comments;
        }

        /**
         * marks all the comments from the given blog (or all of them
         * if blogId==0) as non-spam. This is good food for the
         * filter since then it knows which things should be allowed.
         *
         * @static
         * @param blogId The blog
         * @return Always true
         */
        function markCommentsAsNonSpam( $blogId = 0 )
        {
        	// first, make an array with the comments that should be marked
            $comments = $this->_getAllComments( $blogId );

            // now, loop through each one of them marking the contents as
            // non-spam
            $bayesian = new BayesianFilterCore();
            foreach( $comments as $comment ) {
                $bayesian->train( $comment["blog_id"],
                                  $comment["topic"],
                                  $comment["text"],
                                  $comment["user_name"],
                                  $comment["user_email"],
                                  $comment["user_url"],
                                  false );
            }

            return true;
        }
    }
?>