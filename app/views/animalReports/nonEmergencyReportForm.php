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
    <div>
        <img src="<?php echo URL_ROOT; ?>/public/assets/img/animalReport2Header.svg" alt="" style="width: 100%;">
    </div>

    <div class="report-form-container" style="margin-top: 30px">
        <h2 class="form-title">Non-Emergency Report</h2>
        <hr/>
        <br>
        <!--        <div>-->
        <!--            <label class="input-label">Is this an emergency situation? </label><br/><br>-->
        <!--            <input name="emergency" id="yes" value="yes" type="radio" onclick="Emergency();"> Yes &nbsp;-->
        <!--            <input name="emergency" id="no" value="no" type="radio" onclick="NoneEmergency();" checked> No-->
        <!--        </div>-->

        <!--        Non-Emergency-->
        <div id="noneEmergency" class="noneEmergency">
            <form id="reportForm" action="<?php echo URL_ROOT . '/animalReports/createReport'; ?>" method="POST">
                <div class="form-row">
                    <div class="form-input" style="width: 100%>
                        <label class="input-label">Please describe the situation briefly. </label><br/>
                        <textarea class="input-box-area" rows="4" cols="50" name="situation" id="situation""></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input" id="col"  style="justify-content: flex-start">
                        <div class="form-input-col">
                            <label class="input-label">Location</label>
                            <!--                                <input class="input-box" name="district" id="district" type="text" placeholder="District">-->
                            <div class="selectBx" id="selectBx" style="width: 350px">
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
                        </div>
                        <div class="selectBx" id="selectBx" style="width: 350px; margin-top: 25px">
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
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input" id="col" style="justify-content: flex-start; margin-bottom:2rem;">
                        <div class="form-input-col">
                            <label class="input-label">Animal Type</label>
                            <!--                                <input class="input-box" name="animal" id="animal" type="text" placeholder="Animal Type">-->
                            <div class="selectBx input-box half-width" style="width: 350px" id="selectBx"">
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
                        </div>
                    </div>
                </div>
                <div class="form-row" style="margin-bottom:2rem;">
                    <div class="form-input">
                        <label class="input-label">Upload Some clear images as if possible. </label>
                        <a href="<?php echo URL_ROOT; ?>/pages/index" class="form-btn-upload">Choose File</a>
                    </div>
                </div>
                <div class="form-row" style="flex-direction: column; justify-content: left">
                    <div class="form-input" id="col" style="flex-direction: row; justify-content: left">
                        <div class="form-input-col">
                            <label class="input-label">Your name</label>
                            <textarea class="input-box half-width"  name="name" id="name"
                                      type="text"></textarea>
                        </div>
                    </div>
                    <div class="form-input" id="col" style="flex-direction: row; justify-content: left">
                        <div class="form-input-col">
                            <label class="input-label">Your Telephone number</label>
                            <textarea class="input-box half-width" name="mobile" id="mobile"
                                      type="text"></textarea>
                        </div>
                    </div>
                    <div class="form-input" id="col" style="flex-direction: row; justify-content: left">
                        <div class="form-input-col">
                            <label class="input-label">Your Email</label>
                            <textarea class="input-box half-width" name="email" id="email"
                                      type="text"></textarea>
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
