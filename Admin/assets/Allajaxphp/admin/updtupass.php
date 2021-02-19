<?php
require('../../require/connection.php');
require('../../require/function.php');
$username=get_safe_value($con,$_POST['password']);
$UID=$_SESSION['ADMIN_ID'];
    $query="update admin set password='$username' where id='$UID'";
    mysqli_query($con,$query);
?>