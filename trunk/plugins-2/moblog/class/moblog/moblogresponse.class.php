<?php

    include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/log/mobloglogger.class.php" );
    include_once( PLOG_CLASS_PATH."class/mail/emailmessage.class.php" );
    include_once( PLOG_CLASS_PATH."class/mail/emailservice.class.php" );    

    /**
     * this is the response that we will send back to the user
     *
     * It uses pLog's messaging service to send the email, so we will
     * use the same settings as used by the core itself to send
     * messages.
     */
    class MoblogResponse extends Object
    {
    
        var $_message;
        
        function MoblogResponse( $to = null, $subject = null, $text = null )
        {
            $this->Object();
            
            $this->_message = new EmailMessage();
            $config =& Config::getConfig();
            $from = $config->getValue( "post_notification_source_address" );
            $this->_message->setFrom( $from );
                        
            if( $to != null )
                $this->setTo( $to );
                
            if( $subject != null )
                $this->setSubject( $subject );
                
            if( $text != null )
                $this->setText( $text );
        }
        
        function setTo( $address )
        {
            $this->_message->addTo( $address );    
        }
        
        function setSubject( $subject )
        {
            $this->_message->setSubject( $subject );
        }
        
        function setText( $text )
        {
            $this->_message->setBody( $text );
        }
        
        function send()
        {
            $emailService = new EmailService();
            $result = $emailService->sendMessage( $this->_message );
            
            MoblogLogger::log( "Response message sent!" );
            
            return $result;
        }
    }
?>