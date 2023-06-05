
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Book Store</title>
    <style>
      .navbar {
        background-color: #fff; 
        border-bottom: 1px solid #ccc; 
        padding: 10px 0; 
      }
      .navbar-brand {
        font-size: 24px; 
        font-weight: bold; 
        color: #333; 
      }
      .navbar-toggler {
        border: none; 
      }
      .nav-link {
        font-size: 18px; 
        color: #333; 
      }
      .nav-link:hover {
        color: #000; 
      }
      #introcontainer {
        text-align:center;
        margin-top: 50px; 
      }
      .jumbotron {
        background-color: #f8f9fa; 
        padding: 30px; 
        border-radius: 10px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
      }
      .jumbotron h1 {
        font-size: 48px; 
        font-weight: bold; 
        color: #333; 
        margin-bottom: 20px; 
      }
      #login-box {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin: auto;
        margin-top: 50px;
        max-width: 500px;
        padding: 20px;
      }
      #login-box h1 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
      }
      input[type=text], input[type=password] {
        border: none;
        border-radius: 3px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        margin-bottom: 20px;
        padding: 10px;
        width: 100%;
      }
      input[type=submit] {
        background-color: #0096FF;
        border: none;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        padding: 10px;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Book Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Home Page<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container" id = "introcontainer">
    <div class="jumbotron">
        <h1>Welcome to VIT Online Bookstore</h1>
    </div>
      </div>
      <div class="container" id="main">

<div id="login-box">
    <h1>Login</h1>
    <form action = "dashboard.php" method = "post">
      <input type="text" placeholder="Username" name = "user_name" required>
      <input type="password" placeholder="Password" name = "pass_word" required>
      <p style="text-align:center;">Don't have an Account? <a style = "text-decoration:none;"href="signup.php">Sign up</a></p>
      <input type="submit" value="Login">
    </form>
  </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


