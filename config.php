<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "eventmanagement";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, 'eventmanagement');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}
?>


