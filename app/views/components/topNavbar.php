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
   <nav class="nav pg-body border">
       <div class="nav-logo">
            <a href="<?php echo URL_ROOT;?>/">
            <img src="<?php echo URL_ROOT; ?>/public/assets/img/petso_logo.png"> 
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
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URL_ROOT;?>/Authentications/logout" class="nav-menu-main-links">Log out</a>
                <a href="<?php echo URL_ROOT;?>/" class="nav-menu-profile-tag" id="tag1">My Profile</a>
            <?php else : ?>
                <a href="<?php echo URL_ROOT;?>/Authentications/login" class="nav-menu-main-links">Log in</a>
                <a href="<?php echo URL_ROOT;?>/users/selectAccount" class="purple-btn hide" id="button1">Sign Up</a>
            <?php endif;?>

        </div>
        <div class="nav-menu-main" id="main-links">
            <a href="<?php echo URL_ROOT;?>/pages/index" class="nav-menu-main-links">Home</a>
            <a href="<?php echo URL_ROOT;?>/pages/services" class="nav-menu-main-links">Services</a>
            <label class="nav-menu-main-links-explore" id="explore">Explore 
                <div class="dropdown-content-explore" id="explore">
                    <a href="<?php echo URL_ROOT;?>/projects/viewAllProjects">Welfare Projects</a>
                    <a href="#">Animals Reported</a>
                    <a href="#">Adoption</a>
                    <a href="#">Sposorships</a>
                </div>
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </label>
            <a href="<?php echo URL_ROOT;?>/pages/aboutUs" class="nav-menu-main-links">About Us</a>
            <a href="<?php echo URL_ROOT;?>/pages/faq" class="nav-menu-main-links">FAQs</a>
            <?php if(isset($_SESSION['user_id'])) : ?>
                <label  class="nav-menu-profile-tag" id="tag2">
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/profile-img.png" alt="Profile Pic">
                    <?php echo $_SESSION['user_name']; ?> <i class="fas fa-chevron-down dropdown-arrow"></i>
                    <div class="dropdown-content">
                        <label class="dropdown-content-header">
                            <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/profile-img.png" alt="Profile Pic">
                            <h3><?php echo $_SESSION['user_name']; ?></h3>
                            <?php echo $_SESSION['user_email']; ?>
                        </label>
                        <a href="<?php
                        if($_SESSION['user_type'] == 'user') :
                            echo URL_ROOT.'/users/userProfile';
                        elseif($_SESSION['user_type'] == 'org') :
                            echo URL_ROOT.'/organizations/organizationViewProfile';
                        endif;?>">My Profile</a>
                        <a href="#">Notifications</a>
                        <a href="<?php 
                        if($_SESSION['user_type'] == 'user') :
                            echo URL_ROOT.'/users/dashboard';
                        elseif($_SESSION['user_type'] == 'org') :
                            echo URL_ROOT.'/OrgDashboards/dashboard';
                        elseif($_SESSION['user_type'] == 'admin') :
                            echo URL_ROOT.'/AdminDashboards/dashboard';
                        endif;?>">My Dashboard</a>
                        <a href="#">My Complaints</a>
                        <a href="<?php echo URL_ROOT;?>/users/logout">Logout</a>
                    </div>
                </label>
            <?php else : ?>
                <a href="<?php echo URL_ROOT;?>/users/selectAccount" class="purple-btn" id="button2">Sign Up</a>
            <?php endif;?>
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
