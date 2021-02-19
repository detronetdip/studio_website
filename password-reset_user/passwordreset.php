<?php
require('../assets/require/connection.php');
require('../assets/require/function.php');
if(isset($_POST['submit'])){
    $pass=get_safe_value($con,$_POST['new_pass']);
    $repass=get_safe_value($con,$_POST['re_new_pass']);
    if($pass==$repass){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $query="update users set password='$hash' where id='$id'";
            mysqli_query($con,$query);
            ?>
            <script>
alert("Passsword Changed");
</script>
            <?php
            redirect_to('../logsgn.php');
         }else{
        redirect_to('../logsgn.php');
         }
    }else{
        ?>
<script>
alert("Passsword not matched");
</script>
        <?php
    }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nandi Studio Admin</title>
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="../Admin/assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animation.css" />
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="fscr">
      <div class="middlediv">
      <form method="post">
        <h4 style="font-size: 14px">Reset Password</h4>
        <input class="loginn" type="password" placeholder="Enter New Password" id="adminusername" name="new_pass"/>
        <input class="loginn" type="password" placeholder="Confirm New Password" id="adminpassword" name="re_new_pass"/>
          <button type="submit" name="submit" style="background:#00c853;color:#fff;" onclick="">R e s e t</button>
      </div>
      </form>
    </div>
    <script src="assets/js/main.js"></script>
  </body>
</html>