<?php

	include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/secret/class/dao/secretitems.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
	
	class SubmitSecretItemPasswordAction extends BlogAction
	{
	
		var $_articleId;
		var $_password;
	
		function SubmitSecretItemPasswordAction( $request, $actionInfo )
		{
			$this->BlogAction( $request, $actionInfo );
		}
		
		function validate()
		{
			$this->_articleId = $this->_request->getValue( "articleId" );
			$this->_password  = $this->_request->getValue( "itemPassword" );
			
			return true;
		}
		
		function perform()
		{
			// check if the password is correct
			$secretItems = new SecretItems();
			
			// if not, show another error
			if( !$secretItems->authenticateItem( $this->_articleId, $this->_password )) {
				$this->_view = new ErrorView( $this->_blogInfo, "Sorry, better luck next time!" );
				$this->setCommonData();
				
				return false;
			}
			
			// but if correct, put the information in the session and try again
			$session = HttpVars::getSession();
			$sessionKey = "article_".$this->_articleId;
			$session[ "$sessionKey" ] = "OK";
			HttpVars::setSession( $session );
			
			BlogController::setForwardAction( "ViewArticle" );
			
			return true;
		}
	}
?>