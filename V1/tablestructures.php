<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<title>DLSU STC AC - Table Structures</title>

		<link rel="stylesheet" type="text/css" href="../CSS/main.css" />

	</head>

	<body>


		<div class="contentTable">
			<FORM>
				<INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;">
			</FORM>
			<!--MAIN TABLE DECLARATION - ENTITIES  -->
			<table>
				<tr>
					<th class="title"><u>MAIN TABLE DECLARATION - ENTITIES</u></th>
				</tr>
			</table>	
				
			<table>
				<tr>
					<th colspan="4">Admin</th>
				</tr>
				<tr>
					<td>user_id</td>
					<td>VARCHAR(12)</td>
					<td>PK</td>
					<td>200907405967</td>
				</tr>
				<tr>
					<td>password</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>123123asdf</td>
				</tr>
				<tr>
					<td>first_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Miguel</td>
				</tr>
				<tr>
					<td>middle_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>San Jose</td>
				</tr>
				<tr>
					<td>last_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Sumaya</td>
				</tr>
				<tr>
					<td>e_mail</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>miguel_sumaya@yahoo.com</td>
				</tr>
				<tr>
					<td>course</td>
					<td>VARCHAR(100)</td>
					<td></td>
					<td>BS Information Systems</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Representative</th>
				</tr>
				<tr>
					<td>user_id</td>
					<td>VARCHAR(12)</td>
					<td>PK</td>
					<td>200907405967</td>
				</tr>
				<tr>
					<td>password</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>123123asdf</td>
				</tr>
				<tr>
					<td>first_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Miguel</td>
				</tr>
				<tr>
					<td>middle_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>San Jose</td>
				</tr>
				<tr>
					<td>last_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Sumaya</td>
				</tr>
				<tr>
					<td>e_mail</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>miguel_sumaya@yahoo.com</td>
				</tr>
				<tr>
					<td>course</td>
					<td>VARCHAR(100)</td>
					<td></td>
					<td>BS Information Systems</td>
				</tr>
				<tr>
					<td>last_access</td>
					<td>TIMESTAMP</td>
					<td></td>
					<td>2012-04-28 07:32:59</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Professor</th>
				</tr>
				<tr>
					<td>user_id</td>
					<td>VARCHAR(12)</td>
					<td>PK</td>
					<td>200907405967</td>
				</tr>
				<tr>
					<td>password</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>123123asdf</td>
				</tr>
				<tr>
					<td>first_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Moses</td>
				</tr>
				<tr>
					<td>middle_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Alidio</td>
				</tr>
				<tr>
					<td>last_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Alfonso</td>
				</tr>
				<tr>
					<td>e_mail</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>moses.alfonso@dlsc.com</td>
				</tr>
				<tr>
					<td>school</td>
					<td>VARCHAR(100)</td>
					<td></td>
					<td>Arts and Sciences</td>
				</tr>
				<tr>
					<td>department</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Faculty</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Organizer</th>
				</tr>
				<tr>
					<td>organizer_id</td>
					<td>VARCHAR(20)</td>
					<td>PK</td>
					<td>CSA</td>
				</tr>
				<tr>
					<td>organizer_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>College of Student Affairs</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Class</th>
				</tr>
				<tr>
					<td>class_id</td>
					<td>VARCHAR(10)</td>
					<td>PK</td>
					<td>ALGOCOM</td>
				</tr>
				<tr>
					<td>name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Algorithm complexity</td>
				</tr>
				<tr>
					<td>school_id</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>SITC</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Student</th>
				</tr>
				<tr> 
					<td>student_id</td>
					<td>VARCHAR(12)</td>
					<td>PK</td>
					<td>201007407512</td>
				</tr>
				<tr>
					<td>first_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Aera</td>
				</tr>
				<tr>
					<td>middle_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Amaia</td>
				</tr>
				<tr>
					<td>last_name</td>
					<td>VARCHAR(30)</td>
					<td></td>
					<td>Almero</td>
				</tr>
				<tr>
					<td>batch</td>
					<td>VARCHAR(4)</td>
					<td></td>
					<td>2010</td>
				</tr>
				<tr>
					<td>degree_program</td>
					<td>VARCHAR(100)</td>
					<td></td>
					<td>BS Business Administration Major in Operations Management</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Event</th>
				</tr>
				<tr> 
					<td>event_id</td>
					<td>INT(10)</td>
					<td>PK</td>
					<td>101</td>
				</tr>
				<tr>
					<td>description</td>
					<td>TEXT</td>
					<td></td>
					<td>Culture Fest</td>
				</tr>
				<tr>
					<td>title</td>
					<td>VARCHAR(150)</td>
					<td></td>
					<td>Link Together With All</td>
				</tr>
				<tr>
					<td>start_date</td>
					<td>DATE</td>
					<td></td>
					<td>2013-04-27</td>
				</tr>
				<tr>
					<td>end_date</td>
					<td>DATE</td>
					<td></td>
					<td>2013-04-28</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Venue</th>
				</tr>
				<tr>
					<td>name</td>
					<td>VARCHAR(50)</td>
					<td>PK</td>
					<td>Multi-purpose Hall</td>
				</tr>
				<tr>
					<td>capacity</td>
					<td>SMALLINT</td>
					<td></td>
					<td>35</td>
				</tr>
				<tr>
					<td>venue_type</td>
					<td>ENUM( 'indoor', 'outdoor' )</td>
					<td></td>
					<td>indoor</td>
				</tr>
				<tr>
					<td>location</td>
					<td>VARCHAR(50)</td>
					<td></td>
					<td>2F LC2 Building</td>
				</tr>
			</table>
			
			<!-- REFERENCE TABLE DECLARATION - WEAK ENTITIES  -->
			<table>
				<tr>
					<th class="title"><u>REFERENCE TABLE DECLARATION - WEAK ENTITIES</u></th>
				</tr>
			</table>	
			
			<table>
				<tr>
					<th colspan="4">Activity</th>
				</tr>
				<tr>
					<td>act_id</td>
					<td>INT(10)</td>
					<td>PK</td>
					<td>101</td>
				</tr>
				<tr>
					<td>FK_event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>101</td>
				</tr>
				<tr>
					<td>start_date</td>
					<td>DATE</td>
					<td></td>
					<td>2013-04-27</td>
				</tr>
				<tr>
					<td>end_date</td>
					<td>DATE</td>
					<td></td>
					<td>2013-04-27</td>
				</tr>
				<tr>
					<td>start_time</td>
					<td>TIME</td>
					<td></td>
					<td>13:00:00</td>
				</tr>
				<tr>
					<td>end_time</td>
					<td>TIME</td>
					<td></td>
					<td>15:00:00</td>
				</tr>
				<tr>
					<td>title</td>
					<td>VARCHAR(150)</td>
					<td></td>
					<td>EK Culture Fest</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Poster</th>
				</tr>
				<tr>
					<td>poster_id</td>
					<td>INT(10)</td>
					<td>PK</td>
					<td>1</td>
				</tr>
				<tr>
					<td>FK_event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>101</td>
				</tr>
				<tr>
					<td>poster_size</td>
					<td>FLOAT(5,3)</td>
					<td></td>
					<td> 5.00</td>
				</tr>
				<tr>
					<td>content</td>
					<td>MEDIUMBLOB</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>name</td>
					<td>VARCHAR(100)</td>
					<td></td>
					<td>ISWk-Sands</td>
				</tr>
			</table>
			
			<!-- REFERENCE TABLE DECLARATION - RELATIONSHIPS  -->
			<table>
				<tr>
					<th class="title"><u>REFERENCE TABLE DECLARATION - RELATIONSHIPS<u></th>
				</tr>
			</table>	
			
			<table>
				<tr>
					<th colspan="4">Prof_Attends</th>
				</tr>
				<tr>
					<td>user_id</td>
					<td>VARCHAR(12)</td>
					<td>FK ( professor )</td>
					<td>200407204115</td>
				</tr>
				<tr>
					<td>event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>act_id</td>
					<td>INT(10)</td>
					<td>FK ( activity )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>time_in</td>
					<td>TIMESTAMP</td>
					<td></td>
					<td>2013-04-27 13:00:00</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Stud_Attends</th>
				</tr>
				<tr>
					<td>student_id</td>
					<td>VARCHAR(12)</td>
					<td>FK ( student )</td>
					<td>200907402222</td>
				</tr>
				<tr>
					<td>event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>act_id</td>
					<td>INT(10)</td>
					<td>FK ( activity )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>time_in</td>
					<td>TIMESTAMP</td>
					<td></td>
					<td>2013-04-27 13:00:00</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Held_at</th>
				</tr>
				<tr>
					<td>event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>act_id</td>
					<td>INT(10)</td>
					<td>FK ( activity )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>name</td>
					<td>VARCHAR(50)</td>
					<td></td>
					<td>Multi-purpose Hall</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Has</th>
				</tr>
				<tr>
					<td>event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>poster_id</td>
					<td>INT(10)</td>
					<td>FK ( poster )</td>
					<td>1</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Belongs</th>
				</tr>
				<tr>
					<td>event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>act_id</td>
					<td>INT(10)</td>
					<td>FK ( activity )</td>
					<td>1</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Prof_Org</th>
				</tr>
				<tr>
					<td>organizer_id</td>
					<td>VARCHAR(20)</td>
					<td>FK ( organizer )</td>
					<td>SITC</td>
				</tr>
				<tr>
					<td>user_id</td>
					<td>VARCHAR(12)</td>
					<td>FK ( professor )</td>
					<td>201007105258</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Class_Org</th>
				</tr>
				<tr>
					<td>organizer_id</td>
					<td>VARCHAR(20)</td>
					<td>FK ( organizer )</td>
					<td>SITC</td>
				</tr>
				<tr>
					<td>class_id</td>
					<td>VARCHAR(20)</td>
					<td>FK ( class )</td>
					<td>ALGOCOM</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Hostedby</th>
				</tr>
				<tr>
					<td>organizer_id</td>
					<td>VARCHAR(20)</td>
					<td>FK ( organizer )</td>
					<td>SITC</td>
				</tr>
				<tr>
					<td>event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>101</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Manages</th>
				</tr>
				<tr>
					<td>event_id</td>
					<td>INT(10)</td>
					<td>FK ( event )</td>
					<td>102</td>
				</tr>
				<tr>
					<td>user_id</td>
					<td>VARCHAR(12)</td>
					<td>FK ( admin )</td>
					<td>200907405784</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<th colspan="4">Classlist</th>
				</tr>
				<tr>
					<td>class_id</td>
					<td>VARCHAR(10)</td>
					<td>FK ( class )</td>
					<td>ALGOCOM</td>
				</tr>
				<tr>
					<td>user_id</td>
					<td>VARCHAR(12)</td>
					<td>FK ( professor )</td>
					<td>200307205744</td>
				</tr>
				<tr>
					<td>room</td>
					<td>VARCHAR(20)</td>
					<td></td>
					<td>W404</td>
				</tr>
				<tr>
					<td>class_section</td>
					<td>VARCHAR(2)</td>
					<td></td>
					<td>S1</td>
				</tr>
			</table>

			<table>
				<tr>
					<th colspan="4">Class Day</th>
				</tr>
				<tr>
					<td>class_id</td>
					<td>VARCHAR(10)</td>
					<td>FK ( classlist )</td>
					<td>ALGOCOM</td>
				</tr>
				<tr>
					<td>class_day</td>
					<td>VARCHAR(7)</td>
					<td></td>
					<td>MW</td>
				</tr>
			</table>			

			<table>
				<tr>
					<th colspan="4">Class Time</th>
				</tr>
				<tr>
					<td>class_id</td>
					<td>VARCHAR(10)</td>
					<td>FK ( classlist )</td>
					<td>ALGOCOM</td>
				</tr>
				<tr>
					<td>startTime</td>
					<td>TIME</td>
					<td></td>
					<td>05:48:50</td>
				</tr>
				<tr>
					<td>endTime</td>
					<td>TIME</td>
					<td></td>
					<td>07:48:50</td>
				</tr>
			</table>

			<table>
				<tr>
					<th colspan="4">Requires</th>
				</tr>
				<tr>
					<td>class_id</td>
					<td>VARCHAR(10)</td>
					<td>FK ( classlist )</td>
					<td>ALGOCOM</td>
				</tr>
				<tr>
					<td>student_id</td>
					<td>VARCHAR(12)</td>
					<td>FK ( classlist )</td>
					<td>200907407858</td>
				</tr>
				<tr>
					<td>user_id</td>
					<td>VARCHAR(12)</td>
					<td>FK ( classlist )</td>
					<td>200907204587</td>
				</tr>
				<tr>
					<td>act_id</td>
					<td>INT(10)</td>
					<td>FK ( activity ) </td>
					<td>101</td>
				</tr>
				<tr>
					<td>event_id</td>
					<td>INT(10)</td>
					<td>FK ( activity ) </td>
					<td>101</td>
				</tr>
			</table>
			
		</div>
	</body>
</html>
