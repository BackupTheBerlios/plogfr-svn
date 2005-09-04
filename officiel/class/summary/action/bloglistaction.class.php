<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/summaryaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/summary/view/summarybloglistview.class.php" );

	/**
	 * shows a list with all the blogs, pager included
	 */
     class BlogListAction extends SummaryAction
     {
        function BlogListAction( $actionInfo, $request )
        {
            $this->SummaryAction( $actionInfo, $request );
        }

        /**
         * Loads the posts and shows them.
         */
        function perform()
        {
            // this is a bit hackish but it works...
            $page = View::getCurrentPageFromRequest();
            
            // create the view
			$this->_view = new SummaryBlogListView( Array( "summary" => "BlogList", 
			                                        "page" => $page, 
			                                        "locale" => $this->_locale->getLocaleCode()));
			
			if( $this->_view->isCached()) {
				// nothing to do, the view is cached
				return true;
			}
			
			$this->setCommonData();
			
			return true;
        }
     }	 
?>