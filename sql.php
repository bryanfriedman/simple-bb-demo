<?php

# Set these parameters for database connection
$db_host = "70.42.161.35";
$db_user = "bb-user"; 
$db_pass = "bb-password";
$db_name = "simple-bb-demo";
$db_port = "80";


ini_set("display_errors", true);
error_reporting(E_ALL);

$con=mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>