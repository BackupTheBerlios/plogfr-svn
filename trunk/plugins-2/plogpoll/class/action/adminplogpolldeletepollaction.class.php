<?php
/*
   Plugin - PlogPoll
   Copyright (C) 2005 Matthew Wood
                                                                                   
   This library is free software; you can redistribute it and/or modify it
   under the terms of the GNU Lesser General Public License as published by
   the Free Software Foundation; either version 2.1 of the License, or
   (at your option) any later version.
   */


include_once(PLOG_CLASS_PATH.
    "class/action/admin/blogowneradminaction.class.php");
include_once(PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php");
include_once(PLOG_CLASS_PATH.
    "plugins/plogpoll/class/view/adminplogpolllistview.class.php");
include_once(PLOG_CLASS_PATH.
    "plugins/plogpoll/class/dao/plogpollpolls.class.php");

class AdminPlogPollDeletePollAction extends BlogOwnerAdminAction
{
  function AdminPlogPollDeletePollAction($actionInfo,$request)
  {
    $this->BlogOwnerAdminAction($actionInfo,$request);
    $this->_view = new AdminPlogPollListView($this->_blogInfo);
  }
  function perform()
  {
    $plids = $this->_request->getValue("plid");
    $pollmodel = new PlogPollPolls();

    $emsg = $smsg = "";

    if ($plids != "")
    {
      foreach($plids as $plid)
      {
        if (!$pollmodel->deletePoll($plid,$this->_blogInfo->getId()))
          $emsg .= "delete failed - localize\n";
        else
          $smsg .= "delete succeded - localize\n";
      }
    }
    
    
    $activepoll = $this->_request->getValue('activepoll');
    if (is_numeric($activepoll))
    {
      $poll = $pollmodel->getPollById($activepoll);
      if (!$poll)
        $emsg .= "invalid poll to set active... ignoring\n";
      else if ($poll->getBlogId() != $this->_blogInfo->getId())
        $emsg .= "you do not own this poll...\n";
      else
      {
        $pollmodel->setNewActivePoll($poll->getId(),$this->_blogInfo->getId());
        $smsg .= "changes updated\n";
      }
    }
    
    if ($smsg != "")
      $this->_view->setSuccessMessage($smsg);
    if ($emsg != "")
      $this->_view->setErrorMessage($emsg);

    $this->setCommonData();
    return true;
  }
}

/* vim:sw=2:ai:expandtab:cin:
*/
?>
