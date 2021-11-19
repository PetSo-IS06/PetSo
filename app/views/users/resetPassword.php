<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo SITE_NAME; ?> | Reset Password</title>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/reset_Password.css'>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css'>
    </head>
    <body class="body1">
        <h2 class="heading2B grey center" id="title">Reset Password</h2>
        <div class="card1">
            <form action="<?php echo URL_ROOT; ?>" method="POST">
                <div class="rp-header">
                    <h3 class="subtitleB grey">Please enter your email & mobile number</h3>
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/password-key.svg" class="rp-header-img" alt="password key">
                </div>
                <div class="inputBx">
                    <input name="email" id="email" type="email" required="required">
                    <span class="normalB">Email</span>
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/email.png" alt="email">
                </div>
                <span class="invalidInput"><?php echo $data['emailError'] ?></span>
                
                <div class="inputBx">
                    <input name="mobile" id="mobile" type="number" required="required">
                    <span class="normalB">Mobile</span>
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/mobile.jpg" alt="mobile">
                </div>
                <span class="invalidInput"><?php echo $data['mobileError'] ?></span>
                <div class="rp-bottom">
                    <a href="<?php echo URL_ROOT; ?>/authentications/login" class="grey-btn">Cancel</a>
                    <a href="<?php echo URL_ROOT;?>/authentications/verifyOTP" class="purple-btn">Confirm</a>
                </div>
            </form>
        </div>
    </body>
</html>