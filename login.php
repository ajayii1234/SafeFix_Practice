<?php
session_start();
require_once("partials/header1.php");
?>
<div class="container-fluid bg-white">

    <div class="row">
        
        <div class="col-md-3"></div>

        <div class="col-md-6  bg-primary py-5 my-5 px-5 form" style="border-radius: 20px;">
            <h1 class="text-center text-white">User Login</h1>
           
            <form action="process/processlogin.php" method="POST" py-5 px-5>
                <?php
                if(isset($_SESSION["sum_form_error"])){
                echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
                unset($_SESSION["sum_form_error"]);
                }
                ?>
            <div class="mb-3 row">
                                        <label for="email" class="col-4"><br>Email Address</label>
                                        <div class="col-8">
                                        <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                      <label for="password" class="col-4"><br>Password</label>
                                      <div class="col-8">
                                      <input type="password" id="password" name="password" class="form-control">
                                      </div>
                                  </div>

                <button type="submit" name="button" class="btn btn-danger btn-lg">Submit</button>
            </form>
        
            <p class="mt-3">Not yet a member?<a href="customerregister.php" class="btn btn-default">Register Here</a></p>
        </div>
        <div class="col-md-3"></div> 
    </div> 
</div>



<?php
require_once("partials/footer.php");
?>