<?php 
require('../../../require/connection.php');
require('../../../require/function.php');
$enotp=get_safe_value($con,$_POST['otp']);
$otp=$_SESSION['OTP'];
unset($_SESSION['OTP']);
	if($enotp==$otp){
			echo "12";
		} 	
        else{
            echo "13";
        }
?>