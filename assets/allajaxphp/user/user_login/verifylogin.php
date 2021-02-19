<?php 
require('../../../require/connection.php');
require('../../../require/function.php');
$username=get_safe_value($con,$_POST['username']);
$password=get_safe_value($con,$_POST['password']);
$status=1;
$q="select * from users where username='$username' and status='$status'";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($res);
$hash_pass=$row['password'];
$verify = password_verify($password, $hash_pass); 
if($verify){
    $UID=$row['id'];
    $_SESSION['USER_LOGIN']='YES';
    $_SESSION['USER_ID']=$UID;
    $_SESSION['USER_NAME']=$row['username'];
    echo "13b";
}else{
    echo "no";
}
?>
