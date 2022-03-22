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
            <img src="<?php echo URL_ROOT; ?>/public/assets/img/welfare_img/image 3.png" width="100px" height="100px" border-radius="50px">
          </div>
            <div class="col2">
            <div class="subtitleB grey"> Sterilizing 50 Stray dogs </div> 
          <div class="normal grey"> Charley's Home by "Save a Paw" </div> 
           </div>
          <div class="col3">
          <div class="heading1B grey" >16 days 14 hours Left </div> <br> 
           <div class="heading2 grey">for Project Initiation </div> 
          </div>
       </div>
      <br>

      <!-- story -->
   

    <div class="subtitleB grey"> Story </div> 
    <hr> <br>

    <div class="container">
        <div class="col1">
        <div class="normalB"> Title: </div> <div class='normal'> <?php echo $data['project']->title ?>  </div>
        <br>
        <div class="normalB x"> Description:</div> <div class='normal'> <?php echo $data['project']->description ?> </div> <br>
        <div class="normalB"> Cause: </div> <div class='normal'> <?php echo $data['project']->cause ?> </div> <br>
        <div class="normalB"> Initiation Date: </div> <div class='normal'> <?php echo $data['project']->initiation_date ?> </div><br>
        <div class="normalB"> Run by: </div><div class='normal'> <?php echo $data['project']->org_name ?> </div><br>
        </div>

            <div class="col2">     
            <img src="<?php 
            $img_name = $data['project']->image;
            $img_url = URL_ROOT."/public/$img_name";
            
            
            echo $img_url ?>" width="350px" height="200px" border-radius="20px">
           </div>
     </div>
    <br>
    
    <!-- volunteering -->


    <?php
    if($data['project']->volunteering=="True"){
        $volunteer=$data['volunteer_opportunity'];
        $img_url = URL_ROOT."/public/$volunteer->image";
        echo" 
            
    <div class='subtitleB grey'> About Volunteering </div> 
    <hr><br>
    <div class='container'>
    <div class='col1'>
        <div class='normalB max_height'> Description: </div> <div class='normal'> $volunteer->description  </div> <br>
        <div class='normalB'> Application opening Date: </div> <div class='normal'>  $volunteer->app_open  </div><br>
        <div class='normalB'> Application Closing Date:  </div> <div class='normal'> $volunteer->app_close </div> <br>
        <div class='normalB'> <u> Work </u> </div> <br>
        <div class='normalB'> Location :     $volunteer->district  </div><br>
        <div class='normalB'> Work From:    $volunteer->work_from </div> <br>
        <div class='normalB'> Work End:    $volunteer->work_end  </div> <br>
        <div class='normalB'> Work Days:     $volunteer->days  </div> <br>
        <div class='normalB'> Start Date:     $volunteer->work_start </div> <br>
        <div class='normalB'> End Date:    $volunteer->work_end  </div><br>
        <div class='normalB'> <u> * Requirements </u> </div> 
        $volunteer->requirements <br> <br>
        <div class='normalB'> <u> *Additional Details </u> </div> 
        $volunteer->add_note 
    </div> 

      <div class='col2'>
            <img src='$img_url' width='350px' height='200px' border-radius='20px'> <br>

      <div class='container'>
      <div class='col1'>
        <div class='subtitleB grey'> Vacancies Left </div>
        <center><div class='subtitleB grey'> 20 </div> </center>
       </div>
        <div class='col2'>
        <div class='subtitleB grey'> People Applied </div>
        <div class='subtitleB grey'> 100 </div> 
      </div> 
    </div> <br> <center>
       <a href= '' class='purple-btn v-btn_width'>volunteer Now </a> </center>
   </div>
</div> "; }?>


       <br> 

       <!-- fundraising -->
     
       <?php
       if($data['project']->fundraising=="True"){
           $fundraiser= $data['fundraiser'];
           echo"
       <div class='containter'>
        <div class='colum1'>
            <div class='subtitleB grey'> About the funds </div> <hr>  <br> 
            <div class='normalB max_height'> Description: </div> <div class='normal'> $fundraiser->funds_for  </div><br>
            <div class='normalB'> Fundraising start date:  $fundraiser->funding_start  </div><br>
            <div class='normalB'> Fundraising end date:  $fundraiser->funding_end </div><br>
        </div> <br>

        <div class='flexcontainer'>
        <div class='donate_col1'> 
        <div class='normalB'> Total Needed </div>
        <div class='normalB'> Rs 100000 </div>
        </div>
        
        <div class='donate_col2'> 
        <div class='normalB'> Total Raised </div> 
        <div class='normalB'> Rs 25000 </div>
        </div>
      
        <div class='donate_col3'>
        <div class='normalB'> Remaining </div> 
        <div class='normalB'> 75000 </div>
        </div>
        </div>
     <center><a href='' class='blue-btn d-btn_width'>Donate Now </a> </center>
    
        <div class='colum2'>
         <div class='subtitleB grey'> Donors </div> <hr><br>
         <div class='normal'>John doe </div><br>
         <div class='normalB'> 2000lkr </div>
         <hr width='25%'><br>
         <div class='normal'>sarah </div><br>
         <div class='normalB'> 12000lkr </div>
         <hr width='25%'>   
        </div>
    </div>
</div>";}?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <div id="footer">
        <?php
            require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>

</body>
    </head>
    </html>


   