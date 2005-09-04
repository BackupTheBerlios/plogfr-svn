<?php

    if (!defined( "PLOG_CLASS_PATH" )) {
        define( "PLOG_CLASS_PATH", dirname(__FILE__)."/");
    }

    /**
     * Script that shows a summary page with the 'n' most recent additions
     * of all blogs in one page. Therefore, it is called a "Summary" :)
     */
     
    include_once( PLOG_CLASS_PATH."class/controller/controller.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
    include_once( PLOG_CLASS_PATH."class/misc/version.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/usernamevalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/http/subdomains.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/http/session/sessionmanager.class.php" );	

	define( "SUMMARY_DEFAULT_BLOGS_PER_PAGE", 25 );
	
	// check if the url is coming for a subdomain because if it is... we should
	// redirect to index.php because it is not coming to us!
	$config =& Config::getConfig();
	if( $config->getValue( "subdomains_enabled") && Subdomains::isSubdomainUrl()) {
    	$indexPage = $config->getValue( "script_name", "index.php" );
		include_once( PLOG_CLASS_PATH.$indexPage );
		die();
	}
	
	/**
	 * our very own controller class... overwrite a few methods for our convenience!
	 */
	class SummaryController extends Controller
	{
		function SummaryController()
		{
			global $_actionMap;
			$this->Controller( $_actionMap, "op" );
			$this->setActionFolderPath( PLOG_CLASS_PATH."class/summary/action/" );
		}
	}
	
	// start the session handling stuff
	SessionManager::init();	

    //// map to associate actions with classes ////
    $_actionMap["Default"]       = "SummaryDefaultAction";
    $_actionMap["BlogList"]      = "BlogListAction";
	$_actionMap["UserList"] = "UserListAction";	
	$_actionMap["UserProfile"] = "UserProfileAction";
	$_actionMap["BlogProfile"] = "BlogProfileAction";
	// conditional action registration... you've got to love this :)))
	if( !$config->getValue( 'summary_disable_registration' )) {
		$_actionMap["RegisterStep0"] = "doReadAgreement";
		$_actionMap["RegisterStep1"] = "doUserRegister";
		$_actionMap["RegisterStep2"] = "doUserCreation";
		$_actionMap["RegisterStep3"] = "doBlogRegistration";
		$_actionMap["RegisterStep4"] = "ChooseBlogTemplateAction";    
		$_actionMap["RegisterStep5"] = "doFinishRegister";
	}
	else {
		$_actionMap["RegisterStep0"] = "SummaryRegistrationDisabledAction";
		$_actionMap["RegisterStep1"] = "SummaryRegistrationDisabledAction";
		$_actionMap["RegisterStep2"] = "SummaryRegistrationDisabledAction";
		$_actionMap["RegisterStep3"] = "SummaryRegistrationDisabledAction";
		$_actionMap["RegisterStep4"] = "SummaryRegistrationDisabledAction";    
		$_actionMap["RegisterStep5"] = "SummaryRegistrationDisabledAction";	
	}
	$_actionMap["resetPasswordForm"] = "SummaryShowResetPasswordForm";
	$_actionMap["sendResetEmail"] = "SummarySendResetEmail";
	$_actionMap["setNewPassword"] = "SummarySetNewPassword";
	$_actionMap["updatePassword"] = "SummaryUpdatePassword";
	$_actionMap["rss"] = "SummaryRssAction";
	$_actionMap["summarySearch"] = "SummarySearchAction";
	$_actionMap["activeAccount"] = "ActiveAccountAction";
	$_actionMap["display"] = "SummaryCustomPageAction";

    //// main part ////
    $controller = new SummaryController();
    $controller->process( HttpVars::getRequest());
?>
