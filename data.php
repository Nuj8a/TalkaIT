<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $signUpEmail = $_POST["signup_email"];
    $signUpPass = $_POST["signup_password"];

// creating connection

$conn = mysqli_connect("localhost","root","","talkait");

if(!$conn){
    die("Connection Failed : ". mysqli_connect_error());
}
else{
    if(!empty($signUpEmail)){
        $sql = "INSERT INTO `signup` (`email`, `password`) VALUES ('$signUpEmail', '$signUpPass')";
        $result = $conn->query($sql);
        echo"Signed Up!!";
    }else{
        echo "ERROR//:NO INPUT";
    }
    header("Location: login.php");
    }
}


#data base
// }else{

//     $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) === 1) {

//         $row = mysqli_fetch_assoc($result);

//         if ($row['user_name'] === $uname && $row['password'] === $pass) {

//             echo "Logged in!";

//             $_SESSION['user_name'] = $row['user_name'];

//             $_SESSION['name'] = $row['name'];

//             $_SESSION['id'] = $row['id'];

//             header("Location: home.php");

//             exit();

//         }else{

//             header("Location: index.php?error=Incorect User name or password");

//             exit();

//         }

//     }else{

//         header("Location: index.php?error=Incorect User name or password");

//         exit();

//     }

// }

// }else{

// header("Location: index.php");

// exit();

// }
// //creating db
// $sql = "CREATE DATABASE talkait";
// $result = mysqli_query($conn, $sql);

//checkin connection

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