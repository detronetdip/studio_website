<?php 
require('../../../require/connection.php');
require('../../../require/function.php');
$password=get_safe_value($con,$_POST['pass1']);
$hash = password_hash($password, PASSWORD_DEFAULT);
    $UID=$_SESSION['USER_ID'];
    $query="update users set password='$hash' where id='$UID'";
    mysqli_query($con,$query);
?>
