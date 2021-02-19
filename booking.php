<?php
require('assets/require/header.php');
if(isset($_SESSION['USER_LOGIN'])){
?>
 <div class="section">
        <div class="service">
          <div class="serviceheader">
            <span class="ft2 ">Book <span class="colormain">Appointment</span></span>
          </div>
          <div class="contactcontainer dflexbox">
              <div class="hireusform">
                <select id="event_select">
                  <option >Select Category</option>
                    <option >Wedding Photography</option>
                    <option >Wedding Videography</option>
                    <option >Wedding Album</option>
                    <option >Prewedding Shoot</option>
                    <option >Coffe Mug Print</option>
                    <option >T-shirt Print</option>
                    <option > Online Solution</option>
                    <option > Mobile Backcover Print</option>
                    <option > Bill book Print</option>
                    <option > Digital Print</option>
                    <option > Magazine Print</option>
                    <option > Magazine Print</option>
                    <option > Photo Frame</option>
                    <option > Photo Lamination</option>
                    <option > Visiting Card</option>
                </select>
                <input type="date" placeholder="Enter Event Date" id="weddingevent_date"> 
                <input type="text" placeholder="Enter Name" id="weddingevent_customer">
                <input type="email" placeholder="Enter Email" id="weddingevent_mail">
                <input type="number" placeholder="Enter Mobile" id="weddingevent_mobile">
                <textarea name="addressevent" id="weddingevent_address" placeholder="Enter Address"></textarea>
                <button class="contactsend" id="weddingevent_hire" onclick="HIRE_APPOINTMENT()">Book Appointment</button>
            </div>
          </div>
        </div>
      </div>
<?php
require('assets/require/footer.php');
}else{
    redirect_to('logsgn.php');
}
?>