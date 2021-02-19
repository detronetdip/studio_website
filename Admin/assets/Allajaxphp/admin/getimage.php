<?php
require('../../require/connection.php');
require('../../require/function.php');
$e="select * from admin";
$t=mysqli_query($con,$e);
$R=mysqli_fetch_assoc($t);
$nme=$R['admin_image'];
$temp="<img src='../media/admin_photo/$nme' alt='admin_image' />";
echo $temp;
?>