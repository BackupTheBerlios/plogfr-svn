<?php

    include_once( PLOG_CLASS_PATH."class/data/validator/rules/rule.class.php");

    class FilteredWordsRule extends Rule
    {
		var $_filteredWords;
		
        /**
         * The constructor does nothing.
         */
        function FilteredWordsRule( $filteredWords )
        {
            $this->Rule();

			$this->_filteredWords = $filteredWords;
        }

        /**
		 * validates that none of the words in the given string is part of the given string
         */
        function validate($value)
        {
			$words = explode( " ", $value );
			
			// loop through the words in the string, and for each one of them, see if it's one
			// of the words in the array of "forbidden" words
			foreach( $words as $word ) {
				foreach( $this->_filteredWords as $filteredWord ) {
					if( strcasecmp( $word, $filteredWord ) == 0 )
						return false;
				}
			}
			
			return true;
        }
    }
?>
