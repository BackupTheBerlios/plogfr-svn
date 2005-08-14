<?php

    /**
     * @package action
     */


    include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/searchengine.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/blogtemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );

	define( "VIEW_SEARCH_TEMPLATE", "searchresults" );

    class SearchAction extends BlogAction
    {
        var $_searchTerms;
    
        function SearchAction( $actionInfo, $request )
        {
            $this->BlogAction( $actionInfo, $request );
			
			// data validatdion
			$this->registerFieldValidator( "searchTerms", new StringValidator());
			$this->setValidationErrorView( new ErrorView( $this->_blogInfo, "error_incorrect_search_terms" ));
        }
		
        function perform()
        {
			// get the search terms that have already been validated...
            $this->_searchTerms = $this->_request->getValue( "searchTerms" );		
		
			// check if the search feature is disabled in this site...
			$config =& Config::getConfig();
			if( !$config->getValue( "search_engine_enabled" )) {
				$this->_view = new ErrorView( $this->_blogInfo, "error_search_engine_disabled" );
				$this->setCommonData();
				
				return false;
			}
			
			// create the view and make sure that it hasn't been cached
            $this->_view = new BlogTemplatedView( $this->_blogInfo, VIEW_SEARCH_TEMPLATE, Array( "searchTerms" => $this->_searchTerms ));
			if( $this->_view->isCached()) {
				return true;
			}
			
            $searchEngine = new SearchEngine();
            $searchResults = $searchEngine->search( $this->_blogInfo->getId(), $this->_searchTerms );
			
            // MARKWU: I add the searchterms variable for smarty/plog template
            $searchTerms = $searchEngine->getAdaptSearchTerms( $this->_searchTerms );			
            
            // if no search results, return an error message
            if( count($searchResults) == 0 ) {
                $this->_view = new ErrorView( $this->_blogInfo, "error_no_search_results" );
                $this->setCommonData();
                
                return true;
            }
            
            // if only one search result, we can see it straight away 
            if( count($searchResults) == 1 ) {
                // we have to refill the $_REQUEST array, since the next action
                // is going to need some of the parameters
                $request =& HttpVars::getRequest();
                $searchResult = array_pop( $searchResults );
                $article = $searchResult->getArticle();
                $request["articleId"] = $article->getId();
                $request["blogId"] = $this->_blogInfo->getId();
                HttpVars::setRequest( $request );
                
                // since there is only one article, we can use the ViewArticleAction action
                // to display that article, instead of copy-pasting the code and doing it here.
                // You just have to love MVC and OOP :)
                return Controller::setForwardAction( "ViewArticle" );
            }
            
            // or else, show a list with all the posts that match the requested
            // search terms
            $this->_view->setValue( "searchresults", $searchResults );
            // MARKWU: Now, I can use the searchterms to get the keyword
            $this->_view->setValue( "searchterms", $searchTerms );
            // MARKWU:
			$config =& Config::getConfig();
            $urlmode   = $config->getValue( "request_format_mode" );			
            $this->_view->setValue( "urlmode", $urlmode );

            $this->setCommonData();
            
            return true;
        }
    }
?>