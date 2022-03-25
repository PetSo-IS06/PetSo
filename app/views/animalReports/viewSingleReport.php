<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/view-single-report.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


</head>

<body>

        <div id="top-nav">
            <?php
                require APP_ROOT . '/views/components/topNavbar.php';
            ?>
        </div>

    <div class="frm-container">
        <div>

                <?php 
                    //data setter
                    $report = $data['report'];
                    $reporter = $data['reporter'];
                    $user = $data['user'];
                    $conversations = $data['conversations'];
                    $conversation_count = $data['conversation_count'];
                

                    if(!empty($report->image)){
                        $report_image_url = URL_ROOT."/public/$report->image";
                    }else{
                        $report_image_url = "https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930";
                    }

                    $date_words = '';
                    if(isset($report->create_date)){
                        $create_date = strtotime($report->create_date);
                        $date_words = date("F j, Y", $create_date);
                    }


                    if(!empty($user->us_profile_img)){
                        $current_user_profile = URL_ROOT."/public/$user->us_profile_img";
                    }else{
                        $current_user_profile = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png";
                    }

                    $status = '';
                    if(!empty($report->status)){
                        if($report->status == "pending"){
                            $status = "Pending";
                        }else if($report->status == "completed"){
                            $status="Completed";
                        }else{
                            $status = $report->status;
                        }
                    }
                ?>

            <div class="img_col">
                <div>
                    
                    <img src=<?php  echo $report_image_url ?> class="img_border" alt="">
                </div>
                <!-- <div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRptDm0DM3cHHZBbK6VP-TT8_3AOsH56pUCy8yeqg8sFd1CMzw7mI1C0Pao2ZFP6QuHleA&usqp=CAU" alt="" class="img_border_sml">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRptDm0DM3cHHZBbK6VP-TT8_3AOsH56pUCy8yeqg8sFd1CMzw7mI1C0Pao2ZFP6QuHleA&usqp=CAU" alt="" class="img_border_sml">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRptDm0DM3cHHZBbK6VP-TT8_3AOsH56pUCy8yeqg8sFd1CMzw7mI1C0Pao2ZFP6QuHleA&usqp=CAU" alt="" class="img_border_sml">
                </div> -->
            </div>
                <div class="img_col">
                    <div>
                        <div class="heading2B grey"><?php echo $report->heading?></div><br><br> 
                        <div>
                            <span class="normalB purple"> <i class="fa fa-map-marker"></i> <?php echo $report->area ?>, <?php echo $report->district ?> </span> 
                            <span class="normalB grey" style="float: right;">Status: 
                            <span class="normalB green"><?php echo $status ?></span> </span>
                        </div>


                        <div style="padding-top: 30px;">
                            <span class="normalB grey">Reported On :</span> <span><?php echo $date_words ?></span> <br><br>
                            <span class="normalB grey">Reported By :</span> <span><?php echo $reporter->us_name ?></span>
                        </div>


                        <div style="padding-top: 30px; margin-bottom:25px">
                            <span class="normal"><?php echo $report->situation ?></span>
                        </div>


                        <div style="padding-top: 30px;">
                            <span class="normalB grey">Conversations (<?php echo $conversation_count ?>)</span> <br><br>
                            <img src=<?php echo $current_user_profile?>
                                alt="Avatar" class="user-avatar">
                                
                            <form action="<?php echo URL_ROOT; ?>/animalReports/ViewSingleReport/<?php echo $report->id ?>" method="POST">
                            <input type="text" name="message" class="adptxtbox_convo" placeholder="Enter Message">
                            
                            <button type="submit" name="submit" class="info"> <i class="fa fa-paper-plane"></i></button><br>
                            <span class="invalidInput"><?php echo $data['messageError']; ?></span>
                        </form>    
                        </div>
                    </div>
                </div>
            </div>



            <div style="margin-top: 500px;">

                <?php 

                foreach($conversations as $conversation){

                    if(!empty($conversation->us_profile_img)){
                        $profile_url = URL_ROOT."/public/$conversation->us_profile_img";
                    }else{
                        $profile_url = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"; 
                    }

                    $conversation_date_words = '';
                    if(isset($conversation->created_date)){
                        $conversation_created_date = strtotime($conversation->created_date);
                        $conversation_date_words = date("F j, Y", $conversation_created_date);
                    }

                    echo "
                        <div style='padding-left: 20px;'>
                            <div style='width: 100px;' class='img_col' >
                                <img src='$profile_url'
                                    alt='Avatar' style='width:50px; border-radius: 50%;'>

                            </div>

                            <div style='width: 99%;' >
                                <p style='font-weight: bold'>$conversation->us_name</p>
                                <p class='text-muted'> $conversation_date_words at $conversation->created_time </p>
                                <p class='message'>$conversation->message </p><br>
                                <hr style='width: 87%; margin-left:100px' size='1'><br>
                            </div>
                        </div>";
                    }

                ?>
                <br>
             </div>


    </div>

    <div id="footer">
        <?php
            require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>
</body>
</html>
