<?php
session_start();

include '../connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

if($email == "" || $password == ""){
  header("location: login.php");
}else{
  $query = "SELECT * FROM reg WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($connect, $query);
  $num = mysqli_num_rows($result);

if($num == 1){
  header("location: ../home/masook.php");
  $_SESSION['reg'] = $email
}else{
    header("location: login.php");
}
}

?>