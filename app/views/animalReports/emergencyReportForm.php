<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Report</title>
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/components/select-box.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/animalReportForm.css">
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
<div id="body" class="pgbody">
    <!--    <div>-->
    <!--        <img src="-->
    <?php //echo URL_ROOT; ?><!--/public/assets/img/animalReportHeader.svg" alt="" style="width: 100%;">-->
    <!--    </div>-->
    <div>
        <img src="<?php echo URL_ROOT; ?>/public/assets/img/animalReport2Header.svg" alt="" style="width: 100%;">
    </div>

    <div class="report-form-container" style="margin-top: 30px">
        <h2 class="form-title">Emergency Situations</h2>
        <hr/>
        <br>

        <!--        Emergency-->
        <div id="emergency" class="emergency">

            <form id="filterOrganization" action="<?php echo URL_ROOT . '/animalReports/listOrganizations'; ?>"
                  method="POST">
                <div class="form-row">
                    <div class="form-input" id="col">
                        <div class="form-input-col">
                            <label class="input-label">Location</label>
                            <!--<input class="input-box" name="district" id="district" type="text" placeholder="District">-->
                            <div class="location-row vol-inputs-col-row">
                                <div style="margin-right: 50px">
                                    <div class="selectBx" style="width: auto">
                                        <input name="district" type="text" list="districts" class="select-cat"
                                               placeholder="Select Your District" required>
                                        <datalist id="districts">
                                            <?php
                                            $str_district = file_get_contents(URL_ROOT . '/public/assets/json/districts.json');
                                            $district = json_decode($str_district, true);
                                            foreach ($district as $item) {
                                                ?>
                                                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                            <?php } ?>
                                        </datalist>
                                    </div>
                                    <span class="invalidInput"><?php echo $data['districtError']; ?></span>
                                </div>
                                <div style="margin-right: 50px">
                                    <div class="selectBx" style="width: auto">
                                        <input name="area" type="text" list="areas" class="select-cat"
                                               placeholder="Select Your Area" required>
                                        <datalist id="areas">
                                            <?php
                                            $str_areas = file_get_contents(URL_ROOT . '/public/assets/json/areaList.json');
                                            $area = json_decode($str_areas, true);
                                            foreach ($area as $item) {
                                                ?>
                                                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                            <?php } ?>
                                        </datalist>
                                    </div>
                                    <span class="invalidInput"><?php echo $data['areaError']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input" id="col" style="justify-content: flex-start; margin-bottom:2rem;">
                        <div class="form-input-col">
                            <label class="input-label">Animal Type</label>
                            <div class="selectBx" style="width: auto">
                                <input name="animal" type="text" list="animals" class="select-cat"
                                       placeholder="Select Animal Type" required>
                                <datalist id="animals">
                                    <?php
                                    $str_areas = file_get_contents(URL_ROOT . '/public/assets/json/animals.json');
                                    $area = json_decode($str_areas, true);
                                    foreach ($area as $item) {
                                        ?>
                                        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                    <?php } ?>
                                </datalist>
                            </div>
                            <span class="invalidInput"><?php echo $data['animalError']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-row" style="flex-direction:row; justify-content: space-between;">
                    <a href="<?php echo URL_ROOT; ?>/" class="form-btn-cancel">Cancel</a>
                    <input id="submit" type="submit" value="Submit"
                           onclick="document.getElementById('filterOrganization').submit();">
                </div>
            </form>

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
