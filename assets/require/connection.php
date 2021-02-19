<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'nandi_studio');
/*
$con= mysqli_connect('localhost','u540231764_nandi','G:wcS704');
mysqli_select_db($con,'u540231764_nandi_studio');*/
/*if(!isset($_SESSION['USER_ID']))
{
	$_SESSION['USER_ID']='0';
	}*/
/*if($con)
{
echo"conected";
}
else{
echo"not conected";
}*/
?>