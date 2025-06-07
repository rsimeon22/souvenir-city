<?php

// If there's a log in, continue the session
session_start();


// Looks for session id
if (isset($_GET['session_id'])) {
    $session_id = $_GET['session_id'];
} else {
    echo "Session ID missing!";
    exit;
}


// Looks for order
if (!isset($_SESSION['order_summary'])) {
    echo "No order info found.";
    exit;
}


$_SESSION['forward_order_summary'] = $_SESSION['order_summary']; // for displaying

$order = $_SESSION['order_summary'];

// Gets logic for saving orders and sending verification email, but require it only once
require_once '../../includes/save-order.inc.php';
require_once '../../includes/send-email.inc.php';


$_SESSION['forward_order_summary'] = $order;


// Assuming user email and name are stored in session
$customerEmail = $_SESSION['useremail'] ?? '';
$customerName = $_SESSION['userusername'] ?? 'Customer';


// Send order confirmation email if email exists
if (!empty($customerEmail)) {
    $itemsHTML = '<ul>';
    if (isset($order['items'])) {
        foreach ($order['items'] as $item) {
            $productName = htmlspecialchars($item['price_data']['product_data']['name'] ?? 'Item');
            $quantity = $item['quantity'];
            $price = number_format(($item['price_data']['unit_amount'] ?? 0) / 100, 2);
            $itemsHTML .= "<li>$productName x $quantity @ \$$price</li>";
        }
    } else {
        $itemsHTML .= "<li>No items found in order</li>";
    }
    $itemsHTML .= '</ul>';

    $subject = "Your Souvenir City Order Confirmation";
    $bodyHtml = '
    <div style="font-family: "Rubik", "Segoe UI", "Helvetica Neue", Arial, sans-serif; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto 20px auto; /* Center the box and add vertical spacing */ color: #762EEA;">
      <h2 style="color: #762EEA;">Thank you for your order, ' . htmlspecialchars($customerName) . '!</h2>
      <p>Your order has been received and is being processed.</p>
      <p><strong style="font-size: 18px;">Total: $' . number_format($order['total_amount'], 2) . '</strong></p>
      <h4 style="margin-top: 20px;">Items:</h4>
      <ul style="padding-left: 5px;">' . $itemsHTML . '</ul>
      <h2 style="margin-top: 40px; color: #762EEA;">— Souvenir City</h2>
      <img src="icons/souvenir-city-logo.png" alt="">
      <br>
      <br>
      <br>
      <h4>This is a demo.<h4>
    </div>
    ';

    sendEmail($customerEmail, $customerName, $subject, $bodyHtml);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Success</title>
<link rel="icon" type="image/x-icon" href="icons/favicon.png">
<link rel="stylesheet" href="css/top-of-home-styles.css">
<script src="../../../../assets/js/search.js"></script>
</head>

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

<div class="order-confirmation">
    <div class="order-item">
        <h2>Thank you for your order! You should receive an email shortly.</h2>
        <h3>Total: $<?= number_format($order['total_amount'], 2) ?></h3>

        <ul>
        <?php
            if (isset($order['items'])) {
                foreach ($order['items'] as $item) {
                    if (isset($item['price_data']['product_data']['name'])) {
                        $product_name = htmlspecialchars($item['price_data']['product_data']['name']);
                        $product_quantity = $item['quantity'];
                        $product_price = $item['price_data']['unit_amount'] / 100; // Convert to dollars
                        $product_size = $item;

                      echo "<li>{$product_name} x {$product_quantity} @ $" . number_format($product_price, 2) . "</li>";

                    } else {
                        echo "<li>Product details not available</li>";
                    }
                }
            } else {
                echo "<li>No items found in order</li>";
            }
        ?>
        </ul>

        
        <?php
        if (isset($_SESSION["userid"])) {
          echo "<h2><a href='my-orders.php'>View Your Order(s)</a><h2>";
        }
        else {
          echo "<h2><a href='login-page.php'>View Your Order(s)</a></h2>";
        }
        ?>

        <h2><a href="../shop-now-redirection.php">Back to Home</a></h2>
    </div>
</div>
</body>
</html>
