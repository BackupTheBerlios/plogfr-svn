<?php

	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/blogview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/trackbacks.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );

	define( "VIEW_TRACKBACKS_TEMPLATE", "posttrackbacks" );

    /**
     * \ingroup Action
     * @private
     *
     * It's almost the same as the ViewArticleAction...
     */
	class ViewArticleTrackbacksAction extends BlogAction 
	{
	
        var $_articleId;
	var $_articleName;
		var $_categoryId;
		var $_categoryName;
		var $_userId;
		var $_userName;
		var $_date;

		function ViewArticleTrackbacksAction( $actionInfo, $request )
        {
			$this->BlogAction( $actionInfo, $request );
        }


        function validate()
        {
        	$this->_articleId = $this->_request->getValue( "articleId" );
        	$this->_articleName = $this->_request->getValue( "articleName" );
			$this->_categoryId = $this->_request->getValue( "postCategoryId", -1 );
			$this->_categoryName = $this->_request->getValue( "postCategoryName" );
			$this->_userId     = $this->_request->getValue( "userId", -1 );
			$this->_userName     = $this->_request->getValue( "userName" );
			$this->_date       = $this->_request->getValue( "Date", -1 );
			
            return true;
        }

        function perform()
        {
        	$this->_view = new BlogView( $this->_blogInfo,
					     VIEW_TRACKBACKS_TEMPLATE, 
					     SMARTY_VIEW_CACHE_CHECK,
					     Array( "articleId" => $this->_articleId,
						    "articleName" => $this->_articleName,
						    "categoryName" => $this->_categoryName,
						    "categoryId" => $this->_categoryId,
						    "userId" => $this->_userId,
						    "userName" => $this->_userName,
						    "date" => $this->_date ));

			 if( $this->_view->isCached()) {
				return true;
			 }
		
			// ---
			// if we got a category name or a user name instead of a category
			// id and a user id, then we have to look up first those
			// and then proceed
			// ---
			// users...
			if( $this->_userName ) {
				$users = new Users();
				$user = $users->getUserInfoFromUsername( $this->_userName );
				if( !$user ) {
					$this->_setErrorView();
					return false;				
				}
				// if there was a user, use his/her id
				$this->_userId = $user->getId();
			}
			// ...and categories...
			if( $this->_categoryName ) {
				$categories = new ArticleCategories();
				$category = $categories->getCategoryByName( $this->_categoryName );
				if( !$category ) {
					$this->_setErrorView();
					return false;				
				}
				// if there was a user, use his/her id
				$this->_categoryId = $category->getId();
			}		
		
            // fetch the article
            $articles = new Articles();
			if( $this->_articleId ) {
				$article  = $articles->getBlogArticle( $this->_articleId, $this->_blogInfo->getId(),
				                                       false, $this->_date, $this->_categoryId, $this->_userId );
			}
			else {
				$article = $articles->getBlogArticleByTitle( $this->_articleName, $this->_blogInfo->getId(),
				                                           false, $this->_date, $this->_categoryId, $this->_userId );
			}

            // if the article id doesn't exist, cancel the whole thing...
            if( $article == false ) {
            	$this->_view = new ErrorView( $this->_blogInfo );
                $this->_view->setValue( "message", "error_fetching_article" );
                $this->setCommonData();

                return false;
            }			
			$this->notifyEvent( EVENT_POST_LOADED, Array( "article" => &$article ));
			$this->notifyEvent( EVENT_TRACKBACKS_LOADED, Array( "article" => &$article ));
			
            // if everything's fine, we set up the article object for the view
            $this->_view->setValue( "post", $article );
            $this->_view->setValue( "trackbacks", $article->getTrackbacks());
            $this->setCommonData();

            // and return everything normal
            return true;
        }
    }
?>