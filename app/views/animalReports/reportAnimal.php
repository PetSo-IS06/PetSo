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
        <img src="<?php echo URL_ROOT; ?>/public/assets/img/animalReportHeader.svg" alt="" class="hero-img">
    </div>

    <div class="instructions">
        <h1 class="instructions-heading">How it Works</h1>
        <ol type="1" class="instructions-items">
            <li>Submit an Animal Report by uploading your contact details, location and an image of the animal in need of shelter.</li>
            <li>We will notify all the nearby Animal Welfare Organizations registered at Petso regarding your case.</li>
            <li>Your animal report will be posted at our forum and will be made visible to the users of Petso.</li>
            <li>Once an organization chooses to respond to your case, you will be notified via an SMS.</li>
        </ol>
        <br style="margin-top: 20px">
        <h3>Note:</h3>
        <ul>
            <li>Users are required to sign in to submit an Animal report.</li>
            <li>This platform is to find shelter for an animal and <span>not for Emergency situations.</span></li>
            <li>If your case is an emergency, you may find the contact details of the nearby Animal Welfare Organizations and contact them personally get help.</li>
        </ul>
    </div>

    <div class="report-form-container" style="margin-top: 75px; margin-bottom: 75px; text-align: center">
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
