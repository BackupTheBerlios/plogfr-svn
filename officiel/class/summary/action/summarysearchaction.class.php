<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/summaryaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/searchengine.class.php" );

     class SummarySearchAction extends SummaryAction
     {
		var $_searchTerms;

        function SummarySearchAction( $actionInfo, $request )
        {
            $this->SummaryAction( $actionInfo, $request );
        }
		
		function validate()
		{
			$this->_searchTerms = $this->_request->getValue( "searchTerms" );
		
			// if the search terms are not correct, let's return an error message
			$val = new StringValidator();
			if( !$val->validate( $this->_searchTerms )) {
				$this->_view = new SummaryView( "summaryerror" );
				$this->_view->setErrorMessage( $this->_locale->tr("error_incorrect_search_terms" ));
				return false;
			}
			
			return true;
		}

        /**
         * carry out the search and execute it
         */
        function perform()
        {
            $search = new SearchEngine();
			
			// execute the search and check if there is any result
			$results = $search->siteSearch( $this->_searchTerms );
			if( !$results || empty($results)) {
				// if not, then quit
				$this->_view = new SummaryView( "summaryerror" );
				$this->_view->setErrorMessage( $this->_locale->tr("error_no_search_results" ));
				return false;	
			}
			
			// but if so, then continue...
			$this->_view = new SummaryView( "searchresults" );
			$this->_view->setValue( "searchresults", $results );
			
			$this->setCommonData();			
			
			return true;
        }
     }
?>