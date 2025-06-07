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
<link rel="stylesheet" href="css/ncaa.css">
  
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
    <h1>Select a conference...</h1>
  </div>


  <div class="grid-container">
    <div class="grid-item"><a href=""><img src="ncaa-logos/acc.png"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/america-east.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/american-athletic-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/atlantic-10-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/atlantic-sun-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/big-8.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/big-ten.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/big-12.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/big-east.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/big-sky.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/big-south.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/big-west-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/caa.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/conference-usa.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/great-west-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/horizon-league.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/ivy-league.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/mac.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/metro_atlantic_athletic_conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/mid-continent-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/mid-eastern.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/missouri-valley-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/mountain-west.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/northeast-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/ohio-valley-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/pac-10.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/pac-12.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/patriot-league.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/pioneer-football-league.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/sec.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/southern-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/southland-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/southwestern-athletic-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/sun-belt.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/the-summit-league.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/west-coast-conference.gif"></a></div>
    <div class="grid-item"><a href=""><img src="ncaa-logos/western-athletic-conference.gif"></a></div>
  </div>

  <div class="welcome-container">
    <h1>...or you can shop for NCAA merch!</h1>
    <div class="grid-item"><a href="ncaa-shopping.html"><img src="ncaa-logos/ncaa-logo.png"></a></div>
  </div> 
  
  <!--image needs scaling-->

</body>
</html>