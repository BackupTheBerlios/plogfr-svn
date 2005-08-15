<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );

    /**
     * Represents a record form the plog_filtered_content table
     *
     * The key of this class is the regexp that will be used to match
     * words against it.
     */
    class FilteredContent extends Object 
	{

    	var $_regExp;
        var $_blogId;
        var $_reason;
        var $_date;
        var $_id;

        /**
         * Creates a new FilteredContent object
         *
         * @param regExp the regular expression
         * @param blogId The blog identifier to which this rule belongs
         * @param reason Why this rule has been set-up
         * @param date When this rule was added
         * @param id Identifier of this rule
         */
    	function FilteredContent( $regExp, $blogId, $reason, $date = null, $id = -1 )
        {
        	$this->Object();

        	$this->_regExp = $regExp;
            $this->_blogId = $blogId;
            $this->_reason = $reason;
			if( $date == null ) {
				$t = new Timestamp();
				$this->_date = $t->getTimestamp();
			}
			else
				$this->_date   = $date;
            $this->_id     = $id;
        }

        function getId()
        {
        	return $this->_id;
        }

        /**
         * Returns the regular expression that was assigned to this
         * rule, making sure that it looks like a valid regular expression
         *
         * @param unfiltered Use this parameter if you'd like to get
         * the expression as it is in the database, without checking if it's
         * a valid regular expression.
         * @return Returns a string representing the regular expression
         */
        function getRegExp( $unfiltered = false )
        {
        	$regExp = $this->_regExp;

            // check if it's a valid regexp, otherwise make it
            // compliant
            if( !$unfiltered ) {
            	if( !preg_match("/^\/.+\/i?x?g?$/", $regExp ))
            		$regExp = "/$regExp/i";
            }

            return $regExp;
        }

        /**
         * Returns the blog identifier to which this rule belongs
         *
         * @return The blog identifier
         */
        function getBlogId()
        {
        	return $this->_blogId;
        }

        /**
         * Returns why this content is blocked
         *
         * @return A string
         */
        function getReason()
        {
        	return $this->_reason;
        }

        /**
         * Returns when this rule was added.
         *
         * @returns The date, as it is in the database
         */
        function getDate()
        {
        	return $this->_date;
        }

        /**
         * Returns a Timestamp object representing the date
         *
         * @return A Timestamp object
         */
        function getDateObject()
        {
        	return new Timestamp( $this->_date );
        }

        /**
         * Returns true if the content is set to be globally filtered
         *
         * @return True if it's a globally filtered content or false otherwise.
         */
        function isGlobal()
        {
        	return( $this->getBlogId() == 0 );
        }

        /**
         * Sets a new reason.
         *
         * @param reason The new reason
         */
        function setReason( $reason )
        {
        	$this->_reason = $reason;
        }

        /**
         * Sets a new regular expression
         *
         * @param regExp The new regular expression
         */
        function setRegExp( $regExp )
        {
        	$this->_regExp = $regExp;
        }
    }
?>
