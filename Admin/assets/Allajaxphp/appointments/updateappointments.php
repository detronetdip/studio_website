<?php 
require('../../require/connection.php');
require('../../require/function.php');
$status=get_safe_value($con,$_POST['status']);
$ID=get_safe_value($con,$_POST['id']);
$query="update appointments set status='$status' where id='$ID'";
mysqli_query($con,$query);
echo $ID;
?>