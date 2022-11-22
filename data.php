<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "talk5";

// creating connection

$conn = mysqli_connect($servername,$username,$password,$database);

//checkin connection
if(!$conn){
    die("Connection Failed : ". mysqli_connect_error());
}else{
    echo "connection successful<br>";
}

// //creating db
// $sql = "CREATE DATABASE talk5";
// $result = mysqli_query($conn, $sql);

// //checking for db creation
// if($result){
//     echo "the db was created successfully!<br>";
// }else{
//     echo "The db was not created successfully because of this error --->". mysqli_error($conn);
// }

$sql = "CREATE TABLE `SignUp` (`Email` VARCHAR(25) NOT NULL , `password` VARCHAR(16) NOT NULL)";



?> 