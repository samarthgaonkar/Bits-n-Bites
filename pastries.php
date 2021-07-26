<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pastries.css">
    <title>Pastries</title>
</head>
<body>
<!-------------------------------------------header code starts here--------------------------------------------------------------->

    <?php
      include "php/header2.php";
      ?>
      <!-------------------------------header code ends here---------------------------------------->

      <section>
        <div class="pastrieshead">
            <h1>PASTRIES</h1>
        </div>
      </section>

      <section class="text-gray-700 body-font pastrysection">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
              <a href="pastrybf.php" class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images\pastries\black forest.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Black Forest</h2>
                <p class="mt-1">Rs.60</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
              <a href="pastryad.php" class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images\pastries\almond delight.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Almond Delite</h2>
                <p class="mt-1">Rs.60</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
              <a href="pastrypa.php" class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images\pastries\pineapple.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Pineapple</h2>
                <p class="mt-1">Rs.60</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
              <a href="pastrysb.php" class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images\pastries\strawberry.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Strawberry</h2>
                <p class="mt-1">Rs.60</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
              <a href="pastryrv.php" class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images\pastries\red velvet.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Red Velvet</h2>
                <p class="mt-1">Rs.80</p>
              </div>
            </div>
            <!--<div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Chocolate</h2>
                <p class="mt-1">Rs.40</p>
              </div>
            </div>-->
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
              <a href="pastryff.php" class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images\pastries\fresh fruits.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Fresh Fruits</h2>
                <p class="mt-1">Rs.80</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
              <a href="pastrynutella.php" class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images\pastries\nutella.jpg">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Nutella</h2>
                <p class="mt-1">Rs.80</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
                <a href="pastrytruffle.php" class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images\pastries\truffle.jpg">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Truffle</h2>
                  <p class="mt-1">Rs.80</p>
                </div>
            </div>
            <!--<div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Almond Delite</h2>
                  <p class="mt-1">Rs.60</p>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/422x262">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Rasmalai Cake</h2>
                  <p class="mt-1">Rs.</p>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full imgbox">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/423x263">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pastry</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Butter Scotch Cake</h2>
                  <p class="mt-1">Rs.</p>
                </div>
            </div>-->
            
        </div>
      </section>

      <div style="padding-top: 40px;">
        <hr>
      </div>

      <!--------------------------------footer code starts--------------------------------->

      <?php
      include "php/footer2.php";
      ?>
      <!----------------footer code ends here-------------------------------->
    
</body>
</html>