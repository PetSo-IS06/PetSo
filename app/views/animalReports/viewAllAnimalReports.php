<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/viewAllAnimalReports.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Animal Reports</title>

</head>
<body>
<div id="top-nav">
    <?php
    require APP_ROOT . '/views/components/topNavbar.php';
    ?>
</div>

<div class="animalReportSection pg-body">
    <div class="container2">
        <div class="info" id="info">
            <!--                <div class="infoUpper">-->
            <div class="headingText">
                <h2>Find help reports</h2>
            </div>
            <div class="container-p2">
                
            </div>
        </div>
        <hr>
        <!-- Card display division-->
        <div class="cards">
            <?php foreach ($data["reports"] as $item) { ?>
                <a class="container2Card" style="text-decoration: none;" href="<?php echo URL_ROOT; ?>/animalReports/ViewSingleReport/<?php echo $item->id; ?>">
                    <div class="info" id="info">
                        <div href="<?php echo URL_ROOT; ?>/" class="reportVerticalCard">
                            <div class="cardsUpper">
                                <h2 style="font-weight: bold"><?php echo $item->heading; ?></h2>
                                <h3 style="font-weight: lighter"><?php echo $item->create_date; ?></h3>

                            </div>
                            <hr>
                            <div class="cardBody grey">
                                <div class="cardBodyInner">
                                    <div class="cardBodyInner1 paddingBot paddingRight">
                                        <div><span>Animal:</span> <?php echo $item->animal_type; ?></div>
                                        <div><span>Location:</span><?php echo $item->area; ?>
                                            , <?php echo $item->district; ?></div>
                                    </div>
                                    <div class="paddingBot" style="width: 350px"><span>Description:</span> <?php echo $item->situation; ?>
                                    </div>
                                    <div class="paddingBot conversation"><span>Conversations:</span> 0</div>
                                </div>
                                <div class="cardBodyImage">
                                    <!--                                    <img src="-->
                                    <?php //echo $item->image; ?><!--">-->
                                    <img src="<?php
                                    if (!($item->image)) :
                                        echo URL_ROOT . '/public/uploads/animals/default-img.jpg';
                                    else :
                                        echo URL_ROOT . '/public/'.$item->image;
                                    endif; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>

        <!--        <div class="viewAllButton">-->
        <!--            <a href="--><?php //echo URL_ROOT; ?><!--/pages/index">-->
        <!--                <button type="submit" cur>-->
        <!--                    View All-->
        <!--                </button>-->
        <!--            </a>-->
        <!--        </div>-->

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


