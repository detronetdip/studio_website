<?php
require('assets/require/header.php');
if(isset($_SESSION['USER_LOGIN'])){
?>
 <div class="section">
          <div class="smalpup" id="updatuserusername">

              <div class="smpheading">
                  update Username
              </div>
              <div class="boxinput">
                  <input type="text" placeholder="Enter New Username" id="updateusenameofuser">
              </div>
              <div class="boxinput">
              <button class="updtnunmus"  onclick="updateusenameofuser()"  id="updatunameoguser">Update</button>
              <button class="updtnunmus close" onclick="closesmpp()">Close</button>
            </div>
          </div>
          <div class="smalpup" id="updatuserpassword">
            <div class="smpheading">
                update password
            </div>
            <div class="boxinput">
                <input type="password" placeholder="Enter New Password" id="updatepasswordofuser1"><br>
                <input type="password" placeholder="Renter New Password" id="updatepasswordofuser2">
            </div>
            <div class="boxinput">
            <button class="updtnunmus" onclick="updatepasswordofuser()">Update</button>
            <button class="updtnunmus close" onclick="closesmpp()">Close</button>
          </div>
        </div>
        <div class="service">
          <div class="serviceheader">
            <span class="ft2">Welcome <span class="colormain"><?php 
            $uigd=$_SESSION['USER_ID'];
            $ryd="select * from users where id='$uigd'";
            $resd=mysqli_query($con,$ryd);
            $rtyr=mysqli_fetch_assoc($resd);
            echo $rtyr['username'];?></span></span>
          </div>
          <div class="changebox">
                <button class="updtshowname" onclick="showtouserupdateusername()">Update Username</button>
                <button class="updtshowname" onclick="showtouserupdatepassword()">Update Password</button>
          </div>
          <div class="serviceheader">
            <span class="ft2">My <span class="colormain">Appointments</span></span>
          </div>
          <div class="myappointments">
        <?php 
          $uid=$_SESSION['USER_ID'];
          $ry="select * from appointments where uid='$uid'";
          $res=mysqli_query($con,$ry);
          $i=1;
          while($row=mysqli_fetch_assoc($res)){
        ?>
            <div class="contactrow">
                <div class="userslno dflexbox"><?php echo $i; ?></div>
                <div class="username_row_ad dflexbox"><?php echo $row['category']; ?></div>
                <div class="username_row_ad dflexbox"><?php echo $row['edate']; ?></div>
                <div class="username_row_ad dflexbox"><?php echo $row['status']; ?></div>
          </div>
<?php  $i++;  } ?>
        </div>
      </div>
      </div>
<?php
require('assets/require/footer.php');
}else {
    redirect_to('index.php');
}
?>