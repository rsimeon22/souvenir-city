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
  <title>NHL Team Selection</title>
  <link rel="icon" type="image/x-icon" href="../../top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/nhl.css">
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
    <div class="grid-item"><a href="nhl-shop/bos-bruins.php"><img src="nhl-logos/nhl-boston-bruins-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/buf-sabres.php"><img src="nhl-logos/nhl-buffalo-sabres-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/det-red-wings.php"><img src="nhl-logos/nhl-detroit-red-wings-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/fla-panthers.php"><img src="nhl-logos/nhl-florida-panthers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/mtl-canadiens.php"><img src="nhl-logos/nhl-montreal-canadiens-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/ott-senators.php"><img src="nhl-logos/nhl-ottawa-senators-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/tb-lightning.php"><img src="nhl-logos/nhl-tampa-bay-lightning-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/tor-maple-leafs.php"><img src="nhl-logos/nhl-toronto-maple-leafs-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/car-hurricanes.php"><img src="nhl-logos/nhl-carolina-hurricanes-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/col-blue-jackets.php"><img src="nhl-logos/nhl-columbus-blue-jackets-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/nj-devils.php"><img src="nhl-logos/nhl-new-jersey-devils-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/ny-islanders.php"><img src="nhl-logos/nhl-new-york-islanders-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/ny-rangers.php"><img src="nhl-logos/nhl-new-york-rangers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/phi-flyers.php"><img src="nhl-logos/nhl-philadelphia-flyers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/pit-penguins.php"><img src="nhl-logos/nhl-pittsburgh-penguins-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/was-capitals.php"><img src="nhl-logos/nhl-washington-capitals-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/chi-blackhawks.php"><img src="nhl-logos/nhl-chicago-blackhawks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/col-avalanche.php"><img src="nhl-logos/nhl-colorado-avalanche-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/dal-stars.php"><img src="nhl-logos/nhl-dallas-stars-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/min-wild.php"><img src="nhl-logos/nhl-minnesota-wild-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/nsh-predators.php"><img src="nhl-logos/nhl-nashville-predators-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/stl-blues.php"><img src="nhl-logos/nhl-st-louis-blues-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/utah-mammoth.php"><img src="nhl-logos/nhl-utah-mammoth-logo.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/wpg-jets.php"><img src="nhl-logos/nhl-winnipeg-jets-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/ana-ducks.php"><img src="nhl-logos/nhl-anaheim-ducks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/cgy-flames.php"><img src="nhl-logos/nhl-calgary-flames-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/edm-oilers.php"><img src="nhl-logos/nhl-edmonton-oilers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/la-kings.php"><img src="nhl-logos/nhl-los-angeles-kings-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/sj-sharks.php"><img src="nhl-logos/nhl-san-jose-sharks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/sea-kraken.php"><img src="nhl-logos/nhl-seattle-kraken-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/van-canucks.php"><img src="nhl-logos/nhl-vancouver-canucks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nhl-shop/vgs-golden-knights.php"><img src="nhl-logos/nhl-vegas-golden-knights-logo-300x300.png"></a></div>
  </div>

  <div class="welcome-container">
    <h1>...or you can shop for NHL merch!</h1>
    <div class="grid-item"><a href="nhl-shop/nhl-shopping.php"><img src="nhl-logos/nhl-logo.png"></a></div>
  </div> 


</body>
</html>