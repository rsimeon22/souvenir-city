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
<link rel="stylesheet" href="css/nhl-shopping.css">
<script src="../../../../assets/js/search.js"></script>
  
<body>
    
  <div class="logo-container">
    <a href="../../../shop-now-redirection.php">
      <img class="main-logo" src="../../../top-of-home-page/icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <div class="autocomplete-results" id="autocompleteResults"></div>
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
      <img src="merch/panthers/panthers-2024-champs-shirt.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/panthers/panthers-2024-champs-shirt.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/panthers/panthers-2024-champs-shirt.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/panthers/panthers-2024-champs-shirt.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/panthers/panthers-2024-champs-shirt.webp" alt="Shirt" class="shirt-img">
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
        <img src="merch/shopping/2022-nhl-heritage-classic-official-game-puck_pi4607000_ff_4607279-84092335c46df0031dfb_full.jpeg" alt="Cat">
        <div class="content">
          <p>2022 NHL Heritage Classic Official Game Puck</p>
          <h3>49.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2086">
            <input type="hidden" name="product_name" value="2022 NHL Heritage Classic Official Game Puck">
            <input type="hidden" name="product_price" value="49.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-adidas-blue-2022-nhl-all-star-game-western-conference-primegreen-authentic-jersey_pi4434000_ff_4434949-f0bf32278e451d2a8ac3_full.jpeg" alt="Cat">
        <div class="content">
          <p>Breakaway 2022 NHL All Star Game Western Conference Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2087">
            <input type="hidden" name="product_name" value="Breakaway 2022 NHL All Star Game Western Conference Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-fanatics-black-nhl-original-6-refresh-trucker-snapback-hat_pi3746000_ff_3746874-e1bc9507804ce3717f90_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black NHL Original 6 Trucker Hat</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2088">
            <input type="hidden" name="product_name" value="Black NHL Original 6 Trucker Hat">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-fanatics-charcoal-2020-nhl-all-star-game-rinkside-pullover-hoodie_pi3693000_altimages_ff_3693268-a337f22cc6c65c9f96d1alt2_full.jpeg" alt="Cat">
        <div class="content">
          <p>Charcoal 2020 NHL All Star Game Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2089">
            <input type="hidden" name="product_name" value="Charcoal 2020 NHL All Star Game Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/woodrow-nhl-14-replica-nhl-stanley-cup-with-multi-team-stickers_pi4359000_altimages_ff_4359751-36eaa38634d280e5b6adalt3_full.jpeg" alt="Cat">
        <div class="content">
          <p>NHL 14 Replica Stanley Cup with Multi Team Stickers</p>
          <h3>59.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2090">
            <input type="hidden" name="product_name" value="NHL 14 Replica Stanley Cup with Multi Team Stickers">
            <input type="hidden" name="product_price" value="59.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-fanatics-cream-nhl-elements-weathered-tonal-future-ground-t-shirt_ss5_p-201752463+u-f1ocdntzljdev4uy9wzq+v-qzxnlqbijdd9gdbovcoy.jpeg" alt="Cat">
        <div class="content">
          <p>Cream NHL Elements Weathered Tonal Future Ground T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2091">
            <input type="hidden" name="product_name" value="Cream NHL Elements Weathered Tonal Future Ground T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-fanatics-cream-nhl-logo-future-ground-info-pullover-hoodie_ss5_p-201752420+u-v99af4vskggrbwatif3c+v-uvpuziudld8g7ebpyqgh.jpeg" alt="Cat">
        <div class="content">
          <p>Cream NHL Logo Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2092">
            <input type="hidden" name="product_name" value="Cream NHL Logo Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-fanatics-navy-2020-nhl-all-star-game-authentic-pro-rinkside-polo_pi3693000_altimages_ff_3693269-862d399f2dfa7f6175f7alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Navy 2020 NHL All Star Game Polo Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2093">
            <input type="hidden" name="product_name" value="Navy 2020 NHL All Star Game Polo Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-fanatics-navy-2020-nhl-all-star-game-clutch-anorak-full-zip-hoodie-jacket_pi3693000_ff_3693267-754344ff43b6726b5ce5_full.jpeg" alt="Cat">
        <div class="content">
          <p>Navy 2020 NHL All Star Game Full Zip Hoodie Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2094">
            <input type="hidden" name="product_name" value="Navy 2020 NHL All Star Game Full Zip Hoodie Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-fanatics-tan-nhl-original-6-refresh-cuffed-knit-hat-with-pom_pi3746000_altimages_ff_3746873-e6563cab55e10af6df54alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Tan NHL Original 6 Beanie</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2095">
            <input type="hidden" name="product_name" value="Tan NHL Original 6 Beanie">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-heathered-gray-nhl-team-distressed-tri-blend-t-shirt_ss5_p-2968005+u-zg87tnekq5gknt7bacly+v-7flsrtrzl7vjsejq52ni.jpeg" alt="Cat">
        <div class="content">
          <p>Heathered Gray NHL Tri-Blend T-Shirt</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2096">
            <input type="hidden" name="product_name" value="Heathered Gray NHL Tri-Blend T-Shirt">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-jh-design-black-nhl-original-six-poly-twill-full-snap-jacket_ss5_p-202148318+u-q761klubfvrtwrffpvmv+v-bsar8yvhsjhrwaiyjwce.jpeg" alt="Cat">
        <div class="content">
          <p>Black NHL Original 6 Full Snap Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2097">
            <input type="hidden" name="product_name" value="Black NHL Original 6 Full Snap Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/womens-fanatics-black-nhl-authentic-pro-rink-coaches-full-zip-jacket_ss5_p-202683550+u-dpibogtdupvuaydo86wj+v-22ngsqjef965tguxnlac.jpeg" alt="Cat">
        <div class="content">
          <p>Black NHL Authentic Pro Rink Full Zip Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2098">
            <input type="hidden" name="product_name" value="Black NHL Authentic Pro Rink Full Zip Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/womens-fanatics-white-nhl-all-star-game-western-conference-breakaway-jersey_pi4966000_ff_4966114-b7536328d7e66ebbc715_full.jpeg" alt="Cat">
        <div class="content">
          <p>Breakaway White NHL All Star Game Western Conference Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2099">
            <input type="hidden" name="product_name" value="Breakaway White NHL All Star Game Western Conference Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/shopping/mens-fanatics-charcoal-2020-nhl-all-star-game-rinkside-pullover-hoodie_pi3693000_ff_3693268-a337f22cc6c65c9f96d1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Charcoal 2020 NHL All Star Game Rinkside Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2100">
            <input type="hidden" name="product_name" value="Charcoal 2020 NHL All Star Game Rinkside Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>