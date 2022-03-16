<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/donate.css">
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/step.css'/>
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
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
            <div class="step">
                <ul class="stepNo">
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="container">
                <div class="prj-card">
                    <div class="image">
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/bg.png" alt="">
                    </div>
                    <div class="card-cap">
                        <div class="cap-title">
                            <h1 class="subtitleB grey center">Project title</h1>
                            <h3 class="normal grey center">by Organization_name</h3>
                            <h3 class="normal grey center"><i>area</i></h3>
                        </div>
                        <div class="cap-foot">
                            <div>
                                Ended on date
                            </div>
                            <div class="icons">
                                <div><i class="fa fa-hand-holding-heart"></i> Amnt</div>
                                <div><i class="fa fa-hand-sparkles"></i> Vol</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <form action="<?php echo URL_ROOT . '/Projects/donate'; ?>" method="POST">
                        <div class="title">
                            <h1 class="subtitleB grey center">Project title</h1>
                        </div>
                        <div class="sec1">
                            <div class="amnts">
                                <div class="fixed">
                                    <input type="radio" name="amount" value="5000" id="option-1" checked>
                                    <label for="option-1" class="option option-1">
                                        <span>LKR 5000</span>
                                    </label>
                                    <input type="radio" name="amount" value="2500" id="option-2">
                                    <label for="option-2" class="option option-2">
                                        <span>LKR 2500</span>
                                    </label>

                                    <input type="radio" name="amount" value="1500" id="option-3" checked>
                                    <label for="option-3" class="option option-3">
                                        <span>LKR 1500</span>
                                    </label>
                                    
                                    <input type="radio" name="amount" value="500" id="option-4">
                                    <label for="option-4" class="option option-4">
                                        <span>LKR 500</span>
                                    </label>
                                </div>
                                <div class="other">

                                </div>
                            </div>
                            <div class="note">

                            </div>
                            <div class="action">

                            </div>
                        </div>
                    </form>
                </div>
                <div class="msg-sec">

                </div>
            </div>
        </div>
        <div id="footer">
            <?php
            require APP_ROOT . '/views/components/footer.php';
            ?>
        </div>
    </body>
</html>
