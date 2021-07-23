<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <title>Contact Us</title>

  <script type="text/javascript">
    function validation() {
      var username = document.getElementById("name");
      var usermail = document.getElementById("email");
      var usermsg = document.getElementById("msg");
      var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,20})(.[a-z]{2,8})?$/;
      if (username.value.trim() == "") {
        alert("Name cannot be blank.");
        return false;
      } else if (usermail.value.trim() == "") {
        alert("Email id is required.");
        return false;
      } else if (!regx.test(usermail.value)) {
        alert("Invalid email id.");
        return false;
      } else if (usermsg.value.trim() == "") {
        alert("Message cannot be empty.");
        return false;
      } else if (usermsg.value.trim().length < 5) {
        alert("Message is too short: Minimum 4 characters.");
        usermsg.style.border = "solid 1px red";
        return false;
      } else {
        return true;
      }
    }
  </script>

</head>

<body>
  <?php
  include "php/header2.php";
  ?>
  <section class="text-gray-700 body-font relative" style="background:radial-gradient(#fff, #ff523b);">

    <div class="container px-5 py-24 mx-auto">

      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Reach us, we are happy to serve you.</p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">


          <!--_________________________________________________*****VALIDATION*****________________________________________________________________________-->
          <form action='' onsubmit="return validation()" method="POST">



            <div class="harshit"><span id='' class='text-danger'></span>

              <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 form-control" placeholder="Full Name" type="text" name='name' id='name' autocomplete='off'></div>



            <div class='harshit'><span id='' class='text-danger'></span>

              <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 form-control" placeholder="Email" type="text" name='email' id='email' autocomplete="off">
            </div>



            <div class='harshit'><span id='' class='text-danger'></span>

              <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block form-control" placeholder="Message" type='text' name='msg' id='msg' autocomplete="off"></textarea></div>


            <div class="hari p-2 w-full">
              <button name="submitx" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">SUBMIT</button>
            </div>
          </form>

          <!--___________________________________***********************_____________________________________________________-->
          <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
            <a class="text-indigo-500">info@bitsnbites.com</a>
            <p class="leading-normal my-5">C.S. Rd. No.5
              <br>Mumbai, Maharashtra
            </p>
            <span class="inline-flex">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>





        </div>
      </div>

      <div style="padding-left: 410px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30137.295385869882!2d72.82819437362188!3d19.2317736179046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b128b333e163%3A0x985640540577af7e!2sBorivali%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1606069067373!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      </div>



  </section>

  <?php
  include "php/footer2.php";
  ?>
</body>

</html>
<?php
  include_once('connection.php');
  if(isset($_POST['submitx'])){
    $naam = $_POST['name'];
    $pata = $_POST['email'];
    $sujhav = $_POST['msg'];
    $s = "SELECT  * FROM contacts where email = '$pata' ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

  if ($num == 1) {
      echo "<script>alert('email already taken.')</script>";

  } else {
      $insertquery = "INSERT INTO contacts (name, email, msg) VALUES ('$naam', '$pata', '$sujhav')";
      $res = mysqli_query($con, $insertquery);
      if($res){
        echo "<script>alert('!! ThankU For Contacting Us (Data Inserted).!!')</script>";
        echo "<script>window.location.href='contact.php';</script>";
        exit;
      }else{
        echo "<script>alert('xx Database Crashed (Data is not inserting). xx')</script>";
      }
      
  }
      
  }
  $con->close();
?>