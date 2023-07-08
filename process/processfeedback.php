<?php


require_once("../classes/Feedback.php");
if($_POST){
    if(isset($_POST["button"])){


        $feedback = $_POST["feedback"];
        $rate = $_POST["rate"];
        $customer = $_POST["customer_id"];
        $repairer = $_POST["repairer_id"];

        //echo $repairer . " Repairer ...." .  $customer . ".... Customer ";
        //die();

        if(empty($feedback)){

            $_SESSION["sum_form_error"] = "Enter a feedback";
            header("location:../feedbackform.php");
            exit();
        }else{
            $_SESSION["sum_form_error"] = "<span style='color:yellow'>Message sent successfully</span>";
            header("location:../feedbackform.php");
        }

        $user = new Feedback();
       
        $response = $user->customerfeedback($feedback, $rate, $customer, $repairer);
        echo $response;
    }
}


?>