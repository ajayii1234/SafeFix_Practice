<?php
session_start();
require_once("Dbconnection.php");

class Customer extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function registerUser($cust_firstName, $cust_lastName, $cust_userName, $cust_email, $cust_phoneNumber, $cust_gender, $cust_role, $cust_address, $cust_password, $cust_confirmPassword, $cust_image, $cust_state){

        //check if email in db before trying to store user, also trying to fetch a data,
        //we use the statement rowCount()
        $sql = "SELECT * FROM customer WHERE cust_email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cust_email]);
        $email = $stmt->rowCount();
        if($email > 0){
            //return "Error: This email already in use";
            //exit;

            $_SESSION["sum_form_error"] = "This email is already in use";
            header("location:../customerregister.php");
            exit();
        }

                //check if phone number is already in db before trying to store user, also trying to fetch a data,
        //we use the statement rowCount()
        $sql = "SELECT * FROM customer WHERE cust_phoneNumber = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cust_phoneNumber]);
        $numUsers = $stmt->rowCount();
        if($numUsers > 0){
            //return "Error: This phone number is already in use";
            //exit;

            $_SESSION["sum_form_error"] = "This phone number is already in use";
            header("location:../customerregister.php");
            exit();
        }

        //methods should not be too long and they should perform only one thing

        $sql = "INSERT INTO customer(cust_firstName, cust_lastName, cust_userName, cust_email, cust_phoneNumber, cust_gender, cust_role, cust_address, cust_password, cust_confirmPassword, cust_image, cust_state) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $user = $stmt->execute([$cust_firstName, $cust_lastName, $cust_userName, $cust_email, $cust_phoneNumber, $cust_gender,  $cust_role, $cust_address, $cust_password, $cust_confirmPassword, $cust_image, $cust_state]);
        
        //to check if variables is in the database

        if($user){
            header("location:../login.php");
        }

    }


    public function loginUser($email, $password){

        //check if email in db before trying to store user, also trying to fetch a data,
//we use the statement rowCount()
$sql = "SELECT * FROM customer WHERE cust_email = ?";
$stmt = $this->conn->prepare($sql);
$stmt->execute([$email]);

$numUsers = $stmt->rowCount();

if($numUsers < 1){
    //return "Either email or Password is not correct";
    $_SESSION["sum_form_error"] = "Either email or Password is not correct";
    header("location:../login.php");
    exit();
   
}
//return $numUsers;

//this is to fetch data from the database
$user = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r($user);

//this is the password that is saved in the database
//$user["user_password"];

//this is to verify if the password that the user entered is the same with the one in the database
if(password_verify($password, $user["cust_password"])){
//return "You are logged in";


session_start();
//left handside: user id that is in the db, store it in the session
$_SESSION["cust_id"] = $user["cust_id"];
// $_SESSION["user_fullname"] = $user["user_fullname"];
// $_SESSION["user_email"] = $user["user_email"];
// $_SESSION["user_Intro"] = $user["user_Intro"];
// $_SESSION["user_dp"] = $user["user_dp"];
$_SESSION["cust_role"] = $user["cust_role"];
// $_SESSION["user_created"] = $user["user_created"];



//redirects based on role
if($user["cust_role"] === "customer"){
    header("location:../customerprofile.php");
    exit();
}elseif($user["cust_role"] === "repairer"){
    header("location:../repairerprofile.php");
    exit();
}else{
    session_destroy();
    header("location:../index.php");
    exit();
}

}else{
    $_SESSION["sum_form_error"] = "Either email or Password is not correct";
    header("location:../login.php");
    exit();
}

    }


       //method to fetch all customers from the database
       public function fectchAllcustomers(){
        $sql = "SELECT cust_firstName, cust_lastName, cust_userName, cust_email, cust_phoneNumber, cust_gender, cust_role, cust_address, cust_password, cust_confirmPassword, cust_id, cust_state FROM customer WHERE cust_role = 'customer'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        //fetchAll() is an inbuilt function to retrieve the value of your database
        //FETCH_ASSOC gives you access to the associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

        //method to fetch all repairers from the database
       public function fectchAllrepairers(){
        $sql = "SELECT * FROM customer WHERE cust_role = 'repairer'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        //fetchAll() is an inbuilt function to retrieve the value of your database
        //FETCH_ASSOC gives you access to the associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

         //method to update profile in a database
        public function updateProfile($cust_firstname, $cust_lastname, $cust_id){
        $sql = "UPDATE customer SET cust_firstname=?, cust_lastname=? WHERE cust_id=?";
        $stmt = $this->conn->prepare($sql);
        $response = $stmt->execute([$cust_firstname, $cust_lastname, $cust_id]);
        return $response;
    }

    //method to get user details using the ID
        public function getUserDetails($cust_id){
        $sql = "SELECT * FROM customer WHERE cust_id=?";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$cust_id]);
        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

    //method to update password
    public function updatePassword($oldpassword, $newpassword, $cust_id){
        $sql = "SELECT * FROM customer WHERE cust_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cust_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        //return $user;
        //checking if the password they provided matches with the password stored for them
        if(password_verify($oldpassword, $user["cust_password"])){
            $sql = "UPDATE customer SET cust_password = ? WHERE cust_id = ?";
            $stmt = $this->conn->prepare($sql);
            $updatedUser = $stmt->execute([$newpassword, $cust_id]);
             return "Your password has been changed successfully";
        }else{return "Old password is not correct, please try again";}
    }

     public function deleteUser($cust_id){
         $sql = "DELETE FROM customer WHERE cust_id = ?";
         $stmt = $this->conn->prepare($sql);
         $userdeleted = $stmt->execute([$cust_id]);
         if($userdeleted){
             header("location:../adminprofile.php");
             exit();
         }
     }

}

