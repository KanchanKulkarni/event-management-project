<html>
<head>
<title>Login</title>
</head>
<body>
	<h1>Welcome Back</h1>
	
<?php  
session_start();
require('config.php');//connect to config file
$username = $_POST['username'];
	
$pass = $_POST['password'];
echo $username;
echo $pass;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT * FROM members WHERE `username` = '$username' and password = '$pass'";
    $result =mysqli_query($conn,$sql1);

    if ($row = mysqli_fetch_assoc($result)) {
       
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        echo "Login Successfully";
    }
else {
        echo "Incorrect Email or Password!!!";
    }
$conn->close();

?> 

</body>

</html>

