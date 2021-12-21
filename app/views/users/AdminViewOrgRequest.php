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
                    <th>Organization Name</th> 
                    <th>Approve</th> 
                    <th>Reject</th>   
                    <th>Details</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($data as $value) {
                    $name = $value->org_name;
                 echo "<tr>";
               echo "<td> $value->org_name </td>"; 
                echo "<td>
                    <button type='submit' class='btn-approve'>
                       Approve
                    </button>
                     </td>";
                    
               echo "<td>
                    <button type='submit' class='btn-reject'>
                        Reject
                    </button>
                </td>";
               echo "<td>
                    <a href> Details</a>
                </td>";
                echo "</tr>";
              }
            // print_r($data)

            ?>   
        </tbody>  
            </table>
    </div>
        </center>
    </body>
</html>
