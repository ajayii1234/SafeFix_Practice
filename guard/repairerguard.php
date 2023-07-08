<?php

if(!isset($_SESSION["cust_id"])){
    header("location:login.php");
    exit();
}else if($_SESSION["cust_role"]!= "repairer"){
    header("location:login.php");
    exit();
}



?>