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
<link rel="stylesheet" href="css/mlb-shopping.css">
  
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
        <img src="merch/shopping/2025-bowman-baseball-factory-sealed-mega-box_ss5_p-203139087+u-mfg2fwfgzdcialb2mc2t+v-x2a0ynjko1jome4e8b2c.jpeg" alt="Cat">
        <div class="content">
          <p>2025 Bowman Baseball Factory Sealed Mega Box</p>
          <h3>49.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2071">
            <input type="hidden" name="product_name" value="2025 Bowman Baseball Factory Sealed Mega Box">
            <input type="hidden" name="product_price" value="49.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-columbia-red-2025-mlb-all-star-game-oroville-creek-lined-omni-tech-full-zip-jacket_ss5_p-203067969+u-nujugjxvjqxi3m32uuo1+v-ejb9joeqx3t06gdrkhip.jpeg" alt="Cat">
        <div class="content">
          <p>2025 MLB All Star Game Full Zip Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2072">
            <input type="hidden" name="product_name" value="2025 MLB All Star Game Full Zip Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-homage-jackie-robinson-heathered-gray-remix-jersey-tri-blend-t-shirt_pi4713000_ff_4713722-f2281b86f77019cccaad_full.jpeg" alt="Cat">
        <div class="content">
          <p>Jackie Robinson Heathered Gray remix-jersey-tri-blend-t-shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2073">
            <input type="hidden" name="product_name" value="Atlanta Hawks Snapback (Red)">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-nike-cream-2024-mlb-all-star-game-authentic-collection-legend-t-shirt_ss5_p-201206834+u-iaepkvwbpwnpmiue21lg+v-qiiwkeg7kuydshwuxc8h.jpeg" alt="Cat">
        <div class="content">
          <p>Cream 2024 MLB All Star Game T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2074">
            <input type="hidden" name="product_name" value="Cream 2024 MLB All Star Game T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-nike-navy-2023-mlb-all-star-game-pullover-hoodie_pi4989000_ff_4989669-f2310217792b835544e6_full.jpeg" alt="Cat">
        <div class="content">
          <p>Navy 2023 MLB All Star Game Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2075">
            <input type="hidden" name="product_name" value="Navy 2023 MLB All Star Game Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-nike-white-1995-mlb-all-star-game-cooperstown-logo-t-shirt_ss5_p-201206820+u-ke8cpfeksvm5zmdba0se+v-oxm4muegyf3nxjqunl7k.jpeg" alt="Cat">
        <div class="content">
          <p>White 1995 MLB All Star Game Cooperstown Logo T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2076">
            <input type="hidden" name="product_name" value="White 1995 MLB All Star Game Cooperstown Logo T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-nike-white-2022-mlb-all-star-game-essential-t-shirt_pi4752000_altimages_ff_4752455-d22db522f3024efe5185alt2_full.jpeg" alt="Cat">
        <div class="content">
          <p>White 2022 MLB All Star Game Essential T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2077">
            <input type="hidden" name="product_name" value="White 2022 MLB All Star Game Essential T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-pro-standard-light-blue-mlb-pro-league-wool-snapback-hat_pi4881000_ff_4881100-00ec2795612fee9e634f_full.jpeg" alt="Cat">
        <div class="content">
          <p>Standard Light Blue MLB Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2078">
            <input type="hidden" name="product_name" value="Standard Light Blue MLB Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-pro-standard-navy-mlb-pro-league-wool-snapback-hat_pi4881000_ff_4881097-96241656aa90686324a3_full.jpeg" alt="Cat">
        <div class="content">
          <p>Standard Navy MLB Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2079">
            <input type="hidden" name="product_name" value="Standard Navy MLB Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-stance-jackie-robinson-crew-socks_pi4969000_ff_4969701-258f1be175ea8ae2f320_full.jpeg" alt="Cat">
        <div class="content">
          <p>Stance Jackie Robinson Crew Socks</p>
          <h3>29.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2080">
            <input type="hidden" name="product_name" value="Stance Jackie Robinson Crew Socks">
            <input type="hidden" name="product_price" value="29.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-stance-navy-mlb-bars-usa-crew-socks_ss5_p-4969699+u-s9ck6e2uuv6jvbwqdlim+v-ecblyxiijkjdm86kx5n1.jpeg" alt="Cat">
        <div class="content">
          <p>Stance Navy MLB Bars USA Crew Socks</p>
          <h3>29.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2081">
            <input type="hidden" name="product_name" value="Stance Navy MLB Bars USA Crew Socks">
            <input type="hidden" name="product_price" value="29.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mlb-the-show-25-game-playstation-5_ss5_p-202930296+u-fz9oluicurxevvcdy39f+v-5kgk3jxj3oiqzfn2tuhw.jpeg" alt="Cat">
        <div class="content">
          <p>MLB the Show 25 for PlayStation 5</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2082">
            <input type="hidden" name="product_name" value="MLB the Show 25 for PlayStation 5">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/womens-terez-gray-mlb-classic-oversized-pullover-sweatshirt_ss5_p-201148887+u-kko8wzc6ovz6czcayqda+v-tjz5ugp73zzighwrzoqb.jpeg" alt="Cat">
        <div class="content">
          <p>Gray MLB Classic Oversized Pullover Sweatshirt</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2083">
            <input type="hidden" name="product_name" value="Gray MLB Classic Oversized Pullover Sweatshirt">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/stance-mlb-fathers-day-over-the-calf-socks_ss5_p-202763742+u-uqtruxzpkstwyj36jaih+v-esxbxjge28qjsedcwexn.jpeg" alt="Cat">
        <div class="content">
          <p>Stance MLB Father's Day Over the Calf Socks</p>
          <h3>29.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2084">
            <input type="hidden" name="product_name" value="Stance MLB Father's Day Over the Calf Socks">
            <input type="hidden" name="product_price" value="29.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/stance-mlb-mothers-day-over-the-calf-socks_ss5_p-202763743+u-akefzyfiqqpansi06v2y+v-j7grig37hpmbbisb19we.jpeg" alt="Cat">
        <div class="content">
          <p>Stance MLB Mother's Day Over the Calf Socks</p>
          <h3>29.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2085">
            <input type="hidden" name="product_name" value="Stance MLB Mother's Day Over the Calf Sock">
            <input type="hidden" name="product_price" value="29.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>