<?php

require_once "../classes/Customer.php";



if($_POST){
    if(isset($_POST["changepassword"]))

    //echo "you clicked password";
    $oldpassword = $_POST["oldpassword"];    
    $newpassword = $_POST["newpassword"];
    $cust_id = $_SESSION["cust_id"];
    //hash the new password before sending it to the method
    $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);

    if(empty($oldpassword) || empty($newpassword)){
        echo "all fields are required";
        exit();
    }
}

$userone = new Customer();
$result = $userone->updatePassword($oldpassword, $newpassword, $cust_id); 
echo $result;


?>