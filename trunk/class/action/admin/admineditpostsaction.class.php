<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminpostslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Fetches all the posts and offers them for edition or deletion.
     */
    class AdminEditPostsAction extends AdminAction 
	{
    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminEditPostsAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
			// create the view with the right parameters... 
        	$this->_view = new AdminPostsListView( $this->_blogInfo, 
			                                       Array( "showCategory" => $this->_request->getValue( "showCategory" ),
												          "showStatus" => $this->_request->getValue( "showStatus" ),
														  "showUser" => $this->_request->getValue( "showUser" ),
														  "showMonth" => $this->_request->getValue( "showMonth" ),
														  "searchTerms" => $this->_request->getValue( "searchTerms" )));
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>