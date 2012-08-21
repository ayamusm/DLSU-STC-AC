<?php
$host = "sql210.xtreemhost.com";
$username = "xth_10906285";
$password = "password";
$con = mysql_connect($host,$username,$password);
$my_db = "xth_10906285_dlsu_ac";
$status = 0;

mysql_select_db($my_db, $con);


if (!$con)
  {
  
  die();
  $status = 1;
  }
?>