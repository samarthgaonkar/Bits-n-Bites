<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/seasonalcake.css">
    <title>Wedding Cakes</title>
    <style>
* {
  box-sizing: border-box;
}


.zoom:hover {
  -ms-transform: scale(3.0); /* IE 9 */
  -webkit-transform: scale(3.0); /* Safari 3-8 */
  transform: scale(3.0); 
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
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">WEDDING CAKES</h1>
              <div class="h-1 w-20 bg-indigo-500 rounded"></div>
            </div>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">Have a look at our limited edition wedding cakes!!!.</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg imgbox">
              <a href="#">    
                <img  class="h-40 rounded w-full object-cover object-center mb-6 zoom" src="images/occasional/wedcake1.jpg" alt="content">
              </a>  
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Cake</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Wedding Cake 1</h2>
                <p class="leading-relaxed text-base" style="display:inline-block;">Rs.360</p>
                <!-- <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" style="display: inline-block; margin-left: 35px;">Add to Cart</button> -->
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg imgbox">
              <a href="#">    
                <img class="h-40 rounded w-full object-cover object-center mb-6 zoom" src="images/occasional/wedcake2.jpg" alt="content">
              </a>  
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Cake</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Wedding Cake 2</h2>
                <p class="leading-relaxed text-base" style="display:inline-block;">Rs.380</p>
                <!-- <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" style="display: inline-block; margin-left: 35px;">Add to Cart</button> -->
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg imgbox">
              <a href="#">    
                <img class="h-40 rounded w-full object-cover object-center mb-6 zoom" src="images/occasional/wedcake3.jpg" alt="content">
              </a>  
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Cake</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Wedding Cake 3</h2>
                <p class="leading-relaxed text-base" style="display:inline-block;">Rs.400</p>
                <!-- <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" style="display: inline-block; margin-left: 35px;">Add to Cart</button> -->
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg imgbox">
              <a href="#">    
                <img class="h-40 rounded w-full object-cover object-center mb-6 zoom" src="images/occasional/wedcake6.jpg" alt="content">
              </a>  
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Cake</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Wedding Cake 4</h2>
                <p class="leading-relaxed text-base" style="display:inline-block;">Rs.425 </p>
                <!-- <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" style="display: inline-block; margin-left: 35px;">Add to Cart</button> -->
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