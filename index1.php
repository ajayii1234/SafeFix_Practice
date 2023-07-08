<?php
  require_once("partials/header1.php");
?>

<style>
  *{
box-sizing:border-box;
}
	

.form{
  border-radius: 20px;
}

div{
border:0px solid red;
}

.one{
font-size: 2rem;
}

.two{
  background-size: 85%;
}

.off_canvas{
  background-color: gray;
}

.termsOfuse{
  color:red;
  text-decoration: none;
}

.list{
  list-style:none;
}

.customer{
  background-color: #9AB3F5;
}

.review{
  background-color: #B9FFFC;
}

.transaction{
  background-color: #A3DAF4;
}

h1,h2,h3,h4,h5,p,a,button,input,div{
  font-family:algerian serif;
}

.links{
  text-decoration: none;
}

.footer{
  color:white;
}

.bg-last{
  background-color:#5E3B4D;
}

.footer-padding{
  padding-left:30px;
}

.firstRow{
  background-color: #D1D4C9;
  padding-top:30px;
}

.first{
  padding-top:20px;
}

.second{
  background-color: #F4E5C2;
}

.firstFeature{
  background-color: #F7F5DD;
}

#a1{
	min-height:630px;
	width:100%;
	background-image:url(assets/images/banner.jpg);

}

#a2{
	height:640px;
	width:100%;
	background-color:rgba(0,0,0,0.7);
}

.hero-button {
  background-color: rgb(13,110,253);
  color: white;
  padding: 10px 20px;
  border-radius: 20px;
  text-decoration: none;
  font-size: 18px;
  margin-top: 20px;
}

.hero-button:hover {
  background-color: rgb(25, 45, 156);
}

.overlay {
  background-color: rgba(0, 0, 0, 0.6);
}

.safefix{
  text-align: center;
}



.image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px; 
}

.image-container img {
  max-width: 100%;
  max-height: 100%;
}

.text-container {
  text-align: center;
  margin-top: 20px;
}



/* #a1{
	height:700px;
	width:100%;
	background-image:url(assets/images/repair.jpg);
} */

/* video starts */

/* video ends */

</style>

<!-- overlay -->

  <section>
  <div class="card text-bg-primary d-none d-sm-block safefix" id="ho">
  <img src="assets/images/phoneandtab.jpg" class="card-img" alt="phones">
  <div class="card-img-overlay overlay">
    
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 pt-5" id="home" style="color:white">
    <h1 id="ho"><strong>Get Your Phone Fixed Safely and Securely with SafeFix</strong></h1>
    <p class="card-text"><strong>With SafeFix, you can easily find reliable and trustworthy repairers for your phone. We provide a platform where repairers and customers can meet safely.</strong></p>
    <p class="card-text"><small><a href="customerregister.php" class="btn hero-button  btn-primary">Register</a>
    <a href="login.php" class="btn hero-button  btn-primary">Login</a></small></p>
    </div>
    <div class="col-md-3"></div>
    </div>

  </div>
  </div>
  </section>
  



        <!-- Features Section -->
        <section>
  <div class="row">
    <div class="col-md-4">
      <div class="image-container">
        <img src="assets/images/roc.png" class="image-fluid">
      </div>
      <div class="text-container">
        <h2>Fast and Easy Repairs</h2>
        <p>With SafeFix, you can find repairers who are nearby and available to fix your phone quickly and easily.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image-container">
        <img src="assets/images/secure.png">
      </div>
      <div class="text-container">
        <h2>Secure Transactions</h2>
        <p>Our platform ensures that all transactions between repairers and customers are safe and secure, with no risk of fraud or scams.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image-container">
        <img src="assets/images/reliable.png">
      </div>
      <div class="text-container">
        <h2>Reliable Repairers</h2>
        <p id="ho">We carefully vet all repairers on our platform to ensure that they are reliable, trustworthy, and skilled in phone repairs.</p>
      </div>
    </div>
  </div>
</section>




      <?php
      require_once("partials/footer.php");
      ?>

<script src="assets/scripts/jquery.js"></script>
<script>
 $(document).ready(function() {
  // Code to be executed when the document is ready
  $("#ho").onload(function(){
    $("#ho").fadeIn(500)
  }); // Example: Fade in the content over 1 second (1000 milliseconds)
});
</script>
