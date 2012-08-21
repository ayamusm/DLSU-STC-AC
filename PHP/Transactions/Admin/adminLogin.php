<?php
	//Connect to Db
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
	
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$user = clean($_POST['user']);
	$password = clean($_POST['pass']);
	
	//Input Validations
	if($user == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations errors, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: adminLoginForm.php");
		exit();
	}
	
	
	
	//Create query
	$query="SELECT user_id, password
			FROM Admin
			WHERE user_id = '" . $user ."'AND password='" . $password . "'";
	$result=mysql_query($query);
	
	//Check if anything is retrieved
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login succesful
			session_regenerate_id();
			$member=mysql_fetch_array($result);
			$_SESSION['SESS_USER_ID'] = $member['user_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['first_name'];
			$_SESSION['SESS_MIDDLE_NAME'] = $member['middle_name'];
			$_SESSION['SESS_LAST_NAME'] = $member['last_name'];
			$_SESSION['SESS_EMAIL'] = $member['email'];
			$_SESSION['SESS_COURSE'] = $member['course'];
			session_write_close();
			header("location: adminHome.php");
			exit();
		}
		else{
			//Login failed
			header("location: adminHome.php");
			exit();
		}
	}
	else
		die("Query failed");
?>