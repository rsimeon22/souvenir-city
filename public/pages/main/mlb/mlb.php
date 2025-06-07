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
  <title>MLB Team Selection</title>
  <link rel="icon" type="image/x-icon" href="../../top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/mlb.css">
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
            echo "<a href='../../top-of-home-page/login-page.html'><i class='login'><img src='../../top-of-home-page/icons/user-icon.svg' alt='user'></i></a>";
          }
        ?>
        
      </div>
</div>


  <div class="welcome-container">
    <h1>Select a team...</h1>
  </div>
 

  <div class="grid-container">
    <div class="grid-item"><a href="mlb-shop/bal-orioles.php"><img src="mlb-logos/mlb-baltimore-orioles-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/bos-red-sox.php"><img src="mlb-logos/mlb-boston-red-sox-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/ny-yankees.php"><img src="mlb-logos/mlb-new-york-yankees-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/tb-rays.php"><img src="mlb-logos/mlb-tampa-bay-rays-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/tor-blue-jays.php"><img src="mlb-logos/mlb-toronto-blue-jays-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/chi-white-sox.php"><img src="mlb-logos/mlb-chicago-white-sox-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/cle-guardians.php"><img src="mlb-logos/mlb-cleveland-guardians-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/det-tigers.php"><img src="mlb-logos/mlb-detroit-tigers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/kc-royals.php"><img src="mlb-logos/mlb-kansas-city-royals-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/min-twins.php"><img src="mlb-logos/mlb-minnesota-twins-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/hou-astros.php"><img src="mlb-logos/mlb-Houston-Astros-Logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/la-angels.php"><img src="mlb-logos/mlb-los-angeles-angels-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/oak-athletics.php"><img src="mlb-logos/mlb-oakland-athletics-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/sea-mariners.php"><img src="mlb-logos/mlb-seattle-mariners-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/tex-rangers.php"><img src="mlb-logos/mlb-texas-rangers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/atl-braves.php"><img src="mlb-logos/mlb-atlanta-braves-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/mia-marlins.php"><img src="mlb-logos/mlb-miami-marlins-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/ny-mets.php"><img src="mlb-logos/mlb-new-york-mets-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/phi-phillies.php"><img src="mlb-logos/mlb-Philadelphia-Phillies-Logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/was-nationals.php"><img src="mlb-logos/mlb-Washington-Nationals-Logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/chi-cubs.php"><img src="mlb-logos/mlb-chicago-cubs-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/cin-reds.php"><img src="mlb-logos/mlb-cincinnati-reds-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/mil-brewers.php"><img src="mlb-logos/mlb-milwaukee-brewers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/pit-pirates.php"><img src="mlb-logos/mlb-pittsburgh-pirates-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/stl-cardinals.php"><img src="mlb-logos/mlb-st-louis-cardinals-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/ari-diamondbacks.php"><img src="mlb-logos/mlb-arizona-diamondbacks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/col-rockies.php"><img src="mlb-logos/mlb-colorado-rockies-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/la-dodgers.php"><img src="mlb-logos/mlb-los-angeles-dodgers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/sd-padres.php"><img src="mlb-logos/mlb-san-diego-padres-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="mlb-shop/sf-giants.php"><img src="mlb-logos/mlb-san-francisco-giants-logo-300x300.png"></a></div>
  </div>

  <div class="welcome-container">
    <h1>...or you can shop for MLB merch!</h1>
    <div class="grid-item"><a href="mlb-shop/mlb-shopping.php"><img src="mlb-logos/mlb-logo.png"></a></div>
  </div> 

</body>
</html> 