<!DOC html>
<html>

	<head>
	
		<title> Admin </title>
	
	<link rel="stylesheet" type="text/css" href="\CSS\main.css"/>
	<link rel="stylesheet" type="text/css" href="\CSS\admin.css"/>
	
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
				<?php echo $_SESSION['SESS_FIRST_NAME'] . " "; ?> 
				<?php echo $_SESSION['SESS_MIDDLE_NAME'] . " "; ?> 
				<?php echo $_SESSION['SESS_LAST_NAME'] . " "; ?> 
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
			<div id="tools"><a class="side" href="addEvent.php"> Add Event </a></div>
			<div id="tools"><a class="side" href="#"> View Event </a></div>
		</div>
		
		<div class="outer">
			<h4>Events</h4>
			
			<?php
			$query="SELECT Event.title, Event.description, Event.start_date, Event.end_date, Venue.name
					FROM  Event, Venue, Held_at
					WHERE Event.event_id = Held_at.event_id AND
						Venue.name=Held_at.name";
			$result=mysql_query($query);
			while($row = mysql_fetch_array($result)){
			?>
			<h3>
			<?php echo $row['title'] . " - " . $row['start_date'] . " - " . $row['end_date']; ?>
			<input type="button" value="Remove" /></h3>
			<?php
			}
			?>
		</div>
		
	
	
	</center>
	
		<footer>
			<p>
				&copy; Copyright  MasisipagNaMag-aaral
			</p>
		</footer>
	</body>

</html>