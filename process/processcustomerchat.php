<?php


require_once("../classes/Customerchat.php");
if($_POST){
    if(isset($_POST["button"])){


        $message = $_POST["message"];
        $customer = $_POST["customer_id"];
        $repairer = $_POST["repairer_id"];

        //echo $repairer . " Repairer ...." .  $customer . ".... Customer ";
        //die();

        if(empty($message)){

            $_SESSION["sum_form_error"] = "Type a message";
            header("location:../customerchatmessage.php");
            exit();
        }else{
            $_SESSION["sum_form_error"] = "<span style='color:yellow'>Message sent successfully</span>";
            header("location:../customerchatmessage.php");
        }

        $user = new Customerchat();
       
        $response = $user->customerchat($message, $customer, $repairer);
        echo $response;
    }
}


?>