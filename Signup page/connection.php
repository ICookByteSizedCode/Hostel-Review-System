<?php

$servername = "localhost";
$username = "root";
$password = "pass";

$conn = new mysqli($servername, $username, $password, "IWP_Project");
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}

$us  = $_REQUEST['username'];
$rollno  = $_REQUEST['rollno'];
$phno  = $_REQUEST['phno'];
$email = $_REQUEST['email'];
$pass  = $_REQUEST['pass'];
$repass  = $_REQUEST['repass'];

$sql = "INSERT INTO user_info  VALUES ('$us','$rollno','$phno','$email','$pass','$repass')";
if(mysqli_query($conn, $sql)){
} else{}
header("Location: http://localhost/IWP%20Project/Login%20page/login.html");
exit;
$conn->close();
?>