<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";


  $email = $_POST['email'];
  $first_name =  $_POST['first'];
  $last_name = $_POST['last'];
  $address = $_POST['addr'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql ="INSERT INTO `formdata`(`Email`, `Firstname`, `Lastname`, `Address`) VALUES (?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->bind_param("ssss",$email,$first_name,$last_name,$address);

if($stmt->execute()) 
{ 
  header("Location: http://localhost/xampp/assignment/");
} 

else {
  echo 'Error: ' . $stmt . '<br>' . '$conn->error' ;
}

$conn->close();



?>
