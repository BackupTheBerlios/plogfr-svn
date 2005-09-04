<?php
include_once('class/database/adodb/adodb.inc.php');
include_once('config/config.properties.php');
session_start(); # session variables required for monitoring
$conn = ADONewConnection("mysql");
$conn->Connect($config["db_host"],$config["db_username"],$config["db_password"], $config["db_database"]);
$perf =& NewPerfMonitor($conn);
$perf->UI($pollsecs=3600);
?>