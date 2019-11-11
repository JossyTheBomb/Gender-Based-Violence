<?php
	session_start();
	include 'conn.php';

	
	    $login = $_POST['username'];
	    $password = $_POST['pass'];

		$sql = "SELECT * FROM user WHERE username='$login' AND pass='$password'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			
			//Login failed
			echo 'false';
	  
			exit();
		}
		else{
//login successful
			$row = $query->fetch_assoc();
			
			
           $_SESSION['user'] = $row['username'];
			$_SESSION['SESS_MEMBER_ID'] = $row['id'];
			$_SESSION['SESS_FIRST_NAME'] = $row['name'];
			$_SESSION['SESS_LAST_NAME'] = $row['position'];
			
			
			echo 'true';
	       
			//header("location: index.php");
			//exit();
			
			
		}
		
	

	

?>