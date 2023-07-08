
<?php

  require_once("partials/header1.php");
  //require_once("guard/customerguard.php");

  require_once("classes/Customer.php"); //to get the details of the user

$cust_id = $_SESSION["cust_id"];

$userone = new Customer();
$user = $userone->getUserDetails($cust_id);

//print_r($user);
//die();

?>
   
   <div class="container">
    
    <div class="row" style="background-color: #D1D4C9;">
  
    <div class="col-md-3 mb-4">
    <div class="card mb-4" style="border-radius: 20px;">
      <div class="card-header py-3" style="border-radius: 20px;">
        <h5 class="mb-0">Profile</h5>
      </div>
      <div class="card-body">
       <div class="row">
        <div class="col-12">
            <div class="text-center mb-3">
                
                <img src='<?php echo "process/".$user["cust_image"]; ?>' class="img-fluid rounded-circle">

            </div>
             
            <hr>
             <div>
             <span><b><?php echo $user["cust_firstName"]." " .$user["cust_lastName"];?></b></span>
            <span><i>Customer From <?php echo date("d-m-y", strtotime($user["cust_created"]))?></i></span>
        </div> 
        </div>

      
       </div>
      </div>
    </div>
  </div>


  <div class="col-md-9 mb-4">
    <div class="card mb-4" style="border-radius: 20px;">
      <div class="card-header py-3" style="border-radius: 20px;">
      <h5 class="mb-0">Welcome <?php echo $user["cust_firstName"]." ".$user["cust_lastName"];?></h5>
      </div>
      <div class="card-body" style="min-height:200px">
       <p>You can use the navigation at the top of the page to move around the site and the navigations below to carry out tasks on the platform</p>
       <p><a href="customerEditProfile.php" style="text-decoration:none;">Edit My Profile</a></p>
       <p><a href="AdminAllRepairers.php" style="text-decoration:none;">View All Repairers</a></p>
       <p><a href='viewrepairermsg.php?id=<?php echo $user["cust_id"]; ?>' target="_blank" style="text-decoration:none;">Messages</a></p>
        <p><a href="changepassword.php" style="text-decoration:none;">Change Password</a></p>
       
        <form action="process/processlogout.php" method="POST">
    <input type="submit" value="Log Out" name="logoutbtn" id="logoutbtn" class="btn btn-danger">
    </form>
     
    </div>
    </div>
  </div>

 
</div>
</div>
      
    <?php
      require_once("partials/footer.php");
    ?>