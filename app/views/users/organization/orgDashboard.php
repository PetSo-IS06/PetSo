<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/dashboard.css">
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
                        <a onClick="showProjectsPanel()" id="proj-tag">
                        <i class="fas fa-rocket"></i>
                        <span>My Projects</span>
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
                        <a href="#0">
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

            <!-- Volunteer Opportunities Section -->
            <section class="page-content" id="vol-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Volunteer Opportunities/h1>
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
                                    <th id="col-desc">Description</th>
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
                                            <td id="col-desc"><?php echo $item->description; ?></td>
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
                                    <th id="col-desc">Funds for</th>
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
                                            <td id="col-desc"><?php echo $item->funds_for; ?></td>
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
        </div>
    </div>
    <div id="footer">
        <?php
            require APP_ROOT . '/views/components/footer.php';
        ?>
    </div>
</body>
</html>
