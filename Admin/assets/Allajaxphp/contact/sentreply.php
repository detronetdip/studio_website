<?php
require('../../require/connection.php');
require('../../require/function.php');
$mail=$_POST['sender_mail'];
$msg=$_POST['msg'];
$email="nandistudio.anandapur87@gmail.com";
$to=$mail;
$subject='REPLY';
$message=$msg;
$headers="From: ".$email;
if(mail($to,$subject,$message,$headers)){
    echo "Sent";
} else{
    echo "no";
}	
?>