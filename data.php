<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $signUpEmail = $_POST["signup_email"];
    $signUpPass = $_POST["signup_password"];

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "talkait";

// creating connection

$conn = mysqli_connect("localhost","root","","talkait");


// //creating db
// $sql = "CREATE DATABASE talkait";
// $result = mysqli_query($conn, $sql);

//checkin connection
if(!$conn){
    die("Connection Failed : ". mysqli_connect_error());
}
else{
    $sql = "INSERT INTO `signup` (`email`, `password`) VALUES ('$signUpEmail', '$signUpPass')";
    $result = $conn->query($sql);
    
    if($result){
        echo "The record has been set";
    }
    else{
        echo "the records couldn't be created--->". mysqli_error($conn);
    }
}
}
// //checking for db creation
// if($result){
//     echo "the db was created successfully!<br>";
// }else{
//     echo "The db was not created successfully because of this error --->". mysqli_error($conn);
// }

// $sql = "CREATE TABLE `SignUp` (`Email` VARCHAR(25) NOT NULL , `password` VARCHAR(16) NOT NULL)";
// $result = mysqli_query($conn,$sql);
// if($result){
//     echo "the table was created <br>";
// }else{
//     echo "the table couldn't be created--->". mysqli_error($conn);
// }






?> 