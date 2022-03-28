<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
        <title><?php echo SITE_NAME; ?> | Reset Password</title>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/reset_Password.css'>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css'>
    </head>
    <body class="body1">
        <h2 class="heading2B grey center" id="title">Enter New Password</h2>
        <div class="card1">
            <form action="<?php echo URL_ROOT . '/Authentications/setNewPassword'; ?>" method="POST">
                <div class="rp-header">
                    <h3 class="subtitleB grey" style="margin-bottom: 30px;">Account email: <?php echo $data['email'] ?></h3>
                    <input type="text" name="email" value="<?php echo $data['email'];?>" style="display: none;">
                </div>
                <div class="inputBx password">
                    <input name="newPassword" id="newPassword" type="password" required="required">
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/lock.png" alt="lock">
                    <span class="normalB">New password</span>
                    <a href="#" class="password-control" onclick="return show_hide_password(this);">
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/ShowPw.webp" alt="SPW"
                                id="imgClickAndChange" onclick="changeImage(this);">
                    </a>
                </div>
                <span class="invalidInput"><?php echo $data['newPasswordError'] ?></span>
                
                <div class="inputBx password">
                    <input name="confirmNewPassword" id="confirmNewPassword" type="password" required="required">
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/lock.png" alt="lock">
                    <span class="normalB">Confirm new password</span>
                    <a href="#" class="password-control" onclick="return show_hide_password(this);">
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/ShowPw.webp" alt="SPW"
                                id="imgClickAndChange" onclick="changeImage(this);">
                    </a>
                </div>
                <span class="invalidInput"><?php echo $data['confirmNewPasswordError'] ?></span>

                <div class="rp-bottom">
                    <a href="<?php echo URL_ROOT; ?>/authentications/login" class="grey-btn">Cancel</a>
                    <input type="submit" class="purple-btn" value="Confirm">
                </div>
            </form>
        </div>
    </body>
</html>