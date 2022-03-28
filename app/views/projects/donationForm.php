<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/donate.css">
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/step.css'/>
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/donate.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Donate</title>
</head>
    <body>
        <div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
        </div>
        <div id="body" class="pg-body">
            <!-- <div class="step">
                <ul class="stepNo">
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div> -->
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
                    <form action="https://sandbox.payhere.lk/pay/checkout" method="POST" id="donate-form">
                        <div class="title">
                            <h1 class="subtitleB grey center">Project title</h1>
                        </div>

                        <div style="display:none;">
                            <input type="hidden" name="merchant_id" value="1219957">   
                            <input type="hidden" name="return_url" value="<?php echo URL_ROOT.'/Pages/index'; ?>">
                            <input type="hidden" name="cancel_url" value="<?php echo URL_ROOT.'/Projects/donate/2'; ?>">
                            <input type="hidden" name="notify_url" value="https://ulwzz9maje.execute-api.ap-southeast-1.amazonaws.com/prod/">  
                            <input type="text" name="order_id" value="8">  <!-- Set value to fundraiser ID -->
                            <input type="text" name="items" value="Donation"><br>
                            <input type="text" name="currency" value="LKR">
                            <br><br>Customer Details<br>
                            <input type="text" name="first_name" value="Saman">
                            <input type="text" name="last_name" value="Perera"><br>
                            <input type="text" name="email" value="samanp@gmail.com">
                            <input type="text" name="phone" value="0771234567"><br>
                            <input type="text" name="address" value="No.1, Galle Road">
                            <input type="text" name="city" value="Colombo">
                            <input type="hidden" name="country" value="Sri Lanka"><br><br> 
                        </div>

                        <!-- Section 1 -->
                        <div id="sec1">
                            <div class="sec">
                                <div class="amnts">
                                    <div class="fixed">
                                        <input onclick="emptyOtherCol()" type="radio" name="amount" value="5000" id="option-1">
                                        <label for="option-1" class="option option-1">
                                            <span>LKR 5000</span>
                                        </label>
                                        <input onclick="emptyOtherCol()" type="radio" name="amount" value="2500" id="option-2">
                                        <label for="option-2" class="option option-2">
                                            <span>LKR 2500</span>
                                        </label>

                                        <input onclick="emptyOtherCol()" type="radio" name="amount" value="1500" id="option-3">
                                        <label for="option-3" class="option option-3">
                                            <span>LKR 1500</span>
                                        </label>
                                        
                                        <input onclick="emptyOtherCol()" type="radio" name="amount" value="500" id="option-4">
                                        <label for="option-4" class="option option-4">
                                            <span>LKR 500</span>
                                        </label>
                                    </div>
                                    <div class="other">
                                        <h3 class="normalB grey">Other (Type here): &nbsp; &nbsp; LKR &nbsp;</h3>
                                        <input type="number" onChange="setAmount()" id="otherAmount" min="500" max="500000" name="otherAmount">
                                    </div>
                                    <span class="invalidInput center"><?php echo ''; ?></span>

                                </div>
                                <div class="note">
                                    <p class="light-grey">**Please note that the mininum amount you can donate is LKR 500.</p>
                                </div>
                                <div class="action">
                                    <a id="donate-cont-btn" onClick="showSec2()" class="blue-btn">Continue</a>
                                </div>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div id="sec2">
                            <div class="sec">
                                <div class="sec2-row">
                                    <div class="row-in">
                                        <h3 class="normalB grey">Name to appear on page (Optional)</h3>
                                        <input type="text" name="custom_1" maxlength="20">
                                        <span class="invalidInput center"><?php echo ''; ?></span>
                                    </div>
                                    <div class="row-in">
                                        <h3 class="normalB grey">Message</h3>
                                        <textarea rows="5" name="custom_2" maxlength="100" placeholder="Max 100 characters"></textarea> 
                                        <span class="invalidInput center"><?php echo ''; ?></span>
                                    </div>
                                </div>
                                <div class="action-sec2">
                                    <a onClick="showSec1()" class="back normalB">Back</a>
                                    <a onClick="makePayment()" class="blue-btn">Proceed to Pay</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="msg-sec">
                    <div class="msg-card">
                        <div class="msg-head">
                            <div style="flex-grow: 1;"><img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/profile-img.png" alt=""></div>
                            <div class="user-info" style="flex-grow: 3;">
                                <h2 class="normalB grey">Sunile Perera</h2>
                                <h4 class="normal grey">LKR 10, 500</h4>
                            </div>
                            <div class="date" style="flex-grow: 1;"><p>Feb 02</p></div>
                        </div>
                        <div class="msg-body">
                            <p class="normal grey">“Honored to be able to contribute to a great cause.”</p>
                        </div>
                    </div>
                    <div class="msg-card">
                        <div class="msg-head">
                            <div style="flex-grow: 1;"><img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/profile-img.png" alt=""></div>
                            <div class="user-info" style="flex-grow: 3;">
                                <h2 class="normalB grey">Sunile Perera</h2>
                                <h4 class="normal grey">LKR 10, 500</h4>
                            </div>
                            <div class="date" style="flex-grow: 1;"><p>Feb 02</p></div>
                        </div>
                        <div class="msg-body">
                            <p class="normal grey">“Honored to be able to contribute to a great cause.”</p>
                        </div>
                    </div>
                    <div class="msg-card">
                        <div class="msg-head">
                            <div style="flex-grow: 1;"><img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/profile-img.png" alt=""></div>
                            <div class="user-info" style="flex-grow: 3;">
                                <h2 class="normalB grey">Sunile Perera</h2>
                                <h4 class="normal grey">LKR 10, 500</h4>
                            </div>
                            <div class="date" style="flex-grow: 1;"><p>Feb 02</p></div>
                        </div>
                        <div class="msg-body">
                            <p class="normal grey">“Honored to be able to contribute to a great cause.”</p>
                        </div>
                    </div>
                    <div class="msg-card">
                        <div class="msg-head">
                            <div style="flex-grow: 1;"><img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/profile-img.png" alt=""></div>
                            <div class="user-info" style="flex-grow: 3;">
                                <h2 class="normalB grey">Sunile Perera</h2>
                                <h4 class="normal grey">LKR 10, 500</h4>
                            </div>
                            <div class="date" style="flex-grow: 1;"><p>Feb 02</p></div>
                        </div>
                        <div class="msg-body">
                            <p class="normal grey">“Honored to be able to contribute to a great cause.”</p>
                        </div>
                    </div>
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
