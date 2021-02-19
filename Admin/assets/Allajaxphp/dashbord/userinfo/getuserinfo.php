<?php
require('../../../require/connection.php');
require('../../../require/function.php');
$username=get_safe_value($con,$_POST['username']);
$q="select * from users";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
$q1="select * from users where status='1'";
$res1=mysqli_query($con,$q1);
$num1=mysqli_num_rows($res1);
$q11="select * from users where status='0'";
$res11=mysqli_query($con,$q11);
$num11=mysqli_num_rows($res11);
$template="
<span>$num</span>
<span>$num1</span>
<span>$num11</span>
";
echo $template;
?>