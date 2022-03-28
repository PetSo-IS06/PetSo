<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/viewSingleAnimalProfile.css">
    <title><?php echo SITE_NAME; ?> | Animal Profile</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>

<body>

<div id="top-nav">
    <?php
    require APP_ROOT . '/views/components/topNavbar.php';
    ?>
</div>

<div class="frm-container">
    <div>

        <?php
        //data setter
        $profile = $data['profile'];

        if (!empty($profile->image)) {
            $profile_image_url = URL_ROOT . "/public/$profile->image";
        } else {
            $profile_image_url = "https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930";
        }

        $date_words = '';
        if (isset($profile->create_date)) {
            $create_date = strtotime($profile->create_date);
            $date_words = date("F j, Y", $create_date);
        }


        if (!empty($user->us_profile_img)) {
            $current_user_profile = URL_ROOT . "/public/$user->us_profile_img";
        } else {
            $current_user_profile = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png";
        }

        $adoption_status = '';
        $adopt_color = '';
        if (!empty($profile->adoption_status)) {
            if ($profile->adoption_status == "Available") {
                $adoption_status = "Available";
                $adopt_color = "green";
            } else if ($profile->adoption_status == "Not Available") {
                $adoption_status = "Not Available";
                $adopt_color = "red";
            } else {
                $adoption_status = $profile->adoption_status;
            }
        }

        $sponsorship_status = '';
        $sponsorship_color = '';
        if (!empty($profile->sponsorship_status)) {
            if ($profile->sponsorship_status == "Available") {
                $sponsorship_status = "Available";
                $sponsorship_color = "green";
            } else if ($profile->sponsorship_status == "Not Available") {
                $sponsorship_status = "Not Available";
                $sponsorship_color = "red";
            } else {
                $sponsorship_sponsorship_status = $profile->sponsorship_status;
            }
        }
        ?>

        <div class="img_col">
            <div>
                <img src="<?php
                if(!($profile->image)) :
                    echo URL_ROOT.'/public/uploads/animals/default-img.jpg';
                else :
                    echo $profile->image;
                endif;?>" class="img_border" alt="">

            </div>
        </div>
        <div class="img_col">
            <div>
                <div class="heading2B grey"><?php echo $profile->name ?></div>
                <br><br>
                <div>
                    <div>
                        <span class="normalB purple"> <i class="fa fa-paw"></i> <?php echo $profile->gender ?>, <?php echo $profile->type ?> </span>
                    </div>
                    <div class="status">
                        <span class="normalB grey" style="float: right;">Sponsorship Status:
                            <span class="normalB <?php echo $sponsorship_color ?>"><?php echo $sponsorship_status ?></span> </span>
                        <span class="normalB grey" style="float: right;">Adoption Status:
                            <span class="normalB <?php echo $adopt_color ?>"><?php echo $adoption_status ?></span> </span>
                    </div>
                </div>

                <div style="padding-top: 40px; margin-bottom:25px">
                    <span class="normal"><?php echo $profile->description ?></span>
                </div>

                <div style="padding-top: 30px; display: flex; flex-direction: column">
                    <div class="orgDetails">
                        <span class="normalB grey"> Organization - </span> <?php echo $profile->org_name ?>
                    </div>
                    <div class="orgDetails">
                        <span class="normalB grey"> Mobile -  </span><?php echo $profile->org_mobile ?>
                    </div>
                    <div class="orgDetails">
                        <span class="normalB grey"> Email -  </span> <?php echo $profile->org_email ?>
                    </div>
                </div>

                <div class="cardButtons paddingTop">
                    <button class="<?php
                    if($sponsorship_status == 'Available') :
                        echo 'btn-sponsor';
                    elseif($sponsorship_status == 'Not Available') :
                        echo 'btn-sponsor-hide';
                    endif;?>">Sponsor</button>
                    <button class="<?php
                    if($adoption_status == 'Available') :
                        echo 'btn-adopt';
                    elseif($adoption_status == 'Not Available') :
                        echo 'btn-adopt-hide';
                    endif;?>">Adopt</button>
                </div>
            </div>
        </div>
    </div>


    <div style="margin-top: 400px;">


        <br>
    </div>


</div>

<div id="footer">
    <?php
    require APP_ROOT . '/views/components/footer.php';
    ?>
</div>
</body>
</html>
