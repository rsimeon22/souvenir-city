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
  <title>NFL Team Selection</title>
  <link rel="icon" type="image/x-icon" href="../../top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/nfl.css">
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
    <div class="grid-item"><a href="nfl-shop/bal-ravens.php"><img src="nfl-logos/nfl-baltimore-ravens-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/cin-bengals.php"><img src="nfl-logos/nfl-cincinnati-bengals-team-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/cle-browns.php"><img src="nfl-logos/nfl-cleveland-browns-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/pit-steelers.php"><img src="nfl-logos/nfl-pittsburgh-steelers-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/hou-texans.php"><img src="nfl-logos/nfl-houston-texans-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/ind-colts.php"><img src="nfl-logos/nfl-indianapolis-colts-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/jax-jags.php"><img src="nfl-logos/nfl-jacksonville-jaguars-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/ten-titans.php"><img src="nfl-logos/nfl-tennessee-titans-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/buf-bills.php"><img src="nfl-logos/nfl-buffalo-bills-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/mia-dolphins.php"><img src="nfl-logos/Miami-Dolphins-Logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/ne-patriots.php"><img src="nfl-logos/nfl-new-england-patriots-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/ny-jets.php"><img src="nfl-logos/new-york-jets-logo-1978-1997-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/den-broncos.php"><img src="nfl-logos/nfl-denver-broncos-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/kc-chiefs.php"><img src="nfl-logos/nfl-kansas-city-chiefs-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/la-chargers.php"><img src="nfl-logos/nfl-los-angeles-chargers-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/lv-raiders.php"><img src="nfl-logos/nfl-oakland-raiders-team-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/chi-bears.php"><img src="nfl-logos/nfl-chicago-bears-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/det-lions.php"><img src="nfl-logos/nfl-detroit-lions-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/gb-packers.php"><img src="nfl-logos/nfl-green-bay-packers-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/min-vikings.php"><img src="nfl-logos/nfl-minnesota-vikings-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/atl-falcons.php"><img src="nfl-logos/nfl-atlanta-falcons-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/car-panthers.php"><img src="nfl-logos/nfl-carolina-panthers-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/no-saints.php"><img src="nfl-logos/nfl-new-orleans-saints-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/tb-buccaneers.php"><img src="nfl-logos/tampa-bay-buccaneers-2020-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/dal-cowboys.php"><img src="nfl-logos/nfl-dallas-cowboys-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/ny-giants.php"><img src="nfl-logos/nfl-new-york-giants-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/phi-eagles.php"><img src="nfl-logos/nfl-philadelphia-eagles-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/was-commanders.php"><img src="nfl-logos/washington-commanders-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/ari-cardinals.php"><img src="nfl-logos/nfl-arizona-cardinals-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/la-rams.php"><img src="nfl-logos/los-angeles-rams-2020-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/sf-49ers.php"><img src="nfl-logos/nfl-san-francisco-49ers-team-logo-2-300x300.png"></a></div>
    <div class="grid-item"><a href="nfl-shop/sea-seahawks.php"><img src="nfl-logos/nfl-seattle-seahawks-team-logo-2-300x300.png"></a></div>
  </div>

  <div class="welcome-container">
    <h1>...or you can shop for NFL merch!</h1>
    <div class="grid-item"><a href="nfl-shop/nfl-shopping.php"><img src="nfl-logos/nfl-logo.png"></a></div>
  </div> 


</body>
</html>