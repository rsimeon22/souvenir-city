<?php
  
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>WNBA Team Selection</title>
  <link rel="icon" type="image/x-icon" href="../../top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/wnba.css">
<script src="../../../assets/js/script.js"></script>
<script src="../../../assets/js/search.js"></script>

  
<body>
    
<div class="logo-container">
    <a href="../../shop-now-redirection.php">
      <img class="main-logo" src="../../top-of-home-page/icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" onkeyup="filterResults()">

        <ul id="searchResults" class="search-results">
          <!-- Search results will be displayed here -->
        </ul>
      </div> 
      
      <div class="icons-container">
        <a href="../../top-of-home-page/view-shipping-info.php">
          <i class="shipping">
            <img src="../../top-of-home-page/icons/truck-icon.png" alt="shipping">
          </i>
        </a>
        <a href="../../top-of-home-page/cart-page.php">
          <i class="cart">
            <img src="../../top-of-home-page/icons/shopping-cart.png" alt="cart">
          </i>
        </a>

        <?php
          if (isset($_SESSION["userid"])) {
            echo "<a href='../../top-of-home-page/profile-page.php'><i class='login'><img src='../../top-of-home-page/icons/user-icon.png' alt='user'></i></a>";
          }
          else {
            echo "<a href='../../top-of-home-page/login-page.php'><i class='login'><img src='../../top-of-home-page/icons/user-icon.svg' alt='user'></i></a>";
          }
        ?>
        
      </div>
</div>

  <div class="welcome-container">
    <h1>Select a team...</h1>
  </div>


  <div class="grid-container">
    <div class="grid-item"><a href="wnba-shop/atl-dream.php"><img src="wnba-logos/atlanta-dream.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/chi-sky.php"><img src="wnba-logos/chicago-sky.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/con-sun.php"><img src="wnba-logos/connecticut-sun.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/dal-wings.php"><img src="wnba-logos/dallas-wings.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/gs-valkyries.php"><img src="wnba-logos/golden-state-valkyries.png"></a></div>
    <div class="grid-item"><a href="wnba-shop/ind-fever.php"><img src="wnba-logos/indiana-fever.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/lv-aces.php"><img src="wnba-logos/lv-aces.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/la-sparks.php"><img src="wnba-logos/la-sparks.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/min-lynx.php"><img src="wnba-logos/minnesota-lynx.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/ny-liberty.php"><img src="wnba-logos/ny-liberty.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/phx-mercury.php"><img src="wnba-logos/phoenix-mercury.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/sea-storm.php"><img src="wnba-logos/seattle-storm.gif"></a></div>
    <div class="grid-item"><a href="wnba-shop/tor-tempo.php"><img src="wnba-logos/toronto-tempo.png"></a></div>
    <div class="grid-item"><a href="wnba-shop/was-mystics.php"><img src="wnba-logos/washington-mystics.gif"></a></div>
  </div>
  
  <div class="welcome-container-2">
    <h1>...or you can shop for WNBA merch!</h1>
    <div class="grid-item"><a href="wnba-shop/wnba-shopping.php"><img src="wnba-logos/wnba-logo.png"></a></div>
  </div>


  

</body>
</html>