<?php

	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/defaultview.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/session/sessioninfo.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );
	include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );	

    /**
     * \ingroup Action
     * @private
     *
     * This class represents the defaut view in our application
     */
	class DefaultAction extends BlogAction 
	{

		var $_config;
        var $_date;
        var $_categoryId;
		var $_categoryName;
		var $_userId;
		var $_userName;
		var $_postAmount;

		function DefaultAction( $actionInfo, $request )
        {
			$this->BlogAction( $actionInfo, $request );
        }

        function validate()
        {
            // value of the Date parameter from the request
            $this->_date = $this->_request->getValue( "Date", -1 );

		$this->_categoryName = $this->_request->getValue( 'postCategoryName' );
            $this->_categoryId = $this->_request->getValue( 'postCategoryId' );
            if( $this->_categoryId == '' )
            	if( $this->_date == -1 )
                	$this->_categoryId = 0;
                else
                	$this->_categoryId = -1;
					
			$this->_userId = $this->_request->getValue( 'userId', -1 );
			$this->_userName = $this->_request->getValue( 'userName' );

            return true;
        }

        /**
         * Executes the action
         */
        function perform()
        {
        	// first of all, we have to determine which blog we would like to see
			$blogId = $this->_blogInfo->getId();

            // fetch the settings for that blog
            $blogSettings = $this->_blogInfo->getSettings();

            // prepare the view
        	$this->_view = new DefaultView( $this->_blogInfo,
			                                Array( "categoryId" => $this->_categoryId,
							       "blogId" => $this->_blogInfo->getId(),
							       "categoryName" => $this->_categoryName,
							   "date" => $this->_date,
							   "userName" => $this->_userName,
							   "userId" => $this->_userId ));
														  
			// check if everything's cached because if it is, then we don't have to
			// do any work... it's already been done before and we should "safely" assume
			// that there hasn't been any change so far
			if( $this->_view->isCached()) {
				return true;
			}

            // if we got a category name instead of a category id, then we
            // should first look up this category in the database and see if
            // it exists
            $categories = new ArticleCategories();
            if( $this->_categoryName ) {
                $category = $categories->getCategoryByName( $this->_categoryName, $this->_blogInfo->getId());
                if( !$category ) {
                    $this->_view = new ErrorView( $this->_blogInfo );
                    $this->_view->setValue( 'message', "error_incorrect_category_id" );
                    $this->setCommonData();
                    return false;
                }
                
                // if everything went fine...
                $this->_categoryId = $category->getId();
            }
			else {
				// we don't do anything if the cateogry id is '0' or '-1'
				if( $this->_categoryId > 0 ) {
					$category = $categories->getCategory( $this->_categoryId, $this->_blogInfo->getId());
					if( !$category ) {
						$this->_view = new ErrorView( $this->_blogInfo );
						$this->_view->setValue( 'message', "error_incorrect_category_id" );
						$this->setCommonData();
						return false;
					}
				}
			}
			
			// export the category object in case it is needed
            if( isset($category) )
                $this->_view->setValue( "category", $category );			
			

            $users = new Users();

            // if we got a user user id, then we should first look up this id
            // user in the database and see if it exists
            if( $this->_userId > 0) {
                $user = $users->getUserInfoFromId( $this->_userId );
                if( !$user ) {
                    $this->_view = new ErrorView( $this->_blogInfo );
                    $this->_view->setValue( 'message', 'error_incorrect_user_id' );
                    $this->setCommonData();
                    return false;
                }
            } 
            else if( $this->_userName ) {
                    // if we got a user name instead of a user id, then we
                    // should first look up this user in the database and see if
                    // it exists
                $user = $users->getUserInfoFromUsername( $this->_userName );
                if( !$user ) {
                    $this->_view = new ErrorView( $this->_blogInfo );
                    $this->_view->setValue( 'message', 'error_incorrect_user_username' );
                    $this->setCommonData();
                    return false;
                }
                
                // if everything went fine...
                $this->_userId = $user->getId();
            }

            // export the owner. The owner information should get from blogInfo directly
            $this->_view->setValue( "owner", $this->_blogInfo->getOwnerInfo() );
			
            $t = new Timestamp();
            $todayTimestamp = $t->getTimestamp();
			
            // amount of posts that we have to show, but keeping in mind that when browsing a
            // category or specific date, we should show *all* of them
            if( $this->_date > 0 || $this->_categoryId > 0 ) {
                $this->_postAmount = -1;
                // also, inform the template that we're showing them all!
                $this->_view->setValue( 'showAll', true );
            }
            else {
                $this->_postAmount = $blogSettings->getValue( 'show_posts_max' );
                $this->_view->setValue( 'showAll', false );
            }
			
            //
            // :KLUDGE:
            // the more things we add here to filter, the more complicated this function
            // gets... look at this call and look at how many parameters it needs!! :(
            //
			
			if( ($blogSettings->getValue( 'show_future_posts_in_calendar')) && ( $this->_date > -1 )) {
				// if posts in the future are to be shown, we shouldn't set a maximum date
				$blogArticles = $this->articles->getBlogArticles( $blogId, $this->_date,
								$this->_postAmount, $this->_categoryId,
								POST_STATUS_PUBLISHED, $this->_userId );			
			}
			else {
				$blogArticles = $this->articles->getBlogArticles( $blogId, $this->_date,
								$this->_postAmount, $this->_categoryId,
								POST_STATUS_PUBLISHED, $this->_userId, $todayTimestamp );
			}

            // if we couldn't fetch the articles, send an error and quit
            if( count($blogArticles) == 0 ) {
            	$this->_view = new ErrorView( $this->_blogInfo );
                $this->_view->setValue( 'message', 'error_fetching_articles' );
            }
            else {
	            // otherwise, continue
                // the view will take care of cutting the post if we have the "show more"
                // feature enabled or not... we could do it here but I think that belongs
                // to the view since it is presentation stuff... It could also be handled
                // by the template but then it'd make the template a little bit more
                // complicated...
				
				// ---
				// before finishing, let's see if there's any plugin that would like to do 
				// anything with the post that we just loaded
				// ---
				$pm =& PluginManager::getPluginManager();
				$pm->setBlogInfo( $this->_blogInfo );
				$pm->setUserInfo( $this->_userInfo );
				$result = $pm->notifyEvent( EVENT_POSTS_LOADED, Array( 'articles' => &$blogArticles ));
				$articles = Array();
				foreach( $blogArticles as $article ) {
					$postText = $article->getIntroText();
					$postExtendedText = $article->getExtendedText();
					$pm->notifyEvent( EVENT_TEXT_FILTER, Array( "text" => &$postText ));
					$pm->notifyEvent( EVENT_TEXT_FILTER, Array( "text" => &$postExtendedText ));
					$article->setIntroText( $postText );
					$article->setExtendedText( $postExtendedText );
					array_push( $articles, $article );
				}
				
    	        $this->_view->setValue( 'posts', $articles );
            }

            $this->setCommonData();
            // save the information about the session for later
            $this->saveSession();

            return true;
        }
    }
?>
