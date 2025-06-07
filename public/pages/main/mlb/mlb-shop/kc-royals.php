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
<link rel="stylesheet" href="css/kc-royals.css">
  
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
        <img src="merch/royals/-kansas-city-royals-authentic-collection-performance-raglan-full-zip-hoodie_pi4361000_altimages_ff_4361605-94133ae381a32f1b4d21alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Kansas City Royals Performance Full Zip Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1276">
            <input type="hidden" name="product_name" value="Kansas City Royals Authentic Collection Performance Full Zip Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-new-era-royal-kansas-city-royals-game-authentic-collection-on-field-low-profile-59fifty-fitted-hat_pi2659000_ff_2659890_full.jpeg" alt="Cat">
        <div class="content">
          <p>Kansas City Royals On Field Low Profile 59FIFTY Fitted Hat</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1277">
            <input type="hidden" name="product_name" value="Kansas City Royals On Field Low Profile 59FIFTY Fitted Hat">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-fanatics-royal-kansas-city-royals-tough-minded-lightweight-quarter-zip-pullover_pi4641000_altimages_ff_4641359-9ab9153cac1217b1d4c0alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Royal Kansas City Royals Lightweight Quarter Zip Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1278">
            <input type="hidden" name="product_name" value="Royal Kansas City Royals Lightweight Quarter Zip Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-fanatics-white-kansas-city-royals-2025-spring-training-cactus-league-true-icon-t-shirt_ss5_p-202658552+u-zkzwiflhrtsunee7sdmd+v-vbmu8ddeyahbc44qrnho.jpeg" alt="Cat">
        <div class="content">
          <p>Kansas City Royals 2025 Spring Training Cactus League T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1279">
            <input type="hidden" name="product_name" value="Kansas City Royals 2025 Spring Training Cactus League T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-mitchell-and-ness-bo-jackson-kansas-city-royals-royal-1989-authentic-cooperstown-collection-batting-mesh-practice-jersey_pi1237000_ff_1237834_xl.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Bo Jackson 1989 Throwback Batting Practice Jersey</p>
          <h3>129.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1280">
            <input type="hidden" name="product_name" value="Mitchell and Ness Bo Jackson 1989 Throwback Batting Practice Jersey">
            <input type="hidden" name="product_price" value="129.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-cutter-and-buck-powder-blue-kansas-city-royals-coastline-epic-comfort-recycled-eco-hoodie-long-sleeve-t-shirt_ss5_p-201989016+u-sslyretcbaczfoabrzsn+v-2d9us7eumfszn7c5q9si.jpeg" alt="Cat">
        <div class="content">
          <p>Powder Blue Kansas City Royals Epic Comfort Recycled Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1281">
            <input type="hidden" name="product_name" value="Powder Blue Kansas City Royals Epic Comfort Recycled Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-nike-bo-jackson-light-blue-kansas-city-royals-throwback-cooperstown-collection-limited-jersey_ss5_p-201933684+u-9qvr0edxlzbug7cqz008+v-b9axj6rj5fcmdm6m4fr7.jpeg" alt="Cat">
        <div class="content">
          <p>Bo Jackson 1989 Throwback Home Jersey</p>
          <h3>129.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1282">
            <input type="hidden" name="product_name" value="Bo Jackson 1989 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="129.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-nike-bobby-witt-jr-navy-kansas-city-royals-city-connect-limited-jersey_ss5_p-201955293+u-a6ytboq9n1daxu4vuff6+v-ugx2dt2vzzgcghcksubn.png" alt="Cat">
        <div class="content">
          <p>Bobby Witt Jr. City Connect Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1283">
            <input type="hidden" name="product_name" value="Bobby Witt Jr. City Connect Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-nike-salvador-perez-navy-kansas-city-royals-city-connect-limited-jersey_ss5_p-201955308+u-bji9xfuj6sttyevdqxnz+v-dg3pogabvgpqnonttjee.jpeg" alt="Cat">
        <div class="content">
          <p>Salvador Perez City Connect Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1284">
            <input type="hidden" name="product_name" value="Salvador Perez City Connect Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/-kansas-city-royals-authentic-collection-performance-raglan-full-zip-hoodie_pi4361000_ff_4361605-94133ae381a32f1b4d21_full.jpeg" alt="Cat">
        <div class="content">
          <p>Kansas City Royals Full Zip Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1285">
            <input type="hidden" name="product_name" value="Kansas City Royals Full Zip Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-nike-light-blue-kansas-city-royals-authentic-collection-city-connect-therma-pullover-hoodie_ss5_p-201731576+u-7w6dxpha26usnixrtv2n+v-veeahoxieivw4dfxovgt.jpeg" alt="Cat">
        <div class="content">
          <p>Light Blue Kansas City Royals City Connect Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1286">
            <input type="hidden" name="product_name" value="Light Blue Kansas City Royals City Connect Themed Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-nike-salvador-perez-light-blue-kansas-city-royals-alternate-limited-player-jersey_ss5_p-202768052+u-ptit2mbkcf9mphiufv36+v-m5zjr3wkxombosddnaox.jpeg" alt="Cat">
        <div class="content">
          <p>Salvador Perez Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1287">
            <input type="hidden" name="product_name" value="Salvador Perez Alternate Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-nike-bobby-witt-jr-white-kansas-city-royals-home-replica-player-jersey_pi5260000_altimages_ff_5260428-be3bafe6bee47be3921falt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Bobby Witt Jr. Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1288">
            <input type="hidden" name="product_name" value="Bobby Witt Jr. Home Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-nike-white-kansas-city-royals-replica-custom-jersey_pi4776000_ff_4776694-e2c1442a8ce40186d310_full.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1289">
            <input type="hidden" name="product_name" value="Custom Home Jersey (Royals)">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/royals/mens-nike-light-blue-kansas-city-royals-alternate-replica-team-logo-jersey_pi4372000_ff_4372118-326d1410987429385c2e_full.jpeg" alt="Cat">
        <div class="content">
          <p>Blank Alternate Jersey</p>
          <h3>89.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1290">
            <input type="hidden" name="product_name" value="Blank Alternate Jersey (Royals)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>