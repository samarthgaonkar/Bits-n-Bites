<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/seasonalcake.css">
    <title>Seasonal Cakes</title>
    <style>
      .zoom:hover {
      -ms-transform: scale(1.5); /* IE 9 */
      -webkit-transform: scale(1.5); /* Safari 3-8 */
      transform: scale(1.5);
      }
    </style>
</head>
<body style="background: radial-gradient(#fff,#ffd6d6);">

    <?php
      include "php/header2.php";
      ?>
        <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">SEASONAL CAKES</h1>
              <div class="h-1 w-20 bg-indigo-500 rounded"></div>
            </div>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">Have a look at our limited edition seasonal cakes!!!.</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg imgbox">
              <a href="scc.php">    
                <img class="h-40 rounded w-full object-cover object-center mb-6 zoom" src="images/occasional/strawberrycheese.jpg" alt="content">
              </a>  
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Cake</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Strawberry Cheese cake</h2>
                <p class="leading-relaxed text-base">Rs.600 </p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg imgbox">
              <a href="kiwi.php">    
                <img class="h-40 rounded w-full object-cover object-center mb-6 zoom" src="images/occasional/kiwi1.jpg" alt="content">
              </a>  
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Cake</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Kiwi Cake</h2>
                <p class="leading-relaxed text-base">Rs.800 </p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg imgbox">
              <a href="custard.php">    
                <img class="h-40 rounded w-full object-cover object-center mb-6 zoom" src="images/occasional/custardapple.jpeg" alt="content">
              </a>  
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Cake</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Custard Apple Cake</h2>
                <p class="leading-relaxed text-base">Rs.700 </p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg imgbox">
              <a href="litchi.php">    
                <img class="h-40 rounded w-full object-cover object-center mb-6 zoom" src="images/occasional/litchi.jpg" alt="content">
              </a>  
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Cake</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Litchi Cake</h2>
                <p class="leading-relaxed text-base">Rs.600 </p>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
      include "php/footer2.php";
      ?>
    
</body>
</html>