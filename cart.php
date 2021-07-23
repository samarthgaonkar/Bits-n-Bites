<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/cart.css">
  <script src="cart.js" async></script>
  <title>Document</title>
</head>

<body>


  <?php
  include "php/header2.php";
  ?>
  <h2>CART</h2>

  <div class="small-container cart-page">
    <details>
      <summary>CAKES</summary>
      <table class="table">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cakes/Black forest.png" alt="">
              <div class="cart-row">
                <p>Black Forest Cake</p>
                <small class="cart-price">Price: Rs.375</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.375</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cakes/truffle.jpg" alt="">
              <div class="cart-row">
                <p>Truffle Cake</p>
                <small class="cart-price">Price: Rs.340</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.340</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cakes/pineapple.jpg" alt="">
              <div>
                <p class="cart-row">Pineapple Cake</p>
                <small class="cart-price">Price: Rs.280</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.280</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cakes/strawberry.jpg" alt="">
              <div class="cart-row">
                <p>Strawberry Cake</p>
                <small class="cart-price">Price: Rs.300</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.300</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cakes/Red Velvet.jpg" alt="">
              <div class="cart-row">
                <p>Red Velvet Cake</p>
                <small class="cart-price">Price: Rs.410</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.410</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cakes/Almond delight.jpg" alt="">
              <div class="cart-row">
                <p>Almond Delite Cake</p>
                <small class="cart-price">Price: Rs.390</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.390</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cakes/freshfruit.jpg" alt="">
              <div class="cart-row">
                <p>Fresh Fruits</p>
                <small class="cart-price">Price: Rs.340</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.340</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cakes/Nutrella.jpg" alt="">
              <div class="cart-row">
                <p>Nutella cake</p>
                <small class="cart-price">Price: Rs.380</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.380</td>
        </tr>
      </table>
    </details>

    <details>
      <summary>PASTRIES</summary>
      <table>
        <!-- <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr> -->
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/pastries/black forest.jpg" alt="">
              <div class="cart-row">
                <p>Black Forest</p>
                <small class="cart-price">Price: Rs.60</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.60</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/pastries/almond delight.jpg" alt="">
              <div class="cart-row">
                <p>Almond Delite</p>
                <small class="cart-price">Price: Rs.60</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.60</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/pastries/pineapple.jpg" alt="">
              <div class="cart-row">
                <p>Pineapple</p>
                <small class="cart-price">Price: Rs.60</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.60</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/pastries/strawberry.jpg" alt="">
              <div class="cart-row">
                <p>Strawberry</p>
                <small class="cart-price">Price: Rs.60</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.60</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/pastries/red velvet.jpg" alt="">
              <div class="cart-row">
                <p>Red Velvet</p>
                <small class="cart-price">Price: Rs.80</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.80</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/pastries/fresh fruits.jpg" alt="">
              <div class="cart-row">
                <p>Fresh Fruits</p>
                <small class="cart-price">Price: Rs.80</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.80</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/pastries/nutella.jpg" alt="">
              <div class="cart-row">
                <p>Nutella</p>
                <small class="cart-price">Price: Rs.80</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.80</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/pastries/truffle.jpg" alt="">
              <div class="cart-row">
                <p>Truffle</p>
                <small class="cart-price">Price: Rs.80</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.80</td>
        </tr>
      </table>
    </details>

    <details>
      <summary>BISCUITS</summary>
      <table>
        <!-- <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr> -->
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cookies/austrian Jam Cookie.jpg" alt="">
              <div class="cart-row">
                <p>Austrian Jam Rings</p>
                <small class="cart-price">Price: Rs.475</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.475</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cookies/Gruyere cheese biscuits.jpg" alt="">
              <div class="cart-row">
                <p>Gruyere Cheese Biscuits</p>
                <small class="cart-price">Price: Rs.345</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.345</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cookies/choco chunk cookie.jpg" alt="">
              <div class="cart-row">
                <p>Choco Chunk Cookies</p>
                <small class="cart-price">Price: Rs.289</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.289</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cookies/macaron cookie.jpeg" alt="">
              <div class="cart-row">
                <p>Macaron Cookies</p>
                <small class="cart-price">Price: Rs.375</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.375</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cookies/KETO CHOCOLATE DIPPED.png" alt="">
              <div class="cart-row">
                <p>Keto Chocolate dipped cookies</p>
                <small class="cart-price">Price: Rs.410</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.410</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cookies/White Chocolate Stuffed.jpg" alt="">
              <div class="cart-row">
                <p>White Chocolate stuffed cookies</p>
                <small class="cart-price">Price: Rs.289</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.289</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cookies/Oatmeal-cranberry-Cookie.jpg" alt="">
              <div class="cart-row">
                <p>Oatmeal cranberry cookies</p>
                <small class="cart-price">Price: Rs.340</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.340</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/cookies/Night-Ownl_Cookie.jpg" alt="">
              <div class="cart-row">
                <p>Rainbow over bedrock cookies</p>
                <small class="cart-price">Price: Rs.294</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.294</td>
        </tr>
      </table>
    </details>

    <details>
      <summary>WEDDING CAKES</summary>
      <table>
        <!-- <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr> -->
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/occasional/wedcake1.jpg" alt="">
              <div class="cart-row">
                <p>Wedding cake 1</p>
                <small class="cart-price">Price: Rs.360</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.360</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/occasional/wedcake2.jpg" alt="">
              <div class="cart-row">
                <p>Wedding cake 2</p>
                <small class="cart-price">Price: Rs.380</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.380</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/occasional/wedcake3.jpg" alt="">
              <div class="cart-row">
                <p>Wedding cake 3</p>
                <small class="cart-price">Price: Rs.400</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.400</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/occasional/wedcake6.jpg" alt="">
              <div class="cart-row">
                <p>Wedding cake 4</p>
                <small class="cart-price">Price: Rs.425</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.425</td>
        </tr>
      </table>
    </details>

    <details>
      <summary>SEASONAL CAKES</summary>
      <table>
        <!-- <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr> -->
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/occasional/strawberrycheese.jpg" alt="">
              <div class="cart-row">
                <p>Strawberry Cheese Cake</p>
                <small class="cart-price">Price: Rs.360</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.360</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/occasional/kiwi1.jpg" alt="">
              <div class="cart-row">
                <p>Kiwi Cake</p>
                <small class="cart-price">Price: Rs.380</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.380</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/occasional/custardapple.jpeg" alt="">
              <div class="cart-row">
                <p>Custard Apple Cake</p>
                <small class="cart-price">Price: Rs.400</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.400</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/occasional/litchi.jpg" alt="">
              <div class="cart-row">
                <p>Litchi Cake</p>
                <small class="cart-price">Price: Rs.425</small>
                <br>
                <!-- <a href="">Remove</a> -->
              </div>
            </div>
          </td>
          <td><input class="cart-quantity-input" type="number" value="0" min="0"></td>
          <td class="cart-subtotal">Rs.425</td>
        </tr>
      </table>
    </details>
  </div>

  <div class="total-price">
    <table>
      <tr>
        <td>Subtotal</td>
        <td class="cart-final-subtotal">Rs.0</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td class="cart-tax">Rs.150</td>
      </tr>
      <tr>
        <td>Total</td>
        <td class="cart-total-price">Rs.0</td>
      </tr>

    </table>

  </div>
  </div>

  <div class="purchase">
    <button class="btn-purchase">PURCHASE</button>
  </div>

  <?php
  include "php/footer2.php";
  ?>





</body>

</html>