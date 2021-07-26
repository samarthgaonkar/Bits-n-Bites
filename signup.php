<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>SignUp</title>
    <script type="text/javascript">
        function validation(){
            var name = document.getElementById("n");
            var mail = document.getElementById("e");
            var phone = document.getElementById("pn");
            var pass = document.getElementById("p");
            var cpass = document.getElementById("cp");
            var addrs = document.getElementById("add");
            var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)\.([a-z]{2,20})(.[a-z]{2,8})?$/;
            if(name.value.trim() == ""){
                alert("Name cannot be remain blank.");
                return false;
            }else if(mail.value.trim() == ""){
                alert("Email id is required.");
                return false;
            }else if(!regx.test(mail.value)){
                alert("Invalid email id.");
                return false;
            }else if(phone.value.trim() == ""){
                alert("Mobile number is required.");
                return false;
            }else if(phone.value.trim().length<10 || phone.value.trim().length>10){
                alert("Enter a valid 10-digit mobile number.");
                return false;
            }else if(pass.value.trim() == ""){
                alert("Empty password is not allowed.");
                return false;
            }else if(pass.value.trim().length<4){
                alert("Minimun length of passsword should be 4 characters.");
                return false;
            }else if(cpass.value.trim() == ""){
                alert("Re-enter your Password.");
                return false;
            }else if(pass.value.trim() != cpass.value.trim()){
                alert("Passwords are not matching.");
                return false;
            }else if(addrs.value.trim() == ""){
                alert("Proper address is necessary.");
                return false;
            }else if(addrs.value.trim().length < 5){
                alert("Enter proper address details.");
                return false;
            }
            else{
                return true;
            }
        }
    </script>
</head>

<body style="background: radial-gradient(#fff,rgba(255,239,186,1));">

    <?php
        include "php/header1.php";
        ?>
 

    <div class="flex flex-col text-center w-full mb-5" style="margin-top: 40px;">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">SIGNUP</h1>
    </div>

    <form action="" onsubmit="return validation()" method="POST">
        <section class="text-gray-700 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">

                <div
                    class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 mr-auto">
                    <h2 class="text-gray-900 text-lg font-medium title-font mb-5 text-center">SignUp</h2>
                    <input
                        class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                        placeholder="Full Name" id="n" name='name' type="text" autocomplete='off'>
                    <input
                        class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                        placeholder="Email" id="e" name='email' type="text" autocomplete='off'>
                    <input
                        class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                        placeholder="Phone Number" id="pn" name='phone' type="Number" autocomplete='off'>

                    <input
                        class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                        placeholder="Password" id="p" name='password' type="password" autocomplete='off'>
                    <input
                        class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                        placeholder="Confirm Password" id="cp" name='' type="password" autocomplete='off'>

                    <textarea class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 h-48 text-base px-4 py-2 mb-4 resize-none block form-control"
                        placeholder="Address" id="add" name='add' type="text" autocomplete='off'></textarea>

                    <button
                        type="submit" name='submitr' class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mb-4">Register</button>
                    <p class="text-center">
                        Already a member? <a href="login.php" style="color: #8ebf42">Login Here</a>
                    </p>

                </div>
            </div>
        </section>
    </form>

    <?php
        include "php/footer.php";
        ?>
</body>

</html>
<?php
  include('connection.php');
  if(isset($_POST['submitr'])){
    $naam = $_POST['name'];
    $pata = $_POST['email'];
    $contact = $_POST['phone'];
    $pas = $_POST['password'];
    $addrs = $_POST['add'];
    $s = "SELECT  * FROM signup where email = '$pata' ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        echo "<script>alert('email already taken.')</script>";
    }else{
        $insertquery = "INSERT INTO signup (name, email, phone, password, address) VALUES ('$naam', '$pata', '$contact', '$pas', '$addrs')";
    $res = mysqli_query($con, $insertquery);
    if($res){
      echo "<script>alert('!! SignUp Completed (Data inserted). !!')</script>";
      echo "<script>window.location.href='login.php';</script>";
      exit;
    }else{
      echo "<script>alert('xx Database Crashed. (Data is not inserting)xx')</script>";
      exit;
    }
    }
    
  }
  $con->close();
?>