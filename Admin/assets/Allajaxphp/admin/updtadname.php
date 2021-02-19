<?php
require('../../require/connection.php');
require('../../require/function.php');
$username=get_safe_value($con,$_POST['admin_name']);
$UID=$_SESSION['ADMIN_ID'];
    $query="update admin set admin_name='$username' where id='$UID'";
    mysqli_query($con,$query);
?>