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

		$result = mysql_query("SELECT DISTINCT student.student_id, last_name, first_name, middle_name, title
								FROM Requires, Activity, Student
								WHERE Requires.act_id = Activity.act_id
								AND Requires.student_id = Student.student_id");		
						
		echo"<h3>Expected Attendees for CA Week: Play Montage</h3>";
		
		echo "<table border='1'>
		<tr>
		<th>STUDENT # </th>
		<th>LAST NAME</th>
		<th>FIRST NAME</th>
		<th>MIDDLE NAME</th>
		<th>ACTIVITY TITLE</th>
		</tr>";

		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['student_id'] . "</td>";
		  echo "<td>" . $row['last_name'] . "</td>";
		  echo "<td>" . $row['first_name'] . "</td>";
		  echo "<td>" . $row['middle_name'] . "</td>";
		  echo "<td>" . $row['title'] . "</td>";
		  echo "</tr>";
		  }
		echo "</table>";

		mysql_close($con);
		?> 
</body>
</html>