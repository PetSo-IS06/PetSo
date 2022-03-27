<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/user_profile.css">
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/form-container.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Profile</title>
</head>
<body>
    <div id="top-nav">
        <?php
        require APP_ROOT . '/views/components/topNavbar.php';
        ?>
    </div>

    <div class="profile">

        <!--1-->
        <div class="container1">
            <a href="userProfile.php">
                <img src="" alt="Add your image here">
            </a>
            <br>
            <h2><?php echo $data['username']; ?></h2>
            <text><?php echo $_SESSION['user_email']; ?></text>
            <text> ID: <?php echo $_SESSION['user_id']; ?></text>
            <hr>

            <div class = "container1Bot">
                <text class="date"> Account Created on: <span> 00/00/00 </span></text> <br>
                <text class="date"> Last active on: : <span> 00/00/00 </span></text>
                <br><br><br>
                <a class="reset"> Reset Password </a> <br>
                <a class="delete"> Delete Account </a>
            </div>

        </div>

        <!--2-->
        <div class="container2">

            <!--Display division-->
            <div class="info" id="info">
                <div class="infoUpper">
                    <h2>Personal Info</h2>
                    <a onclick="Content_edit();">
                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/edit.png">
                    </a>
                </div>
                <hr>
                <div id="profileBody" class="profileBody">
                    <div class="inputs">
                        <text>Name: &nbsp;<span> <?php echo $data['username']; ?></span></text> <br>
                    </div>
                    <div class="inputs">
                        <text>Mobile No: &nbsp;<span><?php echo $data['mobile']; ?></span></text>
                    </div>
                    <div class="inputs">
                        <text>Address: &nbsp;<span><?php echo $data['address']; ?></span></text> <br>
                    </div>
                    <div class="inputs">
                        <text>City: &nbsp;<span><?php echo $data['city']; ?></span></text>
                    </div>
                    <div class="inputs">
                        <text>District: &nbsp;<span><?php echo $data['district']; ?></span></text>
                    </div>
<!--                    <div class="inputs">-->
<!--                        <text>Account Status: &nbsp;<span>--><?php //echo $_SESSION['account_status']; ?><!--</span> </text>-->
<!--                    </div>-->
                </div>
            </div>

            <!--Edit division-->
            <div class="edit" id="edit">
                <form id="editForm" action ="<?php echo URL_ROOT . '/users/userProfileEdit'; ?>" method="POST">
                    <div class="editUpper">
                        <h2>Edit Your Personal Info</h2>
                        <div>
                            <a href="<?php echo URL_ROOT; ?>/users/userProfile">
                                <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/back.png">
                            </a>
                            <a id="submit" type="submit" onclick="document.getElementById('editForm').submit();">
                                <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/save.png">
                            </a>
                        </div>
                    </div>
                    <hr>

                    <div class="field">
                        <label class="edit_info_label">Name: </label>
                        <input type="text" name="username" id="username" placeholder="<?php echo $data['username']; ?>">
                    </div>
                    <div class="field">
                        <label class="edit_info_label">Mobile No: </label>
                        <input type="text" name="mobile" id="mobile" placeholder="<?php echo $data['mobile']; ?>">
                    </div>

                    <div class="field">
                        <label class="edit_info_label">Address: </label>
                        <input type="text" name="address" id="address" placeholder="<?php echo $data['address']; ?>">
                    </div>
                    <div class="field">
                        <label class="edit_info_label">City: </label>
                        <input type="text" name="city" id="city" placeholder="<?php echo $data['city']; ?>">
                    </div>
                    <div class="field">
                        <label class="edit_info_label">District: </label>
                        <input type="text" name="district" id="district" placeholder="<?php echo $data['district']; ?>">
                    </div>
                </form>
            </div>
        </div>

<!--3-->
        <div class="container3">
            <h2>Activity</h2>
            <hr>
            <div class="form">
                <div class="inputBx LogIn">
                    <input id="" type="submit" value="1" >
                </div>
            </div>
        </div>
    </div>
    <br>
    <div id="footer">
        <?php
        require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>
</body>
<script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/userProfile.js"></script>
</html>
