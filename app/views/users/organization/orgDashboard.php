<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/dashboard.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/dash-animal-prof-overview.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/dash-animal-prof-popup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/organization-dashboard.js"></script>
    <title><?php echo SITE_NAME; ?> | Dashboard</title>
</head>
<body>
    <div id="top-nav">
        <?php
            require APP_ROOT . '/views/components/topNavbar.php';
        ?>
    </div>
    <div id="body" class="pg-body">
        <h1 class="heading1B center grey">Dashboard</h1>
        <div class="container">
            <div class="page-header">
                <nav>
                    <a href="#" class="logo">
                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/profile-img.png" alt="Profile Pic">
                    </a>
                    <div class="menu-heading">
                        <h3 class="subtitleB center"><?php echo $_SESSION['user_name']; ?></h3>
                        <label >ID: 000000</label>
                    </div>
                    
                    <ul class="admin-menu">
                    <li>
                        <a href="#0">
                        <i class="fas fa-th-large"></i>
                        <span>Overview</span>
                        </a>
                    </li>
                    <li>
                        <a class="active-tag" onClick="showProjectsPanel()" id="proj-tag">
                        <i class="fas fa-rocket"></i>
                        <span>My Projects</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="showReportsPanel()" id="rep-tag">
                        <i class="fas fa-hand-holding-medical"></i>
                        <span>Animal Reports</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="showVolunteerPanel()" id="vol-tag">
                        <i class="fas fa-hands-helping"></i>
                        <span>Volunteers</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="showFaundraisingPanel()" id="fund-tag">
                        <i class="fas fa-comment-dollar"></i>
                        <span>Fundraisers</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="showAnimalProfilesPanel()" id="animal-tag">
                        <i class="fas fa-paw"></i>
                        <span>My Animals</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                        <i class="fas fa-dog"></i>
                        <span>Adoptions</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                        <i class="fas fa-receipt"></i>
                        <span>Sponsorships</span>
                        </a>
                    </li>
            </div>

            <!-- Projects Section -->
            <section class="page-content" id="proj-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">My Welfare Projects</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="search-sec-bar">
                                    <input type="search" placeholder="Search..." name="searchPrj" />
                                    <i class="fa fa-search"></i>
                                </div>
                        <div class="btn">
                            <a href="<?php echo URL_ROOT; ?>/projects/createProject" class="content-sub-head-btn" id="">Create Project</a>
                        </div>
                    </div>
                    </section>

                    <!-- Initial display -->
                    <div class="opportunities" id="opportunities" style="display:flex; flex-direction: column;">
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr class="table-head">
                                    <th><input type="checkbox" name="">All</th>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Cause</th>
                                    <th>Create Date</th>
                                    <th>Initiation Date</th>
                                    <th>Status</th>
                                    <th>Volunteering</th>
                                    <th>Fundraising</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["projects"] as $item) { ?>
                                        <tr>
                                            <td><input type='checkbox' name='selectedProject' value='<?php echo $item->id; ?>'></td>
                                            <td><?php echo $item->id; ?></td>
                                            <td><?php echo $item->title; ?></td>
                                            <td><?php echo $item->cause; ?></td>
                                            <td><?php echo $item->create_date; ?></td>
                                            <td><?php echo $item->initiation_date; ?></td>
                                            <td><?php 
                                                if(strcmp($item->status, 'Pending') == 0) {
                                                    echo "<p class='red'>$item->status</p>";
                                                } elseif(strcmp($item->status, 'Ongoing') == 0) {
                                                    echo "<p class='blue'>$item->status</p>";
                                                } elseif(strcmp($item->status, 'Completed') == 0) {
                                                    echo "<p class='green'>$item->status</p>";
                                                }
                                            ?></td>
                                            <td><?php 
                                                if(strcmp($item->volunteering, 'True') == 0) {
                                                    echo "<input type='checkbox' checked style='display: block;'>";
                                                } else {
                                                    echo "<input type='checkbox'>";
                                                }
                                            ?></td>
                                            <td><?php 
                                                if(strcmp($item->fundraising, 'True') == 0) {
                                                    echo "<input type='checkbox' checked>";
                                                } else {
                                                    echo "<input type='checkbox'>";
                                                }
                                            ?></td>
                                        </tr>
                                    <?php } ?>
                                <tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>

            <!-- Animal Reports Section -->
            <section class="page-content" id="rep-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Animal Reports</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="search-sec-bar">
                                    <input type="search" placeholder="Search..." name="searchPrj" />
                                    <i class="fa fa-search"></i>
                                </div>
                        <div class="btn">
                            <!-- <a class="content-sub-head-btn" id="opportunities-btn" onClick="Show_Opportunities()">Opportunities</a>
                            <a class="content-sub-head-btn" id="applications-btn" onClick="showVolApplications">Applications</a> -->
                            <a class="content-sub-head-btn" id="view-all-btn">View All</a>
                        </div>
                    </div>

                </section>
            </section>

            <!-- Volunteer Opportunities Section -->
            <section class="page-content" id="vol-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Volunteer Opportunities</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="search-sec-bar">
                                    <input type="search" placeholder="Search..." name="searchPrj" />
                                    <i class="fa fa-search"></i>
                                </div>
                        <div class="btn">
                            <a class="content-sub-head-btn" id="opportunities-btn" onClick="Show_Opportunities()">Opportunities</a>
                            <a class="content-sub-head-btn" id="applications-btn" onClick="showVolApplications">Applications</a>
                            <a class="content-sub-head-btn" id="view-all-btn">View All</a>
                        </div>
                    </div>
                    </section>

                    <div class="opportunities" id="opportunities" style="display:flex; flex-direction: column;">
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr class="table-head">
                                    <th><input type="checkbox" name=""></th>
                                    <th>ID</th>
                                    <th id="col-desc" style="width: 300px">Description</th>
                                    <th>District</th>
                                    <th>Area</th>
                                    <th>Closing Date</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["volOpp"] as $item) { ?>
                                        <tr>
                                            <td><input type='checkbox' name='selectedProject' value='<?php echo $item->id; ?>'></td>
                                            <td><?php echo $item->id; ?></td>
                                            <td id="col-desc" style="width: 300px"><?php echo $item->description; ?></td>
                                            <td><?php echo $item->district; ?></td>
                                            <td><?php echo $item->area; ?></td>
                                            <td><?php echo $item->app_close; ?></td>
                                            <td><?php echo $item->work_start; ?></td>
                                            <td><?php echo $item->work_end; ?></td>
                                        </tr>
                                    <?php } ?>
                                <tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>

            <!-- Volunteer Applications Section -->
            <section class="page-content" id="volApp-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Volunteer Applications</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="search-sec-bar">
                                    <input type="search" placeholder="Search..." name="searchPrj" />
                                    <i class="fa fa-search"></i>
                                </div>
                        <div class="btn">
                            <a class="content-sub-head-btn" id="opportunities-btn" onClick="Show_Opportunities()">Opportunities</a>
                            <a class="content-sub-head-btn" id="applications-btn" onClick="showVolApplications">Applications</a>
                            <a class="content-sub-head-btn" id="view-all-btn">View All</a>
                        </div>
                    </div>
                    </section>
                    
                    <!-- Applications Section -->
                    <section class="grid" id="article">
                        <article class="applications-section" id="applications-section">
                            <div class="article-head">
                                <h3>My Volunteers</h3>
                                <div class="search-sec-bar">
                                    <input type="search" placeholder="Search..." name="searchPrj" />
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="table-wrapper">
                                <table class="fl-table">
                                    <thead>
                                    <tr class="table-head">
                                        <th><input type="checkbox" name=""></th>
                                        <th>ID</th>
                                        <th>Applicant Name</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
                                        <th>Age</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>Content 1</td>
                                        <td>Content 1</td>
                                        <td>Content 1</td>
                                        <td>Content 1</td>
                                        <td>Content 1</td>
                                        <td>Content 1</td>
                                        <td>
                                        <a href="#" class="table-action-btn" id="accept">Accept</a>
                                        <a href="#" class="table-action-btn" id="reject">Reject</a>
                                        <a href="#"><i class="fa fa-ellipsis-v"></i></a> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>Content 2</td>
                                        <td>Content 2</td>
                                        <td>Content 2</td>
                                        <td>Content 2</td>
                                        <td>Content 2</td>
                                        <td>Content 2</td>
                                        <td>
                                        <a href="#" class="table-action-btn" id="accept">Accept</a>
                                        <a href="#" class="table-action-btn" id="reject">Reject</a>
                                        <a href="#"><i class="fa fa-ellipsis-v"></i></a> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>Content 3</td>
                                        <td>Content 3</td>
                                        <td>Content 3</td>
                                        <td>Content 3</td>
                                        <td>Content 3</td>
                                        <td>Content 3</td>
                                        <td>
                                        <a href="#" class="table-action-btn" id="accept">Accept</a>
                                        <a href="#" class="table-action-btn" id="reject">Reject</a>
                                        <a href="#"><i class="fa fa-ellipsis-v"></i></a> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>Content 4</td>
                                        <td>Content 4</td>
                                        <td>Content 4</td>
                                        <td>Content 4</td>
                                        <td>Content 4</td>
                                        <td>Content 4</td>
                                        <td>
                                        <a href="#" class="table-action-btn" id="accept">Accept</a>
                                        <a href="#" class="table-action-btn" id="reject">Reject</a>
                                        <a href="#"><i class="fa fa-ellipsis-v"></i></a> 
                                        </td>
                                    </tr>
                                    <tbody>
                                </table>
                            </div>
                        </article>
                    </section>
                </section>
            </section>

            <!-- Fundraiser Section -->
            <section class="page-content" id="fund-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Fundraising</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="search-sec-bar">
                            <input type="search" placeholder="Search..." name="searchPrj" />
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    </section>

                    <!-- Initial display -->
                    <div class="opportunities" id="opportunities" style="display:flex; flex-direction: column;">
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr class="table-head">
                                    <th><input type="checkbox" name="">All</th>
                                    <th>ID</th>
                                    <th id="col-desc" style="width: 300px">Funds for</th>
                                    <th>Target Amount</th>
                                    <th>Raised Amount</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Bank Account id</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["funds"] as $item) { ?>
                                        <tr>
                                            <td><input type='checkbox' name='selectedFundraiser' value='<?php echo $item->id; ?>'></td>
                                            <td><?php echo $item->id; ?></td>
                                            <td id="col-desc" style="width: 300px"><?php echo $item->funds_for; ?></td>
                                            <td><?php echo $item->target_amount; ?></td>
                                            <td><?php echo $item->raised_amount; ?></td>
                                            <td><?php echo $item->funding_start; ?></td>
                                            <td><?php echo $item->funding_end; ?></td>
                                            <td><?php echo $item->bank_acnt_id; ?></td>
                                        </tr>
                                    <?php } ?>
                                <tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>

            <!-- Animal Profiles Section -->
            <section class="page-content" id="animal-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Animal Profiles</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="search-sec-bar">
                            <input type="search" placeholder="Search..." name="searchAnimalProfile" />
                            <i class="fa fa-search"></i>
                        </div> 
                        <div class="btn">
                            <a id="back-to-an-overview" style="display: none;" onClick="hideAllAnimals()" class="cell-nav">Back</a>
                            <a onClick="showAllAnimals()" class="content-sub-head-btn" style="background-color: #1D67BE;" id="all-animals-btn">View all</a>
                        </div>
                    </div>
                    </section> 

                    <!-- Initial display -->
                    <div class="opportunities" id="prof-overview">
                        <div class="main-row" id="top-row">
                            <div class="shelter card3">
                                <h3 class="subtitleB grey">At your Shelter</h3>
                                <div class="shel-cont">
                                    <div class="animals-card">
                                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/dog-bubbles.png" alt="Dogs">
                                        <p class="normalB grey"><?php echo $data["an-profiles"]['dogs-total']; ?> Dogs</p>
                                    </div>
                                    <div class="animals-card">
                                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/cat-bubbles.png" alt="Cats">
                                        <p class="normalB grey"><?php echo $data["an-profiles"]['cats-total']; ?> Cats</p>
                                    </div>
                                    <div class="animals-card">
                                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/bird-bubbles.png" alt="Birds">
                                        <p class="normalB grey"><?php echo $data["an-profiles"]['birds-total']; ?> Birds</p>
                                    </div>
                                    <div class="animals-card">
                                        <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/other-bubbles.png" alt="Others">
                                        <p class="normalB grey"><?php echo $data["an-profiles"]['others-total']; ?> Others</p>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all card3">
                                <h1 class="heading1B grey"><?php echo $data["an-profiles"]['animals-total']; ?></h1>
                                <h3  class="normalB grey">Profiles available currently</h3>
                                <a  class="normalB purple" href="">View all &rarr;</a>
                            </div>
                            <a href="<?php echo URL_ROOT; ?>/AnimalProfiles/create">
                                <div class="create-prof-card">
                                    <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/paw-with-plus.png" alt="Create Icon">
                                    <h3 class="normalB grey center">Create Profile</h3>
                                </div>
                            </a>
                        </div>
                        <div class="main-row" id="bottom-row">
                            <div class="recent card3">
                                <h3 class="subtitleB grey">Recent Activities</h3>
                                <div class="activities">
                                    <div class="activity">
                                        <img src="<?php echo URL_ROOT; ?>/public/uploads/animals/default-img.jpg" alt="Profile image">
                                        <div class="act-cap">
                                            <p class="normal"><b>Benny</b> was adopted by <b>Anura</b></p>
                                            <p class="normal light-grey">Date: 02/03/2022</p>
                                        </div>
                                    </div>
                                    <div class="activity">
                                        <img src="<?php echo URL_ROOT; ?>/public/uploads/animals/default-img.jpg" alt="Profile image">
                                        <div class="act-cap">
                                            <p class="normal"><b>Benny</b> was adopted by <b>Anura</b></p>
                                            <p class="normal light-grey">Date: 02/03/2022</p>
                                        </div>
                                    </div>
                                    <div class="activity">
                                        <img src="<?php echo URL_ROOT; ?>/public/uploads/animals/default-img.jpg" alt="Profile image">
                                        <div class="act-cap">
                                            <p class="normal"><b>Benny</b> was adopted by <b>Anura</b></p>
                                            <p class="normal light-grey">Date: 02/03/2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary card3">
                                <h3 class="subtitleB grey">Summary</h3>
                                <div class="sum-cont">
                                    <div class="sum-row1">
                                        <div class="avail-tot">
                                            <h1 class="heading1B purple"><?php echo $data["an-profiles"]['to-adopt-total']; ?></h1>
                                            <h3  class="normalB purple">Available for Adoption</h3>
                                        </div>
                                        <div class="avail-tot">
                                            <h1 class="heading1B purple"><?php echo $data["an-profiles"]['to-sponsor-total']; ?></h1>
                                            <h3  class="normalB purple">Available for Sponsoring</h3>
                                        </div>
                                    </div>
                                    <div class="sum-row2">
                                        <div class="totals">
                                            <h1 class="heading1B"><?php echo $data["an-profiles"]['adopted-total']; ?></h1>
                                            <h3  class="normalB">Adopted</h3>
                                        </div>
                                        <div class="totals">
                                            <h1 class="heading1B"><?php echo $data["an-profiles"]['sponsored-total']; ?></h1>
                                            <h3  class="normalB">Sponsored</h3>
                                        </div>
                                        <div class="totals">
                                            <h1 class="heading1B"><?php echo $data["an-profiles"]['in-shelter']; ?></h1>
                                            <h3  class="normalB">In Shelter</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- View All Section -->
                    <div class="opportunities" id="view-all-animals">
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr class="table-head">
                                    <th>ID</th>
                                    <th style="min-width: 100px">Name</th>
                                    <th id="col-desc" style="width: 200px">Description</th>
                                    <th>Created date</th>
                                    <th>Gender</th>
                                    <th>Type</th>
                                    <th>Breed</th>
                                    <th>Adopted</th>
                                    <th>Sponsored</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["an-profiles"]['all'] as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->id; ?></td>
                                            <td style="min-width: 100px" class="cell-nav"><a onClick="showProfileOverlay(<?php echo $item->id; ?>)"><?php echo $item->name; ?></a></td>
                                            <td id="col-desc" style="width: 200px"><?php echo $item->description; ?></td>
                                            <td><?php echo $item->create_date; ?></td>
                                            <td><?php echo $item->gender; ?></td>
                                            <td><?php echo $item->type; ?></td>
                                            <td><?php echo $item->breed; ?></td>
                                            <td>
                                                <?php 
                                                    if(strcmp($item->adoption_status, 'Not Available') == 0) {
                                                        echo "<p class='red'>$item->adoption_status</p>";
                                                    } elseif(strcmp($item->adoption_status, 'Adopted') == 0) {
                                                        echo "<p class='blue'>$item->adoption_status</p>";
                                                    } elseif(strcmp($item->adoption_status, 'Available') == 0) {
                                                        echo "<p class='green'>$item->adoption_status</p>";
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    if(strcmp($item->sponsorship_status, 'Not Available') == 0) {
                                                        echo "<p class='red'>$item->sponsorship_status</p>";
                                                    } elseif(strcmp($item->sponsorship_status, 'Sponsored') == 0) {
                                                        echo "<p class='blue'>$item->sponsorship_status</p>";
                                                    } elseif(strcmp($item->sponsorship_status, 'Available') == 0) {
                                                        echo "<p class='green'>$item->sponsorship_status</p>";
                                                    }
                                                ?>
                                            </td>
                                            <!-- Profile Popup -->
                                            <div id="popup<?php echo $item->id; ?>" class="overlay">
                                                <div class="popup" id="animal-prof-popup">
                                                    <a class="close" onClick="hideProfileOverlay(<?php echo $item->id; ?>)">×</a>
                                                    <form action="<?php echo URL_ROOT . '/AnimalProfiles/editProfile/'.$item->id; ?>" method="POST" id="<?php echo 'edit-an-prof-form'.$item->id; ?>" enctype="multipart/form-data">
                                                    <div class="prof-content" id="<?php echo 'edit-animal-prof'.$item->id; ?>">
                                                        <div class="prof-info">
                                                            <div class="prof-view">
                                                                <img src="<?php if(!empty($item->image)) echo(URL_ROOT.'/'.$item->image);
                                                                                else echo URL_ROOT.'/uploads/animals/default-img.jpg';?>" alt="Profile image">
                                                                <div class="cap">
                                                                    <h3 class="subtitleB"><?php echo $item->name; ?></h3>
                                                                    <div>
                                                                        <span><?php echo $item->gender; ?></span> &#9679; <span><?php echo $item->breed; ?></span>
                                                                    </div>
                                                                    <span><?php echo $item->age; ?></span>
                                                                    <div class="change-img" id="change-img">
                                                                        <label for="prof-image" class="normal">Change image</label>
                                                                        <input type="file" accept="image/*" id="prof-image" name="prof-image" class="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="prof-details">
                                                                <div class="form-title">
                                                                    <h3>Profile Details</h3>
                                                                    <a onclick="enableProfileEdit(<?php echo $item->id; ?>)"><img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/edit-grey.png" id="<?php echo 'edit-btn'.$item->id; ?>" alt="edit"></a>
                                                                    <input type="submit" value="Save" id="<?php echo 'save-btn'.$item->id; ?>" style="display: none;">
                                                                </div>
                                                                <div class="form-row">
                                                                    <label for="" class="normalB">Name</label>
                                                                    <input type="text" name="name" id="name" value="<?php echo $item->name; ?>" disabled>
                                                                </div>
                                                                <div class="form-row">
                                                                    <label for="" class="normalB">Type</label>
                                                                    <div id="animal-type" style="display: none;">
                                                                        <input name="type" type="text" list="type" class="select-cat" value="<?php echo $item->type; ?>">
                                                                        <datalist id="type">
                                                                            <option value="Dog">Dog</option>
                                                                            <option value="Cat">Cat</option>
                                                                            <option value="Bird">Bird</option>
                                                                            <option value="Other">Other</option>
                                                                        </datalist>
                                                                    </div>
                                                                    <input type="text" name="" id="type-in" value="<?php echo $item->type; ?>" disabled>
                                                                </div>
                                                                <div class="form-row">
                                                                    <label for="" class="normalB">Breed</label>
                                                                    <input type="text" name="breed" id="breed" value="<?php echo $item->breed; ?>" disabled>
                                                                </div>
                                                                <div class="form-row">
                                                                    <label for="" class="normalB">Age</label>
                                                                    <input type="text" name="age" id="age" value="<?php echo $item->age; ?>" disabled>
                                                                </div>
                                                                <div class="form-row">
                                                                    <label for="" class="normalB">Gender</label>
                                                                    <div id="animal-gender" style="display: none;">
                                                                        <input name="gender" type="text" list="gender" class="select-cat" value="<?php echo $item->gender; ?>">
                                                                        <datalist id="gender">
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                        </datalist>
                                                                    </div>
                                                                    <input type="text" name="" id="gender-in" value="<?php echo $item->gender; ?>" disabled>                                                                </div>
                                                                <div class="form-row">
                                                                    <label for="" class="normalB">Description</label>
                                                                    <textarea rows="5" name="description" maxlength="200" disabled><?php echo $item->description; ?></textarea>                                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="prof-stat">
                                                            <div class="adopt">
                                                                <div class="adopt-row">
                                                                    <label for="adopt-status" class="normalB">Adoption status</label>
                                                                    <div id="adopt-status" style="display: none;">
                                                                        <input name="adoption" type="text" list="adopt-status-types" class="select-cat" value="<?php echo $item->adoption_status; ?>">
                                                                        <datalist id="adopt-status-types">
                                                                            <option value="Available">Available</option>
                                                                            <option value="Not Available">Not Available</option>
                                                                            <option value="Adopted">Adopted</option>
                                                                        </datalist>
                                                                    </div>
                                                                    <input type="text" name="" id="adopt-in" value="<?php echo $item->adoption_status; ?>" disabled>
                                                                </div>
                                                                <div class="stat-text">
                                                                    <label for="requirements" class="normalB">Requirements(if any)</label>
                                                                    <textarea rows="5" name="requirements" maxlength="200" disabled><?php echo $item->requirements; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="sponsor">
                                                                <div class="spon-row">
                                                                    <label for="spon-status" class="normalB">Sponsorship status</label>
                                                                    <div id="spon-status" style="display: none;">
                                                                        <input name="sponsorship" type="text" list="spon-status-types" class="select-cat" value="<?php echo $item->sponsorship_status; ?>">
                                                                        <datalist id="spon-status-types">
                                                                            <option value="Available">Available</option>
                                                                            <option value="Not Available">Not Available</option>
                                                                            <option value="Sponsored">Sponsored</option>
                                                                        </datalist>
                                                                    </div>
                                                                    <input type="text" name="" id="spon-in" value="<?php echo $item->sponsorship_status; ?>" disabled>
                                                                </div>
                                                                <label for="monthlyCost" class="normalB" style="margin-top: 10px;">Monthly Cost (LKR)*</label>
                                                                <input type="number" name="monthlyCost" id="monthlyCost" value="<?php echo $item->monthly_cost; ?>" max="100000" disabled>
                                                            </div>
                                                        </div>
                                                        </form>
                                                        <div class="prof-action">
                                                            <form action="<?php echo URL_ROOT . '/AnimalProfiles/deleteProfile/'.$item->id; ?>" method="GET" id="delete-an-prof-form">
                                                                <input type="submit" id="approve" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    <?php } ?>
                                <tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>

        </div>
    </div>
    <div id="footer">
        <?php
            require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>
</body>
</html>
