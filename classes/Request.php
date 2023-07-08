<?php
session_start();
require_once("Dbconnection.php");

class Request extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function customerRequest($device, $description, $location, $customer, $repairer, $date, $time){


        //methods should not be too long and they should perform only one thing

        $sql = "INSERT INTO request(request_device_type, request_problem_description, request_location, repairer_id, customer_id, request_date, request_time) VALUES(?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $user = $stmt->execute([$device, $description, $location, $date, $time, $customer, $repairer]);
        
        //to check if variables is in the database

        if($user){
            return "User created successfully";
        }else{
            return "unable to create user";
        }

    }


         //method to fetch each customer request from the database
         public function getCustomerRequest($repairer){



                 //echo "$repairer ... Hello  <br />";
                // $repairer  = trim($repairer );
           
             $sql = "SELECT request_device_type, customer.cust_id, request_problem_description, request_location, concat(customer.cust_firstName, ' ', customer.cust_lastName) as 'customer name', request_date, request_time FROM request INNER JOIN customer on request.customer_id = customer.cust_id WHERE request.repairer_id = ?";

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

