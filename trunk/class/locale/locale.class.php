<?php

    /**
	 * \defgroup Locale
	 *
	 * The Locale module is used for localization purposes. Its main class is the Locale class
	 * that is capable of loading very simple php files containing a big array of string identifiers
	 * and their translations. The main method of the class is the Locale::tr() that given a string
	 * identifier, will return the translated version.
	 *
	 * Locale files can also specify default encodings and very basic date and time formats (this will
	 * be improved in next version) At the moment it is also possible to use right-to-left languages
	 * even though there is none available yet.
	 *
	 * The Locales class is the preferred way to load translations from disk since it has
	 * caching mechanisms so that we don't have to load the data everytime from disk.
	 *
	 * @see Locale
	 * @see Locales
     */

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/jalalicalendar.class.php" );

	define( "DEFAULT_LOCALE_FOLDER", PLOG_CLASS_PATH . "locale" );
	
	/**
	 * default locale format that will be used if none available
	 */
	define( "DEFAULT_LOCALE_FORMAT", "%d/%m/%Y %H:%M" );
	
	/**
	 * default encoding if the locale does not specify one
	 */
	define( "DEFAULT_ENCODING", "iso-8859-1" );
    
    /**
     * default direction for texts, if the locale does not specify one
     */
	define( "DEFAULT_DIRECTION", "ltr" );

    /**
	 * \ingroup Locale
	 *
     * Class used to localize messages and things such as dates and numbers.
     *
     * To use this class, we will have to provide a file containing an array
     * of the form:
     *
     * <pre>
     * $messages["identifier"] = "Translated text"
     * </pre>
     *
     * The file will be loaded when creating this object and must be called following
     * the same scheme: locale_lang_COUNTRY (see constructor on locales namig schemes)
     *
     * When we want to translate a string, we will have to use its identifier, that will
     * be looked up in the array containing all the messages. If there is a message for that
     * identifier, it will be returned or a empty string otherwise.
     *
     * This class is extensively used throughout the templates to localize texts, dates
     * and numbers, being the formatDate function one of the most importants of this class.
     *
     * <b>IMPORTANT:</b> For performance reasons, it is recommended to use the Locales::getLocale
     * method instead of creating new Locale objects every time we need one. The getLocale methods
     * offers caching capabilities so that the file with the messages will not need to be fetched
     * every time from disk.
     * @see Locales::getLocale()
     */
	class Locale extends Object 
	{

		var $_defaultFolder;
		var $_code;	// our ISO locale code, eg. es_ES, en_UK, etc
		var $_messages;
        var $_charset;
		var $_description;
		var $_dateFormat;

        /**
         * Constructor.
         *
         * @param $code Code follows the Java naming scheme: language_COUNTRY, so
         * for example if we want to have the texts translated in the English spoken
         * in the UK, we'd have to use en_UK as the code. The two digits country
         * code and language code are ISO standards and can be found in
         * http://userpage.chemie.fu-berlin.de/diverse/doc/ISO_3166.html (country codes) and
         * http://userpage.chemie.fu-berlin.de/diverse/doc/ISO_639.html (language codes)
         */
		function Locale( $code )
		{
			$this->Object();

            $this->_defaultFolder = $this->getLocaleFolder();

			$this->_code = $code;

			$this->_loadLocaleInfo();

            if( $this->_charset == "" )
            	$this->_charset = DEFAULT_ENCODING;
		}

        /**
         * @private
         */
		function _loadLocaleFile()
		{
			$fileName = $this->_defaultFolder."/locale_".$this->_code.".php";

			if( File::isReadable( $fileName ))
				include( $fileName );

			// The following is just to handle the case where there isn't
			// a valid local file.
			if ( !isset($messages) || !is_array( $messages ) )
			{
				$messages = array();
			}
			$this->_messages = $messages;

            unset($messages);
	
			/*if( function_exists('memory_get_usage'))
				$this->log->debug('Memory used after loading locale ' . $this->_code . ': ' . memory_get_usage());*/
		}
		
		/**
		 * @private
		 * Loads the locale file, extracts the information needed and frees the used memory
		 */
		function _loadLocaleInfo()
		{
			// load the locale into $this->_messages
			$this->_loadLocaleFile();
			
			// get the info that we need
			$this->_description = isset($this->_messages["locale_description"]) ? $this->_messages["locale_description"] : "no description for " . $this->_code;
            $this->_charset = isset($this->_messages["encoding"]) ? $this->_messages["encoding"] : DEFAULT_ENCODING;
			$this->_direction = isset($this->_messages["direction"]) ? $this->_messages["direction"] : DEFAULT_DIRECTION;
			$this->_dateFormat = isset($this->_messages["date_format"]) ? $this->_messages["date_format"] : DEFAULT_LOCALE_FORMAT;
			
			unset( $this->_messages );
			
			$this->_messages = NULL;
			/*if( function_exists('memory_get_usage'))			
				$this->log->debug('Freeing memory for locate ' . $this->_code . ': ' . memory_get_usage());*/
			
			return( true );
		}

        /**
         * Returns the character encoding method used by the current locale file. It has to be a valid
         * character encoding, since it will be used in the header of the html file to tell the browser
         * which is the most suitable encoding that should be used.
         *
         * @return A valid character encoding method.
         */
        function getCharset()
        {
        	return $this->_charset;
        }
		
		/** 
		 * returns the direction in which this language is written.
		 * Possible values are, as with the html standard, "rtl" or "ltr"
		 *
		 */
		function getDirection()
		{
			$direction = $this->_direction;
			if( $direction != "rtl" )
				$direction = "ltr";
				
			return $direction;
		}

        /**
         * Returns an optional locale description string that can be included in the
         * locale file with the other texts.
         *
         * @return A string describing the locale file.
         */
        function getDescription()
        {
        	return( $this->_description );
        }

        /**
         * @static
         */
        function getLocaleFolder()
        {
            $config =& Config::getConfig();

            $localeFolder = $config->getValue( "locale_folder" );
            if( $localeFolder == "" || $localeFolder == "./locale")
            	$localeFolder = DEFAULT_LOCALE_FOLDER;

            return $localeFolder;
        }

        /**
         * Changes the locale to something else than what we chose in the first place when
         * creating the object.
         *
         * @param code follows the same format as in the constructor.
         */
		function setLocale( $code )
		{
			$this->_code = $code;

			$this->_loadLocaleFile();
		}

        /**
         * Translates a string
         *
         * @param id Identifier of the message we would like to translate
         */
		function getString( $id )
		{
			// load the file if it hadn't been loaded yet
			if( !is_array($this->_messages) ) {
				$this->_loadLocaleFile();
            }
				
            if( is_array($this->_messages) && array_key_exists($id, $this->_messages) &&
                $this->_messages[ $id ] != "" ) {
			    $string = $this->_messages[ $id ];
            } else {
            	$string = $id;
            }
				
			/*if( $this->getDirection() == "rtl" )
				$string = "<span dir=\"rtl\">$string</span>";*/

			return $string;
		}
		
		/**
		 * returns all the strings
		 *
		 * @return An array containing all the strings that this locale supports
		 */
		function getStrings()
		{
			// load the file if it hadn't been loaded yet		
			if( !is_array($this->_messages))
				$this->_loadLocaleFile();
		
			return $this->_messages;
		}

        /**
         * Alias for getString
         * @see getString
         */
		function tr( $id )
		{
			return $this->getString( $id );
		}

        /**
         * Alias for getString
         * @see getString
         */
		function i18n( $id )
		{
			return $this->getString( $id );
		}

		/**
		 * calls printf on the translated string.
		 *
		 * Crappy Crappy! Since it only accepts two arguments... ;) Well, if we
		 * ever need more than two, I'll change it!
         * @private
		 */
		function pr( $id, $arg1 = null, $arg2 = null )
		{
			// first of all, we translate the string
			$str = $this->tr( $id );
			if( $arg1 == null )
				$result = $str;
			if( $arg2 == null )
				$result = sprintf( $str, $arg1 );
			else
				$result = sprintf( $str, $arg1, $arg2 );

			return $result;
		}

        /**
         * Returns the complete code
         *
         * @return The Locale code
         */
        function getLocaleCode()
        {
        	return $this->_code;
        }

        /**
         * Returns the two-character language code
         *
         * @return The two-character language code
         */
		function getLanguageId()
		{
            $countryId = substr( $this->_code, 3, 5 ); 
            if ( strcmp( $countryId, "TW" ) == 0 || strcmp( $countryId, "CN") ==0 ) { 
                $langId = substr( $this->_code, 0, 2 ); 
                return $langId."-".$countryId;
            } 
            else { 
                return substr( $this->_code, 0, 2 ); 
            } 
		}

        /**
         * Returns the two-character country code
         *
         * @return The two-character country code.
         */
		function getCountryId()
		{
			return substr( $this->_code, 3, 5 );
		}

        /**
         * Returns the first day of the week, which also depends on the country
         *
         * @return Returns 0 for Sunday, 1 for Monday and so on...
         */
        function firstDayOfWeek()
        {
        	switch($this->getCountryId()) {
            	case "US":
                case "AU":
                case "IE":
                case "UK": $day = 0; break;
                default: $day = 1; break;
            }

            return $day;
        }

        /**
         * Returns all the months of the year
         *
         * @return Returns an array containing the names of the months, where the
         * first one is January.
         */
        function getMonthNames()
        {
			// load the file if it hadn't been loaded yet		
			if( !is_array($this->_messages))
				$this->_loadLocaleFile();
		
        	return $this->_messages["months"];
        }

        /**
         * Returns the days of the week
         *
         * @return Returns the names of the days of the week, where the first one is
         * Sunday.
         */
        function getDayNames()
        {
			// load the file if it hadn't been loaded yet		
			if( !is_array($this->_messages))
				$this->_loadLocaleFile();
		
        	return $this->_messages["days"];
        }

        /**
         * Returns the shorter version of the days of the week
         *
         * @return Returns an array with the days of the week abbreviated, where the first
         * one is Sunday.
         */
        function getDayNamesShort()
        {
			// load the file if it hadn't been loaded yet		
			if( !is_array($this->_messages))
				$this->_loadLocaleFile();		
		
        	return $this->_messages["daysshort"];
        }
		
		function _getOrdinal( $num )
		{
			// first we check the last two digits
			$last_two_digits = substr( $num, -2 );
			if( $last_two_digits == "11" )
				$value = $num."th";
			elseif( $last_two_digits == "12" )
				$value = $num."th";
			elseif( $last_two_digits == "13" )
				$value = $num."th";
			else {
				// we get the last digit
				$last_digit = substr( $num, -1 );
				
				if( $num < 10 )
					$num = $last_digit;
				
				if( $last_digit == "1" )
					$value = $num."st";
				elseif( $last_digit == "2" )
					$value = $num."nd";
				elseif( $last_digit == "3" )
					$value = $num."rd";
				else
					$value = $num."th";
			}
			
			return $value;
		}		
		
		/**
		 * Returns the day in an ordinal format, i.e. 1st, 2nd, 3rd, etc (in English)
         *
         * @return A string with the ordinal representation of the day.
		 */
		function getDateOrdinal( $date )
		{
			$dayOrdinal = $date;
			$last_digit = substr( $dayOrdinal, -1 );
			if( $dayOrdinal < 10 )
				$dayOrdinal = $last_digit;
			
			switch( $this->getLanguageId()) {
				case "es":
				case "ca":
					break;
				case "de":
				case "fi":
					$dayOrdinal .= "."; break;
				case "en":
				default:
					$dayOrdinal = $this->_getOrdinal( $date); break;
			}
			
			return $dayOrdinal;
		}	

		function getDayOrdinal( $t )
		{
			$dayOrdinal = $t->getDay();
			return $this->getDateOrdinal( $dayOrdinal );
		}	


        /**
		 * Formats the date of a Timestamp object according to the given format:
		 *
         * (compatible with PHP):<ul>
		 * <li>%a abbreviated weekday</li>
		 * <li>%A	complete weekday</li>
		 * <li>%b	abbreviated month</li>
		 * <li>%B	long month</li>
		 * <li>%d	day of the month, 2 digits with leading zero</li>
         * <li>%j   day of the month, numeric (without leading zero)</li>
		 * <li>%H	hours, in 24-h format</li>
		 * <li>%I	hours, in 12-h format (without leading zero)</li>
		 * <li>%p   returns 'am' or 'pm'</li>
		 * <li>%P   returns 'AM' or 'PM'</li>
		 * <li>%M	minutes</li>
		 * <li>%m	month number, from 00 to 12</li>
		 * <li>%S	seconds</li>
		 * <li>%y	2-digit year representation</li>
		 * <li>%Y	4-digit year representation</li>
		 * <li>%%	the '%' character
         * </ul>
         * (these have been added by myself and are therefore incompatible with php)<ul>
         * <li>%T	"_day_ of _month_", where the day is in ordinal form and 'month' is the name of the month</li>
         * <li>%D	cardinal representation of the day</li>
         * </ul>
		 */
		function formatDate( $timeStamp, $format = null )
		{
			// load the file if it hadn't been loaded yet		
			if( !is_array($this->_messages))
				$this->_loadLocaleFile();		
		
        	// timestamp only returns the values in english, so we should translate
            // them before using
            $monthId    = (int)$timeStamp->getMonth();
            $monthStr   = $this->_messages["months"][$monthId-1];
            //print("monthstr: $monthStr");
            // and the same for the weekdays
            $weekdayId = $timeStamp->getWeekdayId();
            $weekday = $this->_messages["days"][$weekdayId];
			
			// if the user did not specify a format, let's use the default one
			if( $format == null )
				$format = $this->_dateFormat;

            // now we can continue normally
            $values["%a"] = function_exists('html_entity_decode') ? htmlentities(substr(html_entity_decode($weekday), 0, 3 )) : substr($weekday, 0, 3 );
			$values["%A"] = $weekday;
			$values["%b"] = function_exists('html_entity_decode') ? htmlentities(substr(html_entity_decode($monthStr), 0, 3 )) : substr($monthStr, 0, 3);
			$values["%B"] = $monthStr;
			$values["%d"] = ($timeStamp->getDay() < 10) ? "0".$timeStamp->getDay() : $timeStamp->getDay();
			$values["%e"] = intval($timeStamp->getDay());
			$values["%j"] = $timeStamp->getDay();
			$values["%H"] = $timeStamp->getHour();
			$values["%I"] = ($timeStamp->getHour() != 0) ? ($timeStamp->getHour() > 12) ? $timeStamp->getHour()-12 : $timeStamp->getHour()+0 : 12;
			$values["%p"] = $timeStamp->getHour() >= 12 ? "pm" : "am";
			$values["%P"] = $timeStamp->getHour() >= 12 ? "PM" : "AM";
			$values["%M"] = $timeStamp->getMinutes();
			$values["%m"] = $timeStamp->getMonth();
			$values["%S"] = $timeStamp->getSeconds();
			$values["%y"] = substr($timeStamp->getYear(), 2, 4 );
			$values["%Y"] = $timeStamp->getYear();
			$values["%%"] = "%";
            $values["%T"] = $this->getDayOrdinal( $timeStamp )." ".$this->tr("of")." ".$monthStr;
            $values["%D"] = $this->getDayOrdinal( $timeStamp );
            /* Start Hack By FiFtHeLeMeNt For Persian Language */
      		list( $jyear, $jmonth, $jday ) = JalaliCalendar::gregorian_to_jalali($timeStamp->getYear(), $timeStamp->getMonth(), $timeStamp->getDay());
      		$values["%q"] = JalaliCalendar::Convertnumber2farsi($jyear);
      		$values["%w"]= JalaliCalendar::Convertnumber2farsi($jmonth);
      		$values["%o"] = JalaliCalendar::Convertnumber2farsi($jday);
      		$values["%R"] = JalaliCalendar::monthname($jmonth);
      		$values["%T"] = JalaliCalendar::Convertnumber2farsi($timeStamp->getHour());
      		$values["%U"] = JalaliCalendar::Convertnumber2farsi($timeStamp->getMinutes());
			/* End Hack By FiFtHeLeMeNt For Persian Language */		

			$text = $format;
			foreach( array_keys($values) as $key ) {
                if( ereg($key, $text) )
                    $text = str_replace( $key, $values[$key], $text );
			}

			return $text;
		}
		
        /**
		 * Formats the date of a Timestamp object according to the given format:
		 * This function assumes that the timestamp is local and it converts it
		 * to GMT before formatting.
		 *
         * (compatible with PHP):<ul>
		 * <li>%a abbreviated weekday</li>
		 * <li>%A	complete weekday</li>
		 * <li>%b	abbreviated month</li>
		 * <li>%B	long month</li>
		 * <li>%d	day of the month, 2 digits with leading zero</li>
         * <li>%j   day of the month, numeric (without leading zero)</li>
		 * <li>%H	hours, in 24-h format</li>
		 * <li>%I	hours, in 12-h format (without leading zero)</li>
		 * <li>%p   returns 'am' or 'pm'</li>
		 * <li>%P   returns 'AM' or 'PM'</li>
		 * <li>%M	minutes</li>
		 * <li>%m	month number, from 00 to 12</li>
		 * <li>%S	seconds</li>
		 * <li>%y	2-digit year representation</li>
		 * <li>%Y	4-digit year representation</li>
		 * <li>%%	the '%' character
         * </ul>
         * (these have been added by myself and are therefore incompatible with php)<ul>
         * <li>%T	"_day_ of _month_", where the day is in ordinal form and 'month' is the name of the month</li>
         * <li>%D	cardinal representation of the day</li>
         * </ul>
		 */
        function formatDateGMT( $timeStamp, $format = null )
        {
            // load the file if it hadn't been loaded yet       
            if( !is_array($this->_messages))
                $this->_loadLocaleFile();       
        
            // Convert this timestamp to on that is in GMT
            $strTimeStamp = $timeStamp->getTimestamp();
            // Now have a local time stamp 
            // Is this step really necessary, since we previously had a time stamp
            $time = mktime(
                substr($strTimeStamp,8,2),
                substr($strTimeStamp,10,2),
                substr($strTimeStamp,12,2),
                substr($strTimeStamp,4,2),
                substr($strTimeStamp,6,2),
                substr($strTimeStamp,0,4)
            );

            // This does not take into account the time offset that the user
            // specified, since we are converting the time to GMT.  Since the
            // offset is just used to handle time zone differences, it is not 
            // necessary, as the time GMT is still the same.
            
            // timestamp only returns the values in english, so we should translate
            // them before using
            $monthId = gmdate( "n", $time );
            $monthStr   = $this->_messages["months"][$monthId-1];
            //print("monthstr: $monthStr");
            // and the same for the weekdays
            $weekdayId = gmdate( "w", $time );
            $weekday = $this->_messages["days"][$weekdayId];
            
            // if the user did not specify a format, let's use the default one
            if( $format == null )
                $format = $this->_dateFormat;

            // now we can continue normally
            $values["%a"] = function_exists('html_entity_decode') ? htmlentities(substr(html_entity_decode($weekday), 0, 3 )) : substr($weekday, 0, 3 );
            $values["%A"] = $weekday;
            $values["%b"] = function_exists('html_entity_decode') ? htmlentities(substr(html_entity_decode($monthStr), 0, 3 )) : substr($monthStr, 0, 3);
            $values["%B"] = $monthStr;
            $values["%d"] = gmdate( "d", $time );
            $values["%e"] = intval(gmdate( "d", $time ));
            $values["%j"] = gmdate( "j", $time );
            $values["%H"] = gmdate( "H", $time );
            $values["%I"] = gmdate( "g", $time );
            $values["%p"] = gmdate( "a", $time );
            $values["%P"] = gmdate( "A", $time );
            $values["%M"] = gmdate( "i", $time );
            $values["%m"] = gmdate( "m", $time );
            $values["%S"] = gmdate( "s", $time );
            $values["%y"] = gmdate( "y", $time );
            $values["%Y"] = gmdate( "Y", $time );
            $values["%%"] = "%";
            $values["%T"] = $this->getDateOrdinal( gmdate( "d", $time ) )." ".$this->tr("of")." ".$monthStr;
            $values["%D"] = $this->getDateOrdinal( gmdate( "d", $time )  );
            /* Start Hack By FiFtHeLeMeNt For Persian Language */
            list( $jyear, $jmonth, $jday ) = JalaliCalendar::gregorian_to_jalali(gmdate( "Y", $time ), gmdate( "m", $time ), gmdate( "d", $time ));
            $values["%q"] = JalaliCalendar::Convertnumber2farsi($jyear);
            $values["%w"]= JalaliCalendar::Convertnumber2farsi($jmonth);
            $values["%o"] = JalaliCalendar::Convertnumber2farsi($jday);
            $values["%R"] = JalaliCalendar::monthname($jmonth);
            $values["%T"] = JalaliCalendar::Convertnumber2farsi(gmdate( "H", $time ));
            $values["%U"] = JalaliCalendar::Convertnumber2farsi(gmdate( "i", $time ));
            /* End Hack By FiFtHeLeMeNt For Persian Language */     

            $text = $format;
            foreach( array_keys($values) as $key ) {
                if( ereg($key, $text) )
                    $text = str_replace( $key, $values[$key], $text );
            }

            return $text;
        }
		
		/**
		 * merges two locales
		 */
		function mergeLocale( $locale )
		{
            if(isset($locale)){
                // load the file if it hadn't been loaded yet		
			    if( !is_array($this->_messages))
				    $this->_loadLocaleFile();		
		
			    $this->_messages = array_merge( $this->_messages, $locale->getStrings());
                return true;
			}
            else{
                return false;
            }
		}
	}
?>
