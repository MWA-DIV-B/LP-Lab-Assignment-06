<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #cccccc;
    }
    .btn {
      display: inline-block;
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 3px;
    }
    .error {
      color: #ff0000;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
    <?php
      $nameErr = $emailErr = $passwordErr = "";
      $name = $email = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
          if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
          }
        }

        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
        }

        if (empty($_POST["password"])) {
          $passwordErr = "Password is required";
        } else {
          $password = test_input($_POST["password"]);
          // Additional password validation logic if needed
        }

        if ($nameErr == "" && $emailErr == "" && $passwordErr == "") {
          // Store user data in the database
          // Replace the following code with your database logic
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "your_database";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

          if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();
        }
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <span class="error"><?php echo $passwordErr; ?></span>
      </div>
      <div class="form-group">
        <input type="submit" value="Register" class="btn">
      </div>
    </form>
  </div>
</body>
</html>
