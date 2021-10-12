<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/components/topNavbar.css">
</head>
<body>
   <nav class="nav">
       <div class="nav-logo">
            <a href="/">
                <img src="./assets/img/Petso_logo.png" alt="Petso logo">
            </a>
       </div>
    <div class="nav-bars">
        <a href="javascript:void(0);" class="icon" onclick="collapseMenu()">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="nav-right">
        <div class="nav-menu-top">
            <a href="" class="nav-menu-main-links">
                <i class="fas fa-bell notify"></i>
            </a>
            <a href="<?php echo URL_ROOT;?>/users/login" class="nav-menu-main-links">Login</a>
            <a href="/" class="nav-menu-signup-btn" id="button1">Sign Up</a>
        </div>
        <div class="nav-menu-main" id="main-links">
            <a href="<?php echo URL_ROOT;?>/pages/index" class="nav-menu-main-links">Home</a>
            <a href="<?php echo URL_ROOT;?>/pages/services" class="nav-menu-main-links">Services</a>
            <a href="/" class="nav-menu-main-links">Explore 
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </a>
            <a href="<?php echo URL_ROOT;?>/pages/aboutUs" class="nav-menu-main-links">About Us</a>
            <a href="<?php echo URL_ROOT;?>/pages/faq" class="nav-menu-main-links">FAQs</a>
            <a href="/" class="nav-menu-signup-btn" id="button2">Sign Up</a>
        </div>
    </div>
   </nav> 
   <script>
    function collapseMenu() {
      var x = document.getElementById("main-links");
      if (x.className === "nav-menu-main") {
        x.className += "responsive";
      } else {
        x.className = "nav-menu-main";
      }
    }
    </script>
</body>
</html>
