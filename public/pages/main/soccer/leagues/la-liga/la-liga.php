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
<link rel="stylesheet" href="css/la-liga.css">
  
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
    <h1>Seleccione un equipo...</h1>
  </div>


  <div class="grid-container">
    <div class="grid-item"><a href="#"><img src="la-liga-logos/alaves.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/almeria.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/athletic-bilbao.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/atletico-madrid.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/cadiz.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/celta-vigo.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/fc-barcelona.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/getafe.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/girona.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/granada.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/las-palmas.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/osasuna.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/rayo-vallecano.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/real-betis.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/real-madrid.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/real-mallorca.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/real-sociedad.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/sevilla.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/valencia.png"></a></div>
    <div class="grid-item"><a href="#"><img src="la-liga-logos/villareal.png"></a></div>
  </div>

  <div class="welcome-container-2">
    <h1>...¡O puedes comprar productos de La Liga!</h1>
    <div class="grid-item"><a href="la-liga-shop/la-liga-shopping.html"><img src="../league-logos/la-liga.png"></a></div>
  </div>

</body>
</html>