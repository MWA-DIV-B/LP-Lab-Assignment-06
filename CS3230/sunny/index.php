<?php
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$database = "dbsunny";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);
// Create a db
$sql = "CREATE DATABASE dbsunny";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
?>