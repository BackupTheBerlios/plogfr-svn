<?php


    include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    
    //
    // list of tags that can be used to generate valid urls, and its
    // corresponding format
    //
    $urlRewriteTags = array(
                '{blogname}' => '([_0-9a-zA-Z-]+)?',
                '{blogid}' => '([0-9]+)?',
				'{blogowner}' => '([_0-9a-zA-Z-]+)?', 
                '{op}' => '([_0-9a-z-]+)?',
                '{year}' => '([0-9]{4})?',
                '{month}' => '([0-9]{2})?',
                '{day}' => '([0-9]{2})?',
                '{hours}' => '([0-9]{2})?',
                '{minutes}' => '([0-9]{2})?',
                '{postname}' => '([_0-9a-zA-Z-]+)?',
                '{postid}' => '([0-9]+)?',
                '{catname}' => '([_0-9a-zA-Z-]+)?',
                '{catid}' => '([0-9]+)?',
				'{username}' => '([_0-9a-zA-Z-]+)?',
                '{userid}' => '([0-9]+)?',
                '{templatename}' => '([_0-9a-zA-Z-.]+)?',
                '{resourceid}' => '([0-9]+)?',
                '{resourcename}' => '([0-9a-zA-Z_\-\.\,\\ \(\)\[\]]+)?',
                '{albumid}' => '([0-9]+)?',
                '{albumname}' => '([0-9a-zA-Z_\-\.\,\\ \(\)\[\]]+)?'
            );

    /**
     * \ingroup Net
     *
     * Given a link format (like all the *_link_format configuration settings) and a valid incoming
     * request, determine if the URL matches the format and if so, fill in an array with the information
     * extracted from the link (according to the format)
     *
     * This class is used by LinkFormatMatched and generally there is no need to use this class
     * by plugin developers.
     *
     * @see LinkFormatMatcher
     */
    class LinkParser extends Object
    {
    
        var $_linkFormat;
        
        function LinkParser( $linkFormat )
        {
            $this->Object();
            
            $this->_linkFormat = $linkFormat;
        }
        
        function parseLink( $url )
        {
            $uri = $url;
            
            global $urlRewriteTags;
            $rewritecode = array_keys( $urlRewriteTags );
            $rewritereplace = array_values( $urlRewriteTags );
        
            // Turn the structure into a regular expression
            $matchre = str_replace( "/", "/", $this->_linkFormat );
            $matchre = str_replace( "$", "\$", $matchre );
            $matchre = str_replace( $rewritecode, $rewritereplace, $matchre );
            $matchre = "^".$matchre;
        
            // Extract the key values from the uri:
            $count = preg_match("#$matchre#",$uri,$values);
            
            if( $count == 0 )
                return false;
        
            // Extract the token names from the structure:
            preg_match_all("#\{(.+?)\}#", $this->_linkFormat, $tokens);
        
        	$result = array();
            for($i = 0; $i < count($tokens[1]); $i++) {
                $name = $tokens[1][$i];
                $value = $values[$i+1];
                $result["$name"] = $value;
            }
            
            return $result;
        }
    }
?>
