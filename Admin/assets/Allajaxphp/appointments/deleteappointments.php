<?php 
require('../../require/connection.php');
require('../../require/function.php');
$status="Canceled";
$ID=get_safe_value($con,$_POST['id']);
$query="update appointments set status='$status' where id='$ID'";
mysqli_query($con,$query);
echo $ID;
?>