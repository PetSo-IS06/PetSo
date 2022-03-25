<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/volunteerApplication.css">
    <title><?php echo SITE_NAME; ?> | Volunteer Application</title>
</head>
<body>
<div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
</div>

<div id="body" class="pg-body">
<center>
<div class="heading1B purple">Volunteer Application</div>
<div class="card2 subtitleB ">Applications close on <br>
<div class="subtitleB purple" > 31st march 2022 </div></div>   

 </center>
 
    <div class="form-sec card2">
    <div class="row">
    <div class="column1">
        <label>Full name</label><br>
            <input type="text" placeholder="Full Name" id="fname" name="fullname"><br><br>
    
          <label>Address</label><br>
            <input type="text" placeholder="Street 1" id="fname" name="address"><br>
            <input type="text" placeholder="Street 2" id="lname" name="address"> <br><br>

            <div class="div dropcon">
                <label class="drop-lable">Select Ditrict</label> <br>
                <select name="drop" id="">
                    <option value="colombo">Colombo</option>
                    <option value="kandy">Kandy</option>
                </select>
            </div>
            <div class="div dropcon">
                <label class="drop-lable">Select Area</label> <br>
                <select name=" drop " id=" ">
                    <option value="colombo">Eravur</option>
                    <option value="kandy">wellawatte</option>
                </select>
            </div> <br>

            <label>Occupation</label><br>
            <input type="text" placeholder="Occupation" id="fname" name="occupation"><br>

   </div>
   <div class="col2"> </div>
   
   <div class="col3">
            <label>Date of Birth</label><br>
            <input type="date" placeholder="DD/MM/YY" id="title" name="dob"><br><br>
            <label>NIC/Passport</label><br>
            <input type="text" placeholder="NIC/Passport" id="lname" name="nic"> <br><br>
            <label>Mobile Number</label><br>
            <input type="text" placeholder="Mobile Number" id="lname" name="mobile"><br><br>
            <label>Email Address</label><br>
            <input type="text" placeholder="Email Address" id="lname" name="email"><br><br>
   </div>

</div> <br><br>


     <div class="subtitleB grey">Previous Experiences</div>
     <hr><br><nr>
     <div class="normal">Briefly Explain your Previous volunteering Experience (if any)</div><br>
     <div class="row">
         <div class="col1">
         <label>Event/Project</label><br>
            <input type="text" placeholder="Event/project" id="lname" name="event">
         </div>
         <div class="col1">
         <label>Organizers</label><br>
            <input type="text" placeholder="Organizers" id="lname" name="organizer">
          </div>
         <div class="col1">
         <label>Type of Work</label><br>
            <input type="text" placeholder="Work Type" id="lname" name="worktype">
        </div>
     </div>
    <br>

     <input type="checkbox" width="15%" height="15%"> I am fully aware of the requirements mentioned above for this opportunity and confirm that I possess them. 

     <br><br>
               
               <div class="prj-form-nav">
               <a href="" class="grey-btn">Cancel</a>
               <a href="" class="purple-btn">Apply</a>
              </div>
     </div>
    </div>
    </div>  

    <div id="footer">
            <?php
            require APP_ROOT . '/views/components/footer.php';
            ?>
        </div>
</body>
</html>