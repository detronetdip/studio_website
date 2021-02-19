<?php 
require('../../../require/connection.php');
require('../../../require/function.php');
$mail=get_safe_value($con,$_POST['mail']);
$queryi="select * from users where email='$mail'";
$numi=mysqli_query($con,$queryi);
$ri=mysqli_num_rows($numi);
if($ri>0){
	$otp=rand(1111,9999);
	$_SESSION['OTP']=$otp;
	$email="ayondip2001@gmail.com";
	$to=$_POST['mail'];
	$subject='OTP';
	$message="Your OTP is: ".$otp;
	$headers="From: ".$email;
	if(mail($to,$subject,$message,$headers)){
			echo "32";
		} 	
}else{
    echo "33";
}
?>