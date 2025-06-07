<?php

//include '../../includes/session-init.inc.php';
session_start();

if (!isset($_SESSION['cart_system'])){
  $_SESSION['cart_system'] = [];
}

  if (isset($_GET['remove'])) {
  $product_id = $_GET['remove'];
  unset($_SESSION['cart_system'][$product_id]);
  header('location: cart-page.php');
  exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Shopping Cart</title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.png">
</head>
<link rel="stylesheet" href="css/top-of-home-styles.css">
<script src="../../../../assets/js/script.js"></script>




<body>

  <div class="logo-container">
    <a href="../shop-now-redirection.php">
      <img class="main-logo" src="icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <div class="autocomplete-results" id="autocompleteResults"></div>
      </div>  
      
      <div class="icons-container">
        <a href="view-shipping-info.php">
          <i class="shipping">
            <img src="icons/truck-icon.png" alt="shipping">
          </i>
        </a>
        <a href="cart-page.php">
          <i class="cart">
            <img src="icons/shopping-cart.png" alt="cart">
          </i>
        </a>
        <?php
          if (isset($_SESSION["userid"])) {
            echo "<a href='profile-page.php'><i class='login'><img src='icons/user-icon.png' alt='user'></i></a>";
          }
          else {
            echo "<a href='login-page.php'><i class='login'><img src='icons/user-icon.svg' alt='user'></i></a>";
          }
        ?>  
      </div>
    </div>


    
    
      <div class="cart-container">
      <h2>Your Shopping Cart</h2>
        <!-- Example item 1 -->
        <div class="cart-item">
          <div class="item-details">
            
            <?php
            
            //$_SESSION['cart_system'] = [];
            
            if (!empty($_SESSION['cart_system'])) {
              $grand_total = 0; // Initialize the total as 0
              foreach ($_SESSION['cart_system'] as $product) {
                // Calculate total for each product (price * quantity)
                $item_total = $product['price'] * $product['quantity'];
                $grand_total += $item_total; // Add to the grand total
              }
              // Store the grand_total in the session
              $_SESSION['grand_total'] = $grand_total;

              // print cart items
              if (!empty($_SESSION['cart_system'])) {
                $cart_total = [];
                foreach ($_SESSION['cart_system'] as $product) { 
                  echo "<h3>{$product['name']} - \${$product['price']} x {$product['quantity']}";
                }
              
              }
            } else {
              // If no items in the cart, set grand_total to 0
              $_SESSION['grand_total'] = 0;
              echo "<h3>Your cart doesn't have anything in it!</h3>
              <br>
              <br>
              <button onclick='history.back()'>Go Back</button>";
            }
              
            ?>
            
          </div>
          <div class="item-details"><!-- Display Total Price -->
            <?php 
            if (empty($_SESSION['cart_system'])){
                echo "<h3> Keep shopping! </h3>";
            }
            else {
              // Formats the total of cart with 2 decimal points
              $formattedPrice = number_format($grand_total, 2);
              echo "<h3>Your Total: " . $formattedPrice . "</h3>";
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<br>';

              echo '<button><a href="../../includes/clear-cart.inc.php" styles="text-decoration: none;">Clear Cart</a></button>';
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<br>';
              
              echo '<button id="checkout-button"><a href="checkout-page.php" styles="text-decoration: none;">Proceed to Checkout</a></button>';
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<button onClick="javascript:history.go(-1)">Back to Shopping</button>';
              
            }

            ?>
         </div>    
      </div>

      

</body>
</html>