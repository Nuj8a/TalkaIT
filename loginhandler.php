<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "talkait");
if (isset($_POST['loginbtn'])) {

  $loginEmail = mysqli_real_escape_string($conn, $_POST['login_email']);
  $loginPass = mysqli_real_escape_string($conn, $_POST['login_password']);

  if ($loginEmail != "" && $loginPass != "") {
    $sql_query = "SELECT count(*) as cntUser FROM signup WHERE email='$loginEmail' and password='$loginPass'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if ($count > 0) {
      $_SESSION['email'] = $loginEmail;
      header('Location: index.php');
    } else {
      header("location: loginerror.php");
      

    }

  } else {
    header("location: loginerror.php");
  }
}
?>