<?php
require('../../require/connection.php');
require('../../require/function.php');
    $template='';
    $qyery="select * from appointments";
    $res=mysqli_query($con,$qyery);
    $i=1;
    $template=$template."<div class='sectionheading'>All Appointments</div>
    <div class='cntwrap'></div>";
    while($row=mysqli_fetch_assoc($res)){
      $id=$row['id'];
      $category=$row['category'];
      $name=$row['name'];
      $email=$row['email'];
      $mobile=$row['mobile'];
      $cmnt=$row['address'];
      $date=$row['edate'];
      $template=$template."
      <div class='contactrow'>
      <div class='userslno dflexbox'>$i</div>
      <div class='username_row_ad dflexbox'>$category</div>
      <div class='username_row_ad dflexbox'>$date</div>
      <div class='username_row_ad dflexbox'>$name</div>
      <div class='username_row_ad dflexbox'>$email</div>
      <div class='username_row_ad dflexbox'>$mobile</div>
      <div class='username_row_ad dflexbox'>
        <button class='active_user ngm' onclick='show_popup_order($id)'>
          View
        </button>
      </div>
    </div>
        ";
        $i++;
    }
 echo $template;
?>