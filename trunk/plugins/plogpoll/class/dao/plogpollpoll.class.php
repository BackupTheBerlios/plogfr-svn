<?php
/*
   Plugin - PlogPoll
   Copyright (C) 2005 Matthew Wood
                                                                                   
   This library is free software; you can redistribute it and/or modify it
   under the terms of the GNU Lesser General Public License as published by
   the Free Software Foundation; either version 2.1 of the License, or
   (at your option) any later version.
   */


include_once(PLOG_CLASS_PATH."class/object/object.class.php");

class PlogPollPoll extends Object
{
  var $_id;
  var $_subject;
  var $_responses;
  var $_responsedata;
  var $_dateadded;
  var $_active;
  var $_blogId;

  function PlogPollPoll(
      $id,$subject,$responses,$responsedata,$dateadded,$active,$blogid)
  {
    $this->Object();
    $this->_subject = $subject;
    $this->_responses = $responses;
    $this->_responsedata = $responsedata;
    $this->_dateadded = $dateadded;
    $this->_id = $id;
    $this->_active = $active;
    $this->_blogId = $blogid;
  }

  function getSubject() {return $this->_subject;}
  function getResponses() {return $this->_responses;}
  function getResponseData() {return $this->_responsedata;}
  function getDateAdded() {return $this->_dateadded;}
  function getId() {return $this->_id;}
  function getActive() {return $this->_active;}
  function getBlogId() {return $this->_blogId;}
  
  function incrementVotes($responseId)
  {
    if ($responseId < count($this->_responsedata))
    {
      $this->_responsedata[$responseId]++;
      return true;
    }
    else
      return false;
  }
}

/* vim:ai:cin:sw=2:expandtab:
*/
?>
