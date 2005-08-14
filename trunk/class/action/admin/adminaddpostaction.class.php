<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminpostmanagementcommonaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );	
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/locale/locale.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/stringutils.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminnewpostview.class.php" );    
	include_once( PLOG_CLASS_PATH."class/bayesian/bayesianfiltercore.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );	
    include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );	    
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );
	
    /**
     * \ingroup Action
     * @private
     *
     * Action that adds a new post to the database.
     */
    class AdminAddPostAction extends AdminPostManagementCommonAction
	{
    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminAddPostAction( $actionInfo, $request )
        {
        	$this->AdminPostManagementCommonAction( $actionInfo, $request );
        	
        	// for data validation purposes, posts must have at least a topic, an intro text, and a category
        	$this->registerFieldValidator( "postText", new StringValidator());
        	$this->registerFieldValidator( "postTopic", new StringValidator());
        	$this->registerFieldValidator( "postCategories", new ArrayValidator());
        	$view = new AdminNewPostView( $this->_blogInfo );
        	$view->setErrorMessage( $this->_locale->tr("error_adding_post"));
        	$this->setValidationErrorView( $view );
        	
        	// these fields do not need to be validated but should be there when we show the view once again
        	$this->registerField( "postExtendedText" );
        	$this->registerField( "postSlug" );
        	$this->registerField( "postStatus" );
        	$this->registerField( "sendNotification" );
        	$this->registerField( "sendTrackbacks" );
        	$this->registerField( "sendPings" );
        	$this->registerField( "postId" );
        	$this->registerField( "commentsEnabled" );
        	$this->registerField( "customField" );
        	$this->registerField( "postDateTime" );
        	$this->registerField( "trackbackUrls" );        	
        }

		/**
		 * @private
		 *
		 * returns the id of the post or 'false' if it couldn't be saved
		 */
		function _savePostData( $article )
		{
			$status = $this->_postStatus;
			
			$articles = new Articles();
			$article->setFields( $this->_getArticleCustomFields());			
			
			// notifiy about this event
			$this->notifyEvent( EVENT_PRE_POST_ADD, Array( "article" => &$article ));				
			
			// in case the post is already in the db
			if( $this->_postId != "" ) {
				$article->setId( $this->_postId );
				$artId = $this->_postId;
				$postSavedOk = $articles->updateArticle( $article );
				
				if( $postSavedOk )
					$artId = $this->_postId;
				else
					$artId = false;
			}
			else {
				$artId = $articles->addArticle( $article );
			}
			
			return $artId;
		}

        /**
         * Carries out the specified action
         */
        function perform()
        {
			$this->_fetchCommonData();

			$this->_postId = $this->_request->getValue( "postId" );

            $this->_previewPost    = $this->_request->getValue( "previewPost" );
            $this->_addPost        = $this->_request->getValue( "addPost" );
			$this->_saveDraft      = $this->_request->getValue( "isDraft" );
	        
            // we know for sure that the information is correct so we can now add
            // the post to the database
			$postText = Textfilter::xhtmlize($this->_postText).POST_EXTENDED_TEXT_MODIFIER.Textfilter::xhtmlize($this->_postExtendedText);
			
			$article  = new Article( $this->_postTopic, $postText, $this->_postCategories,
									 $this->_userInfo->getId(), $this->_blogInfo->getId(), $this->_postStatus, 0, Array(), $this->_postSlug );
			// set also the date before it's too late
			$article->setDateObject( $this->_postTimestamp );
			$article->setCommentsEnabled( $this->_commentsEnabled );
		
			// save the article to the db
			$artId = $this->_savePostData( $article );
			
        	// once we have built the object, we can add it to the database
        	if( $artId ) {
			
                $this->_view = new AdminPostsListView( $this->_blogInfo );
            	//$article->setId( $artId );
                $message = $this->_locale->tr("post_added_ok");
                
                // train the filter
                BayesianFilterCore::trainWithArticle( $article );
                                
        		// add the article notification if requested to do so
            	if( $this->_sendNotification ) {
                	$artNotifications = new ArticleNotifications();
	            	$artNotifications->addNotification( $artId, $this->_blogInfo->getId(), $this->_userInfo->getId());
                    $message .= " ".$this->_locale->tr("send_notifications_ok");
        	    }

                // we only have to send trackback pings if the article was published
                // otherwise there is no need to...
				$article->setId( $artId );
                if( $article->getStatus() == POST_STATUS_PUBLISHED) {
                	// get the output from the xmlrpc pings but only if the user decided to do so!
					if( $this->_sendPings ) {
						$pingsOutput = $this->sendXmlRpcPings();
						$message .= "<br/><br/>".$pingsOutput;
					}

                    // and now check what to do with the trackbacks
                    if( $this->_sendTrackbacks ) {
                    	// get the links from the text of the post
        				$postLinks = StringUtils::getLinks( stripslashes($article->getText()));

		                // get the real trackback links from trackbackUrls
		                $trackbackLinks = Array();
		                foreach(explode( "\r\n", $this->_trackbackUrls ) as $host ) {
		                	trim($host);
		                	if( $host != "" && $host != "\r\n" && $host != "\r" && $host != "\n" )
		                    	array_push( $trackbackLinks, $host );
		                }

        				// if no links, there is nothing to do
        				if( count($postLinks) == 0 && count($trackbackLinks) == 0 ) {
        					$this->_view = new AdminPostsListView( $this->_blogInfo );
			                $this->_view->setErrorMessage( $this->_locale->tr("error_no_trackback_links_sent"));
        				}
        				else {
            				$this->_view = new AdminTemplatedView( $this->_blogInfo, "sendtrackbacks" );
            				$this->_view->setValue( "post", $article );
            				$this->_view->setValue( "postLinks", $postLinks );
							$this->_view->setValue( "trackbackLinks", $trackbackLinks );            				
         				}
                    }
                    $this->_view->setSuccessMessage( $message );
					
					$this->notifyEvent( EVENT_POST_POST_ADD, Array( "article" => &$article )); 
					
					// empty the cache used by this blog
					CacheControl::resetBlogCache( $this->_blogInfo->getId());						
                }
                else {
                	$this->_view = new AdminPostsListView( $this->_blogInfo );
                    $this->_view->setSuccessMessage( $this->_locale->tr("post_added_not_published") );
					
					$this->notifyEvent( EVENT_POST_POST_ADD, Array( "article" => &$article ));
                }
        	}
        	else {
        		$this->_view = new AdminPostsListView( $this->_blogInfo );
            	$this->_view->setErrorMessage( $this->_locale->tr("error_adding_post") );
        	}

            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
