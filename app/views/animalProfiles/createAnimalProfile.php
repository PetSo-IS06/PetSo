<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/create-animal-profile.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/components/select-box.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/create-animal-profile.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Animal Profile</title>
</head>
    <body>
        <div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
        </div>
        <div id="body" class="pg-body">
            <form action="<?php echo URL_ROOT . '/AnimalProfiles/create'; ?>" method="POST" class="prj-form" enctype="multipart/form-data">
                <div class="form-sec card2" id="">
                    <div class="title-sec">
                        <h2 class="purple heading2B center">Add a new member to your family at Petso </h2>
                    </div>
                    <div class="input-sec">
                        <div class="input-col">
                            <div>
                                <div class="inputBx2" id="">
                                    <input name="name" id="name" type="text" value="<?php echo $data['name']; ?>" maxlength="32">
                                    <span class="normalB">Name*</span>
                                </div>
                                <span class="invalidInput"><?php echo $data['nameError']; ?></span>
                            </div>

                            <div class="">
                                <label class="normalB grey">Animal type</label>
                                <div class="selectBx" style="margin-top: 10px; width: 100%;">
                                    <input name="type" type="text" list="type" class="select-cat" required>
                                    <datalist id="type">
                                        <option value="Dog">Dog</option>
                                        <option value="Cat">Cat</option>
                                        <option value="Bird">Bird</option>
                                        <option value="Other">Other</option>
                                    </datalist>
                                </div>
                                <span class="invalidInput"><?php echo $data['typeError']; ?></span>
                            </div>

                            <div>
                                <div class="inputBx2" id="">
                                    <input name="breed" id="breed" type="text" value="<?php echo $data['breed']; ?>">
                                    <span class="normalB">Breed</span>
                                </div>
                                <span class="invalidInput"><?php echo '' ?></span>
                            </div>
                            <div>
                                <div class="inputBx2" id="">
                                    <input name="age" id="age" type="text" value="<?php echo $data['age']; ?>">
                                    <span class="normalB">Age*</span>
                                </div>
                                <span class="invalidInput"><?php echo $data['ageError']; ?></span>
                            </div>

                            <div>
                                <label class="normalB grey">Gender*</label>
                                <div class="gender">
                                    <input type="radio" name="gender" value="Male" id="option-1">
                                    <input type="radio" name="gender" value="Female" id="option-2">
                                    <label for="option-1" class="option option-1">
                                        <span>Male</span>
                                    </label>
                                    <label for="option-2" class="option option-2">
                                        <span>Female</span>
                                    </label>
                                </div>
                                <span class="invalidInput"><?php echo $data['genderError']; ?></span>
                            </div>

                            <div>
                                <p class="grey normalB">Upload image</p>
                                <input type="file" accept="image/*" id="prof-image" name="prof-image" class="">
                                <span class="invalidInput"><?php echo ''; ?></span>
                            </div>
                            
                        </div>
                        <div class="input-col">
                            <div class="textArea">
                                <span class="normalB">Profile description</span>
                                <div class="text-box" id="">
                                    <textarea rows="8" name="description" maxlength="200"><?php echo $data['description']; ?></textarea> 
                                </div>
                                <span class="invalidInput"><?php echo ''; ?></span>
                            </div>

                            <div class="check">
                                <input type="checkbox" name="adoption" id="adoption" value="true" onClick="toggleAdoption()" checked>
                                <label for="adoption">Open for adoption</label>
                            </div>

                            <div class="textArea" id="adoption-req">
                                <span class="normalB">Requirements for adoption (if any)</span>
                                <div class="text-box" id="">
                                    <textarea rows="8" name="requirements" maxlength="200"><?php echo $data['requirements']; ?></textarea> 
                                </div>
                                <span class="invalidInput"><?php echo ''; ?></span>
                            </div> 

                            <div class="check">
                                <input type="checkbox" name="sponsorship" id="sponsorship" value="true" onClick="toggleSponsorship()" checked>
                                <label for="sponsorship">Open for sponsoring</label>
                            </div>

                            <div id="sponsor-info">
                                <div class="inputBx2" id="sponsor-fee">
                                    <input name="monthlyCost" id="monthlyCost" type="number" value="<?php echo $data['monthlyCost']; ?>" max="100000">
                                    <span class="normalB">Monthly Cost(LKR)</span>
                                </div>
                                <span class="invalidInput"><?php echo $data['monthlyCostError']; ?></span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="action-sec">
                        <a href="<?php echo URL_ROOT.'/OrgDashboards/dashboard'; ?>" class="grey-btn">Cancel</a>
                        <input type="submit" class="blue-btn" value="Submit">
                    </div>
                </div>
            </form>
        </div>
        <div id="footer">
            <?php
            require APP_ROOT . '/views/components/footer.php';
            ?>
        </div>
    </body>
</html>
