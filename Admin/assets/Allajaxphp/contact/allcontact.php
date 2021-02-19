<?php
require('../../require/connection.php');
require('../../require/function.php');
    $template='';
    $qyery="select * from contact_us";
    $res=mysqli_query($con,$qyery);
    $i=1;
    $template=$template."<div class='sectionheading'>Contact Master</div>
    <div class='cntwrap'></div>";
    while($row=mysqli_fetch_assoc($res)){
      $id=$row['id'];
      $name=$row['name'];
      $email=$row['email'];
      $mobile=$row['mobile'];
      $cmnt=$row['comment'];
      $date=$row['date'];
      $template=$template."
      <div class='contactrow'>
        <div class='slno dflexbox'>$i</div>
        <div class='cntname dflexbox'>$name</div>
        <div class='cntemail dflexbox'>
         $email
        </div>
        <div class='cntdate dflexbox'>$mobile</div>
        <div class='cntdate dflexbox'>$date</div>
        <div class='cntbuttonbox'>
          <button class='cntview ngm' onclick='show_popup_contact($id)'>
            View
          </button>
          <button class='cntdelete ngm'>Delete</button>
        </div>
      </div>
        ";
        $i++;
    }
 echo $template;
?>