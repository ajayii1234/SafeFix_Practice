<?php


require_once("../classes/Parts.php");
if($_POST){
    if(isset($_POST["button"])){


        $parts = $_POST["parts"];
        $price = $_POST["price"];

        $user = new Parts();
       
        $response = $user->registerParts($parts, $price);
        echo $response;
    }
}


?>