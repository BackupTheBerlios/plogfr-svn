<?php
/*
   Plugin - PlogPoll
   Copyright (C) 2005 Matthew Wood
                                                                                   
   This library is free software; you can redistribute it and/or modify it
   under the terms of the GNU Lesser General Public License as published by
   the Free Software Foundation; either version 2.1 of the License, or
   (at your option) any later version.
   */


include_once( PLOG_CLASS_PATH."class/dao/model.class.php");
include_once(PLOG_CLASS_PATH.
    "plugins/plogpoll/class/dao/plogpollpoll.class.php");

class PlogPollPolls extends Model
{
  function PlogPollPolls()
  {
    $this->Model();
  }

  function addPoll(&$poll)
  {
    $prefix = $this->getPrefix();
    $resps = array();
    foreach($poll->getResponses() as $response)
      if (strlen($response) > 1)
        $resps[] = $response;
    
    $q = "insert into {$prefix}plogpoll_polls ".
      "(subject,responses,responsedata,dateadded,active,blogId) values (".
      "'". Db::qstr($poll->getSubject()) ."',".
      "'". Db::qstr(serialize($resps)) ."',".
      "'". Db::qstr(serialize($poll->getResponseData())) ."',".
      "'". time() ."',".
      "'N','". Db::qstr($poll->getBlogId()) ."')";
    return $this->Execute($q);
  }

  function getPollById($id)
  {
    $prefix = $this->getPrefix();
    $q = "select * from {$prefix}plogpoll_polls ".
      "where id='". Db::qstr($id) ."'";
    $res = $this->Execute($q);
    
    if (!$res)
      return false;

    $row = $res->FetchRow();
    return $this->_poll_from_sqlrow($row);
  }

  function getAllPolls($blogId)
  {
    $prefix = $this->getPrefix();
    $q = "select * from {$prefix}plogpoll_polls ". 
      "where blogId='". Db::qstr($blogId) ."'";
    $result = $this->Execute($q);
    $polls = array();

    if (!$result)
      return false;

    while ($row = $result->FetchRow())
      $polls[] = $this->_poll_from_sqlrow($row);

    return $polls;
  }

  function hasVoted($pollid)
  {
    $lip = ip2long($GLOBALS['_SERVER']['REMOTE_ADDR']);
    $prefix = $this->getPrefix();
    $q = "select id from {$prefix}plogpoll_voterips ".
      "where ip='". Db::qstr($lip) ."' ".
      "and id='". Db::qstr($pollid) ."'";
    $res = $this->Execute($q);
    $row = $res->FetchRow();

    if (!$row) return false;
    else return true;
  }

  function registerVote($pollid,$responseid)
  {
    $lip = ip2long($GLOBALS['_SERVER']['REMOTE_ADDR']);
    $prefix = $this->getPrefix();
    $q = "select id,date from {$prefix}plogpoll_voterips ".
      "where ip='". Db::qstr($lip) ."' and ".
      "id='". Db::qstr($pollid) ."'";
    $res = $this->Execute($q);
    $row = $res->FetchRow();
    if (!$res || !$row)
    {
      $q = "select * from {$prefix}plogpoll_polls ".
        "where id='". Db::qstr($pollid) ."'";
      $res = $this->Execute($q);
      if (!$res)
        return false;
      
      $poll = $this->_poll_from_sqlrow($res->FetchRow());
      $poll->incrementVotes($responseid);
      
      $q = "insert into {$prefix}plogpoll_voterips ".
        " (id,ip,date) values (".
        "'". Db::qstr($pollid) ."',".
        "'". Db::qstr($lip) ."',".
        "'". Db::qstr(time()). "')";
      $this->Execute($q);
      
      return $this->updatePoll($poll);
    }
    else
    {
      echo "<h1> b2 </h1>";
      return false;
    }
  }

  function deletePoll($pollid,$blogId)
  {
    if (!is_numeric($pollid) && !(($pollid = intval($pollid)) >= 0))
      return false;

    $prefix = $this->getPrefix();

    $q = "select id from {$prefix}plogpoll_polls where ".
      "id='". Db::qstr($pollid) . "'". 
      " and blogId='". Db::qstr($blogId) ."'";
    $res = $this->Execute($q);
    
    if (!($res->FetchRow()))
      return false;

    $q = "delete from {$prefix}plogpoll_polls where id=". $pollid;
    $this->Execute($q);
    $q = "delete from {$prefix}plogpoll_voterips where id=". $pollid;
    $this->Execute($q);
    
    return true;
  }

  function getActivePoll($blogId)
  {
    $prefix = $this->getPrefix();
    $q = "select * from {$prefix}plogpoll_polls ".
      "where active='Y' and blogId='". Db::qstr($blogId) ."'".
      " limit 1";
    $res = $this->Execute($q);

    if (!$res)
      return false;
    
    return $this->_poll_from_sqlrow($res->FetchRow());
  }

  function setNewActivePoll($pid,$bid)
  {
    $prefix = $this->getPrefix();
    $q = "update {$prefix}plogpoll_polls ".
      "set active='N' where blogid='". Db::qstr($bid) ."'";
    $this->Execute($q);
    $q = "update {$prefix}plogpoll_polls ".
      "set active='Y' where id='". Db::qstr($pid) ."'";
    $this->Execute($q);
  }

  function updatePoll(&$poll)
  {
    $prefix = $this->getPrefix();
    
    $q = "update ${prefix}plogpoll_polls ".
      "set subject='". Db::qstr($poll->getSubject()) ."',".
           "responses='". Db::qstr(serialize($poll->getResponses())) ."',".
           "responsedata='". 
               Db::qstr(serialize($poll->getResponseData())) . "'".
           " where id=". $poll->getId();

    return $this->Execute($q);
  }

  function _poll_from_sqlrow(&$row)
  {
    if (!$row)
      return false;
    
    $poll = new PlogPollPoll( $row['id'], $row['subject'],
                              unserialize($row['responses']),
                              unserialize($row['responsedata']),
                              $row['dateadded'],
                              $row['active'],
                              $row['blogId']);
    return $poll;
  }
}

/* vim:ai:cin:sw=2:expandtab:
*/
?>
