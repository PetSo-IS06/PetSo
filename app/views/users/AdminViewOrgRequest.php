<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Organizataion Profile Request</title>
        <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/AdminViewOrgRequest.css'/> 
       
    </head>
    <body background="<?php echo URL_ROOT; ?>/public/assets/img/bg.png">  <center>
        <div class="box">
      <h2>Organization Pending Requests</h2> <br>
        <table>
            <thead>
                <tr>
                    <th>Organization Name</th> <th></th>
                    <th>Approve</th> <th></th>
                    <th>Reject</th> <th></th>   
                    <th>Details</th> <th></th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
                // foreach ($data as $value) {
                    // $name = $value['org_name'];
                //   echo "$name";
            //   }
            print_r($data)

            ?>

             
            <tr>
                <td> Adopties.lk </td> <td></td>
    
                <td>
                    <button type="submit" class="btn-approve">
                        Approve
                    </button>
                    
                </td> <td></td>
                <td>
                    <button type="submit" class="btn-reject">
                        Reject
                    </button>
                </td> <td></td>
                <td>
                    <a href> Details</a>
                </td>
            </tr>
        </tbody>  

        <tbody>
             
            <tr>
                <td> Paw Prints </td> <td></td>
    
                <td>
                    <button type="submit" class="btn-approve">
                        Approve
                    </button>
                    
                </td> <td></td>
                <td>
                    <button type="submit" class="btn-reject">
                        Reject
                    </button>
                </td> <td></td>
                <td>
                    <a href> Details</a>
                </td>
            </tr>
        </tbody>  

        <tbody>
             
            <tr>
                <td> Embark </td> <td></td>
    
                <td>
                    <button type="submit" class="btn-approve">
                        Approve
                    </button>
                    
                </td> <td></td>
                <td>
                    <button type="submit" class="btn-reject">
                        Reject
                    </button>
                </td> <td></td>
                <td>
                    <a href> Details</a>
                </td>
            </tr>
        </tbody>  
        </table>
    </div>
        </center>
    </body>
</html>
