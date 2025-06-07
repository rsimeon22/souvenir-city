<!--<?php

session_start();


if (empty($_SESSION['cart_system'])) {
    $_SESSION['cart_system'] = [];
}

?>
-->

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Browse!</title>
  <link rel="icon" type="image/x-icon" href="../../../top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/was-mystics.css">
<script src="../../../../assets/js/search.js"></script>
  
<body>
    
<div class="logo-container">
    <a href="../../../shop-now-redirection.php">
      <img class="main-logo" src="../../../top-of-home-page/icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" onkeyup="filterResults()">

        <ul id="searchResults" class="search-results">
          <!-- Search results will be displayed here -->
        </ul>
      </div> 
      
      <div class="icons-container">
        <a href="../../../top-of-home-page/view-shipping-info.php">
          <i class="shipping">
            <img src="../../../top-of-home-page/icons/truck-icon.png" alt="shipping">
          </i>
        </a>
        <a href="../../../top-of-home-page/cart-page.php">
          <i class="cart">
            <img src="../../../top-of-home-page/icons/shopping-cart.png" alt="cart">
          </i>
        </a>

        <?php
          if (isset($_SESSION["userid"])) {
            echo "<a href='../../../top-of-home-page/profile-page.php'><i class='login'><img src='../../../top-of-home-page/icons/user-icon.png' alt='user'></i></a>";
          }
          else {
            echo "<a href='../../../top-of-home-page/login-page.php'><i class='login'><img src='../../../top-of-home-page/icons/user-icon.svg' alt='user'></i></a>";
          }
        ?>
        
      </div>
</div>

  <div class="banner">
    <h1>Happy Shopping!</h1>
    <p>Check out our latest products and offers!</p>
  </div>

  <div class="columns-container">
    <!-- Column 1 -->
    <div class="column1">
      <!-- Content for column 1 -->
      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>
    </div>

    <!-- Column 2 -->
    <div class="column2">
      <!-- Content for column 2 -->
      <div class="grid-item">
        <img src="merch/mystics/elena-delle-donne-black-washington-mystics-player-skyline-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>Elena Delle Donne Black Player Skyline T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="616">
            <input type="hidden" name="product_name" value="Elena Delle Donne Black Player Skyline T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/elena-delle-donne-black-washington-mystics-rebel-edition-victory-player-jersey.avif" alt="Cat">
        <div class="content">
          <p>Elena Delle Donne Black Rebel Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="617">
            <input type="hidden" name="product_name" value="Elena Delle Donne Black Rebel Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/elena-delle-donne-navy-washington-mystics-rebel-edition-victory-player-jersey.avif" alt="Cat">
        <div class="content">
          <p>Elena Delle Donne Navy Rebel Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="618">
            <input type="hidden" name="product_name" value="Elena Delle Donne Navy Rebel Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/cloud-and-delle-donne-red-washington-mystics-wnba-jam-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>Natasha Cloud and Elena Delle Donne WNBA Jam T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="619">
            <input type="hidden" name="product_name" value="Natasha Cloud and Elena Delle Donne WNBA Jam T-Shir">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/elena-delle-donne red-washington-mystics-explorer-edition-victory-jersey.avif" alt="Cat">
        <div class="content">
          <p>Elena Delle Donne Explorer Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="620">
            <input type="hidden" name="product_name" value="Elena Delle Donne Explorer Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/aaliyah-edwards-black-washington-mystics-draft-rebel-edition-name-and-number-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>Aaliyah Edwards Rebel Edition Name and Number T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="621">
            <input type="hidden" name="product_name" value="Aaliyah Edwards Rebel Edition Name and Number T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/aaliyah-edwards-red-washington-mystics-2024-wnba-draft-explorer-edition-name-and-number-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>Aaliyah Edwards Explorer Edition Name and Number T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="622">
            <input type="hidden" name="product_name" value="Aaliyah Edwards Explorer Edition Name and Number T-Shir">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/black-washington-mystics-team-pride-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>Black Washington Mystics Pride T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="623">
            <input type="hidden" name="product_name" value="Black Washington Mystics Pride T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/custom-black-washington-mystics-2023-rebel-edition-victory-player-jersey.avif" alt="Cat">
        <div class="content">
          <p>Custom 2023 Rebel Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="624">
            <input type="hidden" name="product_name" value="Custom 2023 Rebel Edition Jersey (Mystics)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/custom-red-washington-mystics-2021-explorer-edition-victory-jersey.jpg" alt="Cat">
        <div class="content">
          <p>Custom 2021 Explorer Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="625">
            <input type="hidden" name="product_name" value="Custom 2021 Explorer Edition Jersey (Mystics)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/gray-washington-mystics-primary-logo-long-sleeve-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>Gray Washington Mystics Long Sleeve T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="626">
            <input type="hidden" name="product_name" value="Gray Washington Mystics Long Sleeve T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/navy-rise-washington-mystics-rebel-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>Navy Rise Washington Mystics Rebel Edition T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="627">
            <input type="hidden" name="product_name" value="Navy Rise Washington Mystics Rebel Edition T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/navy-washington-mystics-2021-rebel-edition-victory-custom-jersey.avif" alt="Cat">
        <div class="content">
          <p>Custom 2021 Rebel Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="628">
            <input type="hidden" name="product_name" value="Custom 2021 Rebel Edition Jersey (Mystics)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/navy-washington-mystics-replica-player-performance-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>Navy Washington Mystics Player Performance T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="629">
            <input type="hidden" name="product_name" value="Navy Washington Mystics Player Performance T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/mystics/white-washington-mystics-team-pride-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>White Washington Mystics Pride T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="630">
            <input type="hidden" name="product_name" value="White Washington Mystics Pride T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>