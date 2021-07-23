<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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

    <section class="text-gray-700 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
                scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.518344586659!2d72.8611227148542!3d19.259812186982778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0fa7efb29b9%3A0x9aeb15b7513236a8!2sCS%20Cross%20Rd%20Number%205%2C%20Dahisar%20East%2C%20Mumbai%2C%20Maharashtra%20400068!5e0!3m2!1sen!2sin!4v1606066546010!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div
                class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion
                    axe</p>
                <form action="" onsubmit="return validation()" method="POST">
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="email"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Full Name" name="name">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Email">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="msg" name="msg"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="Message"></textarea>
                    </div>
                    <button
                        class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                </form>
            </div>
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
        echo "<script>window.location.href = 'contact1.php';</script>";
        exit;
      }else{
        echo "<script>alert('xx Database Crashed (Data is not inserting). xx')</script>";
      }
      
  }
      
  }
  $con->close();
?>