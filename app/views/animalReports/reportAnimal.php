<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Report</title>
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/animalReport.css'/>
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/animalReportForm.css">
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
    <div class="hero-section">
        <img src="<?php echo URL_ROOT; ?>/public/assets/img/animalReportHeader.svg" alt="" style="width: 100%;">
    </div>

    <div class="report-form-container" style="margin-top: 100px; margin-bottom: 100px; text-align: center">
        <h2 class="form-title">Are you looking to report an Emergency Situation?</h2>
        <br>
        <!--        <div>-->
        <!--            <label class="input-label" style="font-size: large;">Are you looking to report an Emergency Situation? </label><br/><br>-->
        <!--        </div>-->
        <div style="display: flex; align-self: center">
            <a class="left" href="<?php echo URL_ROOT; ?>/animalReports/emergencyReportForm">
                <h3> Yes, it’s an Emergency </h3>
            </a>
            <a class="right" href="<?php echo URL_ROOT; ?>/animalReports/nonEmergencyReportForm">
                <h3> No, it’s not an Emergency </h3> <br>
            </a>
        </div>
        <div>
            <center>
                <a href="<?php echo URL_ROOT; ?>/pages/index">
                    <button type="submit" class="btn-cancel">
                        Cancel
                    </button>
                </a>
            </center>
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
