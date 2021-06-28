<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "captcha";
$new=$_POST['new'];
session_start();
session_regenerate_id();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `login` SET `p`='$new' WHERE e='$_SESSION[e]'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>