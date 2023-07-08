<?php
    require("classes/Request.php");
    //require("classes/Repairerchat.php");
    $repairer = new Request();
    //$chat = new Repairerchat();
    //$newchat = $chat->getrepairermessages($customers);
    //$allrepairers = $repairer->getCustomerRequest($repairer);
   
    //$repairer_id = $_SESSION["cust_id"];
    if(isset($_GET['id'])){
        $repairer_id = $_GET['id'];
    }
    //echo "Hello .... $repairer_id";
    $custrepairers = $repairer->getCustomerRequest($repairer_id);

    $result = $_SESSION["cust_id"];
?>
 
<?php
  require_once("partials/header1.php");
?>


    <div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Customer Request Details</h1>
    <table class="table table-striped">
        <thead>
            <th>Serial Number</th>
            <th>Device Type</th>
            <th>Description</th>
            <th>Location</th>
            <th>Customer Name</th>
            <th>Request Date</th>
            <th>Request Time</th>
            <th>Action</th>
        </thead>

        <tbody>

            <?php

        $sn = 1;
                foreach($custrepairers as $repair){
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
                            <td><?php echo $repair["request_device_type"] ?></td>
                            <td><?php echo $repair["request_problem_description"] ?></td>
                            <td><?php echo $repair["request_location"] ?></td>
                            <td><?php echo $repair["customer name"] ?></td>
                            <td><?php echo $repair["request_date"] ?></td>
                            <td><?php echo $repair["request_time"] ?></td>
                            <td><a href='repairerchatmessage.php?id=<?php echo $repair["cust_id"] ?>' class="btn btn-primary" style="text-decoration:none;">Message</a></td>
                            
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