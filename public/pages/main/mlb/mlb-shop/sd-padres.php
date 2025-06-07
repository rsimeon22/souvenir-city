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
<link rel="stylesheet" href="css/sd-padres.css">
  
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
            echo "<a href='../../../top-of-home-page/login-page.html'><i class='login'><img src='../../../top-of-home-page/icons/user-icon.svg' alt='user'></i></a>";
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
      <img src="merch/dodgers/world-series-shirt-2024.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/dodgers/world-series-shirt-2024.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/dodgers/world-series-shirt-2024.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/dodgers/world-series-shirt-2024.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/dodgers/world-series-shirt-2024.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>    </div>

    <!-- Column 2 -->
    <div class="column2">
      <!-- Content for column 2 -->
      <div class="grid-item">
        <img src="merch/padres/mens-nike-fernando-tatis-jr-brown-san-diego-padres-alternate-replica-player-jersey_pi3754000_altimages_ff_3754657-1c472a366da2215cfeefalt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Fernando Tatis Jr. Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1441">
            <input type="hidden" name="product_name" value="Fernando Tatis Jr. Alternate Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-fernando-tatis-jr-tan-san-diego-padres-alternate-replica-player-jersey_pi3754000_ff_3754661-dbf34bf8aeedb8e39c59_full.jpeg" alt="Cat">
        <div class="content">
          <p>Fernando Tatis Jr. 2nd Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1442">
            <input type="hidden" name="product_name" value="Fernando Tatis Jr. 2nd Alternate Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-fernando-tatis-jr-white-san-diego-padres-city-connect-replica-player-jersey_pi4391000_ff_4391556-95dc74204182f1059cda_full.jpeg" alt="Cat">
        <div class="content">
          <p>Fernando Tatis Jr. City Connect Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1443">
            <input type="hidden" name="product_name" value="Fernando Tatis Jr. City Connect Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-manny-machado-brown-san-diego-padres-alternate-replica-player-jersey_pi3754000_ff_3754656-a6ec81bdcac37754720b_full.jpeg" alt="Cat">
        <div class="content">
          <p>Manny Machado Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1444">
            <input type="hidden" name="product_name" value="Manny Machado Alternate Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-manny-machado-tan-san-diego-padres-alternate-replica-player-jersey_pi3754000_ff_3754660-a1948d92845d8b7f6a40_full.jpeg" alt="Cat">
        <div class="content">
          <p>Manny Machado 2nd Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1445">
            <input type="hidden" name="product_name" value="Manny Machado 2nd Alternate Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-white-san-diego-padres-city-connect-replica-team-jersey_pi4391000_altimages_ff_4391518-d8255d4e990b60a71e26alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Blank City Connect Jersey</p>
          <h3>89.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1446">
            <input type="hidden" name="product_name" value="Blank City Connect Jersey (Padres)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-neon-green-san-diego-padres-authentic-collection-city-connect-full-zip-bomber-jacket_ss5_p-201731650+u-udgu0bc76ncv0wnxk8r8+v-asbje0hupylp8xtkrmox.jpeg" alt="Cat">
        <div class="content">
          <p>Green San Diego Padres City Connect Full Zip Bomber Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1447">
            <input type="hidden" name="product_name" value="Green San Diego Padres City Connect Full Zip Bomber Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-mint-san-diego-padres-2025-city-connect-authentic-collection-velocity-performance-t-shirt_ss5_p-201731502+u-uaorxovlcjwbq9wjw4vk+v-knpnooiggx4x9oz13eyw.jpeg" alt="Cat">
        <div class="content">
          <p>Mint San Diego Padres 2025 City Connect Performance T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1448">
            <input type="hidden" name="product_name" value="Mint San Diego Padres 2025 City Connect Performance T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/youth-nike-jackson-merrill-white-san-diego-padres-home-player-game-jersey_ss5_p-201602959+u-pdhpc8etwxzm3ojygryu+v-mlh07hi6tnqmxbe6ipuv.jpeg" alt="Cat">
        <div class="content">
          <p>Jackson Merill Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1449">
            <input type="hidden" name="product_name" value="Jackson Merill Home Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-white-san-diego-padres-home-replica-custom-jersey_pi3811000_ff_3811596-4f78ce1777322f15b3d4_full.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1450">
            <input type="hidden" name="product_name" value="Custom Home Jersey (Padres)">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/san-diego-padres-new-era-black-on-black-9fifty-snapback-adjustable-hat-black_pi3751000_altimages_ff_3751535-9fa97cd81662f959df7balt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>San Diego Padres Black on Black 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1451">
            <input type="hidden" name="product_name" value="San Diego Padres Black on Black 59FIFTY Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-tan-san-diego-padres-alternate-replica-team-jersey_pi3754000_altimages_ff_3754708-864c242a3c17069fea12alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Blank 2nd Alternate Jersey</p>
          <h3>89.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1452">
            <input type="hidden" name="product_name" value="Blank 2nd Alternate Jersey">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-brown-san-diego-padres-team-lock-up-logo-pullover-hoodie_pi5338000_altimages_ff_5338481-2eabf18db7823667046ealt2_full.jpeg" alt="Cat">
        <div class="content">
          <p>Brown San Diego Padres Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1453">
            <input type="hidden" name="product_name" value="Brown San Diego Padres Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-new-era-mint-san-diego-padres-2022-city-connect-59fifty-fitted-hat_pi4464000_ff_4464365-ac472b80ccac91e3b304_full.jpeg" alt="Cat">
        <div class="content">
          <p>San Diego Padres City Connect 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1454">
            <input type="hidden" name="product_name" value="San Diego Padres City Connect 59FIFTY Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/padres/mens-nike-heathered-charcoal-san-diego-padres-local-rep-legend-performance-t-shirt_pi4367000_altimages_ff_4367503-dd91bd558ae3e6a2ad02alt2_full.jpeg" alt="Cat">
        <div class="content">
          <p>Heathered Charcoal San Diego Padres Performance T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1455">
            <input type="hidden" name="product_name" value="Heathered Charcoal San Diego Padres Performance T-Shirt">
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