<?php

session_start();

include '../connect.php';

$email = $_POST['email'];
$password = $_POST['password'];   

$sql = "SELECT * FROM reg WHERE email = '$email'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

if($num == 1){
  echo "<div>account not registered <a href='../product/home.php'>back</a></div>";
  header("location: ../product/home.php");
  $_SESSION['reg'] = $email;
}else{
  header("location: login.php");
  echo "<div>account not registered <a href='login.php'>back</a></div>";
};
?>