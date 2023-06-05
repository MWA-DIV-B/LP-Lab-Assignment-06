<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to_do";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$taskDescription = $_POST['taskDescription'];

$sql = "INSERT INTO tasks (description) VALUES ('$taskDescription')";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "error";
}

$conn->close();
?>
