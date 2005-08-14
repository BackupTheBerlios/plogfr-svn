<?php

	include_once( PLOG_CLASS_PATH."class/security/pipelinefilter.class.php" );
	include_once( PLOG_CLASS_PATH."class/bayesian/bayesiantokenizer.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bayesiantokens.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bayesiantoken.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bayesianfilterinfos.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bayesianfilterinfo.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecomments.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/client.class.php" );

    define("HIGH_SPAM_PROBABILITY", 1000);

    //
    // these two settings determine what will the filter do with the text of the
    // post when it is considered spam... we can either keep it in the db but marked
    // as spam or we can also throw it away. The second option can be used when our
    // filter has been better trained and we don't care about spam anymore...
    //
    define( "BAYESIAN_FILTER_KEEP_COMMENT_ACTION", 0 );
    define( "BAYESIAN_FILTER_THROW_COMMENT_AWAY_ACTION", 1 );

    /**
     * \ingroup Security
     * 
     * Filters the text posted in a comment by a user, to prevent spam-bots. This
     * filter only works if the incoming request has the "op" parameter as
     * "AddComment", because then it means that we're posting a comment. If it's not
     * like that, then we'll quit. Otherwise, the process will continue as normally.
     *
     * This filter uses our implementation of the Bayesian filter from the Bayesian module
     * in order to filter spam comments out. The filter needs some training but after that it should
     * be fairly reliable.
     */
	class BayesianFilter extends PipelineFilter 
	{
    
        function BayesianFilter( $pipelineRequest )
        {
        	$this->PipelineFilter( $pipelineRequest );
        }
        
        /**
        * Processes incoming requests
        *
        * @return A positive PipelineResult object is the comment is not spam or a negative
        * one if it is.
        */         
        function filter()
        {
        	$config	=& Config::getConfig();
        	
        	if (!$config->getValue("bayesian_filter_enabled"))
        	{
        		return new PipelineResult(true);
			}
		
        	// get some info        	
            $blogInfo = $this->_pipelineRequest->getBlogInfo();
            $request  = $this->_pipelineRequest->getHttpRequest();
			
            // we only have to filter the contents if the user is posting a comment
            // so there's no point in doing anything else if that's not the case
            if( $request->getValue( "op" ) != "AddComment" ) {
            	$result = new PipelineResult();
                return $result;
            }
            
            // text and topic of the comment
            $commentText = $request->getValue( "commentText" );
            $commentTopic = $request->getValue( "commentTopic" );
            $userName = $request->getValue( "userName" );
            $userEmail = $request->getValue( "userEmail" );
            $userUrl = $request->getValue( "userUrl" );
            $articleId = $request->getValue( "articleId" );
            $parentId  = $request->getValue( "parentId" );
            if( $parentId == "" )
            	$parentId = 0;

            $spamicity = $this->getSpamProbability($blogInfo->getId(), $commentTopic, $commentText, $userName, $userEmail, $userUrl);

            if ($spamicity >= $config->getValue("bayesian_filter_spam_probability_treshold"))
            {
                $result = new PipelineResult(false, HIGH_SPAM_PROBABILITY, "You cannot post this message. Anti-spam filter has blocked it.");
                // now we need to check what we have to do with this comment... either throw it away
                // or keep it in the database

                // this piece of code shouldn't really go here, but it's easier than letting
                // the AddComment action that there was actually a comment and that it should
                // still be added but marked as spam and so on... sometimes breaking a few
                // rules makes things easier :)
                if( $config->getValue( "bayesian_filter_spam_comments_action" ) == BAYESIAN_FILTER_KEEP_COMMENT_ACTION ) {
                	$comments = new ArticleComments();
                	$clientIp = Client::getIp();
					$comment = new UserComment( $articleId, $parentId, $commentTopic, $commentText,
					                               null, $userName, $userEmail, $userUrl, $clientIp,
												   0, COMMENT_STATUS_SPAM );
                    $comments->addComment( $comment );
                }
                else {
                	// nothing to do here, simply throw the comment away
                }
				$spam = true;
            }
            else
            {
                $result = new PipelineResult(true);
				$spam = false;
            }
			
			// train the filter with the message, be it spam or not...
			BayesianFilterCore::train( $blogInfo->getId(), $commentTopic, $commentText, $userName, $userEmail,
			                           $userUrl, $spam );

            //print "<h1>" . number_format($spamicity * 100, 0) . "% of spamicity</h1>";
            return $result;
        }
        
        /**
        * @private
        */        
        function getSpamProbability($blogId, $topic, $text, $userName, $userEmail, $userUrl)
        {
            $tokenizer = new BayesianTokenizer();

            $tokensTopic = $tokenizer->addContextMark($tokenizer->tokenize($topic), TOKEN_TOPIC_MARK);
            $tokensText = $tokenizer->tokenize($text);

            $tokensUserName = $tokenizer->addContextMark($tokenizer->tokenize($userName), TOKEN_USER_NAME_MARK);
            $tokensUserEmail = $tokenizer->addContextMark($tokenizer->tokenize($userEmail), TOKEN_USER_EMAIL_MARK);
            $tokensUserUrl = $tokenizer->addContextMark($tokenizer->tokenize($userUrl), TOKEN_USER_URL_MARK);

            $tokens = array_merge($tokensTopic, $tokensText, $tokensUserName, $tokensUserEmail, $tokensUserUrl);
            $significantTokens = BayesianFilter::_getMostSignificantTokens($blogId, $tokens);
            
            return BayesianFilter::_getBayesProbability($significantTokens);
        }
        
        /**
        * @private
        */
		function _getMostSignificantTokens($blogId, $tokens)
        {       
        	$config	=& Config::getConfig(); 
        	
        	$bayesianFilterInfos = new BayesianFilterInfos();
            $bayesianFilterInfo  = $bayesianFilterInfos->getBlogBayesianFilterInfo($blogId);
            
            $totalSpam = $bayesianFilterInfo->getTotalSpam();
            $totalNonSpam = $bayesianFilterInfo->getTotalNonSpam();
            
            $bayesianTokens = new BayesianTokens();
            
            foreach ($tokens as $token)
            {
            	$bayesianTokens->updateOccurrences($blogId, $token, 0, 0, $totalSpam, $totalNonSpam, false);
            }
            
            $tokens = $bayesianTokens->getBayesianTokensFromArray($blogId, $tokens);                                                
            $tempArray = array();
                        
            foreach ($tokens as $token)
            {
            	if ($token->isSignificant() && $token->isValid())
                {                	
					array_push($tempArray, abs($token->getProb() - 0.5));
                }
            }

            arsort($tempArray);
            $significantTokens = array();
            $count = 0;
            
            foreach ($tempArray as $key => $value)
            {
                array_push($significantTokens, $tokens[$key]);
                $count++;
                
                if ($count == $config->getValue("bayesian_filter_number_significant_tokens"))
                {                
                    break;
                }
            }
                          
            return $significantTokens;
        }
        
        /**
        * @private
        */
        function _getBayesProbability($significantTokens)
        {
            $productProb   = 1;
            $productNoProb = 1;            
            
            foreach ($significantTokens as $token)
            {
                $productProb   *= $token->getProb();                
                $productNoProb *= (1 - $token->getProb());                
            }
                            	
            return $productProb / ($productProb + $productNoProb);
        }
    }
?>
