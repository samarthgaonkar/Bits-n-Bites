<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cart.css">
    <title>Cakes Cart</title>
</head>
<body>

    <?php
      include "php/header2.php";
      ?>
      <div class="small-container cart-page">
          <table>
              <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
              </tr>
              <tr>
                  <td>
                      <div class="cart-info">
                          <img src="images/cakes/truffle.jpg" alt="">
                          <div>
                            <form action='' method='post'>
                              <p>Truffle Cake</p>
                              <small><s>Price: Rs.350</s></small>
                              <br>
                              <a href="">Remove</a>
                          </div>
                      </div>
                  </td>
                  <td><input type="number" value="1"></td>
                  <td>Rs.350</td>
              </tr>
              <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/cakes/Red Velvet.jpg" alt="">
                        <div>
                            <p>Red Velvet Cake</p>
                            <small><s>Price: Rs.400</s></small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rs.400</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/cakes/Black forest.png" alt="">
                        <div>
                            <p>Black Forest</p>
                            <small><s>Price: Rs.375</s></small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rs.375</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/cakes/freshfruit.jpg" alt="">
                        <div>
                            <p>Fresh Fruit</p>
                            <small><s>Price: Rs.425</s></small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rs.425</td>
            </tr>
          </table>

          <div class="total-price">
              <table>
                  <tr>
                      <td>Subtotal</td>
                      <td>Rs.1550</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>Rs.150</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rs.1700</td>
                </tr>
              </table>
          </div>
      </div>

      <?php
      include "php/footer2.php";
      ?>


    
</body>
</html>