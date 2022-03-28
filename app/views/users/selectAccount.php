<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <title> <?php echo SITE_NAME; ?> | Select Account</title></head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/step.css'/>
<link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/selectAccount.css'/>
</center>

<body>


<div class="step">
    <h3>Create an Account</h3>
    <ul class="stepNo">
        <li class="active">1</li>
        <li>2</li>
        <li>3</li>
    </ul>
</div>
</center>
<a href="<?php echo URL_ROOT; ?>/Organizations/organizationSignUp" class="">
    <div class="left">
        <center>
            <h3> Welfare Organization </h3> <br>
            <i class="fas fa-hotel fa-customize fa-color"></i>

        </center>
    </div>
</a>

<a href="<?php echo URL_ROOT; ?>/users/signup">
    <div class="right">
        <center>
            <h3> User </h3> <br>
            <i class="fas fa-user fa-customize fa-color"></i>
        </center>
    </div>
</a>

<br>
<center>
    <a href="<?php echo URL_ROOT; ?>/pages/index">
        <button type="submit" class="btn-cancel">
            Cancel
        </button>
    </a>
</center>
<br> <br>

</body>
</html>
