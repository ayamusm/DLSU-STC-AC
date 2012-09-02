<?php
	
	$root = $_SERVER['DOCUMENT_ROOT'];
	require $root . '/PHP/connect.php';
	
	//Event
	$query = "INSERT INTO Event
				VALUES
					( '' , '" . $_POST['ev_des'] . "' , '" . $_POST['ev_name'] . "' , '" . $_POST['ev_st_date'] . "' , '" . $_POST['ev_ed_date'] ."' );";
	
	$insert = mysql_query( $query );
	
	if(!$insert)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	//checkbox array
	$check_orgs = $_POST['orgs'];
	$cmax = count($check_orgs); //# of checked in checkbox
	
	//get org id & name
	$query = "SELECT *
			  FROM Organizer";
			  
	$get = mysql_query( $query );
	
	if(!$get)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}	
	
	$max = mysql_num_rows($get);	//total orgs
	
	for( $o = 0; $o < $max; $o++ )	//save query result into master array of orgs
	{
		$_id[$o] = mysql_result( $get, $o, 'organizer_id' );
		$_nam[$o] = mysql_result( $get, $o, 'organizer_name' );
	}
	
	for( $a = 0, $i = 0; $a < $cmax; $a++ )	//filter out unchecked, save checked to array
	{
		for( $b = 0; $b < $max; $b++ )		//iterate $org[]
		{
			if( $check_orgs[$a] == $_nam[$b] )	//if checked
			{
				$insert_org[$i] = $_id[$b];	//save for inserting
				$i++;
			}//if statement
		}
	}//outer loop
	
	//get event_id
	$query = "SELECT event_id
			  FROM Event
			  WHERE title LIKE '" . $_POST['ev_name'] . "'";
			 
	$get = mysql_query( $query );
	
	if(!$get)
	{
		die( 'Query could not be processed.' . mysql_error() );
	}
	
	$event = mysql_result( $get, 0 ); //event id
	
	//Hostedby
		$query = "INSERT INTO Hostedby
					VALUES";
					
		for( $x = 0; $x < $cmax; $x++ )
		{
			$query = $query . "( '" . $insert_org[$x] . "' , " . $event . " )";
			if( $x < ($cmax - 1) )
			{
				$query = $query . ",";
			}
			else
			{
				$query = $query . ";";
			}
		}				
		
		$insert = mysql_query( $query );
			 
		if( !$insert )
		{
			die( '#' . $x . ' Query could not be processed.' . mysql_error() );
		}
	
	header("location: adminHome.php");
	
	mysql_close($con);
?>