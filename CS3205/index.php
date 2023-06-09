<!DOCTYPE html>
<html>
<head>
  <title>Institute Event Website</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#schedule">Schedule</a></li>
        <li><a href="#speakers">Speakers</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h1>Welcome to our Institute Event</h1>
      <p>Join us for an exciting event filled with knowledge, networking, and fun!</p>
    </section>

    <section id="about">
      <h2>About the Event</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu augue ut mi iaculis aliquam vel vel ipsum. Integer non aliquet libero. Nam id hendrerit ligula.</p>
    </section>

    <section id="schedule">
      <h2>Event Schedule</h2>
      <ul id="schedule-list">
        <!-- Schedule data will be dynamically loaded here -->
      </ul>
    </section>

    <section id="speakers">
      <h2>Featured Speakers</h2>
      <div id="speakers-list">
        <!-- Speakers data will be dynamically loaded here -->
      </div>
    </section>

    <section id="contact">
      <h2>Contact Us</h2>
      <?php
      // Handle form submission
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Connect to the MySQL database
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Insert form data into the database
        $sql = "INSERT INTO contact_submissions (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
          echo '<p class="success-message">Thank you, ' . $name . '! Your message has been sent.</p>';
        } else {
          echo '<p class="error-message">Oops! Something went wrong. Please try again later.</p>';
        }

        // Close the database connection
        $conn->close();
      }
      ?>
      <div>
        <form method="post" action="">
          <input type="text" name="name" placeholder="Name">
          <input type="email" name="email" placeholder="Email">
          <textarea name="message" placeholder="Message"></textarea>
          <button type="submit">Send</button>
        </form>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Institute Event. All rights reserved.</p>
  </footer>
</body>
</html>
