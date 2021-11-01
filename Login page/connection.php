<?php

$us  = $_POST['username'];
$pass  = $_POST['pass'];

$servername = "localhost";
$username = "root";
$password = "pass";

$conn = new mysqli($servername, $username, $password, "IWP_Project");
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
} else {
  $stmt = $conn->prepare("select * from user_info where username = ?");
  $stmt -> bind_param("s", $us);
  $stmt -> execute();
  $stmt_result = $stmt->get_result();
  if($stmt_result->num_rows > 0){
    $data = $stmt_result->fetch_assoc();
    if($data['pass'] === $pass){
      header("Location: http://localhost/IWP%20Project/Home%20page/Home.html");
      exit;
    } else{
      header("Location: http://localhost/IWP%20Project/Invalid%20page/Invalid.html");
      exit;
    }
  } else{
    header("Location: http://localhost/IWP%20Project/Invalid%20page/Invalid.html");
    exit;
  }
}

$conn->close();
?>