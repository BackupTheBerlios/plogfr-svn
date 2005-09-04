<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminpostmanagementcommonaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admineditpostview.class.php" );	
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );	
    include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );	    
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfieldsvalues.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfields.class.php" ); 
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/stringutils.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Updates the values of the post in the database
	 *
	 * Btw, this class could very well need some refactoring... :)
     */
    class AdminUpdatePostAction extends AdminPostManagementCommonAction
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminUpdatePostAction( $actionInfo, $request )
        {
        	$this->AdminPostManagementCommonAction( $actionInfo, $request );
        	
        	// for data validation purposes, posts must have at least a topic, an intro text, and a category
        	$this->registerFieldValidator( "postText", new StringValidator());
        	$this->registerFieldValidator( "postTopic", new StringValidator());
        	$this->registerFieldValidator( "postCategories", new ArrayValidator());
        	$this->registerFieldValidator( "postId", new IntegerValidator());
        	$view = new AdminEditPostView( $this->_blogInfo );
        	$view->setErrorMessage( $this->_locale->tr("error_updating_post"));
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
         * Carries out the specified action
         */
        function perform()
        {	
	        // fetch the data
            $this->_fetchCommonData();	        
            $this->_postId = $this->_request->getValue( "postId" );
	        	
            // fetch the old post
            $articles =  new Articles();
            $post     = $articles->getBlogArticle( $this->_postId, $this->_blogInfo->getId());
            // there must be something wrong if we can't fetch the post that we are trying to update...
            if( !$post ) {
				$this->_view = new AdminPostsListView( $this->_blogInfo );
				$this->_view->setErrorMessage( $this->_locale->tr("error_fetching_post"));
                $this->setCommonData();

                return false;
            }

            // if we got it, update some fields
            $post->setTopic( stripslashes($this->_postTopic));
            $postText = $this->_postText.POST_EXTENDED_TEXT_MODIFIER.$this->_postExtendedText;
            $post->setText( stripslashes($postText));
            $post->setCategoryIds( $this->_postCategories );
            $post->setStatus( $this->_postStatus );
            $post->setDateObject( $this->_postTimestamp );
            $post->setCommentsEnabled( $this->_commentsEnabled );
			$post->setPostSlug( $this->_postSlug );

            // prepare the custom fields
            $fields = Array();
            if( is_array($this->_customFields)) {
            	foreach( $this->_customFields as $fieldId => $fieldValue ) {
                    // 3 of those parameters are not really need when creating a new object... it's enough that
                    // we know the field definition id.
                    $customField = new CustomFieldValue( $fieldId, $fieldValue, "", -1, "", $post->getId(), $this->_blogInfo->getId(), -1);
                    array_push( $fields, $customField );
                }
                $post->setFields( $fields );
			}
			
			// fire the pre event
			$this->notifyEvent( EVENT_PRE_POST_UPDATE, Array( "article" => &$post ));
		
        	// and finally save the post to the database
        	if( !$articles->updateArticle( $post )) {
				$this->_view = new AdminPostsListView( $this->_blogInfo );
				$this->_view->setErrorMessage( $this->_locale->tr("error_updating_post"));
            	$this->setCommonData();

            	return false;

        	}
			
			// clean up the cache
			CacheControl::resetBlogCache( $this->_blogInfo->getId());	

        	// create the definitive view
        	$this->_view = new AdminPostsListView( $this->_blogInfo );
        	// show a message saying that the post was updated
        	$message = $this->_locale->pr("post_updated_ok", $post->getTopic());

        	// check if there was a previous notification
        	$notifications = new ArticleNotifications();
        	$artNotification = $notifications->getUserArticleNotification( $this->_postId, $this->_blogInfo->getId(), $this->_userInfo->getId());
        	// check if we have to add or remove a notification
        	if( $this->_sendNotification ) {
        		if( !$artNotification ) {
            		// if there wasn't one and now we want it, we have to add it
                	$notifications->addNotification( $this->_postId, $this->_blogInfo->getId(), $this->_userInfo->getId());
                	$message .= " ".$this->_locale->tr("notification_added");
            	}
        	}
        	else {
        		// if we don't want notifications, then we have to check if there is one since we
            	// should remove it
            	if( $artNotification ) {
            		$notifications->deleteNotification( $this->_postId, $this->_blogInfo->getId(), $this->_userInfo->getId());
                	$message .= " ".$this->_locale->tr("notification_removed");
            	}
        	}
			
			// if the "send xmlrpc pings" checkbox was enabled, do something about it...
			if( $post->getStatus() == POST_STATUS_PUBLISHED ) {
				// get the links from the text of the post
				$postLinks = StringUtils::getLinks( stripslashes($post->getText()));

                // get the real trackback links from trackbackUrls
                $trackbackLinks = Array();
                foreach(explode( "\r\n", $this->_trackbackUrls ) as $host ) {
                	trim($host);
                	if( $host != "" && $host != "\r\n" && $host != "\r" && $host != "\n" )
                    	array_push( $trackbackLinks, $host );
                }
				
				if( $this->_sendPings ) {
					$message .= "<br/><br/>".$this->sendXmlRpcPings();
				}				
				// and now check what to do with the trackbacks
				if( $this->_sendTrackbacks ) {					
					// if no links, there is nothing to do
					if( count($postLinks) == 0 && count($trackbackLinks) == 0 ) {
						$this->_view = new AdminPostsListView( $this->_blogInfo );
		                $this->_view->setErrorMessage( $this->_locale->tr("error_no_trackback_links_sent"));
					}
					else {
						$this->_view = new AdminTemplatedView( $this->_blogInfo, "sendtrackbacks" );
						// get the links from the text of the post
						$this->_view->setValue( "post", $post );
						$this->_view->setValue( "postLinks", $postLinks );
						$this->_view->setValue( "trackbackLinks", $trackbackLinks );
					}
				}
			}

        	// show the message
        	$this->_view->setSuccessMessage( $message );
			
			// and fire the post event
			$this->notifyEvent( EVENT_POST_POST_UPDATE, Array( "article" => &$post ));

            $this->setCommonData();

            return true;
        }
    }
?>