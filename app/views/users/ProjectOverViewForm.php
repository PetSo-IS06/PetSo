<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <title>Project over view Form</title>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/ProjectOverview.css'/>
    </head>
    <body> <center>
 <hr> </hr>
 <div class = "row"> <br><br>
     <h1> What's your next welfare project </h1> <br> 
   <p> Get all the support you need for your next project right here at Petso.<br>
      Whether it’s the fund or the workforce, let us help you get all you need.</p>
</div> </center> <br> <br>
            <h4>Please read the following instruction carefully before filling the form</h4> <br>
            <ul>
                <li>In order to publish a welfare project in Petso, you must first get your project approved by the system administration. </li>
                <li>Make sure  to include all the important details about your project in the following form and upload relevant images.</li>
                <li>You will be notified via an email once your project is approved and the project will be displayed to everyone who visit Petso.</li>
                <li>Note: You can only have 3 ongoing projects maximum at a time. If you already have 3 ongoing projects, please make sure to publish your next project after the completion of volunteer enrollment and/or fundraising  of one of those projects. </li>
</ul>
  <br> <br>
        
       <center>
           <h2>Let’s create your next welfare project at Petso!</h2>
        <div class="box">
              <h3>Project Details</h3> <br> <hr>
              <form class="form" action= '<?php echo URL_ROOT; ?>/users/projectOverView' method="POST">
                  
                <div class="left">
                    <span class="label">Project Title</span>

                    <div class="inputBx">
                        <input type="text" name="title" placeholder="Title">
                    </div>

                    <span class="label"> Initiation Date</span>
                    <div class="inputBx">
                        <input type="date" name="initiation_date" placeholder="DD/MM/YYYY">
                    </div>
                    <span class="label"> Project Description</span>
                    <div class="inputBox">
                        <input type="text"  name="description" placeholder="The Story">
                    </div> <br>
                      Upload a clear image as the cover photo for your project page. <br>
                      <input Type="file">

                 </div> <br><br>
                 <button type="submit" class="btn-cancel"> 
                    Cancel
                  </button>
                  <button type="submit" name="submit" class="btn"> 
                    Submit
                  </button>
                    <!-- <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
            
                        <a href="#">&raquo;</a>
                    </div>  -->
                 </form>
                 

        </div>
    </center>
      <br> <br>
    <div id="footer">
        <?php
            require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>
    </body>
</html>