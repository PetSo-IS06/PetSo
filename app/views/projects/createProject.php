<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/components/select-box.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/create-project.css">
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/set-min-date.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Home</title>
</head>
    <body>
        <div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
        </div>
        <div id="body" class="pg-body">
            <div class="header">
                <div class="header-contents">
                    <h1>Create an <font class="yellow">Impact</font> with Us</h1>
                    <p class="heading2 white">Publish your next welfare project in Petso and get help from more animal lovers out there</p>
                    <div class="action">
                        <a href="" class="yellow-btn">Get Started</a>
                    </div>
                </div>
            </div>
            <form action="" method="POST" class="prj-form">
                <h2 class="purple heading2B center">Let’s create your next welfare project at Petso!</h2>
                
                <!-- Project Cause Form -->    
                <div class="form-sec card2" id="prj-cause">
                        <h2 class="grey subtitleB">Cause of the Welfare Project</h2>
                        <hr>
                        <div class="instr">
                            <p class="grey normal">Submit all the necessary details regarding your next project and raise funds, and/or enroll volunteers you need. Note that your project will only be published once approved by the system admin.</p>
                            <p class="purple"><b>Note:</b> You can only have <b>3 ongoing projects</b> maximum at a time.</p>
                        </div>
                        <div class="selectBx" id="selectBx">
                            <input type="checkbox" id="options-view-button" name="selectbox">
                            <div id="select-button">
                                <div id="selected-value">
                                    <span class="normalB">Select the cause of your Project*</span>
                                </div>
                                <div id="chevrons">
                                    <i class="fas fa-chevron-down dropdown-arrow"></i>
                                </div>
                            </div>
                            <div id="options">
                                <div class="option">
                                    <input class="s-c top" type="radio" name="cause" value="Stray animal sterilization">
                                    <input class="s-c bottom" type="radio" name="cause" value="Stray animal sterilization">
                                    <span class="label">Stray animal sterilization</span>
                                    <span class="opt-val">Stray animal sterilization</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="cause" value="Environment Cleaning">
                                    <input class="s-c bottom" type="radio" name="cause" value="Environment Cleaning">
                                    <span class="label">Environment Cleaning</span>
                                    <span class="opt-val">Environment Cleaning</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="cause" value="Animal rescue">
                                    <input class="s-c bottom" type="radio" name="cause" value="Animal rescue">
                                    <span class="label">Animal rescue</span>
                                    <span class="opt-val">Animal rescue</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="cause" value="Other">
                                    <input class="s-c bottom" type="radio" name="cause" value="Other">
                                    <span class="label">Other</span>
                                    <span class="opt-val">Other</span>
                                </div>
                            </div>
                        </div>
                        <div class="inputBx2" id="">
                            <input name="cause" id="cause" type="text" required="required">
                            <span class="normalB">Other</span>
                        </div>
                        <span class="invalidInput"><?php echo '' ?></span>

                        <div class="prj-form-nav">
                            <a href="" class="grey-btn">Cancel</a>
                            <div class="pagination">
                                <a href="#">&laquo;</a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">&raquo;</a>
                            </div>
                            <a href="" class="blue-btn">Next</a>
                        </div>
                    </div>

                <!-- Project Details Form -->    
                <div class="form-sec card2" id="prj-details">
                    <h2 class="grey subtitleB">Project Details</h2>
                    <hr>
                    <div class="inputBx2" id="">
                        <input name="title" id="title" type="text" required="required">
                        <span class="normalB">Project Title</span>
                    </div>
                    <span class="invalidInput"><?php echo '' ?></span>

                    <div class="inputBx2" id="">
                        <input name="initDate" id="datefield" type="date" required="required" min='1899-01-01' max='2000-13-13'> 
                        <span class="normalB">Initiation date</span>
                    </div>
                    <span class="invalidInput"><?php echo '' ?></span>

                    <div class="prj-form-nav">
                        <a href="" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">&raquo;</a>
                        </div>
                        <a href="" class="blue-btn">Next</a>
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


