<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminarticlecommentslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );	
    include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Action that shows a list of all the comments for a given post
     */
    class AdminDeleteCommentAction extends AdminAction 
	{

    	var $_articleId;
        var $_commentIds;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminDeleteCommentAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			$this->_mode = $actionInfo->getActionParamValue();
			$this->registerFieldValidator( "articleId", new IntegerValidator());
			if( $this->_mode == "deleteComment" )
				$this->registerFieldValidator( "commentId", new IntegerValidator());
			else
				$this->registerFieldValidator( "commentIds", new ArrayValidator());
				
			$view = new AdminPostsListView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_deleting_comments"));
			$this->setValidationErrorView( $view );			
        }
		
		/**
		 * sets up the parameters and calls the method below
		 */
		function perform()
		{
			$this->_articleId = $this->_request->getValue( "articleId" );
			if( $this->_mode == "deleteComment" ) {
				$commentId = $this->_request->getValue( "commentId" );
				$this->_commentIds = Array();
				$this->_commentIds[] = $commentId;
			}
			else
				$this->_commentIds = $this->_request->getValue( "commentIds" );
				
			$this->_deleteComments();
		}

        /**
         * deletes comments
		 * @private
         */
        function _deleteComments()
        {
            $comments = new ArticleComments();
            $errorMessage = "";
			$successMessage = "";
			$totalOk = 0;
			
			// if we can't even load the article, then forget it...
			$articles = new Articles();
			$article = $articles->getBlogArticle( $this->_articleId, $this->_blogInfo->getId());
			if( !$article ) {
				$this->_view = new AdminPostsListView( $this->_blogInfo );
				$this->_view->setErrorMessage( $this->_locale->tr("error_fetching_post" ));
				$this->setCommonData();
				
				return false;
			}
			
			// loop through the comments and remove them
            foreach( $this->_commentIds as $commentId ) {
            	// fetch the comment
                $comment = $comments->getPostComment( $this->_articleId, $commentId );
				
				if( !$comment ) {
					$errorMessage .= $this->_locale->pr("error_deleting_comment2", $commentId);
				}
				else {
					// fire the pre-event
					$this->notifyEvent( EVENT_PRE_COMMENT_DELETE, Array( "comment" => &$comment ));
					
					if( !$comments->deletePostComment( $article->getId(), $commentId ))
						$errorMessage .= $this->_locale->pr("error_deleting_comment", $comment->getTopic())."<br/>";
					else {
						$totalOk++;
						if( $totalOk < 2 )
							$successMessage .= $this->_locale->pr("comment_deleted_ok", $comment->getTopic())."<br/>";
						else
							$successMessage = $this->_locale->pr("comments_deleted_ok", $totalOk );
							
						// fire the post-event
						$this->notifyEvent( EVENT_POST_COMMENT_DELETE, Array( "comment" => &$comment ));
					}
				}
            }

			// if everything fine, then display the same view again with the feedback
            $this->_view = new AdminArticleCommentsListView( $this->_blogInfo, Array( "article" => $article ));
			if( $successMessage != "" ) {
				$this->_view->setSuccessMessage( $successMessage );
				// clear the cache
				CacheControl::resetBlogCache( $this->_blogInfo->getId());
			}
			if( $errorMessage != "" ) $this->_view->setErrorMessage( $errorMessage );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
