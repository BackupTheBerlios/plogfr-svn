<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminarticletrackbackslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	
    /**
     * \ingroup Action
     * @private
     *
     * Action that shows a list of all the trackbacks for a given post
     */
    class AdminEditTrackbacksAction extends AdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminEditTrackbacksAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "articleId", new IntegerValidator());
			$view = new AdminPostsListView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_fetching_trackbacks"));
			$this->setValidationErrorView( $view );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			// get the validated parameters from the request
        	$articleId = $this->_request->getValue( "articleId" );
			$articles = new Articles();
			$article = $articles->getBlogArticle( $articleId, $this->_blogInfo->getId());
			
			if( !$article ) {
				$this->_view = new AdminPostsListView( $this->_blogInfo );
				$this->_view->setErrorMessage( $this->_locale->tr("error_fetching_post" ));
			}
			else 
				$this->_view = new AdminArticleTrackbacksListView( $this->_blogInfo, Array( "article" => $article ));			
		
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
