<?php

include '../connect.php';

$email = @$_GET['email'];
$query = "DELETE FROM reg WHERE email = '$email'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "successfully delete profile <br>";
    echo "<a href='data.php'>table</a>";
} else {
    echo "failed delete <br>";
    echo "<a href='data.php'>try again</a>";
}
?>