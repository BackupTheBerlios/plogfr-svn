<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	
	/**
	 * simple class that logs a message to the standard log file, but only if enabled
	 *
	 * @see LoggerManager
	 */
	class MoblogLogger extends Object
	{
		/**
		 * logs a simple message to the log file, using the "debug" priority
		 */
		function Log( $message ) 
		{
			$config =& Config::getConfig();
			if( $config->getValue( "moblog_logging_enabled" )) {
				$logger =& LoggerManager::getLogger();
				$logger->debug( $message );		
			}
		}
	}
?>