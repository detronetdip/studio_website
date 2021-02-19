<?php 
$a="admin";
$t=password_hash($a, PASSWORD_DEFAULT);
echo $t;
?>