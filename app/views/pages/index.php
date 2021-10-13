<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/hero-section.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?></title>

</head>
<body>
    <div id="top-nav">
        <?php
            require APP_ROOT . '/views/components/topNavbar.php';
        ?>
    </div>
    <div class="hero">
        <div class="hero-banner">
            <div class="hero-banner-contents">
                <div class="hero-banner-contents-icon">
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/paw-with-plus.png" alt="">
                </div>
                <h1>Report an Animal to an<br />Animal Shelter</h1>
            </div>
        </div>
        <div class="search-sec">
            <div class="search-sec-bar">
                <input type="search" placeholder="Search Welfare Organizations..." name="searchOrg" />
                <i class="fa fa-search"></i>
            </div>
            <div class="search-sec-bar">
                <input type="search" placeholder="Search Welfare Projects..." name="searchPrj" />
               <i class="fa fa-search"></i>
            </div>
        </div>
        <div class="hero-cards">
            <div class="hero-cards-single">
                <h2>Donate</h2>
                <i class="fa fa-hand-holding-heart"></i>
                <p>Contribute to a welfare project & help save live</p>
                <a href="/" class="hero-cards-single-btn " id="">Donate</a>
            </div>
            <div class="hero-cards-single">
                <h2>Volunteer</h2>
                <i class="fa fa-hand-sparkles"></i>
                <p>Contribute to a welfare project & help save live</p>
                <a href="/" class="hero-cards-single-btn" id="">Volunteer</a>
            </div>
            <div class="hero-cards-single">
                <h2>Adopt</h2>
                <i class="fa fa-dog"></i>
                <p>Contribute to a welfare project & help save live</p>
                <a href="/" class="hero-cards-single-btn " id="">Adopt</a>
            </div>
            <div class="hero-cards-single">
                <h2>Sponsor</h2>
                <i class="fa fa-hand-holding-usd"></i>
                <p>Contribute to a welfare project & help save live</p>
                <a href="/" class="hero-cards-single-btn " id="">Sponsor</a>
            </div>
        </div>
    </div>
    <div id="footer">
        <?php
            require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>
</body>
</html>


