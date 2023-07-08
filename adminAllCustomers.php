<?php
    require("classes/Customer.php");
    $customer = new Customer();
    $allcustomers = $customer->fectchAllcustomers();
    //print_r($allcontacts);
?>

<?php
   require_once("partials/header1.php");
?>


    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped">
        <h1 class="text-center">All Customers</h1>
        <thead>
            <th>Serial Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
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
        
                foreach($allcustomers as $cust){
                    ?>
            
                    
                    <tr>
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $cust["cust_firstName"] ?></td>
                        <td><?php echo $cust["cust_lastName"] ?></td>
                        <td><a href='customerDetails.php?id=<?php echo $cust["cust_id"]?>' class="btn btn-outline-primary">View more details</a></td>
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