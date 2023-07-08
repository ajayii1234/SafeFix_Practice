<?php

  require_once("partials/header1.php");

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
            <span><i>Repairer From <?php echo date("d-m-y", strtotime($user["cust_created"]))?></i></span>
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
       <h2 class="text-center">Edit Profile</h2>
       <form action="process/processcustomerupdate.php" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="emailHelp" value="<?php //echo $user["user_fullname"];?>">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="emailHelp" value="<?php //echo $user["user_fullname"];?>">
            </div>
            
            <button type="submit" class="btn btn-danger" name="updatebtn">Update Profile</button>
       </form>
       
      </div>
    </div>
  </div>

 
</div>
</div>
      
    <?php
      require_once("partials/footer.php");
    ?>