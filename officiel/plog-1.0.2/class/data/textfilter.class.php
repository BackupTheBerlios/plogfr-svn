<?php

    /**
     * \defgroup Data
     *
     * The Data module includes all sorts of functions that deal with data manipulation such as Validator
     * classes, text formatters or pagers
     */

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/stringutils.class.php" );

    /**
     * \ingroup Data
     *
	 * Implements some text filters that can be used to remove Javascript code, or convert
	 * non-XHTML code into valid XHTML code, etc.
	 */
	class TextFilter extends Object 
	{

		var $htmlAllowedTags;
		var $removeJavaScript;
		var $_smileys;

        /**
         * Constructor.
         *
         * @param removeJavaScript By default, JavaScript code will also be removed
         * from texts
         */
		function TextFilter( $removeJavaScript = true )
		{
			$this->Object();

			$this->removeJavaScript = $removeJavaScript;

			$config =& Config::getConfig();
			$this->htmlAllowedTags = $config->getValue( "html_allowed_tags_in_comments" );
			$this->_smileys = $config->getValue( "smileys" );
		}

		/**
		 * Removes the Javascript code from a string.
		 * Original function from http://www.zend.com/tips/tips.php?id=124&single=1
         *
         * @param text The text we want to filter
         * @return Returns the filtered text
		 * @static
		 */
        function filterJavaScript( $text )
        {
                // Strip all of the Javascript in script tags out...
                $text = preg_replace('/<SCRIPT.*?<\/SCRIPT>/ims',"",$text);

				/** copied from the original function **/
                /* The following matches any on* events, followed by any amount of space, a
                 *' or " some script and then the matching ' or " (the \\2 matches the
                 *single or double quote).  Note that this regex is
                 * in single quotes to alleviate the problem of double quoting special
                 * chars, otherwise the backreferenced 2 would be \\\\2
                 * -- which is just silly...
				 */
                $text = preg_replace('/on(Load|Click|DblClick|DragStart|KeyDown|KeyPress|KeyUp|MouseDown|MouseMove|MouseOut|MouseOver|SelectStart|Blur|Focus|Scroll|Select|Unload|Change|Submit)\s*=\s*(\'|").*?\\2/smi',"",$text);

                $text = preg_replace('/(\'|")Javascript:.*?\\1/smi','',$text);

                return $text;
        }

		/**
		 * Filters a string with html code removing all the non-allowed tags
		 * (see the 'html_allowed_tags_in_comments' from the configuration file
		 * config.properties)
		 * It also removes the Javascript code if any.
         *
         * @param string The text we would like to filter
         * @return Returns the filtered text.
		 */
        function filterHTML( $string )
        {
			$tmp = strip_tags( $string, $this->htmlAllowedTags );
			// y luego eliminamos el javascript
			$filteredString = $this->filterJavaScript( $tmp );

			return $filteredString;
        }

		/**
		 * Works like the one above but it simply removes *all* html code
		 * from a string
         *
         * @param string The string we would like to filter
         * @return The filtered text.
		 * @static
		 */
        function filterAllHTML( $string )
        {
			$tmp = strip_tags( $string );
			// y luego eliminamos el javascript
			$filteredString = Textfilter::filterJavaScript( $tmp );

			return( trim($filteredString));
        }

		/**
		 * Converts special characters to HTML entities
		 * Works as a wrapper to the htmlentities() function from the PHP API
         * @param string The string we would like to process
         * @return The same string but with the HTML/XML entities encoded to their representation
		 */
		function filterHTMLEntities( $string )
		{
			return htmlentities( $string );
		}

        /**
         * Alias for filterHTMLEntities
         *
         * @see filterHTMLEntities
         */
		function filterXMLEntities( $string )
		{
			return $this->filterHTMLEntities($string);
		}
		
		/**
		 * removes characters from a string based on the input array
		 *
		 * @param string
		 * @param characters
		 * @returns the filtered string
		 */
		function filterCharacters( $string, $characters = Array()) 
		{
			foreach( $characters as $char ) {
				$string = str_replace( $char, "", $string );
			}
			
			return $string;
		}
		
        /**
         * Texturize function borrowed from http://photomatt.net/tools/texturize
         *
         * Takes care of "beautifying" code typed by users.
         */
        function texturize($text)
        {
            $textarr = preg_split("/(<.*>)/U", $text, -1, PREG_SPLIT_DELIM_CAPTURE); // capture the tags as well as in between
            $stop = count($textarr); $next = true; // loop stuff
            for ($i = 0; $i < $stop; $i++) {
            	$curl = $textarr[$i];
                if (!strstr($_SERVER['HTTP_USER_AGENT'], 'Gecko')) {
                	$curl = str_replace('<q>', '&#8220;', $curl);
                    $curl = str_replace('</q>', '&#8221;', $curl);
                }
                if ('<' != $curl{0} && $next) { // If it's not a tag
                	$curl = str_replace('---', '&#8212;', $curl);
                    $curl = str_replace('--', '&#8211;', $curl);
                    $curl = str_replace("...", '&#8230;', $curl);
                    $curl = str_replace('``', '&#8220;', $curl);

                    $curl = preg_replace("/'s/", "&#8217;s", $curl);
                    $curl = preg_replace("/'(\d\d(?:&#8217;|')?s)/", "&#8217;$1", $curl);
                    $curl = preg_replace('/(\s|\A|")\'/', '$1&#8216;', $curl);
                    $curl = preg_replace("/(\d+)\"/", "$1&Prime;", $curl);
                    $curl = preg_replace("/(\d+)'/", "$1&prime;", $curl);
                    $curl = preg_replace("/(\S)'([^'\s])/", "$1&#8217;$2", $curl);
                    $curl = preg_replace('/"([\s.]|\Z)/', '&#8221;$1', $curl);
                    $curl = preg_replace('/(\s|\A)"/', '$1&#8220;', $curl);
                    $curl = preg_replace("/'([\s.]|\Z)/", '&#8217;$1', $curl);
                    $curl = preg_replace("/\(tm\)/i", '&#8482;', $curl);
                    $curl = preg_replace("/\(c\)/i", '&#169;', $curl);
                    $curl = preg_replace("/\(r\)/i", '&#174;', $curl);

                    $curl = str_replace("''", '&#8221;', $curl);
                    $curl = preg_replace('/&([^#])(?![a-z]{2,8};)/', '&#038;$1', $curl);

                    $curl = preg_replace('/(d+)x(\d+)/', "$1&#215;$2", $curl);
               } elseif (strstr($curl, '<code') || strstr($curl, '<pre') || strstr($curl, '<kbd' || strstr($curl, '<style') || strstr($curl, '<script'))) {
               		// strstr is fast
            		$next = false;
        	  } else {
            		$next = true;
        	  }
        	  $output .= $curl;
    	}

    	return $output;
	}

        /**
         * Texturize function borrowed from http://photomatt.net/tools/texturize
         *
         * Takes care of "beautifying" text, by adding <p> tags to blocks of texts without the users
         * needing to know any html.
         *
         * @param pee
         * @param br
         */
		function autoP($pee, $br=1)
        {
			$pee = preg_replace("/(\r\n|\n|\r)/", "\n", $pee); // cross-platform newline
            $pee = preg_replace("/\n\n+/", "\n\n", $pee); // take care of duplicates
        	$pee = preg_replace('/\n?(.+?)(\n\n|\z)/s', "<p>$1</p>\n", $pee); // make paragraphs, including one at the end
        	$pee = preg_replace('/<p>(<(?:table|[ou]l|pre|select|form|blockquote)>)/', "$1", $pee);
        	$pee = preg_replace('!(</?(?:table|[ou]l|pre|select|form|blockquote)>)</p>!', "$1", $pee);
        	if ($br) $pee = preg_replace('|(?<!</p>)\s*\n|', "<br />\n", $pee); // optionally make line breaks
        	$pee = preg_replace('!(</(?:table|[ou]l|pre|select|form|blockquote)>)<br />!', "$1", $pee);
        	$pee = str_replace('<p><p>', '<p>', $pee);
        	$pee = str_replace('</p></p>', '</p>', $pee);

        	return $pee;
		}
		
		/**
		 * This function works in the opposite way of htmlentities, by translating html entities
		 * into their character representations. PHP >= 4.3 has html_entity_decode() but this
		 * method below works fine regardless of the php version.
		 * 
		 * Obtained from http://fi.php.net/manual/en/function.html-entity-decode.php
		 *
		 * @param htmlString The original string with html entities encoded
		 * @param quoteStyle
		 * @return The decoded html string
		 */
		function htmlDecode( $htmlString, $quote_style = ENT_QUOTES )
		{
            $trans_table = array_flip(get_html_translation_table( HTML_SPECIALCHARS, $quote_style ));
            $trans_table['&#39;'] = "'";
            return( strtr( $htmlString, $trans_table ));
		}
		
		/**
		 * Normalizes the given text. By 'normalizing', it means removing all html markup from the text as well
		 * as all punctuation signs, commas, colons, semicolons, ellipsis and everything else... This method
		 * is used when storing a normalized version of the text of a post, so that all these characters do not
		 * interfere with the search engine provided by mysql. Otherwise, searching for things like
		 * 'href' will return strange results (it will return all posts where there were html links), or things
		 * like "welcome!" or "whatever..." wouldn't be returned when searching for "welcome" and "whatever"
		 *
		 * @param text The original text.
		 * @return Returns the normalized version of the original text.
		 */
		function normalizeText( $text )
		{
		      // remove all html code
		      $result = $this->filterAllHtml( $text );
		      // remove the "extended post modifier"
		      $result = str_replace( POST_EXTENDED_TEXT_MODIFIER, "", $result );
		      // put all the html entities back to what they should be
		      $result = $this->htmlDecode( $result );
		      // and remove everything which is not letters or numbers
		      $result = ereg_replace( "/[^A-Za-z0-9_]/", " ", $result );
		      // finally, remove the unnecessary spaces
		      $result = preg_replace( "/ +/", " ", $result );
		      
		      return $result;
		}
                
        /**
         * balanceTags
         *
         * Balances Tags of string using a modified stack.
         *
         * @param text      Text to be balanced
         * @return          Returns balanced text
         * @author          Leonard Lin (leonard@acm.org)
         * @version         v1.1
         * @date            November 4, 2001
         * @license         GPL v2.0
         * @notes           
         * @changelog       
         *            1.2  ***TODO*** Make better - change loop condition to $text
         *            1.1  Fixed handling of append/stack pop order of end text
         *                 Added Cleaning Hooks
         *            1.0  First Version
         */
        function balanceTags($text, $is_comment = 0) 
        {
            
            if (get_settings('use_balanceTags') == 0) {
                return $text;
            }
        
            $tagstack = array(); $stacksize = 0; $tagqueue = ''; $newtext = '';
        
            # WP bug fix for comments - in case you REALLY meant to type '< !--'
            $text = str_replace('< !--', '<    !--', $text);
            # WP bug fix for LOVE <3 (and other situations with '<' before a number)
            $text = preg_replace('#<([0-9]{1})#', '&lt;$1', $text);
        
            while (preg_match("/<(\/?\w*)\s*([^>]*)>/",$text,$regex)) {
                $newtext = $newtext . $tagqueue;
        
                $i = strpos($text,$regex[0]);
                $l = strlen($tagqueue) + strlen($regex[0]);
        
                // clear the shifter
                $tagqueue = '';
                // Pop or Push
                if ($regex[1][0] == "/") { // End Tag
                    $tag = strtolower(substr($regex[1],1));
                    // if too many closing tags
                    if($stacksize <= 0) { 
                        $tag = '';
                        //or close to be safe $tag = '/' . $tag;
                    }
                    // if stacktop value = tag close value then pop
                    else if ($tagstack[$stacksize - 1] == $tag) { // found closing tag
                        $tag = '</' . $tag . '>'; // Close Tag
                        // Pop
                        array_pop ($tagstack);
                        $stacksize--;
                    } else { // closing tag not at top, search for it
                        for ($j=$stacksize-1;$j>=0;$j--) {
                            if ($tagstack[$j] == $tag) {
                            // add tag to tagqueue
                                for ($k=$stacksize-1;$k>=$j;$k--){
                                    $tagqueue .= '</' . array_pop ($tagstack) . '>';
                                    $stacksize--;
                                }
                                break;
                            }
                        }
                        $tag = '';
                    }
                } else { // Begin Tag
                    $tag = strtolower($regex[1]);
        
                    // Tag Cleaning
        
                    // Push if not img or br or hr
                    if($tag != 'br' && $tag != 'img' && $tag != 'hr') {
                        $stacksize = array_push ($tagstack, $tag);
                    }
        
                    // Attributes
                    // $attributes = $regex[2];
                    $attributes = $regex[2];
                    if($attributes) {
                        $attributes = ' '.$attributes;
                    }
                    $tag = '<'.$tag.$attributes.'>';
                }
                $newtext .= substr($text,0,$i) . $tag;
                $text = substr($text,$i+$l);
            }  
        
            // Clear Tag Queue
            $newtext = $newtext . $tagqueue;
        
            // Add Remaining text
            $newtext .= $text;
        
            // Empty Stack
            while($x = array_pop($tagstack)) {
                $newtext = $newtext . '</' . $x . '>'; // Add remaining tags to close      
            }
        
            // WP fix for the bug with HTML comments
            $newtext = str_replace("< !--","<!--",$newtext);
            $newtext = str_replace("<    !--","< !--",$newtext);
        
            return $newtext;
        }
        
        /** 
         * Given a string, convert it into something that can be used in a URL (it probably doesn't work very
         * well with non iso-8859-X strings) It will remove the following characters:
         *
         * ; / ? : @ & = + $ ,
         *
         * It will convert accented characters such as ˆ, , ’, etc to their non-accented counterparts (a, e, i) And
         * any other non-alphanumeric character that hasn't been removed or replaced will be thrown away.
         *
         * @param string The string that we wish to convert into something that can be used as a URL
         */
        function urlize( $string )
        {
		    // remove unnecessary spaces and make everything lower case
		    $string = preg_replace( "/ +/", " ", strtolower($string) );

            // removing a set of reserved characters (rfc2396: ; / ? : @ & = + $ ,)
            $string = str_replace(array(';','/','?',':','@','&','=','+','$',','), '', $string);

            // replace some characters to similar ones
            $search  = array(' ', 'ä', 'ö', 'ü','é','è','à','ç', 'à', 'è', 'ì', 'ò', 'ù', 'á', 'é', 'í', 'ó', 'ú', 'ë', 'ï' );
            $replace = array('_', 'a','o','u','e','e','a','c', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'e', 'i' );
            $string = str_replace($search, $replace, $string);
            
            // and everything that is still left that hasn't been replaced/encoded, throw it away
            $string = preg_replace( '/[^a-z0-9 _-]/', '', $string );        
            
            return $string;            
        }
		
		/**
		 * xhtml-izes a string. It uses the KSes filter for the task as long as the configuration parameter
		 * xhtml_converter_enabled is enabled. If xhtml_converter_aggreesive_mode_enabled is also enabled,
		 * KSes will be set into "aggressive" mode and it will try to fix even more problems with the XHTML
		 * markup (but it can also introduce more mistakes)
		 *
		 * @param string
		 * @return the xhtml-ized string
		 */
		function xhtmlize( $string )
		{
		      // use kses in the "xhtml converter" mode
		      $config =& Config::getConfig();
		      if( $config->getValue( "xhtml_converter_enabled" )) {
               	include_once( PLOG_CLASS_PATH."class/data/kses.class.php" );		      
		          $kses = new kses( true, $config->getValue( "xhtml_converter_aggresive_mode_enabled"));
		          $result = $kses->Parse( $string );
		          
		          // if balanceTags wasn't broken, we could use it...
		          //$result = Textfilter::balanceTags( $result );		          
		      }
		      else
		          $result = $string;
		      
		      return $result;
		}
		
		/**
		 * @private
		 */
		function checkboxToBoolean( $value )
		{
			if( $value == "1" || $value == "on" )
				return true;
			else
				return false;
		}
    }
?>
