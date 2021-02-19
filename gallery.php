<?php
require('assets/require/header.php');
?>
 <div class="section">
        <div class="service">
          <div class="serviceheader">
            <span class="ft2">Our <span class="colormain">Gallery</span></span>
          </div>
          <div class="box-box">
          <?php
    $cs=1;
    $q="select * from gallery where status='$cs'";
    $res=mysqli_query($con,$q);
    while($row=mysqli_fetch_assoc($res)){
            $img=$row['gly_img'];
              $temp="<div class='service-box'>
              <a href='media/all_gallery/$img'><img src='media/all_gallery/$img' alt='gallery_image'></a>
            </div>";
              echo $temp;
 } ?>
          </div>
        </div>
      </div>
<?php
require('assets/require/footer.php');
?>