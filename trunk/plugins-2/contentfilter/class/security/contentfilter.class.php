<?php

	include_once( PLOG_CLASS_PATH."class/security/pipelinefilter.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontents.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontent.class.php" );

    // custom error code that will be returned to the pipeline whenever an
    // error is found... Be careful so as to not to have two different modules
    // use the same code!!
    define( "CONTENT_FILTER_MATCH_FOUND", 200 );

    /**
     * Filters the text posted in a comment by a user, to prevent spam-bots. This
     * filter only works if the incoming request has the "op" parameter as
     * "AddComment", because then it means that we're posting a comment. If it's not
     * like that, then we'll quit. Otherwise, the process will continue as normally.
     */
	class ContentFilter extends PipelineFilter 
	{

    	function ContentFilter( $pipelineRequest )
        {
        	$this->PipelineFilter( $pipelineRequest );
        }

        function filter()
        {
        	// get some info
            $blogInfo = $this->_pipelineRequest->getBlogInfo();
            $request  = $this->_pipelineRequest->getHttpRequest();

        	// check if this section has been enabled or disabled
            $blogSettings = $blogInfo->getSettings();
		    $pluginEnabled = $blogSettings->getValue( "plugin_contentfilter_enabled" );
            if( !$pluginEnabled) {
            	// if not, nothing to do here...
                //_debug("ip address filter not enabled! quitting...<br/>");
            	return new PipelineResult();
            }

            // we only have to filter the contents if the user is posting a comment
            // so there's no point in doing anything else if that's not the case
            if( $request->getValue( "op" ) != "AddComment" ) {
            	$result = new PipelineResult();
                return $result;
            }

            //
            // get the content that has been globally blocked by the admin(s)
            //
            $filteredContents = new FilteredContents();
            $globalFilteredContents = $filteredContents->getGlobalFilteredContents();
            // text and topic of the comment
            $commentText = $request->getValue( "commentText" );
            $commentTopic = $request->getValue( "commentTopic" );
            $userName = $request->getValue( "userName" );
            $userEmail = $request->getValue( "userEmail" );
            $userUrl = $request->getValue( "userUrl" );
            foreach( $globalFilteredContents as $globalFilteredContent ) {
            	//_debug("regexp = ".$globalFilteredContent->getRegExp()."<br/>");
            	if( preg_match( $globalFilteredContent->getRegExp(), $commentText )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $globalFilteredContent->getReason());
                    return $result;
                }

            	if( preg_match( $globalFilteredContent->getRegExp(), $commentTopic )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $globalFilteredContent->getReason());
                    return $result;
                }
                
            	if( preg_match( $globalFilteredContent->getRegExp(), $userName )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $globalFilteredContent->getReason());
                    return $result;
                }
                
            	if( preg_match( $globalFilteredContent->getRegExp(), $userEmail )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $globalFilteredContent->getReason());
                    return $result;
                }
                
            	if( preg_match( $globalFilteredContent->getRegExp(), $userUrl )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $globalFilteredContent->getReason());
                    return $result;
                }                                                                
            }

            //
            // get the list of filtered content for this blog
            //
            $blogFilteredContents = $filteredContents->getBlogFilteredContents( $blogInfo->getId());
            foreach( $blogFilteredContents as $blogFilteredContent ) {
            	//_debug("regexp = ".$blogFilteredContent->getRegExp()."<br/>");
            	if( preg_match( $blogFilteredContent->getRegExp(), $commentText )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $blogFilteredContent->getReason());
                    return $result;
                }

            	if( preg_match( $blogFilteredContent->getRegExp(), $commentTopic )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $blogFilteredContent->getReason());
                    return $result;
                }

            	if( preg_match( $blogFilteredContent->getRegExp(), $userName )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $blogFilteredContent->getReason());
                    return $result;
                }

            	if( preg_match( $blogFilteredContent->getRegExp(), $userEmail )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $blogFilteredContent->getReason());
                    return $result;
                }

            	if( preg_match( $blogFilteredContent->getRegExp(), $userUrl )) {
                	// if there is a match, we can quit and reject this request
                    $result = new PipelineResult( false, CONTENT_FILTER_MATCH_FOUND, $blogFilteredContent->getReason());
                    return $result;
                }                                                                
            }

            // if everything went fine, we can say so by returning
            // a positive PipelineResult object
            $result = new PipelineResult( true );
            
            return $result;
        }
    }
?>
