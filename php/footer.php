<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript">
    function validate()
{
   var emailv = document.getElementById("email");
   var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,20})(.[a-z]{2,8})?$/;
   if(emailv.value.trim() == ""){
          alert("Email is required.");
          return false;
        }else if(!regx.test(emailv.value)){
          alert("Invalid email id.");
          return false;
        }else{
          return true;
        }

   
}
  </script>

</head>
<body>
  <footer class="text-white-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap md:text-left text-center order-first">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">QUICK LINKS</h2>
              <nav class="list-none mb-10">
                <li>
                  <a href="#" class="text-gray-600 hover:text-gray-800">Cakes</a>
                </li>
                <li>
                  <a href="#" class="text-gray-600 hover:text-gray-800">Pastries</a>
                </li>
                <li>
                  <a href="#" class="text-gray-600 hover:text-gray-800">Biscuits</a>
                </li>
                
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">OCCASIONAL CAKES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a href="#" class="text-gray-600 hover:text-gray-800">Wedding day cakes</a>
                </li>
                <li>
                  <a href="#" class="text-gray-600 hover:text-gray-800">Seasonal cakes</a>
                </li>
                
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CONTACT US</h2>
              <p>
                  Call: 18001234567<br>
                  10:30 am to 5:30 pm (Mon to Sat)<br>
                  <br>
                  E-mail: info@bitsnbites.com
              </p>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Newsletter</h2>
              <div class="flex xl:flex-no-wrap md:flex-no-wrap lg:flex-wrap flex-wrap justify-center md:justify-start">

<!--_____________________________________________******VALIDATION******___________________________________________________-->


                <form onsubmit="return validate()"  action='' method="POST">

                  <div><span id=''></span></div>
                <input class="w-40 sm:w-auto bg-gray-100 rounded xl:mr-4 lg:mr-0 sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-indigo-500 text-base py-2 px-4 form-control" placeholder="Email" type="text" name='email' id='email' autocomplete="off">
                
                <button type="submit" name="submits" class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">SUBSCRIBE</button>
              </form>

<!--__________________________________________*****************************________________________________________________-->

              </div>
              <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Please subscribe for regular updates
                <br class="lg:block hidden">
              </p>
            </div>
          </div>
        </div>
        <div class="bg-gray-200">
          <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>
              <span class="ml-3 text-xl">Bits n Bites</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 Bits n Bites —
              <a href="" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@BitsnBites</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
  </footer>
</body>
</html>
<?php
  include_once('connectionf.php');
  if(isset($_POST['submits'])){
    
    $pata = $_POST['email'];
    
    $s = "SELECT  * FROM subs where email = '$pata' ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

  if ($num == 1) {
      echo "<script>alert('You have Already Subscribed. !!')</script>";
      //echo "<script>window.location.href='#';</script>";

  } else {
      $insertquery = "INSERT INTO subs (email) VALUES ('$pata')";
      $res = mysqli_query($con, $insertquery);
      if($res){
        echo "<script>alert('!! Thanku For Subscription (Data Inserted).!!')</script>";
        //echo "<script>window.location.href='#';</script>";
        exit;
      }else{
        echo "<script>alert('xx Database Crashed. xx')</script>";
      }
      
  }
      
  }
  $con->close();
?>