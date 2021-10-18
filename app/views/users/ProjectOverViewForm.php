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
        <div class="box">
              <h3>Project Details</h3> <br> <hr>
              <form class="form">
                  
                <div class="left">
                    <span class="label">Project Title</span>

                    <div class="inputBx">
                        <input type="text" required="required" placeholder="Title">
                    </div>

                    <span class="label"> Initiation Date</span>
                    <div class="inputBx">
                        <input type="text" required="required" placeholder="DD/MM/YYYY">
                    </div>
                    <span class="label"> Project Description</span>
                    <div class="inputBox">
                        <input type="text" required="required" placeholder="The Story">
                    </div> <br>
                      Upload a clear image as the cover photo for your project page. <br>
                      <input Type="file">

                 </div> <br><br>
                 <button type="submit" class="btn-cancel"> 
                    Cancel
                  </button>
                  <button type="submit" class="btn-next"> 
                    Next
                  </button>

                  <center>
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
            
                        <a href="#">&raquo;</a>
                    </div> 
                 </form>
                 

        </div>
    </center>
    </body>
</html>