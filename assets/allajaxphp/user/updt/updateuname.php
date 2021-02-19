<?php 
require('../../../require/connection.php');
require('../../../require/function.php');
$username=get_safe_value($con,$_POST['username']);
    $UID=$_SESSION['USER_ID'];
    $query="update users set username='$username' where id='$UID'";
    mysqli_query($con,$query);
?>
