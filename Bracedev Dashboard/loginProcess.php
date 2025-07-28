<?php
session_start();

$conn = new mysqli("localhost", "root", "", "bracedevlogin_db");

if($conn -> connect_error){
  die("connection failed:".$conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM logindata WHERE username = '$username' AND email = '$email' AND password = '$password' ";

$result = $conn->query($sql);

if($result->num_rows == 1){
  $_SESSION['user'] = $username;
  echo "session user:".$_SESSION['user'];
  header("Location: dash.php");
  exit();

}else {
  header("Location: login.php?error = Invalid credentials");
  exit();
}
?>