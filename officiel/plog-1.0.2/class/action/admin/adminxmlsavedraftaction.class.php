<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminxmlview.class.php" );
	
    /**
     * \ingroup Action
     * @private
     */
	class AdminXmlSaveDraftAction extends AdminAction
	{
		
		function AdminXmlSaveDraftAction( $actionInfo, $request )
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function validate()
		{
        	$this->_postText     = $this->_request->getValue( "postText" );
            $this->_postExtendedText = $this->_request->getValue( "postExtendedText" );
            $this->_postTopic    = $this->_request->getValue( "postTopic" );
            
            // if there is no text, extended text or topic there is no point in saving anything
            if( $this->_postText == "" && $this->_postExtendedTExt == "" &&
                $this->_postTopic == "" ) {
                // nothing to do yet, so let's quit
                $this->_view = new AdminXmlView( $this->_blogInfo, "response" );
                $this->_view->setValue( "method", "saveXmlDraft" );
                $this->_view->setValue( "result", "0" );
                
                return false;
            }
            
            $this->_postCategories = $this->_request->getValue( "postCategories" );
            $this->_postStatus   = $this->_request->getValue( "postStatus" );
			$this->_postSlug = $this->_request->getValue( "postSlug" );
            $this->_sendNotification = $this->_request->getValue( "sendNotification" );
            $this->_sendTrackbacks = $this->_request->getValue( "sendTrackbacks" );
            $this->_sendPings = $this->_request->getValue( "sendPings" );
			$this->_postId = $this->_request->getValue( "postId" );
            $this->_commentsEnabled = $this->_request->getValue( "commentsEnabled" );
            if( $this->_commentsEnabled != 1 )
            	$this->_commentsEnabled = false;
            else
            	$this->_commentsEnabled = true;
			
			// fetch the custom fields
			$this->_customFields = $this->_request->getValue( "customField" );

            // fetch the timestamp that the post will have
            if( $this->_config->getValue( "disable_javascript_calendar")) {
            	$this->_postDay = $this->_request->getValue( "postDay" );
                $this->_postMonth = $this->_request->getValue( "postMonth" );
                $this->_postHour = $this->_request->getValue( "postHour" );
                $this->_postMinutes = $this->_request->getValue( "postMinutes" );
                $this->_postYear = $this->_request->getValue( "postYear" );
            }
            else {
            	$postDateTime = $this->_request->getValue( "postDateTime" );
                $dateTimeParts = explode(" ", $postDateTime);
                $dateParts = explode("/", $dateTimeParts[0] );
                $timeParts = explode(":",$dateTimeParts[1] );
                $this->_postDay = $dateParts[0];
                $this->_postMonth = $dateParts[1];
                $this->_postYear = $dateParts[2];
                $this->_postHour = $timeParts[0];
                $this->_postMinutes = $timeParts[1];
            }

            $this->_postTimestamp = new Timestamp();
            $this->_postTimestamp->setMinutes( $this->_postMinutes );
            $this->_postTimestamp->setHour( $this->_postHour );
            $this->_postTimestamp->setDay( $this->_postDay );
            $this->_postTimestamp->setMonth( $this->_postMonth );
            $this->_postTimestamp->setYear( $this->_postYear );
            return true;		
		}
		
		function perform()
		{		
            $status = POST_STATUS_DRAFT;
            $articles = new Articles();
            $postText = Textfilter::xhtmlize($this->_postText).POST_EXTENDED_TEXT_MODIFIER.Textfilter::xhtmlize($this->_postExtendedText);
            
            $article  = new Article( $this->_postTopic, $postText, $this->_postCategories, $this->_userInfo->getId(), 
                                     $this->_blogInfo->getId(), $status, 0, Array(), $this->_postSlug );
            // set also the date before it's too late
            $article->setDateObject( $this->_postTimestamp );
            $article->setCommentsEnabled( $this->_commentsEnabled );
            // prepare the custom fields
            $fields = Array();
            if( is_array($this->_customFields)) {
                foreach( $this->_customFields as $fieldId => $fieldValue ) {
                    // 3 of those parameters are not really need when creating a new object... it's enough that
                    // we know the field definition id.
                    $customField = new CustomFieldValue( $fieldId, $fieldValue, "", -1, "", $artId, $this->_blogInfo->getId(), -1);
                    array_push( $fields, $customField );
                }
                $article->setFields( $fields );
            }
            
            // in case the post is already in the db
            if( $this->_postId != "" ) {
                $article->setId( $this->_postId );
                $postSavedOk = $articles->updateArticle( $article );
                
                if( $postSavedOk )
                    $artId = $this->_postId;
                else
                    $artId = false;
            }
            else {
                $artId = $articles->addArticle( $article );
            }
            
            // once we have built the object, we can add it to the database
            $this->_view = new AdminXmlView( $this->_blogInfo, "response" );				
            $this->_view->setValue( "method", "saveXmlDraft" );				
            if( $artId )
                $this->_view->setValue( "result", $artId );
            else 
                $this->_view->setValue( "result", "0" );
                
            return true;			
		}
    }
?>