<?php

    // define the entry point
    if (!defined( "PLOG_CLASS_PATH" )) {
    	define( "PLOG_CLASS_PATH", dirname(__FILE__)."/");
    }
    
    // bring in some code that we need
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/PEAR/Net/POP3.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/PEAR/HTTP/Request.php");
    include_once( PLOG_CLASS_PATH."class/net/baserequestgenerator.class.php" ); 
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );

    $config =& Config::getConfig();

	$mailServer = $config->getValue('plugin_moblog_mailserver');
	$port = $config->getValue('plugin_moblog_port');
	$userName = $config->getValue('plugin_moblog_username');
	$password = $config->getValue('plugin_moblog_password');

    // pop3 connection and log-in
    $pop3 =& new Net_POP3();

	if(PEAR::isError( $ret= $pop3->connect($mailServer , $port ) )) {
    	echo "ERROR: " . $ret->getMessage() . "\n";
    	exit();
	}

	if(PEAR::isError( $ret= $pop3->login($userName , $password, 'USER' ) )){
	    echo "ERROR: " . $ret->getMessage() . "\n";
	    exit();
	}
   
	$messageNumber = $pop3->numMsg();
	
	if ($messageNumber == 0) {
	    $pop3->disconnect();
	    die();
    } else {  
        // get message list
        $messageList = $pop3->getListing();
        $messages = Array();
		         
        for ($cnt = 0; $cnt < count($messageList); $cnt++) {
            $messages[$cnt] = $pop3->getMsg($messageList[$cnt]['msg_id']);
            $pop3->deleteMsg($messageList[$cnt]['msg_id']);
        }
		
        // pop3 disconnect
      	$pop3->disconnect();

	    $config->setValue( "plugin_moblog_lastupdate", time() );
        $config->save();
        
        $url = &new BaseRequestGenerator();

	    for ($cnt = 0; $cnt < count($messages); $cnt++) {
			$req = &new HTTP_Request($url->getBaseUrl(false)."/moblog.php");
			$req->setMethod(HTTP_REQUEST_METHOD_POST);
			$req->addPostData('message', $messages[$cnt]);
			$req->sendRequest();
			$response = $req->getResponseBody();
		}
    }
?>