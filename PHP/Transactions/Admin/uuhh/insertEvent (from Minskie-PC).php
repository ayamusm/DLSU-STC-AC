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
	
	
	$get_ven = "SELECT name FROM Venue WHERE name = '" . $_POST['ev_venue']. "'"; //venue name
	
	$get_evid = "SELECT event_id FROM Event WHERE title = '" . $_POST['ev_name'] . "'"; //event id
	
	$ven = mysql_query( $get_ven );
	
	$ev = mysql_query( $get_evid );
	
	//retrieve values
	$venue = mysql_get_result( $ven, 0, 'name' );
	$event = mysql_get_result( $ev, 0, 'event_id' );
	
	$ins_venue = "INSERT INTO Held_At
					VALUES
						( " . $event . ", '' , " . $venue . " )";
	
	header("location: adminHome.php");
	
	mysql_close($con);
?>