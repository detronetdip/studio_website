<?php
require('../../../require/connection.php');
require('../../../require/function.php');
$mail=get_safe_value($con,$_POST['mail']);
$username=get_safe_value($con,$_POST['username']);
$password=get_safe_value($con,$_POST['password']);
$queryi="select * from users where username='$username'";
$numi=mysqli_query($con,$queryi);
$ri=mysqli_num_rows($numi);
if($ri>0){
	echo "e1";
}
else{
    $status=1;
    $hash = password_hash($password, PASSWORD_DEFAULT);
	$qyery="insert into users(username,password,email,status) values('$username','$hash','$mail','$status')";
    mysqli_query($con,$qyery);
	echo "e2";
 }

 ?>