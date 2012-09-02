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
		
			<input type="search" placeholder="Enter event name..." align="center" /><input type="button" value="Search" />
		
		</div>

		
		<div class="outer_t"> 
			<div id="tools"><a class="side" href="index.php"> Event </a></div>
			<div id="tools"><a class="side" href="#"> Class </a></div>
		</div>
		
		<form action="insertActivity.php" method="post">
		<div class="outer">
		
			<h4>
				Event = 
			
				<?php 
					$query =
						"SELECT title
						FROM Event";
						
					$ev = mysql_query( $query );
					
					?>
				
				<select required name="ev_f" >
				
					<?php
					while( $row = mysql_fetch_array( $ev ) )
					{
					?>
						
						<option>
							<?php echo $row['title']; ?>
						</option>
						
					<?php
					}
				?>
				</select>
				
			</h4>
		
			<h4>Activity Details: </h4>
				
			<h5>Title
				<input required type="text" name="act_name" placeholder="[Click to add text]" maxlength="150" />
			</h5>
				
			<h5>Start Date
				<input required type="date" name="act_st_date" />
			</h5>
			
			<h5>End Date
				<input required type="date" name="act_ed_date" />
			</h5>
						
			<h5>Start Time
				<input required type="time" name="act_st_time" placeholder="[ hh : mm ]" />
			</h5>
			
			<h5>End Time
				<input required type="time" name="act_ed_time" placeholder="[ hh : mm ]" />
			</h5>
			
			<h5>Venue
				<select required name="act_ven">
					<?php
						$query = "SELECT name FROM Venue";
						
						$venue = mysql_query( $query );
						
						while( $row = mysql_fetch_array( $venue ) )
						{
						?>
						
							<option>
								<?php echo $row['name']; ?>
							</option>
						
						<?php
						}
					?>
				</select>
				
			</h5>
			
			<BR />
			
			<input type="reset" />
			
			&nbsp;	&nbsp;
			<input type="submit" value="Save" />
			<?php mysql_close($con); ?>
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