<?php
require('../../require/connection.php');
require('../../require/function.php');
    $template='';
    $id=$_POST['id'];
    $qyery="select * from appointments where id='$id'";
    $res=mysqli_query($con,$qyery);
    $i=1;
    $row=mysqli_fetch_assoc($res);
    $name=$row['name'];
    $event=$row['category'];
    $date=$row['edate'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $address=$row['address'];
    $status=$row['status'];
    if($status!='Appointment Requested'){
      $btn='';
      $tt="";
    }else{
      $btn=" <button class='cmntreply ngm' id='order_confirm_button' onclick='show_udptwrap()'>Confirm</button>";
      $tt="udptwrap";
    }
    if($status=='Canceled'){
      $cnclbtn=" ";
      $tt="udptwrap";
    }else{
      $cnclbtn=" <button class='cmntreplysend ngm'  onclick='cancle_appointment($id)'>Cancel</button>";
    }
      $template=$template."
      <div class='ordermainpanel'>
      <div class='panelheadding'>Appointment Details</div>
      <div class='orderdetailrow'>
        <div class='orderdetailrowsub'>
          <span class='orderfrom'>From: &nbsp;</span>
          <span class='orderfromname'> $name </span>
        </div>
        <div class='orderdetailrowsub'>
          <span class='orderfrom'>Date: &nbsp;</span>
          <span class='orderfromname'> $date </span>
        </div>
      </div>
      <div class='orderdetailrow'>
        <div class='orderdetailrowsub'>
          <span class='orderfrom'>Event: &nbsp;</span>
          <span class='orderfromname'> $event </span>
        </div>
        <div class='orderdetailrowsub'>
          <span class='orderfrom'> Email: &nbsp;</span>
          <span class='orderfromname'>$email </span>
        </div>
      </div>
       <div class='orderaddress'>
        <span class='orderfrom'> Address: &nbsp;</span>
        <div class='orderfromname n'> $address </div>
       </div>
    </div>
    <div class='updateorderpanel'>
      <div class='current_status'>
        <span class='orderfrom'> Current status: &nbsp;</span>
        <span class='orderfromname scdr'> $status </span>
      </div>
      <div id='$tt'>
      <div class='update_order_stattus' onclick='show_update_order_status_bar()'>
        Update Status
      </div>
      <div class='update_status_bar' id='update_status_bar'>
        <div class='updt_row'>
       <select name='order_status' id='update_order_current_status'>
       <option>Appointment Requested</option>
         <option>Appointment Confirmed</option>
         <option>Appointment Scheduled</option>
         <option>Appointment Complete</option>
       </select>
      </div>
      <div class='updt_row mt1'>
       <button class='updt' onclick='update__appointment_detailes($id)'>
         Update
       </button>
      </div>
      </div>
    </div>
    </div>
    <div class='contact_reply_button'>
      <button
        class='cmntreplyclose ngm'
        id='cmntreplyclose_id'
        onclick='close_popup()'
      >
        Close
      </button>
     $cnclbtn
     $btn
    </div>
        ";
 echo $template;
 ?>