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
	?>
	
	</head>
	
	<body>
	
		
		<div id="header">
			
			<div id="welcome"> <b>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'] . $_SESSION['SESS_MIDDLE_NAME'] . $_SESSION['SESS_LAST_NAME'];?></b></div>
			
		
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
			
			<?php
			$query="SELECT * FROM Venue";
			$result=mysql_query($query);
			?>
			
			<h5>Venue
				<select name="ev_venue">
				<?php
					while($row = mysql_fetch_array($result))
						{
						echo "<option>" . $row['name'] . "</option>";
						$capacity = $row['capacity'];
						}
				?>
				</select>
			</h5>
			
			<?php
			echo "<h5>Capacity:" .  $capacity . "</H5>"; //in progress
			?>
			
			<h5>Description</h5>
			<BR />
			<textarea name="ev_des" rows="10" cols="50" spellcheck placeholder="Add event description.." ></textarea>
			
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