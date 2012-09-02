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
			$query="SELECT Event.title, Event.description, Event.start_date, Event.end_date, Venue.name
					FROM  Event, Venue, Held_at
					WHERE Event.event_id = Held_at.event_id AND
						Venue.name=Held_at.name";
						
			$resultEvent = mysql_query($query);			
			echo "<table>
			<tr>
				<th colspan='5' class='title'><u>Event</u></th>
			</tr>
			<tr>
				<th>Event Title</th>
				<th>Description</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Venue</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultEvent))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['title'] . "</td>";
			  echo "<td>" . $row['description'] . "</td>";
			  echo "<td>" . $row['start_date'] . "</td>";
			  echo "<td>" . $row['end_date'] . "</td>";
			  echo "<td>" . $row['name'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			

			mysql_close($con);
		?>
		</div>
	
	</body>
</html>