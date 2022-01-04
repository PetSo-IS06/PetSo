<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Register</title>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/organization_signup.css'>
</head>

<body>
    <center>
        <h3>Request for an Account</h3>

        <ul>
            <li>1</li>
            <li class="Active">2</li>
            <li>3</li>
        </ul>


        <div class="center">
            <div>
                <h3>Tell us about your Organization</h3> <br>
                <p style="color: #9F2884;">Please note that your account will only be created after verifying the
                    details
                    you enter here.</p>
                    <br>
                <span>Already Have an account <a href="<?php echo URL_ROOT; ?>/Authentications/login">Sign In</a></span>
            </div>
            <br><br>
            <!-- <form class="form" action="<?php echo URL_ROOT; ?>/organizations/organizationSignUp" method="POST" enctype="multipart/form-data"> -->
                <form class="form">
            <div class="left">
                    <span class="label">Name Of the Organization</span>

                    <div class="inputBx">
                        <input type="text" placeholder="Name*" name="org_name" value=<?php echo $data['org_name'] ?>> <br>
                        <?php
                            if(!empty($data['name_error'])){
                                $msg = $data['name_error'];
                                echo "<span class='error'>$msg";
                            }
                        ?>
                        
                    </div>

                    <span class="label"> Contact Numbers </span>
                    <div class="inputBx">
                        <input type="number" placeholder="Mobile*" name="org_mobile" value=<?php echo $data['org_mobile'] ?>>
                    </div>
                    <div class="inputBx" style="padding-top: 1px;">
                        <input type="number" placeholder="Landline*" name="org_landline" value=<?php echo $data['org_mobile'] ?>><br>
                        <?php
                        if(!empty($data['contact_error'])){
                            $msg = $data['contact_error'];
                            echo "<span class='error'>$msg</span>";
                        }
                    ?>
                    </div><br>
                    


                    <span class="label"> What Type of Animals Do you take care of? </span><br><br>

                    Cats &nbsp<input type="checkbox" name="animals[]" value="Cats"/> &nbsp &nbsp
                    Dogs &nbsp<input type="checkbox" name="animals[]" value="Dogs"/> &nbsp &nbsp
                    Rabbits &nbsp<input type="checkbox" name="animals[]" value="Rabbits"/>


                    <br><br><br><br>
                    <span class="label">Would you respond to requests made <br>by the public regarding <br> animals in
                        need of help nearby your
                        location?</span> <br><br>
                    <input type="radio" id="yes" value=1 name="if_findhelp">
                    <label for="yes">Yes</label> &nbsp; &nbsp; &nbsp; 
                    <input type="radio" id="No" value=0 name="if_findhelp">
                    <label for="no">No</label>
                    <br><br><br>
                    <h3>Account Credentials</h3>
                    <hr><br>
                    <span class="label">Email Address </span>
                    <div class="inputBx">
                        <input type="text" placeholder="Email Address*" name="email" value=<?php echo $data['email'] ?>><br>
                        <?php
                        if(!empty($data['email_error'])){
                            $msg = $data['email_error'];
                            echo "<span class='error'>$msg</span>";
                        }
                    ?><br>
                    </div>
                    <span class="label">Password </span>
                    <div class="inputBx">
                        <input type="password" placeholder="Password*" name="password" value=<?php echo $data['password'] ?>><br>
                        <?php
                        if(!empty($data['password_error'])){
                            $msg = $data['password_error'];
                            echo "<span class='error'>$msg</span>";
                        }
                    ?>
                    </div>

                    <span class="label">Confirm Password</span>
                    <div class="inputBx">
                        <input type="password" placeholder="Confirm Password*" name="org_confirm_password" value=<?php echo $data['org_confirm_password'] ?>><br>
                        <?php
                        if(!empty($data['confirm_password_error'])){
                            $msg = $data['confirm_password_error'];
                            echo "<span class='error'>$msg</span>";
                        }
                    ?><br>
                    <?php
                        if(!empty($data['password_match_error'])){
                            $msg = $data['password_match_error'];
                            echo "<span class='error'>$msg</span>";
                        }
                    ?><br>
                    </div>
                </div>


                <div class="right">
                    <span class="label">Address</span>
                    <div class="inputBx">
                        <input type="text" placeholder="Street 1*" name="org_address1" value=<?php echo $data['org_address1'] ?>>
                    </div>
                    <div class="inputBx">
                        <input type="text" placeholder="Street 2" name="org_address2" value=<?php echo $data['org_address2'] ?>><br>
                        <?php
                        if(!empty($data['address_error'])){
                            $msg = $data['address_error'];
                            echo "<span class='error'>$msg</span>";
                        }
                    ?>
                    </div>
                    <div>
                        <span class="label">Select District</span>
                        <div class="selectBx">
                            <select id="Select Animals" name="org_district" >
                                <option value="Colombo">Colombo</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Maatar">Matara</option>
                                <option value="Galle">Galle</option>
                                <option value="Kurnegala">Kurnegala</option>
                            </select><br>
                        </div>
                    </div>

                    <div style="padding-top: 252px;">
                        <h3>Other Accounts</h3>
                        <hr><br>
                        <span class="label">Web Link </span>
                        <div class="inputBx">
                            <input type="text" placeholder="Link" name="org_website">
                        </div><br>
                        <span class="label">Facebook Page Link </span>
                        <div class="inputBx">
                            <input type="text" placeholder="Link" name="org_facebook">
                        </div>

                        <span class="label">Instagram ID</span>
                        <div class="inputBx">
                            <input type="text" placeholder="ID" name="org_insta">
                        </div>

                    </div>
                    </p>
                </div>
                <br><br><br><br><br><br><br><br><br>
                <div class="documents">
                    <h3 style="float: left;"> Supporting Documents(Optional)</h3>
                    <br><br>
                    <hr>
                    <br>
                    If you have any documents that will help us verify you as a recognized welfare organization in the
                    community, please upload them here.

                    <br><br>
                    <input type="file" style="float: left;" placeholder="Choose File" name="org_doc" id="org_doc">
                    <br><br>

                    By clicking 'Requesting Account', you are agreeing to our <a href>terms of service </a> and <a
                        href>privacy policy.</a>

                    <br>
                     <button type="button" class="btn-cancel">
                        Cancel
                    </button>
                    <button type="button" class="btn-request" id="myBtn">
                        Request Account
                    </button>

                </div>
            </form>
        </div>


        <div id="myModal" class="modal">
        <div class="modal-content">
<!-- <div class="modal-content"> -->
<div class="modal_center"> <br>
               <h2> Thank you for Registering Petso</h2>
               <br><br>
               <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/checked.png" height="170px" width="170px"> <br>
               <h3> You will be notified via email once <br> your account has been verified</h3> <br>
               <button type="submit" class="back_btn"> 
                Back to Home page 
              </button>
           </div>
<!-- </div> -->

</div>
                    </center>
    
    


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




