<?php
# Connection with mysql server
$dbConn = mysql_connect("localhost","root","");

if(!$dbConn){
	die('Could not connect:'.mysql_error());
}

# Connection with DB
$db_selected = mysql_select_db('job_portal',$dbConn);

if(!$db_selected){
	die ('Could not select database :'.mysql_error());
}
?>