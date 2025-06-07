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
  <title>NBA Team Selection</title>
  <link rel="icon" type="image/x-icon" href="../../top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/nba-home.css">

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
    <div class="grid-item"><a href="nba-shop/atl-hawks.php"><img src="nba-logos/nba-atlanta-hawks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/bos-celtics.php"><img src="nba-logos/nba-boston-celtics-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/brk-nets.php"><img src="nba-logos/nba-brooklyn-nets-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/cha-hornets.php"><img src="nba-logos/nba-charlotte-hornets-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/chi-bulls.php"><img src="nba-logos/nba-chicago-bulls-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/cle-cavaliers.php"><img src="nba-logos/cleveland-cavaliers-2010-2017-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/dal-mavericks.php"><img src="nba-logos/nba-dallas-mavericks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/den-nuggets.php"><img src="nba-logos/nba-denver-nuggets-logo-2018-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/det-pistons.php"><img src="nba-logos/nba-detroit-pistons-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/gs-warriors.php"><img src="nba-logos/nba-golden-state-warriors-logo-2020-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/hou-rockets.php"><img src="nba-logos/nba-houston-rockets-logo-2020-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/ind-pacers.php"><img src="nba-logos/nba-indiana-pacers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/la-clippers.php"><img src="nba-logos/nba-la-clippers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/la-lakers.php"><img src="nba-logos/nba-los-angeles-lakers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/mem-grizzlies.php"><img src="nba-logos/nba-memphis-grizzlies-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/mia-heat.php"><img src="nba-logos/nba-miami-heat-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/mil-bucks.php"><img src="nba-logos/nba-milwaukee-bucks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/min-timberwolves.php"><img src="nba-logos/nba-minnesota-timberwolves-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/nola-pelicans.php"><img src="nba-logos/nba-new-orleans-pelicans-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/ny-knicks.php"><img src="nba-logos/nba-new-york-knicks-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/okc-thunder.php"><img src="nba-logos/nba-oklahoma-city-thunder-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/orl-magic.php"><img src="nba-logos/nba-orlando-magic-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/phi-76ers.php"><img src="nba-logos/nba-philadelphia-76ers-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/phx-suns.php"><img src="nba-logos/phoenix-suns-logo-symbol-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/por-trail-blazers.php"><img src="nba-logos/portland-trail-blazers-logo-symbol-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/sac-kings.php"><img src="nba-logos/nba-sacramento-kings-logo-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/sa-spurs.php"><img src="nba-logos/san-antonio-spurs-logo-symbol-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/tor-raptors.php"><img src="nba-logos/nba-toronto-raptors-logo-2020-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/utah-jazz.php"><img src="nba-logos/utah-jazz-logo-2022-300x300.png"></a></div>
    <div class="grid-item"><a href="nba-shop/was-wizards.php"><img src="nba-logos/nba-washington-wizards-logo-300x300.png"></a></div>
  </div>


  <div class="welcome-container">
    <h1>...or you can shop for NBA merch!</h1>
    <div class="grid-item"><a href="nba-shop/nba-shopping.php"><img src="nba-logos/nba-logo.png"></a></div>
  </div> 

</body>
</html>