<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
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

    <!--    <div class="hero">-->
    <!--    </div>-->
    <!--    <br><br>-->
    <div class="hero-banner">
        <div class="hero-banner-contents">
            <div class="hero-banner-contents-icon">
                <a href="<?php echo URL_ROOT; ?>/animalReports/reportAnimal">
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/paw-with-plus.png" alt="">
                </a>
            </div>
            <h1>Report an Animal to an<br/>Animal Shelter</h1>
        </div>
    </div>
    <div class="search-sec">
        <div class="search-sec-bar">
            <input type="search" placeholder="Search Welfare Organizations..." name="searchOrg"/>
            <i class="fa fa-search"></i>
        </div>
        <div class="search-sec-bar">
            <input type="search" placeholder="Search Welfare Projects..." name="searchPrj"/>
            <i class="fa fa-search"></i>
        </div>
    </div>
    <div class="hero-cards pg-body">
        <div class="hero-cards-single">
            <h2>Donate</h2>
            <i class="fa fa-hand-holding-heart"></i>
            <p>Contribute to a welfare project & help save live</p>
            <a href="<?php echo URL_ROOT;?>/projects/viewAllProjects" class="hero-cards-single-btn " id="">Donate</a>
        </div>
        <div class="hero-cards-single">
            <h2>Volunteer</h2>
            <i class="fa fa-hand-sparkles"></i>
            <p>Involve yourself in a life-changing experience</p>
            <a href="<?php echo URL_ROOT;?>/projects/viewAllProjects" class="hero-cards-single-btn" id="">Volunteer</a>
        </div>
        <div class="hero-cards-single">
            <h2>Adopt</h2>
            <i class="fa fa-dog"></i>
            <p>Find a friend who'll always stick by yr side</p>
            <a href="<?php echo URL_ROOT; ?>/animalProfiles/viewAllAnimalProfiles" class="hero-cards-single-btn "
               id="">Adopt</a>
        </div>
        <div class="hero-cards-single">
            <h2>Sponsor</h2>
            <i class="fa fa-hand-holding-usd"></i>
            <p>Help animal shelters take good care of their animals</p>
            <a href="<?php echo URL_ROOT; ?>/animalProfiles/viewAllAnimalProfiles" class="hero-cards-single-btn " id="">Sponsor</a>
        </div>
    </div>
</div>

<div>
    <div class="animalReportSection pg-body">

        <!--1-->
        <div class="container1">
            <h2 class="subtitleB grey">Let us help you find shelter and care for an animal in need</h2>
            <text class="normal grey">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis
                enim velit mollit. Exercitation.
            </text>
            <div class="reportButton">
                <a href="<?php echo URL_ROOT; ?>/animalReports/reportAnimal">
                    <button>Report Now</button>
                </a>
            </div>
            <h4 class="normal grey">With the help of all you animal lovers, Petso has manged to save many lives</h4>

            <div class="stats">
                <div class="container1Card">
                    <!--Display division-->
                    <h2>5</h2>
                    <description>Reports monthly</description>
                </div>
                <div class="container1Card">
                    <!--Display division-->
                    <h2>3</h2>
                    <description>Animals impacted</description>
                </div>
            </div>
        </div>

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
                <a class="container2Card" href="<?php echo URL_ROOT; ?>/animalReports/ViewSingleReport/<?php echo $item->id; ?>">
                    <div class="info" id="info">
                        <div href="<?php echo URL_ROOT; ?>/" class="reportVerticalCard">
                            <h2 style="font-weight: bold"><?php echo $item->heading; ?></h2>
                            <hr>
                            <div class="cardBody">
                                <div class="cardBodyInner">
                                    <div class="cardBodyInner1 grey paddingBot paddingRight">
                                        <div><span>Animal:</span> <?php echo $item->animal_type; ?></div>
                                        <div><span>Location:</span><?php echo $item->area; ?>
                                            , <?php echo $item->district; ?></div>
                                    </div>
                                    <div class="paddingBot grey"><span>Description:</span> <?php echo $item->situation; ?>
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
                </a>
            <?php } ?>

            <div class="viewAllButton">
                <a href="<?php echo URL_ROOT; ?>/AnimalReports/viewAllAnimalReports">
                    <button type="submit">
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
