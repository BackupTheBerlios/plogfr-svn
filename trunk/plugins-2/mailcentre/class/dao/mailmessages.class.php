<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
	include_once( PLOG_CLASS_PATH."plugins/mailcentre/class/dao/mailmessage.class.php" );

    /**
     * class that deals with messages that have been sent via the 
     * 'mailcentre' plugin
     */
	class MailMessages extends Model
	{
	
		function MailMessages()
		{
			$this->Model();
		}
		
		/**
		 * saves a new message to the database
		 *
		 * @param message a MailMessage object
		 * @return true if successful or false otherwise
		 */
		function addMessage( &$message )
		{
            $prefix = $this->getPrefix();
            $query = "INSERT INTO {$prefix}mailcentre_sent (recipients,recipients_cc,recipients_bcc,subject,body)
                      VALUES ('".Db::qstr($message->getTo())."','".
                      Db::qstr($message->getCc())."','".
                      Db::qstr($message->getBcc())."','".
                      Db::qstr($message->getSubject())."','".
                      Db::qstr($message->getText())."')";
                      
            return( $this->Execute( $query ));
		}
		
		/**
		 * retrieves a message given its id
		 *
		 * @param messageId the id of the message we're trying to retrieve
		 * @return a MailMessage object if successful or false otherwise
		 */
		function getMessage( $messageId )
		{
            $prefix = $this->getPrefix();
            $query = "SELECT * FROM {$prefix}mailcentre_sent
                      WHERE id = '".Db::qstr($messageId)."'";
            
            $result = $this->Execute( $query );
            
            if( !$result ) 
                return false;
                      
            $row = $result->FetchRow();
            
            return( $this->_mapRow( $row ));
		}
		
		/**
		 * Deletes a sent message
		 *
		 * @param messageId The id of the message that we'd like to delete
		 * @return true if successful or false otherwise
		 */
		function deleteMessage( $messageId )
		{
            $prefix = $this->getPrefix();
            $query = "DELETE FROM {$prefix}mailcentre_sent
                      WHERE id = '".Db::qstr($messageId)."'";
                      
            $result = $this->Execute( $query );
            
            // if there was an error with the query or no rows were affected,
            // then something went definitely wrong...
            if( !$result ) 
                return false;
                
            if( $this->_db->Affected_Rows() == 0 )
                return false;

            return( true );                      
		}
		
		/**
		 * Retrives all the messages that have been sent from the database
		 *
		 *Ê@return an array of MailMessage objects or false otherwise
		 */
		function getMessages()
		{
			$prefix = $this->getPrefix();
			$query = "SELECT * FROM {$prefix}mailcentre_sent ORDER BY date DESC";
			
			$result = $this->Execute( $query );
			
			if( !$result )
				return Array();
			
			$messages = Array();	
			while( $row = $result->FetchRow()) {
				$messages[] = $this->_mapRow( $row );
			}
			
			return( $messages );
		}
		
		/**
		 * @private
		 * Maps a row from the database to a MailMessage object
		 */
		function _mapRow( $row )
		{
			$message = new MailMessage( $row["subject"],
			                            $row["body"],
			                            $row["recipients"],
			                            $row["recipients_cc"],
			                            $row["recipients_bcc"],
			                            $row["date"],
			                            $row["id"] );
			                 
			return( $message );
		}
	}
?>