<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
        </div>
        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
          <form method="POST" action="dbcode.php">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="uname" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="messages" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input href="#" type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
<script>
  const inputs = document.querySelectorAll(".input");
  function focusFunc() {
      let parent = this.parentNode;
      parent.classList.add("focus");
    }

  function blurFunc() {
      let parent = this.parentNode;
      if (this.value == "") {
        parent.classList.remove("focus");
      }
    }

  inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
  });3
    </script>
  </body>
</html>
