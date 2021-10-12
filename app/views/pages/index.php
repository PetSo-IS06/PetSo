<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/hero-section.css">
    
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
        <div class="hero-cards">
        </div>
    </div>
</body>
</html>


