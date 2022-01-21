<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Register</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />   
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/step.css'>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/organization_signup.css'>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/form-container.css'>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/select-box.css'>
</head>

<body>
        <div class="step">
            <h3>Request an account</h3>
            <ul class="stepNo">
                <li>1</li>
                <li class="active">2</li>
                <li>3</li>
            </ul>
        </div>

        <div class="frm-container">

        <div class="row" style="text-align: center;">
            <h3>Tell us about your Organization</h3> <br>
            <p style="color: #9F2884;">Please note that your account will only be created after verifying the
                details
                you enter here.</p>
                <br>
            <span>Already Have an account <a href="<?php echo URL_ROOT; ?>/Authentications/login">Sign In</a></span>
        </div>


        <div class="cmt">
            <div>
                <h2>Contact Information</h2><br>
                <hr size="4">
            </div>

            <form action="<?php echo URL_ROOT; ?>/organizations/organizationSignUp" method="POST" enctype="multipart/form-data">
            <div class="p3-frm-clmn input-icons ">
                <label for="fname">Name of the organization</label><br>
                <i class="fa fa-user icon"></i>
                <div class="inputBx placeholder-color" style="margin-bottom:2%">
                    <input type="text" placeholder="Name*" name="org_name" value=<?php echo $data['org_name'] ?>>
                </div><br>
                <?php
                    if(!empty($data['name_error'])){
                        $msg = $data['name_error'];
                        echo "<span class='invalidInput'>$msg</span><br><br>";
                    }
                ?>
                

                <label for="fname" style="margin-top:3%">Contact Numbers</label><br>
                <i class="fas fa-phone-alt icon"></i>
                <div class="inputBx placeholder-color" style="margin-top:4%">
                    <input type="number" placeholder="Mobile Number*" id="title" name="org_mobile" value=<?php echo $data['org_mobile'] ?>><br>
                </div>

                <i class="fas fa-phone-office icon" style="margin-top:6px"></i>
                <div class="inputBx placeholder-color">
                    <input type="number" placeholder="Landline Number" id="title" name="org_landline" value=<?php echo $data['org_landline'] ?>><br>
                </div>
                <span class="invalidInput">
                    <?php
                        if(!empty($data['contact_error'])){
                            $msg = $data['contact_error'];
                            echo "<span class='error'>$msg</span>";
                        }
                    ?>
                </span><br>
            </div>


            <div class="p3-frm-clmn input-icons ">
                <label for="fname">Address</label><br>
                <i class="fas fa-map-marker-alt icon"></i>
                <div class="inputBx placeholder-color">
                    <input type="text" placeholder="Address 1*" id="title" name="org_address1" value=<?php echo $data['org_address1'] ?>><br>
                </div>

                <i class="fas fa-map-marker-alt icon" style="margin-top:6px"></i>
                <div class="inputBx placeholder-color">
                    <input type="text" placeholder="Address 2" id="title" name="org_address2" value=<?php echo $data['org_address2'] ?>><br>
                </div><br>

                <?php
                    if(!empty($data['address_error'])){
                        $msg = $data['address_error'];
                        echo "<span class='invalidInput'>$msg</span><br><br>";
                    }
                ?>

                <div class="div dropcon">
                    <label class="drop-lable">Select District</label> <br>
                    <select name="org_district" class="adptxtbox" id="">
                        <option value="volvo">Kandy</option>
                        <option value="saab">Colombo</option>
                        <option value="opel">Galle</option>
                        <option value="audi">Polonnaruwa</option>
                    </select>
                </div>
            
                <div class="div dropcon">
                    <label class="drop-lable">Select Area</label> <br>
                    <select name="org_area" class="adptxtbox" id=" ">
                        <option value="volvo ">Dehiwela</option>
                        <option value="saab ">Wellawatta</option>
                        <option value="opel ">Colombo 7</option>
                    </select>
                </div>
                <?php
                    if(!empty($data['district_area_error'])){
                        $msg = $data['district_area_error'];
                        echo "<span class='invalidInput'>$msg</span>";
                    }
                ?>
            </div>


            <div class="p3-frm-clmn-2 input-icons">
                <label for="fname" style="margin-top:10%">What type of animals do you take care of?</label><br>   <br> 

                <div class="radio-left">
                    <label class="container">Cats
                        <?php 
                            if(in_array("Cats",$data['animals'])){
                                echo "<input type='checkbox' name='animals[]' checked value='Cats'>";    
                            }else {
                                echo "<input type='checkbox' name='animals[]' value='Cats'>";    
                            }
                        ?>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Dogs
                        <?php 
                            if(in_array("Dogs",$data['animals'])){
                                echo "<input type='checkbox' name='animals[]' checked value='Dogs'>";
                            }else{
                                echo "<input type='checkbox' name='animals[]' value='Dogs'>";
                            }
                        ?>
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="radio-right">
                    <label class="container">Rabbits
                    <?php 
                        if(in_array("Rabbits",$data['animals'])){
                            echo "<input type='checkbox' name='animals[]' checked value='Rabbits'>";
                        }else{
                            echo "<input type='checkbox' name='animals[]' value='Rabbits'>";
                        }
                    ?>
                    <span class="checkmark"></span>
                </label>
                <label class="container">Turtles
                    <?php 
                        if(in_array("Turtles",$data['animals'])){
                            echo "<input type='checkbox' name='animals[]' checked value='Turtles'>";
                        }else{
                            echo "<input type='checkbox' name='animals[]' value='Turtles'>";
                        }
                    ?>
                    <span class="checkmark"></span>
                </label>
                </div>
                <?php
                    if(!empty($data['animal_error'])){
                        $msg = $data['animal_error'];
                        echo "<span class='invalidInput'>$msg</span><br><br>";
                    }
                ?>

                <div style="margin-top:2.5%">
                    <label for="fname">Would you responed to emergency requests</label><br><br>
                    <label class="container-radio">Yes
                        <?php 
                            if(isset($data['if_findhelp']) && $data['if_findhelp'] == "yes"){
                                echo "<input type='radio' value='yes' checked name='if_findhelp'>";
                            }else{
                                echo "<input type='radio' value='yes' name='if_findhelp'>";
                            }
                        ?>    
                        <span class="checkmark-radio"></span>
                    </label>

                    <label class="container-radio">No
                        <?php 
                            if(isset($data['if_findhelp']) && $data['if_findhelp'] == "no"){
                                echo "<input type='radio' value='no' checked name='if_findhelp'>";
                            }else{
                                echo "<input type='radio' value='no' name='if_findhelp'>";
                            }
                        ?> 
                        <span class="checkmark-radio"></span>
                    </label>
                    <?php
                    if(!empty($data['if_findhelp_error'])){
                        $msg = $data['if_findhelp_error'];
                        echo "<span class='invalidInput'>$msg</span><br><br>";
                    }
                ?>
                </div>
            </div>

        </div><br>

        <div class="cmt">
            <div class="p3-frm-clmn input-icons ">
                <h2>Account Credentials</h2><br>
                <hr size="4"><br>
                <label for="fname">Email Address</label><br>
                <i class="fa fa-user icon"></i>
                <div class="inputBx placeholder-color">
                    <input type="text" placeholder="Email*" id="title" name="email" value=<?php echo $data['email'] ?>><br>
                </div><br>
                <?php
                    if(!empty($data['email_error'])){
                        $msg = $data['email_error'];
                        echo "<span class='invalidInput'>$msg</span><br><br>";
                    }
                ?>

                <label for="fname">Password</label><br>
                <i class="fa fa-user icon"></i>
                <div class="inputBx placeholder-color">
                    <input type="password" placeholder="Password*" id="title" name="password" value=<?php echo $data['password'] ?>><br>
                </div><br>
                <?php
                    if(!empty($data['password_error'])){
                        $msg = $data['password_error'];
                        echo "<span class='invalidInput'>$msg</span><br><br>";
                    }
                ?>

                <label for="fname">Confirm Password</label><br>
                <i class="fa fa-user icon"></i>
                <div class="inputBx placeholder-color">
                    <input type="password" placeholder="Re-enter Password*" id="title" name="org_confirm_password" value=<?php echo $data['org_confirm_password'] ?>><br>
                </div>
                    <?php
                        if(!empty($data['confirm_password_error'])){
                            $msg = $data['confirm_password_error'];
                            echo "<span class='invalidInput'>$msg</span><br>";
                        }
                    ?>
                    <?php
                        if(!empty($data['password_match_error'])){
                            $msg = $data['password_match_error'];
                            echo "<span class='invalidInput'>$msg</span><br>";
                        }
                    ?>
            </div>


            <div class=" p3-frm-clmn input-icons ">
                <h2>Other Accounts</h2><br>
                <hr size="4"><br>
                <label for="fname">Website Link</label><br>
                <i class="fa fa-user icon"></i>
                <div class="inputBx placeholder-color">
                    <input type="text" placeholder="Website Link" id="title" name="org_website" value=<?php echo $data['org_website'] ?>><br>
                </div><br>
                

                <label for="fname">Facebook Page Link</label><br>
                <i class="fa fa-user icon"></i>
                <div class="inputBx placeholder-color">
                    <input type="text" placeholder="Facebook Link" id="title" name="org_facebook" value=<?php echo $data['org_facebook'] ?>><br>
                </div><br>

                <label for="fname">Instagram ID</label><br>
                <i class="fa fa-user icon"></i>
                <div class="inputBx placeholder-color">
                    <input type="text" placeholder="Instagram ID" id="title" name="org_insta" value=<?php echo $data['org_insta'] ?>><br>
                </div><br><br><br><br><br><br><br>
                <br>
            </div>
            <!--  -->
        </div><br>

        <div class="cmt">
            <br>
            <div class="">
                <br><br><br>
                <h2>Supporting Documents (Optional)</h2><br>
                <hr size="4">
            </div><br>

            <div class="lastcnt" style="padding: 10px 10px 100px 10px;">
                <p> If you have any documents that will help us verify you as a recognized welfare organization in the
                    community, please upload them here.
                </p><br>

                <input type="file" placeholder="Choose file" name="org_doc"><br><br>

                <p>By clicking 'Requesting Account', you are agreeing to our <a href>terms of service </a> and <a
                        href>privacy policy.</a> </p><br>

                <div class="p3-btn">
                    <button style="float: left; background-color: rgb(44, 39, 32);" class="button"
                        type="button">Cancel</button>
                    <input class="button" type="submit" name="submit" value="Request Account"/>
                </div>
            </div>
            
        </div>
        </form>       

    </div>
    
        <div id="myModal" class="modal">
        <div class="modal-content">
        <div class="modal_center"> <br>
            <h2> Thank you for Registering Petso</h2>
            <br><br>
            <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/checked.png" height="170px" width="170px"> <br>
            <h3> You will be notified via email once <br> your account has been verified</h3> <br>
            <button type="submit" class="back_btn"> 
                Back to Home page 
            </button>
        </div>
</div>
    
    


    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>
