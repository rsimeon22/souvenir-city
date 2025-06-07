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
<link rel="stylesheet" href="css/pit-pirates.css">
  
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
        <img src="merch/pirates/mens-nike-paul-skenes-white-pittsburgh-pirates-home-limited-player-jersey_ss5_p-201605016+u-mopkgnw8hn7hoxu1t3yg+v-eoo2szwepl5yagluwhjt.jpeg" alt="Cat">
        <div class="content">
          <p>Paul Skenes Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1426">
            <input type="hidden" name="product_name" value="Paul Skenes Home Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-nike-paul-skenes-black-pittsburgh-pirates-alternate-2-replica-jersey_ss5_p-202262190+u-v9gts5caqw970vvvxu9a+v-crtsjl5lmdbdool3lloj.jpeg" alt="Cat">
        <div class="content">
          <p>Paul Skenes Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1427">
            <input type="hidden" name="product_name" value="Paul Skenes Alternate Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-nike-paul-skenes-heather-gray-pittsburgh-pirates-fuse-name-and-number-t-shirt_ss5_p-202168443+u-fzu3sucqtfyebbq2olw8+v-zdxji6dbojiwcsvcsgkd.jpeg" alt="Cat">
        <div class="content">
          <p>Heather Gray Pittsburgh Pirates Name and Number T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1428">
            <input type="hidden" name="product_name" value="Heather Gray Pittsburgh Pirates Name and Number T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-mitchell-and-ness-willie-stargell-black-pittsburgh-pirates-1982-authentic-cooperstown-collection-mesh-batting-practice-jersey_pi812000_ff_812333_full.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Willie Stargell 1979 Batting Practice Jersey</p>
          <h3>129.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1429">
            <input type="hidden" name="product_name" value="Mitchell and Ness Willie Stargell 1979 Batting Practice Jersey">
            <input type="hidden" name="product_price" value="129.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-nike-roberto-clemente-white-pittsburgh-pirates-home-replica-player-name-jersey_pi4060000_ff_4060936-2b92b31b1b56a3a90a9a_full.jpeg" alt="Cat">
        <div class="content">
          <p>Roberto Clemente Replica Home Jersey</p>
          <h3>129.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1430">
            <input type="hidden" name="product_name" value="Roberto Clemente Replica Home Jersey">
            <input type="hidden" name="product_price" value="129.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-nike-black-pittsburgh-pirates-alternate-replica-custom-jersey_pi3811000_ff_3811594-8e113b75291d906022f3_full.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Alternate Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1431">
            <input type="hidden" name="product_name" value="Custom Alternate Jersey (Pirates)">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-black-pittsburgh-pirates-raise-the-jolly-roger-bring-it-t-shirt_pi5309000_altimages_ff_5309803-117cdac3911afae4151aalt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black Pittsburgh Pirates Raise the Jolly T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1432">
            <input type="hidden" name="product_name" value="Black Pittsburgh Pirates Raise the Jolly T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-cutter-and-buck-black-pittsburgh-pirates-prospect-textured-stretch-big-and-tall-polo_pi4887000_ff_4887850-b808baa786ee5e69c4a8_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black Pittsburgh Pirates Polo Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1433">
            <input type="hidden" name="product_name" value="Black Pittsburgh Pirates Polo Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-heathered-gray-pittsburgh-pirates-cooperstown-collection-huntington-logo-t-shirt_pi4153000_ff_4153360-173d98a1079c1d26f042_full.jpeg" alt="Cat">
        <div class="content">
          <p>Heathered Gray Pittsburgh Pirates T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1434">
            <input type="hidden" name="product_name" value="Heathered Gray Pittsburgh Pirates T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-new-era-cream-pittsburgh-pirates-throwback-pullover-sweatshirt_ss5_p-201886494+u-y5uqyyeszzyxch47i3g9+v-kufjpfvhwqyqtdw97y1c.jpeg" alt="Cat">
        <div class="content">
          <p>Cream Pittsburgh Pirates Throwback Pullover Sweatshirt</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1435">
            <input type="hidden" name="product_name" value="Cream Pittsburgh Pirates Throwback Pullover Sweatshirt">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/gold-pittsburgh-pirates-cooperstown-collection-team-origins-satin-full-snap-jacket_ss5_p-202172670+u-mcg6bjtn8vhd9jta6lzp+v-uknmmh9yzorjqo9lm1gm.jpeg" alt="Cat">
        <div class="content">
          <p>Pittsburgh Pirates Team Origins Satin Full Snap Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1436">
            <input type="hidden" name="product_name" value="Pittsburgh Pirates Team Origins Satin Full Snap Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-nike-black-pittsburgh-pirates-authentic-collection-practice-performance-pullover-hoodie_ss5_p-200143908+u-apw6uerk1wqcsjxqptvx+v-g8tkk2hzwo9invh0mguw.jpeg" alt="Cat">
        <div class="content">
          <p>Black Pittsburgh Pirates Performance Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1437">
            <input type="hidden" name="product_name" value="Black Pittsburgh Pirates Performance Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-nike-cream-pittsburgh-pirates-camo-logo-t-shirt_ss5_p-202915752+u-3akcaevjsgogpzxhbfxp+v-fuof81mjar0vvvrx16ta.jpeg" alt="Cat">
        <div class="content">
          <p>Cream Pittsburgh Pirates Camo Logo T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1438">
            <input type="hidden" name="product_name" value="Cream Pittsburgh Pirates Camo Logo T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/mens-nike-gold-pittsburgh-pirates-city-connect-replica-jersey_ss5_p-4884583+u-gwsftfknwr1hiojs0o9e+v-9vqunauorkbpusew10ds.jpeg" alt="Cat">
        <div class="content">
          <p>Blank City Connect Jersey</p>
          <h3>89.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1439">
            <input type="hidden" name="product_name" value="Blank City Connect Jersey (Pirates)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/pirates/pittsburgh-pirates-new-era-black-on-black-9fifty-team-snapback-adjustable-hat-black_pi3083000_ff_3083472-836d31a9ef27f0f1b244_full.jpeg" alt="Cat">
        <div class="content">
          <p>Pittsburgh Pirates Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1440">
            <input type="hidden" name="product_name" value="Pittsburgh Pirates Snapback">
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