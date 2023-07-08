<?php
    require("classes/Feedback.php");
    $feedback = new Feedback();
    $allfeedbacks = $feedback->fectchfeedback();
    //print_r($allcontacts);
?>

<?php
   require_once("partials/header1.php");
?>


    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped">
        <h1 class="text-center">All Feedbacks</h1>
        <thead>
            <th>Serial Number</th>
            <th>Feedback</th>
            <th>Rating</th>
            <th>Customer id</th>
            <th>Customer name</th>
            <th>Repairer id</th>
            <th>Date created</th>
            <!-- <th>Username</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Address</th>
            <th>State</th> -->
        </thead>

        <tbody>
            <?php
            $sn = 1;
        
                foreach($allfeedbacks as $feed){
                    ?>
            
                    
                    <tr>
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $feed["feedbacks"] ?></td>
                        <td><?php echo $feed["rating"] ?></td>
                        <td><?php echo $feed["customer_id"] ?></td>
                        <td><?php echo $feed["customer name"] ?></td>
                        <td><?php echo $feed["repairer_id"] ?></td>
                        <td><?php echo $feed["date_created"] ?></td>
                        
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