<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <h3>Tell us about your Organization</h3>
                <p style="color: #9F2884;">Please note that your account will only be created after verifying the
                    details
                    you enter here.</p>
                <span>Already Have an account <a href="">Sign In</a></span>
            </div>
            <br><br>
            <form class="form">
                <div class="left">
                    <span class="label">Name Of the Organization</span>

                    <div class="inputBx">
                        <input type="text" required="required" placeholder="Name*">
                    </div>

                    <span class="label"> Contact Numbers </span>
                    <div class="inputBx">
                        <input type="text" required="required" placeholder="Mobile*">
                    </div>
                    <div class="inputBx" style="padding-top: 1px;">
                        <input type="text" required="required" placeholder="Landline*">
                    </div>


                    <span class="label"> What Type of Animals Do you take care of? </span><br>

                    <div class="selectBx">
                        <select name="Select Animals" id="Select Animals">
                            <option value="Select Animals">Cat</option>
                            <option value="Select Animals">Dog</option>
                            <option value="Select Animals">Rabbit</option>
                        </select>
                    </div>


                    <br>
                    <span class="label">Would you respond to requests made <br>by the public regarding <br> animals in
                        need of help nearby your
                        location?</span> <br>
                    <input type="radio" id="yes" value="yes" name="request">
                    <label for="yes">Yes</label> &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" id="No" value="no" name="request">
                    <label for="no">No</label><br>

                    <h3>Account Credentials</h3>
                    <hr>
                    <span class="label">Email Address </span>
                    <div class="inputBx">
                        <input type="text" required="required" placeholder="Email Address*">
                    </div>
                    <span class="label">Password </span>
                    <div class="inputBx">
                        <input type="password" required="required" placeholder="Password*">
                    </div>

                    <span class="label">Confirm Password</span>
                    <div class="inputBx">
                        <input type="password" required="required" placeholder="Confirm Password*">
                    </div>
                </div>


                <div class="right">

                    <span class="label">Address</span>
                    <div class="inputBx">
                        <input type="text" required="required" placeholder="Street 1*">
                    </div>
                    <div class="inputBx">
                        <input type="text" required="required" placeholder="Street 2*">
                    </div>
                    <div>
                        <div style="float: left;">
                            <span class="label">Select District</span>
                            <div class="selectBx">
                                <select name="Select Animals" id="Select Animals">
                                    <option value="Select Animals">Kandy</option>
                                </select>
                            </div>
                        </div>
                        <div style="float: right;">
                            <span class="label">Select Area</span>
                            <div class="selectBx">
                                <select name="Select Animals" id="Select Animals">
                                    <option value="Select Animals">Town</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div style="padding-top: 260px;">
                        <h3>Other Accounts</h3>
                        <hr>
                        <span class="label">Web Link </span>
                        <div class="inputBx">
                            <input type="text" required="required" placeholder="Link">
                        </div>
                        <span class="label">Facebook Page Link </span>
                        <div class="inputBx">
                            <input type="text" required="required" placeholder="Link">
                        </div>

                        <span class="label">Instagram ID</span>
                        <div class="inputBx">
                            <input type="text" required="required" placeholder="ID">
                        </div>

                    </div>
                    </p>
                </div>
                <br><br><br><br>
                <div class="documents">
                    <h3 style="float: left;"> Supporting Documents(Optional)</h3>
                    <br><br><br>
                    <hr>
                    <br>
                    If you have any documents that will help us verify you as a recognized welfare organization in the
                    community, please upload them here.



                    <br><br>
                    <input type="file" style="float: left;" placeholder="Choose File">
                    <br><br>

                    By clicking 'Requesting Account', you are agreeing to our <a href>terms of service </a> and <a
                        href>privacy policy.</a>

                    <br>
                    <button type="submit" class="btn-cancel">
                        Cancel
                    </button>
                    <button type="submit" class="btn-request">
                        Request Account
                    </button>

                </div>
            </form>
        </div>
    </center>
</body>


</html>