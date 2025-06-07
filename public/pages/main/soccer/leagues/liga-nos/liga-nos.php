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
<link rel="stylesheet" href="css/liga-nos.css">
  
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
    <h1>Selecione uma equipe...</h1>
  </div>


  <div class="grid-container">
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/arouca.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/benfica.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/boavista.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/braga.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/casa-pia.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/chaves.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/estoril.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/estrela-da-amadora.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/famalicao.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/farense.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/gil-vicente.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/moreirense.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/portimonense.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/porto.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/rio-ave.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/sporting.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/vitória-de-guimarães.png"></a></div>
    <div class="grid-item"><a href="#"><img src="liga-nos-logos/vizela.png"></a></div>
  </div>

  <div class="welcome-container">
    <h1>...ou pode comprar produtos da Liga Nos!</h1>
    <div class="grid-item"><a href="liga-nos-shop/liga-nos-shopping.html"><img src="../league-logos/liga-nos.jpg"></a></div>
  </div>

</body>
</html>