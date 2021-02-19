<?php
require('../../require/connection.php');
require('../../require/function.php');

    $template='';
    $qyery="select * from banner";
    $res=mysqli_query($con,$qyery);
    $i=1;
    while($row=mysqli_fetch_assoc($res)){
      $image=$row['image'];
      $status=$row['status'];
      $id=$row['id'];
      if($status==1){
        $current_button=" <button class='deactive_user ngm' onclick='deactive_banner($id)'>
        Deactive
      </button>";
      }
      else{
        $current_button=" <button class='active_user ngm' onclick='active_banner($id)'>Active</button>";
      }
        $template=$template."
        <div class='banner_roww'>
        <div class='userslno dflexbox'>$i</div>
        <div class='banner_image_admin dflexbox'>
          <img src='../media/all_banners/$image' alt='banner image' class='ngm'>
        </div>
        <div class='cntbuttonbox'>
        $current_button
          <button class='cntdelete ngm' onclick='delete_banner($id)'>Delete</button>
        </div>
      </div>
        ";
        $i++;
    }
 echo $template;
?>