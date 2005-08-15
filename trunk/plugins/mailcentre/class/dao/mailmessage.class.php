<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	
	class MailMessage extends Object
	{
	
		var $_subject;
		var $_text;
		var $_to;
		var $_sent;
		var $_sentTimestamp;
		var $_id;
	
		function MailMessage( $subject, $text, $to, $cc, $bcc, $sent = null, $id = -1 )
		{
			$this->Object();
			
			$this->_subject = $subject;
			$this->_text = $text;
			$this->_to = $to;
			$this->_cc = $cc;
			$this->_bcc = $bcc;
			if( $sent == null ) {
    			$this->_sentTimestamp = new Timestamp( $sent );			
    			$this->_sent = $this->_sentTimestamp->getTimestamp();
			}
			else {
    			$this->_sent = $sent;
	   		    $this->_sentTimestamp = new Timestamp( $sent );
			}
			$this->_id = $id;
		}
		
		function getId()
		{
			return( $this->_id );	
		}
		
		function getSubject()
		{
			return( $this->_subject );	
		}
		
		function getText()
		{
			return( $this->_text );	
		}
		
		function getSent()
		{
			return( $this->_sent );	
		}
		
		function getSentTimestamp()
		{
			return( $this->_sentTimestamp );	
		}
		
		function getTo()
		{
			return( $this->_to );	
		}
		
		function getCc()
		{
		    return( $this->_cc );
		}
		
		function getBcc()
		{
		   return( $this->_bcc );
		}
		
		function setId( $id )
		{
			$this->_id = $id;	
		}
	}
?>