<?php

$connection = mysqli_connect('localhost:3306','avinash','avinash@1234','avi_phpwebsite');

mysqli_select_db($connection,"mydata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>
