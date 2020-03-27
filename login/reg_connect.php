<?php
session_start();

include '../connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO reg (fname,lname,birthday,email,password) VALUES ('$fname', '$lname', '$birthday', '$email', '$password')";

$result = mysqli_query($connect,$query);
$num= mysqli_affected_rows($connect);

if($num > 0){
    echo "berhasil daftar<br>";
    echo "<a href='../login/login.php'>Login</a>";
}else{
    echo "gagal terdaftar <br>";
    echo "<a href='../home/index.php'>Home<a/>";
}

?>
