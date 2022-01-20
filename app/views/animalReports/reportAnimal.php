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
    <div>
        <img src="<?php echo URL_ROOT; ?>/public/assets/img/animalReportHeader.svg" alt="" style="width: 100%;">
    </div>

    <div class="report-form-container" style="margin-top: 100px; margin-bottom: 100px">
        <h2 class="form-title">Report</h2>
        <hr/>
        <br>
        <div>
            <label class="input-label" style="font-size: large">Is this an emergency situation? </label><br/><br>
        </div>
        <div style="display: flex; align-self: center">
            <a href="<?php echo URL_ROOT; ?>/animalReports/emergencyReportForm" class="">
                <div class="left">
                    <center>
                        <h3> Emergency </h3> <br>
                        <!--                        <i class="fas fa-hotel fa-customize fa-color"></i>-->
                    </center>
                </div>
            </a>

            <a href="<?php echo URL_ROOT; ?>/animalReports/nonEmergencyReportForm">
                <div class="right">
                    <center>
                        <h3> Non Emergency </h3> <br>
                        <!--                        <i class="fas fa-user fa-customize fa-color"></i>-->
                    </center>
                </div>
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
