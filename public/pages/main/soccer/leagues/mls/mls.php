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
<link rel="stylesheet" href="css/mls.css">
  
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
    <h1>Select a team...</h1>
  </div>


  <div class="grid-container">
    <div class="grid-item"><a href="#"><img src="mls-logos/atlanta-united-fc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/austin-fc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/cf-montreal-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/charlotte-fc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/chicago-fire-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/colorado-rapids-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/columbus-crew-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/dc-united-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/fc-cincinatti-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/fc-dallas-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/houston-dynamo-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/inter-miami-cf-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/la-fc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/la-galaxy-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/minnesota-united-fc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/nashville-sc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/new-england-revolution-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/new-york-red-bulls-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/nyc-fc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/orlando-city-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/philadelphia-union-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/portland-timbers-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/real-salt-lake-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/san-jose-earthquakes-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/seattle-sounders-fc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/sporting-kc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/st-louis-city-sc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/toronto-fc-logo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="mls-logos/vancouver-whitecaps-fc-logo.png"></a></div>
  </div>

  <div class="welcome-container">
    <h1>...or you can shop for MLS merch!</h1>
    <div class="grid-item"><a href="mls-shop/mls-shopping.html"><img src="mls-logos/mls-logo.png"></a></div>
  </div>

</body>
</html>