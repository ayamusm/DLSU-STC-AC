<html>
	<head>
		<meta charset="utf-8" />

			<title>DLSU STC AC - Attendance per Class</title>

			<link rel="stylesheet" type="text/css" href="../CSS/main.css" />
	</head>

	<body>
	
		<div class="contentTable">
				<FORM>
					<INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;">
				</FORM>
		<?php
			require '../PHP/connect.php';
			
			$result = mysql_query("SELECT * FROM Admin");
			

			echo "<table>
			<tr>
				<th colspan='3' class='title'><u>Class</u></th>
			</tr>
			<tr>
				<th> </th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Attendance</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultAdmin))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['user_id'] . "</td>";
			  echo "<td>" . $row['password'] . "</td>";
			  echo "<td>" . $row['first_name'] . "</td>";
			  echo "<td>" . $row['middle_name'] . "</td>";
			  echo "<td>" . $row['last_name'] . "</td>";
			  echo "<td>" . $row['e_mail'] . "</td>";
			  echo "<td>" . $row['course'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			echo "<table>
			<tr>
				<th colspan='8' class='title'><u>Representative</u></th>
			</tr>
			<tr>
				<th>user_id</th>
				<th>password</th>
				<th>first_name</th>
				<th>middle_name</th>
				<th>last_name</th>
				<th>e_mail</th>
				<th>course</th>
				<th>last_access</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultRepresentative))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['user_id'] . "</td>";
			  echo "<td>" . $row['password'] . "</td>";
			  echo "<td>" . $row['first_name'] . "</td>";
			  echo "<td>" . $row['middle_name'] . "</td>";
			  echo "<td>" . $row['last_name'] . "</td>";
			  echo "<td>" . $row['e_mail'] . "</td>";
			  echo "<td>" . $row['course'] . "</td>";
			  echo "<td>" . $row['last_access'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='8' class='title'><u>Professor</u></th>
			</tr>
			<tr>
				<th>user_id</th>
				<th>password</th>
				<th>first_name</th>
				<th>middle_name</th>
				<th>last_name</th>
				<th>e_mail</th>
				<th>school</th>
				<th>department</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultProfessor))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['user_id'] . "</td>";
			  echo "<td>" . $row['password'] . "</td>";
			  echo "<td>" . $row['first_name'] . "</td>";
			  echo "<td>" . $row['middle_name'] . "</td>";
			  echo "<td>" . $row['last_name'] . "</td>";
			  echo "<td>" . $row['e_mail'] . "</td>";
			  echo "<td>" . $row['school'] . "</td>";
			  echo "<td>" . $row['department'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='2' class='title'><u>Organizer</u></th>
			</tr>
			<tr>
				<th>organizer_id</th>
				<th>organizer_name</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultOrganizer))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['organizer_id'] . "</td>";
			  echo "<td>" . $row['organizer_name'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='3' class='title'><u>Class</u></th>
			</tr>
			<tr>
				<th>class_id</th>
				<th>name</th>
				<th>school_id</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultClass))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['class_id'] . "</td>";
			  echo "<td>" . $row['name'] . "</td>";
			  echo "<td>" . $row['school_id'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='6' class='title'><u>Student</u></th>
			</tr>
			<tr>
				<th>student_id</th>
				<th>first_name</th>
				<th>middle_name</th>
				<th>last_name</th>
				<th>batch</th>
				<th>degree_program</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultStudent))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['student_id'] . "</td>";
			  echo "<td>" . $row['first_name'] . "</td>";
			  echo "<td>" . $row['middle_name'] . "</td>";
			  echo "<td>" . $row['last_name'] . "</td>";
			  echo "<td>" . $row['batch'] . "</td>";
			  echo "<td>" . $row['degree_program'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='5' class='title'><u>Event</u></th>
			</tr>
			<tr>
				<th>event_id</th>
				<th>title</th>
				<th>description</th>
				<th>start_date</th>
				<th>end_date</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultEvent))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "<td>" . $row['title'] . "</td>";
			  echo "<td>" . $row['description'] . "</td>";
			  echo "<td>" . $row['start_date'] . "</td>";
			  echo "<td>" . $row['end_date'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='4' class='title'><u>Venue</u></th>
			</tr>
			<tr>
				<th>name</th>
				<th>capacity</th>
				<th>venue_type</th>
				<th>location</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultVenue))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['name'] . "</td>";
			  echo "<td>" . $row['capacity'] . "</td>";
			  echo "<td>" . $row['venue_type'] . "</td>";
			  echo "<td>" . $row['location'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='7' class='title'><u>Activity</u></th>
			</tr>
			<tr>
				<th>act_id</th>
				<th>FK_event_id</th>
				<th>title</th>
				<th>start_date</th>
				<th>end_date</th>
				<th>start_time</th>
				<th>end_time</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultActivity))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['act_id'] . "</td>";
			  echo "<td>" . $row['FK_event_id'] . "</td>";
			  echo "<td>" . $row['title'] . "</td>";
			  echo "<td>" . $row['start_date'] . "</td>";
			  echo "<td>" . $row['end_date'] . "</td>";
			  echo "<td>" . $row['start_time'] . "</td>";
			  echo "<td>" . $row['end_time'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='5' class='title'><u>Poster</u></th>
			</tr>
			<tr>
				<th>poster_id</th>
				<th>FK_event_id</th>
				<th>name</th>
				<th>content</th>
				<th>poster_size</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultPoster))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['poster_id'] . "</td>";
			  echo "<td>" . $row['FK_event_id'] . "</td>";
			  echo "<td>" . $row['name'] . "</td>";
			  echo "<td>" . $row['content'] . "</td>";
			  echo "<td>" . $row['poster_size'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='2' class='title'><u>Class_Day</u></th>
			</tr>
			<tr>
				<th>class_id</th>
				<th>class_day</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultClassDay))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['class_id'] . "</td>";
			  echo "<td>" . $row['class_day'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='3' class='title'><u>Class_Time</u></th>
			</tr>
			<tr>
				<th>class_id</th>
				<th>startTime</th>
				<th>endTime</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultClassTime))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['class_id'] . "</td>";
			  echo "<td>" . $row['startTime'] . "</td>";
			  echo "<td>" . $row['endTime'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='4' class='title'><u>Prof_Attends</u></th>
			</tr>
			<tr>
				<th>user_id</th>
				<th>event_id</th>
				<th>act_id</th>
				<th>time_in</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultProfAttends))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['user_id'] . "</td>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "<td>" . $row['act_id'] . "</td>";
			  echo "<td>" . $row['time_in'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='4' class='title'><u>Stud_Attends</u></th>
			</tr>
			<tr>
				<th>student_id</th>
				<th>event_id</th>
				<th>act_id</th>
				<th>time_in</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultStudAttends))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['student_id'] . "</td>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "<td>" . $row['act_id'] . "</td>";
			  echo "<td>" . $row['time_in'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='3' class='title'><u>Held_at</u></th>
			</tr>
			<tr>
				<th>event_id</th>
				<th>act_id</th>
				<th>name</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultHeldAt))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "<td>" . $row['act_id'] . "</td>";
			  echo "<td>" . $row['name'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='2' class='title'><u>Has</u></th>
			</tr>
			<tr>
				<th>event_id</th>
				<th>poster_id</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultHas))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "<td>" . $row['poster_id'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='2' class='title'><u>Belongs</u></th>
			</tr>
			<tr>
				<th>event_id</th>
				<th>act_id</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultBelongs))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "<td>" . $row['act_id'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='2' class='title'><u>Prof_Org</u></th>
			</tr>
			<tr>
				<th>organizer_id</th>
				<th>user_id</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultProfOrg))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['organizer_id'] . "</td>";
			  echo "<td>" . $row['user_id'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='2' class='title'><u>Class_Org</u></th>
			</tr>
			<tr>
				<th>organizer_id</th>
				<th>class_id</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultClassOrg))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['organizer_id'] . "</td>";
			  echo "<td>" . $row['class_id'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='2' class='title'><u>Hostedby</u></th>
			</tr>
			<tr>
				<th>organizer_id</th>
				<th>event_id</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultHostedby))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['organizer_id'] . "</td>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='2' class='title'><u>Manages</u></th>
			</tr>
			<tr>
				<th>event_id</th>
				<th>user_id</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultManages))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "<td>" . $row['user_id'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='5' class='title'><u>Classlist</u></th>
			</tr>
			<tr>
				<th>class_id</th>
				<th>student_id</th>
				<th>user_id</th>
				<th>room</th>
				<th>class_section</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultClasslist))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['class_id'] . "</td>";
			  echo "<td>" . $row['student_id'] . "</td>";
			  echo "<td>" . $row['user_id'] . "</td>";
			  echo "<td>" . $row['room'] . "</td>";
			  echo "<td>" . $row['class_section'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			echo "<table>
			<tr>
				<th colspan='5' class='title'><u>Requires</u></th>
			</tr>
			<tr>
				<th>class_id</th>
				<th>student_id</th>
				<th>user_id</th>
				<th>act_id</th>
				<th>event_id</th>
			</tr>
			";

			while($row = mysql_fetch_array($resultRequires))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['class_id'] . "</td>";
			  echo "<td>" . $row['student_id'] . "</td>";
			  echo "<td>" . $row['user_id'] . "</td>";
			  echo "<td>" . $row['act_id'] . "</td>";
			  echo "<td>" . $row['event_id'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			
			mysql_close($con);
		?>
		</div>
	
	</body>
</html>