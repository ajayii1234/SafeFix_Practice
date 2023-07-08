<?php
    require("classes/Customer.php");
    $repairer = new Customer();
    $allrepairers = $repairer->fectchAllrepairers();
    //print_r($allcontacts);

?>

<?php
  require_once("partials/header1.php");
?>


    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <th>Serial Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
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
                foreach($allrepairers as $repair){
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
                            <td><?php echo $repair["cust_firstName"] ?></td>
                            <td><?php echo $repair["cust_lastName"] ?></td>
                            <td><a href='repairerDetails.php?id=<?php echo $repair["cust_id"]?>' class="btn btn-outline-primary">View more details</a></td>
                            <td>
                                <form action="#" method="post" style="display: inline-block;">
                                <input type="hidden" name="delete_user" value="1">
                                <button type="submit" class="btn btn-outline-primary">Delete User</button>
                                </form>
                            </td>
                            
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