<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/bayesian/bayesianfiltercore.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminarticlecommentslistview.class.php" );
	
    /**
     * \ingroup Action
     * @private
     *     * sets the spam status for a post
     */
    class AdminMarkCommentAction extends AdminAction
    {

    	var $_commentId;
        var $_articleId;
        var $_mode;
		var $_article;
		var $_comment;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminMarkCommentAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "commentId", new IntegerValidator());
			$this->registerFieldValidator( "articleId", new IntegerValidator());
			$this->registerFieldValidator( "mode", new IntegerValidator());
			$view = new AdminPostsListView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_incorrect_comment_id"));
			$this->setValidationErrorView( $view );
        }

        /**
         * @private
         * Returns true wether the comment whose status we're trying to change
         * really belongs to this blog, just in case somebody's trying to mess
         * around with that...
         */
        function _checkComment( $commentId, $articleId, $blogId )
        {
        	$articleComments = new ArticleComments();
            $articles = new Articles();

            // fetch the comment
            $this->_comment = $articleComments->getPostComment( $articleId, $commentId );
            if( !$this->_comment )
            	return false;

            // fetch the article
            $this->_article = $articles->getBlogArticle( $this->_comment->getArticleId(), $blogId );
            if( !$this->_article )
            	return false;

            return true;
        }

        /**
         * @private
         */
        function _markCommentAsSpam()
        {
			// throw the pre-event
			$this->notifyEvent( EVENT_PRE_MARK_SPAM_COMMENT, Array( "commentId" => $this->_commentId ));
			
           	$this->_view = new AdminArticleCommentsListView( $this->_blogInfo, Array( "article" => $this->_article ));
			
        	$comments = new ArticleComments();
            if( !$comments->updateCommentStatus( $this->_commentId, COMMENT_STATUS_SPAM )) {
                $this->_view->setErrorMessage( $this->_locale->tr("error_marking_comment_as_spam" ));
                $this->setCommonData();
				
				$res = false;
            }
            else {
                $this->_view->setSuccessMessage( $this->_locale->tr("comment_marked_as_spam_ok" ));				
                $this->setCommonData();
				
                $res = true;

                // before exiting, we should get the comment and train the filter
                // to recognize this as spam...
                $comment = $comments->getPostComment( $this->_articleId, $this->_commentId );
                $bayesian = new BayesianFilterCore();

                $bayesian->untrain( $this->_blogInfo->getId(),
	                                $comment->getTopic(),
	                                $comment->getText(),
	                                $comment->getUserName(),
	                                $comment->getUserEmail(),
	                                $comment->getUserUrl(),
	                                false );
                                  
                $bayesian->train( $this->_blogInfo->getId(),
                                  $comment->getTopic(),
                                  $comment->getText(),
                                  $comment->getUserName(),
                                  $comment->getUserEmail(),
                                  $comment->getUserUrl(),
                                  true );
								  
				// throw the post-event if everythign went fine
				$this->notifyEvent( EVENT_POST_MARK_SPAM_COMMENT, Array( "commentId" => $this->_commentId ));								  
            }

            return $res;
        }

        /**
         * @private
         */
        function _markCommentAsNonSpam()
        {
			// throw the pre-event
			$this->notifyEvent( EVENT_PRE_MARK_NO_SPAM_COMMENT, Array( "commentId" => $this->_commentId ));
		
           	$this->_view = new AdminArticleCommentsListView( $this->_blogInfo, Array( "article" => $this->_article ));
		
        	$comments = new ArticleComments();
            if( !$comments->updateCommentStatus( $this->_commentId, COMMENT_STATUS_NONSPAM )) {
                $this->_view->setErrorMessage( $this->_locale->tr("error_marking_comment_as_nonspam" ));
                $this->setCommonData();
				
				$res = false;
            }
            else {
                $this->_view->setSuccessMessage( $this->_locale->tr("comment_marked_as_nonspam_ok" ));				
                $this->setCommonData();
				
                $res = true;

                // before exiting, we should get the comment and train the filter
                // to recognize this as spam...
                $comment = $comments->getPostComment( $this->_articleId, $this->_commentId );
                $bayesian = new BayesianFilterCore();
                
                $bayesian->untrain( $this->_blogInfo->getId(),
	                                $comment->getTopic(),
	                                $comment->getText(),
	                                $comment->getUserName(),
	                                $comment->getUserEmail(),
	                                $comment->getUserUrl(),
	                                true );
                                  
                $bayesian->train( $this->_blogInfo->getId(),
                                  $comment->getTopic(),
                                  $comment->getText(),
                                  $comment->getUserName(),
                                  $comment->getUserEmail(),
                                  $comment->getUserUrl(),
                                  false );
								  
				// throw the post-event if everythign went fine
				$this->notifyEvent( EVENT_POST_MARK_NO_SPAM_COMMENT, Array( "commentId" => $this->_commentId ));
            }

            return $res;
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			// fetch the data
        	$this->_commentId = $this->_request->getValue( "commentId" );
            $this->_articleId = $this->_request->getValue( "articleId" );
            $this->_mode = $this->_request->getValue( "mode" );		
		
        	// first, let's make sure that the user is trying to edit the right
            // comment...
            if( !$this->_checkComment( $this->_commentId, $this->_articleId, $this->_blogInfo->getId())) {
            	// if things don't match... (like trying to set the status of an article
                // from another blog, then quit...)
            	$this->_view = new AdminPostsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_incorrect_comment_id"));
                $this->setCommonData();
                return false;
            }

        	// depending on the mode, we have to do one thing or another
            if( $this->_mode == 0 )
            	$result = $this->_markCommentAsNonSpam();
            else
            	$result = $this->_markCommentAsSpam();
				
			// clear the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());

            // better to return true if everything fine
            return $result;
        }
    }
?>
