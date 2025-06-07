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
  <title>Change Your E-mail</title>
  <link rel="icon" type="image/x-icon" href="top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/top-of-home-styles.css">
  
<body>
    
<div class="logo-container">
    <a href="../shop-now-redirection.php">
      <img class="main-logo" src="icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" onkeyup="filterResults()">

        <ul id="searchResults" class="search-results">
          <!-- Search results will be displayed here -->
        </ul>
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


<div class="login-container">
    <div class="login-form">
      <h2>Change E-mail</h2>
      <form action="../../includes/change-email.inc.php" method="post"> 
        <div class="form-group">
          <label for="old-e-mail">Old E-mail:</label>
          <input type="text" id="old-e-mail" name="old-e-mail" placeholder="Old E-mail..." required>
        </div>

        <div class="form-group">
          <label for="new-e-mail">New E-mail:</label>
          <input type="text" id="new-e-mail" name="new-e-mail" placeholder="New E-mail" required>
        </div>

        <button type="submit" name="submit">Confirm</button>
      </form>
    </div>
</div>