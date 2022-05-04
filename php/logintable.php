<?php

$servername="localhost";
$username = "root";
$password="";
$database = "furniture_db";


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}

$sql ="CREATE TABLE `product` (
  `prodId` int(11) NOT NULL,
  `prodName` varchar(30) DEFAULT NULL,
  `prodImage` varchar(20) DEFAULT NULL,
  `prodDesc` longtext DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `price` int(6) DEFAULT NULL,
  `bigImageNames` tinytext DEFAULT NULL
)"; 
// ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    

    
$result= mysqli_query($conn, $sql);
if($result){
      echo "Table Infos created successfully";
    } 
    else {
      echo "Error creating table: " .mysqli_connect_error();
    }
    