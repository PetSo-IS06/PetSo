<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <title><?php echo SITE_NAME; ?> | Organizations</title>
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/listOrganization.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
<div id="top-nav">
    <?php
    require APP_ROOT . '/views/components/topNavbar.php';
    ?>
</div>
<div id="body" class="pgbody">
    <br>
    <br>

    <div class="report-form-container">
        <div class="errorHeading">
<!--            <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>-->
            <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/depositphotos.jpeg">
            <br>
            <h2 class="form-title">Sorry, there are no Welfare Organizations at PetSo in your location. <br>
                We'd recommend you to contact any nearest Civil Security Authority</h2>
        </div>
        <hr/>
        <br>
        <!--Emergency-->
        <div class="emergency">
            <div class="form-row">
                <a href="<?php echo URL_ROOT; ?>/animalReports/emergencyReportForm" class="form-btn-cancel">Previous
                    Page</a>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <?php
    require APP_ROOT . '/views/components/footer.php';
    ?>
</div>
</body>
<script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/createReport.js"></script>
<script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/textarea-bullets.js"></script>
</html>
