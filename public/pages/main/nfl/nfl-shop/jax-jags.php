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
  <title>Browse!</title>
  <link rel="icon" type="image/x-icon" href="../../../top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/jax-jags.css">
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
      <img src="merch/chiefs/mens-fanatics-branded-red-kansas-city-chiefs-super-bowl-lviii-champions-iconic-victory-t-shirt_ss5_p-201146275+u-uy.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/chiefs/mens-fanatics-branded-red-kansas-city-chiefs-super-bowl-lviii-champions-iconic-victory-t-shirt_ss5_p-201146275+u-uy.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/chiefs/mens-fanatics-branded-red-kansas-city-chiefs-super-bowl-lviii-champions-iconic-victory-t-shirt_ss5_p-201146275+u-uy.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/chiefs/mens-fanatics-branded-red-kansas-city-chiefs-super-bowl-lviii-champions-iconic-victory-t-shirt_ss5_p-201146275+u-uy.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/chiefs/mens-fanatics-branded-red-kansas-city-chiefs-super-bowl-lviii-champions-iconic-victory-t-shirt_ss5_p-201146275+u-uy.avif" alt="Shirt" class="shirt-img">
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
        <img src="merch/jags/mens-nike-teal-jacksonville-jaguars-custom-team-game-jersey_pi3888000_altimages_ff_3888073-e9e18698a45ecfadb676alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Custom Alternate Jersey</p>
          <h3>149.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="841">
            <input type="hidden" name="product_name" value="Custom Alternate Jersey (Jaguars)">
            <input type="hidden" name="product_price" value="149.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      
      <div class="grid-item">
        <img src="merch/jags/mens-nike-travis-etienne-jr-white-jacksonville-jaguars-game-player-jersey_pi4434000_ff_4434289-8307eca1df63c9a03e83_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Travis Etienne Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="842">
            <input type="hidden" name="product_name" value="Travis Etienne Away Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-nike-devin-lloyd-teal-jacksonville-jaguars-team-legend-player-performance-top_pi4917000_altimages_ff_4917011-1e5fb1c8fbbf610b68e5alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Devin Lloyd Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="843">
            <input type="hidden" name="product_name" value="Devin Lloyd Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-mitchell-and-ness-keenan-mccardell-teal-jacksonville-jaguars-legacy-replica-jersey_pi3604000_altimages_ff_3604313-c142c79505ee62365528alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Mitchell and Ness Keenan McCardell 1999 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="844">
            <input type="hidden" name="product_name" value="Mitchell and Ness Keenan McCardell 1999 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      
      <div class="grid-item">
        <img src="merch/jags/mens-mitchell-and-ness-tony-boselli-teal-jacksonville-jaguars-legacy-replica-jersey_pi3604000_ff_3604311-ed7038e0ccc89c21f74e_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Mitchell and Ness Tony Boselli 1999 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="845">
            <input type="hidden" name="product_name" value="Mitchell and Ness Tony Boselli 1999 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      
      <div class="grid-item">
        <img src="merch/jags/mens-mitchell-and-ness-maurice-jones-drew-teal-jacksonville-jaguars-legacy-replica-jersey_pi3604000_ff_3604310-1ce8d3439e7b37ab8da8_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Mitchell and Ness Maurice Jones-Drew 2008 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="846">
            <input type="hidden" name="product_name" value="Mitchell and Ness Maurice Jones-Drew 2008 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      
      <div class="grid-item">
        <img src="merch/jags/mens-nike-trevor-lawrence-white-jacksonville-jaguars-white-game-jersey_pi4301000_altimages_ff_4301206-049aa353a13ed67e40d8alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Trevor Lawrence Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="847">
            <input type="hidden" name="product_name" value="Trevor Lawrence Away Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      
      <div class="grid-item">
        <img src="merch/jags/mens-nike-trevor-lawrence-black-jacksonville-jaguars-alternate-vapor-limited-jersey_pi4340000_altimages_ff_4340927-6a6a1e4612c6301d227calt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Trevor Lawrence Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="848">
            <input type="hidden" name="product_name" value="Trevor Lawrence Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-nike-trevor-lawrence-teal-jacksonville-jaguars-team-legend-player-performance-top_pi4340000_altimages_ff_4340955-09aaa01928e2857f6f37alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Trevor Lawrence Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="849">
            <input type="hidden" name="product_name" value="Trevor Lawrence Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-nike-travon-walker-black-jacksonville-jaguars-player-game-jersey_pi4871000_altimages_ff_4871144-3fdf1395a474d72fafcealt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Travon Walker Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="850">
            <input type="hidden" name="product_name" value="Travon Walker Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-nike-travon-walker-teal-jacksonville-jaguars-player-game-jersey_pi4868000_altimages_ff_4868710-b58c67af19070c7ed5e2alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Travon Walker Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="851">
            <input type="hidden" name="product_name" value="Travon Walker Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-nike-white-jacksonville-jaguars-custom-game-jersey_pi3889000_altimages_ff_3889172-6a4e872b76d18be28da3alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Custom Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="852">
            <input type="hidden" name="product_name" value="Custom Away Jersey (Jaguars)">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-nike-heathered-gray-jacksonville-jaguars-rewind-club-fleece-pullover-hoodie_pi4505000_altimages_ff_4505304-f6fba1031976432ff2a3alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Heathered Gray Jacksonville Jaguars Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="853">
            <input type="hidden" name="product_name" value="Heathered Gray Jacksonville Jaguars Fleece Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-nike-trevor-lawrence-white-jacksonville-jaguars-white-game-jersey_pi4301000_altimages_ff_4301206-049aa353a13ed67e40d8alt1_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Trevor Lawrence Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="854">
            <input type="hidden" name="product_name" value="Trevor Lawrence Away Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

      <div class="grid-item">
        <img src="merch/jags/mens-nike-travis-etienne-jr-white-jacksonville-jaguars-game-player-jersey_pi4434000_ff_4434289-8307eca1df63c9a03e83_full.jpeg" alt="Jersey">
        <div class="content">
          <p>Travis Etienne Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="855">
            <input type="hidden" name="product_name" value="Travis Etienne Away Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      
    </div>

  </div>


</body>
</html>