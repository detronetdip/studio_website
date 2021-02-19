<?php
require('../../require/connection.php');
require('../../require/function.php');
$username=get_safe_value($con,$_POST['username']);
$password=get_safe_value($con,$_POST['password']);
$q="select * from admin where username='$username'";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($res);
$hash_pass=$row['password'];
if($hash_pass==$password){
    $UID=$row['id'];
    $_SESSION['ADMIN_LOGIN']='YES';
    $_SESSION['ADMIN_ID']=$UID;
    $_SESSION['ADMIN_NAME']=$row['username'];
    echo "13b";
}else{
    echo "no";
}
?>