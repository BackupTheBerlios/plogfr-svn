<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminnewpostview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );    

    /**
     * \ingroup Action
     * @private
     *
     * Action that adds a new post to the database. It also lets the user
     * preview the article before posting it.
     */
    class AdminNewPostAction extends AdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminNewPostAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
	        $categories = new ArticleCategories();
            $blogCategories = $categories->getBlogCategories( $this->_blogInfo->getId() );
            // but make sure that we have at least one!
            if( count($blogCategories) == 0) {
            	$this->_view = new AdminTemplatedView( $this->_blogInfo, "newpostcategory" );
                $this->_view->setSuccessMessage( $this->_locale->tr("error_must_have_one_category"));
                $this->setCommonData();
                return false;
            }	        
	        
        	// initialize the view
        	$this->_view = new AdminNewPostView( $this->_blogInfo );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
