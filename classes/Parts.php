<?php

require_once("Dbconnection.php");

class Parts extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function registerParts($partName, $price){

  
        //methods should not be too long and they should perform only one thing

        $sql = "INSERT INTO parts(part_name, part_price_Naira) VALUES(?,?)";

        $stmt = $this->conn->prepare($sql);

        $user = $stmt->execute([$partName, $price]);
        
        //to check if variables is in the database

        if($user){
            return "part added successfully";
        }else{
            return "unable to add part";
        }

    }

            //method to fetch all repairers from the database
            public function fectchAllparts(){
                $sql = "SELECT part_name, part_price_Naira FROM parts";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                //fetchAll() is an inbuilt function to retrieve the value of your database
                //FETCH_ASSOC gives you access to the associative array
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }

}

