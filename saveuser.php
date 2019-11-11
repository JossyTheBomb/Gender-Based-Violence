<?php
include('connect.php');
//session_start();
$a = $_POST['user_id'];
$b = $_POST['name'];
$c = $_POST['username'];
$d = $_POST['pass'];
$e = $_POST['email'];
//$f = $_POST['address'];
$f="NA";
//$g = $_POST['position'];
$g="officer";
// query
$sql = "INSERT INTO user (user_id,name,username,pass,email,address,position) VALUES (:a,:b,:c,:d,:e,:f,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g));{
if($q){
      echo '<script language="javascript" type="text/javascript"> alert("Registration Successful!!");</script>';
	  echo '<script language="javascript" type="text/javascript"> window.location="index.php";</script>';
        }else{
            echo '<script language="javascript" type="text/javascript"> alert("Error");</script>';
			echo '<script language="javascript" type="text/javascript"> window.location="index.php";</script>';
        } 
		}
?>