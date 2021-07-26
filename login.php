<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
    <script type="text/javascript">
        function validation() {
            var usr = document.getElementById("usrname");
            var usrp = document.getElementById("usrpass");
            var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)\.([a-z]{2,20})(.[a-z]{2,8})?$/;
            if (usr.value.trim() == "") {
                alert("Enter your email id.");
                return false;
            } else if (!regx.test(usr.value)) {
                alert("Invalid email id.");
                return false;
            } else if (usrp.value.trim() == "") {
                alert("Password cannot be empty.");
                return false;
            } else if (usrp.value.trim().length < 4) {
                alert("Minimun length of passsword should be 4 characters.");
                return false;
            } else {
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
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">LOGIN</h1>
    </div>

    <form action="" onsubmit="return validation() " method="POST">
        <section class="text-gray-700 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">

                <div class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 mr-auto">
                    <h2 class="text-gray-900 text-lg font-medium title-font mb-5 text-center">Login</h2>
                    <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Email" id="usrname" type="text" name='email' autocomplete='off'>

                    <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Password" id="usrpass" type="password" name='password' autocomplete='off'>

                    <button type='submit' name='submitl' class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mb-4">Login</button>
                    <p class="text-center">
                        Not a member? <a href="signup.php" style="color: #8ebf42">SignUp Here</a>
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
if (isset($_POST['submitl'])) {
    $naam = $_POST['email'];
    $raksha = $_POST['password'];
    //$s = "SELECT * from signup  where email = '$naam' && password = '$raksha'";
    $s = "SELECT * from signup  where email = '$naam'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $r = "SELECT * from signup  where password = '$raksha' && email = '$naam'";
        $_SESSION['usr_nam'] = $naam;
        $resultp = mysqli_query($con, $r);
        $nump = mysqli_num_rows($resultp);
        if ($nump == 1) {
            echo "<script>
            alert('!! Welcome (User Data Exists). !!')
            </script>";
            echo "<script>window.location.href='index1.php';</script>";
            exit;
        } else {
            echo "<script>alert('!! Incorrect Password (User Data Exists). !!')</script>";
        }
    } else {
        echo "<script>alert('!! User Account not found (Please SignUp Before Logging). !!')</script>";
        //echo "<script>window.location.href='signup.php';</script>";
        exit;
    }
}
$con->close();
?>