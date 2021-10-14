<?php
/////////////////////////
$database   =  "abecode_chuchos";
$username   =  "abecode_chuchos";
$password   =  "Warewolf15";
/////////////////////////

$link  = mysqli_connect('mysql3001.mochahost.com', $username, $password, $database);
//$db    = mysqli_select_db($link);
mysqli_query("SET NAMES 'utf8'");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
