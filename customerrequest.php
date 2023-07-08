<?php


require_once("partials/header1.php");
require("classes/Request.php");
    $repairer = new Request();
    if(isset($_GET['id'])){
        $repairer_id = $_GET['id'];
    }
 
   // echo $repairer_id . " hello";
$customer_id = $_SESSION["cust_id"];

?>
<div class="container-fluid bg-white">

    <div class="row">
        
        <div class="col-md-3"></div>

          <div class="col-md-6  bg-primary py-3 my-5 px-5 form" style="border-radius: 20px;">
            <h1 class="text-center text-white">Repair Request Form</h1>
            <?php
                  if(isset($_SESSION["cust_id"])){

                ?>
            <form action="process/processrequest.php" method="POST" py-5 px-5>
                <?php
                if(isset($_SESSION["sum_form_error"])){
                echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
                unset($_SESSION["sum_form_error"]);
                }
                ?>
            <div class="mb-3 row">
            <input type="hidden" name="repairer_id" value="<?php echo $repairer_id;?>">  
            <input type="hidden" name="customer_id" value="<?php echo $customer_id;?>">

                                        <label for="phone" class="col-4"><br>Phone Type</label>
                                        <div class="col-8">
                                        <input type="text" id="phone" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                      <label for="description" class="col-4"><br>Problem Description</label>
                                      <div class="col-8">
                                      <textarea type="text" id="description" name="description" class="form-control"></textarea>
                                      </div>
                                  </div>

                                  <div class="mb-3 row">
                                      <label for="location" class="col-4"><br>Preferrable location</label>
                                      <div class="col-8">
                                      <input type="text" id="location"  name="location" class="form-control">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="date" class="col-4"><br>Preferrable date</label>
                                      <div class="col-8">
                                      <input type="date" id="date"  name="date" class="form-control">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="time" class="col-4"><br>Preferrable time</label>
                                      <div class="col-8">
                                      <input type="text" id="time"  name="time" class="form-control">
                                      </div>
                                  </div>

                                  <input type="submit" name="button" id="button" class="btn btn-danger btn-lg">
            </form>
            <?php   
                  }
                ?>
        </div>
        <div class="col-md-3"></div> 
    </div> 
</div>



<?php
require_once("partials/footer.php");
?>