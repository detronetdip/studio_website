<?php 
require('connection.php');
require('function.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>*******</title>
    <link
      rel="shortcut icon"
      href="assets/images/Logo.png"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/animation.css" />
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="bodywrap">
      <header class="header">
        <div class="name">Nandi Studio</div>
        <div class="menu">
          <ul>
            <a href="index.php"><li>Home</li></a>
            <a href="about.php"><li>About</li></a>
            <a href="gallery.php"><li>Gallery</li></a>
            <a href="service.php"><li>Services</li></a>
            <a href="contact.php"><li>Contact</li></a>
            <?php 
        if(isset($_SESSION['USER_LOGIN'])){
          ?>
            <a href="account.php"><li>Account</li></a>
        <?php } ?>
          </ul>
        </div>
        <div class="buttonbox">
        <?php 
        if(!isset($_SESSION['USER_LOGIN'])){
          ?>
          <button class="sgnp" onclick="redirect('logsgn.php')">Login</button>
          <?php
        }
          else{
          ?>
           <button class="sgnp" onclick="logout()">Logout</button>
          <?php } ?>
          <div class="tglm" onclick="show_menu()">
            <div class="tglbar" id="tglbar1"></div>
            <div class="tglbar" id="tglbar2"></div>
            <div class="tglbar" id="tglbar3"></div>
          </div>
        </div>
      </header>
      <div class="toggle_menu" id="slidermenu">
        <ul>
          <a href="index.php"><li>Home</li></a>
            <a href="about.php"><li>About</li></a>
            <a href="gallery.php"><li>Gallery</li></a>
            <a href="service.php"><li>Services</li></a>
            <a href="contact.php"><li>Contact</li></a>
            <?php 
        if(isset($_SESSION['USER_LOGIN'])){
          ?>
            <a href="account.php"><li>Account</li></a>
        <?php } ?>
        </ul>
        <div class="sldbtnbx">
          <button class="sgnpo" onclick="redirect('logsgn.php')">Login</button>
        </div>
      </div>
