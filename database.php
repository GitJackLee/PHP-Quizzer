<?php
//Create connection credentials
$db_host = "localhost";
$db_user = "JackLee";
$db_pass = "mypassword";
$db_name = "quizzer"; //created database called quizzer. That's what this is using

//Create mysqli object
//When dealing with mysqli, using either the procedural method or object orientated method
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); //Should be in this order

//Handle Errors
if($mysqli->connect_error){
  printf("Connect Failed: %s\n", $mysqli->connect_error);
  exit();
}

?>
