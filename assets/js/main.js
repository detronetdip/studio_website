function test() {
    swal("ok");
}
function redirect(path) {
    window.location.href = path;
}
function show_menu() {
    document.getElementById("slidermenu").classList.toggle("show_menu");
    document.getElementById("tglbar1").classList.toggle("tb1");
    document.getElementById("tglbar2").classList.toggle("tb2");
    document.getElementById("tglbar3").classList.toggle("tb3");
    document.getElementById("slidermenu").classList.toggle("disblock");
}
function show_fgtpbox() {
    document.getElementById("fgtpbox").classList.toggle("rew2");
    document.getElementById("fgtpimage").classList.toggle("rex2");
}
function send_otp() {
    var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var mail = jQuery("#fgtpemail").val();
    if (mail.match(mailformat)) {
        $.ajax({
            type: "POST",
            url: 'assets/allajaxphp/user/forget/sentotp.php',
            data: 'mail=' + mail,
            success: function (html) {
                if (html == '32') {
                    swal("OTP hasbeen sent to your Email Id.", "", "success").then(function () {
                        document.getElementById("sendotp").style.display = "none";
                        document.getElementById("labelotp").style.display = "initial";
                        document.getElementById("fgtotp").style.display = "initial";
                        document.getElementById("vfyotp").style.display = "initial";
                        jQuery("#fgtpemail").attr("readonly", true);
                    });
                } else {
                    if (html == '33') {
                        swal("Email not registered", "", "warning");
                    }
                }
            }
        });
    } else {
        swal("Invalid Email, should contain '.com' & '@'");
    }
}
function send_otpfor_reg() {
    document.getElementById("sendotpreg").innerHTML = "wait...";
    var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var mail = jQuery("#registeremail").val();
    if (mail.match(mailformat)) {
        jQuery("#registeremail").attr("readonly", true);
        $.ajax({
            type: "POST",
            url: 'assets/allajaxphp/user/user_reg/sentotp.php',
            data: 'mail=' + mail,
            success: function (html) {
                if (html == '32') {
                    swal("OTP hasbeen sent to your Email Id.", "", "success").then(function () {
                        document.getElementById("sendotpreg").style.display = "none";
                        document.getElementById("labelregotp").style.display = "initial";
                        document.getElementById("regotp").style.display = "initial";
                        document.getElementById("vfyotpreg").style.display = "initial";
                    });
                }
            }
        });

    } else {
        swal("Invalid Email, should contain '.com' & '@'");
    }
}
function vfy_otp_reg() {
    document.getElementById("vfyotpreg").innerHTML = "wait...";
    var otp = jQuery("#regotp").val();
    if (otp == "") {
        swal("Enter OTP");
    } else {
        $.ajax({
            type: "POST",
            url: 'assets/allajaxphp/user/user_reg/verifyotp.php',
            data: 'otp=' + otp,
            success: function (html) {
                if (html == '12') {
                    swal("OTP verified", "", "success").then(function () {
                        document.getElementById("labelregotp").style.display = "none";
                        document.getElementById("regotp").style.display = "none";
                        document.getElementById("vfyotpreg").style.display = "none";
                        document.getElementById("regusername").style.display = "initial";
                        document.getElementById("regusernameinput").style.display = "initial";
                        document.getElementById("regpassword").style.display = "initial";
                        document.getElementById("regpasswordinput").style.display = "initial";
                        document.getElementById("register").style.display = "initial";
                    });
                }
            }
        });

    }
}
function createnewaccount() {
    document.getElementById("register").innerHTML = "Wait...";
    var mail = jQuery("#registeremail").val();
    var username = jQuery("#regusernameinput").val();
    var password = jQuery("#regpasswordinput").val();
    $.ajax({
        type: "POST",
        url: 'assets/allajaxphp/user/user_reg/createacc.php',
        data: 'mail=' + mail + '&username=' + username + '&password=' + password,
        success: function (html) {
            if (html == 'e1') {
                swal("Username already exist", "", "warning");
            } else {
                swal("Successfull", "", "success").then(function () {
                    redirect('index.php');
                });
            }
        }
    });
}
function show_regbox() {
    document.getElementById("regbox").classList.toggle("rey2");
    document.getElementById("regimage").classList.toggle("rez2");
}
function user_login() {
    document.getElementById("user_login").innerHTML = "wait...";
    var username = jQuery("#login_username").val();
    var password = jQuery("#login_password").val();
    if (username == '' || password == '') {
        swal("All fields are mandatory", "", "warning");
    } else {
        $.ajax({
            type: "POST",
            url: 'assets/allajaxphp/user/user_login/verifylogin.php',
            data: 'username=' + username + '&password=' + password,
            success: function (html) {
                if (html == '13b') {
                    redirect('index.php');
                } else {
                    swal("Invalid credentials", "", "warning").then(function(){
                        document.getElementById("user_login").innerHTML = "Login";
                    })
                }
            }
        });
    }
}
function vftfgtpotp() {
    var otp = jQuery("#fgtotp").val();
    var mail = jQuery("#fgtpemail").val();
    if (otp == "") {
        swal("Enter OTP");
    } else {
        $.ajax({
            type: "POST",
            url: 'assets/allajaxphp/user/forget/verifyotp.php',
            data: 'otp=' + otp + '&mail='+mail,
            success: function (html) {
                if (html == '12') {
                    swal("OTP verified. Passsword reset link has been sent to your email id", "", "success").then(function () {
                        redirect('logsgn.php');
                    });
                }
            }
        });
    }
}
function HIRE_APPOINTMENT() {
    var event = jQuery("#event_select").val();
    var customer_name = jQuery("#weddingevent_customer").val();
    var event_date = jQuery("#weddingevent_date").val();
    var event_address = jQuery("#weddingevent_address").val();
    var event_email = jQuery("#weddingevent_mail").val();
    var event_mobile = jQuery("#weddingevent_mobile").val();
    if (
        event == "" ||
        event_address == "" ||
        event_date == "" ||
        customer_name == "" ||
        event_email == "" ||
        event_mobile == ""
    ) {
        swal("All fields are mandatory", "", "warning");
    } else {
        var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (event_email.match(mailformat)) {
            $.ajax({
                type: "POST",
                url: 'assets/allajaxphp/appointments/bookappoinments.php',
                data: 'event=' + event + '&event_date=' + event_date + '&customer_name=' + customer_name + '&event_mobile=' + event_mobile + '&event_email=' + event_email + '&event_address=' + event_address,
                success: function (html) {
                    if (html == 'UPLOADED') {
                        jQuery("#event_select").val('Select Category');
                        jQuery("#weddingevent_customer").val('');
                        jQuery("#weddingevent_date").val('');
                        jQuery("#weddingevent_address").val('');
                        jQuery("#weddingevent_mail").val('');
                        jQuery("#weddingevent_mobile").val('');
                        swal("Appointment has been booked.Our executive will contact you through call as early as possible, keep track on My Appointments in account section, stay tuned.");
                    }else{
                        swal("Something went wrong", "", "warning");
                    }
                }
            });
        } else {
            swal("Invalid Email Id");
        }
    }
}
function showtouserupdateusername() {
    document.getElementById("updatuserusername").style.display = "initial";
    document.getElementById("updatuserpassword").style.display = "none";
}
function closesmpp() {
    document.getElementById("updatuserusername").style.display = "none";
    document.getElementById("updatuserpassword").style.display = "none";
}
function showtouserupdatepassword() {
    document.getElementById("updatuserusername").style.display = "none";
    document.getElementById("updatuserpassword").style.display = "initial";
}
function updateusenameofuser() {
    var username = jQuery("#updateusenameofuser").val();
    document.getElementById("updatunameoguser").innerHTML = "wait...";
    $.ajax({
        type: "POST",
        url: 'assets/allajaxphp/user/updt/updateuname.php',
        data: 'username=' + username,
        success: function (html) {
            swal("Updated Sucsessfully.").then(function(){
                redirect('account.php');
            });
        }
    });
}
function updatepasswordofuser() {
    var pass1 = jQuery("#updatepasswordofuser1").val();
    var pass2 = jQuery("#updatepasswordofuser2").val();
    if (pass1 == '' && pass2 == '') {
        swal("All fields are mandatory", "", "warning");
    } else {
        if (pass1 != pass2) {
            swal("Password not matched", "", "warning");
        } else {
            document.getElementById("updatunameoguser").innerHTML = "wait...";
    $.ajax({
        type: "POST",
        url: 'assets/allajaxphp/user/updt/updatepassword.php',
        data: 'pass1=' + pass1,
        success: function (html) {
            swal("Updated Sucsessfully.Login again.").then(function(){
                logout();
                redirect('logsgn.php');
            });
        }
    });
        }
    }
}
function logout() {
    var d = 1;
    $.ajax({
        type: "POST",
        url: 'assets/allajaxphp/user/logout/logout.php',
        data: 'd=' + d,
        success: function (html) {
            redirect('index.php');
        }
    });
}
function contact_us() {
    var name = jQuery("#contactusname").val();
    var email = jQuery("#contactusemail").val();
    var number = jQuery("#contactusnumber").val();
    var comment = jQuery("#contactuscmnd").val();
    document.getElementById("contactuscmndsent").innerHTML = "wait...";
    $.ajax({
        type: "POST",
        url: 'assets/allajaxphp/contactus/sentcontact.php',
        data: 'name=' + name + '&email=' + email + '&number=' + number + '&comment=' + comment,
        success: function (html) {
            jQuery("#contactusname").val('');
            jQuery("#contactusemail").val('');
            jQuery("#contactusnumber").val('');
            jQuery("#contactuscmnd").val('');
            document.getElementById("contactuscmndsent").innerHTML = "Submit";
            swal("Thanks for Contact us, we will reach you shortly");
        }
    });
}
