<?php
$insert = false;
if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
  }
  // echo "Success connecting to the db";
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `dt`) VALUES (' $name', '$age', '$gender', '$email', '$phone', current_timestamp());";
  //echo $sql;
 
  if($con->query($sql) == TRUE){
       // echo "Successfully inserted";
       $insert = true;
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }

  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img  class="bg" src="singapore.jpg" alt="Singapore">
    <div class="container">
        <h3>Welcome to Singapore Travel Form </h3>
        <p>Enter your details to confirm your
           participation in the trip</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining for the Singapore Trip </p>";
        }
    ?>
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your Name">
        <input type="text" name="age" id="age" placeholder="Enter your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
        <input type="text" name="email" id="email" placeholder="Enter your Email">
        <input type="text" name="phone" id="phone" placeholder="Enter your Phone">
        <input type="submit" name="submit" id="submit" class="button" value="Submit"/>
        
        </form>


    </div>
    <script src="script.js"></script>
    
</body>
</html>
