<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL_ROOT; ?>/public/assets/img/icons/favicon.png">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/dashboard.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/dash-proj-popup.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/ad-dash-payments.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/dash-users-sec.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/ad-dash-overview.css">
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/orgDetail.css'>
    <script src="https://kit.fontawesome.com/e2ae29c3d1.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/admin-dashboard.js"></script>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/ad-dash-overview.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
                        <label>AD_00<?php echo $_SESSION['user_id']; ?></label>
                    </div>
                    
                    <ul class="admin-menu">
                    <li>
                        <a class="active-tag" onClick="showOverviewPanel()" id="over-tag">
                        <i class="fas fa-th-large"></i>
                        <span>Overview</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="showUsersPanel()" id="usr-tag">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="showRequestsPanel()" id="req-tag">
                        <i class="fa-solid fa-circle-dot"></i>
                        <span>Account Requests</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="showProjectsPanel()" id="proj-tag">
                        <i class="fas fa-hands-helping"></i>
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
                        <i class="fa-solid fa-person-circle-exclamation"></i>
                        <span>Complaints</span>
                        </a>
                    </li>
                    <li>
                        <a onClick="showPaymentsPanel()" id="pay-tag">
                        <i class="fas fa-receipt"></i>
                        <span>Payments</span>
                        </a>
                    </li>
                </nav>
            </div>

            <!-- Overview Section -->
            <section class="page-content" id="over-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Overview</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="ov-cont">
                        <div class="ov-cont-row">
                            <div class="ov-sum-card">
                                <div class="sum-icon">
                                    <i class="fa-solid fa-building-ngo heading2 purple"></i>
                                    <h3 class="subtitleB purple"><?php echo  sprintf("%02d",sizeof($data["allOrgs"]));?></h3>
                                </div>
                                <p class="normalB">Welfare Organizations</p>
                            </div>
                            <div class="ov-sum-card">
                                <div class="sum-icon">
                                    <i class="fas fa-users heading2 purple"></i></i>
                                    <h3 class="subtitleB purple"><?php echo  sprintf("%02d", sizeof($data["allUsers"]));?></h3>
                                </div>
                                <p class="normalB">Users</p>
                            </div>
                            <div class="ov-sum-card">
                                <div class="sum-icon">
                                    <i class="fa-solid fa-user-shield heading2 purple"></i>
                                    <h3 class="subtitleB purple"><?php echo  sprintf("%02d",sizeof($data["allAdmins"]));?></h3>
                                </div>
                                <p class="normalB">Administrators</p>
                            </div>
                            <div class="ov-sum-card">
                                <div class="sum-icon">
                                <i class="fa-solid fa-paw heading2 purple"></i>
                                    <h3 class="subtitleB purple"><?php echo  sprintf("%02d",sizeof($data["allAdmins"]));?></h3>
                                </div>
                                <p class="normalB">Animals</p>
                            </div>
                            <div class="ov-sum-card">
                                <div class="sum-icon">
                                    <i class="fa-solid fa-triangle-exclamation heading2 purple"></i>
                                    <h3 class="subtitleB purple">50</h3>
                                </div>
                                <p class="normalB">Animals Reported</p>
                            </div>
                        </div>
                        <div class="ov-cont-row">
                            <div class="ov-total-card">
                                <div class="tot-card-head">
                                    <div class="card-icon">
                                        <i class="fa-solid fa-magnifying-glass-dollar"></i>
                                    </div>
                                    <h2 class="subtitleB">LKR 120, 000</h2>
                                </div>
                                <span class="normalB">Total Funds Raised</span>
                                <div class="card-graph" id="total-funds" style="width: 260px ; height: 150px;">
                                    <script type="text/javascript">
                                        google.charts.load("current", {packages:['corechart']});
                                        google.charts.setOnLoadCallback(drawChart);
                                        function drawChart() {
                                        var totalFundsData = google.visualization.arrayToDataTable([
                                            ["Element", "Density", { role: "style" } ],
                                            <?php foreach ($data["annualFunds"] as $item) {?>
                                            ["<?php echo $item->year; ?>", <?php echo $item->sum; ?>, "color: #5CB85C"],
                                            <?php }; ?>
                                        ]);

                                        var view = new google.visualization.DataView(totalFundsData);
                                        view.setColumns([0, 1,
                                                        { calc: "stringify",
                                                            sourceColumn: 1,
                                                            type: "string",
                                                            color: "#EEC93D",
                                                            role: "annotation" },
                                                        2]);
                                        var totalFunds = new google.visualization.ColumnChart(document.getElementById("total-funds"));
                                        totalFunds.draw(view);
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="ov-total-card">
                                <div class="tot-card-head">
                                    <div class="card-icon">
                                        <i class="fa-solid fa-hand-sparkles"></i>
                                    </div>
                                    <h2 class="subtitleB">LKR 120, 000</h2>
                                </div>
                                <span class="normalB">Total Volunteers</span>
                                <div class="card-graph"  id="total-vols" style="width: 260px ; height: 150px;">
                                    <script type="text/javascript">
                                        google.charts.load('current', {'packages':['corechart']});
                                        google.charts.setOnLoadCallback(drawChart);
                                        function drawChart() {
                                            var data = google.visualization.arrayToDataTable([
                                            ['Opp', 'Vol'],
                                            [ 8,      12],
                                            [ 4,      5.5],
                                            [ 11,     14],
                                            [ 4,      5],
                                            [ 3,      3.5],
                                            [ 6.5,    7]
                                            ]);

                                            var options = {
                                            hAxis: {minValue: 0, maxValue: 15},
                                            vAxis: {minValue: 0, maxValue: 15},
                                            chartArea: {width:'70%'},
                                            trendlines: {
                                                0: {
                                                type: 'linear',
                                                showR2: true,
                                                visibleInLegend: true
                                                }
                                            }
                                            };

                                            var chartLinear = new google.visualization.ScatterChart(document.getElementById('total-vols'));
                                            chartLinear.draw(data, options);

                                            options.trendlines[0].type = 'exponential';
                                            options.colors = ['#6F9654'];
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="ov-total-card">
                                <div class="tot-card-head">
                                    <div class="card-icon">
                                        <i class="fa-solid fa-file-invoice-dollar"></i>
                                    </div>
                                    <h2 class="subtitleB">LKR 120, 000</h2>
                                </div>
                                <span class="normalB">Total Sponsorships</span>
                                <div class="card-graph"  id="total-spons" style="width: 260px ; height: 150px;">
                                    <script type="text/javascript">
                                        google.charts.load("current", {packages:["corechart"]});
                                        google.charts.setOnLoadCallback(drawChart);
                                        function drawChart() {
                                        var data = google.visualization.arrayToDataTable([
                                            ["Animal", "LKR", { role: "style" } ],
                                            ["Dogs", 8.94, "#9F2884"],
                                            ["Cats", 10.49, "#EEC93D"],
                                            ["Birds", 19.30, "#9F2884"],
                                            ["Other", 21.45, "#EEC93D"]
                                        ]);

                                        var view = new google.visualization.DataView(data);
                                        view.setColumns([0, 1,
                                                        { calc: "stringify",
                                                            sourceColumn: 1,
                                                            type: "string",
                                                            role: "annotation" },
                                                        2]);
                                        var chart = new google.visualization.BarChart(document.getElementById("total-spons"));
                                        chart.draw(view);
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Initial display -->
                <section>
                    <div class="opportunities" id="">

                    </div>
                </section>
            </section>

           <!-- Users Section -->
            <section class="page-content" id="usr-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B"><?php echo SITE_NAME; ?> Users</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="us-btn">
                            <a id="view-user-btn" onClick="showUsers()">Users</a>
                            <a id="view-org-btn" onClick="showOrgs()">Organizations</a>
                            <a id="view-admin-btn" onClick="showAdmins()">Admins</a>
                        </div>
                    </div>
                    </section>

                    <!-- Initial display - View Users -->
                    <div class="opportunities" id="all-users">
                        <h1 class="subtitle">Users (<?php echo sizeof($data["allUsers"]);?>)</h1>
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                    <tr class="table-head">
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th id="col-desc" style="width: 150px">Email</th>
                                        <th>Mobile</th>
                                        <th>Account status</th>
                                        <th>Area</th>
                                        <th>District</th>
                                        <th>Joined date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["allUsers"] as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->us_id; ?></td>
                                            <td class="cell-nav"><a href=""><?php echo $item->us_name; ?></a></td>
                                            <td id="col-desc" style="width: 150px"><?php echo $item->email; ?></td>
                                            <td><?php echo $item->us_mobile; ?></td>
                                            <td><?php echo $item->account_status; ?></td>
                                            <td><?php echo $item->us_city; ?></td>
                                            <td><?php echo $item->us_district; ?></td>
                                            <td><?php echo $item->joined_date; ?></td>
                                        </tr>
                                    <?php } ?>
                                <tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View Organizations -->
                    <div class="opportunities" id="all-org">
                        <h1 class="subtitle">Organizations (<?php echo sizeof($data["allOrgs"]);?>)</h1>
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                    <tr class="table-head">
                                        <th>Org ID</th>
                                        <th>Name</th>
                                        <th id="col-desc" style="width: 150px">Email</th>
                                        <th>Mobile</th>
                                        <th>Respond to help</th>
                                        <th>Area</th>
                                        <th>District</th>
                                        <th>Website</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["allOrgs"] as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->org_id; ?></td>
                                            <td class="cell-nav"><a href=""><?php echo $item->org_name; ?></a></td>
                                            <td id="col-desc" style="width: 150px"><?php echo $item->email; ?></td>
                                            <td><?php echo $item->org_mobile; ?></td>
                                            <td><?php echo $item->if_findhelp; ?></td>
                                            <td><?php echo $item->org_area; ?></td>
                                            <td><?php echo $item->org_district; ?></td>
                                            <td><?php echo $item->org_website; ?></td>
                                        </tr>
                                    <?php } ?>
                                <tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View Admins -->
                    <div class="opportunities" id="all-admins">
                        <div class="ad-overview">
                            <h1 class="subtitle">Administrators</h1>
                            <div class="ad-ov-head">
                                <div class="all-ad-card">
                                    <div class="ad-card-top">
                                        <div class="admin-icon">
                                            <img src="<?php echo URL_ROOT; ?>/public/assets/img/icons/admin-icon.png" alt="">
                                        </div>
                                        <a onclick="showCreateAdminForm()" class="subtitleB purple">Add +</a>
                                    </div>
                                    <div class="ad-card-bot">
                                        <h4 class="subtitle">Total System Admins</h4>
                                        <h3 class="subtitleB"><?php echo sizeof($data["allAdmins"]);?></h3>
                                    </div>
                                </div>
                                <div class="ad-role-card">
                                    <div class="ad-role-title">
                                        <h4 class="subtitle">Role of an Admin</h4>
                                    </div>
                                    <div class="ad-role-body">
                                        <ol>
                                            <li>Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et.</li>
                                            <li>Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim</li>
                                            <li>Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</li>
                                            <li>Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Create Admin Popup -->
                            <div id="create-ad-popup" class="overlay">
                                <div class="popup" id="admin-popup">
                                    <a class="close" onClick="hideCreateAdminForm()">×</a>
                                    <form action="<?php echo URL_ROOT . '/Admins/createAdmin'; ?>" method="POST">
                                        <div class="create-ad">
                                            <div>
                                               <h3 class="subtitle center">Enter Admin Info and Initial Login Credentials</h3> 
                                            </div>
                                            <div class="inputBx2" id="">
                                                <input name="name" id="name" type="text" value="">
                                                <span class="normalB">Admin Name</span>
                                            </div>
                                            <div class="inputBx2" id="">
                                                <input name="email" id="email" type="text" value="">
                                                <span class="normalB">Admin Email</span>
                                            </div>
                                            <div class="inputBx2" id="">
                                                <input name="password" id="password" type="text" value="">
                                                <span class="normalB">Initial Password</span>
                                            </div>
                                            <div class="ad-form-action">
                                                <a onClick="hideCreateAdminForm()" class="ad-form-btn normalB" id="create-admin-close">Cancel</a>
                                                <input type="submit" id="create-admin" class="ad-form-btn normalB" value="Create">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="table-wrapper">
                                <table class="fl-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th>Admin ID</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Joined Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data["allAdmins"] as $item) { ?>
                                            <tr>
                                                <td><?php echo $item->ad_id; ?></td>
                                                <td class="cell-nav"><a href=""><?php echo $item->ad_name; ?></a></td>
                                                <td><?php echo $item->ad_mobile; ?></td>
                                                <td><?php echo $item->email; ?></td>
                                                <td><?php echo $item->joined_date; ?></td>
                                            </tr>
                                        <?php } ?>
                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <!-- Profile Requests -->
            <section class="page-content" id="req-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Profile Requests</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                    </div>
                    </section>

                    <div class="opportunities" id="opportunities" style="display:flex; flex-direction: column;">
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr class="table-head">
                                    <th><input type="checkbox" name="">All</th>
                                    <th>ID</th>
                                    <th id="col-desc" style="width: 150px">Name</th>
                                    <th>Email</th>
                                    <th>District</th>
                                    <th>Area</th>
                                    <th>Request Date</th>
                                    <th>Action</th>
                                    <!-- <th></th> -->
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["pendRequests"] as $item) { ?>
                                        <tr>
                                            <td><input type='checkbox' name='pendRequests' value='<?php echo $item->org_id; ?>'></td>
                                            <td><?php echo $item->org_id; ?></td>
                                            <td id="col-desc" style="width: 150px" class="cell-nav"><a onClick="showOrgDetailsOverlay(<?php echo $item->org_id; ?>)"><?php echo $item->org_name; ?></a></td>
                                            <td><?php echo $item->email; ?></td>
                                            <td><?php echo $item->org_district; ?></td>
                                            <td><?php echo $item->org_area; ?></td>
                                            <td><?php echo $item->req_date; ?></td>
                                            <td class="action-col">
                                                <a onClick="showApproveReqOverlay(<?php echo $item->org_id; ?>)" class="green-btn cell-btn" id="cell-btn">Approve</a>
                                                <a onClick="showRejectReqOverlay(<?php echo $item->org_id; ?>)" class="grey-btn cell-btn">Reject</a>
                                            </td>
                                            

                                            <!-- View Organization Details -->
                                            <div id="org-details<?php echo $item->org_id; ?>" class="overlay">
                                                <div class="details-popup">
                                                <h2 class="heading2B">Organization Details </h2>
                                                <a class="close" onClick="hideOrgDetailsOverlay(<?php echo $item->org_id; ?>)">×</a>
                                                <form action="<?php echo URL_ROOT; ?>/AdminDashboard/getPendingRequests" method="GET" enctype="multipart/form-data"> 
                                                    <div class="content">
                                                             <div class="box"> 
                                                             <h2 class="heading2B">DashBoard</h2>

                                                             <div class="column">
                                                                    <div class="row">
                                                                        <b>Organization Name :</b>
                                                                        <?php echo $item->org_name; ?><br><br>
                                                                
                                                                        <b> Location : </b> 
                                                                        <?php echo $item->org_district; ?> <br><br>
                                                                    </div>
                                                        
                                                                    <div class="row">
                                                                        <b>Account Status : </b> 
                                                                        <?php echo $item->account_status; ?>
                                                                    </div> <br>
                                                            </div> <br>
                                                                <h3> Contact Information </h3>

                                                                <div class="row1">
                                                                    <div class="column1">
                                                                        <b> Address :</b>
                                                                        <?php echo $item->org_address1 ?> <br> <br>
                                                                        <b> City : </b>
                                                                        <?php echo $item->org_district ?> <br><br>
                                                                        <b> District : </b>
                                                                        <?php echo $item->org_district ?> <br><br>
                                                                        <b>Mobile No : </b>
                                                                        <?php echo $item->org_mobile ?> <br><br>
                                                                        <b>Landline : </b>
                                                                        <?php echo $item->org_landline ?> <br><br>
                                                                        <b>Email Address : </b>
                                                                        <?php echo $item->email ?> <br><br>
                                                                        <b>Animal in Care : </b>
                                      
                                                                    </div>
                                                                    <div class="column2">
                                                                        <b> Registered Email : </b>
                                                                        <?php echo $item->email ?> <br><br>
                                                                        <b> Registered Date : </b>
                                                                        <?php echo $item->req_date ?> <br><br>
                                                                        <b> Responding to animals reported : </b>
                                                                        <?php echo $item->if_findhelp ?> <br><br>
                                                                        <b> Website Link : </b>
                                                                        <?php echo $item->org_website ?> <br><br>
                                                                        <b> Facebook Page Link : </b>
                                                                        <?php echo $item->org_facebook ?> <br><br>

                                                                        <b> Instagram ID : </b>
                                                                        <?php echo $item->org_insta ?> <br><br>
                                                                        <b> Supporting Documents : </b>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                         <br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br>
                                                        <div class="ov-actions">
                                                           
                                                            <input type="submit" id="approve1" class="green-btn" value="Approve">
                                                            <input type="submit" id="reject1" class="red-btn" value="Reject">
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>

                                            <!-- Approval Popup -->
                                            <div id="req-popup<?php echo $item->org_id; ?>" class="overlay">
                                                <div class="popup">
                                                <h2 class="heading2B">Approve Project</h2>
                                                <a class="close" onClick="hideApproveReqOverlay(<?php echo $item->org_id; ?>)">×</a>
                                                <form action="<?php echo URL_ROOT . '/Organizations/approveOrganization/' . $item->org_id; ?>" method="GET">
                                                    <div class="content">
                                                        <p class="subtitle">Are you sure that you want to Approve <?php echo $item->org_name; ?> the organization with ID <?php echo $item->org_id; ?> in <?php echo SITE_NAME; ?>?</p>
                                                        <div class="ov-actions">
                                                            <a onClick="hideApproveReqOverlay(<?php echo $item->org_id; ?>)" class="grey-btn">Cancel</a>
                                                            <input type="submit" id="approve" class="green-btn" value="Approve">
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            <!-- Reject Popup -->
                                            <div id="req-rej-popup<?php echo $item->org_id; ?>" class="overlay">
                                                <div class="popup">
                                                <h2 class="heading2B">Reject Project</h2>
                                                <a class="close" onClick="hideRejectReqOverlay(<?php echo $item->org_id; ?>)">×</a>
                                                <form action="<?php echo URL_ROOT . '/Organizations/rejectOrganization/' . $item->org_id; ?>" method="GET">
                                                    <div class="content">
                                                        <p class="subtitle">Are you sure that you want to reject <?php echo $item->org_name; ?>'s  organization request with ID <?php echo $item->org_id; ?> in <?php echo SITE_NAME; ?>?</p>
                                                        <div class="ov-actions">
                                                            <a onClick="hideRejectReqOverlay(<?php echo $item->org_id; ?>)" class="grey-btn">Cancel</a>
                                                            <input type="submit" id="reject" class="red-btn" value="Reject">
                                                        </div>
                                                    </div>
                                                </form>
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

            <!-- Projects Section -->
            <section class="page-content" id="ad-proj-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Welfare Projects</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                        <div class="prj-btn">
                            <a class="" id="view-pend-prj-btn" onClick="showPendProjects()" style="display: none;">Pending</a>
                            <a class="" id="view-all-prj-btn" onClick="showAllProjects()">View All</a>
                        </div>
                    </div>
                    </section>

                    <!-- Initial display -->
                    <div class="opportunities" id="all-pend-prj">
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr class="table-head">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th id="col-desc" style="width: 150px">Cause</th>
                                    <th>Create Date</th>
                                    <th id="col-desc" style="width: 130px">Organization</th>
                                    <th>Volunteering</th>
                                    <th>Fundraising</th>
                                    <th>Initiation Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["pendProjects"] as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->proj_id; ?></td>
                                            <td class="cell-nav"><a onClick="showPendProjOverlay(<?php echo $item->proj_id; ?>)"><?php echo $item->proj_title; ?></a></td>
                                            <td id="col-desc" style="width: 150px"><?php echo $item->proj_cause; ?></td>
                                            <td><?php echo $item->proj_create; ?></td>
                                            <td id="col-desc" style="width: 130px"><?php echo $item->org_name; ?></td>
                                            <td>
                                                <?php if($item->volunteering == 'True') {
                                                    echo '<span class="green">Available</span>';
                                                } else{
                                                    echo '<span class="red">Not Available</span>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php if($item->fundraising == 'True') {
                                                    echo '<span class="green">Available</span>';
                                                } else{
                                                    echo '<span class="red">Not Available</span>';
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $item->proj_init; ?></td>
                                            <!-- <td>
                                                <a onClick="showApproveOverlay(<?php echo $item->proj_id; ?>)" class="green-btn cell-btn" id="cell-btn">Approve</a>
                                                <a onClick="showRejectOverlay(<?php echo $item->proj_id; ?>)" class="grey-btn cell-btn">Reject</a>
                                            </td> -->
                                            <!-- <td><label class="row-dd"><i class="fas fa-ellipsis-v"></i>
                                                <div id="dropdown<?php echo $item->id; ?>" class="dropdown">
                                                    <a href="#">Welfare Projects</a>
                                                    <a href="#">Animals Reported</a>
                                                    <a href="#">Adoption</a>
                                                    <a href="#">Sposorships</a>
                                                </div>
                                            </label></td> -->

                                            <!-- Project Details Popup -->
                                            <div id="pend-prj-det-popup<?php echo $item->proj_id; ?>" class="overlay">
                                                <div class="popup" id="pend-proj-popup">
                                                    <a class="close" onClick="hidePendProjOverlay(<?php echo $item->proj_id; ?>)">×</a>
                                                    <div class="pend-proj-content">
                                                        <div class="pend-proj-col">
                                                            <div class="pend-proj-row">
                                                                <div class="proj-img">
                                                                    <img src="<?php echo (URL_ROOT.'/public/'.$item->proj_image); ?>" alt="project image">
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <p id="pend-prj-title" class="subtitleB"><?php echo $item->proj_title; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-cause" class="normalB">Cause:</label>
                                                                    <p id="pend-prj-cause" class="normal"><?php echo $item->proj_cause; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-org" class="normalB">Organization:</label>
                                                                    <p id="pend-prj-org" class="normal"><?php echo $item->org_name; ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="pend-proj-row">
                                                                <h3 class="subtitleB">Fundraiser Details</h3>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-amnt" class="normalB">Target Amount:</label>
                                                                    <p id="pend-prj-amnt" class="normal"><?php echo $item->target_amount; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-fund-for" class="normalB">Funds for:</label>
                                                                    <p id="pend-prj-fund-for" class="normal"><?php echo $item->funds_for; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-fund-start" class="normalB">Start Fundraising on:</label>
                                                                    <p id="pend-prj-fund-start" class="normal"><?php echo $item->funding_start; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-fund-end" class="normalB">End Fundraising on:</label>
                                                                    <p id="pend-prj-fund-end" class="normal"><?php echo $item->funding_end; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>                          
                                                        <div class="pend-proj-col" id="">
                                                            <h3 class="subtitleB">Volunteer Details</h3>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-vol-for" class="normalB">Volunteers for:</label>
                                                                <p id="pend-vol-for" class="normal"><?php echo $item->vol_reason; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-desc" class="normalB">Description:</label>
                                                                <p id="pend-prj-vol-desc" class="normal"><?php echo $item->vol_desc; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-loc" class="normalB">Location:</label>
                                                                <p id="pend-prj-vol-loc" class="normal"><?php echo $item->vol_area.', '.$item->vol_district; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-start" class="normalB">Work start:</label>
                                                                <p id="pend-prj-vol-start" class="normal"><?php echo $item->work_start; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-end" class="normalB">Work ends:</label>
                                                                <p id="pend-prj-vol-end" class="normal"><?php echo $item->work_end; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-open" class="normalB">Applications opens:</label>
                                                                <p id="pend-prj-vol-open" class="normal"><?php echo $item->app_open; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-close" class="normalB">Applications closes:</label>
                                                                <p id="pend-prj-vol-close" class="normal"><?php echo $item->app_close; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-req" class="normalB">Requirements:</label>
                                                                <p id="pend-prj-vol-req" class="normal"><?php echo $item->vol_req; ?></p>
                                                            </div>
                                                            <span class="normal purple"><a href="<?php echo URL_ROOT . '/Projects/projectView/'.$item->proj_id; ?>" class="">Click here </a> to view complete project</span>
                                                            <div class="pend-proj-action">
                                                                <a onClick="showRejectOverlay(<?php echo $item->proj_id;?>)" id="reject">Reject</a>
                                                                <a onClick="showApproveOverlay(<?php echo $item->proj_id;?>)" id="approve">Approve</a>
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Approval Popup -->
                                            <div id="app-prj-popup<?php echo $item->proj_id; ?>" class="overlay">
                                                <div class="popup">
                                                <h2 class="heading2B">Approve Project</h2>
                                                <a class="close" onClick="hideApproveOverlay(<?php echo $item->proj_id; ?>)">×</a>
                                                <form action="<?php echo URL_ROOT . '/Projects/approveProject/' . $item->proj_id; ?>" method="GET">
                                                    <div class="content">
                                                        <p class="subtitle">Are you sure that you want to allow <?php echo $item->org_name; ?> to carry out the project with ID <?php echo $item->proj_id; ?> in <?php echo SITE_NAME; ?>?</p>
                                                        <div class="ov-actions">
                                                            <a onClick="hideApproveOverlay(<?php echo $item->proj_id; ?>)" class="grey-btn">Cancel</a>
                                                            <input type="submit" id="approve" class="green-btn" value="Approve">
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            <!-- Reject Popup -->
                                            <div id="rej-prj-popup<?php echo $item->proj_id; ?>" class="overlay">
                                                <div class="popup">
                                                <h2 class="heading2B">Reject Project</h2>
                                                <a class="close" onClick="hideRejectOverlay(<?php echo $item->proj_id; ?>)">×</a>
                                                <form action="<?php echo URL_ROOT . '/Projects/rejectProject/' . $item->proj_id; ?>" method="GET">
                                                    <div class="content">
                                                        <p class="subtitle">Are you sure that you want to reject <?php echo $item->org_name; ?>'s request to carry out the project with ID <?php echo $item->proj_id; ?> in <?php echo SITE_NAME; ?>?</p>
                                                        <div class="ov-actions">
                                                            <a onClick="hideRejectOverlay(<?php echo $item->proj_id; ?>)" class="grey-btn">Cancel</a>
                                                            <input type="submit" id="reject" class="red-btn" value="Reject">
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </tr>
                                    <?php } ?>
                                <tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View All display -->
                    <div class="opportunities" id="all-prj">
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr class="table-head">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th id="col-desc" style="width: 150px">Cause</th>
                                    <th>Status</th>
                                    <th id="col-desc" style="width: 130px">Organization</th>
                                    <th>Volunteering</th>
                                    <th>Fundraising</th>
                                    <th>Initiation Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["allProjects"] as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->proj_id; ?></td>
                                            <td class="cell-nav"><a onClick="showProjOverlay(<?php echo $item->proj_id; ?>)"><?php echo $item->proj_title; ?></a></td>
                                            <td id="col-desc" style="width: 150px"><?php echo $item->proj_cause; ?></td>
                                            <td><?php echo $item->proj_status; ?></td>
                                            <td id="col-desc" style="width: 130px"><?php echo $item->org_name; ?></td>
                                            <td>
                                                <?php if($item->volunteering == 'True') {
                                                    echo '<span class="green">Available</span>';
                                                } else{
                                                    echo '<span class="red">Not Available</span>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php if($item->fundraising == 'True') {
                                                    echo '<span class="green">Available</span>';
                                                } else{
                                                    echo '<span class="red">Not Available</span>';
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $item->proj_init; ?></td>

                                            <!-- Project Details Popup -->
                                            <div id="prj-popup<?php echo $item->proj_id; ?>" class="overlay">
                                                <div class="popup" id="pend-proj-popup">
                                                    <a class="close" onClick="hideProjOverlay(<?php echo $item->proj_id; ?>)">×</a>
                                                    <div class="pend-proj-content">
                                                        <div class="pend-proj-col">
                                                            <div class="pend-proj-row">
                                                                <div class="proj-img">
                                                                    <img src="<?php echo (URL_ROOT.'/public/'.$item->proj_image); ?>" alt="project image">
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <p id="pend-prj-title" class="subtitleB"><?php echo $item->proj_title; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-cause" class="normalB">Cause:</label>
                                                                    <p id="pend-prj-cause" class="normal"><?php echo $item->proj_cause; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-org" class="normalB">Organization:</label>
                                                                    <p id="pend-prj-org" class="normal"><?php echo $item->org_name; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-org" class="normalB">Project Status:</label>
                                                                    <p id="pend-prj-org" class="normal blue"><?php echo $item->proj_status; ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="pend-proj-row">
                                                                <h3 class="subtitleB">Fundraiser Details</h3>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-amnt" class="normalB">Target Amount:</label>
                                                                    <p id="pend-prj-amnt" class="normal"><?php echo $item->target_amount; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-fund-for" class="normalB">Funds for:</label>
                                                                    <p id="pend-prj-fund-for" class="normal"><?php echo $item->funds_for; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-fund-start" class="normalB">Start Fundraising on:</label>
                                                                    <p id="pend-prj-fund-start" class="normal"><?php echo $item->funding_start; ?></p>
                                                                </div>
                                                                <div class="pend-proj-field">
                                                                    <label for="pend-prj-fund-end" class="normalB">End Fundraising on:</label>
                                                                    <p id="pend-prj-fund-end" class="normal"><?php echo $item->funding_end; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>                          
                                                        <div class="pend-proj-col">
                                                            <h3 class="subtitleB">Volunteer Details</h3>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-vol-for" class="normalB">Volunteers for:</label>
                                                                <p id="pend-vol-for" class="normal"><?php echo $item->vol_reason; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-desc" class="normalB">Description:</label>
                                                                <p id="pend-prj-vol-desc" class="normal"><?php echo $item->vol_desc; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-loc" class="normalB">Location:</label>
                                                                <p id="pend-prj-vol-loc" class="normal"><?php echo $item->vol_area.', '.$item->vol_district; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-start" class="normalB">Work start:</label>
                                                                <p id="pend-prj-vol-start" class="normal"><?php echo $item->work_start; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-end" class="normalB">Work ends:</label>
                                                                <p id="pend-prj-vol-end" class="normal"><?php echo $item->work_end; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-open" class="normalB">Applications opens:</label>
                                                                <p id="pend-prj-vol-open" class="normal"><?php echo $item->app_open; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-close" class="normalB">Applications closes:</label>
                                                                <p id="pend-prj-vol-close" class="normal"><?php echo $item->app_close; ?></p>
                                                            </div>
                                                            <div class="pend-proj-field">
                                                                <label for="pend-prj-vol-req" class="normalB">Requirements:</label>
                                                                <p id="pend-prj-vol-req" class="normal"><?php echo $item->vol_req; ?></p>
                                                            </div>
                                                            <span class="normal purple"><a href="<?php echo URL_ROOT . '/Projects/projectView/'.$item->proj_id; ?>" class="">Click here </a> to view complete project</span>
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
            
            <!-- Payments Section -->
            <section class="page-content" id="pay-sec">
                <section>
                    <div class="content-head">
                        <h1 class="heading2B">Payments</h1>
                        <h3 class="normal"><?php echo date("d M Y");?></h3>
                    </div>
                    <div class="content-sub-head">
                    </div>
                    </section>

                    <!-- Initial display -->
                    <div class="opportunities" id="">
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr class="table-head">
                                    <th>Fundraiser ID</th>
                                    <th>Action</th>
                                    <th>Organization</th>
                                    <th id="col-desc" style="width: 150px">Project title</th>
                                    <th>Target Amount</th>
                                    <th>Raised Amount</th>
                                    <th>Fundraiser Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data["fundPayments"] as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->id; ?></td>
                                            <td class="cell-nav purple"><a onClick="showPayDetailsOverlay(<?php echo $item->id; ?>)">Update</a></td>
                                            <td><?php echo $item->org_name; ?></td>
                                            <td id="col-desc" style="width: 150px"><?php echo $item->title; ?></td>
                                            <td><?php echo $item->target_amount; ?></td>
                                            <td><?php echo $item->raised_amount; ?></td>
                                            <td><?php echo $item->fundraiser_status; ?></td>

                                            <!-- Pending Payments Popup -->
                                            <div id="pend-pay-popup<?php echo $item->id; ?>" class="overlay">
                                                <div class="popup" id="pend-pay-details">
                                                    <div class="pay-head">
                                                        <h1 class="subtitleB center"><?php echo $item->title; ?></h1>
                                                        <a class="close" onClick="hidePayDetailsOverlay(<?php echo $item->id; ?>)">×</a>
                                                    </div>
                                                    <div class="pay-det-cont">
                                                        <div class="pay-det-col">
                                                            <div class="pay-det-field">
                                                                <label for="" class="normalB">Fundraiser status:</label>
                                                                <p id="" class="normal green"><?php echo $item->fundraiser_status; ?></p>
                                                            </div>
                                                            <div class="pay-det-field">
                                                                <label for="" class="normalB">Organization:</label>
                                                                <p id="" class="normal"><?php echo $item->org_name; ?></p>
                                                            </div>
                                                            <div class="pay-det-field">
                                                                <label for="" class="normalB">Targeted amount:</label>
                                                                <p id="" class="normal"><?php echo $item->target_amount; ?></p>
                                                            </div>
                                                            <div class="pay-det-field">
                                                                <label for="" class="normalB">Raised amount:</label>
                                                                <p id="" class="normalB purple"><?php echo $item->raised_amount; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="pay-det-col">
                                                            <div class="pay-det-field">
                                                                <label for="" class="normalB">Account holder:</label>
                                                                <p id="" class="normal"><?php echo $item->account_holder; ?></p>
                                                            </div>
                                                            <div class="pay-det-field">
                                                                <label for="" class="normalB">Account No.:</label>
                                                                <p id="" class="normal"><?php echo $item->account_no; ?></p>
                                                            </div>
                                                            <div class="pay-det-field">
                                                                <label for="" class="normalB">Bank:</label>
                                                                <p id="" class="normal"><?php echo $item->bank; ?></p>
                                                            </div>
                                                            <div class="pay-det-field">
                                                                <label for="" class="normalB">Branch:</label>
                                                                <p id="" class="normal"><?php echo $item->branch; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pay-det-action">
                                                        <a onClick="hidePayDetailsOverlay(<?php echo $item->id; ?>)" class="" id="cancel-btn">Cancel</a>
                                                        <form action="<?php echo URL_ROOT . '/Projects/updateFundTransfer/' . $item->id; ?>" method="GET">
                                                            <input type="submit" id="done-btn" value="Payment Done">
                                                        </form>
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
