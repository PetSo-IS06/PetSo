<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sign Up</title>  </head>
<link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/selectAccount.css'/>
<link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/step.css'/> 
</center>

<body background="<?php echo URL_ROOT; ?>/public/assets/img/bg.png"> <center> <br><br>
</center>
<div class = "step">
<h3>Create an Account</h3>  
        <ul class="stepNo">
            <li class="active">1</li>
            <li>2</li>
            <li>3</li> 
        </ul> 
    </div>
</center>

<a href="<?php echo URL_ROOT; ?>/users/organizationSignUp" class="">
  <div class="left"><center>
    <h3> Welfare Organization </h3> <br> <a href ="/">
      <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/organization.png" height="75px" width="75px"></a>
      </center>
  </div>
</a>

 
  <a href="<?php echo URL_ROOT; ?>/users/signup" class="">
    <div class="right"> <center>
      <h3> User  </h3> <br> 
      <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/user.svg" height="75px" width="75px">
      </center>
    </div>
  </a>

 <br> <center>
 <button type="submit" class="btn-cancel"> 
   Cancel
 </button>
</center>

<div id="notification">
        <?php
            require APP_ROOT . '/views/components/notification.php';
        ?>
    </div>
</body>
  </html>
