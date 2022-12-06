<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $signUpEmail = $_POST["signup_email"];
    $signUpPass = $_POST["signup_password"];
    $signUpCheckPass = $_POST["signup_check_paswword"];

// creating connection

$conn = mysqli_connect("localhost","root","","talkait");

if(!$conn){
    die("Connection Failed : ". mysqli_connect_error());
}
else{
    if(!empty($signUpEmail && $signUpPass==$signUpCheckPass)){
        $sql = "INSERT INTO `signup` (`email`, `password`) VALUES ('$signUpEmail', '$signUpPass')";
        $result = $conn->query($sql);
        echo"Signed Up!!";
        header("Location: login.php");
    }else{
        header("location: loginerror.php");
    }
    }
}

?> 