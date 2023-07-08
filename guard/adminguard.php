<?php

if(!isset($_SESSION["cust_id"])){
    header("location:adminlogin.php");
    exit();
}else if($_SESSION["user_role"]!= "admin"){
    header("location:login.php");
    exit();
}



?>