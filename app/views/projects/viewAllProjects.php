<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/view-all-projects.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <title><?php echo SITE_NAME; ?> | Welfare Projects</title>
    </head>
    <body>
    <div id="top-nav">
            <?php
                require APP_ROOT . '/views/components/topNavbar.php';
            ?>
        </div>
        <div class="top-section">
            <div class="header">
                <h2>Welfare Projects</h2><br>
                <p> Help animal welfare organizations make a difference <br>
                    through your contribution</p><br>
                    
                <div>  
                    <form action="<?php echo URL_ROOT; ?>/projects/viewAllProjects" method="POST">
                        <input type="text" id="header-search" placeholder="Search Welfare Project" name="keyword">
                    </form>
                </div>
                    
            </div><br><br><br>
            
            <div class="row"> <center>
                <div class="count-col">
                    <h1 class="grey">  <?php echo $data['organizations_count'] ?>  </h1>
                        <p class="grey">Organizations</p>
                </div>
                <div class="count-col">
                    <h1 class="grey"> <?php echo $data['total_projects_count'] ?> </h1>
                    <p class="grey">Projects</p>
                </div>
                <div class="count-col">
                    <h1 class="grey"> <?php echo $data['on_going_projects_count'] ?> </h1>
                    <p class="grey">Ongoing</p>
                </div>
                <div class="count-col">
                    <h1 class="grey"> <?php echo $data['completed_projects_count'] ?> </h1>
                    <p class="grey"> Completed </p>
                </div> </center>
            </div>
    
        </div>

        <div class="container-p2">

            <div class="div" style="float: left;">
                <span class="grey" style="font-weight: 700;  padding: 6px;"> Ongoing</span>
            </div>


            <div class="div" style="float: right;">
                
            </div>
            <br> <br><br>
            <hr><br><br>

            <div class="cards">
            <!-- card -->
                <?php 

                $count = 0;
                $total = $data['on_going_projects_count'];
                foreach($data['on_going_projects'] as $project){
                    $remaining_days = '';
                    if(isset($project->initiation_date)){
                        $now = time();
                        $initiation_date = strtotime($project->initiation_date);
                        $difference = $initiation_date - $now;
                        $remaining_days =  round($difference/(60*60*24));
                    }
                    $projectViewUrl = URL_ROOT."/projects/projectView/$project->id";

                    if(isset($project->image) && !empty($project->image)){
                        $image_url = URL_ROOT."/public/$project->image"; 
                        echo "
                        <a href='$projectViewUrl'> 
                            <div class='card'>
                                <img src='$image_url'
                                    alt='Avatar' style='width:100%; height: 150px;'>
                                <div class='card_title'>
                                <br>
                                    <h3><b>$project->title</b></h3>
                                    <p style='margin-top:0.4em'>by $project->org_name</p><br>
                                    <p>$project->org_district </p>
                                </div>
    
                                <div class='' style='padding: 0px 10px 10px 10px ;'>
                                    <span>$remaining_days days remaining</span>
                                    <span style='float: right;'><i style='color: red;' class='fas fa-hand-holding-heart fa-lg'></i> <i
                                            style='color: rgb(0, 255, 64);' class='fas fa-hand-paper fa-lg'></i> </span>
                                </div>
                            </div> </a>";

                    }else{
                        echo "
                        <a href='$projectViewUrl'> 
                            <div class='card'>
                                <img src='https://previews.123rf.com/images/latkun/latkun1712/latkun171200130/92172856-%EB%B9%88-%ED%88%AC%EB%AA%85-%EB%B0%B0%EA%B2%BD%EC%9E%85%EB%8B%88%EB%8B%A4-%EC%9B%90%ED%99%9C%ED%95%9C-%ED%8C%A8%ED%84%B4.jpg'
                                    alt='Avatar' style='width:100%; height: 150px;'>
                                <div class='card_title'>
                                <br>
                                    <h3><b>$project->title</b></h3>
                                    <p style='margin-top:0.4em'>by $project->org_name</p><br>
                                    <p>$project->org_district </p>
                                </div>
    
                                <div class='' style='padding: 0px 10px 10px 10px ;'>
                                    <span>$remaining_days days remaining</span>
                                    <span style='float: right;'><i style='color: red;' class='fas fa-hand-holding-heart fa-lg'></i> <i
                                            style='color: rgb(0, 255, 64);' class='fas fa-hand-paper fa-lg'></i> </span>
                                </div>
                            </div> </a>"; 
                    }
                    
                    $count++;
                    if($count == $total){
                        echo str_repeat("<br>", $count+1);
                    }
                } 

                ?>
            </div>
        
            <!-- card -->

            <!-- card-see-all -->
            <!-- <div class="card-see-all">
                <h3>See All <i class="fas fa-angle-right"></i></h3>
            </div> -->

            <!-- /card -->
        </div>
    </div>
    <!-- ----------------------------------------------------------------------------------------- -->
    <div class="container-p2">
        <div class="div" style="float: left;">
            <span class="grey" style="font-weight: 700;  padding: 6px;"> Completed</span>
        </div>
        <div class="div" style="float: right;">
            <!-- <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" class="search-container-txt" placeholder="Search.." name="">
                    <button><i class="fa fa-search"></i></button>
                </form>
            </div> -->
        </div>
        <br> <br><br>
        <hr><br><br>

        <!-- card -->
        <div class="cards">

            <?php 
            $count = 0;
            $total = $data['completed_projects'];
            foreach($data['completed_projects'] as $project){
                $date_words = '';
                if(isset($project->initiation_date)){
                    $initiation_date = strtotime($project->initiation_date);
                    $date_words = date("F j, Y", $initiation_date,);
                }

                $projectViewUrl = URL_ROOT."/projects/projectView/$project->id";
            
                if(isset($project->image) && !empty($project->image)){
                    $image_url = URL_ROOT."/public/$project->image";

                    echo "
                    <a href='$projectViewUrl'> 
                    <div class='card'>
                    <img src='$image_url'
                        alt='Avatar' style='width:100%; height: 150px;'>
                        <div class='card_title'>
                        <br>
                            <h3><b>$project->title</b></h3>
                            <p style='margin-top:0.4em'>by $project->org_name</p><br>
                            <p>$project->org_district </p>
                        </div>

                        <div class='' style='padding: 0px 10px 10px 10px ;'>
                            <span>Ended on $date_words</span>
                            <span style='float: right;'><i style='color: red;' class='fas fa-hand-holding-heart fa-lg'></i> <i
                                    style='color: rgb(0, 255, 64);' class='fas fa-hand-paper fa-lg'></i> </span>
                        </div>
                    </div>
                    </a>"; 

                }else{
                    echo "
                    <a href='#'> 
                    <div class='card'>
                    <img src='https://previews.123rf.com/images/latkun/latkun1712/latkun171200130/92172856-%EB%B9%88-%ED%88%AC%EB%AA%85-%EB%B0%B0%EA%B2%BD%EC%9E%85%EB%8B%88%EB%8B%A4-%EC%9B%90%ED%99%9C%ED%95%9C-%ED%8C%A8%ED%84%B4.jpg'
                        alt='Avatar' style='width:100%; height: 150px;'>
                        <div class='card_title'>
                        <br>
                            <h3><b>$project->title</b></h3>
                            <p style='margin-top:0.4em'>by $project->org_name</p><br>
                            <p>$project->org_district </p>
                        </div>

                        <div class='' style='padding: 0px 10px 10px 10px ;'>
                            <span>Ended on $date_words</span>
                            <span style='float: right;'><i style='color: red;' class='fas fa-hand-holding-heart fa-lg'></i> <i
                                    style='color: rgb(0, 255, 64);' class='fas fa-hand-paper fa-lg'></i> </span>
                        </div>
                    </div>
                    </a>"; 
                }   
                $count++;
                if($count == $total){
                    echo str_repeat("<br>", $count+1);
                }

            }
            ?>

        </div>
        <!-- card -->



        <!-- card-see-all -->
        <!-- <div class="card-see-all">
            <h3>See All <i class="fas fa-angle-right"></i></h3>
        </div> -->

        <!-- /card -->
    </div>





    <!-- ----------------------------------------------------------------------------------------- -->

    <div class="container-2">

        <div class="row">

            <div class="column-oo ">

                <h1 class="grey">Initiate you next welfare project at Petso</h1><br>

                <p class="grey">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat qui repellendus nobis natus numquam sunt recusandae
                    <br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit
                </p><br>


                <p>
                    Get all the help you need right here
                </p><br>
                <button class="purple-btn" style="float: left;" onClick="javascript:window.location.href='/petso/projects/createProject'" type="button ">Create Project</button>
            </div>

            <div class="column-oo">

                <div class="image-box">

                    <div class="imag-box-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRptDm0DM3cHHZBbK6VP-TT8_3AOsH56pUCy8yeqg8sFd1CMzw7mI1C0Pao2ZFP6QuHleA&usqp=CAU"
                            alt="Avatar " style="width:50%; height: 150px; border-radius: 18px; ">
                    </div>



                    <div class="imag-box-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUaeOYhdr5U8yoURhoRIl1uqzAUV29LkgYyg&usqp=CAU"
                            alt="Avatar " style="width:50%; height: 150px; border-radius: 18px; ">
                    </div>
                </div>
            </div>
        </div>
    </div><br>


        <div id="footer">
            <?php
                require APP_ROOT . '/views/components/footer.php';
            ?>
        </div>
    </body>
</html>
