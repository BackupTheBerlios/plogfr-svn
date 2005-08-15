<?php
/*
   Plugin - PlogPoll
   Copyright (C) 2005 Matthew Wood
                                                                                   
   This library is free software; you can redistribute it and/or modify it
   under the terms of the GNU Lesser General Public License as published by
   the Free Software Foundation; either version 2.1 of the License, or
   (at your option) any later version.
   */


include_once(PLOG_CLASS_PATH."class/action/blogaction.class.php");
include_once(PLOG_CLASS_PATH."class/view/plugintemplatedview.class.php");
include_once(PLOG_CLASS_PATH."class/view/blogview.class.php");

include_once(PLOG_CLASS_PATH.
    "plugins/plogpoll/class/dao/plogpollpolls.class.php");

class PlogPollRegisterVoteAction extends BlogAction
{
  var $_prevpage;
  
  function PlogPollRegisterVoteAction($actionInfo,$request)
  {
    $this->BlogAction($actionInfo,$request);
    $this->_prevpage = $this->_request->getValue("disppage");
  }
  function perform()
  {
    $vote = split("-",$this->_request->getValue("vote"));
    $pollid = $vote[0];
    $voteid = $vote[1];
    if (!is_numeric($pollid) || !is_numeric($voteid))
    {
      $this->_returnToPrevious();
      return false;
    }

    $pollmodel = new PlogPollPolls();
    if (!$pollmodel->registerVote($pollid,$voteid))
    {
      $this->_returnToPrevious();
      return false;
    }
    else
    {
      $this->_returnToPrevious();
      return true;
    }
  }
  function _returnToPrevious()
  {
    $redir = urldecode(base64_decode($this->_prevpage));
    if (strpos($redir,".") == FALSE)
      header("Location: ". $redir);
    else
    {
      echo "caught an attempted xss attempt in plogpoll";
      die();
    }
  }
}


/* vim:sw=2:cin:expandtab:ai:
   */
?>
