<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Profile Request</title>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/Orgdetail.css'/> 
    </head>
    <body> <center>
        <h2> Organization Request Details</h2>
        <div class="row"> <center>
            <div class="column">
                <b>Organization Name</b><br>
                <?php echo $data->org_name?>
            </div>
            <div class="column">
                
               <b> Address</b> <br>
               <?php echo $data->org_address1?>
            </div>
            <div class="column">
               
            <b>Contact Numbers </b> <br>
            <?php echo $data->org_mobile?>
            </div>
            <div class="column">
                 <b> District </b><br>
                 <?php echo $data->org_district?>
            </div> 
            <div class="column">
               <b> Area </b><br>
               <?php echo $data->org_area?>
          </div> 
        
        </center>
            </div>
            <div class="row"> <center>
                <div class="column">
                <b> Caring Animals </b><br>
                
                </div>
                <div class="column">
                
                   <b> Respond Near By Location </b> <br>
                    <label>
                        Yes or no?<br>
                        <select>
                         <option value="">Yes</option>
                          <option value="">No</option>
                        </select>
                      </label>
                </div>
                <div class="column">
                    <b>Email Address </b> <br>
                    <?php echo $data->org_email?>
                </div>
                <div class="column">
                   <b> Website Link </b><br>
                   <?php echo $data->org_website?>

                </div>
                <div class="column">
                  <b> Facebook Page Link </b><br>
                  <?php echo $data->org_facebook?>

                </div>
             </center>
                </div>
                <div class="row">
                    <div class="column">
                       <b> Instagram ID </b><br>
                       <?php echo $data->org_insta?>
                    </div>
                    <div class="column">
                        <b> Supporting Documents </b> 
                     </div>
                </div> <br>
                
    </body>
</html>
