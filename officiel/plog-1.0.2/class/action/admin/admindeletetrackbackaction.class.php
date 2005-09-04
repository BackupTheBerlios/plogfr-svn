<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/trackbacks.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminarticletrackbackslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Allows to remove trackbacks from a certain article
     */
    class AdminDeleteTrackbackAction extends AdminAction 
	{

    	var $_articleId;
        var $_trackbackIds;
		var $_trackbackId;
		var $_mode;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminDeleteTrackbackAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			$this->_mode = $actionInfo->getActionParamValue();
			
			// data validation
			$this->registerFieldValidator( "articleId", new IntegerValidator());
			if( $this->_mode == "deleteTrackback" )
				$this->registerFieldValidator( "trackbackId", new IntegerValidator());
			else 
				$this->registerFieldValidator( "trackbackIds", new ArrayValidator()); 
			$view = new AdminPostsListView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_deleting_trackbacks"));
			$this->setValidationErrorView( $view );
        }

        /**
         * Carries out the specified action
         */
		function perform()
		{
			$this->_articleId = $this->_request->getValue( "articleId" );
			if( $this->_mode == "deleteTrackback" ) {
				$this->_trackbackId = $this->_request->getValue( "trackbackId" );
				$this->_trackbackIds = Array();
				$this->_trackbackIds[] = $this->_trackbackId;
			}
			else
				$this->_trackbackIds = $this->_request->getValue( "trackbackIds" );
				
			$this->_deleteTrackbacks();
			
			return true;
				
		}
		 
		/**
		 * @private
		 */
        function _deleteTrackbacks()
        {
            $trackbacks = new Trackbacks();
            $errorMessage = "";
			$successMessage = "";
			$totalOk = 0;
			
			// check if we can really load the article or not...
			$articles = new Articles();
			$article = $articles->getBlogArticle( $this->_articleId, $this->_blogInfo->getId());
			if( !$article ) {
				$this->_view = new AdminPostsListView( $this->_blogInfo );
				$this->_view->setErrorMessage( $this->_locale->tr("error_fetching_post"));
				$this->setCommonData();
				
				return false;
			}
			
            foreach( $this->_trackbackIds as $trackbackId ) {
            	// fetch the trackback
				$trackback = $trackbacks->getArticleTrackback( $trackbackId, $this->_articleId );
				
				if( !$trackback ) {
					$errorMessage .= $this->_locale->pr("error_deleting_trackback2", $trackbackId)."<br/>";				
				}
				else {
					// fire the pre-event
					$this->notifyEvent( EVENT_PRE_TRACKBACK_DELETE, Array( "trackback" => &$trackback ));
					
					if( !$trackbacks->deletePostTrackback( $trackbackId, $this->_articleId ))
						$errorMessage .= $this->_locale->pr("error_deleting_trackback", $trackback->getExcerpt())."<br/>";
					else {
						$totalOk++;
						if( $totalOk < 2 ) 
							$successMessage .= $this->_locale->pr("trackback_deleted_ok", $trackback->getExcerpt());
						else
							$successMessage = $this->_locale->pr("trackbacks_deleted_ok", $totalOk );
						// fire the post-event
						$this->notifyEvent( EVENT_POST_TRACKBACK_DELETE, Array( "trackback" => &$trackback ));
					}				
				}				
            }

            $this->_view = new AdminArticleTrackbacksListView( $this->_blogInfo, Array( "article" => $article ));
			if( $successMessage != "" ) {
				$this->_view->setSuccessMessage( $successMessage );
				// clear the cache
				CacheControl::resetBlogCache( $this->_blogInfo->getId());
			}
			if( $errorMessage != "" ) $this->_view->setErrorMessage( $errorMessage );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>