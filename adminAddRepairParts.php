<?php
require_once("partials/header1.php");


?>
<div class="container-fluid bg-white">

    <div class="row">
        
        <div class="col-md-3"></div>

        <div class="col-md-6  bg-primary py-3 my-5 px-5" style="border-radius: 20px;">
            <h1 class="text-center text-white">Add Repair Parts</h1>
            <form action="process/processaddparts.php" method="POST" py-5 px-5>
            <div class="mb-3 row">
                                            <label for="parts" class="col-4"><br>Part Name</label>
                                            <div class="col-8">
                                            <input type="text" id="parts" name="parts" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                          <label for="price" class="col-4"><br>Price in Naira</label>
                                          <div class="col-8">
                                          <input type="text" id="price" name="price" class="form-control">
                                          </div>
                                      </div>
                             
                                      <input type="submit" name="button" id="button" class="btn btn-danger btn-lg">
            </form>
            
        </div>
        <div class="col-md-3"></div> 
    </div> 
</div>



<?php
require_once("partials/footer.php");
?>