<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/create-project.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/components/select-box.css">
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/set-min-date.js"></script>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/textarea-bullets.js"></script>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/create-project.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Home</title>
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
                        <a href="" class="yellow-btn">Get Started</a>
                    </div>
                </div>
            </div>
            <form action="" method="POST" class="prj-form">
                <h2 class="purple heading2B center">Let’s create your next welfare project at Petso!</h2>
                
                <!-- Project Cause Form -->    
                <div class="form-sec card2" id="prj-cause">
                        <h2 class="grey subtitleB">Cause of the Welfare Project</h2>
                        <hr>
                        <div class="instr">
                            <p class="grey normal">Submit all the necessary details regarding your next project and raise funds, and/or enroll volunteers you need. Note that your project will only be published once approved by the system admin.</p>
                            <p class="purple"><b>Note:</b> You can only have <b>3 ongoing projects</b> maximum at a time.</p>
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
                                    <input class="s-c top" type="radio" name="cause" value="Stray animal sterilization">
                                    <input class="s-c bottom" type="radio" name="cause" value="Stray animal sterilization">
                                    <span class="label">Stray animal sterilization</span>
                                    <span class="opt-val">Stray animal sterilization</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="cause" value="Environment Cleaning">
                                    <input class="s-c bottom" type="radio" name="cause" value="Environment Cleaning">
                                    <span class="label">Environment Cleaning</span>
                                    <span class="opt-val">Environment Cleaning</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="cause" value="Animal rescue">
                                    <input class="s-c bottom" type="radio" name="cause" value="Animal rescue">
                                    <span class="label">Animal rescue</span>
                                    <span class="opt-val">Animal rescue</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="cause" value="Other">
                                    <input class="s-c bottom" type="radio" name="cause" value="Other">
                                    <span class="label">Other</span>
                                    <span class="opt-val">Other</span>
                                </div>
                            </div>
                        </div>
                        <div class="inputBx2" id="">
                            <input name="cause" id="cause" type="text">
                            <span class="normalB">Other</span>
                        </div>
                        <span class="invalidInput"><?php echo '' ?></span>

                        <div class="prj-form-nav">
                            <a href="<?php echo URL_ROOT; ?>/pages/index" class="grey-btn">Cancel</a>
                            <div class="pagination">
                                <a style="pointer-events: none">&laquo;</a>
                                <a href="#" class="active">1</a>
                                <a onClick="showProjectDetails()">2</a>
                                <a onClick="showVolunteering()">3</a>
                                <a onClick="showFunding()">4</a>
                                <a onClick="showBankInfo()">5</a>
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
                        <input name="title" id="title" type="text" required="required">
                        <span class="normalB">Project Title</span>
                    </div>
                    <span class="invalidInput"><?php echo '' ?></span>

                    <div class="inputBx2" id="">
                        <input name="initDate" id="datefield" type="date" required="required" min='1899-01-01' max='2000-13-13'> 
                        <span class="normalB">Initiation date</span>
                    </div>
                    <span class="invalidInput"><?php echo '' ?></span>

                    <div class="textArea">
                        <span class="normalB">Project description</span>
                        <div class="text-box" id="">
                            <textarea rows="10" name="prjDescription"></textarea> 
                        </div>
                        <span class="invalidInput"><?php echo '' ?></span>
                    </div> 

                    <div>
                        <p class="grey normalB">Upload a clear image as the cover photo for your project page.</p>
                        <input type="file" id="myFile" name="filename">
                    </div>

                    <div class="prj-form-nav">
                        <a href="<?php echo URL_ROOT; ?>/pages/index" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a onClick="showProjectCause()">&laquo;</a>
                            <a onClick="showProjectCause()">1</a>
                            <a href="#" class="active">2</a>
                            <a onClick="showVolunteering()">3</a>
                            <a onClick="showFunding()">4</a>
                            <a onClick="showBankInfo()">5</a>
                            <a onClick="showVolunteeringNext()">&raquo;</a>
                        </div>
                        <a id="prj-vol-next-btn" onClick="showVolunteeringNext()" class="blue-btn">Next</a>
                    </div>
                </div>

                <!-- Volunteer Enrollment Form -->    
                <div class="form-sec card2" id="prj-vol">
                    <h2 class="grey subtitleB">Volunteer Enrollment</h2>
                    <hr>

                    <div class="vol-bool">
                        <p class="grey normalB">Would you like to enroll volunteers for the project?</p>
                        <input type="radio" name="volunteering" value="Yes" id="isVolunteering"> Yes &nbsp;
                        <input type="radio" name="volunteering" value="No" id="noVolunteering"> No
                    </div>

                    <div id="vol-form">
                        <div class="textArea">
                            <span class="normalB">Why should people volunteer for this project?</span>
                            <div class="text-box" id="">
                                <textarea rows="10" name="volReason"></textarea>
                            </div>
                            <span class="invalidInput"><?php echo '' ?></span>
                        </div> 

                        <div class="textArea">
                            <span class="normalB">Work Description</span>
                            <div class="text-box" id="">
                                <textarea rows="10" name="volDescription"></textarea>
                            </div>
                            <span class="invalidInput"><?php echo '' ?></span>
                        </div> 

                        <div class="vol-inputs">
                            <div class="vol-inputs-col">
                                <div class="row-title">
                                    <label class="grey normalB">Location</label>
                                </div>
                                <div class="vol-inputs-col-row">
                                    <div class="selectBx" id="selectBx">
                                        <input type="checkbox" id="options-view-button" name="selectbox">
                                        <div id="select-button">
                                            <div id="selected-value">
                                                <span class="normalB">District*</span>
                                            </div>
                                            <div id="chevrons">
                                                <i class="fas fa-chevron-down dropdown-arrow"></i>
                                            </div>
                                        </div>
                                        <div id="options">
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="district" value="Kandy">
                                                <input class="s-c bottom" type="radio" name="district" value="Kandy">
                                                <span class="label">Kandy</span>
                                                <span class="opt-val">Kandy</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="district" value="Colombo">
                                                <input class="s-c bottom" type="radio" name="district" value="Colombo">
                                                <span class="label">Colombo</span>
                                                <span class="opt-val">Colombo</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="district" value="Galle">
                                                <input class="s-c bottom" type="radio" name="district" value="Galle">
                                                <span class="label">Galle</span>
                                                <span class="opt-val">Galle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectBx" id="selectBx">
                                        <input type="checkbox" id="options-view-button" name="selectbox">
                                        <div id="select-button">
                                            <div id="selected-value">
                                                <span class="normalB">Area*</span>
                                            </div>
                                            <div id="chevrons">
                                                <i class="fas fa-chevron-down dropdown-arrow"></i>
                                            </div>
                                        </div>
                                        <div id="options">
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="Area" value="Kandy">
                                                <input class="s-c bottom" type="radio" name="Area" value="Kandy">
                                                <span class="label">Kandy</span>
                                                <span class="opt-val">Kandy</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="Area" value="Colombo">
                                                <input class="s-c bottom" type="radio" name="Area" value="Colombo">
                                                <span class="label">Colombo</span>
                                                <span class="opt-val">Colombo</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="Area" value="Galle">
                                                <input class="s-c bottom" type="radio" name="Area" value="Galle">
                                                <span class="label">Galle</span>
                                                <span class="opt-val">Galle</span>
                                            </div>
                                        </div>
                                    </div>
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
                                                <input class="s-c top" type="radio" name="work-from" value="Not specified">
                                                <input class="s-c bottom" type="radio" name="work-from" value="Not specified">
                                                <span class="label">Not specified</span>
                                                <span class="opt-val">Not specified</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="work-from" value="8:00AM">
                                                <input class="s-c bottom" type="radio" name="work-from" value="8:00AM">
                                                <span class="label">8:00AM</span>
                                                <span class="opt-val">8:00AM</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="work-from" value="9:00AM">
                                                <input class="s-c bottom" type="radio" name="work-from" value="9:00AM">
                                                <span class="label">9:00AM</span>
                                                <span class="opt-val">9:00AM</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="work-from" value="10:00AM">
                                                <input class="s-c bottom" type="radio" name="work-from" value="10:00AM">
                                                <span class="label">10:00AM</span>
                                                <span class="opt-val">10:00AM</span>
                                            </div>
                                        </div>
                                    </div>
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
                                                <input class="s-c top" type="radio" name="work-to" value="Not specified">
                                                <input class="s-c bottom" type="radio" name="work-to" value="Not specified">
                                                <span class="label">Not specified</span>
                                                <span class="opt-val">Not specified</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="work-to" value="3:00PM">
                                                <input class="s-c bottom" type="radio" name="work-to" value="3:00PM">
                                                <span class="label">3:00PM</span>
                                                <span class="opt-val">3:00PM</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="work-to" value="4:00PM">
                                                <input class="s-c bottom" type="radio" name="work-to" value="4:00PM">
                                                <span class="label">4:00PM</span>
                                                <span class="opt-val">4:00PM</span>
                                            </div>
                                            <div class="option">
                                                <input class="s-c top" type="radio" name="work-to" value="5:00PM">
                                                <input class="s-c bottom" type="radio" name="work-to" value="5:00PM">
                                                <span class="label">5:00PM</span>
                                                <span class="opt-val">5:00PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="textArea">
                                    <span class="normalB">Requirements</span>
                                    <div class="text-box" id="requirements">
                                        <textarea name="volRequirements" onInput="handleInput(event)" rows="12"></textarea> 
                                    </div>
                                    <span class="invalidInput"><?php echo '' ?></span>
                                </div> 
                            </div>
                            <div class="vol-inputs-col">
                                <div class="vol-inputs-col-row">
                                    <div class="widen">
                                        <div class="inputBx2" id="date">
                                            <input name="work-start" id="datefield" type="date" required="required" min='1899-01-01' max='2000-13-13'> 
                                            <span class="normalB">Work Start date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo '' ?></span>
                                    </div>
                                    <div class="widen">
                                        <div class="inputBx2" id="date">
                                            <input name="work-end" id="datefield" type="date" required="required" min='1899-01-01' max='2000-13-13'> 
                                            <span class="normalB">Work End date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo '' ?></span>
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
                                </div>
                                <div class="vol-inputs-col-row">
                                    <div class="widen">
                                        <div class="inputBx2" id="date">
                                            <input name="app-open" id="datefield" type="date" required="required" min='1899-01-01' max='2000-13-13'> 
                                            <span class="normalB">Application Opening date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo '' ?></span>
                                    </div>
                                    <div class="widen">
                                        <div class="inputBx2" id="date">
                                            <input name="app-close" id="datefield" type="date" required="required" min='1899-01-01' max='2000-13-13'> 
                                            <span class="normalB">Application Closing date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo '' ?></span>
                                    </div>
                                </div>
                                <div class="textArea" id="notes">
                                    <span class="normalB">Additional Notes</span>
                                    <div class="text-box" id="">
                                        <textarea name="volRequirements" onInput="handleInput(event)" rows="5"></textarea> 
                                    </div>
                                    <span class="invalidInput"><?php echo '' ?></span>
                                </div> 
                            </div>
                        </div>

                        <div>
                            <p class="grey normalB">Upload a clear image as the cover photo for your project page.</p>
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </div>

                    <div class="prj-form-nav">
                        <a href="<?php echo URL_ROOT; ?>/pages/index" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a onClick="showProjectDetails()">&laquo;</a>
                            <a onClick="showProjectCause()">1</a>
                            <a onClick="showProjectDetails()">2</a>
                            <a href="#" class="active">3</a>
                            <a onClick="showFunding()">4</a>
                            <a onClick="showBankInfo()">5</a>
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
                        <div class="fund-bool">
                            <p class="grey normalB">Would you like to raise funds for the project?</p>
                            <input type="radio" name="funding" value="Yes" id="isFunding"> Yes &nbsp;
                            <input type="radio" name="funding" value="No" id="noFunding"> No
                        </div>

                        <div class="textArea">
                            <span class="normalB">What will the funds be used for?</span>
                            <div class="text-box" id="">
                                <textarea rows="10" name="prjFundsFor"></textarea> 
                            </div>
                            <span class="invalidInput"><?php echo '' ?></span>
                        </div>

                        <div class="fund-inputs">
                            <div class="fund-inputs-col">
                                <div class="inputBx2" id="">
                                    <input name="targetAmount" id="title" type="number" required="required">
                                    <span class="normalB">Target Amount (LKR)</span>
                                </div>
                                <span class="invalidInput"><?php echo '' ?></span>
                            </div>
                            <div class="fund-inputs-col">
                                <div class="fund-inputs-col-row">
                                    <div id="fund-date">
                                        <div class="inputBx2" id="date">
                                            <input name="work-start" id="datefield" type="date" required="required" min='1899-01-01' max='2000-13-13'> 
                                            <span class="normalB">Work Start date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo '' ?></span>
                                    </div>
                                    <div id="fund-date">
                                        <div class="inputBx2" id="date">
                                            <input name="work-end" id="datefield" type="date" required="required" min='1899-01-01' max='2000-13-13'> 
                                            <span class="normalB">Work End date</span>
                                        </div>
                                        <span class="invalidInput"><?php echo '' ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <p class="grey normalB">Upload a clear image as the cover photo for your project page.</p>
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </div>
                    

                    <div class="prj-form-nav">
                        <a href="<?php echo URL_ROOT; ?>/pages/index" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a onClick="showVolunteering()">&laquo;</a>
                            <a onClick="showProjectCause()">1</a>
                            <a onClick="showProjectDetails()">2</a>
                            <a onClick="showVolunteering()">3</a>
                            <a href="#" class="active">4</a>
                            <a onClick="showBankInfo()">5</a>
                            <a onClick="showBankNext()">&raquo;</a>
                        </div>
                        <a id="prj-bank-next-btn" onClick="showBankNext()" class="blue-btn">Next</a>
                    </div>
                </div>

                <!-- Bank account Details Form -->    
                <div class="form-sec card2" id="prj-bank">
                    <h2 class="grey subtitleB">Bank account Details</h2>
                    <hr>

                    <div class="fund-bool">
                        <p class="purple normalB">Please note that the account details you mention here will not be made visible to any other users and we only need it to transfer the collected funds after the completion of the fundraiser.</p>
                        <input type="radio" name="bankInfo" value="newAccount" id="newAccount"> Use a new bank account &nbsp;
                        <input type="radio" name="bankInfo" value="savedAccount" id="savedAccount"> Select account details in my profile
                    </div>

                    <div id="acnt-form">
                        <div class="acnt-inputs">
                            <div class="acnt-inputs-col">
                                <div id="">
                                    <div class="inputBx2" id="item">
                                        <input name="accountHolder" id="title" type="text" required="required">
                                        <span class="normalB">Account Holder’s Name</span>
                                    </div>
                                    <span class="invalidInput"><?php echo '' ?></span>
                                </div>
                                <div id="">
                                    <div class="inputBx2" id="item">
                                        <input name="bank" id="title" type="text" required="required">
                                        <span class="normalB">Bank Name</span>
                                    </div>
                                    <span class="invalidInput"><?php echo '' ?></span>
                                </div>
                                <div id="">
                                    <div class="inputBx2" id="item">
                                        <input name="branch" id="branch" type="text" required="required">
                                        <span class="normalB">Branch Name</span>
                                    </div>
                                    <span class="invalidInput"><?php echo '' ?></span>
                                </div>
                                <div id="">
                                    <div class="inputBx2" id="item">
                                        <input name="branchCode" id="branchCode" type="text" required="required">
                                        <span class="normalB">Branch code</span>
                                    </div>
                                    <span class="invalidInput"><?php echo '' ?></span>
                                </div>
                                <div id="">
                                    <div class="inputBx2" id="item">
                                        <input name="accountNo" id="accountNo" type="number" required="required">
                                        <span class="normalB">Account Number</span>
                                    </div>
                                    <span class="invalidInput"><?php echo '' ?></span>
                                </div>
                                <div class="save-acnt">
                                    <input type="checkbox" name="saveAccount" value="True">
                                    <label class="">Save account details to profile</label>
                                </div>
                            </div>
                            <div class="acnt-inputs-col">
                                <div class="acnt-card" id="">
                                    <h3 class="grey normalB">Commercial Bank, Thimbirigasyaya</h3>
                                    <p class="grey normal">Acc. No: 100825...</p>
                                </div>
                                <div class="acnt-card" id="">
                                    <h3 class="grey normalB">Commercial Bank, Thimbirigasyaya</h3>
                                    <p class="grey normal">Acc. No: 100825...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prj-form-nav">
                        <a href="<?php echo URL_ROOT; ?>/pages/index" class="grey-btn">Cancel</a>
                        <div class="pagination">
                            <a onClick="showFunding()">&laquo;</a>
                            <a onClick="showProjectCause()">1</a>
                            <a onClick="showProjectDetails()">2</a>
                            <a onClick="showVolunteering()">3</a>
                            <a onClick="showFunding()">4</a>
                            <a href="#" class="active">5</a>
                            <a href="#" style="pointer-events: none">&raquo;</a>
                        </div>
                        <input type="submit" class="purple-btn" value="Submit">
                        <!-- <a href="" class="purple-btn">Submit</a> -->
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
