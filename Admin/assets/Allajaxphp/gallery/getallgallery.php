<?php
require('../../require/connection.php');
require('../../require/function.php');

    $template='';
    $qyery="select * from gallery";
    $res=mysqli_query($con,$qyery);
    $i=1;
    while($row=mysqli_fetch_assoc($res)){
      $image=$row['gly_img'];
      $status=$row['status'];
      $id=$row['id'];
      if($status==1){
        $current_button=" <button class='deactive_user ngm' onclick='deactive_gallery($id)'>
        Deactive
      </button>";
      }
      else{
        $current_button=" <button class='active_user ngm' onclick='active_gallery($id)'>Active</button>";
      }
        $template=$template."
        <div class='galleryrow'>
              <div class='cntimage dflexbox'>
                <img src='../media/all_gallery/$image' alt='image' class='ngm'>
              </div>
              <div class='username_row_ad dflexbox'>
        $current_button
          <button class='cntdelete ngm' onclick='delete_gallery($id)'>Delete</button>
        </div>
      </div>
        ";
        $i++;
    }
 echo $template;
?>