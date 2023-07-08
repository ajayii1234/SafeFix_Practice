<?php

    require_once "../classes/Customer.php";
   
if($_POST){

    if(isset($_POST["button"])){
        //echo print_r($_POST);
        //echo "you clicked register button";

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $addr = $_POST["addr"];
        $state = $_POST["state"];

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }

        if(isset($_POST['role'])){
            $role = $_POST['role'];
        }
        
     
        //echo print_r($_POST);

        //validate empty fields
        if(empty($firstname) || empty($lastname) || empty($username) || empty($password) || empty($confirmpassword) || empty($email) || empty($phone) || empty($gender) || empty($gender) || empty($addr) || empty($state)){

            $_SESSION["sum_form_error"] = "All fields are required";
            header("location:../customerregister.php");
            exit();
        }else{ 
            //echo "Success";
        }

        //validate password length
        if(strlen($password) < 8){
            
            $_SESSION["sum_form_error"] = "Minimum length of password is eight characters";
            header("location:../customerregister.php");
            exit();
        }

        if($password !== $confirmpassword){
            
            $_SESSION["sum_form_error"] = "Password and confirm password must be the same";
            header("location:../customerregister.php");
            exit();
        }

    }
    //harsh password and confirm password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $confirmpassword = password_hash($confirmpassword, PASSWORD_DEFAULT);
    //echo $password;
    //exit();
    
      //image validation from file upload
      $allowed = ["jpeg", "png", "jpg", "webp", "jfif"];
      $file_name = $_FILES["cover"]["name"];
      $temp = $_FILES["cover"]["tmp_name"];
      $error = $_FILES["cover"]["error"];
      //strtolower converts from uppercase to lowercase eg PNG, JPG
      $uploaded_ext =strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
      if(!in_array($uploaded_ext, $allowed)){
          echo "File type not allowed. Please upload Image";
          exit();
      }
      
      if($error == 0){
          $fileName = "uploads/"."safefix".time(). ".".$uploaded_ext;
          $savedfile = move_uploaded_file($temp, $fileName);

          if($savedfile){
            $userone = new Customer();
            $response = $userone->registerUser($firstname, $lastname, $username, $email, $phone, $gender, $role, $addr, $password, $confirmpassword, $fileName, $state);
            echo $response;
          }
        }


}else{
    header("location: ../register.php");
}


?>