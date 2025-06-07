<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome!</title>
<link rel="stylesheet" href="css/bundesliga.css">
  
<body>
    
<div class="logo-container">
    <a href="../../../../shop-now-redirection.php">
      <img class="main-logo" src="../../../../top-of-home-page/icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" onkeyup="filterResults()">

        <ul id="searchResults" class="search-results">
          <!-- Search results will be displayed here -->
        </ul>
      </div> 
      
      <div class="icons-container">
        <a href="../../../../top-of-home-page/view-shipping-info.php">
          <i class="shipping">
            <img src="../../../../top-of-home-page/icons/truck-icon.png" alt="shipping">
          </i>
        </a>
        <a href="../../../../top-of-home-page/cart-page.php">
          <i class="cart">
            <img src="../../../../top-of-home-page/icons/shopping-cart.png" alt="cart">
          </i>
        </a>

        <?php
          if (isset($_SESSION["userid"])) {
            echo "<a href='../../../../top-of-home-page/profile-page.php'><i class='login'><img src='../../../../top-of-home-page/icons/user-icon.png' alt='user'></i></a>";
          }
          else {
            echo "<a href='../../../../top-of-home-page/login-page.php'><i class='login'><img src='../../../../top-of-home-page/icons/user-icon.svg' alt='user'></i></a>";
          }
        ?>
        
      </div>
</div>

  <div class="welcome-container">
    <h1>Wählen Sie ein Team aus...</h1>
  </div>


  <div class="grid-container">
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/augsburg.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/bayer-leverkusen.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/bayern-munich.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/bochum.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/borussia-dortmund.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/borussia-monchengladbach.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/darmstadt.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/eintract-frankfurt.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/freiburg.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/heidenheim.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/hoffenhiem.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/koln.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/leipzig.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/mainz.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/stuttgart.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/union-berlin.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/werder-bremen.png"></a></div>
      <div class="grid-item"><a href="#"><img src="bundesliga-logos/wolfsburg.png"></a></div>
  </div>

  <div class="welcome-container">
    <h1>...oder du kannst Bundesliga-Merch kaufen!</h1>
    <div class="grid-item"><a href="bundesliga-shop/bundesliga-shopping.html"><img src="../league-logos/bundesliga.png"></a></div>
  </div>

</body>
</html>