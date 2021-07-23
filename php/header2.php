<?php
  session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <header class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>  
            
            <span class="ml-3 text-xl">Bits n Bites</span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
            <a href="./index1.php" class="mr-5 hover:text-gray-900">Home</a>
                        <li class="drop">
                <a href="#" class="mr-5 hover:text-gray-900">Products</a>
                <div class="dropcontent">
                    <a href="./cakes.php">Cakes</a>
                    <a href="./wedcake.php">Wedding Cakes</a>
                    <a href="./seasonalcake.php">Seasonal Cakes</a>
                    <a href="./pastries.php">Pastries</a>
                    <a href="./cookies.php">Biscuits</a>   
                </div>

            </li>
            <a href="./cart.php" class="mr-5 hover:text-gray-900">Cart</a>
            <a href="./contact.php" class="mr-5 hover:text-gray-900">Contact</a>
            
            
          </nav>
          <!--
          <img src="images/icons/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
          
          <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><a href="./login.php">Login</a>

            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            -->
            <span><?php echo $_SESSION['usr_nam']; ?></span>
              <span class="ml-3 text-sm"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg></span>
              <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><a href="./logout.php">Log out</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
  </header>
</body>
</html>