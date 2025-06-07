<?php
  
// If there's a log in, continue the session via session-init.inc.php
include '../../includes/session-init.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Add Card to Wallet</title>
  <link rel="icon" type="image/x-icon" href="top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/pp-buttons.css">
<script src="../assets/js/search.js"></script>

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




<section class="checkout">

<div class="row">
  <div class="column">
    <div class="card-on-file-container">
      <div class="card-on-file-item">
        <?php
          
        ?>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="add-card-container">
      <div class="add-card-form">
        <h2>Add a New Card</h2>
        <form id="add-card-form" method="post">
        <div class="form-group">
          <label for="card-name">Name on Card:</label>
          <input type="text" id="card-name" name="card-name" placeholder="Name on card..." required>
          <i class="bi bi-eye-slash" id="togglePassword"></i>
        </div>

        <div class="form-group">
          <label for="card-number">Card Number:</label>
          <input type="text" id="card-number" name="card-number" placeholder="Card number..." required>
          <i class="bi bi-eye-slash" id="togglePassword"></i>
        </div>

        <div class="form-group-twins">
          <div>
            <label for="city">EXP:</label>
            <input type="city" id="city" name="city" placeholder="MM/YY" required>
          </div>  
          
          <div>
            <label for="state">CVV:</label>
            <input type="state" id="state" name="state" placeholder="Security Code..." required>
          </div> 
        </div>
      
        <button id="add-card-button" type="submit">Save Card to Account</button> 
        
        </form>
      </div>
    </div>
  </div>
</div>
</section>