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
$sql = "INSERT INTO user(Firstname,Lastname,Username,Password,Phone,Email,Gender) VALUES ('$fname','$lname','$uname','$pw','$phn','$em','$gen')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Sorry the server is corr;
  }
  
  $conn->close();
?>