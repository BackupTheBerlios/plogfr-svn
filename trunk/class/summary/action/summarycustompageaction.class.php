<?php

	include_once( PLOG_CLASS_PATH."class/summary/action/summaryaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/summary/view/summarycachedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/summary/data/validator/customsummarypagevalidator.class.php" );

	/**
	 * displays custom pages in the summary.php, in case users would like
	 * to add something extra to the whole set of pages
	 *
	 * It will check whether the page requested is one of the default ones and in that
	 * case, it will *not* show it. It will also perform some sanity checks on the file
	 * name.
	 */
	class SummaryCustomPageAction extends SummaryAction
	{
	
		var $_page;
		
		function perform()
		{
			$this->_page = $this->_request->getValue( "page" );
			
			$val = new CustomSummaryPageValidator();
			if( !$val->validate( $this->_page )) {
				// instead of showing an ugly smarty error, let's forward processing
				// to the default action so that at least we can show something!
				SummaryController::setForwardAction( "Default" );
			}
			else {
				// let's cache the page... After all, we're not expecting much dynamic context in here!
				$this->_view = new SummaryCachedView( $this->_page, Array( "page" => $this->_page, "locale" => $this->_locale->getLocaleCode()));
				$this->setCommonData();
			}
			
			return( true );
		}
	}
?>