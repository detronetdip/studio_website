<?php
require('../../require/connection.php');
require('../../require/function.php');
$id=$_SESSION['ADMIN_ID'];
$filename = rand(1111111,9999999).$_FILES['file']['name'];
$location = "../../../../media/admin_photo/".$filename;
if(move_uploaded_file($_FILES['file']['tmp_name'],$location))
{
    $qyery="update admin set admin_image='$filename' where id='$id'";
    mysqli_query($con,$qyery);
	echo "UPLOADED";
}
?>