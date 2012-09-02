<?php
	//Connect to Db
	require '../../connect.php';
	
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
		header("location: repLoginForm.php");
		exit();
	}
	
	
	
	//Create query
	$query="SELECT user_id, password
			FROM representative
			WHERE user_id = '" . $user ."'AND password='" . $password . "'";
	$result=mysql_query($query);
	
	//Check if anything is retrieved
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login succesful
			session_regenerate_id();
			$representative=mysql_fetch_array($result);
			$_SESSION['SESS_USER_ID'] = $representative['user_id'];
			$_SESSION['SESS_FIRST_NAME'] = $representative['first_name'];
			$_SESSION['SESS_MIDDLE_NAME'] = $representative['middle_name'];
			$_SESSION['SESS_LAST_NAME'] = $representative['last_name'];
			$_SESSION['SESS_EMAIL'] = $representative['email'];
			$_SESSION['SESS_COURSE'] = $representative['course'];
			session_write_close();
			header("location: repHome.php");
			exit();
		}
		else{
			//Login failed
			header("location: repHome.php");
			exit();
		}
	}
	else
		die("Query failed");
?>