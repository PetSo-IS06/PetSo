<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo SITE_NAME; ?> | Verify OTP</title>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/reset_Password.css'>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css'>
    </head>
    <body class="body1">
        <h2 class="heading2B grey center" id="title">Reset Password</h2>
        <div class="card1">
            <form action="<?php echo URL_ROOT . '/Authentications/verifyOTP'; ?>" method="POST">
                <div class="rp-header">
                    <h3 class="subtitleB grey">Enter the OTP sent to <?php echo $data['mobile']; ?></h3>
                    <h4 class="invalidInput"><?php echo $data['otpError']; ?></h4>
                    <input type="text" name="email" value="<?php echo $data['email'];?>" style="display: none;">
                    <input type="text" name="mobile" value="<?php echo $data['mobile'];?>" style="display: none;">
                    <div id="app"></div>
                </div>
                <div class="passcode-wrapper">
                    <input id="codeBox1" name="num1" type="number" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)">
                    <input id="codeBox2" name="num2" type="number" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)">
                    <input id="codeBox3" name="num3" type="number" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)">
                    <input id="codeBox4" name="num4" type="number" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)">
                </div>
                <div class="rp-label">
                    <p>Didn’t receive the OTP? <a href="<?php echo URL_ROOT;?>/authentications/verifyOTP">Resend OTP</a></p>
                </div>
                <div class="rp-bottom">
                    <a href="<?php echo URL_ROOT; ?>/authentications/login" class="grey-btn">Cancel</a>
                    <input type="submit" class="purple-btn" value="Verify">
                </div>
            </form>
        </div>
    </body>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/timer.js"></script>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/OTP-input.js"></script>
</html>