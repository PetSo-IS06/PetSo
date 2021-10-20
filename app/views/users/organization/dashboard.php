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
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
    <div id="top-nav">
        <?php
            require APP_ROOT . '/views/components/topNavbar.php';
        ?>
    </div>
    <a href="<?php echo URL_ROOT;?>/pages/index" class="back">
            <i class="fas fa-chevron-left"></i>Back to Home
    </a>
    <div class="container">
        
        <div class="page-header">
            <nav>
                <a href="#" class="logo">
                <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/profile-img.png" alt="Profile Pic">
                </a>
                <div class="menu-heading">
                    <h3>Organization</h3>
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
                    <a href="#0">
                    <i class="fas fa-rocket"></i>
                    <span>My Projects</span>
                    </a>
                </li>
                <li>
                    <a href="#0" style="background: #f7f7f7; border-radius: 10px;">
                    <i class="fas fa-hands-helping"></i>
                    <span>Volunteers</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
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
        <section class="page-content">
            <section>
                <div class="content-head">
                    <h1>Dashboard</h1>
                    <h3>21st Oct 2021</h3>
                </div>
                <div class="content-sub-head">
                    <h3>Volunteering</h3>
                    <div class="btn">
                        <a class="content-sub-head-btn" id="opportunities-btn" onClick="Show_Opportunities()">Opportunities</a>
                        <a class="content-sub-head-btn" id="applications-btn" onClick="Show_Applications()">Applications</a>
                        <a class="content-sub-head-btn" id="view-all-btn">View All</a>
                    </div>
                </div>
                </section>

                <!-- Initial display -->
                <div class="opportunities" id="opportunities" style="display:flex; flex-direction: column;">
                    <div class="article-head">
                        <h3>Volunteer Opportunities</h3>
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
                                    <th>Project ID</th>
                                    <th>Description</th>
                                    <th>Opening Date</th>
                                    <th>Closing Date</th>
                                    <th>Work Days</th>
                                    <th>Location</th>
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
                                    <td>Content 1</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                </div>


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
    </div>
</body>
</html>
