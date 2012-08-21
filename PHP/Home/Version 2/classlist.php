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
			
			$con = mysql_connect('localhost');
			$my_db = "xth_10906285_dlsu_ac";
			$status = 0;
			mysql_select_db($my_db, $con);
			if (!$con) 
			  {
				die();
				$status = 1;
			  }

			$query = " SELECT *
					   FROM class";
			$result = mysql_query($query);		   
			$classRows=mysql_num_rows($result);
	
			for($i=1; $i<=$classRows; $i++ ){
				$classList = "SELECT student.student_id, last_name, first_name, middle_name, degree_program
								FROM Classlist JOIN Student
								WHERE Classlist.student_id = Student.student_id
								AND Classlist.class_id = '" . $i . "'";
			
				$courseInfo = "SELECT DISTINCT class.class_id, class_section
							   FROM Class JOIN Classlist
									ON class.class_id = classlist.class_id";
								
			$headers = mysql_query($courseInfo);
			$listContent = mysql_query($classList);				
			
			$headercount = mysql_fetch_array($headers);
			
			$courseInfo = "SELECT DISTINCT class.class_id, class_section
						   FROM Class JOIN Classlist
								ON class.class_id = classlist.class_id";

			echo "<table>
			<tr>
				<th colspan='5' class='id'>". $headers['class_id'] ."</th>
			</tr>
			
			<tr>
			<th>Student #</th>
			<th>Name</th>
			<th>Degree Program</th>
			</tr>";

			while($row = mysql_fetch_array($listContent))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['student.student_id'] . "</td>";
			  echo "<td>" . $row['last_name'], $row['first_name'], $row['middle_name'] . "</td>";
			  echo "<td>" . $row['degree_program'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			}
			
			mysql_close($con);
			?> 
	</body>
	
</html>