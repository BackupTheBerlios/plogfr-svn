<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/trackbackclient.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Action that shows a form to change the settings of the current blog.
     */
    class AdminSendTrackbacksAction extends AdminAction 
	{

    	var $_postLinks;
    	var $_trackbackLinks;
        var $_postId;
        var $_locale;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminSendTrackbacksAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

		function validate()
		{
			// fetch the validated data
			$this->_postLinks = $this->_request->getValue( "postLink" );
			$this->_trackbackLinks = $this->_request->getValue( "trackbackLink" );
			$this->_postId = $this->_request->getValue( "postId" );
			
			$intval = new IntegerValidator();
			if( !$intval->validate( $this->_postId ) ) {
                $this->_view = new AdminPostsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_incorrect_article_id"));
                $this->setCommonData();

                return false;				
			}
			
			$arrryval = new ArrayValidator();
			if( !$arrryval->validate( $this->_postLinks ) && !$arrryval->validate( $this->_trackbackLinks ) ) {
                $this->_view = new AdminPostsListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_no_trackback_links_sent"));
                $this->setCommonData();

                return false;
            }   
			
			return true;
		}        

		/*
         * Carries out the specified action
         */
        function perform()
        {
            // we need to have the post
            $articles = new Articles();
            $post     = $articles->getBlogArticle( $this->_postId, $this->_blogInfo->getId());
            
            // now check the results and give the user the possiblity to retry again with the
            // ones that had some problem.
            $errors = false;

            // and now start sending the trackback pings
            $tbClient = new TrackbackClient();
            $postLinks = Array();
            $trackbackLinks = Array();            
			
			if ( count($this->_postLinks) != 0 ) {
	            $autoDiscoverResults = $tbClient->sendTrackbacks( $this->_postLinks, $post, $this->_blogInfo);

	            foreach( $autoDiscoverResults as $result ) {
	            	if( $autoDiscoverResults["status"] == TRACKBACK_FAILED) {
	                	// add them again to the list of hosts
	                    $errors = true;
	                    array_push( $postLinks, $result["url"] );
	                }
	                else if( $result["status"] == TRACKBACK_SUCCESS ) {
	                	if( $message == "" ) $message = $this->_locale->tr("trackbacks_sent_ok")."<br/><br/>";
	                    $message .= "<a href=\"".$result["url"]."\">".$result["url"]."</a><br/>";
	                }
	                else if( $result["status"] == TRACKBACK_UNAVAILABLE ) {
	                    $message .= $this->_locale->tr("trackbacks_no_trackback")."<a href=\"".$result["url"]."\">".$result["url"]."</a><br/>";
	                }
	            }
	        }

			if ( count($this->_trackbackLinks) != 0 ) {
	            $directPingResults = $tbClient->sendDirectTrackbacks( $this->_trackbackLinks, $post, $this->_blogInfo);
	
	            foreach( $directPingResults as $result ) {
	            	if( $result["status"] == TRACKBACK_FAILED) {
	                	// add them again to the list of hosts
	                    $errors = true;
	                    array_push( $trackbackLinks, $result["url"] );
	                }
	                else if( $result["status"] == TRACKBACK_SUCCESS ) {
	                	if( $message == "" ) $message = $this->_locale->tr("trackbacks_sent_ok")."<br/><br/>";
	                    $message .= "<a href=\"".$result["url"]."\">".$result["url"]."</a><br/>";
	                }
	            }
			}
			
            // if there were errors, we let the user try again
            if( $errors ) {
            	if( $message != "" )
                	$message .= "<br/>";
            	$message .= $this->_locale->tr("error_sending_trackbacks");
         		$this->_view = new AdminTemplatedView( $this->_blogInfo, "sendtrackbacks" );
                $this->_view->setErrorMessage( $message );
                $this->_view->setValue( "post", $post);
                $this->_view->setValue( "postLinks", $postLinks );
                $this->_view->setValue( "trackbackLinks", $trackbackLinks );
                $this->setCommonData();
            }
            else {
                $this->_view = new AdminPostsListView( $this->_blogInfo );
                $this->_view->setSuccessMessage( $message );
                $this->setCommonData();
            }
        }
    }
?>
