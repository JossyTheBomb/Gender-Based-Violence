<?php
include('connect.php');
//session_start();
$a = $_POST['offence_id'];
$b = $_POST['vehicle_no'];
$c = $_POST['driver_license'];
$d = $_POST['name'];
$e = $_POST['address'];
$f = $_POST['gender'];
$g = $_POST['officer_reporting'];
$h = $_POST['offence'];
$i = $_POST['vn'];
// query
$sql = "INSERT INTO reported_offence (offence_id,vehicle_no,driver_license,name,address,gender,officer_reporting,offence,date,vn ) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,now(),:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i));{
if($q){
      header("location:report.php?success-true");
        }else{
            header("location:report.php?failed-true");
        } 
		}


?>
                            