<?php
    $name = $_POST["uname"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone"];
    $message = $_POST["messages"];

    $connection = mysqli_connect("localhost","root","","contact_us") or die("connection failed");
    $sql = "INSERT INTO contact_page (name,email,phone_no,message) VALUES ('{$name}','{$email}','$phone_no','{$message}')";

    $result = mysqli_query($connection,$sql) or die("Query failed!");

    header("location: http://localhost/Practical_3/Contact.php");
    mysqli_close($connection);
?>