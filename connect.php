<?php
$host = "localhost";
$username = "root";
$password = "";
$con = mysql_connect($host,$username,$password);
$my_db = "dlsustcac";
$status = 0;

mysql_select_db($my_db, $con);


if (!$con)
  {
  
  die();
  $status = 1;
  }
?>