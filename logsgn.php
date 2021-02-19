<?php
require('assets/require/header.php');
?>
   <div class="section">
        <div class="pgelgnwrp">
          <div class="logincontainer">
            <div class="pgelgn-sub">
              <div class="pglgn_sub_wrap" id="loginimage">
                <img
                  src="assets/images/undraw_secure_login_pdn4.png"
                  alt="login image"
                />
              </div>
              <div class="pglgn_sub_wrap w2 x2" id="fgtpimage">
                <img
                  src="assets/images/undraw_forgot_password_gi2d.png"
                  alt="login image"
                />
              </div>
              <div class="pglgn_sub_wrap z2" id="regimage">
                <img
                  src="assets/images/undraw_mobile_payments_vftl.png"
                  alt="login image"
                />
              </div>
            </div>
            <div class="pgelgn-sub">
              <div class="pglgn_sub_wrap" id="loginbox">
                <div class="loginlogo">
                  <i class="fas fa-user-circle logregsub-sub1-logo"></i>
                </div>
                <div class="logintext">
                  <span class="colormain">Welcome</span> &nbsp; Back
                </div>
                <div class="form">
                  <label for="username">Username</label>
                  <br />
                  <input
                    class="logininput"
                    type="text"
                    placeholder="Enter Username"
                    id="login_username"
                  />
                  <br />
                  <label for="Password">Password</label>
                  <br />
                  <input
                    class="logininput"
                    type="password"
                    placeholder="Enter Password"
                    id="login_password"
                  />
                  <span class="fgtp_link" onclick="show_fgtpbox()"
                    >Forget Passsword ?</span
                  >
                  <br />
                  <button class="loginbtn" onclick="user_login()" id="user_login">Login</button>
                  <div class="createacc">
                    <span class="crtac" onclick="show_regbox()"
                      >Create account</span
                    >
                  </div>
                </div>
              </div>
              <div class="pglgn_sub_wrap w2" id="fgtpbox">
                <div class="loginlogo">
                  <i class="fas fa-unlock-alt"></i>
                </div>
                <div class="logintext">
                  <span class="colormain">Forget</span> &nbsp; Password?
                </div>
                <div class="form">
                  <label for="email">Email</label>
                  <br />
                  <input
                    class="logininput"
                    type="email"
                    placeholder="Enter Email"
                    id="fgtpemail"
                  />
                  <br />
                  <label for="OTP" class="none" id="labelotp">OTP</label>
                  <br />
                  <input
                    class="logininput none"
                    type="text"
                    placeholder="Enter OTP"
                    id="fgtotp"
                  />
                  <br />
                  <button class="loginbtn" id="sendotp" onclick="send_otp()">
                    Send OTP
                  </button>
                  <button
                    class="loginbtn none"
                    id="vfyotp"
                    onclick="vftfgtpotp()"
                  >
                    Verify OTP
                  </button>
                </div>
              </div>
              <div class="pglgn_sub_wrap y2" id="regbox">
                <div class="loginlogo">
                  <i class="fas fa-user-alt"></i>
                </div>
                <div class="logintext">
                  <span class="colormain">Create</span>&nbsp; Account
                </div>
                <div class="form">
                  <label for="email">Email</label>
                  <br />
                  <input
                    class="logininput"
                    type="email"
                    placeholder="Enter Email"
                    id="registeremail"
                  />
                  <br />
                  <label for="username" class="none" id="regusername"
                    >Username</label
                  >
                  <br />
                  <input
                    class="logininput none"
                    type="text"
                    placeholder="Enter Username"
                    id="regusernameinput"
                  />
                  <br />
                  <label for="Password" class="none" id="regpassword"
                    >Password</label
                  >
                  <br />
                  <input
                    class="logininput none"
                    type="password"
                    placeholder="Enter Password"
                    id="regpasswordinput"
                  />
                  <br />
                  <label for="OTP" class="none" id="labelregotp">OTP</label>
                  <br />
                  <input
                    class="logininput none"
                    type="text"
                    placeholder="Enter OTP"
                    id="regotp"
                  />
                  <br />
                  <button
                    class="loginbtn"
                    id="sendotpreg"
                    onclick="send_otpfor_reg()"
                  >
                    Send OTP
                  </button>
                  <button
                    class="loginbtn none"
                    id="vfyotpreg"
                    onclick="vfy_otp_reg()"
                  >
                    Verify OTP
                  </button>
                  <button class="loginbtn none" id="register" onclick="createnewaccount()">
                    Create acctont
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
require('assets/require/footer.php');
?>