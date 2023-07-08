<?php
require_once("partials/header1.php");


?>
<div class="container-fluid bg-white">

    <div class="row">
        
        <div class="col-md-3"></div>

        <div class="col-md-6  bg-primary py-3 my-5 px-5">
            <h1 class="text-center text-white">Sign Up</h1>
            <form action="process/processrepairerregister.php" method="POST" py-5 px-5>
            <div class="mb-3 row">
                                            <label for="firstname" class="col-4"><br>First Name</label>
                                            <div class="col-8">
                                            <input type="text" id="firstname" name="firstname" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                          <label for="lastname" class="col-4"><br>Last Name</label>
                                          <div class="col-8">
                                          <input type="text" id="lastname" name="lastname" class="form-control">
                                          </div>
                                      </div>
                                        
                                      <div class="mb-3 row">
                                          <label for="username" class="col-4"><br>User Name</label>
                                          <div class="col-8">
                                          <input type="text" id="username" name="username" class="form-control">
                                          </div>
                                      </div>

                                      <div class="mb-3 row">
                                          <label for="busname" class="col-4"><br>Business Name</label>
                                          <div class="col-8">
                                          <input type="text" id="busname" name="busname" class="form-control">
                                          </div>
                                      </div>

                                      <div class="mb-3 row">
                                          <label for="busaddress" class="col-4"><br>Business Address</label>
                                          <div class="col-8">
                                          <input type="text" id="busaddress" name="busaddress" class="form-control">
                                          </div>
                                      </div>

                                      <div class="mb-3 row">
                                          <label for="busspec" class="col-4"><br>Specializations</label>
                                          <div class="col-8">
                                          <select class="form-control" aria-label="Default select example" name="busspec" id="busspe">
                                          <option selected>..select all that apply..</option>
                                          <option value="Phones">Phones</option>
                                          <option value="Phones">Tablets</option>
                                          <option value="Laptops">Laptops</option>
                                          </select>
                                  </div>
                                  </div>
                                     

                                      <div class="mb-3 row">
                                          <label for="experience" class="col-4"><br>Years of Experience</label>
                                          <div class="col-8">
                                          <input type="text" id="experience" name="experience"  class="form-control">
                                          </div>
                                      </div>
                                    

                                      <div class="row mb-3">
                                        <label for="email" class="col-4"><br>Business Email Address</label>
                                        <div class="col-8">
                                        <input type="email" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                        
                                        <div class="mb-3 row">
                                          <label for="phone" class="col-4"><br>Business Phone Number</label>
                                          <div class="col-8">
                                        <input type="number" id="phone" name="phone"  class="form-control">
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-4">
                                              <label for="gender">Gender</label>
                                          </div>
                                          <div class="col-md-8 mb-3">
                                          <input class="form-check-input" type="radio" name="gender" value="male">&nbsp<label>Male</label>&nbsp&nbsp
                                          <input class="form-check-input" type="radio" name="gender" value="female">&nbsp<label>Female</label>
                                          </div>
                                      </div>

                                        <div class="row mb-3">
                                            <label for="address" class="col-4"><br>Home Address</label>
                                            <div class="col-8">
                                            <input type="text" id="address" name="address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                          <label for="password" class="col-4"><br>Password</label>
                                          <div class="col-8">
                                          <input type="password" id="password" name="password" class="form-control">
                                          </div>
                                      </div>
                                      <div class="mb-3 row">
                                          <label for="confirmpassword" class="col-4"><br>Confirm Password</label>
                                          <div class="col-8">
                                          <input type="password" id="confirmpassword"  name="confirmpassword" class="form-control">
                                          </div>
                                      </div>
                                      <div class="mb-3 row">
                                      <label for="state" class="col-4"><br>State</label>
                                      <div class="col-8">
                                      <select class="form-control" aria-label="Default select example" name="state">
                                      <option selected>Open this select menu</option>
                                      <option value="Lagos">Lagos</option>
                                      <option value="Ondo">Ondo</option>
                                      </select>
                                  </div>
                                  </div>
                                      <div class="mb-3 row">
                                        <div col-12>
                                        <p>Please read through our <a href="#" class="termsOfuse">Terms and Conditions</a> and check the box below to proceed</p>
                                        <input type="checkbox">&nbsp<label>I have read through the terms and conditions and agree to it</label>
                                        </div>
                                    </div>
                                      
                                      <input type="submit" name="button" id="button" class="btn btn-danger btn-lg">
            </form>
            <p class="mt-3">Already a member?<a href="login.php" class="btn btn-default">Login Here</a></p>
        </div>
        <div class="col-md-3"></div> 
    </div> 
</div>



<?php
require_once("partials/footer.php");
?>