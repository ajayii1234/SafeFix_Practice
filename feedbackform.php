<?php

require_once("partials/header1.php");
require("classes/Feedback.php");
    $repairer = new Feedback();
    if(isset($_GET['id'])){
        $repairer_id = $_GET['id'];
    }
 
   // echo $repairer_id . " hello";
$customer_id = $_SESSION["cust_id"];

?>


<div class="container-fluid bg-white">

    <div class="row">
        
        <div class="col-md-3"></div>

        <div class="col-md-6  bg-primary py-5 my-5 px-5 form" style="border-radius: 20px;">
            <h1 class="text-center text-white">Leave a Review</h1>
           
            <form action="process/processfeedback.php" method="POST" py-5 px-5>
                <?php
                if(isset($_SESSION["sum_form_error"])){
                echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
                unset($_SESSION["sum_form_error"]);
                }
                ?>
            <div class="mb-3 row">
                                        <label for="text" class="col-4"><br>Feedback</label>
                                        <div class="col-8">
                                        <textarea type="text" id="text" name="feedback" class="form-control"></textarea>
                                        </div>
            </div>
                                        <div class="mb-3 row">
                                        <label for="text" class="col-4"><br>Rating</label>
                                        <div class="col-8">
                                        <input type="number" id="text" name="rate" class="form-control" min="1" max="5">
                                        </div>
            </div>
                                        <input type="hidden" name="customer_id" value="<?php echo $customer_id;?>">
                                        <input type="hidden" name="repairer_id" value="<?php echo $repairer_id;?>">  
                                      
                                    
                                  

                <button type="submit" name="button" class="btn btn-danger btn-lg">Send</button>
            </form>
        
           
        </div>
        <div class="col-md-3"></div> 
    </div> 
</div>