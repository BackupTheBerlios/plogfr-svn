<?php

    include_once(PLOG_CLASS_PATH."class/logger/layout/layout.class.php");

    /**
     * PatternLayout allows a completely customizable layout that uses a conversion
     * pattern for formatting.
     *
	 * \ingroup logger
     */
    class PatternLayout extends Layout
    {
        /**
         * The message to be formatted.
         */
        var $message;

        /**
         * The conversion pattern to use with this layout.
         */
        var $pattern;

        /**
         * Create a new PatternLayout instance.
         */
        function PatternLayout ($pattern)
        {
			parent::Layout( $pattern );
			
			$this->pattern = $pattern;
        }
		
		/**
		 * @private
		 * Returns a number given a priority string
		 */
		function getPriorityNumber( $prio )
		{
			$value = 0;
		
			switch( $prio ) {
				case LOGGER_PRIO_INFO: $value = 1; break;
				case LOGGER_PRIO_WARN: $value = 2; break;
				case LOGGER_PRIO_ERROR: $value = 3; break;
				case LOGGER_PRIO_DEBUG: $value = 4; break;												
			}
			
			return( $value );
		}

        /**
         * Format a log message.
         *
         *
         * <b>Conversion characters:</b>
         *
         * <ul>
         *     <li><b>%c</b>               - the class where message was logged</li>
         *     <li><b>%d</b>               - current date</li>
         *     <li><b>%f</b>               - the file where the message was logged</li>
         *     <li><b>%F</b>               - the function where the message was
         *                                   logged</li>
         *     <li><b>%l</b>               - the line where the message was logged</li>
         *     <li><b>%m</b>               - the log message</li>
         *     <li><b>%n</b>               - a newline</li>
         *     <li><b>%N</b>               - the level name</li>
         *     <li><b>%p</b>               - the level of priority</li>
         *     <li><b>%r</b>               - a carriage return</li>
         *     <li><b>%t</b>               - a horizontal tab</li>
         *     <li><b>%T</b>               - a unix timestamp (seconds since January
         *                                   1st, 1970)</li>
         * </ul>
         *
         * @param Message A Message instance.
         *
         * @return string A formatted log message.
         */
        function &format (&$message)
        {		
			$pattern = str_replace( "%c", $message->class, $this->pattern );
			$pattern = str_replace( "%d", strftime("%d-%m-%Y %H:%M:%S", time()), $pattern );
			$pattern = str_replace( "%f", $message->file, $pattern );
			$pattern = str_replace( "%F", $message->function, $pattern );
			$pattern = str_replace( "%l", $message->line, $pattern );
			$pattern = str_replace( "%m", $message->getMessage(), $pattern );
			$pattern = str_replace( "%n", "\n", $pattern );
			$pattern = str_replace( "%N", strtoupper( $message->getParameter("prio")), $pattern );
			$pattern = str_replace( "%p", strtoupper( $this->getPriorityNumber($message->getParameter("prio"))), $pattern );
			$pattern = str_replace( "%r", "\r", $pattern );
			$pattern = str_replace( "%t", "\t", $pattern );
			$pattern = str_replace( "%T", time(), $pattern );
			
			return( $pattern );
        }
    }

?>