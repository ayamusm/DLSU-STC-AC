<!DOC html>
<html>

	<head>
	
		<title> Admin </title>
	
	<link rel="stylesheet" type="text/css" href="/CSS/main.css"/>
	<link rel="stylesheet" type="text/css" href="/CSS/admin.css"/>
	
	<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
	require $root . '/PHP/connect.php';
	//session_start();
	?>
	
	</head>
	
	<body>
		
		
		<div id="header">
			
			<div id="welcome"> 
				<b> WELCOME 
				
				<?php /*echo $_SESSION['SESS_FIRST_NAME']; ?> 
				<?php echo $_SESSION['SESS_MIDDLE_NAME']; ?> 
				<?php echo $_SESSION['SESS_LAST_NAME']; ?> 
				<?php echo "(" . $_SESSION['SESS_USER_ID'] . ")!"; */?>
				
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
		
			<?php
			
				$ID = $_POST['ID'];
				
				$_POST['ID'] = '';
				
				$query = sprintf(
						 "SELECT DISTINCT H.organizer_id AS 'orgid', E.title AS 'name', E.description AS 'desc', E.start_date AS 'sday', E.end_date AS 'eday'
						  FROM Event E JOIN Hostedby H
							ON E.event_id = H.event_id
						  WHERE E.event_id = %s",
						  mysql_real_escape_string($ID)
						  );
						  
				$get = mysql_query( $query );
				
				if(!$get)
				{
					die( "Query could not be processed." . mysql_error() );
				}
				
				$populated = mysql_num_rows( $get );
				
				if( $populated )	//check if populated
				{
					for( $i = 0; $i < $populated; $i++)
					{
						$orgid[$i] = mysql_result( $get, $i, 'orgid' );	//array of hosts
					}
					
					$name = mysql_result( $get, 0, 'name' );
					$des = mysql_result( $get, 0, 'desc' );
					$sday = mysql_result( $get, 0, 'sday' );
					$eday = mysql_result( $get, 0, 'eday' );
					
					$sday=strtotime($sday);
					$eday=strtotime($eday);
					
				}
				else
				{
					echo "<h4>Event not found.</h4>";
				}
				
				//get org name
				$query = "SELECT *
						  FROM Organizer";
				
				$get = mysql_query( $query );
				
				if(!$get)
				{
					die( mysql_error() );
				}
				
				for( $i = 0; $i < mysql_num_rows($get); $i++)
				{
					$id[$i] = mysql_result( $get, $i, 'organizer_id' );
					$na[$i] = mysql_result( $get, $i, 'organizer_name' );
				}
				
				for( $a = 0, $i = 0; $a < count($orgid); $a++ ) //iterate hosts
				{
					for( $b = 0; $b < count($id); $b++ ) //iterate master id array
					{
						if( $orgid[$a] == $id[$b] )
						{
							$orgs[$i] = $na[$b];
							$i++;
						}//if statement
					}
				}//outer loop
				
				$om = count($orgs);
				
			?>
			
			<h4> Event Details  </h4>
			<h3>Title: <?php echo $name; ?> </h3>
			
			<h3>Organizer/s: <BR /> &nbsp;
			<?php 
				for( $i = 0; $i < $om; $i++ )
				{
					echo $orgs[$i];
					if( $i != ($om - 1) )
					{
						echo '<BR /> &nbsp;';
					}
				}	
			?>
			</h3>
			
			<h3>Description: <BR/> <?php echo $des; ?> </h3>
			
			<h3>Date: <?php echo date( "F d Y", $sday ) . ' - ' . date( "F d Y", $eday ); ?> </h3>
						
			<?php
				mysql_close($con);
			?>
			
			<input type="hidden" name="selected" value="<?php echo $ID;	 ?>" />
			<div id="tools"><a class="side" href="editEvent.php"> Edit </a></div>
		</div>
	
		<BR />
	
		<footer>
			<p>
				&copy; Copyright  MasisipagNaMag-aaral
			</p>
		</footer>
	</body>

</html>