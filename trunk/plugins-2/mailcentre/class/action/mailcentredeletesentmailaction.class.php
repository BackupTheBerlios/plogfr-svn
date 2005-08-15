<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/siteadminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/view/mailcentremessagelistview.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/dao/mailmessages.class.php" );		

    class MailCentreDeleteSentMailAction extends SiteAdminAction 
	{

        var $_messageIds;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function MailCentreDeleteSentMailAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			$this->_mode = $actionInfo->getActionParamValue();
			if( $this->_mode == "mailcentreDeleteMessage" ) {
				$this->registerFieldValidator( "messageId", new IntegerValidator());
            }
			else
				$this->registerFieldValidator( "messageIds", new ArrayValidator());
				
			$view = new MailCentreMessageListView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("mailcentre_error_deleting_messages"));
			$this->setValidationErrorView( $view );
        }
		
		/**
		 * sets up the parameters and calls the method below
		 */
		function perform()
		{		
			if( $this->_mode == "mailcentreDeleteMessage" ) {
				$messageId = $this->_request->getValue( "messageId" );
				$this->messageIds = Array();
				$this->_messageIds[] = $messageId;
			}
			else
				$this->_messageIds = $this->_request->getValue( "messageIds" );				
				
			$this->_deleteMessages();
		}

        /**
         * deletes comments
		 * @private
         */
        function _deleteMessages()
        {
            $messages = new MailMessages();
            $errorMessage = "";
			$successMessage = "";
			$totalOk = 0;
						
			// loop through the messages and remove them
            foreach( $this->_messageIds as $messageId ) {
                $message = $messages->getMessage( $messageId );
                if( !$message ) {
                    $errorMessage .= $this->_locale->pr("mailcentre_error_deleting_message2", $messageId );
                }
                else {
                    if( !$messages->deleteMessage( $messageId ))
                        $errorMessage .= $this->_locale->pr("mailcentre_error_deleting_message", $message->getSubject())."<br/>";
                    else {
                        $totalOk++;
                        if( $totalOk < 2 )
                            $successMessage .= $this->_locale->pr("mailcentre_message_deleted_ok", $message->getSubject())."<br/>";
                        else
                            $successMessage = $this->_locale->pr("mailcentre_messages_deleted_ok", $totalOk );
                    }
				}
            }

			// if everything fine, then display the same view again with the feedback
            $this->_view = new MailCentreMessageListView( $this->_blogInfo );
			if( $successMessage != "" ) {
				$this->_view->setSuccessMessage( $successMessage );
			}
			if( $errorMessage != "" ) $this->_view->setErrorMessage( $errorMessage );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
