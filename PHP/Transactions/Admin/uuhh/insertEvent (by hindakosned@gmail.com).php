<?php
	
	$root = $_SERVER['DOCUMENT_ROOT'];
	require $root . '/PHP/connect.php';
	
	$query = "INSERT INTO Event
				VALUES
					( '' , '" . $_POST['ev_des'] . "' , '" . $_POST['ev_name'] . "' , '" . $_POST['ev_st_date'] . "' , '" . $_POST['ev_ed_date'] ."' );";
	
	$insert = mysql_query( $query );
	
	if(!$insert)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	header("location: adminHome.php");
	
	mysql_close($con);
?>