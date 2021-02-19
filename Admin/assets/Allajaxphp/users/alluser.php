<?php
require('../../require/connection.php');
require('../../require/function.php');
    $template='';
    $qyery="select * from users";
    $res=mysqli_query($con,$qyery);
    $i=1;
    $template=$template."<div class='sectionheading'>All Users</div>
    <div class='cntwrap'></div>";
    while($row=mysqli_fetch_assoc($res)){
      $id=$row['id'];
      $name=$row['username'];
      $email=$row['email'];
      $status=$row['status'];
      if($status==1){
        $current_button="<button class='deactive_user ngm' onclick='deactive_user($id)'>Deactive</button>";
      }
      else{
        $current_button="<button class='active_user ngm' onclick='active_user($id)'>Active</button>";
      }
      $template=$template."
      <div class='contactrow'>
      <div class='userslno dflexbox'>$i</div>
      <div class='username_row_ad dflexbox'>$name</div>
      <div class='username_row_ad dflexbox'>$email</div>
      <div class='username_row_ad dflexbox'>
      $current_button
      </div>
    </div>
        ";
        $i++;
    }
 echo $template;
?>