<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/login.css'>

    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/login.js"></script>
</head>
<body>
    
    <section>
  
        <div class="box">
          
            <div class="square" style="--i:0;">
                <img class ="b-img" src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/login2.jpg" alt="">
            </div>
            <div class="square" style="--i:1;">
                <img class ="b-img" src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/login1.jpg" alt="">
            </div>
            <div class="square" style="--i:2;">
                <img class ="b-img" src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/login3.jpg" alt="">
            </div>
            <div class="square" style="--i:3;">
                <!--<img class ="b-img" src="../images/login4.jpg" alt=""> -->
            </div>
            <div class="square" style="--i:4;">
                <!--<img class ="b-img" src="../images/login5.jpg" alt=""> -->
            </div>
            <!--<div class="square" style="--i:5;">
                <img class ="b-img" src="../images/login6.jpg" alt=""> 
            </div>-->
          
            <div class="container"> 
                <div class="form"> 
                    <h2>Login to PetSo</h2>
                    <form action="">
                    <div class="inputBx">
                        <input type="text" required="required">
                        <span>UserID / EmailID</span>
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/uidicon.png" alt="user">
                    </div>
                    <div class="inputBx password">
                        <input id="password-input" type="password" name="password" required="required">
                        <span>Password</span>
                        <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/lockiocon.png" alt="lock">
                    </div>
                    <label class="remember"><input type="checkbox">
                        Remember</label>
                    <div class="inputBx">
                        <input type="submit" value="Log in" disabled> 
                    </div>
                    </form>
                    <p>Forgot password? <a href="#">Click Here</a></p>
                    <p>Don't have an account <a href="<?php echo URL_ROOT; ?>/users/">Sign up</a></p>
                </div>
            </div>
          
        </div>
    </section>
</body>

</html>