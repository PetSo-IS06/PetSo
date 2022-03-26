<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Adoption Application</title>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/adoptionForm.css'/>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css'/>
</head>

<body>
  
<div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
        </div>  
            <center>
            <h2>Adoption Application</h2>
            <hr width="18%"> </center><br>

    <div class="row">
        <div class="column1">
        <?php

                $image_url = '';
                if(!empty($data['animal_profile']->image))
            
                {
                             $image = $data['animal_profile']->image;
                                $image_url = URL_ROOT."/public/$image";
                } 
         ?>

           <center> <img src="<?php echo $image_url ?> ">
            <h2><?php echo $data['animal_profile']->name ?></h2>
            <p><?php echo $data['animal_profile']->age ?></p></center>
        </div>
        <form action="<?php echo URL_ROOT; ?>/Adoptions/adoptionApplication" method="POST" enctype="multipart/form-data">
        <div class="column2">
        
            <div class="inputBx2" id="">
                            <input name="fullname" id="fullname" type="text" value="<?php echo $data['fullname']; ?>">
                            <span class="normalB">Full Name</span>
                        </div>
                        <span class="invalidInput"><?php echo $data['fullnameError']; ?></span>

                        <div class="textArea">
                        <span class="normalB">Address</span>
                        <div class="text-box" id="">
                            <textarea rows="3" name="address"><?php echo $data['address']; ?></textarea> 
                        </div>
                        <span class="invalidInput"><?php echo $data['addressError'];; ?></span>
                    </div>
            
          
            <div class="inputBx2" id="">
                            <input name="mobileNo" id="mobileNo" type="text" value="<?php echo $data['mobileNo']; ?>">
                            <span class="normalB">Mobile Number</span>
                        </div>
                        <span class="invalidInput"><?php echo $data['mobileNoError']; ?></span><br>

            
  
                        <span class="normalB grey">Requirements</span> <br><br>
                            
                            <?php  echo $data['animal_profile']->requirements ?>
                    <br><br>
            <input type="checkbox" id="Requirements">  I confirm that I am eligible for this Adoption <br><br>
            <button type="submit" name = "submit" class="purple-btn">Apply </a>
        </div>
     </div>
  <br><br><br>

    <div id="footer">
        <?php
            require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>

</body>

</html>