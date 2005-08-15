<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/timestamp.class.php" );

    /**
     * Constants that define the block type attribute. The first one indicates a
     * complete block to even access any of the pages while the second blocks the
     * user from posting comments in the site.
     */
    define( "BLOCK_ALL", 0 );
    define( "BLOCK_ACCESS", 1 );
    define( "BLOCK_COMMENT_POSTING", 2 );

    /**
     * This object can represent either a blacklist or a whitelist, depending on
     * the value of the $_blockList field.
     */
    define( "BLOCK_BLACKLIST", 1 );
    define( "BLOCK_WHITELIST", 2 );

    define( "GLOBALLY_BLOCKED_HOST", 0 );

    /**
     * Represents a record from the plog_blocked_hosts table.
     */
    class BlockedHost extends Object 
	{

    	var $_id;
        var $_host;
        var $_mask;
        var $_reason;
        var $_date;
        var $_blogId;
        var $_blockType;
        var $_blockList;

        function BlockedHost( $host, $mask, $reason, $date, $blogId, $blockType, $blockList, $id = 1 )
        {
        	$this->Object();

            $this->_host = $host;
            $this->_mask = $mask;
            $this->_reason = $reason;
            $this->_date = $date;
            $this->_blogId = $blogId;
            $this->_blockType = $blockType;
            $this->_blockList = $blockList;
        	$this->_id = $id;
        }

        /**
         * Returns only the string representing the ip, without the mask
         */
        function getHost()
        {
        	return $this->_host;
        }

        function getMask()
        {
        	return $this->_mask;
        }

        function getCidrAddress()
        {
        	return $this->_host."/".$this->_mask;
        }

        function getId()
        {
        	return $this->_id;
        }

        function getReason()
        {
        	return $this->_reason;
        }

        function getBlogId()
        {
        	return $this->_blogId;
        }

        function getDate()
        {
        	return $this->_date;
        }

        function getDateObject()
        {
        	return new Timestamp( $this->_date);
        }

        /**
         * Returns wether this block affects only from posting or
         * from accessing the site completely.
         */
        function getType()
        {
        	return $this->_blockType;
        }

        /**
         * Returns wether this is a blacklist or a whitelist
         */
        function getBlockList()
        {
        	return $this->_blockList;
        }

        /**
         * returns true wether this host was set up as a globally blocked
         * host (that is, it is blocked in all blogs)
         *
         * @return True if the host was globally blocked
         */
        function isGlobal()
        {
        	return( $this->_blogId == GLOBALLY_BLOCKED_HOST);
        }

        function setReason( $reason )
        {
        	$this->_reason = $reason;
        }

        function setMask( $mask )
        {
        	$this->_mask = $mask;
        }

        function setType( $type )
        {
        	$this->_blockType = $type;
        }

        function setHost( $host )
        {
        	$this->_host = $host;
        }
    }
?>
