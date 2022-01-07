<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Welfare Project Header</title>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/ProjectView.css'/>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css'/>
</head>
<body>
<div id="top-nav">
            <?php
            require APP_ROOT . '/views/components/topNavbar.php';
            ?>
        </div>
        <div id="body" class="pg-body">
    <div class="flexcontainer">
        <div class="columns"> <br>
            <center> <br>
         <div class="heading2B purple "> Looking For Funds </div> <br><br>
         <div class="normalB grey">150LKR raised of 500K </div>
         <div>

        <Input class="range" type="range" name "" value="150" min="150" max="500" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
    </div>
     
    <script type="text/javascript">
        function rangeSlide(value) {
            document.getElementById('rangeValue').innerHTML = value;
        }
    </script>
    
         <br>
         <div class="normal grey">Check donation section below for more details </div> <br> <br> <br>
        
         <a href= "" class="purple-btn">Donate now </a>
        </center>
        </div>
        <div class="columns" >
        <img src="<?php echo URL_ROOT; ?>/public/assets/img/welfare_img/strayDog.png" width="100%" height="350px">
        </div> 
        <div class="columns"> <center> <br><br>
            <div class="heading2B purple"> Volunteers Needed  </div>
          <div class="title grey"> 20 </div>
          <div class="subtitleB grey">Vacancies Left  </div>
          <div class="normal grey">Check volunteer section below for more details <br><br>
            30 have applied already </div> <br>
            <a href= "" class="yellow-btn">Volunteer Now </a>
        </center>
        </div>
        </div> <br>
        <div class="container">
        <div class="col1">
            <img src="<?php echo URL_ROOT; ?>/public/assets/img/welfare_img/image 3.png" width="100px" height="100px" border-radius="50px"> </div>
            <div class="col2">
            <div class="subtitleB grey"> Sterilizing 50 Stray dogs </div> 
          <div class="normal grey"> Charley's Home by "Save a Paw" </div> </div>
          <div class="col3">
          <div class="heading1B grey" >16 days 14 hours Left </div> <br> 
           <div class="heading2 grey">for Project Initiation </div> </div>
    </div>
    </div>
    <div id="footer">
        <?php
            require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>

</body>
    </head>
    </html>
