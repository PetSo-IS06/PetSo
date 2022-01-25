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
<!--        <img src="--><?php //echo URL_ROOT; ?><!--/public/assets/img/animalReportHeader.svg" alt="" style="width: 100%;">-->
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
                            <div class="selectBx" id="selectBx" style="width: 250px">
                                <input type="checkbox" id="options-view-button" name="selectbox">
                                <div id="select-button">
                                    <div id="selected-value">
                                        <span class="normalB">Select your District</span>
                                    </div>
                                    <div id="chevrons">
                                        <i class="fas fa-chevron-down dropdown-arrow"></i>
                                    </div>
                                </div>
                                <div id="options">
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="district" value="Colombo">
                                        <input class="s-c bottom" type="radio" name="district" value="Colombo">
                                        <span class="label">Colombo</span>
                                        <span class="opt-val">Colombo</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="district" value="Kandy">
                                        <input class="s-c bottom" type="radio" name="district" value="Kandy">
                                        <span class="label">Kandy</span>
                                        <span class="opt-val">Kandy</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="district" value="Galle">
                                        <input class="s-c bottom" type="radio" name="district" value="Galle">
                                        <span class="label">Galle</span>
                                        <span class="opt-val">Galle</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="district" value="Other">
                                        <input class="s-c bottom" type="radio" name="district" value="Other">
                                        <span class="label">Other</span>
                                        <span class="opt-val">Other</span>
                                    </div>
                                </div>
                            </div>
                            <span class="invalidInput"><?php echo $data['districtError']; ?></span>
                        </div>
                        <div>
                            <div class="selectBx" id="selectBx" style="width: 250px; margin-top: 25px">
                                <input type="checkbox" id="options-view-button" name="selectbox">
                                <div id="select-button">
                                    <div id="selected-value">
                                        <span class="normalB">Select your Area</span>
                                    </div>
                                    <div id="chevrons">
                                        <i class="fas fa-chevron-down dropdown-arrow"></i>
                                    </div>
                                </div>
                                <div id="options">
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="area" value="c1">
                                        <input class="s-c bottom" type="radio" name="area" value="c1">
                                        <span class="label">c1</span>
                                        <span class="opt-val">c1</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="area" value="c2">
                                        <input class="s-c bottom" type="radio" name="area" value="c2">
                                        <span class="label">c2</span>
                                        <span class="opt-val">c2</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="area" value="c3">
                                        <input class="s-c bottom" type="radio" name="area" value="c3">
                                        <span class="label">c3</span>
                                        <span class="opt-val">c3</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="area" value="c4">
                                        <input class="s-c bottom" type="radio" name="area" value="c4">
                                        <span class="label">c4</span>
                                        <span class="opt-val">c4</span>
                                    </div>
                                </div>
                            </div>
                            <span class="invalidInput"><?php echo $data['areaError']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input" id="col" style="justify-content: flex-start; margin-bottom:2rem;">
                        <div class="form-input-col">
                            <label class="input-label">Animal Type</label>
                            <!--                                <input class="input-box" name="animal" id="animal" type="text" placeholder="Animal Type">-->
                            <div class="selectBx input-box" id="selectBx" style="width: 350px">
                                <input type="checkbox" id="options-view-button" name="selectbox">
                                <div id="select-button">
                                    <div id="selected-value">
                                        <span class="normalB">Select the animal Type</span>
                                    </div>
                                    <div id="chevrons">
                                        <i class="fas fa-chevron-down dropdown-arrow"></i>
                                    </div>
                                </div>
                                <div id="options">
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="animal" value="Dogs">
                                        <input class="s-c bottom" type="radio" name="animal" value="Dogs">
                                        <span class="label">Dogs</span>
                                        <span class="opt-val">Dogs</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="animal" value="Cats">
                                        <input class="s-c bottom" type="radio" name="animal" value="Cats">
                                        <span class="label">Cats</span>
                                        <span class="opt-val">Cats</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="animal" value="Turtles">
                                        <input class="s-c bottom" type="radio" name="animal" value="Turtles">
                                        <span class="label">Turtles</span>
                                        <span class="opt-val">Turtles</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="animal" value="Other">
                                        <input class="s-c bottom" type="radio" name="animal" value="Other">
                                        <span class="label">Other</span>
                                        <span class="opt-val">Other</span>
                                    </div>
                                </div>
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
