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
	
	$query = "INSERT INTO Event( event_id, description, title, start_date, end_date)
				VALUES
					( '' , '" . $_POST['ev_des'] . "' , '" . $_POST['ev_name'] . "' , '" . $_POST['ev_st_date'] . "' , '" . $_POST['ev_ed_date'] ."' );";
	
	$insert = mysql_query( $query );
	
	if(!$insert)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	
	$ins_venue = "SELECT name FROM Venue WHERE name = '" . $_POST['ev_venue']. "' ";
	header("location: adminHome.php");
	mysql_close($con);
?>