<?php
	
	include_once( PLOG_CLASS_PATH."class/summary/action/summaryaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/summary/view/summarymessageview.class.php" );

	/**
	 * a very stupid action that only shows a view with an error message, but it was easier
	 * to do this than to modify all the registration actions to perform a check...
	 *
	 * @see SummaryAction
	 * @see SummaryMessageView
	 */
	class SummaryRegistrationDisabledAction extends SummaryAction
	{
		function perform()
		{
			$this->_view = new SummaryMessageView();
			$this->_view->setErrorMessage( $this->_locale->tr("error_registration_disabled"));
			$this->setCommonData();
		}
	}
?>