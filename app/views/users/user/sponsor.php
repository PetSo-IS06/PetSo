<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/sponsor.css">
    <title><?php echo SITE_NAME; ?> | Sponsor Anima</title>
</head>
<body>
<div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
</div>

<div id="body" class="pg-body">
<form action="<?php echo URL_ROOT; ?>/Adoptions/adoptionApplication" method="POST" enctype="multipart/form-data">
<div class="container">
          <div class="column"><center> <br><br> <br><br>
               <img src="data:image/jpeg;base64,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"
                style="width:200px">
                <div class="subtitleB grey">Scooby</div>
            <h4>Male</h4>
            <p>2years</p> </center>

          </div>
          <div class="column">
              <div class="card2"> <center>
                <div class="subtitleB grey">Sponsor for Scoby</div><br>
                <div class ="normalB purple"> Monthly : LKR 1500 </div> </center>

                <div class="inputBx2">
                <label class="normal grey">Sponsor From</label> 
    
                <input type="date" placeholder="DD/MM/YY" value="<?php echo $data['start_date']; ?>">
                </div>
                <div class="inputBx2">
                <label class="normal grey">Sponsor Until</label>
                 <input type="date" placeholder="DD/MM/YY" value="<?php echo $data['end_date']; ?>">
                </div>
                <br>
                <br>
                <div class="normal purple">Total Ammount(LKR) : 19000</div><br><br>
                <button type="submit" name="submit" class="blue-btn">Proceed to pay</button>
              </div>
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
