<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div id="body" class="pgbody">
    <div>
        <tbody>
        <?php foreach ($data["projects"] as $item) { ?>
            <tr>
                <td><input type='checkbox' name='selectedProject' value='<?php echo $item->id; ?>'></td>
                <td><?php echo $item->district; ?></td>
                <!--            <td>--><?php //echo $item->id; ?><!--</td>-->
                <!--            <td>--><?php //echo $item->title; ?><!--</td>-->
                <!--            <td>--><?php //echo $item->cause; ?><!--</td>-->
                <!--            <td>--><?php //echo $item->create_date; ?><!--</td>-->
                <!--            <td>--><?php //echo $item->initiation_date; ?><!--</td>-->
                <!--            <td>--><?php
                //                if(strcmp($item->status, 'Pending') == 0) {
                //                    echo "<p class='red'>$item->status</p>";
                //                } elseif(strcmp($item->status, 'Ongoing') == 0) {
                //                    echo "<p class='blue'>$item->status</p>";
                //                } elseif(strcmp($item->status, 'Completed') == 0) {
                //                    echo "<p class='green'>$item->status</p>";
                //                }
                //                ?><!--</td>-->
                <!--            <td>--><?php
                //                if(strcmp($item->volunteering, 'True') == 0) {
                //                    echo "<input type='checkbox' checked style='display: block;'>";
                //                } else {
                //                    echo "<input type='checkbox'>";
                //                }
                //                ?><!--</td>-->
                <!--            <td>--><?php
                //                if(strcmp($item->fundraising, 'True') == 0) {
                //                    echo "<input type='checkbox' checked>";
                //                } else {
                //                    echo "<input type='checkbox'>";
                //                }
                //                ?><!--</td>-->
            </tr>
        <?php } ?>


    </div>
</div>

<div id="footer">
    <?php
    require APP_ROOT . '/views/components/footer.php';
    ?>
</div>
</body>
<script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/userProfile.js"></script>
</html>
