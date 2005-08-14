<?php
    
    //
    // interactive regular expression matcher
    //
    
    // initialization
    if( isset( $_POST["text"] )) $text = $_POST["text"];
    else $text = "";
    if( isset( $_POST["regexp"])) $regexp = $_POST["regexp"];
    else $regexp = "";
    if( isset( $_POST["type"] )) $type = $_POST["type"];
    else $type = "";
    $resultsAvailable = false;
    $successful = false;
    
    // see if there is anything to calculate
    if( $text != "" && $regexp != "" && ( $type == "preg_match" || $type == "preg_match_all")) {
        if( $type == "preg_match" ) {
            // use only preg_match as the method
            $result = preg_match( $regexp, $text, $matches );
            if( isset( $matches[1] ))
                $matchStrings = Array( $matches[1] );
            else
                $matchStrings = Array();
        }
        else {
            $result = preg_match_all( $regexp, $text, $matches );
            $matchStrings = $matches[1];
        }
        
        // now see if something matched and prepare it...
        if( $result ) {
            $resultsAvailable = true;
            $successful = true;
        }
        else {
            $resultsAvailable = true;
            $successful = false;
            $message = "The regular expression did not match.";
        }
    }
    else {
        // nothing to calculate!!!
    }
?>
<html>
 <head>
  <title>Interactive Regular Expressions!</title>
  <script type="text/javascript">
   function clearForm()
   {
    text = document.getElementById('text');
    text.value = '';
    regexp = document.getElementById('regexp');
    regexp.value = '';
   }
  </script>
 </head>
 <body>
  <h2>Regular Expression Testing Tool</h2>
  <?php 
    if( $resultsAvailable ) { 
      if( $successful ) {
        $numMatches = count($matchStrings);
        print("<p>Number of matches: <b>$numMatches</b></p>");
        print("<ol>");
        foreach( $matchStrings as $match ) {
          print("<li>$match</li>");
        }
        print("</ol>");
        print_r($matches);
      }
      else {
        print( $message );
      }
      print("<hr/>");  
    }
  ?>
  <form name="regexp" method="post">
   <label for="regexp">Type your regular expression:</label>
   <br/>
   <textarea name="regexp" id="regexp" cols="50" rows="5"><?php echo $regexp; ?></textarea>
   <br/>
   <label for="text">Type the test text:</label>
   <br/>
   <textarea name="text" id="text" cols="50" rows="5"><?php echo $text; ?></textarea>
   <br/>
   <label for="type">Choose a method:</label>
   <select name="type">
     <option value="preg_match" <?php if( $type=="preg_match" ) { ?>selected="selected"<?php } ?>>preg_match</option>
     <option value="preg_match_all" <?php if( $type=="preg_match_all" ) { ?>selected="selected"<?php } ?>>preg_match_all</option>
   </select>
   <input type="submit" name="Submit" value="Test!" />
   <input type="button" name="Clear" onClick="javascript:clearForm();" value="Clear Form" />
  </form>
 </body>
</html>  
  