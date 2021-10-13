<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Styles -->
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/signup.css'>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css'>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/form-container.css'>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/step.css'>
</head>
<body>
    <!-- Top step display section goes here -->
    <div class = "step">
        <h3>Create an Account</h3>
        <ul class="stepNo">
            <li>1</li>
            <li class="active">2</li>
            <li>3</li>
        </ul>
    </div>

    <section>
            <div class="container">
                <div class="form">
                    <h2>A little bit about you :)</h2>
                    <form action="">

                    <div class="inputBx">
                        <input type="text" required="required">
                        <span>Name</span>
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/uidicon.webp" alt="user">
                    </div>

                    <div class="inputBx">
                        <input type="text" required="required">
                        <span>Email</span>
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/email.png" alt="user">
                    </div>
                    <div class="inputBx">
                        <input type="text" required="required">
                        <span>Mobile</span>
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/mobile.jpg" alt="user">
                    </div>
                    <div class="inputBx password">
                        <input id="password-input" type="password" name="password" required="required">
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/lock.png" alt="lock">
                        <span>Password</span>
                    </div>
                    <div class="inputBx password">
                        <input id="confirmPassword-input" type="password" name="Confirm-Password" required="required">
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/lock.png" alt="lock">
                        <span>Confirm Password</span>
                    </div>

                    <label class="remember"><input type="checkbox">
    By clicking, you are agreeing to our terms of service and privacy policy.</label>

                    <div class="inputBx LogIn">
                        <input type="submit" value="Create Account" disabled>
                    </div>

                    </form>
                    <p>Already have an account <a href="<?php echo URL_ROOT;?>/users/login"> &nbsp;Sign in</a></p>
                </div>
            </div>
        </div>
        <div>
            <a href="<?php echo URL_ROOT;?>">
                <button type="submit" class="btn-cancel">Cancel</button>
            </a>
        </div>
    </section>
</body>
<script type="text/javascript" src="assets/js/login.js"></script>
</html>
