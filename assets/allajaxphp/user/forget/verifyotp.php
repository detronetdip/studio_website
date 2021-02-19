<?php 
require('../../../require/connection.php');
require('../../../require/function.php');
$enotp=get_safe_value($con,$_POST['otp']);
$to=$_POST['mail'];
$otp=$_SESSION['OTP'];
unset($_SESSION['OTP']);
	if($enotp==$otp){
        $Q="select * from users where email='$to'";
        $rs=mysqli_query($con,$Q);
        $reee=mysqli_fetch_assoc($rs);
        $op=$reee['id';]
        $reset_link="https://pnstudio.in/password-reset_user/passwordreset.php?&dfrt=47gh54rtqwerta%tyw789hjrty&id=8&uio78=iop71234zsdafg";
        $email="ayondip2001@gmail.com";
        $subject='PASSWORD RESET LINK';
        $message="Your PASSWORD RESET LINK is: ".$reset_link;
        $headers="From: ".$email;
        if(mail($to,$subject,$message,$headers)){
                echo "12";
            } else{
                echo "no";
            }	
		} 	
        else{
            echo "13";
        }
?>