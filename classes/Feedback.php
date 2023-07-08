<?php
session_start();
require_once("Dbconnection.php");

class Feedback extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function customerfeedback($feedback, $rate, $customer, $repairer){


        //methods should not be too long and they should perform only one thing

        $sql = "INSERT INTO feedback(feedbacks, rating, customer_id, repairer_id) VALUES(?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $user = $stmt->execute([$feedback, $rate, $customer, $repairer]);
        
        //to check if variables is in the database

        if($user){
            return "User created successfully";
        }else{
            return "unable to create user";
        }

    }


         //method to fetch each customer request from the database
         public function getCustomerfeedbacks($repairer){

                 //echo "$repairer ... Hello  <br />";
                // $repairer  = trim($repairer );
           
             $sql = "SELECT feedbacks, rating, concat(customer.cust_firstName, ' ', customer.cust_lastName) as 'customer name' FROM feedback INNER JOIN customer on feedback.customer_id = customer.cust_id WHERE feedback.repairer_id = ?";

           // $sql = "SELECT * FROM request";

         
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$repairer]);

          
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // echo "<pre>";
            //  print_r($result);
            //  echo "</pre>";
            //  die();
            return $result;

          
        }

        public function fectchfeedback(){
             $sql = "SELECT feedbacks, rating, customer_id, repairer_id, date_created, concat(customer.cust_firstName, ' ', customer.cust_lastName) as 'customer name' FROM feedback INNER JOIN customer on feedback.customer_id = customer.cust_id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            //fetchAll() is an inbuilt function to retrieve the value of your database
            //FETCH_ASSOC gives you access to the associative array
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        
        }



}

