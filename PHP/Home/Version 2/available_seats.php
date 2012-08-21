    <!DOCTYPE HTML>
    <html>
     
    <head>
    
	<?php require '../PHP/connect.php'; ?>
	
    <title>Available Seats For </title>
     
    <link rel="stylesheet" type="text/css" href="../CSS/main.css" />
     
    </head>
     
    <body>
     
    <FORM>
    <INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;">
    </FORM>
     
    <table>
    
    <?php
    
    $query =
    "SELECT VEN_CAP.name venue, VEN_CAP.v_cap vcap, VEN_CAP.v_cap - CNT.a_hcnt avail 
	 FROM
	 (
		SELECT V.name name, V.capacity v_cap
		FROM Venue V JOIN Held_at H
		ON V.name = H.name
		WHERE H.act_id = 1
	 ) AS VEN_CAP
	 
	,
	 
	 (
		SELECT DISTINCT COUNT( HCNT.id ) a_hcnt
		FROM
		(
			/* Students who attended */
			SELECT DISTINCT S.student_id id
			FROM Activity A1, Student S
			WHERE A1.act_id = 1
				AND ( A1.act_id, S.student_id )
					IN
						(
							SELECT DISTINCT act_id, student_id
							FROM Stud_Attends
						)
			 
			UNION
			 
			/* Professors who attended */
			SELECT DISTINCT P.user_id id
			FROM Activity A2, Professor P
			WHERE A2.act_id = 1
				AND ( A2.act_id, P.user_id )
					IN
						(
							SELECT DISTINCT act_id, user_id
							FROM Prof_Attends
						)
		) AS HCNT
	 ) AS CNT";
     
    $equery =
		"SELECT DISTINCT E.title title
		FROM Event E JOIN Belongs B
			ON E.event_id = B.event_id
		WHERE B.act_id = 1
		";
     
	$aquery =
		"SELECT title ac_name
		 FROM Activity
		 WHERE act_id = 1
		";
	 
    //QUERY FOR
     
    $result = mysql_query($query); //available seats
     
    if (!$result)
    {
    die("Query to show field(s) from table(s) failed." . " " . mysql_error());
    }
     
    $event = mysql_query($equery); //event name
     
    if(!$event)
    {
    die("Query cannot be processed." . " " . mysql_error());
    }
	
	$activity = mysql_query($aquery); //activity name
	
	if(!$activity)
	{
	die("Query cannot be processed." . " " . mysql_error());
	}
     
    $event_name = mysql_result( $event, 0, "title" );
    $act_name = mysql_result( $activity, 0, "ac_name" );
	$venue = mysql_result( $result, 0, "venue" );
	$av_seats = mysql_result( $result, 0, "avail" );
	$capacity = mysql_result( $result, 0, "vcap" );
    
	?>
	
	<tr>
		<th class="title" colspan="2">
			<?php echo $event_name; ?>
			:
			<?php echo $act_name; ?>
		</th>
	</tr>
	
	<tr>
		<th> Venue : </th>
		<th> Available Seats : </th>
	</tr>
	
	<tr>
		<td> <?php echo $venue; ?> </td>
		<td align="center">
			<a href="../version2/expectedattendees.php">
				<?php echo $av_seats; ?>
				/
				<?php echo $capacity; ?>
			</a>
		</td>
	</tr>
	
	<?php
	 
    mysql_close($con);
     
    ?>
     
    </table>
     
    </body>
     
    </html>