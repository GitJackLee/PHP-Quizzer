<?php
//Create connection credentials
$db_host; //put host name
$db_user; //put username
$db_pass; //put password
$db_name; //created database called quizzer. That's what this is using

//Create mysqli object
//When dealing with mysqli, using either the procedural method or object orientated method
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); //Should be in this order

//Handle Errors
if($mysqli->connect_error){
  printf("Connect Failed: %s\n", $mysqli->connect_error);
  exit();
}

?>
