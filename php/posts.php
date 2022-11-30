<?php
    // for user input
    $post = $_POST['post'];
    $user_name = 'gaurab1';

    // for data baser connnection
    $domain = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'talkait';

    $conn = mysqli_connect($domain, $username, $password, $database);
    if(!$conn){
        echo 'Database connection failed';
    }
    else{
        $sql = "INSERT INTO `posts` (`post`, `user_name`) VALUES ('$post','$user_name');";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "The record has been set";
        }
        else{
            echo "the records couldn't be created--->". mysqli_error($conn);
        }
    }
    
?>