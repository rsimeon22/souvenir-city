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
<link rel="stylesheet" href="css/row.css">
  
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
    <h1>Seleziona una squadra...</h1>
  </div>


  <div class="grid-container">
    <div class="grid-item"><a href="#"><img src="serie-a-logos/atalanta.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/bologna.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/cagliari.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/empoli.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/fiorentina.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/frosinone.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/genoa.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/hellas-verona.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/inter-milan.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/juventus.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/lazio.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/lecce.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/milan (ac-milan).png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/monza.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/napoli.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/roma.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/salernitana.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/sassuolo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/torino.png"></a></div>
    <div class="grid-item"><a href="#"><img src="serie-a-logos/udinese.png"></a></div>
  </div>

  <div class="welcome-container">
    <h1>...or browse merch from the rest of the world!</h1>
    <div class="grid-item"><a href="serie-a-shop/serie-a-shopping.html"><img src="../league-logos/row.jpg"></a></div>
  </div>

</body>
</html>