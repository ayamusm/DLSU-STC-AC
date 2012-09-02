<html>
	<head>
		<meta charset="utf-8" />

			<title>DLSU STC AC - Event List</title>

			<link rel="stylesheet" type="text/css" href="../CSS/main.css" />
	</head>

	<body>
	
		<div class="contentTable">
				<FORM>
					<INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;">
				</FORM>
		<?php
			require '../PHP/connect.php';
			//Pre Processing for number of events to be posted
			$query = " SELECT *
					   FROM Event";
			$result = mysql_query($query);		   
			$numEvent=mysql_num_rows($result);
	
		for($i=1; $i<=$numEvent; $i++ ){
			//Query for the values in the table
			$listQuery = " SELECT DISTINCT Activity.act_id, Event.event_id, Activity.title, Activity.start_date, Activity.end_date, Activity.start_time, Activity.end_time
						   FROM Event JOIN Activity
								ON Activity.FK_event_id = Event.event_id
						   WHERE Event.event_id = '" . $i . "'";
			//Query for the header of the table
			$headerQuery = " SELECT *
							 FROM Event
							 WHERE event_id='" . $i . "'";
										  
			$resultHeader = mysql_query($headerQuery);
			$resultList = mysql_query($listQuery);				
			
			$headerRow = mysql_fetch_array($resultHeader);
			echo "<table>
			<tr>
				<th colspan='5' class='title'>". $headerRow['title'] ."</th>
			</tr>
			<tr>
				<th>Activity ID</th>
				<th>Activity Title</th>
				<th>start_date</th>
				<th>end_date</th>
				<th>start_time</th>
				<th>end_end</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultList))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['act_id'] . "</td>";
			  echo "<td>" . $row['title'] . "</td>";
			  echo "<td>" . $row['start_date'] . "</td>";
			  echo "<td>" . $row['end_date'] . "</td>";
			  echo "<td>" . $row['start_time'] . "</td>";
			  echo "<td>" . $row['end_time'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
		}
			mysql_close($con);
		?>
		</div>
	
	</body>
</html>