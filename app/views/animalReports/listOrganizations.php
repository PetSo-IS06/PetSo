<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/dashboard.css">
    <link rel="stylesheet" href="<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?> | Profile</title>
</head>
<body>
<div id="top-nav">
    <?php
    require APP_ROOT . '/views/components/topNavbar.php';
    ?>
</div>

<div id="body" class="pg-body">
    <section class="page-content" id="proj-sec" style="min-height: 75vh">
        <div class="opportunities" id="opportunities" style="display:flex; flex-direction: column;">
            <div class="table-wrapper">
                <table class="fl-table">
                    <thead>
                    <tr class="table-head" style="font-size: 20px">
                        <th>Organization name</th>
                        <th>Address</th>
                        <th>District</th>
                        <th>Area</th>
                        <th>Mobile</th>
                        <th>Telephone</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data["organizations"] as $item) { ?>
                    <tr>
                        <td style="font-size: 17px"><?php echo $item->org_name; ?></td>
                        <td style="font-size: 17px"><?php echo $item->org_address1; ?></td>
                        <td style="font-size: 17px"><?php echo $item->org_district; ?></td>
                        <td style="font-size: 17px"><?php echo $item->org_area; ?></td>
                        <td style="font-size: 17px"><?php echo $item->org_mobile; ?></td>
                        <td style="text-align: center">
                            <button class="blue-btn" href="<?php echo $item->org_mobile; ?>"> Call</button>
                        </td>
                        <td style="flex-direction: row;">
                            <button class="red-btn" href="<?php echo $item->org_email; ?>"> Email</button>
                        </td>
                        <!--                    <td><a href="-->
                        <?php //echo $item->org_email; ?><!--"> Email</a></td>-->

                        <!--                    <td>--><?php
                        //                        if(strcmp($item->status, 'Pending') == 0) {
                        //                            echo "<p class='red'>$item->status</p>";
                        //                        } elseif(strcmp($item->status, 'Ongoing') == 0) {
                        //                            echo "<p class='blue'>$item->status</p>";
                        //                        } elseif(strcmp($item->status, 'Completed') == 0) {
                        //                            echo "<p class='green'>$item->status</p>";
                        //                        }
                        //                        ?><!--</td>-->
                        <!--                    <td>--><?php
                        //                        if(strcmp($item->volunteering, 'True') == 0) {
                        //                            echo "<input type='checkbox' checked style='display: block;'>";
                        //                        } else {
                        //                            echo "<input type='checkbox'>";
                        //                        }
                        //                        ?><!--</td>-->
                        <!--                    <td>--><?php
                        //                        if(strcmp($item->fundraising, 'True') == 0) {
                        //                            echo "<input type='checkbox' checked>";
                        //                        } else {
                        //                            echo "<input type='checkbox'>";
                        //                        }
                        //                        ?><!--</td>-->
                        <!--                </tr>-->
                        <?php } ?>
                    <tbody>
                </table>
            </div>
        </div>
    </section>
</div>


<div id="footer">
    <?php
    require APP_ROOT . '/views/components/footer.php';
    ?>
</div>

</body>
<script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/userProfile.js"></script>
</html>
