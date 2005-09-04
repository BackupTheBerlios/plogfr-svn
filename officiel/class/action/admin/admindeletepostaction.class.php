<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Deletes a post from the database
     */
    class AdminDeletePostAction extends AdminAction 
	{

        var $_postIds;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminDeletePostAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			// data validation stuff...
			$this->_mode = $actionInfo->getActionParamValue();
			
			if( $this->_mode == "deletePost" )
				$this->registerFieldValidator( "postId", new IntegerValidator());
			else 
				$this->registerFieldValidator( "postIds", new ArrayValidator());

			$view = new AdminPostsListView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_incorrect_article_id"));
			$this->setValidationErrorView( $view );		
        }

        /**
         * Carries out the specified action
         */
        function _deletePosts()
        {
        	// delete the post (it is not physically deleted but rather, we set
            // the status field to 'DELETED'
            $articles = new Articles();
            $errorMessage = "";
			$successMessage = "";
			$totalOk = 0;
			
            foreach( $this->_postIds as $postId ) {
            	// get the post
                $post = $articles->getBlogArticle( $postId, $this->_blogInfo->getId());
				
				if( $post ) {
					// fire the event
					$this->notifyEvent( EVENT_PRE_POST_DELETE, Array( "article" => &$post ));
					
					//
					// the next if-else branch allows a site administrator or the blog owner to remove
					// anybody's articles. If not, then users can only remove their own articles
					//
					if( $this->_userInfo->isSiteAdmin() || $this->_blogInfo->getOwner() == $this->_userInfo->getId()) 
						$result = $articles->deleteArticle( $postId, $post->getUser(), $this->_blogInfo->getId(), false );
					else
						$result = $articles->deleteArticle( $postId, $this->_userInfo->getId(), $this->_blogInfo->getId(), false );
					
					if( !$result ) {
						$errorMessage .= $this->_locale->pr("error_deleting_article", $post->getTopic())."<br/>";
					}
					else {
						$totalOk++;
						if( $totalOk < 2 ) 
							$successMessage .= $this->_locale->pr("article_deleted_ok", $post->getTopic())."<br/>";
						else
							$successMessage = $this->_locale->pr("articles_deleted_ok", $totalOk );
						// fire the post event
						$this->notifyEvent( EVENT_POST_POST_DELETE, Array( "article" => &$post ));					
					}
				}
				else {
					$errorMessage .= $this->_locale->pr( "error_deleting_article2", $postId )."<br/>";
				}
            }
			
			// clean up the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());

			$this->_view = new AdminPostsListView( $this->_blogInfo );
			if( $errorMessage != "" ) 
				$this->_view->setErrorMessage( $errorMessage );
			if( $successMessage != "" )
				$this->_view->setSuccessMessage( $successMessage );
				
			$this->setCommonData();
			
            return true;
        }
		
		function perform()
		{
			// prepare the parameters.. If there's only one category id, then add it to
			// an array.
			if( $this->_mode == "deletePost" ) {
				$this->_postIds = Array();
				$this->_postIds[] = $this->_request->getValue( "postId" );
			}
			else
				$this->_postIds = $this->_request->getValue( "postIds" );
				
			$this->_deletePosts();
		}
    }
?>