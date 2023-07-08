
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/miniproject.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="30x30" href="images/capture.PNG">
   
    <title>SafeFix</title>

</head>
<body>



  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #4C4646">
  <div class="container">
    
    <a class="navbar-brand ml-3" href="index1.php" style="color:white">SafeFix<img src="assets/images/capture.PNG" width="40%"></a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 500px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="FAQ.php">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customerregister.php">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LogIn
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">User LogIn</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="adminlogin.php">Admin LogIn</a></li>
          </ul>
        </li>
        <!-- <?php
          if(isset($_SESSION["cust_id"])){
        ?>

                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                            

        <?php
          }
        ?> -->
      </ul>
   
    </div>
  </div>
</nav>

       