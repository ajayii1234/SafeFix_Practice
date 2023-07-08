<?php

require_once("partials/header1.php");
require_once("classes/Customer.php");

 if(isset($_GET["id"])){
     $cust_id = $_GET["id"];

     if(empty("$cust_id")){
        header("location../index.php");
     }
     $user = new Customer();
     $users = $user->getUserDetails($cust_id);

//  echo "<pre>";
//      print_r($users);
//      "</pre>";

 }else{
     header("location:index.php");
     exit();
 }
?>


<h1>Customer Details</h1>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <p> First Name: <?php echo $users["cust_firstName"]?></p>
            <p> Last Name: <?php echo $users["cust_lastName"]?></p>
            <p> User Name: <?php echo $users["cust_userName"]?></p>
            <p> Email: <?php echo $users["cust_email"]?></p>
            <p> Phone Number: <?php echo $users["cust_phoneNumber"]?></p>
            <p> Gender: <?php echo $users["cust_gender"]?></p>
            <p> Address: <?php echo $users["cust_address"]?></p>
            <p> Date Joined: <?php echo $users["cust_created"]?></p>
            </div>
            <div class="col-md-6">
        </div>
    </div>


<?php
require_once("partials/footer.php");
?>