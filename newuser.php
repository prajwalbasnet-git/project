<?php
include 'database.php';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$uname=$_POST["uname"];
$pw=$_POST["pw"];
$pw2=$_POST["pw2"];
$phn=$_POST["phn"];
$em=$_POST["em"];
if ($_POST['gender']=="male")
{
  $gen="male";
}
elseif ($_POST['gender']=="female")
{
  $gen="female";
}
else
{
  $gen="other";
}
echo $gen;

$sql = "INSERT INTO user(Firstname,Lastname,Username,Password,Phone,Email,Gender) VALUES ('$fname','$lname','$uname','$pw','$phn','$em','$gen')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>