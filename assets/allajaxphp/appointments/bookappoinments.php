<?php
require('../../require/connection.php');
require('../../require/function.php');
$event=get_safe_value($con,$_POST['event']);
$event_date=get_safe_value($con,$_POST['event_date']);
$customer_name=get_safe_value($con,$_POST['customer_name']);
$event_mobile=get_safe_value($con,$_POST['event_mobile']);
$event_email=get_safe_value($con,$_POST['event_email']);
$event_address=get_safe_value($con,$_POST['event_address']);
$uid=$_SESSION['USER_ID'];
$status="Appointment Requested";
$qyery="insert into appointments(uid,category,edate,name,email,mobile,address,status) values('$uid','$event','$event_date','$customer_name','$event_email','$event_mobile','$event_address','$status')";
    mysqli_query($con,$qyery);
	echo "UPLOADED";
?>