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
        <div class="box"> <br>
      <h2>Organization Pending Requests</h2> 
        <table>
            <thead>
                <tr>
                    <th>Organization Name</th> 
                    <th>Approve</th> 
                    <th>Reject</th>   
                    <th>Details</th>
                    
                </tr>
            </thead>
            <tbody> <br>
            <?php
                foreach ($data as $value) {
                    $name = $value->org_name;

                    $url = URL_ROOT."/users/OrgDetails";


                 echo "<tr>";
               echo "<td> $value->org_name </td>"; 
                echo "<td>
                <form action='http://localhost/PetSo/users/adminViewPendingRequest' method='POST'>
                    <button type='submit' class='btn-approve' name='approve'>
                       Approve
                    </button>
                    </form>
                     </td>";
                    
               echo "<td>
               <form action='http://localhost/PetSo/users/adminViewPendingRequest' method='POST'>
                    <button type='submit' class='btn-reject' name='reject'>
                        Reject
                    </button>
                </form>
                </td>";
               echo "<td>
               <a href='$url'> Details</a>
                </td>";
                echo "</tr>";
              }

            ?>   
        </tbody>  
            </table>
    </div>
        </center>
    </body>
</html>
