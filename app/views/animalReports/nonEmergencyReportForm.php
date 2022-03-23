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
    <?php //echo URL_ROOT; ?><!--/public/assets/img/animalReport2Header.svg" alt="" style="width: 100%;">-->
    <!--    </div>-->

    <div class="report-form-container" style="margin-top: 30px">
        <h2 class="form-title">Non-Emergency Report</h2>
        <hr/>
        <!--        <div>-->
        <!--            <label class="input-label">Is this an emergency situation? </label><br/><br>-->
        <!--            <input name="emergency" id="yes" value="yes" type="radio" onclick="Emergency();"> Yes &nbsp;-->
        <!--            <input name="emergency" id="no" value="no" type="radio" onclick="NoneEmergency();" checked> No-->
        <!--        </div>-->

        <!--        Non-Emergency-->
        <div id="noneEmergency" class="noneEmergency">
            <form id="reportForm" action="<?php echo URL_ROOT . '/animalReports/createReport'; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <!--                    <div class="form-input" style="width: 100%">-->
                    <!--                        <label class="input-label">Please describe the situation briefly. </label><br/>-->
                    <!--                        <textarea class="input-box-area" rows="4" cols="50" name="situation" id="situation""></textarea>-->
                    <!--                    </div>-->

                    <div class="textArea" style="margin-bottom: 10px">
                        <span class="normalB" style="padding-bottom: 10px; left: 0px">Small heading for your report </span>
                        <div class="text-box" id="heading">
                            <textarea rows="2" name="heading" required></textarea>
                        </div>
                        <!--                        <span class="invalidInput">-->
                        <?php //echo $data[1]['reportSituation']; ?><!--</span>-->
                    </div>

                    <div class="textArea">
                        <span class="normalB" style="padding-bottom: 10px; left: 0px">Please describe the situation briefly </span>
                        <div class="text-box" id="situation">
                            <textarea rows="4" name="situation" required></textarea>
                        </div>
                        <!--                        <span class="invalidInput">-->
                        <?php //echo $data[1]['reportSituation']; ?><!--</span>-->
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input" id="col" style="justify-content: flex-start">
                        <div class="form-input-col">
                            <label class="input-label">Location</label>
                            <!--                                <input class="input-box" name="district" id="district" type="text" placeholder="District">-->
                            <div class="location-row vol-inputs-col-row">
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
                <div class="form-row">
                    <div class="form-input" id="col" style="justify-content: flex-start; margin-bottom:2rem;">
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
        <div class="form-row" style="margin-bottom:2rem;">
            <div class="form-input direction">
                <label class="input-label">Upload Some clear images as if possible. </label>
                <div class="upload-button">
                    <input type="file" accept="image/*" id="report-image" name="report-image">
<!--                    <a href="--><?php //echo URL_ROOT; ?><!--/pages/index" class="form-btn-upload">Choose File</a>-->
                </div>
            </div>
        </div>
        <div class="textArea">
            <span class="normalB" style="padding-bottom: 10px; left: 0px">Your Name </span>
            <div class="text-box" id="name">
                <textarea rows="2" name="name" required></textarea>
            </div>
            <!--                        <span class="invalidInput">-->
            <?php //echo $data[1]['reportSituation']; ?><!--</span>-->
        </div>

        <div class="textArea">
            <span class="normalB" style="padding-bottom: 10px; left: 0px">Your Telephone Number </span>
            <div class="text-box" id="mobile">
                <textarea rows="2" name="mobile" required></textarea>
            </div>
            <!--                        <span class="invalidInput">-->
            <?php //echo $data[1]['reportSituation']; ?><!--</span>-->
        </div>

        <div class="textArea">
            <span class="normalB" style="padding-bottom: 10px; left: 0px">Your Email </span>
            <div class="text-box" id="email">
                <textarea rows="2" name="email"></textarea>
            </div>
            <!--                        <span class="invalidInput">-->
            <?php //echo $data[1]['reportSituation']; ?><!--</span>-->
        </div>
        <!--        </div>-->
        <div class="form-row" style="flex-direction:row; justify-content: space-between;">
            <a href="<?php echo URL_ROOT; ?>/" class="form-btn-cancel">Cancel</a>
            <input id="submit" type="submit" value="Submit"
                   onclick="document.getElementById('reportForm').submit();">
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
