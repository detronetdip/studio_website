<?php
require('../../require/connection.php');
require('../../require/function.php');
$id=$_POST['id'];
$status=1;
    $qyery="delete from banner where id='$id'";
    mysqli_query($con,$qyery);
	echo "UPLOADED";
?>