<?php
#
# configuration for the default logger. If it is generating
# too much logs for your tatest, set "appender" to "null". This will
# be disabled once the final version is out anyway...
#
$config["default"] = Array( 
    "layout" => "%d %N - [%f:%l (%c:%F)] %m%n", 
    "appender" => "null",
	"file" => "tmp/plog.log",
    "prio" => "debug"
  );
  
#
# this logger is the only one enabled by default
# and it will log all sql queries that generate an error
# to the file tmp/sql_error.log
#
$config["sqlerr"] = Array( 
    "layout" => "%d %N - %m%n", 
    "appender" => "file",
	"file" => "tmp/sql_error.log",
    "prio" => "error"
  );
  
#
# special logger for the trackback.php script, it sends the data to 
# tmp/trackback.log
#
$config["trackback"] = Array(
    "layout" => "%d %N - [%f:%l (%c:%F)] %m%n", 
    "appender" => "null",
	"file" => "tmp/trackback.log",
    "prio" => "debug"
  );

?>
