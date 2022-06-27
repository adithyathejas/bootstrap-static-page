<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";

$email=$_POST
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `formdata`(`Email`, `Firstname`, `Lastname`, `Address`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]');

if ($conn->query($sql) === TRUE) {
  echo " New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
