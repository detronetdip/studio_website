<?php
require('../../require/connection.php');
require('../../require/function.php');
$status=1;
$filename = rand(1111111,9999999).$_FILES['file']['name'];
$location = "../../../../media/all_gallery/".$filename;
if(move_uploaded_file($_FILES['file']['tmp_name'],$location))
{
    $qyery="insert into gallery(gly_img,status) values('$filename','$status')";
    mysqli_query($con,$qyery);
	echo "UPLOADED";
}
?>