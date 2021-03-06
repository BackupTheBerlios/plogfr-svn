<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfieldvaluefactory.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
	

    /**
     * \ingroup Action
     * @private
     *
	 * there is a lot of code that can be shared amongst
	 * AdminAddPostAction and AdminUpdatePostAction so we'll put it all here
	 * and make these two classes extend this one
	 */
	class AdminPostManagementCommonAction extends AdminAction
	{

    	var $_postText;
        var $_postExtendedText;
        var $_postTopic;
        var $_postCategories;
        var $_postStatus;
        var $_sendNotification;
		var $_sendPings;
        var $_previewPost;
        var $_addPost;
        var $_commentsEnabled;
        var $_trackbackUrls;
        // stuff about the date
        var $_postYear;
        var $_postMonth;
        var $_postDay;
        var $_postHour;
        var $_postMinutes;
        var $_postTimestamp;
		// custom fields
		var $_customFields;
		var $_postSlug;
		var $_postId;	
	
	
		function AdminPostManagementCommonAction( $actionInfo, $request ) 
		{
			$this->AdminAction( $actionInfo, $request );
		}
		
		function _fetchPostDateInformation()
		{

            // fetch the timestamp that the post will have
          	$postDateTime = $this->_request->getValue( "postDateTime" );
            $dateTimeParts = explode(" ", $postDateTime);
            $dateParts = explode("/", $dateTimeParts[0] );
            $timeParts = explode(":",$dateTimeParts[1] );
            $this->_postDay = $dateParts[0];
            $this->_postMonth = $dateParts[1];
            $this->_postYear = $dateParts[2];
            $this->_postHour = $timeParts[0];
            $this->_postMinutes = $timeParts[1];
			
            $this->_postTimestamp = new Timestamp();
            $this->_postTimestamp->setMinutes( $this->_postMinutes );
            $this->_postTimestamp->setHour( $this->_postHour );
            $this->_postTimestamp->setDay( $this->_postDay );
            $this->_postTimestamp->setMonth( $this->_postMonth );
            $this->_postTimestamp->setYear( $this->_postYear );
		}
		
		/**
		 * @private
		 */
		function _generateCalendarInformation()
		{
			$this->_months = $this->_locale->getMonthNames();
			$this->_years = range( 1990, 2030 );
			$this->_minutes = Array( "00", "01", "02", "03", "04", "05", "06", "07", "08", "09",
								"10", "11", "12", "13", "14", "15", "16", "17", "18", "19",
								"20", "21", "22", "23", "24", "25", "26", "27", "28", "29",
								"30", "31", "32", "33", "34", "35", "36", "37", "38", "39",
								"40", "41", "42", "43", "44", "45", "46", "47", "48", "49",
								"50", "51", "52", "53", "54", "55", "56", "57", "58", "59" );
			$this->_hours = Array( "00", "01", "02", "03", "04", "05", "06", "07", "08",
                                   "09", "10", "11", "12", "13", "14", "15", "16", "17",
                                   "18", "19", "20", "21", "22", "23" );
		}
		
		/**
		 * sends xmlrpc pings
		 */
        function sendXmlRpcPings()
        {
        	// send the xmlrpc ping

            if( !$this->_config->getValue( "xmlrpc_ping_enabled", false ))
            	return "";

            $blogs = new Blogs();
            $resultArray = $blogs->updateNotify( $this->_blogInfo );
			
			// check to prevent throwing an error if the list is empty
			if( $resultArray == "" || empty( $resultArray ))
				return "";
			
            foreach( $resultArray as $host => $result ) {
            	if( $result == "OK" )
                	$message .= $this->_locale->tr("xmlrpc_ping_ok").$host.".<br/>";
                else {
                    $message .= $this->_locale->tr("error_sending_xmlrpc_ping").$host.".";
                    if( $result != "" ) $message .= "<br/>".$this->_locale->tr("error_sending_xmlrpc_ping_message").$result.".";
                    $message .= "<br/>";
                 }
            }

            return $message;
        }
		
		function _fetchCommonData()
		{
        	$this->_postText     = trim(Textfilter::xhtmlize($this->_request->getValue( "postText" )));
            $this->_postExtendedText = trim(Textfilter::xhtmlize($this->_request->getValue( "postExtendedText" )));
            $this->_postTopic    = trim(Textfilter::xhtmlize(Textfilter::filterAllHTML($this->_request->getValue( "postTopic" ))));
            $this->_postCategories = $this->_request->getValue( "postCategories" );
			$this->_postSlug = trim(Textfilter::filterAllHTML($this->_request->getValue( "postSlug" )));
            $this->_postStatus   = $this->_request->getValue( "postStatus" );
            $this->_sendNotification = $this->_request->getValue( "sendNotification" );
            $this->_sendTrackbacks = $this->_request->getValue( "sendTrackbacks" );
			$this->_sendPings = $this->_request->getValue( "sendPings" );			
            $this->_postId       = $this->_request->getValue( "postId" );
            $this->_commentsEnabled = $this->_request->getValue( "commentsEnabled" );
            $this->_trackbackUrls = $this->_request->getValue( "trackbackUrls" );
				
			// fetch the custom fields
			$this->_customFields = $this->_request->getValue( "customField" );	
			
            // fetch the timestamp that the post will have
			$this->_fetchPostDateInformation();
		}
		
		/**
		 * @private
		 */
		function _getArticleCustomFields()
		{
			// prepare the custom fields
			$fields = Array();
			if( is_array($this->_customFields)) {
				foreach( $this->_customFields as $fieldId => $fieldValue ) {
					// 3 of those parameters are not really need when creating a new object... it's enough that
					// we know the field definition id.
					$row = Array( "field_id" => $fieldId,
					              "field_value" => $fieldValue,
					              "field_name" => "",  // don't know
					              "field_type" => -1, // don't know
					              "field_description" => "", // don't know
					              "article_id" => -1, // we don't know yet!
					              "blog_id" => $this->_blogInfo->getId(),
					              "id" => -1 ); 
					// let's get the right value
					$customField = CustomFieldValueFactory::getCustomFieldValueByFieldId( $fieldId, $row );
					$fieldName = $customField->getName();
					$fields["$fieldName"] = $customField;
				}
			}		
			
			return $fields;
		}
	}
?>