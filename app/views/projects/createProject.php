<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/create-project.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/components/select-box.css">
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/set-min-date.js"></script>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/textarea-bullets.js"></script>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/create-project.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Welfare Project</title>
</head>
    <body>
        <div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
        </div>
        <div id="body" class="pg-body">
            <div class="header">
                <div class="header-contents">
                    <h1>Create an <font class="yellow">Impact</font> with Us</h1>
                    <p class="heading2 white">Publish your next welfare project in Petso and get help from more animal lovers out there</p>
                    <div class="action">
                        <a href="#prj-cause" class="yellow-btn">Get Started</a>
                    </div>
                </div>
            </div>
            <form action="<?php echo URL_ROOT . '/Projects/createProject'; ?>" method="POST" class="prj-form" enctype="multipart/form-data">
                <h2 class="purple heading2B center">Let’s create your next welfare project at Petso!</h2>
                
                <!-- Project Cause Form -->    
                <div class="form-sec card2" id="prj-cause">
                    <h2 class="grey subtitleB">Cause of the Welfare Project</h2>
                    <hr>
                    <div class="instr">
                        <p class="grey normal">Submit all the necessary details regarding your next project and raise funds, and/or enroll volunteers you need. Note that your project will only be published once approved by the system admin.</p>
                        <!-- <p class="purple"><b>Note:</b> You can only have <b>3 ongoing projects</b> maximum at a time.</p> -->
                    </div>
                    <div class="selectBx" id="selectBx">
                        <input type="checkbox" id="options-view-button" name="selectbox">
                        <div id="select-button">
                            <div id="selected-value">
                                <span class="normalB">Select the cause of your Project*</span>
                            </div>
                            <div id="chevrons">
                                <i class="fas fa-chevron-down dropdown-arrow"></i>
                            </div>
                        </div>
                        <div id="options">
                            <div class="option">
                                <input onclick="hideOther()" class="s-c top" type="radio" name="cause" value="Stray animal sterilization">
                                <input onclick="hideOther()" class="s-c bottom" type="radio" name="cause" value="Stray animal sterilization">
                                <span class="label">Stray animal sterilization</span>
                                <span class="opt-val">Stray animal sterilization</span>
                            </div>
                            <div class="option">
                                <input onclick="hideOther()" class="s-c top" type="radio" name="cause" value="Environment Cleaning">
                                <input onclick="hideOther()" class="s-c bottom" type="radio" name="cause" value="Environment Cleaning">
                                <span class="label">Environment Cleaning</span>
                                <span class="opt-val">Environment Cleaning</span>
                            </div>
                            <div class="option">
                                <input onclick="hideOther()" class="s-c top" type="radio" name="cause" value="Animal rescue">
                                <input onclick="hideOther()" class="s-c bottom" type="radio" name="cause" value="Animal rescue">
                                <span class="label">Animal rescue</span>
                                <span class="opt-val">Animal rescue</span>
                            </div>
                            <div class="option">
                                <input onclick="showOther()" class="s-c top" type="radio" name="cause" value="Other">
                                <input onclick="showOther()" class="s-c bottom" type="radio" name="cause" value="Other">
                                <span class="label">Other</span>
                                <span class="opt-val">Other</span>
                            </div>
                        </div>
                    </div>
                    <span class="invalidInput"><?php echo $data['causeError']; ?></span>

                    <div class="inputBx2" id="other-title-in">
                        <input name="otherCause" id="otherCause" type="text" value="<?php echo $data['otherCause']; ?>">
                        <span class="normalB">Other</span>
                    </div>
                    <span class="invalidInput"><?php echo '' ?></span>

                    <div class="prj-form-nav">
                        <a href="<?php echo URL_ROOT.'/OrgDashboards/dashboard'; ?>" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a style="pointer-events: none">&laquo;</a>
                            <a href="#" class="active">1</a>
                            <a onClick="showProjectDetails()">2</a>
                            <a onClick="showVolunteering()">3</a>
                            <a onClick="showFunding()">4</a>
                            <a onClick="showProjectDetailsNext()">&raquo;</a>
                        </div>
                        <a id="prj-cause-next-btn" onClick="showProjectDetailsNext()" class="blue-btn">Next</a>
                    </div>
                </div>

                <!-- Project Details Form -->    
                <div class="form-sec card2" id="prj-details">
                    <h2 class="grey subtitleB">Project Details</h2>
                    <hr>
                    <div class="inputBx2" id="">
                        <input name="title" id="title" type="text" required="required" value="<?php echo $data['title']; ?>">
                        <span class="normalB">Project Title</span>
                    </div>
                    <span class="invalidInput"><?php echo $data['titleError']; ?></span>

                    <div class="inputBx2" id="">
                        <input name="initDate" id="datefield" type="date" required="required" value="<?php echo $data['initDate']; ?>"> 
                        <span class="normalB">Initiation date</span>
                    </div>
                    <span class="invalidInput"><?php echo $data['initDateError']; ?></span>

                    <div class="textArea" style="margin-top: 1rem;">
                        <span class="normalB">Project description</span>
                        <div class="text-box" id="">
                            <textarea rows="7" name="prjDescription" placeholder="Max 450 characters" maxlength="450"><?php echo $data['prjDescription']; ?></textarea> 
                        </div>
                        <span class="invalidInput"><?php echo $data['prjDescriptionError']; ?></span>
                    </div> 

                    <div>
                        <p class="grey normalB">Upload a clear image as the cover photo for your project page.</p>
                        <input type="file" accept="image/*" id="prj-image" name="prj-image">
                        <span class="invalidInput"><?php echo $data['prjImageError']; ?></span>
                    </div>

                    <div class="prj-form-nav">
                        <a href="<?php echo URL_ROOT.'/OrgDashboards/dashboard'; ?>" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a onClick="showProjectCause()">&laquo;</a>
                            <a onClick="showProjectCause()">1</a>
                            <a href="#" class="active">2</a>
                            <a onClick="showVolunteering()">3</a>
                            <a onClick="showFunding()">4</a>
                            <a onClick="showVolunteeringNext()">&raquo;</a>
                        </div>
                        <a id="prj-vol-next-btn" onClick="showVolunteeringNext()" class="blue-btn">Next</a>
                    </div>
                </div>

                <!-- Volunteer Enrollment Form -->    
                <div class="form-sec card2" id="prj-vol">
                    <h2 class="grey subtitleB">Volunteer Enrollment</h2>
                    <hr>

                    <div class="bool">
                        <p class="grey normalB" style="margin-bottom: 10px">Would you like to enroll volunteers for the project?</p>
                        <input type="radio" onClick="showVolForm()" name="volunteering" value="Yes" id="isVolunteering" checked><label>Yes</label>
                        <input type="radio" onClick="hideVolForm()" name="volunteering" value="No" id="noVolunteering"> <label>No</label>
                    </div>

                    <div class="vol-form" id="vol-form">
                        <div class="textArea" style="margin-top: 1rem;">
                            <span class="normalB">Why should people volunteer for this project?</span>
                            <div class="text-box" id="">
                                <textarea rows="5" name="volReason" placeholder="Max 250 characters" maxlength="250"><?php echo $data['volReason']; ?></textarea>
                            </div>
                            <span class="invalidInput"><?php echo $data['volReasonError']; ?></span>
                        </div> 

                        <div class="textArea" style="margin-top: 1rem;">
                            <span class="normalB">Work Description</span>
                            <div class="text-box" id="">
                                <textarea rows="5" name="volDescription" placeholder="Max 250 characters" maxlength="250"><?php echo $data['volDescription']; ?></textarea>
                            </div>
                            <span class="invalidInput"><?php echo $data['volDescriptionError']; ?></span>
                        </div> 

                        <div class="vol-inputs">
                            <div class="vol-inputs-col">
                                <div class="row-title">
                                    <label class="grey normalB">Location</label>
                                </div>
                                <div class="vol-inputs-col-row">
                                    <div class="selectBx">
                                        <input name="district" type="text" list="districts" class="select-cat">
                                            <datalist id="districts">
                                                <?php
                                                    $str_district = file_get_contents(URL_ROOT . '/public/assets/json/districts.json');
                                                    $district = json_decode($str_district, true);
                                                    foreach ($district as $item) {
                                                ?>
                                                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                                <?php }?>
                                            </datalist>
                                    </div>
                                    <span class="invalidInput"><?php echo $data['districtError']; ?></span>

                                    <div class="selectBx">
                                        <input name="area" type="text" list="areas" class="select-cat">
                                            <datalist id="areas">
                                            <?php
                                                $str_areas = file_get_contents(URL_ROOT . '/public/assets/json/areaList.json');
                                                $area = json_decode($str_areas, true);
                                                foreach ($area as $item) {
                                            ?>
                                            <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                            <?php }?>
                                            </datalist>
                                    </div>
                                    <span class="invalidInput"><?php echo $data['areaError']; ?></span>

                                </div>

                                <div class="row-title">
                                    <label class="grey normalB">Work Hours</label>
                                </div>
                                <div class="vol-inputs-col-row">
                                    <div class="selectBx" id="selectBx">
                                        <input type="checkbox" id="options-view-button" name="selectbox">
                                        <div id="select-button">
                                            <div id="selected-value">
                                                <span class="normalB">From*</span>
                                            </div>
                                            <div id="chevrons">
                                                <i class="fas fa-chevron-down dropdown-arrow"></i>
                                            </div>
                                        </div>
                                        <div id="options">
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="workFrom" value="Not specified">
                                                <input class="s-c bottom" type="radio" name="workFrom" value="Not specified">
                                                <span class="label">Not specified</span>
                                                <span class="opt-val">Not specified</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="workFrom" value="8:00AM">
                                                <input class="s-c bottom" type="radio" name="workFrom" value="8:00AM">
                                                <span class="label">8:00AM</span>
                                                <span class="opt-val">8:00AM</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="workFrom" value="9:00AM">
                                                <input class="s-c bottom" type="radio" name="workFrom" value="9:00AM">
                                                <span class="label">9:00AM</span>
                                                <span class="opt-val">9:00AM</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="workFrom" value="10:00AM">
                                                <input class="s-c bottom" type="radio" name="workFrom" value="10:00AM">
                                                <span class="label">10:00AM</span>
                                                <span class="opt-val">10:00AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="invalidInput"><?php echo $data['workFromError']; ?></span>

                                    <div class="selectBx" id="selectBx">
                                        <input type="checkbox" id="options-view-button" name="selectbox">
                                        <div id="select-button">
                                            <div id="selected-value">
                                                <span class="normalB">To*</span>
                                            </div>
                                            <div id="chevrons">
                                                <i class="fas fa-chevron-down dropdown-arrow"></i>
                                            </div>
                                        </div>
                                        <div id="options">
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="workTo" value="Not specified">
                                                <input class="s-c bottom" type="radio" name="workTo" value="Not specified">
                                                <span class="label">Not specified</span>
                                                <span class="opt-val">Not specified</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="workTo" value="3:00PM">
                                                <input class="s-c bottom" type="radio" name="workTo" value="3:00PM">
                                                <span class="label">3:00PM</span>
                                                <span class="opt-val">3:00PM</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="workTo" value="4:00PM">
                                                <input class="s-c bottom" type="radio" name="workTo" value="4:00PM">
                                                <span class="label">4:00PM</span>
                                                <span class="opt-val">4:00PM</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="workTo" value="5:00PM">
                                                <input class="s-c bottom" type="radio" name="workTo" value="5:00PM">
                                                <span class="label">5:00PM</span>
                                                <span class="opt-val">5:00PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="invalidInput"><?php echo ''; ?></span>

                                </div>
                                <div class="textArea" style="margin-top: 1rem;">
                                    <span class="normalB">Requirements</span>
                                    <div class="text-box" id="requirements">
                                        <textarea name="volRequirements" onInput="handleInput(event)" rows="8"><?php echo $data['volRequirements']; ?></textarea> 
                                    </div>
                                    <span class="invalidInput"><?php echo ''; ?></span>
                                </div> 
                            </div>
                            <div class="vol-inputs-col">
                                <div class="vol-inputs-col-row">
                                    <div class="widen">
                                        <div class="inputBx2" id="date">
                                            <input name="workStart" id="datefield" type="date" required="required" value="<?php echo $data['workStart'];?>"> 
                                            <span class="normalB">Work Start date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo $data['workStartError']; ?></span>
                                    </div>
                                    <div class="widen">
                                        <div class="inputBx2" id="date">
                                            <input name="workEnd" id="datefield" type="date" required="required" value="<?php echo $data['workEnd'];?>"> 
                                            <span class="normalB">Work End date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo $data['workEndError']; ?></span>
                                    </div>
                                </div>
                                <div class="vol-inputs-col-row" id="work-days">
                                    <div class="selectBx" id="selectBx">
                                        <input type="checkbox" id="options-view-button" name="selectbox">
                                        <div id="select-button">
                                            <div id="selected-value">
                                                <span class="normalB">Work days</span>
                                            </div>
                                            <div id="chevrons">
                                                <i class="fas fa-chevron-down dropdown-arrow"></i>
                                            </div>
                                        </div>
                                        <div id="options">
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="days" value="Daily">
                                                <input class="s-c bottom" type="radio" name="days" value="Daily">
                                                <span class="label">Daily</span>
                                                <span class="opt-val">Daily</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="days" value="Weekends">
                                                <input class="s-c bottom" type="radio" name="days" value="Weekends">
                                                <span class="label">Weekends</span>
                                                <span class="opt-val">Weekends</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="days" value="Weekdays">
                                                <input class="s-c bottom" type="radio" name="days" value="Weekdays">
                                                <span class="label">Weekdays</span>
                                                <span class="opt-val">Weekdays</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="days" value="Any preferred days">
                                                <input class="s-c bottom" type="radio" name="days" value="Any preferred days">
                                                <span class="label">Any preferred days</span>
                                                <span class="opt-val">Any preferred days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="invalidInput"><?php echo $data['daysError']; ?></span>

                                </div>
                                <div class="vol-inputs-col-row">
                                    <div class="widen">
                                        <div class="inputBx2" id="date">
                                            <input name="appOpen" id="datefield" type="date" value="<?php echo $data['appOpen'];?>"> 
                                            <span class="normalB">Application Opening date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo $data['appOpenError']; ?></span>
                                    </div>
                                    <div class="widen">
                                        <div class="inputBx2" id="date">
                                            <input name="appClose" id="datefield" type="date" value="<?php echo $data['appClose'];?>"> 
                                            <span class="normalB">Application Closing date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo $data['appCloseError']; ?></span>
                                    </div>
                                </div>
                                <div class="textArea" id="notes" style="margin-top: 1rem;">
                                    <span class="normalB">Additional Notes</span>
                                    <div class="text-box" id="">
                                        <textarea name="addNotes" onInput="handleInput(event)" rows="3" placeholder="Max 250 characters" maxlength="250"><?php echo $data['addNotes']; ?></textarea> 
                                    </div>
                                    <span class="invalidInput"><?php echo ''; ?></span>
                                </div> 
                            </div>
                        </div>

                        <div>
                            <p class="grey normalB">Upload a clear image as the cover photo for your project page.</p>
                            <input type="file" accept="image/*" id="vol-image" name="vol-image">
                        </div>
                    </div>

                    <div class="prj-form-nav">
                        <a href="<?php echo URL_ROOT.'/OrgDashboards/dashboard'; ?>" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a onClick="showProjectDetails()">&laquo;</a>
                            <a onClick="showProjectCause()">1</a>
                            <a onClick="showProjectDetails()">2</a>
                            <a href="#" class="active">3</a>
                            <a onClick="showFunding()">4</a>
                            <a onClick="showFundingNext()">&raquo;</a>
                        </div>
                        <a id="prj-fund-next-btn" onClick="showFundingNext()" class="blue-btn">Next</a>
                    </div>
                </div>

                <!-- Project Funding Form -->    
                <div class="form-sec card2" id="prj-funds">
                    <h2 class="grey subtitleB">Project Funding</h2>
                    <hr>

                    <div id="fund-form">
                        <div class="bool" style="margin-bottom: 10px">
                            <p class="grey normalB">Would you like to raise funds for the project?</p>
                            <input type="radio" onClick="showFundsForm()" name="funding" value="Yes" id="funding" checked><label>Yes</label> 
                            <input type="radio" onClick="hideFundsForm()" name="funding" value="No" id="funding"><label>No</label> 
                        </div>

                        <div class="fund-inputs" id="fund-inputs">
                            <div class="textArea" style="margin-top: 1rem;">
                                <span class="normalB">What will the funds be used for?</span>
                                <div class="text-box" id="">
                                    <textarea rows="10" name="prjFundsFor"><?php echo $data['prjFundsFor']; ?></textarea> 
                                </div>
                                <span class="invalidInput"><?php echo $data['prjFundsForError']; ?></span>
                            </div>
                            <div class="fund-inputs-bottom">
                                <div class="fund-inputs-bottom-col">
                                    <div class="inputBx2" id="">
                                        <input name="targetAmount" id="title" type="number" required="required" value="<?php echo $data['targetAmount']; ?>">
                                        <span class="normalB">Target Amount (LKR)</span>
                                    </div>
                                    <span class="invalidInput"><?php echo $data['targetAmountError']; ?></span>
                                </div>
                            </div>
                            <div>
                                <p class="grey normalB">Upload a clear image as the cover photo for your project page.</p>
                                <input type="file" accept="image/*" id="fund-image" name="fund-image">
                                <p class="purple normalB" style="margin-top: 10px">Note: Raised funds will be transferred to the bank account specified in your profile</p>
                            </div>
                        </div>

                        
                    </div>
                    

                    <div class="prj-form-nav">
                        <a href="<?php echo URL_ROOT.'/OrgDashboards/dashboard'; ?>" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a onClick="showVolunteering()">&laquo;</a>
                            <a onClick="showProjectCause()">1</a>
                            <a onClick="showProjectDetails()">2</a>
                            <a onClick="showVolunteering()">3</a>
                            <a href="#" class="active">4</a>
                            <a href="#" style="pointer-events: none">&raquo;</a>
                        </div>
                        <input type="submit" class="purple-btn" value="Submit">
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
