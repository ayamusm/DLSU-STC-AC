<?php
	
	$root = $_SERVER['DOCUMENT_ROOT'];
	require $root . '/PHP/connect.php';
	
	//find corresponding event_id of ev_f
	$f_id_query = "SELECT event_id
			 FROM Event
			 WHERE title LIKE '" . $_POST['ev_f'] . "'";
			 
	$get = mysql_query( $f_id_query );
	
	$ev_id = mysql_result( $get, 0 );
	
	if(!$get)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	//insert into entity table Activity
	$query = "INSERT INTO Activity
				VALUES
					( '' , '" . $ev_id . "' , '" . $_POST['act_st_date'] . "' , '" . $_POST['act_ed_date'] ."' , '" . $_POST['act_st_time']. "' , '" . $_POST['act_ed_time'] . "' , '" . $_POST['act_name'] . "' );";
	
	$insert = mysql_query( $query );
	
	if(!$insert)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	//find corresponding act_id of act_name
	$query = "SELECT act_id
			  FROM Activity
			  WHERE title LIKE '" . $_POST['act_name'] . "'";
			  
	$get = mysql_query( $query );
	
	$act_id = mysql_result( $get, 0 );
	
	if(!$get)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	//insert into reference table Belongs
	$query = "INSERT INTO Belongs
				VALUES
					( '" . $ev_id . "' , '" . $act_id . "' );";
					
	$insert = mysql_query( $query );
	
	if(!$insert)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	//insert into reference table Held_at
	$query = "INSERT INTO Held_at
				VALUES
					( '" . $ev_id . "' , '" . $act_id . "' , '" . $_POST['act_ven'] . "' );";

	$insert = mysql_query( $query );
	 
	if(!$insert)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	mysql_close($con);
	
	header("location: index.php");
?>