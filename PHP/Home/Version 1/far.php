<!DOCTYPE HTML>
<html>

<head>

	<title>Full Attendance Report</title>
	
	<link rel="stylesheet" type="text/css" href="../CSS/main.css" />
	
</head>

<body>

	<FORM>
		<INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;">
	</FORM>

	<table>

	<?php

		require '../PHP/connect.php';
	
		$query = 
			"SELECT DISTINCT S.student_id id, S.last_name l_n, S.first_name f_n, S.middle_name m_n
			FROM Activity A1, Student S
			WHERE A1.act_id = 1
				AND ( A1.act_id, S.student_id )
					IN
					(
						SELECT act_id, student_id
						FROM Stud_Attends
					)
			
			UNION

			SELECT DISTINCT P.user_id id, P.last_name l_n, P.first_name f_n, P.middle_name m_n
			FROM Activity A2, Professor P
			WHERE A2.act_id = 1
				AND ( A2.act_id, P.user_id )
					IN
					(
						SELECT act_id, user_id
						FROM Prof_Attends
					)";
			
		$equery = 
			"SELECT DISTINCT E.title title
			 FROM Event E JOIN Belongs B
			 ON E.event_id = B.event_id
			 WHERE B.act_id = 1
			";
	
		//QUERY FOR

		$result = mysql_query($query); //attendance list
	
		if (!$result)
		{
			die("Query to show field(s) from table(s) failed.");
		}
	
		$event = mysql_query($equery); //event name
	
		if(!$event)
		{
			die("Query cannot be processed.");
		}
	
		$event_name = mysql_result( $event, 0, "title" );
	
		$num = mysql_numrows($result); //gets number of rows for the loop
	?>

		<tr>
			<th colspan="2">
				<u>
				<?php echo $event_name; ?>
				</u>
			</th>
		</tr>

		<tr>
			<td><b> ID </b></td>
			<td><b> Name </b></td>
		</tr>
	
	
	<?php
		for( $i = 0; $i < $num; $i++ )
		{
	
			$id = mysql_result( $result, $i, "id" );
			$ln = mysql_result( $result, $i, "l_n" );
			$fn = mysql_result( $result, $i, "f_n" );
			$mn = mysql_result( $result, $i, "m_n" );
	
	?>

			<tr>
				<td>
					<?php echo $id; ?>
				</td>
				<td>
					<?php echo $ln;
						  echo ", ";
						  echo $fn;
						  echo "  ";
						  echo $mn; ?>
				</td>
			</tr>
	
	<?php
		 
		}
		mysql_close($con);

	?>

	</table>

</body>

</html>