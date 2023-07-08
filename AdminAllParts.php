<?php
    require("classes/Parts.php");
    $part = new Parts();
    $allparts = $part->fectchAllparts();
    //print_r($allparts);
?>

<?php
  require_once("partials/header1.php");
?>


    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <th>Serial Number</th>
            <th>Part Name</th>
            <th>Part Price</th>
        
            <!-- <th>Username</th>
            <th>Business Name</th>
            <th>Business Address</th>
            <th>Specialization</th>
            <th>Years of Experience</th>
            <th>Personal email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Home Address</th>
            <th>State</th> -->
        </thead>

        <tbody>

            <?php

        $sn = 1;
                foreach($allparts as $part){
                    ?>
            
                    <!-- echo "<tr>";
                    echo "<td>". $sn++ . "</td>";
                        echo "<td>".$repair["rep_firstName"]   ."</td>";
                        echo "<td>".$repair["rep_lastName"]   ."</td>";
                        echo "<td>".$repair["rep_userName"]   ."</td>";
                        echo "<td>".$repair["rep_BusinessName"]   ."</td>";
                        echo "<td>".$repair["rep_BusinessAddr"]   ."</td>";
                        echo "<td>".$repair["rep_specialization"]   ."</td>";
                        echo "<td>".$repair["rep_yearsOfExp"]   ."</td>";
                        echo "<td>".$repair["rep_email"]   ."</td>";
                        echo "<td>".$repair["rep_phoneNumber"]   ."</td>";
                        echo "<td>".$repair["rep_gender"]   ."</td>";
                        echo "<td>".$repair["rep_homeAddress"]   ."</td>";
                        echo "<td>".$repair["rep_state"]   ."</td>";
                    
                    echo "</tr>"; -->

                        <tr>
                            <td><?php echo $sn++ ?></td>
                            <td><?php echo $part["part_name"] ?></td>
                            <td><?php echo $part["part_price_Naira"] ?></td>
                            <!-- <td><a href="repairerDetails.php?">View more details</a> </td> -->
                        </tr>

                    <?php
                }


            ?>
        </tbody>
</table>
            </div>
            </div>

 <?php
  require_once("partials/footer.php");
?>