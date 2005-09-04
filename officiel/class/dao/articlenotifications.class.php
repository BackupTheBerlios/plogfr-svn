<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlenotification.class.php" );
    include_once( PLOG_CLASS_PATH."class/mail/emailmessage.class.php" );
    include_once( PLOG_CLASS_PATH."class/mail/emailservice.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userinfo.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/templateservice.class.php" );

    define( "EMAILNOTIFIER_TEMPLATE", "email_notifier" );

    /**
	 * \ingroup DAO
     * Accesses the database to create and fetch article notifications.
     */
    class ArticleNotifications extends Model 
	{

		var $_config;

    	/**
         * Constructor. Does nothing yet.
         */
    	function ArticleNotifications()
        {
        	$this->Model();

            $this->_config =& Config::getConfig();
        }

        /**
         * Returns all the notifications for a given article from a given blog.
         *
         * @param artId Article identifier.
         * @param blogId Blog identifier
         * @return An array of ArticleNotification objects containing information about all the
         * notifications for the given article.
         */
        function getArticleNotifications( $artId, $blogId )
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."articles_notifications WHERE article_id = ".$artId." AND blog_id = ".$blogId.";";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            $notifications = Array();
            while( $row = $result->FetchRow()) {
            	array_push( $notifications, $this->_fillNotificationInformation( $row ));
            }

            return $notifications;
        }

        /**
         * Internal function
         */
        function _fillNotificationInformation( $query_result )
        {
        	$notification = new ArticleNotification( $query_result["user_id"],
                                                     $query_result["blog_id"],
                                                     $query_result["article_id"],
                                                     $query_result["id"] );

            return $notification;
         }

         /**
          * Notifies a user of a new comment in an article.
          *
          * @param notification The ArticleNotification object.
          * @param userInfo An UserInfo object with information about the user (we
          * mainly will need the email address!)
          * @param subject Subject of the message that will be sent to the user.
          * @param body Message that will be sent to the user.
          * @param charset the encoding that will be used in the message (it should be based
          * on the locale of the blog who is sending this message) It defaults to iso-8859-1
          * @return Returns true if the user was correctly notified or false otherwise.
          */
         function notifyUser( $notification, $userInfo, $subject, $body, $charset = 'iso-8859-1' )
         {
         	//print( "sending notification to ".$userInfo->getEmail()."<br/>");
            $message = new EmailMessage();
            $message->setFrom( $this->_config->getValue( "post_notification_source_address" ));
            $message->addTo( $userInfo->getEmail());
            $message->setSubject( "pLog Notification system" );
            $message->setBody( $body );
            $message->setCharset( $charset );

            $service = new EmailService();
            return $service->sendMessage( $message );
         }

         /**
          * Notifies all the users of new comments in a post
          *
          * @param postId The post we want to check if there are notifications
          * @param blogId Just in case, the blog to which that post belongs.
          */
         function notifyUsers( $postId, $blogInfo, $message = null)
         {
         	$blogId = $blogInfo->getId();
         	$artNotifs = $this->getArticleNotifications( $postId, $blogId );

            // default message.
            // NOTE: Should this be translatable???
            if( $message == null )
            	$message = "There has been actitivity in the article with id ".$postId;

            if( empty($artNotifs))
            	return;

            $articles = new Articles();
            $article  = $articles->getBlogArticle( $postId, $blogId );
            
            // get the correct character set
            $blogLocale =& $blogInfo->getLocale();
            $charset = $blogLocale->getCharset();

            $users = new Users();
            foreach( $artNotifs as $notif ) {
            	$userInfo = $users->getUserInfoFromId( $notif->getUserId());
                $message = $this->renderMessageTemplate( $article, $blogInfo );
            	$this->notifyUser( $notif, $userInfo, "pLog Notification", $message, $charset );
            }
         }

         /**
          * Renders the template at templates/misc/email_notifier.template
          */
         function renderMessageTemplate( $article, $blogInfo )
         {
         	// create a new template service
         	$ts = new TemplateService();
            $messageTemplate = $ts->Template( EMAILNOTIFIER_TEMPLATE, "misc" );
            // add these two useful objects
			$rg =& RequestGenerator::getRequestGenerator( $blogInfo );
			// disable the xhtml mode, as some email clients cannot deal with it
			$rg->setXHTML( false );
            $messageTemplate->assign( "url", $rg );
            $messageTemplate->assign( "post", $article );
            // render and return the contents
            return $messageTemplate->fetch();
         }

         /**
          * Adds a new notification to the database.
          * <b>NOTE:</b> It doesn't check if there is already a notification for that post, blog and user!!
          * Should we implement that checking it here or simply by making the primary key to include the three
          * values?
          *
          * @param artId Article
          * @param userId User identifier
          * @param blogId Blog identifier
          * @return Returns true if all correct or false otherwise.
          */
         function addNotification( $artId, $blogId, $userId )
         {
         	$query = "INSERT INTO ".$this->getPrefix()."articles_notifications ( article_id, user_id, blog_id ) VALUES ( ".$artId.",".$userId.",".$blogId.");";

            $result = $this->Execute( $query );

            return $result;
         }

         /**
          * Removes a notification from the database.
          *
          * @param artId Article
          * @param blogId Blog identifier
          * @param userId User identifier
          * @return True if all correct or false otherwise.
          */
         function deleteNotification( $artId, $blogId, $userId )
         {
         	$query = "DELETE FROM ".$this->getPrefix()."articles_notifications WHERE article_id = ".$artId." AND user_id = ".$userId." AND blog_id = ".$blogId.";";

            $result = $this->Execute( $query );

            return $result;
         }

         /**
          * Returns the notifications but only for a particular user, a particular blog and
          * a particular blog.
          *
          * @param artId The article identifier.
          * @param blogId The blog identifier.
          * @param userId The user identifier.
          * @return The ArticleNotification object with the information or false otherwise.
          */
         function getUserArticleNotification( $artId, $blogId, $userId )
         {
         	$query = "SELECT * FROM ".$this->getPrefix()."articles_notifications WHERE article_id = ".$artId." AND blog_id = ".$blogId." AND user_id = ".$userId.";";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            if( $result->RecordCount() == 0 )
            	return false;

            $notification = $this->_fillNotificationInformation( $result->fetchRow());

            return $notification;
         }
     }
?>
