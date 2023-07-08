<?php

if(!isset($_SESSION["cust_id"])){
    header("location:login.php");
    exit();
}else if($_SESSION["cust_role"]!= "customer"){
    header("location:login.php");
    exit();
}



?>