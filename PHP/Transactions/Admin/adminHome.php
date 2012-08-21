<!DOC html>
<html>

	<head>
	
		<title> Admin </title>
	
	<link rel="stylesheet" type="text/css" href="/CSS/main.css"/>
	<link rel="stylesheet" type="text/css" href="/CSS/admin.css"/>
	
	</head>
	
	<body>
		
		
	<?php	//DB connect
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
			
			$query="SELECT *
					FROM  Event";
			$result=mysql_query($query);
			?>
			
			<?php
					while($row = mysql_fetch_array($result)){
			?>
					 <form action="activityList.php" method="post">
						<h3>
						
						<?php 
						//Event List
						$eventID=$row['event_id'];
						$start_date=strtotime($row['start_date']);
						$end_date=strtotime($row['end_date']);
						echo $row['title'] . " - " . date("F d Y ", $start_date) . " - " . date("F d Y ",$end_date); 
						
						?>
						
							<input type="hidden" name="ID" value="<?php echo $eventID; ?>">
							<input type="submit" value="Details" class="submit">
						
						</h3>						
					</form>
			<?php	 
					}
			?>
			
			
			
			<div id="tools"><a class="side" href="addEvent.php"> Add Event </a></div>
		</div>
		
	
	
	
		<footer>
			<p>
				&copy; Copyright  MasisipagNaMag-aaral
			</p>
		</footer>
	</body>

</html>