<?php  
$name=$_POST['name'];
$lastname=$_POST['lstname'];
$email=$_POST['email'];
$phoneno=$_POST['phone'];
$address=$_POST['address'];
$usrname=$_POST['username'];
$pass=$_POST['password'];
$cpass=$_POST['conpass'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "eventmanagement";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO numbers (name, lastname, email, phoneno, address, username, password, status, c_password)
VALUES ('$name','$lastname','$email','$phoneno','$address','$usrname','$pass','1','$cpass')";

if ($conn->query($sql) === TRUE) {
    echo "Your Account Created Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 


