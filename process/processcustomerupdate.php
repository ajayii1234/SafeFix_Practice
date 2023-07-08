<?php


require_once("../classes/Customer.php");
if($_POST){
    if(isset($_POST["updatebtn"])){

        $cust_id = $_SESSION["cust_id"];
        //echo $cust_id;
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];

        $user1 = new Customer();
       
        $response = $user1->updateProfile($firstname, $lastname, $cust_id);
       // print_r($response);
        //die();
        if($response){
            header("location:../customerprofile.php");
            exit();
        }
    }
}


?>