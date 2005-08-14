<?php

	include_once( PLOG_CLASS_PATH."class/logger/loggermanager.class.php" );

	/**
     * Very stupid function that will hopefully replace all my
     * impossible-to-find-prints-in-22000-lines of code :P
     *
     * @param $params Whatever you'd like to print
     */

     /**
      * set this to 'false' to disable all debugging output
      */
	define( "DEBUG_ENABLED", true );
	
	function _debug( $params )
	{
		$log = LoggerManager::getLogger();
		$log->debug( $params );
	}

	function __debug( $params )
    {
    	if( DEBUG_ENABLED ) {
			if( function_exists("debug_backtrace")) {
        		$info = debug_backtrace();
            	$last = $info[0];
				$line = $last["file"].":".$last["line"];
				if( is_array($params) || is_object($params)) {
					print($line.":");
					print table_var_dump($params);
					print("<br/>");
				}
				else 
					print($line.":".$params."<br/>");
        	}
            else {
            	print($params."<br/>");
            }
        }

        return true;
    }
	
	/**
	 * see copyright below! 
	 * this should help in debugging purposes...
	 */ 
	///////////////////////////////////////////////////////////////
	/// tableVarDump() by James Heinrich <info@silisoftware.com> //
	//        available at http://www.silisoftware.com          ///
	///////////////////////////////////////////////////////////////
	//                                                           //
	// Requires:                                                 //
	//   PHP 3.0.7 (or higher)                                   //
	//                                                           //
	//                                                           //
	//         This code is released under the GNU GPL:          //
	//           http://www.gnu.org/copyleft/gpl.html            //
	//                                                           //
	//      +---------------------------------------------+      //
	//      | If you do use this code somewhere, send me  |      //
	//      | an email and tell me how/where you used it. |      //
	//      +---------------------------------------------+      //
	//                                                           //
	///////////////////////////////////////////////////////////////
	///                                                          //
	// v1.0.1 - September 19, 2003                               //
	//   * Bugfix: included missing string_var_dump() function   //
	//     (thanks Andrei Verovski)                              //
	//                                                           //
	// v1.0.0 - May 8, 2003                                      //
	//   * initial public release                                //
	//                                                          ///
	///////////////////////////////////////////////////////////////

	function table_var_dump($variable) {
		$returnstring = '';
		switch (gettype($variable)) {
			case 'array':
				$returnstring .= '<TABLE BORDER="1" CELLSPACING="0" CELLPADDING="2">';
				foreach ($variable as $key => $value) {
					$returnstring .= '<TR><TD VALIGN="TOP"><B>'.str_replace("\x00", ' ', $key).'</B></TD>';
					$returnstring .= '<TD VALIGN="TOP">'.gettype($value);
					if (is_array($value)) {
						$returnstring .= '&nbsp;('.count($value).')';
					} elseif (is_string($value)) {
						$returnstring .= '&nbsp;('.strlen($value).')';
					}
					$returnstring .= '</TD><TD>'.table_var_dump($value).'</TD></TR>';
				}
				$returnstring .= '</TABLE>';
				break;

			case 'boolean':
				$returnstring .= ($variable ? 'TRUE' : 'FALSE');
				break;

			case 'integer':
			case 'double':
			case 'float':
				$returnstring .= $variable;
				break;

			case 'object':
			case 'null':
				$returnstring .= string_var_dump($variable);
				break;

			case 'string':
				$variable = str_replace("\x00", ' ', $variable);
				$varlen = strlen($variable);
				for ($i = 0; $i < $varlen; $i++) {
					if (ereg('['.chr(0x0A).chr(0x0D).' -;0-9A-Za-z]', $variable{$i})) {
						$returnstring .= $variable{$i};
					} else {
						$returnstring .= '&#'.str_pad(ord($variable{$i}), 3, '0', STR_PAD_LEFT).';';
					}
				}
				$returnstring = nl2br($returnstring);
				break;

			default:
				$returnstring .= nl2br(htmlspecialchars(str_replace("\x00", ' ', $variable)));
				break;
		}
		return $returnstring;
	}


	function string_var_dump($variable) {
		ob_start();
		var_dump($variable);
		$dumpedvariable = ob_get_contents();
		ob_end_clean();
		return $dumpedvariable;
	}	
?>
