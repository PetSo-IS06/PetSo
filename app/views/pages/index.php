<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    
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
            <div class="hero-banner-icon">
                <h1>Hero Section</h1>
            </div>
        </div>
    </div>
</body>
</html>


