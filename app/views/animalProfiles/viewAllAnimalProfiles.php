<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/viewAllAnimalProfiles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Animal Profiles</title>

</head>
<body>
<div id="top-nav">
    <?php
    require APP_ROOT . '/views/components/topNavbar.php';
    ?>
</div>

<div id="body" class="pgbody">
    <div class="hero-section">
        <img src="<?php echo URL_ROOT; ?>/public/assets/img/allAnimalProfileHeader.svg" alt="" class="hero-img">
    </div>
    <div class="animalReportSection">
        <div class="container2">
            <div class="info" id="info">
                <div class="headingText">
                    <h2>Animal Profiles</h2>
                </div>
            </div>
            <hr>
            <!-- Card display division-->
            <div class="cards">
                <?php foreach ($data["profiles"] as $item) { ?>
                    <div class="container2Card">
                        <div class="reportVerticalCard">
                            <a href="<?php echo URL_ROOT; ?>/animalProfiles/viewSingleProfile/<?php echo $item->id; ?>" style="text-decoration: none; color: black" class="cardsUpper">
                                <div class="cardBodyImage">
                                    <img src="<?php
                                    if (!($item->image)) :
                                        echo URL_ROOT . '/public/uploads/animals/default-img.jpg';
                                    else :
                                        echo  URL_ROOT . '/public/'.$item->image;
                                    endif; ?>">
                                </div>
                                <h2 style="font-weight: bold" class="paddingTop"><?php echo $item->name; ?></h2>
                            </a>
                            <div class="cardBody">
                                <div class="cardBodyInner">
                                    <div class="cardBodyInner1 paddingBot paddingRight paddingTop">
                                        <div><?php echo $item->gender; ?> <?php echo $item->type; ?> -
                                            Age: <?php echo $item->age; ?> <br> @ <?php echo $item->org_name; ?></div>
                                        <div class="cardButtons paddingTop">
                                            <button class="<?php
                                            if ($item->sponsorship_status == 'Available') :
                                                echo 'btn-sponsor';
                                            elseif ($item->sponsorship_status == 'Not Available') :
                                                echo 'btn-sponsor-hide';
                                            endif; ?>">Sponsor
                                            </button>

                                            <?php
                                            $animalprofileId=$data['animal_profile'];
                                            $adopt_url= URL_ROOT."/Adoptions/adoptionApplication/$animalprofileId->id";
                                            ?>

                                           <form action="<?php echo $adopt_url ?>" method="POST" enctype="multipart/form-data">
                                            <button class="<?php
                                            if ($item->adoption_status == 'Available') :
                                                echo 'btn-adopt';
                                            elseif ($item->adoption_status == 'Not Available') :
                                                echo 'btn-adopt-hide';
                                            endif; ?>">Adopt
                                            </button>
                                           </form>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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


