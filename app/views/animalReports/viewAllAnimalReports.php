<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/hero-section.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/indexAnimalReport.css">
    <!--    <link rel='stylesheet' href='-->
    <?php //echo URL_ROOT; ?><!--/public/assets/CSS/components/form-container.css'>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Home</title>

</head>
<body>
<div id="top-nav">
    <?php
    require APP_ROOT . '/views/components/topNavbar.php';
    ?>

<div>
    <div class="animalReportSection">
        <!--2-->
        <div class="container2">
            <!--Display division-->
            <div class="info" id="info">
                <!--                <div class="infoUpper">-->
                <h2 style="font-weight: bolder">Latest Reports</h2>
                <!--                                    <a onclick="Content_edit();">-->
                <!--                                        <img src="-->
                <!--                --><?php //echo URL_ROOT; ?><!--/public/assets/img/icons/edit.png">-->
                <!--                                    </a>-->
                <!--                                </div>-->
            </div>

            <!-- Card display division-->

            <?php foreach ($data["reports"] as $item) { ?>
                <div class="container2Card">
                    <div class="info" id="info">
                        <div href="<?php echo URL_ROOT; ?>/" class="reportVerticalCard">
                            <h2 style="font-weight: bold"><?php echo $item->heading; ?></h2>
                            <hr>
                            <div class="cardBody">
                                <div class="cardBodyInner">
                                    <div class="cardBodyInner1 paddingBot paddingRight">
                                        <div><span>Animal:</span> <?php echo $item->animal_type; ?></div>
                                        <div><span>Location:</span><?php echo $item->area; ?>
                                            , <?php echo $item->district; ?></div>
                                    </div>
                                    <div class="paddingBot"><span>Description:</span> <?php echo $item->situation; ?>
                                    </div>
                                    <div class="paddingBot conversation"><span>Conversations:</span> 0</div>
                                </div>
                                <div class="cardBodyImage">
                                    <!--                                    <img src="-->
                                    <?php //echo $item->image; ?><!--">-->
                                    <img src="<?php echo URL_ROOT; ?>/public/uploads/reports/dog.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="viewAllButton">
                <a href="<?php echo URL_ROOT; ?>/pages/index">
                    <button type="submit" cur>
                        View All
                    </button>
                </a>
            </div>

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


