<?php
require('../../require/connection.php');
require('../../require/function.php');
$e="select * from admin";
$t=mysqli_query($con,$e);
$R=mysqli_fetch_assoc($t);
$nme=$R['admin_name'];
echo $nme;
?>