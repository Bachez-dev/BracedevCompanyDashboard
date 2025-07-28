<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bracedev | Login</title>
  <link rel="stylesheet" href="login.css">
  <link rel="shortcut icon" href="./Svg/B.png" type="image/x-icon">
</head>
<style>
</style>

<body>

  <div class="login-container">
    <div class="login-information">

      <!-- LEFT CONTAINER START -->

      <div class="left-container">
        <div class="company-header">
          <h2>BracedevCompany</h2>
        </div>
        <div class="welcome">
          <h3>Welcome Back Sir 🖐</h3><br>
          <p style="color: rgb(100, 97, 97);">Time to make big things Happen</p>
        </div>
        <!-- <div class="buttons-groups">
          <div class="button-group">
            <button id="signUpBtn">
              Sign In
            </button>
            <button id="signInBtn" class="active">
              Sign Up
            </button>

          </div>

        </div> -->

        <div id="formContainer">
          <div id="signInContent" class="content active">
            <form action="loginProcess.php" method="POST">

              <label for="Username">Username: </label> <br><br>
              <input type="text" name="username" id="username" placeholder="Username"><br><br>
              <label for="Email"> Email: </label> <br><br>
              <input type="text" name="email" id="Email" placeholder="example@gmail.com"><br><br>

              <label for="Password">Password:</label> <br><br>
              <input type="text" name="password" id="password" placeholder="Password"><br><br><br>
              <button
              type = "submit"
                style="width: 250px; background: blue; height: 40px; color: white; border: none; border-radius: 20px;">
                Login
              </button>
            </form>
          </div>
          <div id="signUpContent" class="content">
            <label for="Username">Username:</label> <br><br>
            <input type="text" id="username" placeholder="Username"><br><br>
            <label for="Password">Password:</label> <br><br>
            <input type="text" id="password" placeholder="Password"> <br><br><br>
            <button
              style="width: 250px; background: blue; height: 40px; color: white; border: none; border-radius: 20px;"
              onclick="Login()">
              Login
            </button>
          </div>
        </div>
      </div>

      <!-- LEFT CONTAINER END -->

      <div class="right-container">
        <div class="right-content">
          <div class="login-heading">
            <h3>Effortlessly manage your team and operations</h3><br>
            <p style="font-size: 12px;">Log in, Access your CRM and make your dreams come true</p>
          </div>

          <div class="crm-image">
            <img src="./crm/3690f3bd284457b7ce14011f2390d7ff.jpg" alt="" width="100%" height="100%"
              style="border-radius: 10px;">
          </div>
        </div>
      </div>


    </div>
  </div>


  <script>
    const signInBtn = document.getElementById('signInBtn');

    const signUpBtn = document.getElementById('signUpBtn');

    const signInContent = document.getElementById('signInContent');

    const signUpContent = document.getElementById('signUpContent');

    signInBtn.addEventListener('click', () => {
      signInBtn.classList.add('active');
      signUpBtn.classList.remove('active');
      signInContent.classList.add('active');
      signUpContent.classList.remove('active');
    });

    signUpBtn.addEventListener('click', () => {
      signUpBtn.classList.add('active');
      signInBtn.classList.remove('active');
      signUpContent.classList.add('active');
      signInContent.classList.remove('active');
    })
  </script>
  <?php

  if(isset($_GET['user'])){
    echo "<p style='color:red;'>".$_GET['error']."</p>";
  }

  ?>
</body>

</html>