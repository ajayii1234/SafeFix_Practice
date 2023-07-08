<?php
    
    require_once "../classes/Customer.php";

if($_POST){

    if(isset($_POST["button"])){
        //echo print_r($_POST);
        //echo "you clicked register button";


        $email = $_POST["email"];
        $password = $_POST["password"];
       

        //echo print_r($_POST);

        //validate empty fields
        if(empty($email) || empty($password)){

            $_SESSION["sum_form_error"] = "All fields are required";
            header("location:../login.php");
            exit();
        }
        elseif(strlen($password) < 8){
            
            $_SESSION["sum_form_error"] = "Minimum length of password is eight characters";
            header("location:../login.php");
            exit();
        }

    }

    $userone = new Customer();
    $result = $userone->loginUser($email, $password);  
    echo $result;


}else{
    header("location: ../index.php");
}


?>