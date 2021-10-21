<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/create-volunteer-opportunity.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <div id="top-nav">
        <?php
            require APP_ROOT . '/views/components/topNavbar.php';
        ?>
    </div>
    <img src="<?php echo URL_ROOT; ?>/public/assets/img/createProjectHeader.svg" alt="" style="width: 100%;">
    <img src="<?php echo URL_ROOT; ?>/public/assets/img/projectInstructions.svg" alt="" style="width: 100%;">
    <div class="prj-form-container">
        <h2 class="form-title">Volunteer Enrollment</h2>
        <hr/>
        <form action="<?php echo URL_ROOT . '/Projects/createVolunteerOpportunity'; ?>" method="POST" id='volForm'>
            <div class="form-row">
                <div class="form-input">
                    <label class="input-label">Would you like to enroll volunteers for the project?</label><br/>
                    <input name="volunteers" value="yes" type="radio" checked> Yes &nbsp;
                    <input name="volunteers" value="no" type="radio"> No
                </div>
                <div class="form-input">
                    <label class="input-label">Why should people volunteer for this project?</label><br/>
                    <textarea class="input-box-area" rows="4" cols="50" name="reason" form="volForm"></textarea>
                </div>
                <div class="form-input">
                    <label class="input-label">Work Description</label><br/>
                    <textarea class="input-box-area" rows="4" cols="50" name="description" form="volForm"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-input" id="col">
                        <div class="form-input-col">
                            <label class="input-label">Location</label>
                            <input class="input-box" name="district" type="text" placeholder="District"> 
                        </div>
                        <div class="form-input-col">
                            <label class="input-label" style="margin-top:1rem;"></label>
                            <input class="input-box" name="area" type="text" placeholder="Area"> 
                        </div>
                        <div class="form-input-col">
                            <label class="input-label">Work Start Date</label>
                            <input class="input-box" name="work-start" type="date"> 
                        </div>
                        <div class="form-input-col">
                            <label class="input-label">Work End Date</label>
                            <input class="input-box" name="work-end" type="date"> 
                        </div>
                    </div>
                    <div class="form-input" id="col">
                        <div class="form-input-col">
                            <label class="input-label">Work Hours</label>
                            <input class="input-box" name="work-from" type="text" placeholder="From"> 
                        </div>
                        <div class="form-input-col">
                            <label class="input-label" style="margin-top:1rem;"></label>
                            <input class="input-box" name="work-to" type="text" placeholder="To"> 
                        </div>
                        <div class="form-input-col">
                            <label class="input-label">Work Days</label>
                            <input class="input-box" style="width: 410px" name="days" type="text"> 
                        </div>
                    </div>
                </div>
                <div class="form-row" style="flex-direction: row; justify-content: space-between">
                    <div class="form-input">
                        <label class="input-label">Requirements</label><br/>
                        <textarea class="input-box-area" style="width: 480px; margin-right: 2rem" rows="4" cols="50" name="requirements" form="volForm"></textarea>
                    </div>
                    <div class="form-input" style="width: 100%; margin-left: 2rem;">
                        <div class="form-input-col" id="col">
                            <label class="input-label">Application Opening Date</label>
                            <input class="input-box" name="app-open" type="date"> 
                        </div>
                        <div class="form-input-col">
                            <label class="input-label">Application Closing Date</label>
                            <input class="input-box" name="app-close" type="date"> 
                        </div>
                    </div>
                </div>
                <div class="form-row" style="flex-direction:row; justify-content: space-between;">
                <a href="<?php echo URL_ROOT;?>/pages/index" class="form-btn-cancel">Cancel</a>
                <input id="submit" type="submit" value="Submit">
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