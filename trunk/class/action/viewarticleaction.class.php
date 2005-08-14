<?php

	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/referers.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/viewarticleview.class.php" );
	include_once( PLOG_CLASS_PATH.'class/data/timestamp.class.php' );

    /**
     * \ingroup Action
     * @private
     *
     * This class represents the defaut view in our application
     */
	class ViewArticleAction extends BlogAction
    {

    	var $_config;
        var $_articleId;
		var $_articleName;
		var $_date;
		var $_maxDate;
		var $_userId;
		var $_userName;
		var $_categoryId;
		var $_categoryName;

		function ViewArticleAction( $actionInfo, $request )
        {
			$this->BlogAction( $actionInfo, $request );
        }
        
        // checks that the articleId is valid
        function validate()
        {
        	$this->_articleId = $this->_request->getValue( "articleId" );
			$this->_articleName = $this->_request->getValue( "articleName" );
			
			// find some other additional parameters and use some 'null' values
			// in casuse they're empty
			$this->_categoryId = $this->_request->getValue( "postCategoryId", -1 );
			$this->_categoryName = $this->_request->getValue( "postCategoryName" );
			$this->_userId = $this->_request->getValue( "userId", -1 );
			$this->_userName = $this->_request->getValue( "userName" );
			$this->_date = $this->_request->getValue( "Date", -1 );
			$this->_isCommentAdded = ($this->_request->getValue( "op" ) == "AddComment" );

			// Caculate the correct article date period
			$this->_getArticleCorrectedDatePeriod();

            return true;
        }
		
		function _setErrorView()
		{
			$this->_view = new ErrorView( $this->_blogInfo );
			$this->_view->setValue( "message", "error_fetching_article" );
			$this->setCommonData();		
		}
		
		/**
		 * @private
		 * updates the article referrers given an article
		 */
		function _updateArticleReferrers($article){
			$this->_updateArticleReferrersById($article->getId());
		}
		/**
		 * @private
		 * updates the article referrers given an id
		 */
        function _updateArticleReferrersById($articleId){
            if ( array_key_exists( 'HTTP_REFERER', $_SERVER ) )
            {
                $referrers = new Referers();
                $referrers->addReferer( $_SERVER['HTTP_REFERER'], 
                                        $articleId, $this->_blogInfo->getId());
            }
        }
		/**
		 * @private
		 * updates the article referrers, given a slug
		 */
		function _updateArticleReferrersByTitle($slug){
			$id = $this->articles->getArticleIdFromName($slug);
			// if the article isn't found, we will save a referrer to
		    // the main page, since $id will be 0.
			$this->_updateArticleReferrersById($id);
		}
		
		/**
		 * @private
		 * updates the number of times that an article has been read in the db
		 * 
		 * @param articleId
		 * @return always true
		 */
		function updateNumArticleReads( $articleId )
		{
			$this->articles->updateArticleNumReads( $articleId );
			
			return( true );
		}

		/**
		 * @private
		 * Caculate the correct article date period
		 */		        
        function _getArticleCorrectedDatePeriod()
        {
            $blogSettings = $this->_blogInfo->getSettings();
            $serverTimeOffset = $blogSettings->getValue( "time_offset" );
            
            if( $serverTimeOffset == 0)
            {
            	$this->_maxDate = -1;
            }
            else
            {
	            if( strlen($this->_date) == 4 ) 
	        	{
	        		$year = $this->_date;
	        		$this->_date = Timestamp::getDateWithOffset( $year."0101000000", -$serverTimeOffset );
	        		$this->_maxDate = Timestamp::getDateWithOffset( $year."1231235959", -$serverTimeOffset );
	        	} 
	        	elseif ( strlen($this->_date) == 6 ) 
	        	{
	                $year = substr( $this->_date, 0, 4 );
	                $month = substr( $this->_date, 4, 2 );
	                $dayOfMonth = Date_Calc::daysInMonth( $month, $year );
	        		$this->_date = Timestamp::getDateWithOffset( $year.$month."01000000", -$serverTimeOffset );
	        		$this->_maxDate = Timestamp::getDateWithOffset( $year.$month.$dayOfMonth."235959", -$serverTimeOffset );
	        	}
	        	elseif ( strlen($this->_date) == 8 )
	        	{
	        		$year = substr( $this->_date, 0, 4 );
	                $month = substr( $this->_date, 4, 2 );
	                $day = substr( $this->_date, 6, 2 );
	        		$this->_date = Timestamp::getDateWithOffset( $year.$month.$day."000000", -$serverTimeOffset );
	        		$this->_maxDate = Timestamp::getDateWithOffset( $year.$month.$day."235959", -$serverTimeOffset );
	        	}
	        	else
	        	{
	        		$this->_maxDate = -1;
	        	}
            }
        }

        function perform()
        {

        	$this->_view = new ViewArticleView( $this->_blogInfo, 
                                                   Array( "articleId" => $this->_articleId,
                                                          "articleName" => $this->_articleName,
                                                          "categoryId" => $this->_categoryId,
                                                          "categoryName" => $this->_categoryName,
                                                          "userId" => $this->_userId,
                                                          "userName" => $this->_userName,
                                                          "date" => $this->_date ));
														  
			if( $this->_view->isCached()) {
				if( $this->_config->getValue( 'update_cached_article_reads', false )) {
					if( $this->_articleId ){
						$this->articles->updateArticleNumReads(	$this->_articleId );
                        $this->_updateArticleReferrersById( $this->_articleId );
                    }
 					else{
						$this->articles->updateArticleNumReadsByName( $this->_articleName );
                        $this->_updateArticleReferrersByTitle($this->_articleName );
                    }
				}
				
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
				$category = $categories->getCategoryByName( $this->_categoryName, $this->_blogInfo->getId());
				if( !$category ) {
					$this->_setErrorView();
					return false;
				}
				// if there was a user, use his/her id
				$this->_categoryId = $category->getId();
			}
		
            // fetch the article
            // the article identifier can be either its internal id number or its mangled topic
            if( $this->_articleId ) { 
                $article  = $this->articles->getBlogArticle( $this->_articleId, $this->_blogInfo->getId(), false, 
				                                       $this->_date, $this->_categoryId, $this->_userId,
													   POST_STATUS_PUBLISHED, $this->_maxDate );
			}
            else {
                $article  = $this->articles->getBlogArticleByTitle( $this->_articleName, $this->_blogInfo->getId(), false,
				                                              $this->_date, $this->_categoryId, $this->_userId,
															  POST_STATUS_PUBLISHED, $this->_maxDate );
			}
				
            // if the article id doesn't exist, cancel the whole thing...
            if( !$article ) {
				$this->_setErrorView();
                return false;
            }
			
			// throw the correct event
			$this->notifyEvent( EVENT_POST_LOADED, Array( "article" => &$article ));			

            // check if we have to update how many times an article has been read
            if( $this->_config->getValue( "update_article_reads" )) {
				$this->updateNumArticleReads( $article->getId());
            }
			
			// update the referrers, if needed
			$this->_updateArticleReferrers( $article );
						
            // if everything's fine, we set up the article object for the view
            $this->_view->setArticle( $article );
            $this->setCommonData();
			
            // and return everything normal
            return true;
        }
    }
?>