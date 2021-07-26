<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/cakeicon.png">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Bits n Bites</title>
    
</head>
<body>
<?php
  include "php/header2.php";
?>
    

      <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">House of cake lovers!!!</h1>
            <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Welcome to a magnificent experience of rich taste & celebrate the finest moments of life.</p>
          </div>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://images.unsplash.com/photo-1600277887761-ba3c6b06e08a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=500">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://images.unsplash.com/photo-1570730657158-f772f8793092?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=500">
              </div>
              <div class="md:p-2 p-1 w-full">
                <!--alt="gallery" class="w-full h-full object-cover object-center block" src="https://images..com/photo-1576116146391-9f0e20c8663d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=360&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=600"-->
                <video controls class="w-full h-full object-cover object-center block"><source src="images/cakes/cakevid.mp4" type="video/mp4"></video>
                <!--iframe class="w-full h-full object-cover object-center block" src="https://www.facebook.com/plugins/video.php?height=293&href=https%3A%2F%2Fwww.facebook.com%2Fcakesbydulini%2Fvideos%2F3184800014913102%2F&show_text=false&width=560" width="560" height="293" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe-->
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://images.unsplash.com/photo-1589218909732-f304d13fbf2c?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=361&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=601">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://images.unsplash.com/photo-1570578201128-b04806c957f8?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=502">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://images.unsplash.com/photo-1593307744921-00b909a78419?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=503">
              </div>
            </div>
          </div>
        </div>
      </section>

<?php
  include "php/footer2.php"
  ?>      

<!--<?php $IPATH = $_SERVER['DOCUMENT_ROOT'].'/php'; include($IPATH."nav.html"); ?>-->

      

      <!--js for toggle menu

      <script>
        var menuitems = document.getElementById("menuitems");

        menuitems.style.maxHeight = "0px";

        function menutoggle(){
          if(menuitems.style.maxHeight == "0px")
          {
            menuitems.style.maxHeight = "200px";
          }
          else{
            menuitems.style.maxHeight = "0px";
          }

        }

      </script>
      -->


    
</body>
</html>