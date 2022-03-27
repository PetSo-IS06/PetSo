<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/inquries.css">
    <title><?php echo SITE_NAME; ?> | Make Complaint</title>
</head>
<body>
<div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
</div>


<div id="body" class="pg-body"> <center>
    <div class ="subtitleB grey">Make a complain</div><br> </center>
    <form action="<?php echo URL_ROOT; ?>/complaints/complaint" method="POST" enctype="multipart/form-data">
    <div class="card2">
      <div class="container">
          <div class="column">
         <center> <span style='font-size:150px;'>&#128533;</span><br><br><br>
                <div class="normalB grey">We’re sad to hear that you experienced <br>an issue in this platform</div> </center>
          </div>
          <div class="v"></div> <br><br>
          <div class="column">
              
                  <div class="normalB grey">
                  Please let us know here about your issue and  we’ll address ASAP!
                  </div> <br><br>

                  <div class="inputBx2" id="">
                            <input name="subject" id="subject" type="text" value="<?php echo $data['subject']; ?>">
                            <span class="normalB">Subject</span>
                        </div>
                        <span class="invalidInput"><?php echo $data['subjectError']; ?></span>
                        <br>
                        <div class="textArea">
                        <span class="normalB">Description</span>
                        <div class="text-box" id="">
                            <textarea rows="5" name="description"><?php echo $data['description']; ?></textarea> 
                        </div>  
                        <span class="invalidInput"><?php echo $data['descriptionError'];; ?></span>       
                    </div> <br><br>

                <div class="com-form-nav">

                <a href="<?php echo URL_ROOT;?>" class="grey-btn">Cancel</a>
                <a href="" class="grey-btn">Cancel</a>

                <a href="<?php echo URL_ROOT;?>" class="grey-btn">Cancel</a>

                <button class="purple-btn" type="submit">Submit</button>
                </div>
              
          </div>
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
