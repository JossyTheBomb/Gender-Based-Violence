<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('gbvdb', $link);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	//function clean($str) {
		//$str = @trim($str);
		//if(get_magic_quotes_gpc()) {
			//$str = stripslashes($str);
		//}
		//return mysql_real_escape_string($str);
	//}
	
	//Sanitize the POST values
	$login = $_POST['username'];
	$password = $_POST['pass'];
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM user WHERE username='$login' AND pass='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			
           $_SESSION['user'] = $member['username'];
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			$_SESSION['SESS_PRO_PIC'] = $member['username'];
			session_write_close();
			echo '<script language="javascript" type="text/javascript"> alert("Login Successful!!");</script>';
	        echo '<script language="javascript" type="text/javascript"> window.location="index.php";</script>';
			//header("location: index.php");
			exit();
		}else {
			//Login failed
			echo '<script language="javascript" type="text/javascript"> alert("Incorrect Credentials!!");</script>';
	  echo '<script language="javascript" type="text/javascript"> window.location="index.php";</script>';
			//header("location: login.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>