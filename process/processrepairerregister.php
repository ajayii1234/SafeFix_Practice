<?php

    require_once "../classes/Repairer.php";
   
if($_POST){

    if(isset($_POST["button"])){
        //echo print_r($_POST);
        //echo "you clicked register button";

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $busname = $_POST["busname"];
        $busaddress = $_POST["busaddress"];
        $busspec = $_POST["busspec"];
        $experience = $_POST["experience"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = isset($_POST["gender"]);
        $address = $_POST["address"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $state = $_POST["state"];
       
       
        //echo print_r($_POST);

        //validate empty fields
        if(empty($firstname) || empty($lastname) || empty($username) || empty($busname) || empty($busaddress) || empty($busspec) || empty($experience) || empty($email) || empty($phone) || 
        empty($gender) || empty($address) || empty($password) || empty($confirmpassword) || empty($state)){

            echo "All fields are required";
            exit();
        }else{ 
            //echo "Success";
        }

        //validate password length
        if(strlen($password) < 8){
            echo "Minimum length of password is eight characters";
            exit();
        }

        if($password !== $confirmpassword){
            echo "Password and confirm password must be the same";
            exit();
        }

    }
    //harsh password and confirm password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $confirmpassword = password_hash($confirmpassword, PASSWORD_DEFAULT);
    //echo $password;
    //exit();

    $userone = new Repairer();
    $response = $userone->registerUser($firstname, $lastname, $username, $busname, $busaddress, $busspec, $experience, $email, $phone, $gender, $address, $password, $confirmpassword, $state);
    echo $response;



}else{
    header("location: ../repairerregister.php");
}


?>