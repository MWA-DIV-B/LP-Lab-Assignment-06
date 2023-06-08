<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Process the form data (e.g., save to database)

  // Assuming you have a database connection already established
  // and a "users" table with "name", "email", and "password" columns

  // Example using PDO for database operations
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=jspm", "root", "");

    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $password]);

    // Close the database connection
    $pdo = null;
  } catch (PDOException $e) {
    die("Error: " . $e->getMessage());
  }

  // Redirect to a success page
  header("Location: success.html");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    .container {
      width: 300px;
      margin: 0 auto;
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Register">
    </form>
  </div>
</body>
</html>
