<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/emailvalidator.class.php" );	
	include_once( PLOG_CLASS_PATH."class/mail/emailservice.class.php" );
	include_once( PLOG_CLASS_PATH."class/mail/emailmessage.class.php" );	
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/view/mailcentresendmessageview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/view/mailcentremessagelistview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/dao/mailmessages.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
	
	class MailCentreSendMessage extends SiteAdminAction
	{
		
		function MailCentreSendMessage( $actionInfo, $request )
		{
			$this->SiteAdminAction( $actionInfo, $request );
			
			$this->registerFieldValidator( "messageSubject", new StringValidator());
			$this->registerFieldValidator( "messageText", new StringValidator());
			$this->registerField( "messageRecipient" );
			$this->registerField( "messageCc" );
			$this->registerField( "messageBcc" );						
			$view = new MailCentreSendMessageView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("mailcentre_error_sending_message" ));
			$this->setValidationErrorView( $view );		
		}
		
		/** 
		 * given a special recipient name, expand to a fully-featured list.
		 */
		function _expandRecipients( $recipientId )
		{
		      $users = new Users();
		      $userList = null;
		      
		      switch( strtoupper($recipientId)) {
		          case "[ALL]":
		              $userList = $users->getAllUsers();
		              break;
		          case "[ALL_ACTIVE]":
		              $userList = $users->getAllUsers( USER_STATUS_ACTIVE );
		              break;
		          case "[ALL_DISABLED]":
		              $userList = $users->getAllUsers( USER_STATUS_DISABLED );
		          case "[ALL_UNCONFIRMED]":
		              $userList = $users->getAllUsers( USER_STATUS_UNCONFIRMED );
		              break;
		      }
		      
		      // return an array with the same element
		      if( $userList == null )
		          return( Array( $recipientId ));
		      
		      // process the list
		      $recipients = Array();
		      foreach( $userList as $user ) {
		          $recipients[] = $user->getEmail();
		      }
		      
		      return( $recipients );
		}
		
		function perform()
		{
		    // extract the data
		    $recipients = $this->_request->getValue( "messageRecipient" );
		    $recipientsCc = $this->_request->getValue( "messageCc" );
		    $recipientsBcc = $this->_request->getValue( "messageBcc" );
		    $text = $this->_request->getValue( "messageText" );
		    $subject = $this->_request->getValue( "messageSubject" );
		    
		    // check that we've got either a 'to','cc' or 'bcc'
		    if( $recipients == "" && $recipientsCc == "" && $recipientsBcc == "" ) {
		        // force an error
    			$this->_view = new MailCentreSendMessageView( $this->_blogInfo );
	   		    $this->_view->setErrorMessage( $this->_locale->tr("mailcentre_error_sending_message" ));
	   		    $this->_form->setFieldValidationStatus( "messageRecipient", false );
	   		    $this->setCommonData( true );
		    }
		    
		    // pre-process some of the data
		    $recipients = str_replace ( " ", "", $recipients );
		    $recipientsCc = str_replace ( " ", "", $recipientsCc );
		    $recipientsBcc = str_replace ( " ", "", $recipientsBcc );		    
		    
		    // and get the list of recipients
		    $listUnexpanded = explode( ",", $recipients );
		    $list = Array();
		    foreach( $listUnexpanded as $recipient ) {
		      $result = $this->_expandRecipients( $recipient );
		      $list = array_merge( $list, $result );
		    }
		    
		    $listCcUnexpanded = explode( ",", $recipientsCc );
		    $listCc = Array();
		    foreach( $listCcUnexpanded as $recipient ) {
		      $result = $this->_expandRecipients( $recipient );
		      $listCc = array_merge( $listCc, $result );
		    }
		    
		    $listBccUnexpanded = explode( ",", $recipientsBcc );
		    $listBcc = Array();
		    foreach( $listBccUnexpanded as $recipient ) {
		      $result = $this->_expandRecipients( $recipient );
		      $listBcc = array_merge( $listBcc, $result );
		    }		  		    
		    
		    // create a mail message that includes all the recipients
		    $message = new EmailMessage();
		    $val = new EmailValidator();
		    $totalTo = 0;
		    $totalCc = 0;
		    $totalBcc = 0;
		    foreach( $list as $to ) {
		      // add each one of the recipients
		      if( $val->validate( $to )) {
    		      $message->addTo( $to );
    		      $totalTo++;
    		  }
		    }
		    foreach( $listCc as $cc ) {
		      // add each one of the recipients
      	      if( $val->validate( $cc )) {
    		      $message->addCc( $cc );
    		      $totalCc++;
    		  }
		    }
		    foreach( $listBcc as $bcc ) {
		      // add each one of the recipients
      	      if( $val->validate( $bcc )) {
    		      $message->addBcc( $bcc );
    		      $totalBcc++;
    		  }
		    }
		    
		    // check that we are really sending the message to somebody
		    if( $totalTo == 0 && $totalCc == 0 && $totalBcc == 0 ) {
		        // force an error
    			$this->_view = new MailCentreSendMessageView( $this->_blogInfo );
	   		    $this->_view->setErrorMessage( $this->_locale->tr("mailcentre_error_sending_message" ));
	   		    $this->_form->setFieldValidationStatus( "messageRecipient", false );
	   		    $this->setCommonData( true );		    
		    }
		    
		    // and now set the subject and body...
		    $message->setSubject( $subject );
		    $message->setBody( $text );
		    // set the encoding based on the current blog settings
		    $locale =& $this->_blogInfo->getLocale();
		    $message->setCharset( $locale->getCharset());
		    // and the "from" address
		    $config =& Config::getConfig();
		    $from = $config->getValue( "post_notification_source_address" );
		    $message->setFrom( $from );
		    
		    // now send the message
		    $service = new EmailService();
		    if( !$service->sendMessage( $message )) {
		      // if something went wrong, go back to the previous view
		      $this->_view = new MailCentreSendMessageView( $this->_blogInfo );
		      $this->_view->setErrorMessage( $this->_locale->tr( "mailcentre_error_sending_message" ));
		      // show the view and keep the data that was in the form
		      $this->setCommonData( true );
		    }
		    
		    $recipients = implode ( ",", $list );
		    $recipientsCc = implode( ",", $listCc );
		    $recipientsBcc = implode( ",", $listBcc );
		    
		    // if everything went ok, create our own MailMessage object and save it to the database
		    $mailMessage = new MailMessage( $subject,
		                                    $text,
		                                    $recipients,
		                                    $recipientsCc,
		                                    $recipientsBcc );
		    $mailMessages = new MailMessages();
		    $mailMessages->addMessage( $mailMessage );
		
		    // show the resulting view
			$this->_view = new MailCentreMessageListView( $this->_blogInfo );
			$this->_view->setSuccessMessage( $this->_locale->tr("mailcentre_message_sent_ok"));
            $this->setCommonData();
			
			return( true );
		}
	}
?>