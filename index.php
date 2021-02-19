<?php
require('assets/require/header.php');
?>
      <div class="section">
        <div class="section-sub">
          <div class="swiper-container">
            <div class="swiper-wrapper">
<?php
    $cs=1;
    $q="select * from banner where status='$cs'";
    $res=mysqli_query($con,$q);
    while($row=mysqli_fetch_assoc($res)){
            $img=$row['image'];
              $temp="<div class='swiper-slide'>
                <img src='media/all_banners/$img' alt='' />
              </div>";
              echo $temp;
 } ?>
            </div>
          </div>
        </div>
        <div class="section-sub gridcenter">
          <div class="text">
            <span class="ft">
              Your <span class="colormain"> Dream</span>,<br />
              &nbspOur <span class="colormain">Work</span>
            </span>
            <br />
            <button class="getstarted" onclick="redirect('service.php')">
              Get started
            </button>
          </div>
        </div>
      </div>
<?php
require('assets/require/footer.php');
?>