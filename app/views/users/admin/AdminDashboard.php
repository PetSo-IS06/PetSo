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
                        <a onClick="" id="">
                        <i class="fas fa-rocket"></i>
                        <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="" id="">
                        <i class="fas fa-hands-helping"></i>
                        <span>Account Requests</span>
                        </a>
                    </li>
                    <li>
                        <a class="active-tag" onClick="showProjectsPanel()" id="proj-tag">
                        <i class="fas fa-comment-dollar"></i>
                        <span>Welfare Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                        <i class="fas fa-paw"></i>
                        <span>Animal Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                        <i class="fas fa-dog"></i>
                        <span>Complaints</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                        <i class="fas fa-receipt"></i>
                        <span>Finance</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                        <i class="fas fa-receipt"></i>
                        <span>My Account</span>
                        </a>
                    </li>
            </div>

            <!-- Projects Section -->
            <section class="page-content" id="proj-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Welfare Projects</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="search-sec-bar">
                            <input type="search" placeholder="Search..." name="searchPrj" />
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="btn">
                            <a class="content-sub-head-btn" id="opportunities-btn" onClick="">Summary</a>
                            <a class="content-sub-head-btn" id="applications-btn" onClick="">Pending</a>
                            <a class="content-sub-head-btn" id="view-all-btn">View All</a>
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
                                    <th>Organization</th>
                                    <th>Volunteering</th>
                                    <th>Fundraising</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["pendProjects"] as $item) { ?>
                                        <tr>
                                            <td><input type='checkbox' name='selectedProject' value='<?php echo $item->id; ?>'></td>
                                            <td><?php echo $item->id; ?></td>
                                            <th><?php echo $item->title; ?></th>
                                            <th><?php echo $item->cause; ?></th>
                                            <th><?php echo $item->create_date; ?></th>
                                            <th><?php echo $item->org_id; ?></th>
                                            <th><input type="checkbox" name=""></th>
                                            <th><input type="checkbox" name=""></th>
                                            <th>Action</th>
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
