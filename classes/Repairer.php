<?php

require_once("Dbconnection.php");

class Repairer extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function registerUser($firstName, $lastName, $userName, $busname, $busaddress, $specialization, $experience, $email, $phoneNumber, $gender, $homeAddress, $password, $confirmPassword, $state){

        //check if email in db before trying to store user, also trying to fetch a data,
        //we use the statement rowCount()
        $sql = "SELECT * FROM repairer WHERE rep_email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->rowCount();
        if($result > 0){
            return "Error: This email already in use";
            exit;
        }

                //check if phone number is already in db before trying to store user, also trying to fetch a data,
        //we use the statement rowCount()
        $sql = "SELECT * FROM repairer WHERE rep_phoneNumber = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$phoneNumber]);
        $numUsers = $stmt->rowCount();
        if($numUsers > 0){
            return "Error: This phone number is already in use";
            exit;
        }

        //methods should not be too long and they should perform only one thing

        $sql = "INSERT INTO repairer(rep_firstName, rep_lastName, rep_userName, rep_BusinessName, rep_BusinessAddr, rep_specialization, rep_yearsOfExp, rep_email, rep_phoneNumber, rep_gender, rep_homeAddress, rep_password, rep_confirmPassword, rep_state) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $user = $stmt->execute([$firstName, $lastName, $userName, $busname, $busaddress, $specialization, $experience, $email, $phoneNumber, $gender, $homeAddress, $password, $confirmPassword, $state]);
        
        //to check if variables is in the database

        if($user){
            return "User created successfully";
        }else{
            return "unable to create user";
        }

    }

    public function loginUser($cust_email, $cust_password){


                //check if email in db before trying to store user, also trying to fetch a data,
        //we use the statement rowCount()
        $sql = "SELECT * FROM customer WHERE cust_email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cust_email]);
        //print_r($q."success");
        $email = $stmt->rowCount();
        print_r($email);
        if($email < 1){
            return "Either email or Password is not correct";
            exit();    
    }


    //this is to fetch data from the database
     $user = $stmt->fetch(PDO::FETCH_ASSOC);
     //print_r($user);

     //this is the password that is saved in the database
     //$user["user_password"];

     //this is to verify if the password that the user entered is the same with the one in the database
     if(password_verify($cust_password, $user["cust_password"])){
        //return "You are logged in";
        

        session_start();
        $_SESSION["cust_id"] = $user["cust_id"];
        //$_SESSION["user_role"] = $user["user_role"];
    

        
        
        //redirects based on role
        if($user["cust_email"]){
            header("location:../customerprofile.php");
            exit();
        }
        
        else{
            session_destroy();
            header("location:../customerregister.php");
            exit();
        }

        exit();
     }
     else{return "Either email or Password is not correct";
        exit();
    }


}


    //method to fetch all repairers from the database
    public function fectchAllrepairers(){
        $sql = "SELECT rep_firstName, rep_lastName, rep_userName, rep_BusinessName, rep_BusinessAddr, rep_specialization, rep_yearsOfExp, rep_email, rep_phoneNumber, rep_gender, rep_homeAddress, rep_state FROM repairer WHERE rep_role = 'repairer'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        //fetchAll() is an inbuilt function to retrieve the value of your database
        //FETCH_ASSOC gives you access to the associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

//method to get user details using the ID
public function getUserDetails($user_id){
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

public function updatePassword($user_id, $oldpassword, $newpassword){
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    //return $user;
    //checking if the password they provided matches with the password stored for them
    if(password_verify($oldpassword, $user["user_password"])){
        $sql = "UPDATE users SET user_password = ? WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $updatedUser = $stmt->execute([$newpassword, $user_id]);
         return "Your password has been changed successfully";
    }else{return "Old password is not correct, please try again";}
}

public function updateProfile($user_id, $user_fullname, $user_Intro){
    $sql = "UPDATE users SET user_fullname=?, user_Intro=? WHERE user_id=?";
    $stmt = $this->conn->prepare($sql);
    $response = $stmt->execute([$user_id, $user_fullname, $user_Intro]);
    return $response;
}

}
//these are tests to check if it is workig
//$userone = new User();
//$userone->registerUser($fullname, $email, $password, $intro);

// $result = $userone->loginUser($email, $password);
// echo $result;

// $userone = new User();
// $result = $userone->getUserDetails(13);
// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>