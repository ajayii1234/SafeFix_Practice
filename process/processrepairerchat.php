<?php

session_start();

require_once("../classes/Repairerchat.php");
if($_POST){
    if(isset($_POST["button"])){


        $message = $_POST["message"];
        $customer = $_POST["customer_id"];
        $repairer = $_POST["repairer_id"];

        //echo $repairer . " Repairer ...." .  $customer . ".... Customer ";
        //die();

        if(empty($message)){

            $_SESSION["sum_form_error"] = "Type a message";
            header("location:../repairerchatmessage.php");
            exit();
        }else{
            $_SESSION["sum_form_error"] = "<span style='color:yellow'>Message sent successfully</span>";
            header("location:../repairerchatmessage.php");
        }

        $user = new Repairerchat();
       
        $response = $user->repairerchat($message, $customer, $repairer);
        echo $response;
    }
}


?>