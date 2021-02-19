<?php
require('../../require/connection.php');
require('../../require/function.php');
$mail=get_safe_value($con,$_POST['email']);
$name=get_safe_value($con,$_POST['name']);
$number=get_safe_value($con,$_POST['number']);
$cmnt=get_safe_value($con,$_POST['comment']);
$date=date('Y/m/d');
	$qyery="insert into contact_us(name,email,mobile,comment,date) values('$name','$mail','$number','$cmnt','$date')";
    mysqli_query($con,$qyery);
	echo "ok";
 ?>