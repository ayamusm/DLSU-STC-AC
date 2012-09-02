<?php

	$root = $_SERVER['DOCUMENT_ROOT'];
	require $root . '/PHP/connect.php';
	
	$query = sprintf("UPDATE Event
					  SET title = '%s', description = '%s', start_date = '%s', end_date = '%s'
					  WHERE event_id = '%s'",
				$_POST['ev_name'],
				$_POST['ev_desc'],
				$_POST['ev_st_date'],
				$_POST['ev_ed_date'],
				$_POST['ev_id']
			);
			
	$update = mysl_query( $query );
	
	if(!$update)
	{
		die("Query could not be processed." . mysql_error);
	}
	
	$query = sprintf("UPDATE HostedBy
					  SET organizer_id = '%s'
					  WHERE event_id = '%s'",
				$_POST['orgid']
				$_POST['ev_id']
			);
	
	
	header("location: adminHome.php");
	
	mysql_close($con);
?>