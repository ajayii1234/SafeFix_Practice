<?php


require_once("../classes/Request.php");
if($_POST){
    if(isset($_POST["button"])){


        $phone = $_POST["phone"];
        $description = $_POST["description"];
        $location = $_POST["location"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $customer = $_POST["customer_id"];
        $repairer = $_POST["repairer_id"];

        //echo $repairer . " Repairer ...." .  $customer . ".... Customer ";
        //die();

        if(empty($phone) || empty($description) || empty($location) || empty($date) || empty($time)){

            $_SESSION["sum_form_error"] = "All fields are required";
            header("location:../customerrequest.php");
            exit();
        }else{
            $_SESSION["sum_form_error"] = "<span style='color:yellow'>Request submitted successfully</span>";
            header("location:../customerrequest.php");
        }

        $user = new Request();
       
        $response = $user->customerRequest($phone, $description, $location, $date, $time, $customer, $repairer);
        echo $response;
    }
}


?>