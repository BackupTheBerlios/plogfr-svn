<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminarticlecommentslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	
    /**
     * \ingroup Action
     * @private
     *
     * Action that shows a list of all the comments or trackbacks for a given post
     */
    class AdminEditCommentsAction extends AdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminEditCommentsAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "articleId", new IntegerValidator());
			$this->registerFieldValidator( "showStatus", new IntegerValidator(), true);
			$view = new AdminPostsListView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr("error_fetching_comments"));
			$this->setValidationErrorView( $view );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			// get the validated parameters from the request
        	$articleId = $this->_request->getValue( "articleId" );
			$showStatus = $this->_request->getValue( "showStatus" );
			
			$articles = new Articles();
			$article = $articles->getBlogArticle( $articleId, $this->_blogInfo->getId());
			if( !$article ) {
				$this->_view = new AdminPostsListView( $this->_blogInfo );
				$this->_view->setErrorMessage( $this->_locale->tr("error_fetching_post" ));				
			}
			else
				$this->_view = new AdminArticleCommentsListView( $this->_blogInfo, Array( "article" => $article,
																						  "showStatus" => $showStatus ));
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
