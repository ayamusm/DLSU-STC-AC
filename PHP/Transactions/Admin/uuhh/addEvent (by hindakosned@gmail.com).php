<!DOC html>
<html>

	<head>
	
		<title> Admin </title>
	
	<link rel="stylesheet" type="text/css" href="\CSS\main.css"/>
	<link rel="stylesheet" type="text/css" href="\CSS\admin.css"/>
	<link rel="stylesheet" type="text/css" href="\CSS\representative.css"/>
	
	<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
	require $root . '/PHP/connect.php';
	session_start();
	?>
	
	</head>
	
	<body>
	
		
		<div id="header">
			
			<div id="welcome"> 
				<b> WELCOME 
				<?php echo $_SESSION['SESS_FIRST_NAME']; ?> 
				<?php echo $_SESSION['SESS_MIDDLE_NAME']; ?> 
				<?php echo $_SESSION['SESS_LAST_NAME'] . " "; ?> 
				<?php echo "(" . $_SESSION['SESS_USER_ID'] . ")!"; ?>
				</b>
			</div>
			
		
			<div id="logout">
				logout
			</div>		
		</div>
		
		<div id="search">
		
			<input type="search" placeholder="Enter activity/class.." align="center" /><input type="button" value="Search" />
		
		</div>
	
		<div class="outer_t"> 
			<div id="tools"><a class="side" href="addEvent.php"> Add Event </a></div>
			<div id="tools"><a class="side" href="adminHome.php"> View All Events </a></div>
		</div>
		
		<form action="insertEvent.php" method="post">
		<div class="outer">
			<h4>Event Details: </h4>
				
			<h5>Title
				<input required type="text" name="ev_name" placeholder="[Click to add text]" maxlength="" />
			</h5>
				
			<h5>Start Date
				<input required type="date" name="ev_st_date" />
			</h5>
			
			<h5>End Date
				<input required type="date" name="ev_ed_date" />
			</h5>
						
			<h5>Description</h5>
			<BR />
			<textarea name="ev_des" rows="5" cols="50" spellcheck placeholder="Add event description.." ></textarea>
			<BR />
			<input type="reset" />
			
			&nbsp;	&nbsp;
			<input type="submit" value="Save" />
		</form>
			
		</div>
		
	
	
	</center>
	
		<footer>
			<p>
				&copy; Copyright MasisipagNaMag-aaral
			</p>
		</footer>
	</body>

</html>