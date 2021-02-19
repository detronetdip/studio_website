<?php
require('assets/require/header.php');
?>
<div class="section">
        <div class="service">
          <div class="serviceheader">
            <span class="ft2">Contact <span class="colormain">us</span></span>
          </div>
          <div class="contactcontainer" style="b">
            <div class="contactcontainer_sub">
              <input type="text" placeholder="Enter Your Name" id="contactusname"/>
              <input type="email" placeholder="Enter Your Email" id="contactusemail"/>
              <input type="number" placeholder="Enter Mobile Number" id="contactusnumber"/>
              <textarea
                name="comment"
                id="contactuscmnd"
                placeholder="Enter Your Query"
              ></textarea>
              <button class="contactsend" onclick="contact_us()" id="contactuscmndsent">Submit</button>
            </div>
            <div class="contactcontainer_sub">
              <div class="address">
                Our <span class="colormain">Address</span>
              </div>
              <div class="addressrow">
                <div class="adressrowimage">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="addressrowaddress">
                  Nandi Studio, Chalkbazar, Anandapur <br />
                  Paschim Medinipur, 721122
                </div>
              </div>
              <div class="addressrow">
                <div class="adressrowimage">
                  <i class="far fa-envelope"></i>
                </div>
                <div class="addressrowaddress">parthanandi87@gmail.com</div>
              </div>
              <div class="addressrow">
                <div class="adressrowimage">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="addressrowaddress">8918565474</div>
              </div>
              <div class="map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14737.53000873197!2d87.408558!3d22.564793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a4759d7e1878e4f!2sNANDI%20STUDIO!5e0!3m2!1sen!2sin!4v1612003598116!5m2!1sen!2sin"
                  frameborder="0"
                  style="border: 0"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                ></iframe>
              </div>
              <br /><br />
            </div>
          </div>
        </div>
      </div>
<?php
require('assets/require/footer.php');
?>