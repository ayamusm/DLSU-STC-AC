<!DOC html>
<html>

	<head>
	
		<title> Admin </title>
	
	<link rel="stylesheet" type="text/css" href="/CSS/main.css"/>
	<link rel="stylesheet" type="text/css" href="/CSS/admin.css"/>
	<link rel="stylesheet" type="text/css" href="/CSS/representative.css"/>
	
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
		
		<form action="updateEvent.php" method="post">
		<div class="outer">
			<h4>Event Details: </h4>
			<?php
				
				$sel_ID = $_POST['selected'];
				$_POST['ev_id'] = $sel_ID;
				$_POST['selected'] = '';
			
			$query = sprintf( 
			"SELECT E.title 'name', E.description AS 'desc', E.start_date AS 'sd', E.end_date AS 'ed', H.organizer_id AS 'orgid'
							   FROM Event E JOIN Hostedby H
								ON E.event_id = H.event_id
							   WHERE E.event_id = '%s'", 
							   mysql_real_escape_string( $sel_ID )
							);
			
			$get = mysql_query( $query );
			
			if(!$get)
			{
				die("Query could not be processed." . mysql_error() );
			}
			
			$ = mysql_result( $get, 0 ); //array containing the queried row
			
			
			
			?>
			
			<h5>Title
				<input required type="text" name="ev_name" placeholder="[Click to add text]" value="<?php echo $selected[0]; ?>" maxlength="150" />
			</h5>
			
			<h5>Organizer<br />
				<?php
					
					$query = "SELECT *
							  FROM Organizer";
							
					$get = mysql_query( $query );
					 
					if(!$get)
					{
						die("Query not processed." . mysql_error());
					}
					
					
					$max = mysql_numrows( $get );
					
					for( $i = 0; $i < $max; $i++ )
					{
						$org_name = mysql_result( $get, $i, 'organizer_name' );
						$id = mysql_result( $get, $i, 'organizer_id' );
						?>
							
						<input type="checkbox" 
						
							<?php if( $id == $selected[4] )
									{
										echo ' checked ';
									}
							?>
						name="orgs[]" value="<?php echo $org_name; ?>"
						 />
							<?php echo $org_name; ?>
						<BR />
							
						<?php
						
					}
					
					mysql_close($con);
				?>
			</h5>
			
			<h5>Start Date: <?php echo date( "F d Y", $selected[2]); ?>
				<input required type="date" name="ev_st_date" />
			</h5>
			
			<h5>End Date: <?php echo date( "F d Y", $selected[3]); ?>
				<input required type="date" name="ev_ed_date" />
			</h5>
						
			<h5>Description
			<BR />
			&nbsp;	&nbsp;
			<textarea name="ev_des" rows="5" cols="50" spellcheck placeholder="Add event description.." value="
			<?php echo $selected[2];	?>" >
			</textarea>
			</h5>
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