function getadmin() {
    username = 1;
    $.ajax({
        url: 'assets/Allajaxphp/admin/getname.php',
        type: 'post',
        data: 'username=' + username,
        success: function (html) {
            document.getElementById("dname").innerHTML = html;
            document.getElementById("mname").innerText = html;
        }
    });
}
function getadminimage() {
    username = 1;
    $.ajax({
        url: 'assets/Allajaxphp/admin/getimage.php',
        type: 'post',
        data: 'username=' + username,
        success: function (html) {
            jQuery("#adminlogobox").html(html);
            jQuery("#upp_logo").html(html);
        }
    });
}
function dashbord_getuser() {
    username = 1;
    $.ajax({
        url: 'assets/Allajaxphp/dashbord/userinfo/getuserinfo.php',
        type: 'post',
        data: 'username=' + username,
        success: function (html) {
            jQuery("#dash_user").html(html);
        }
    });
}
function dashbord_getbanner() {
    username = 1;
    $.ajax({
        url: 'assets/Allajaxphp/dashbord/bannerinfo/getbannerinfo.php',
        type: 'post',
        data: 'username=' + username,
        success: function (html) {
            jQuery("#dash_banner").html(html);
        }
    });
}
dashbord_getuser();
dashbord_getbanner();
getadmin();
getadminimage();
function redirect(path) {
    window.location.href = path;
}
$(document).ready(function () {
    $('.navlink ul li').click(function () {
        $('.navlink ul li').removeClass('active');
        $(this).addClass('active');
    })
});
function show_dashbord() {
    dashbord_getbanner();
    dashbord_getuser();
    document.getElementById('dashbord_wrapper').style.display = "initial";
    document.getElementById('manage_banner').style.display = "none";
    document.getElementById('all_order').style.display = "none";
    document.getElementById('all_user').style.display = "none";
    document.getElementById('contact_master').style.display = "none";
    document.getElementById('update_profile').style.display = "none";
    document.getElementById('gallery_wrapper').style.display = "none";
}
function show_banner() {
    get_all_banner();
    document.getElementById('dashbord_wrapper').style.display = "none";
    document.getElementById('manage_banner').style.display = "initial";
    document.getElementById('all_order').style.display = "none";
    document.getElementById('all_user').style.display = "none";
    document.getElementById('contact_master').style.display = "none";
    document.getElementById('update_profile').style.display = "none";
    document.getElementById('gallery_wrapper').style.display = "none";
}
function show_order() {
    getallappointments();
    document.getElementById('dashbord_wrapper').style.display = "none";
    document.getElementById('manage_banner').style.display = "none";
    document.getElementById('all_order').style.display = "initial";
    document.getElementById('all_user').style.display = "none";
    document.getElementById('contact_master').style.display = "none";
    document.getElementById('update_profile').style.display = "none";
    document.getElementById('gallery_wrapper').style.display = "none";
}
function show_user() {
    get_all_user();
    document.getElementById('dashbord_wrapper').style.display = "none";
    document.getElementById('manage_banner').style.display = "none";
    document.getElementById('all_order').style.display = "none";
    document.getElementById('all_user').style.display = "initial";
    document.getElementById('contact_master').style.display = "none";
    document.getElementById('update_profile').style.display = "none";
    document.getElementById('gallery_wrapper').style.display = "none";
}
function show_contact() {
    get_all_contact();
    document.getElementById('dashbord_wrapper').style.display = "none";
    document.getElementById('manage_banner').style.display = "none";
    document.getElementById('all_order').style.display = "none";
    document.getElementById('all_user').style.display = "none";
    document.getElementById('contact_master').style.display = "initial";
    document.getElementById('update_profile').style.display = "none";
    document.getElementById('gallery_wrapper').style.display = "none";
}
function show_update() {
    document.getElementById('dashbord_wrapper').style.display = "none";
    document.getElementById('manage_banner').style.display = "none";
    document.getElementById('all_order').style.display = "none";
    document.getElementById('all_user').style.display = "none";
    document.getElementById('contact_master').style.display = "none";
    document.getElementById('update_profile').style.display = "initial";
    document.getElementById('gallery_wrapper').style.display = "none";
}
function show_gallery_wrap() {
    get_all_gallery();
    document.getElementById('dashbord_wrapper').style.display = "none";
    document.getElementById('manage_banner').style.display = "none";
    document.getElementById('all_order').style.display = "none";
    document.getElementById('all_user').style.display = "none";
    document.getElementById('contact_master').style.display = "none";
    document.getElementById('update_profile').style.display = "none";
    document.getElementById('gallery_wrapper').style.display = "initial";
}
function switch_dark() {
    document.getElementById('dark_mode').style.display = "none";
    document.getElementById('normal_mode').style.display = "initial";
    document.body.style.filter = "invert(100%)";
    $(".ngm").each(function () {
        $(this).css("filter", "invert(100%)");
    })
}
function switch_normal() {
    document.getElementById('dark_mode').style.display = "initial";
    document.getElementById('normal_mode').style.display = "none";
    document.body.style.filter = "invert(0%)";
    $(".ngm").each(function () {
        $(this).css("filter", "invert(0%)");
    })
}
function update_username() {
    var username = jQuery("#update_username_input").val();
    jQuery("#update_username_input").val('');
    $.ajax({
        url: 'assets/Allajaxphp/admin/updtuname.php',
        type: 'post',
        data: 'username=' + username,
        success: function (html) {
            swal("Updated Successfully").then(function () {
                getadmin();;
            });
        }
    });
}
function checkpass() {
    var pass = jQuery("#update_password_input").val();
    var repass = jQuery("#update_password_re_input").val();
    if (repass == pass) {
        document.getElementById("war").innerText = "Password Matched";
    }
    else {
        document.getElementById("war").innerText = "Password Not Matched";
    }
}
function update_password() {
    var password = jQuery("#update_password_input").val();
    jQuery("#update_password_re_input").val('');
    jQuery("#update_password_input").val('');
    $.ajax({
        url: 'assets/Allajaxphp/admin/updtupass.php',
        type: 'post',
        data: 'password=' + password,
        success: function (html) {
            swal("Updated Successfully").then(function () {
                logout();
            });
        }
    });
}
function update_admin_name() {
    var admin_name = jQuery("#update_admin_name_input").val();
    jQuery("#update_admin_name_input").val('');
    $.ajax({
        url: 'assets/Allajaxphp/admin/updtadname.php',
        type: 'post',
        data: 'admin_name=' + admin_name,
        success: function (html) {
            swal("Updated Successfully").then(function () {
                getadmin();
            });
        }
    });
}
function show_update_username() {
    document.getElementById('update_username').style.display = "flex";
    document.getElementById('update_password').style.display = "none";
    document.getElementById('update_photo').style.display = "none";
    document.getElementById('update_admin_name').style.display = "none";
}
function show_update_password() {
    document.getElementById('update_username').style.display = "none";
    document.getElementById('update_password').style.display = "flex";
    document.getElementById('update_photo').style.display = "none";
    document.getElementById('update_admin_name').style.display = "none";
}
function show_update_photo() {
    document.getElementById('update_username').style.display = "none";
    document.getElementById('update_password').style.display = "none";
    document.getElementById('update_photo').style.display = "flex";
    document.getElementById('update_admin_name').style.display = "none";
}
function show_update_admin_name() {
    document.getElementById('update_username').style.display = "none";
    document.getElementById('update_password').style.display = "none";
    document.getElementById('update_photo').style.display = "none";
    document.getElementById('update_admin_name').style.display = "flex";
}
function show_popup_contact(id) {
    document.getElementById('orderbox').style.display = "none";
    document.getElementById('cntcmtbox').style.display = "initial";
    document.getElementById('popupbaselayer').style.display = "grid";
    /*var i=document.getElementById('senderrowmail').innerHTML;
    document.getElementById('sender_email').innerHTML=i;*/
    contact_info(id);

}
function show_sent_reply_box() {
    document.getElementById('rebox').style.height = "7rem";
    document.getElementById('cmntreplysend_id').style.display = "block";
    document.getElementById('cmntreply_id').style.display = "none";
}
function close_popup() {
    document.getElementById('popupbaselayer').style.display = "none";
}
function sent_reply() {
    show_loder();
    var sender_mail = document.getElementById('sender_email').innerHTML;
    var msg = document.getElementById('sentreply').value;
    $.ajax({
        url: 'assets/Allajaxphp/contact/sentreply.php',
        type: 'post',
        data: 'sender_mail=' + sender_mail + '&msg=' + msg,
        success: function (html) {
            swal("Sent").then(function () {
                hide_loder();
            })
        }
    });
}
function show_popup_order(id) {
    show_loder();
    $.ajax({
        url: 'assets/Allajaxphp/appointments/getdetailes.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            jQuery("#orderbox").html(html);
            hide_loder();
        }
    });
    document.getElementById('cntcmtbox').style.display = "none";
    document.getElementById('popupbaselayer').style.display = "grid";
    document.getElementById('orderbox').style.display = "initial";
}
function show_update_order_status_bar() {
    document.getElementById('update_status_bar').style.height = "40%";
}
function show_udptwrap() {
    document.getElementById('order_confirm_button').style.display = "none";
    document.getElementById('udptwrap').style.display = "initial";
}
function show_add_banner_box() {
    document.getElementById('banner_row_container').style.height = "30%";
}
function show_add_gallery_box() {
    document.getElementById('galleryaddbox').style.height = "30%";
}
function show_loder() {
    document.getElementById('loading').style.display = "initial";
}
function hide_loder() {
    document.getElementById('loading').style.display = "none";
}
function add_banner_image_by_admin() {
    show_loder();
    var fd = new FormData();
    var files = $('#banner_image_add_admin')[0].files;
    fd.append('file', files[0]);
    $.ajax({
        url: 'assets/Allajaxphp/banner/addbanner.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function (html) {
            swal(html).then(function () {
                get_all_banner();
                document.getElementById('banner_row_container').style.height = "0%";
            });
        }
    });
}
function add_gallery_image_by_admin() {
    show_loder();
    var fd = new FormData();
    var files = $('#glyimg')[0].files;
    fd.append('file', files[0]);
    $.ajax({
        url: 'assets/Allajaxphp/gallery/addgallery.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function (html) {
            swal(html).then(function () {
                get_all_gallery();
                document.getElementById('galleryaddbox').style.height = "0%";
            });
        }
    });
}
function update_admin_photo() {
    show_loder();
    var fd = new FormData();
    var files = $('#update_photo_input')[0].files;
    fd.append('file', files[0]);
    $.ajax({
        url: 'assets/Allajaxphp/admin/addphoto.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function (html) {
            swal(html).then(function () {
                getadminimage();
                hide_loder();
            });
        }
    });
}
function get_all_banner() {
    show_loder();
    var upcategory = "1";
    $.ajax({
        url: 'assets/Allajaxphp/banner/getbanner.php',
        type: 'post',
        data: 'upcategory=' + upcategory,
        success: function (html) {
            jQuery("#banner_row_container_main").html(html);
            hide_loder();
        }
    });

}
function get_all_gallery() {
    show_loder();
    var upcategory = "1";
    $.ajax({
        url: 'assets/Allajaxphp/gallery/getallgallery.php',
        type: 'post',
        data: 'upcategory=' + upcategory,
        success: function (html) {
            jQuery("#galleryimagebox_main").html(html);
            hide_loder();
        }
    });

}
function delete_banner(id) {
    $.ajax({
        url: 'assets/Allajaxphp/banner/deletebanner.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            get_all_banner();
        }
    });
}
function active_banner(id) {
    $.ajax({
        url: 'assets/Allajaxphp/banner/activebanner.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            get_all_banner();
        }
    });
}
function deactive_banner(id) {
    $.ajax({
        url: 'assets/Allajaxphp/banner/deactivebanner.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            get_all_banner();
        }
    });
}
function delete_gallery(id) {
    $.ajax({
        url: 'assets/Allajaxphp/gallery/deletegallery.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            get_all_gallery();
        }
    });
}
function active_gallery(id) {
    $.ajax({
        url: 'assets/Allajaxphp/gallery/activegallery.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            get_all_gallery();
        }
    });
}
function deactive_gallery(id) {
    $.ajax({
        url: 'assets/Allajaxphp/gallery/deactivegallery.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            get_all_gallery();
        }
    });
}
function get_all_contact() {
    var upcategory = "1";
    $.ajax({
        url: 'assets/Allajaxphp/contact/allcontact.php',
        type: 'post',
        data: 'upcategory=' + upcategory,
        success: function (html) {
            jQuery("#contact_master").html(html);
        }
    });
}
function contact_info(id) {
    $.ajax({
        url: 'assets/Allajaxphp/contact/contactinfo.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            jQuery("#cntcmtbox").html(html);
        }
    });
}
function get_all_user() {
    var upcategory = "1";
    $.ajax({
        url: 'assets/Allajaxphp/users/alluser.php',
        type: 'post',
        data: 'upcategory=' + upcategory,
        success: function (html) {
            jQuery("#all_user").html(html);
        }
    });
}
function active_user(id) {
    $.ajax({
        url: 'assets/Allajaxphp/users/activeuser.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            get_all_user();
        }
    });
}
function deactive_user(id) {
    $.ajax({
        url: 'assets/Allajaxphp/users/deactiveuser.php',
        type: 'post',
        data: 'id=' + id,
        success: function (html) {
            get_all_user();
        }
    });
}
function admin_login() {
    var username = jQuery("#adminusername").val();
    var password = jQuery("#adminpassword").val();
    $.ajax({
        url: 'assets/Allajaxphp/admin/login.php',
        type: 'post',
        data: 'username=' + username + '&password=' + password,
        success: function (html) {
            if (html == '13b') {
                redirect('admin_control_panel.html');
            } else {
                swal("Invalid Credentals", "", "warning");
            }
        }
    });
}
function logout() {
    var d = 1;
    $.ajax({
        type: "POST",
        url: 'assets/Allajaxphp/logout/logout.php',
        data: 'd=' + d,
        success: function (html) {
            redirect('index.php');
        }
    });
}
function getallappointments() {
    var upcategory = "1";
    $.ajax({
        url: 'assets/Allajaxphp/appointments/getallappointments.php',
        type: 'post',
        data: 'upcategory=' + upcategory,
        success: function (html) {
            jQuery("#all_order").html(html);
        }
    });
}
function update__appointment_detailes(id) {
    var status = jQuery("#update_order_current_status").val();
    $.ajax({
        url: 'assets/Allajaxphp/appointments/updateappointments.php',
        type: 'post',
        data: 'id=' + id + '&status=' + status,
        success: function (html) {
            show_popup_order(html);
        }
    });
}
function cancle_appointment(id) {
    $.ajax({
        url: 'assets/Allajaxphp/appointments/deleteappointments.php',
        type: 'post',
        data: 'id=' + id + '&status=' + status,
        success: function (html) {
            show_popup_order(html);
        }
    });
}


