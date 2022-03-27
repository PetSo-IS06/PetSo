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
<<<<<<< HEAD
<div class="subtitleB purple" > <?php echo $data['vol_opportunity']->app_close ?> </div></div>   

 </center>

 <form action="<?php echo URL_ROOT; ?>/Projects/volunteerApplication" method="POST" enctype="multipart/form-data">
=======
<div class="subtitleB purple" > 31st march 2022 </div></div>   

 </center>
>>>>>>> 7596dfa (volunteer form)
 
    <div class="form-sec card2">
    <div class="row">
    <div class="column1">
<<<<<<< HEAD
        <label class="normalB grey">Full name</label><br>
            <input type="text" placeholder="Full Name" id="applicant_name" name="applicant_name" value="<?php echo $data['applicant_name']; ?>"><br><br>
            <span class="invalidInput"><?php echo $data['applicant_nameError']; ?></span> <br>


            <div class="textArea">
                        <span class="normalB">Address</span>
                        <div class="text-box a" id="">
                            <textarea rows="3" name="address"><?php echo $data['address']; ?></textarea> 
                        </div>
                        <span class="invalidInput"><?php echo $data['addressError'];; ?></span>
                    </div>
          

<!-- 
            <div class="div dropcon">
                <label class="drop-lable normalB grey">Select District</label> <br>
                <select name="drop" id=" ">
=======
        <label>Full name</label><br>
            <input type="text" placeholder="Full Name" id="fname" name="fullname"><br><br>
    
          <label>Address</label><br>
            <input type="text" placeholder="Street 1" id="fname" name="address"><br>
            <input type="text" placeholder="Street 2" id="lname" name="address"> <br><br>

            <div class="div dropcon">
                <label class="drop-lable">Select Ditrict</label> <br>
                <select name="drop" id="">
>>>>>>> 7596dfa (volunteer form)
                    <option value="colombo">Colombo</option>
                    <option value="kandy">Kandy</option>
                </select>
            </div>
            <div class="div dropcon">
<<<<<<< HEAD
                <label class="drop-lable normalB grey">Select Area</label> <br>
                <select name=" drop " id="">
                    <option value="colombo">Eravur</option>
                    <option value="kandy">wellawatte</option>
                </select>
            </div> <br> -->

            <label class="normalB grey">Mobile Number</label><br>
            <input type="text" placeholder="Mobile Number" id="mobile" name="mobile" value="<?php echo $data['mobile']; ?>"><br><br>
            <span class="invalidInput"><?php echo $data['mobileError']; ?></span><br>

            <label class="normalB grey">Occupation</label><br>
            <input type="text" placeholder="Occupation" id="occupation" name="occupation" value="<?php echo $data['occupation']; ?>"><br>
            <span class="invalidInput"><?php echo $data['occupationError']; ?></span>
=======
                <label class="drop-lable">Select Area</label> <br>
                <select name=" drop " id=" ">
                    <option value="colombo">Eravur</option>
                    <option value="kandy">wellawatte</option>
                </select>
            </div> <br>

            <label>Occupation</label><br>
            <input type="text" placeholder="Occupation" id="fname" name="occupation"><br>

>>>>>>> 7596dfa (volunteer form)
   </div>
   <div class="col2"> </div>
   
   <div class="col3">
<<<<<<< HEAD
            <label class="normalB grey">Date of Birth</label><br>
            <input type="date" placeholder="DD/MM/YY" id="dob" name="dob" value="<?php echo $data['dob']; ?>"> <br><br>
            <span class="invalidInput"><?php echo $data['dobError']; ?></span><br>
           
           
            <label class="normalB grey">NIC/Passport</label><br>
            <input type="text" placeholder="NIC/Passport" id="nic" name="nic" value="<?php echo $data['nic']; ?>"> <br><br>
            <span class="invalidInput"><?php echo $data['nicError']; ?></span><br>
            
            
           
           
            <label class="normalB grey">Email Address</label><br>
            <input type="text" placeholder="Email Address" id="email" name="email" value="<?php echo $data['email']; ?>"><br><br>
            <span class="invalidInput"><?php echo $data['emailError']; ?></span><br>
   
        </div>
=======
            <label>Date of Birth</label><br>
            <input type="date" placeholder="DD/MM/YY" id="title" name="dob"><br><br>
            <label>NIC/Passport</label><br>
            <input type="text" placeholder="NIC/Passport" id="lname" name="nic"> <br><br>
            <label>Mobile Number</label><br>
            <input type="text" placeholder="Mobile Number" id="lname" name="mobile"><br><br>
            <label>Email Address</label><br>
            <input type="text" placeholder="Email Address" id="lname" name="email"><br><br>
   </div>
>>>>>>> 7596dfa (volunteer form)

</div> <br><br>


     <div class="subtitleB grey">Previous Experiences</div>
     <hr><br><nr>
     <div class="normal">Briefly Explain your Previous volunteering Experience (if any)</div><br>
     <div class="row">
         <div class="col1">
<<<<<<< HEAD
         <label class="normalB grey">Event/Project</label><br>
            <input type="text" placeholder="Event/project" id="lname" name="event" value="<?php echo $data['event']; ?>">
        </div>
         <div class="col1">
         <label class="normalB grey">Organizers</label><br>
            <input type="text" placeholder="Organizers" id="lname" name="organizer" value="<?php echo $data['organizer']; ?>">
          </div>
         <div class="col1">
         <label class="normalB grey">Type of Work</label><br>
            <input type="text" placeholder="Work Type" id="lname" name="worktype" value="<?php echo $data['worktype']; ?>">
        </div>
     </div>
    <br><br>
=======
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
>>>>>>> 7596dfa (volunteer form)

     <input type="checkbox" width="15%" height="15%"> I am fully aware of the requirements mentioned above for this opportunity and confirm that I possess them. 

     <br><br>
               
<<<<<<< HEAD
               <div class="vol-form-nav">
               <a href="" class="grey-btn">Cancel</a>
               <button class="purple-btn" type="submit">Apply</button>
=======
               <div class="prj-form-nav">
               <a href="" class="grey-btn">Cancel</a>
               <a href="" class="purple-btn">Apply</a>
>>>>>>> 7596dfa (volunteer form)
              </div>
     </div>
    </div>
    </div>  
<<<<<<< HEAD
</div>
=======
>>>>>>> 7596dfa (volunteer form)

    <div id="footer">
            <?php
            require APP_ROOT . '/views/components/footer.php';
            ?>
        </div>
</body>
</html>