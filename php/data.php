<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $_signUpEmail = $_POST['email'];
    $_signUpPass = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "talk5";

// creating connection

$conn = mysqli_connect($servername,$username,$password,$database);

//checkin connection
if(!$conn){
    die("Connection Failed : ". mysqli_connect_error());
}
else{
    $sql = "INSERT INTO `signup`(`Email`,`password`) VALUES ('$_signUpEmail','$_signUpPass')";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        echo "The record has been set";
    }
    else{
        echo "the records couldn't be created--->". mysqli_error($conn);
    }
}
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

// $sql = "CREATE TABLE `SignUp` (`Email` VARCHAR(25) NOT NULL , `password` VARCHAR(16) NOT NULL)";
// $result = mysqli_query($conn,$sql);
// if($result){
//     echo "the table was created <br>";
// }else{
//     echo "the table couldn't be created--->". mysqli_error($conn);
// }




?> 