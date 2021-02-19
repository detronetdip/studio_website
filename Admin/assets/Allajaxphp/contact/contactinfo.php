<?php
require('../../require/connection.php');
require('../../require/function.php');
    $cnid=$_POST['id'];
    $template='';
    $qyery="select * from contact_us where id='$cnid'";
    $res=mysqli_query($con,$qyery);
    $row=mysqli_fetch_assoc($res);
      $email=$row['email'];
      $cmnt=$row['comment'];
      $template=$template."
      <div class='sender'>From: &nbsp; <span id='sender_email'>$email</span></div>
      <div class='comment'>
        $cmnt
      </div>
      <div class='rebox' id='rebox'>
        <textarea
          name='reply'
          id='sentreply'
          placeholder='Enter Reply...'
        ></textarea>
      </div>
      <div class='contact_reply_button'>
        <button
          class='cmntreply ngm'
          id='cmntreply_id'
          onclick='show_sent_reply_box()''
        >
          Reply
        </button>
        <button
          class='cmntreplysend ngm'
          id='cmntreplysend_id'
          onclick='sent_reply()'
        >
          Send
        </button>
        <button
          class='cmntreplyclose ngm'
          id='cmntreplyclose_id'
          onclick='close_popup()'
        >
          Close
        </button>
      </div>
        ";
 echo $template;
?>