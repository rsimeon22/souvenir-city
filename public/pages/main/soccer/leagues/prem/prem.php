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
<link rel="stylesheet" href="css/prem.css">
  
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
    <div class="grid-item"><img src="prem-logos/AFC-Bournemouth-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Arsenal-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Aston-Villa-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Brentford-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Brighton-Hove-Albion-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Chelsea-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Crystal-Palace-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Everton-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Fulham-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Leeds-United-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Leicester-City-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Liverpool-FC-logo-300x300.png"></div>
    <div class="grid-item"><a href="prem-shop/man-city.php"><img src="prem-logos/Manchester-City-FC-logo.png"></a></div>
    <div class="grid-item"><a href="prem-shop/man-united.php"><img src="prem-logos/Manchester-United-FC-logo-300x300.png"></a></div>
    <div class="grid-item"><img src="prem-logos/Newcastle-United-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Nottingham-Forest-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Southampton-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Tottenham-Hotspur-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/West-Ham-United-FC-logo-300x300.png"></div>
    <div class="grid-item"><img src="prem-logos/Wolverhampton-Wanderers-logo-300x300.png"></div>
  </div>

  <div class="welcome-container">
    <h1>...or you can shop for Premier League merch!</h1>
    <div class="grid-item"><a href="prem-shop/prem-shopping.html"><img src="../league-logos/prem.png"></a></div>
  </div>

</body>
</html>