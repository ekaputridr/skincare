<?php

include '../connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "UPDATE reg SET fname = '$fname', lname = '$lname', birthday = '$birthday', password = '$password' WHERE email = '$email' ";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "successfully updated profile <br>";
    echo "<a href='data.php'>table</a>";
} else {
    echo "failed update <br>";
    echo "<a href='edit.php'>try again</a>";
}
?>