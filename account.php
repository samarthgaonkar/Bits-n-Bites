<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login-signup.css">
    <title>Document</title>
</head>
<body>

    <?php
  include "php/header.php";
?>
      <div class="account-page">
          <div class="container">
              <div class="row">
                  <div class="col-2">
                      <img src="" alt="">
                  </div>

                  <div class="col-2">
                      <div class="form-container">
                          <div class="form-btn">
                              <span onclick="login()">Login</span>
                              <span onclick="signup()">Sign Up</span>
                              <hr id="indicator">

                              <form action="" id="loginform">
                                  <input type="text" placeholder="Username">
                                  <input type="password" placeholder="Password">
                                  <button type="submit" class="btn">Login</button>
                              </form>

                              <form action="" id="regform">
                                <input type="text" placeholder="Username">
                                <input type="email" placeholder="E-mail">
                                <input type="password" placeholder="Password">
                                <button type="submit" class="btn">Register</button>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!--js for toggle form-->
      <script>
          var loginform = document.getElementById("loginform");
          var regform = document.getElementById("regform");
          var indicator = document.getElementById("indicator");

          function signup(){
              regform.style.transform = "translateX(0px)";
              loginform.style.transform = "translateX(0px)";
              indicator.style.transform = "translateX(100px)";
          }

          function login(){
              regform.style.transform = "translateX(300px)";
              loginform.style.transform = "translateX(300px)";
              indicator.style.transform = "translateX(0px)";
          }
      </script>

    <?php
  include "php/footer.php";
?>
    
</body>
</html>