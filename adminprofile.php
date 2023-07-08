<?php
require_once("partials/header1.php");
//require_once("guard/adminguard.php");
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
                <img src="assets/images/dp.jpg" class="img-fluid rounded-circle">
            </div>
             <div class="col-12 text-center">
            <!-- <button type="button" class="btn btn-primary btn-block btn-sm">
          
        </button> -->
       </div>
            <hr>
            <div>
            <!-- <span><b>Oluwaseun Ibukun</b></span>
            <span><i>Member Since Jan 20th , 2023</i></span> -->
        </div>
        </div>

      
       </div>
      </div>
    </div>
  </div>

  <div class="col-md-9 mb-4">
    <div class="card mb-4" style="border-radius: 20px;">
      <div class="card-header py-3" style="border-radius: 20px;">
        <h5 class="mb-0">Welcome Admin</h5>
      </div>
      <div class="card-body" style="min-height:200px">
       <p>You can use the navigation at the top of the page to move around the site and the navigations below to carry out tasks on the platform</p>
     
        <p><a href="adminAllCustomers.php" target="_blank" style="text-decoration:none;">View all Customers</a></p>
        <p><a href="allrepairers.php" target="_blank" style="text-decoration:none;">View all Repairers</a></p>
        <p><a href="adminAddRepairParts.php" target="_blank" style="text-decoration:none;">Add Repair Parts</a></p>
        <p><a href="adminAllParts.php" target="_blank" style="text-decoration:none;">View all phone repair parts</a></p>
        
        <p><a href="adminAllFeedbacks.php" target="_blank" style="text-decoration:none;">View all Ratings</a></p>

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