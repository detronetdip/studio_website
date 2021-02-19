<?php
require('../../require/connection.php');
require('../../require/function.php');
$id=$_POST['id'];
$status=0;
    $qyery="update gallery set status='$status' where id='$id'";
    mysqli_query($con,$qyery);
	echo "UPLOADED";
?>