<?php
    require("classes/Feedback.php");
    $repairer = new Feedback();
    //$allrepairers = $repairer->getCustomerRequest($repairer);
   
    //$repairer_id = $_SESSION["cust_id"];
    if(isset($_GET['id'])){
        $repairer_id = $_GET['id'];
    }
    //echo "Hello .... $repairer_id";
    $custrepairers = $repairer->getCustomerfeedbacks($repairer_id);
?>
 
<?php
  require_once("partials/header1.php");
?>


    <div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Feedbacks</h1>
    <table class="table table-striped">
        <thead>
            <th>Serial Number</th>
            <th>Feedback</th>
            <th>Rating</th>
            <th>Customer Name</th>
            
            
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
                            <td><?php echo $repair["feedbacks"] ?></td>
                            <td><?php echo $repair["rating"] ?></td>
                            <td><?php echo $repair["customer name"] ?></td>
                            
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