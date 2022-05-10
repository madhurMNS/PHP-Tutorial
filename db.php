<?php
    $con = mysqli_connect("localhost","root","",'user_db',3306);

    // if(!$con){
    //     die("connection successfull". mysqli_connect_error());
    // }else{
    //    echo "success" ;
    // }

    // class Database{
    //     private $host = 'localhost';
    //     private $db_name = 'user_db';
    //     private $username = 'root';
    //     private $password = 'tiger';
    //     private $conn;

    //     public function connect(){
    //         $this -> conn = null;

    //         try{
    //             $this -> conn = new PDO(
    //                 'mysql:host='. $this->host. ';dbname=' .$this -> db_name,
    //                 $this -> username, $this -> password);

    //             $this -> conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
    //         }
    //         catch(PDOException $e){
    //             echo 'Connection Error: ' . $e->getMessage();
    //         }

    //         return $this -> conn;
    //     }
    // }
?>