<!DOC html>
<html>

	<head>
	
		<title> Admin </title>
	
	<link rel="stylesheet" type="text/css" href="\CSS\main.css"/>
	<link rel="stylesheet" type="text/css" href="\CSS\admin.css"/>
	<script>
		$(function() {
			$( "#accordion" ).accordion();
		});
	</script>
	
	</head>
	
	<body>
		
		
	<?php
	$host = "sql210.xtreemhost.com";
	$username = "xth_10906285";
	$password = "password";
	$con = mysql_connect($host,$username,$password);
	$my_db = "xth_10906285_dlsu_ac";
	$status = 0;
	mysql_select_db($my_db, $con);
	if (!$con) {
    die();
	$status = 1;
	}
	session_start();
	?>
		

		
		<div id="header">
			
			<div id="welcome"> 
				<b> WELCOME 
				<?php echo $_SESSION['SESS_FIRST_NAME']; ?> 
				<?php echo $_SESSION['SESS_MIDDLE_NAME']; ?> 
				<?php echo $_SESSION['SESS_LAST_NAME']; ?> 
				<?php echo "(" . $_SESSION['SESS_USER_ID'] . ")!"; ?>
				</b>
			</div>
			
		
			<div id="logout">
				logout
			</div>		
		</div>
		
		<div id="search">
		
			<input type="search" placeholder="Enter event name..." align="center" /><input type="button" value="Search" />
		
		</div>
		
		<div class="outer_t"> 
			<div id="tools"><a class="side" href="index.php"> Event </a></div>
			<div id="tools"><a class="side" href="#"> Class </a></div>
		</div>
		
		<div class="outer">
			<h4>Events</h4>
			
			<?php
			$i=1; //Event counter
			
			$query="SELECT *
					FROM  Event";
			$result=mysql_query($query);
			$numEvent=mysql_num_rows($result);
			?>
			<?php
			//<div id="accordion">
			?>
			<?php
				while($i <= $numEvent){
					while($row = mysql_fetch_array($result)){
			?>
				
						<h3><a href="#">
						<?php 
						//Event List
						$eventID=$row['event_id'];
						$start_date=strtotime($row['start_date']);
						$end_date=strtotime($row['end_date']);
						echo $row['title'] . " - " . date("F d Y ", $start_date) . " - " . date("F d Y ",$end_date); 
						?>
						</h3></a>
						<div>
						<?php
						//Activity List
						$activityQuery="SELECT DISTINCT *
										FROM Event JOIN Activity
											ON Activity.FK_event_id = Event.event_id
										WHERE Event.event_id = '" . $eventID . "'";
						$activityResult=mysql_query($activityQuery);
						$numActivity=mysql_num_rows($activityResult);
						$c=1; //Activity couter
						
						while($c <= $numActivity){
							while($actRow = mysql_fetch_array($activityResult)){
								echo $actRow['title'] . " : " . $actRow['start_time'] . "-" . $actRow['end_time']; 
							}
						}

						?>
						
						</div>
					
			<?php
					}
					$i++;	
				}
			//</div>	
			?>
			
			
			
			<div id="tools"><a class="side" href="addEvent.php"> Add Event </a></div>
		</div>
		
	
	
	</center>
	
		<footer>
			<p>
				&copy; Copyright  MasisipagNaMag-aaral
			</p>
		</footer>
	</body>

</html>