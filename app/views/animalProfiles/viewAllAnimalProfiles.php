<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/viewAllAnimalProfiles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Home</title>

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
                <!--                <div class="infoUpper">-->
                <div class="headingText">
                    <h2>Turtle Conserve</h2>
                </div>
            </div>
            <hr>
            <!-- Card display division-->
            <div class="cards">
                <?php foreach ($data["profiles"] as $item) { ?>
                    <div class="container2Card">
<!--                        <div class="info" id="info">-->
                            <div href="<?php echo URL_ROOT; ?>/" class="reportVerticalCard">
                                <div class="cardsUpper">
                                    <div class="cardBodyImage">
                                        <!--                                    <img src="-->
                                        <?php //echo $item->image; ?><!--">-->
                                        <img src="<?php echo URL_ROOT; ?>/public/uploads/reports/dog.jpg">
                                    </div>
                                    <h2 style="font-weight: bold" class="paddingTop"><?php echo $item->name; ?></h2>
                                </div>
                                <div class="cardBody">
                                    <div class="cardBodyInner">
                                        <div class="cardBodyInner1 paddingBot paddingRight paddingTop">
                                            <div><?php echo $item->gender; ?> <?php echo $item->type; ?> - Age: <?php echo $item->age; ?></div>
                                            <div class="cardButtons paddingTop">
                                                <button class="btn-sponsor">Sponsor</button>
                                                <button class="btn-adopt">Adopt</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                            </div>-->
                        </div>
                    </div>
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


