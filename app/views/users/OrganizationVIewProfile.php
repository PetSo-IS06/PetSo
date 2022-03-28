<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <title><?php echo SITE_NAME; ?> | Profile</title>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/organization_view_profile.css'>
</head>
<body>
    <div id="top-nav">
        <?php
            require APP_ROOT . '/views/components/topNavbar.php';
        ?>
    </div>
    <div class="row">
        <?php
        $url = URL_ROOT."/organizations/organizationViewProfile";

        if(empty($data['org_profile_img'])){
            echo"
            <div class='column1'>
            
                <div class='upload_image_content'> 
                    <form action='$url' method='POST' enctype='multipart/form-data'>
                        <div class='upload-btn-wrapper'>
                            <button class='btn'>Upload Profile Picture</button>
                                <input class='btn' type='file' name='org_profile_img' /> 
                            </div>
                        </div>
                        <button class='button_upload' type='submit' name='upload_image'>Save</button>
                    </form> 
                </div>
            </div>";
        }else {
            $img_name = $data['org_profile_img'];
            $img_url = URL_ROOT."/public/$img_name";
            echo"
            <div class='column1' style='background-image:url($img_url); background-repeat:no-repeat; background-position:center; background-size: cover;'>
                <div class='upload_image_content'> 
                    <form action='$url' method='POST' enctype='multipart/form-data'>
                        <div class='upload-btn-wrapper' style='opacity: 0.7;'>
                            <button class='btn'>Upload Profile Picture</button>
                                <input class='btn' type='file' name='org_profile_img' /> 
                            </div>
                        </div>
                        <button class='button_uploaded' style='opacity: 0.8; color:black'   type='submit' name='upload_image'>Save</button>
                    </form>
                    <form action='$url' method='POST' enctype='multipart/form-data'>
                        <div class='upload-btn-wrapper' style='opacity: 0.7;'>
                            <button class='button_remove' style='opacity: 0.8; color:black'   type='submit' name='remove_image'>Remove Image</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>";   
        }
        ?>
        <div class="column2">
            <div class="row1">
            <div class="content">
                <div class="heading">
                    <div class="title">About</div>
                    <hr class="heading-hr">
                </div>
            </div>
            </div>

            <div class="row3"></div>

            <div class="row2">
            <div class="content">
                <div class="heading">
                    <div class="title">Animals in care</div>
                    <hr class="heading-hr">
                </div>
                <div class="animal_in_care">
                    <?php 
                    foreach($data['animal_types'] as $type){
                        echo "<span class='label animal_name'>$type->animal_type</span> &nbsp";
                    }
                    ?>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row3">
        <div class="column3">
            <div class="content">
                <div class="heading">
                    <div class="title">Organization Info</div>
                    <hr class="heading-hr">
                </div>
                <div class="organization_info">
                   <form action="<?php echo URL_ROOT; ?>/organizations/organizationViewProfile" method="POST" enctype="multipart/form-data">
                        <div class="field">
                            <label class="organization_info_label">Name: </label> 
                            <input style="margin-left:35px" type="text" name="org_name" required value=<?php $value=$data['organization']; echo $value->org_name ?>>
                        </div>
                        <div class="field">
                            <label class="organization_info_label">Mobile No: </label> 
                            <input type="text" name="org_mobile"  required value=<?php $value=$data['organization']; echo $value->org_mobile ?>>
                        </div>
                        <div class="field">
                            <label class="organization_info_label">Email: </label> 
                            <input style="margin-left:35px" type="text" name="org_email"  required value=<?php $value=$data['organization']; echo $value->org_email ?>>
                        </div>
                        <div class="field">
                            <label class="organization_info_label">Website: </label> 
                            <input style="margin-left:18px" type="text" name="org_website" id="" value=<?php $value=$data['organization']; echo $value->org_website ?>>
                        </div>
                        <div class="field">
                            <label class="organization_info_label">Facebook: </label> 
                            <input style="margin-left:5px" type="text" name="org_facebook" id="" value=<?php $value=$data['organization']; echo $value->org_facebook ?>>
                        </div>
                        <div class="field">
                            <label class="organization_info_label">Instagram: </label> 
                            <input style="margin-left:5px" type="text" name="org_insta" id="" value=<?php $value=$data['organization']; echo $value->org_insta ?>>
                        </div>
                        <div class="field">
                            <label class="organization_info_label">Address: </label> 
                            <input style="margin-left:20px" type="text" name="org_address1"  required value=<?php $value=$data['organization']; echo $value->org_address1 ?>>
                        </div>
                        <!-- <div class="field">
                            <label class="organization_info_label">District: </label> 
                            <input style="margin-left:30px" type="text" name=""  required value=<?php $value=$data['organization']; echo $value->org_district ?>>
                        </div> -->

                        <br><br>
                        <button class="button_save" type="submit" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="column4">
            <div class="heading">
            <div class="content">
                <div class="heading">
                    <div class="title">Account Info</div>
                    <hr class="heading-hr">
                </div>
                <div class="account_info">
                    <div id="account_email">
                        <?php 
                        $email = $data['organization']->org_email;
                        echo $email;
                        ?>
                    </div>
                    <div id="account_id">
                    <?php 
                        $id = $data['organization']->org_id;
                        echo "ID : $id";
                        ?>
                    </div> <br><br>
                    <div class="account_status">
                        <div style="float:left; font-weight:bold; font-size:20px; margin-left:15px">
                            Account Created On : 
                        </div>
                        <div style="float:right; font-size:20px; margin-right:13px">
                           01/02/2021
                        </div>
                        <div style="float:left; font-weight:bold; font-size:20px; margin-left:15px; margin-top:30px">
                            Last active on : 
                        </div>
                        <div style="float:right; font-size:20px; margin-right:13px; margin-top:30px">
                           01/02/2021
                        </div>
                        <div style="float:left; font-weight:bold; font-size:20px; margin-left:15px; margin-top:30px">
                            Account Status :&nbsp &nbsp &nbsp &nbsp &nbsp 
                        </div>
                        <div style="float:right; font-size:20px; margin-right:13px; margin-top:30px">
                           active
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</body>
</html>
