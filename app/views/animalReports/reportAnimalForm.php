<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Report</title>
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/animal_report.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<!--    <link rel='stylesheet' href='--><?php //echo URL_ROOT; ?><!--/public/assets/CSS/animal_report.css'>-->
</head>

<body>
<div id="top-nav">
    <?php
    require APP_ROOT . '/views/components/topNavbar.php';
    ?>
</div>
<div>
    <img src="<?php echo URL_ROOT; ?>/public/assets/img/createAnimalReportHeader.svg" alt="" style="width: 100%;">
</div>
<div class="report-form-container">
    <h2 class="form-title">Report</h2>
    <hr/>
    <form id="reportForm" action="<?php echo URL_ROOT . '/animalReports/reportConfirmation'; ?>" method="POST">
        <div class="form-row">
            <div class="form-input">
                <label class="input-label">Is this an emergency case? </label><br/>
                <input name="emergency" id="emergency" value="yes" type="radio"> Yes &nbsp;
                <input name="emergency" id="emergency" value="no" type="radio" checked> No
            </div>
            <div class="form-input">
                <label class="input-label">Please describe the situation breifly. </label><br/>
                <textarea class="input-box-area" rows="4" cols="50" name="case" id="case"></textarea>
            </div>
            <div class="form-row">
                <div class="form-input" id="col" style="margin-bottom:2rem;">
                    <div class="form-input-col">
                        <label class="input-label">Location</label>
                        <input class="input-box" name="district" id="district" type="text" placeholder="District">
                    </div>
                    <div class="form-input-col">
                        <label class="input-label" style="margin-top:1rem;"></label>
                        <input class="input-box" name="area" id="area" type="text" placeholder="Area">
                    </div>
                    <div class="form-input-col">
                        <label class="input-label">Animal</label>
                        <input class="input-box" name="animal" id="animal" type="text" placeholder="Animal Type">
                    </div>
                </div>
                <div class="form-input">
                    <label class="input-label">Upload Some clear images as if possible. </label>
                    <a href="<?php echo URL_ROOT; ?>/pages/index" class="form-btn-upload">Choose File</a>
                </div>
            </div>
            <div class="form-row" style="flex-direction: column; justify-content: left">
                <div class="form-input" id="col" style="flex-direction: row; justify-content: left">
                    <div class="form-input-col">
                        <label class="input-label">Your name</label>
                        <textarea class="input-box" style="width: 410px" name="name" id="name" type="text"></textarea>
                    </div>
                </div>
                <div class="form-input" id="col" style="flex-direction: row; justify-content: left">
                    <div class="form-input-col">
                        <label class="input-label">Your Telephone number</label>
                        <textarea class="input-box" style="width: 410px" name="mobile" id="mobile" type="text"></textarea>
                    </div>
                </div>
                <div class="form-input" id="col" style="flex-direction: row; justify-content: left">
                    <div class="form-input-col">
                        <label class="input-label">Your Email</label>
                        <textarea class="input-box" style="width: 410px" name="email" id="email" type="text"></textarea>
                    </div>
                </div>
<!--                <div class="form-input" style="width: 100%; margin-left: 2rem;">-->
<!--                    <div class="form-input-col" id="col">-->
<!--                        <label class="input-label">Telephone number</label>-->
<!--                        <input class="input-box" name="telephone" type="date">-->
<!--                    </div>-->
<!--                    <div class="form-input-col">-->
<!--                        <label class="input-label">Your Eemail</label>-->
<!--                        <input class="input-box" name="Email" type="date">-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="form-row" style="flex-direction:row; justify-content: space-between;">
                <a href="<?php echo URL_ROOT; ?>/" class="form-btn-cancel">Cancel</a>
                <input id="submit" type="submit" value="Submit" onclick="document.getElementById('reportForm').submit();">
            </div>
        </div>
    </form>
</div>
<div id="footer">
    <?php
    require APP_ROOT . '/views/components/footer.php';
    ?>
</div>
</body>
</html>
