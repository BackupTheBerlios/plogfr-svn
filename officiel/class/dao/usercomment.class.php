<?php

	include_once( PLOG_CLASS_PATH."class/database/dbobject.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/timestamp.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/userinfo.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/article.class.php" );

    /**
     * This class represents a comment made by a casual user to an article. Please use the getter methods
     * exposed here to get all the information regarding this comment, such as the name of the user who
     * posted it, the email address and even the ip of the machine from which the comment was posted.
	 *
	 * \ingroup DAO
     */
	class UserComment extends DbObject 
	{

    	/**
         * @private
         */
		var $_id;

       /**
         * @private
         */
		var $_artid;

    	/**
         * @private
         */
		var $_userName;

    	/**
         * @private
         */
		var $_userEmail;

    	/**
         * @private
         */
		var $_userUrl;

    	/**
         * @private
         */
		var $_topic;

    	/**
         * @private
         */
		var $_text;

    	/**
         * @private
         */
		var $_date;

    	/**
         * @private
         */
        var $_parentid;

    	/**
         * @private
         */
        var $_clientIp;

    	/**
         * @private
         */
		var $_timeStamp;
    	/**
         * @private
         */
		var $_postInfo;

        /**
         * @private
         */
        var $_spamRate;

        /**
         * @private
         */
        var $_status;

        /**
         * Creates a new user comment.
         */
		function UserComment( $artid, $parentid, $topic, $text, $date = null, $userName = "", $userEmail = "", $userUrl = "", $clientIp = "0.0.0.0", $spamRate = 0, $status = COMMENT_STATUS_NONSPAM, $id = -1 )
		{
			$this->Object();

			$this->_topic = $topic;
			$this->_text  = $text;
			$this->_artid = $artid;
            $this->_parentid = $parentid;

			$this->_userName  = $userName;
			$this->_userEmail = $userEmail;
			$this->setUserUrl( $userUrl ); 

            $this->_clientIp  = $clientIp;

			$this->_id = $id;

            $this->_spamRate = $spamRate;
            $this->_status = $status;

            if( $date == null ) {
            	$t = new Timestamp();
                $date = $t->getTimestamp();
            }

			$this->setDate( $date );
			
			// by default this is not initialized, it will be up to the DAO class to
			// load this or not... so if I were you, I wouldn't really trust that this has been loaded :)
			// also, it is not necessary most of the times!
			$this->_article = null;
		}

        /**
         * Returns the identifier assigned to this comment in the database.
         *
         * @return Returns an integer value representing the identifier.
         */
		function getId()
		{
			return $this->_id;
		}

        /**
         * Sets a new identifier.
         * @private
         */
		function setId( $newid )
		{
			$this->_id = $newid;
		}

        /**
         * Returns the article identifier to which this comment belongs.
         *
         * @return An integer value representing the article identifier.
         */
		function getArticleId()
		{
			return $this->_artid;
		}

        /**
         * Sets the article identifier.
         * @private
         */
		function setArticleId( $newartid )
		{
			$this->_artid = $newartid;
		}

        /**
         * Returns the name of the user who posted this comment.
         *
         * @return A string representing the name of the user, if any.
         */
		function getUserName()
		{
			return $this->_userName;
		}

        /**
         * Sets the username.
         * @private
         */
		function setUserName( $userName )
		{
			$this->_userName = $userName;
		}

        /**
         * Gets the email address of the user who posted this message, as it was posted by him or her, and if any.
         *
         * @return An string with the email address of the user.
         */
		function getUserEmail()
		{
			return $this->_userEmail;
		}

        /**
         * Sets the email address.
         * @private
         */
		function setUserEmail( $userEmail )
		{
			$this->_userEmail = $userEmail;
		}

        /**
         * Returns the address specified by the user in the post, if any.
         *
         * @return The url as specified by the user.
         */
		function getUserUrl()
		{
			return $this->_userUrl;
		}

        /**
         * Sets the user url.
         * @private
         */
		function setUserUrl( $userUrl )
		{
			// fix from yousung
			if ( $userUrl != null && eregi("http", $userUrl) == null )
				$userUrl = "http://".$userUrl;

            		$this->_userUrl   = $userUrl;
		}

        /**
         * Returns the text of the comment.
         *
         * @return A string with the text of the comment.
         */
		function getText()
		{
			return $this->_text;
		}

        /**
         * Sets the text of the comment.
         * @private
         */
		function setText( $newtext )
		{
			$this->_text = $newtext;
		}

        /**
         * Returns the topic of the comment.
         *
         * @return A string withthe topic of the comment.
         */
		function getTopic()
		{
			return $this->_topic;
		}

        /**
         * Sets the topic of the comment.
         * @private
         */
		function setTopic( $newtopic )
		{
			$this->_topic = $newtopic;
		}

        /**
         * Returns the 14-digit date as specified by the database.
         *
         * @return A 14-digit date, straight from the database.
         */
		function getDate()
		{
			return $this->_date;
		}

        /**
         * Sets a new date
         * @private
         */
		function setDate( $newdate )
		{
			$this->_date = $newdate;

			// update the Timestamp object so that we can have more information
			$this->_timeStamp = new Timestamp( $this->_date );
		}

        /**
         * Returns a Timestamp object representing the date. The Timestamp class offers commodity
         * methods to access only some parts of the date, and to format it according to our tastes.
         *
         * @preturn A Timestamp object representing the date.
         */
		function getDateObject()
		{
			return $this->_timeStamp;
		}

        /**
         * Returns the identifier of the comment to which this one was replying.
         *
         * @return The identifier of the comment to which this one was replying, or 0 if it was not replying
         * to any.
         */
        function getParentId()
        {
        	return $this->_parentid;
        }

        /**
         * Sets the parent id.
         * @private
         */
        function setParentId( $parentId )
        {
        	return $this->_parentid;
        }

        /**
         * Alias for the function getDateObject
         *
         * @see getDateObject
         */
        function getTimestamp()
        {
        	return $this->getDateObject();
        }

        /**
         * Returns an string representing the ip of the machine from which this comment
         * was posted. It is not very reliable since that ip could have been through many
         * proxies.
         *
         * @return A string representing the ip address.
         */
        function getClientIp()
        {
        	return $this->_clientIp;
        }

        /**
         * Sets the ip address.
         * @private
         */
        function setClientIp( $clientIp )
        {
        	$this->_clientIp = $clientIp;
        }

        function setSpamRate( $spamRate )
        {
        	$this->_spamRate = $spamRate;
        }

        function getSpamRate()
        {
        	return $this->_spamRate;
        }

        function setStatus( $status )
        {
        	$this->_status = $status;
        }

        function getStatus()
        {
        	return $this->_status;
        }
		
		/**
		 * sets the Article object to which this comment belongs. WARNING: this value
		 * <b>IS NOT ALWAYS</b> initialized!!! The most common situation is that it is not initialized
		 *
		 * @param article An Article object
		 * @return Always true
		 */ 
		function setArticle( $article )
		{
			$this->_article = $article;
			
			return true;
		}
		
		/**
		 * returns the Article to which this comment belongs, or NULL if it has not been loaded
		 *
		 * @return An Article object or NULL if it has not been initialized
		 */
		function getArticle()
		{
			return $this->_article;
		}

	}
?>
