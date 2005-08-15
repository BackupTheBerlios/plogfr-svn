<?php
/*
Plugin - PlogPoll
Copyright (C) 2005 Matthew Wood
                                                                                
This library is free software; you can redistribute it and/or modify it
under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation; either version 2.1 of the License, or
(at your option) any later version.
*/


include_once(PLOG_CLASS_PATH."class/plugin/pluginbase.class.php");
include_once(PLOG_CLASS_PATH."plugins/plogpoll/class/dao/plogpollpolls.class.php");
include_once(PLOG_CLASS_PATH."class/config/config.class.php");

class PluginPlogPoll extends PluginBase
{
  function PluginPlogPoll()
  {
    $this->PluginBase();

    /* setup info */
    $this->id = "PlogPoll";
    $this->desc = "Allows plog admins to include polls in their pLog";
    $this->author = "woodzy";
    $this->locale = Array();

    /* setup the admin interface information */
    $this->addMenuEntry("/menu/Manage","PlogPoll","");
    $this->addMenuEntry(
        "/menu/Manage/PlogPoll","ViewPollList","?op=plogpollViewList");
    $this->addMenuEntry(
        "/menu/Manage/PlogPoll","NewPoll","?op=plogpollNewPoll");

    /* register the actions needed */
    $this->registerAdminAction(
        "plogpollViewList","AdminPlogPollListViewAction");
    $this->registerAdminAction(
        "plogpollAddPoll","AdminPlogPollAddPollAction");
    $this->registerAdminAction(
        "plogpollDeletePoll","AdminPlogPollDeletePollAction");
    $this->registerAdminAction(
        "plogpollNewPoll","AdminPlogPollNewPollViewAction");

    $this->registerBlogAction(
        "plogpollRegisterVote","PlogPollRegisterVoteAction");

    /* seems to be a good idea... 
     * !!lifted from other plugins!! 
     */
    $this->_verifyTable();
  }
  
  /*@private*/
  function _verifyTable()
  {
    $fields = "
      id I(11) NOTNULL PRIMARY AUTOINCREMENT,
      blogId I(11) NOTNULL KEY,
      active C(1) NOTNULL KEY,
      subject TEXT NOTNULL,
      responses TEXT NOTNULL,
      responsedata TEXT NOTNULL,
      dateadded I(11) NOTNULL";

    $fields2 = "
      id I(11) NOTNULL KEY,
      ip I8 NOTNULL KEY,
      date I(11) NOTNULL KEY";

    $db =& Db::getDb();
    $dbPrefix = Db::getPrefix();

    $tableName = $dbPrefix."plogpoll_polls";
    $tableName2 = $dbPrefix."plogpoll_voterips";

    $dict = NewDataDictionary($db);
    
    $sqlAry = $dict->ChangeTableSQL($tableName,$fields);
    $result = $dict->ExecuteSQLArray($sqlAry);
    if (!$result)
      die("There was an error creating/updating plogpoll plugin tables!");

    $sqlAry = $dict->ChangeTableSQL($tableName2,$fields2);
    $result = $dict->ExecuteSQLArray($sqlAry);
    if (!$result)
      die("There was an error creating/updating plogpoll plugin tables!");
  }
  function getActivePoll($blogId)
  {
    $pmod = new PlogPollPolls();
    $poll = $pmod->getActivePoll($blogId);
    if (!$poll) /*if no polls active*/
      return false;
    if ($pmod->hasVoted($poll->getId())) /*if ip has voted ignore request*/
      return false;
    
    return $poll; /*no errors*/
  }
  function requestURI()
  {
    return base64_encode(
        $GLOBALS["_SERVER"]["REQUEST_URI"]);
  }
  function generateActivePollHTML($blogId)
  {
    $pmod = new PlogPollPolls();
    $poll = $pmod->getActivePoll($blogId);
    if (!$poll)
      return "<table id='pollbody'><tr><th>No Polls Currently Active</th></tr></table>";
    
    $table = "";
    
    if ($pmod->hasVoted($poll->getId()))
    {
      $width = 100;
      $height = 15;
      $totalVotes = 0;
      
      foreach ($poll->getResponseData() as $num)
        $totalVotes+=$num;

      $percentage = array();

      foreach ($poll->getResponseData() as $votes)
        $percentage[] = (double)$votes/(double)$totalVotes;

      $table .= "<table id='pollbody'>";
      $table .= "<tr><th>". $poll->getSubject() ."</th></tr>";
      
      $responses = $poll->getResponses();
      for ($i = 0; $i < count($responses); $i++)
      {
        $table .= 
          "<tr>
            <td>".
              $responses[$i] 
              ."<div style='width:". 
                               (int)($percentage[$i]*$width) ."px;
                            height:".$height."px;background:darkblue;'>
                    &nbsp;". (int)($percentage[$i]*$width) ."%</div>
            </td>
          </tr>";
      }
      $table .= "</table>";
    }
    else
    {
      $config =& Config::getConfig();
      $table .= "<form method='post' action='". $config->getValue('base_url') ."/?op=plogpollRegisterVote'>\n";
      $table .= "<table id='pollbody'>";
      $table .= "<tr><th>". $poll->getSubject() ."</th></tr>";

      $responses = $poll->getResponses();
      for ($i = 0; $i < count($responses); $i++)
      {
        $table.= "<tr><td> <input type='radio' name='vote' ".
          "value='". $poll->getId() ."-". $i ."' />\n". $responses[$i] .
          "</td></tr>\n";
      }
      $table .= "<tr><td>
                 <input id='pollsubmit' type='submit' value='Vote' />
                 </td></tr></table>
                 <input type='hidden' name='disppage' 
                 value='". $this->requestURI() ."' /></form>";
    }
    return $table;
  }
}

/* vim:cin:sw=2:expandtab:ai:
*/
?>
