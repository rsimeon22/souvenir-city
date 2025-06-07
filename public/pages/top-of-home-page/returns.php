<?php

// If there's a log in, continue the session via session-init.inc.php, but only require it once
require_once '../../includes/session-init.inc.php';


// Include database handler and logic to fetch orders
include '../../includes/dbh.inc.php';
include '../../includes/get-orders.inc.php';


// Variables for prompt message after form submission
$success = isset($_GET['success']) && $_GET['success'] == 1;
$failure = isset($_GET['failure']) && $_GET['failure'] == 2;
$alreadyExists = isset($_GET['wak']) && $_GET['wak'] == 3;


// Variables for past orders
$pastOrders = fetchPastOrders($conn, $userId);
$pastOrdersReturns = fetchPastOrdersReturns($conn, $userId);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Returns</title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.png">
</head>
<link rel="stylesheet" href="css/view-shipping-info.css">
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
        // if condition checking for user sign in
        // if signed in, user can access their profile page; if not, the user is forced to the log in page
          if (isset($_SESSION["userid"])) {
            echo "<a href='profile-page.php'><i class='login'><img src='icons/user-icon.png' alt='user'></i></a>";
          }
          else {
            echo "<a href='login-page.php'><i class='login'><img src='icons/user-icon.svg' alt='user'></i></a>";
          }
        ?>  
      </div>
    </div>

<section class="add-address">
  <h2>Return Orders</h2>

  <!-- Prompt messages -->
  <?php if ($success): ?>
  <p class="success-message">Return submitted successfully! Please allow 3-10 days for your return to process.</p>
  <?php endif; ?>

  <?php if ($failure): ?>
  <p class="failure-message" style="color: red; padding: 10px; background-color: rgb(255, 220, 220); border: 1px solid rgb(204, 142, 142); border-radius: 5px;">Please select an order.</p>
  <?php endif; ?>

  <?php if ($alreadyExists): ?>
  <p class="wak-message" style="color: blue; padding: 10px; background-color: rgb(212, 212, 255); border: 1px solid rgb(28, 28, 155); border-radius: 5px;">Your return already exists.</p>
  <?php endif; ?>
  

  <form action="../../includes/submit-returns.inc.php" method="POST">
    <div class="form-group">
      <select name="dropdown" id="dropdown" style="padding: 10px; width: 100%; font-size: 16px; font-family: 'Rubik';">
        <option value="placeholder" disabled selected>Select:</option>
          <?php foreach ($pastOrders as $order):  ?>
            <?php foreach ($order['items'] as $item): ?>

              <?php $optionValue = $item['product_name'] . '|' . $item['unit_price'] . '|' . $order['order_id']; ?>
              <option value="<?= htmlspecialchars($optionValue) ?>">
                <?= htmlspecialchars('#' . $order['order_id'] . ' - ' . $item['product_name']) ?> x <?= $item['quantity'] ?> ($<?= number_format($item['unit_price'], 2) ?>)</li>
              </option>

            <?php endforeach; ?>
          <?php endforeach; ?>
      </select>
    </div>

    <div class="large-text-box" style="padding-bottom: 15px;">
      <label for="reason">Reason (Optional):</label>
      <label>(300 character limit)</label>
      <textarea maxlength="300" type="text" class="large-text-box" id="reason" name="reason" style="height: 200px; width: 793px; font-family: 'Rubik'; font-size: 16px;" placeholder="Any Reason...?"></textarea>
    </div>


    <button type="submit">Submit Request</button>
  </form>
</section>