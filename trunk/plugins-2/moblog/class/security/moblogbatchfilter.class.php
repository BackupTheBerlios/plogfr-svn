<?php

    include_once( PLOG_CLASS_PATH."class/security/pipelinefilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/baserequestgenerator.class.php" );  
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/PEAR/Net/POP3.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/PEAR/HTTP/Request.php");     

    // custom error code that will be returned to the pipeline whenever an
    // error is found... Be careful so as to not to have two different modules
    // use the same code!!
    define( "MOBLOGBATCH_FILTER_MATCH_FOUND", 2022 );

    /**
     * Filters the text posted in a comment by a user, to prevent spam-bots. This
     * filter only works if the incoming request has the "op" parameter as
     * "AddComment", because then it means that we're posting a comment. If it's not
     * like that, then we'll quit. Otherwise, the process will continue as normally.
     */
    class MoblogBatchFilter extends PipelineFilter 
    {

        function MoblogBatchFilter( $pipelineRequest )
        {
            $this->PipelineFilter( $pipelineRequest );
        }

        function filter()
        {
            $blogInfo = $this->_pipelineRequest->getBlogInfo();
            $config =& Config::getConfig();

            $pseudoBatch = $config->getValue('plugin_moblog_pseudobatch');
            if( $pseudoBatch == "Off" || $pseudoBatch == "" ) {
            	$result = new PipelineResult();
                return $result;
            }

            $lastUpdate = $config->getValue('plugin_moblog_lastupdate');
            $timeDiff = time() - $lastUpdate;
            if( $timeDiff <= $pseudoBatch*60 ) {
            	$result = new PipelineResult();
                return $result;
            }

			$mailServer = $config->getValue('plugin_moblog_mailserver');
			$port = $config->getValue('plugin_moblog_port');
			$userName = $config->getValue('plugin_moblog_username');
			$password = $config->getValue('plugin_moblog_password');
			
		    // pop3 connection and log-in
		    $pop3 =& new Net_POP3();
		
			if(PEAR::isError( $ret = $pop3->connect($mailServer , $port )) ) {
               	// if there is a match, we can quit and reject this request
                $locale = $blogInfo->getLocale();
                $result = new PipelineResult( false, MOBLOGBATCH_FILTER_MATCH_FOUND, $locale->tr("error_moblogbatch_connect") );
                return $result;
			}
		
			if(PEAR::isError( $ret = $pop3->login($userName , $password, 'USER' )) ) {
                $locale = $blogInfo->getLocale();
                $result = new PipelineResult( false, MOBLOGBATCH_FILTER_MATCH_FOUND, $locale->tr("error_moblogbatch_login") );
                return $result;
			}
		   
		    $messageNumber = $pop3->numMsg();
		    
		    if ($messageNumber == 0) {
		      	$pop3->disconnect();
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

            // if everything went fine, we can say so by returning
            // a positive PipelineResult object
            $result = new PipelineResult( true );
            
            return $result;
        }
    }
?>
