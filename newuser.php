<?php
session_start();
include 'database.php';
$fname=$_SESSION["fname"];
$lname=$_SESSION["lname"];
$uname=$_SESSION["uname"];
$pw=$_SESSION["pw"];

$phn=$_SESSION["phn"];
$em=$_SESSION["em"];
$gen=$_SESSION['gender'];
$pwh=password_hash($pw,PASSWORD_DEFAULT);
$sql = "INSERT INTO user(Firstname,Lastname,Username,Password,Phone,Email,Gender) VALUES ('$fname','$lname','$uname','$pwh','$phn','$em','$gen')";
if ($conn->query($sql) === TRUE) {
    header("Location:index2.php");
  } else {
    echo "Sorry the server is currently down";
  }
  
  $conn->close();
?>