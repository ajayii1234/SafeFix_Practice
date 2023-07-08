<?php

require_once("Dbconnection.php");

class Repairerchat extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function repairerchat($message, $customer, $repairer){


        //methods should not be too long and they should perform only one thing

        $sql = "INSERT INTO repairerchat(messagechat, customer_id, repairer_id) VALUES(?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $user = $stmt->execute([$message, $customer, $repairer]);
        
        //to check if variables is in the database

        if($user){
            return "User created successfully";
        }else{
            return "unable to create user";
        }

    }


         //method to fetch each customer request from the database
         public function getrepairermessages($customer){

                 //echo "$repairer ... Hello  <br />";
                // $repairer  = trim($repairer );
           
             $sql = "SELECT messagechat, concat(customer.cust_firstName, ' ', customer.cust_lastName) as 'repairer name', chat_date, cust_id FROM repairerchat INNER JOIN customer on repairerchat.repairer_id = customer.cust_id WHERE repairerchat.customer_id = ?";

           // $sql = "SELECT * FROM request";

         
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$customer]);

          
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // echo "<pre>";
            //  print_r($result);
            //  echo "</pre>";
            //  die();
            return $result;

          
        }

        public function fectchAllrequests(){
            $sql = $sql = "SELECT * FROM request INNER JOIN customer on request.customer_id = customer.cust_id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            //fetchAll() is an inbuilt function to retrieve the value of your database
            //FETCH_ASSOC gives you access to the associative array
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            print_r($result);
           // return $result;

            
        }



}

