<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/mail/emailmessage.class.php" );
    include_once( PLOG_CLASS_PATH."class/mail/emailservice.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );

	class SummaryTools extends Object
	{
		
		/**
		 * returns the url that will effectively allow users to enter a new
		 * password
		 */
		function calculatePasswordResetHash( $userInfo ) 
		{
			$string = $userInfo->getPassword().$userInfo->getEmail().$userInfo->getId();
			$requestHash = md5($string);
			
			return $requestHash;
		}
		
		/**
		 * sends the email with the request
		 * @private
		 */
		function sendResetEmail( $userInfo, $url )
		{
			// prepare the template
            $templateService = new TemplateService();
            $template = $templateService->Template( "resetpasswordemail", "summary" );
            $template->assign( "locale", $this->_locale );
			$template->assign( "reseturl", $url );
			
			// render it and keep its contents
			$emailBody = $template->fetch();
			
            $message = new EmailMessage();
			$config =& Config::getConfig();
            $message->setFrom( $config->getValue( "post_notification_source_address" ));
            $message->addTo( $userInfo->getEmail());
            $message->setSubject( "pLog Password Reset Request" );
            $message->setBody( $emailBody );

            $service = new EmailService();
            return $service->sendMessage( $message );
		}
		
		function verifyRequest( $userNameHash, $requestHash )
		{
		
			// make sure that the request is correct
			$users = new Users();
			// it's not a good idea to do this but it makes things a bit easier...
			$prefix = $users->getPrefix();
			$query = "SELECT u.id AS id, u.user AS user, u.password AS password, u.email AS email, 
			          u.about AS about, u.full_name AS full_name, u.properties AS properties, 
					  IF(p.permission_id = 1, 1, 0 ) AS site_admin, u.resource_picture_id AS resource_picture_id,
					  u.status AS status
					  FROM {$prefix}users u LEFT JOIN {$prefix}users_permissions p ON u.id = p.user_id 
					  WHERE MD5(u.user) = '".Db::qstr($userNameHash)."'";
			$userInfo = $users->_getUserInfoFromQuery( $query );
			
			// try to see if we can load the user...
			if( !$userInfo ) 
				return false;

			// and if so, validate the hash
			$originalRequestHash = SummaryTools::calculatePasswordResetHash( $userInfo );
			if( $requestHash != $originalRequestHash )
				return false;
				
			return $userInfo;
		}
	}
?>