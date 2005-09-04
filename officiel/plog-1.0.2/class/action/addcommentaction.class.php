<?php

	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlenotifications.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/emailvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/httpurlvalidator.class.php" );    
    include_once( PLOG_CLASS_PATH."class/net/client.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );
    include_once( PLOG_CLASS_PATH."class/bayesian/bayesianfiltercore.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/cachecontrol.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Takes care of validating the form to add new comments to an article
     */
    class AddCommentAction extends BlogAction 
	{

    	var $_articleId;
        var $_blogId;
        var $_opId;
        var $_userName;
        var $_userEmail;
        var $_userUrl;
        var $_commentText;
        var $_commentTopic;
        var $_parentId;


    	/**
         * Constructor
         */
        function AddCommentAction( $blogInfo, $request )
        {
        	$this->BlogAction( $blogInfo, $request );
			
			// change the validation mode of the form
			$this->registerFieldValidator( "articleId", new IntegerValidator());
			$this->_form->setFieldErrorMessage( "articleId", $this->_locale->tr("error_incorrect_article_id" ));
			$this->registerFieldValidator( "blogId", new IntegerValidator());
			$this->_form->setFieldErrorMessage( "blogId", $this->_locale->tr("error_incorrect_blog_id" ));
			$this->registerFieldValidator( "parentId", new IntegerValidator(), true );
			$this->_form->setFieldErrorMessage( "parentId", $this->_locale->tr("error_incorrect_article_id" ));
			$this->registerFieldValidator( "userEmail", new EmailValidator(), true );
			$this->_form->setFieldErrorMessage( "userEmail", $this->_locale->tr("error_incorrect_email_address" ));
			$this->registerFieldValidator( "userName", new StringValidator());
			$this->_form->setFieldErrorMessage( "userName", $this->_locale->tr("error_comment_without_name" ));
			$this->registerFieldValidator( "commentText", new StringValidator());
			$this->_form->setFieldErrorMessage( "commentText", $this->_locale->tr("error_comment_without_text"));
			$this->registerFieldValidator( "userUrl", new HttpUrlValidator(), true );
			$this->_form->setFieldErrorMessage( "userUrl", $this->_locale->tr("Invalid URL" ));
			$view = new ErrorView( $this->_blogInfo );
			$view->setErrorMessage( "There has been an error validating the data!" );
			$this->setValidationErrorView( $view );

            $this->_fetchFields();
        }

        function _fetchFields()
        {
            $this->_articleId = $this->_request->getValue( "articleId" );
            $this->_blogId    = $this->_request->getValue( "blogId" );
            $this->_opId      = $this->_request->getValue( "op" );
            $this->_parentId  = $this->_request->getValue( "parentId" );
            if( $this->_parentId == null || $this->_parentId == "" )
                $this->_parentId = 0;
            $this->_userEmail = Textfilter::filterAllHTML($this->_request->getValue( "userEmail" ));
            $this->_userUrl   = Textfilter::filterAllHTML($this->_request->getValue( "userUrl" ));
            if( (strlen($this->_userUrl) != 0) &&
                  (substr($this->_userUrl, 0, 7 ) != "http://" )){
                $this->_userUrl = "http://".$this->_userUrl;
            }
            $this->_userName  = Textfilter::filterAllHTML($this->_request->getValue( "userName" ));
            $this->_commentText = trim($this->_request->getValue( "commentText" ));
            $this->_commentTopic = trim($this->_request->getValue( "commentTopic" ));
            // remove all weird stuff from the text and topic
            $tf = new TextFilter();
            $this->_commentTopic = $tf->xhtmlize($tf->filterHTML( $this->_commentTopic ));
            // and also from the text
            $this->_commentText = $tf->xhtmlize($tf->filterHTML( $this->_commentText ));
            // now, if the option is set, we 'beautify' the text typed by users
            if( $this->_config->getValue( "beautify_comments_text" )) {
            	$this->_commentText = $tf->autop($this->_commentText);
            }
        }

        /**
         * Since this function contains this method, the controller will automatically
         * call it before calling perform()
         *
         * @return True if all fields ok or false otherwise.
         */
        function validate()
        {
            // check if comments are enabled
            $blogSettings = $this->_blogInfo->getSettings();
            if( !$blogSettings->getValue( "comments_enabled" )) {
            	$this->_view = new ErrorView( $this->_blogInfo, "error_comments_not_enabled" );
                $this->setCommonData();

                return false;
            }
			
			return( parent::validate());
        }
		
		/**
		 * prepare a nicer error message. This method is only going to be executed whenver a validation
		 * error happens (see Action::validate())
		 *
		 * @see Action::validate()
		 */
		function validationErrorProcessing()
		{
			// collect all the errors from all the fields and for those that failed validation,
			// put them in a nicer string.
			$results = $this->_form->getFormValidationResults();
			foreach( $results as $field => $result ) {
				if( !$result ) {
					$errorMessage .= $this->_form->getFieldErrorMessage( $field )."<br/><br/>";
				}
			}
			
			$this->_view->setErrorMessage( $errorMessage );
			
			return true;
		}

        /**
         * Carries out the action
         */
        function perform()
        {
        	// need to check the ip of the client
            $clientIp = Client::getIp();

            // fetch the same article again so that we can have all the comments from
            // the database, plus this last one
            $articles = new Articles();
            $article  = $articles->getBlogArticle( $this->_articleId, $this->_blogInfo->getId());

            // check if the user wanted to receive comments for this article
            // or not...
            if( $article->getCommentsEnabled() == false ) {
                 $this->_view = new ErrorView( $this->_blogInfo );
                 $this->_view->setValue( "message", "Comments have been disabled for this article." );
                 $this->setCommonData();
                 return false;
            }
			
			$this->notifyEvent( EVENT_POST_LOADED, Array( "article" => &$article ));

        	// we have already checked all the data, so we are sure that everything's in place
            $comments = new ArticleComments();
			
			$comment = new UserComment( $this->_articleId, $this->_parentId, $this->_commentTopic, $this->_commentText,
			                            null, $this->_userName, $this->_userEmail, $this->_userUrl,
									    $clientIp );			

            // check if there is already a comment with the same text, topic and made from the same
            // IP already in the database because if so, then we will not add the comment that
            // the user is trying to add (a reload button mistake, perhaps?)
            if( !$comments->getIdenticalComment( $this->_commentTopic, $this->_commentText,
                                                 $this->_articleId, $this->_parentId,
                                                 $this->_userName, $this->_userEmail,
                                                 $this->_userUrl, $clientIp )) {
												 
				// fire an event
				$this->notifyEvent( EVENT_PRE_COMMENT_ADD, Array( "comment" => &$comment ));
												 
				if( !$comments->addComment( $comment )) {
                	// show an error message if problems
                    $this->_view = new ErrorView( $this->_blogInfo );
                    $this->_view->setValue( "message", "error_adding_comment" );
                    $this->setCommonData();
                    return false;
                }
            }
			
            // finally, check if there was any user who wanted to be notified of new comments
            // to this post...
            $notifier = new ArticleNotifications();
            $notifier->notifyUsers( $article->getId(), $this->_blogInfo);
			
			// fire the post event...
			$this->notifyEvent( EVENT_POST_COMMENT_ADD, Array( "comment" => &$comment ));

			//
			// clear caches. This should be done in a more granular way, because right now
			// we're either removing *all* of them or none. I guess we should only remove the 
			// cache whose identifier corresponds with the blog and article that we just removed, 
			// but let's leave it as it is for the time being...
			//
			CacheControl::resetBlogCache( $this->_blogInfo->getId());
			
			// clean up the request, there's a parameter called 'userName' also used by
			// ViewArticleAction but that doesn't have the same meaning so we better remove it
			// before it's too late! We also need to add a new request commentUserName to replace
			// original userName, in case developer need it in filter or event plugin.
			$request = HttpVars::getRequest();
			$request["commentUserName"] = $request["userName"];
			$request["userName"] = "";
			HttpVars::setRequest( $request ); 					
						
			// forward the action to ViewArticleAction
			return BlogController::setForwardAction( "ViewArticle" );
        }
    }
?>
