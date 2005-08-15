<?php

    include_once( PLOG_CLASS_PATH."plugins/moblog/class/moblog/mimeDecode.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/moblog/moblogconstants.properties.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/log/mobloglogger.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );    

    /**
     * contains all the parameters that came in the user's email.
     */
    class MoblogRequest extends Object
    {
        var $_message;
        var $_structure;
        var $_replyAddress;
        var $_body;
        var $_category;
        var $_topic;
        var $_user;
        var $_pass;
        var $_blogId;
        var $_blogName;
        var $_introduction;
        var $_host;
        var $_attachments;
        var $_help;
        var $_inputEncoding;
        
        function MoblogRequest( $request )
        {
            $this->Object();
        
            $this->_message = $request["message"];
            // it is possible to specify a default user id in the POSTed email message via
            // curl, so that the amount of stuff that we need to type in the email is reduced
            // to only the user password. This basically means that email addresses configured to be used
            // by a default user and blog id cannot be used as 'gateways'
            $this->_blogId = $request["blogId"];
            $this->_user = $request["user"];
            
            MoblogLogger::log( "From REQUEST: user = ".$this->_user." - blogId = ".$this->_blogId );
            
            // parse the mime message
            $decode = new Mail_mimeDecode( $this->_message, "\r\n" );
            $structure = $decode->decode(Array(
                                             "include_bodies" => true,
                                             "decode_bodies"  => true,
                                             "decode_headers" => true,
                                          ));

            // get the reply address, it might be in different headers
            if (isset($structure->headers['x-loop'])) {
	           $this->_replyAddress = "";
            } 
            else {
	           $replyTo1 = $structure->headers['from'];
	           $replyTo2 = $structure->headers['return-path'];
	           $this->_replyAddress = ($replyTo2 != "") ? $replyTo2 : $replyTo1;
            }
            
            // parse the body
            $this->parseBody( $structure->body );
            $this->_inputEncoding = strtoupper( $structure->ctype_parameters['charset'] );
            
            MoblogLogger::log( "There are ".count($structure->parts)." MIME parts available to parse" );      
            $this->parseMimeParts( $structure->parts );                        
            
            // if there was no subject specified, then let's see if there was something in the
            // 'subject' line...
            if( $this->_topic == "" ) {
                $this->_topic = $structure->headers['subject'];
                if( $this->_topic == "" || stristr( $this->_topic, "pass:" )) {
                    // if there is still no subject, get the first 50 characters of the body
                    $this->_topic = substr(strip_tags($this->_body), 0, 50 );
                    if ( $this->_topic == "" )
                    	$this->_topic = "No Topic";
                }
            }               
            MoblogLogger::Log("subject is = ".$this->_topic );            
        }
        
        /**
         * Uses the mimeDecode class to parse the message and get the fields
         * that we need. This class is also capable of parsing attachments, mime
         * messages, etc.
         */ 
        function parseBody( $body )
        {
            $body = strip_tags($body, "<a><b><i><u><s>");
            //$body = strtr($body,"\xE2\x80\xA9","\n\n\n");
            $body = str_replace("\xE2\x80\xA9","\n",$body);
            
            //We try to find out where the line containing the title is at...
            if (preg_match("/^topic:(.*)/mi", $body, $title)) {
                //And put the title var in the proper place
                $this->_topic = trim($title[1]);
            }
            
            //We repeat the same trick as above... for all vars wanted
            if (preg_match("/^user:(.*)/mi", $body, $user)) {
                $this->_user = trim($user[1]); 
            }       
            
            // in case ppl are lazy and use pass instead of password
            if (preg_match("/^pass:(.*)/mi", $body, $pass)) {
                $this->_pass = trim($pass[1]);
            } 
            else if (preg_match("/^password:(.*)/mi", $body, $password)) {
                $this->_pass = trim($password[1]);
            }

            // we can either specify a blog id...
            if (preg_match("/^blogid:(.*)/mi", $body, $blog)) {
                $this->_blogId = trim($blog[1]); 
            }
            
            // ...or a blog name
            if (preg_match("/^blog:(.*)/mi", $body, $blogname)) {
                $this->_blogName = trim($blogname[1]); 
            }
            
            //We strip out all the lines we already used, and use what's left as the body
            $body = str_replace($title[0], "", $body);		
            $body = str_replace($user[0], "", $body);
            $body = str_replace($pass[0], "", $body);
            $body = str_replace($password[0], "", $body);
            $body = str_replace($cat[0], "", $body);
            $body = str_replace($publish[0], "", $body);
            $body = str_replace($category[0], "", $body);
            $body = str_replace($blog[0], "", $body );
            $body = str_replace($blogname[0], "", $body );            
            $body = str_replace($host[0], "", $body );
            
            // strip off a standard .sig. Properly formed .sigs start with '-- ' on a new line.
            list($body, $sig) = explode("\n-- ", $body);
            
            MoblogLogger::log( "parseBody ---> body = $body" );
            $body = trim($body);            
            $this->_body .= $body;
        }
        
        /**
         * checks if there are any mime parts, perhaps attachments or something like
         * that...
         */
        function parseMimeParts( $parts )
        {
            $this->_attachments = Array();
            foreach( $parts as $part ) {
                MoblogLogger::log( "attachment type = ".$part->ctype_primary."/".$part->ctype_secondary );            
                
                if( strtolower($part->ctype_primary) == "text" && strtolower($part->ctype_secondary) == "plain" ) {
					// if ctype_primary == text and ctype_secondary == plain, it should be text format e-mail
                    MoblogLogger::log( "Reparsing the body of the message!" );
                    MoblogLogger::log( "text/plain part - contents = ".$part->body );
                    $this->parseBody( $part->body );
					$this->_inputEncoding = strtoupper( $part->ctype_parameters['charset'] );
                }
                elseif( strtolower($part->ctype_primary) == "multipart" && strtolower($part->ctype_secondary) == "alternative") {
					// if ctype_primary == multipart and ctype_secondary == alternative, it should be html format e-mail
					// We should look into it's child to get the real body
                    foreach ( $part->parts as $childPart ) {
                		if( strtolower($childPart->ctype_primary) == "text" && strtolower($childPart->ctype_secondary) == "plain" ) {
                    		$this->parseBody( $childPart->body );
							$this->_inputEncoding = strtoupper( $childPart->ctype_parameters['charset'] );
                    	}
                    }
                }
                else {
                    // whatever comes as a part, we will take it and treat it as if it was 
                    // a normal resource as long as it's not an application/smil thingie...
                    
                    if( strtolower($part->ctype_secondary) != 'html' && strtolower($part->ctype_secondary) != 'smil' && MOBLOG_IGNORE_SMIL_ATTACHMENTS ) {
                        // GalleryResources::addResource only deals with uploaded files, so we'll
                        // have to pretend that this is one of them!
                        $config =& Config::getConfig();
                        // $tmpFolder = $config->getValue( "temp_folder" );
                        // $tmpFolderName = $tmpFolder."/".md5(microtime());
                        $tmpFolderName = $config->getValue( "temp_folder" );
                        File::createDir( $tmpFolderName );
                        MoblogLogger::log( "Creating temp folder = $tmpFolderName" );
                        $fileName = stripslashes($part->ctype_parameters["name"]);
                        if( $fileName == "" )
                          $fileName = stripslashes($part->d_parameters["filename"]);
                          
                        $fileName = str_replace( "\"", "", $fileName );
                        $fileName = str_replace( "'", "", $fileName );
                        $tmpName = $tmpFolderName."/".md5(microtime())."_".$fileName;
                        $fileName = urldecode( $fileName );
                        
			            if ( MOBLOG_FORCE_ENCODE_TO_UTF8 )
			            	$fileName = $this->encodeToUTF8( $fileName, $this->_inputEncoding);
                        
                        $f = new File( $tmpName );
                        $f->open( "ab+" );
                        MoblogLogger::log( "fileName = ".$tmpName );                    
                        MoblogLogger::log( "Saving attachment as = ".$tmpName );
                        //MoblogLogger::log( "base64 encoded data = ".$part->body );
                        if( !$f->write( $part->body )) {
                            MoblogLogger::log( "There was an error writing the temporary file" );
                            die();
                        }
                        MoblogLogger::log( "File saved ok!" );
                        MoblogLogger::log("FILENAME = $fileName");
                        $uploadInfo = Array( "name" => urldecode($fileName),
                                             "type" => $part->ctype_primary."/".$part->ctype_secondary,
                                             "tmp_name" => $tmpName,
                                             "size" => $f->getSize(),
                                             "error" => 0 );
                        
                        $upload = new FileUpload( $uploadInfo );
                        $upload->setFolder( $tmpFolderName );
                        array_push( $this->_attachments, $upload );
                    }
                }
            }
        }
		
		function encodeToUTF8( $input, $inputEncoding)
		{
	        if ( $inputEncoding == "UTF-8" || $inputEncoding == "" )
	        	return $input;
	        
	        if (function_exists('iconv'))  {
	            $output = iconv($inputEncoding,'UTF-8', $input);
	            if ($output) {
	            	return $output;
	            } elseif (function_exists('mb_convert_encoding')) {
			        $output = mb_convert_encoding($input, 'UTF-8', $inputEncoding );
			        if ($output) {
			            return $output;
		            } else {
		            	return $input;
		            }
	            } else {
	            	return $input;
	            }
	        } else {
	        	return $input;
	        }
	    }

        function tidy($text) 
        {
            $text = str_replace("&nbsp;<br />", "", $text);
            $text = preg_replace("/([\n\r\t])+/is", "\n", $text);
            
            return ($text);
        }
        
        function getUser()
        {  
            return $this->_user;
        }
        
        function getBlogId()
        {
            return $this->_blogId;
        }
        
        function getBlogName()
        {
            return $this->_blogName;
        }
        
        function getPassword()
        {
            return $this->_pass;
        }
        
        function getTopic()
        {
            if ( MOBLOG_FORCE_ENCODE_TO_UTF8 )
            	return $this->encodeToUTF8( $this->_topic, $this->_inputEncoding);
            else
            	return $this->_topic;
        }
        
        function getBody()
        {
            if ( MOBLOG_FORCE_ENCODE_TO_UTF8 )
            	return $this->encodeToUTF8( $this->_body, $this->_inputEncoding);
            else
            	return $this->_body;
        }
        
        function getReplyTo()
        {
            return $this->_replyAddress;
        }
        
        function getAttachments()
        {
            return $this->_attachments;
        }
    }
?>