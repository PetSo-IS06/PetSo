<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile Request</title>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/orgDetail.css'>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css'/>
</head>

<body>
    
        <div class="box">
            <h2> DashBoard</h2> <br><br>
            <h3> Organizations</h3> <br>



            <div class="column">
                <div class="row">
                    <b>Organization Name</b>
                    <?php echo $data->org_name ?> <br>
            
                    <b> Location </b> <br>
                </div>
                <div class="row"> </div>
                <div class="row">
                    <b>Account Status </b> <br><br>
                </div> <br>
            </div> <br> <br>


           
            <h3> Contact Information </h3>

            <div class="row1">
                <div class="column1">
                    <b> Address</b>
                    <?php echo $data->org_address1 ?> <br> <br>
                    <b> City </b>
                    <?php echo $data->org_district ?> <br><br>
                    <b> District </b>
                    <?php echo $data->org_district ?> <br><br>
                    <b>Mobile No </b>
                    <?php echo $data->org_mobile ?> <br><br>
                    <b>Landline </b>
                    <?php echo $data->org_mobile ?> <br><br>
                    <b>Email Address </b>
                    <?php echo $data->org_email ?> <br><br>
                    <b>Animal in Care </b>
                    <?php echo $data->org_email ?><br>
                </div>
                <div class="column2">
                    <b> Registered Email </b>
                    <?php echo $data->org_insta ?> <br><br>
                    <b> Registered Date </b>
                    <?php echo $data->org_insta ?> <br><br>
                    <b> Responding to animals reported </b>
                    <?php echo $data->org_insta ?> <br><br>
                    <b> Website Link </b>
                    <?php echo $data->org_website ?> <br><br>
                    <b> Facebook Page Link </b>
                    <?php echo $data->org_facebook ?> <br><br>

                    <b> Instagram ID </b>
                    <?php echo $data->org_insta ?> <br><br>

                    <b> Supporting Documents </b>
                </div>
            </div>
        </div>

</body>

</html>