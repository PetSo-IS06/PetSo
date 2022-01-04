<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Welfare Project Header</title>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/ProjectView.css'/>
</head>
<body>
    <div class="row">
        <div class="column" style="background-color:white;"> <br>
            <center> <br>
         <h2>Looking For Funds</h2> <br><br>
       <P> <b>150LKR </b> raised of 500K </P> <br><br>
       <div class="slidecontainer" >
        <input type="range" min="1" max="500" value="150" >
               </div>      
         <br>
        <p>Check donation section below for more details </p> <br> <br> 
         <button type="submit" class="btn"> Donate Now </button>
        </center>
        </div>
        <div class="column" style="background-color :white;">
        <img src="<?php echo URL_ROOT; ?>/public/assets/img/welfare_img/strayDog.png" width="400px" height="300px">
        </div> <br><br>
        <div class="column" style="background-color:white;"> 
            <center>
            <h2>Volunteers Needed</h2> <br>
            <h1>20</h1> <br>
            Vacancies Left <br>
           <p> Check volunteer section below for more details </p> <br>
            <p>30 have applied already </p> <br> <br>
            <button type="button" class="button"> Volunteer Now </button>
        </center>
        </div>
        </div>
           
    <center>
        <div class= "Project_box">
            <div class ="project">
            <img src="<?php echo URL_ROOT; ?>/public/assets/img/welfare_img/image 3.png" width="100px" height="100px" border-radius="50px"><br>
            <b> Project Title : </b>  <?php echo $data->title?><br> <br>
            <b> Initiation date : </b> <?php echo $data->initiation_date?><br><br>
            <b> Description : </b> <?php echo $data->description?> <br>
</div>
</div>
</center>
</body>