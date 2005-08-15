<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/view/mailcentresendmessageview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/view/mailcentremessagelistview.class.php" );	
    include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/dao/mailmessages.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	
	/**
	 * displays a non-editable view of a message sent before
	 */
	class MailCentreViewSentMail extends SiteAdminAction
	{
	    function MailCentreViewSentMail( $actionInfo, $request )
	    {
	        $this->SiteAdminAction( $actionInfo, $request );
	        
	        // check that the message id parameter is valid
	        $this->registerFieldValidator( "messageId", new IntegerValidator());
	        $view = new MailCentreMessageListView( $this->_blogInfo );
	        $view->setErrorMessage( $this->_locale->tr( "mailcentre_incorrect_message_id" ));
	        $this->setValidationErrorView( $view );
	    }
	
		function perform()
		{
		    // try to load the message
		    $messageId = $this->_request->getValue( "messageId" );
		    $mailMessages = new MailMessages();
		    $message = $mailMessages->getMessage( $messageId );
		    
		    if( !$message ) {
		        // if something went wrong loading the message, quit
    	        $view = new MailCentreMessageListView( $this->_blogInfo );
	            $view->setErrorMessage( $this->_locale->tr( "mailcentre_incorrect_message_id" ));
	            $this->setValidationErrorView( $view );
	            $this->setCommonData();
	            return( false );    
		    }
		
		    // pass the data to the template if everything's ok  
			$this->_view = new MailCentreSendMessageView( $this->_blogInfo, false );
			$this->_view->setValue( "messageRecipient", $message->getTo());
			$this->_view->setValue( "messageBcc", $message->getBcc());
			$this->_view->setValue( "messageCc", $message->getCc());			
			$this->_view->setValue( "messageText", $message->getText());
			$this->_view->setValue( "messageSubject", $message->getSubject());
			$this->_view->setValue( "messageSentDate", $message->getSentTimestamp());
			$this->setCommonData();
			
			return( true );
		}
	}
?>