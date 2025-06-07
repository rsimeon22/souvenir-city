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
<link rel="stylesheet" href="css/bal-orioles.css">
  
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
        <img src="merch/orioles/mens-nike-orange-baltimore-orioles-legend-fuse-large-logo-performance-t-shirt_ss5_p-200218599+u-f5jkpa3w1koiuloa8fcs+v-4xui5lphdkhz042vhpai.jpeg" alt="Cat">
        <div class="content">
          <p>Orange Baltimore Orioles Performance T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1147">
            <input type="hidden" name="product_name" value="Orange Baltimore Orioles Performance T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-adley-rutschman-black-baltimore-orioles-alternate-limited-player-jersey_ss5_p-202764348+u-orvdkomz1lzw863d4d3l+v-ktwhsfd3ookp8xpgk4zf.jpeg" alt="Cat">
        <div class="content">
          <p>Adley Rutschman Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1142">
            <input type="hidden" name="product_name" value="Adley Rutschman Alternate Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-adley-rutschman-white-baltimore-orioles-replica-player-jersey_ss5_p-200075901+u-aczhjuhxjwdnbuwkegib+v-eto66bdx7rfbtzdm73jt.jpeg" alt="Cat">
        <div class="content">
          <p>Adley Rutschman Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1143">
            <input type="hidden" name="product_name" value="Atlanta Hawks Beanie">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-cedric-mullins-black-baltimore-orioles-city-connect-limited-player-jersey_ss5_p-201955272+u-6ipnlv4rut8kpn4tbvbc+v-oopsmovcvzkdcjcgcvs1.jpeg" alt="Cat">
        <div class="content">
          <p>Cedric Mullins City Connect Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1144">
            <input type="hidden" name="product_name" value="Cedric Mullins City Connect Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-colton-cowser-white-baltimore-orioles-home-replica-jersey_ss5_p-202262175+u-e7cnuggiawcg9k0705td+v-uxbzeippbscbdqye8zuu.jpeg" alt="Cat">
        <div class="content">
          <p>Colton Cowser Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1145">
            <input type="hidden" name="product_name" value="Colton Cowser Home Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-gunnar-henderson-white-baltimore-orioles-home-replica-player-jersey_ss5_p-200323921+u-b2wj51xpb756m2pattgx+v-acflgvappiszj94mqeir.jpeg" alt="Cat">
        <div class="content">
          <p>Gunnar Henderson Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1146">
            <input type="hidden" name="product_name" value="Gunnar Henderson Home Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-mitchell-and-ness-cal-ripken-jr-orange-baltimore-orioles-1988-authentic-cooperstown-collection-mesh-batting-practice-jersey_pi812000_ff_812328_full.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Cal Ripken Jr. 1988 Throwback Batting Practice Jersey</p>
          <h3>129.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1147">
            <input type="hidden" name="product_name" value="Mitchell and Ness Cal Ripken Jr. 1988 Throwback Batting Practice Jersey">
            <input type="hidden" name="product_price" value="129.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-white-baltimore-orioles-home-replica-custom-jersey_pi3811000_ff_3811592-6e12885d331a0880112a_full.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1148">
            <input type="hidden" name="product_name" value="Custom Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/orange-baltimore-orioles-road-authentic-collection-on-field-59fifty-fitted-hat_pi2659000_altimages_ff_2659216alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black Baltimore Orioles 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1149">
            <input type="hidden" name="product_name" value="Baltimore Orioles 59FIFTY Fitted Snapbac">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-fanatics-black-baltimore-orioles-tough-minded-lightweight-quarter-zip-pullover_pi4641000_ff_4641358-5365bbfa78a610701a42_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black Baltimore Orioles Tough Minded Lightweight Quarter Zip Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1150">
            <input type="hidden" name="product_name" value="Black Baltimore Orioles Tough Minded Lightweight Quarter Zip Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-fanatics-mto-label-heather-gray-baltimore-orioles-heart-and-soul-t-shirt_pi3856000_altimages_ff_3856345-284a46e4aed830b256c3alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Heather Gray Baltimore Orioles Heart and Soul T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1151">
            <input type="hidden" name="product_name" value="Heather Gray Baltimore Orioles Heart and Soul T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/orange-baltimore-orioles-home-authentic-collection-on-field-59fifty-fitted-hat_pi2659000_ff_2659217_full.jpeg" alt="Cat">
        <div class="content">
          <p>Orange Baltimore Orioles 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1152">
            <input type="hidden" name="product_name" value="Orange Baltimore Orioles 59FIFTY Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-black-baltimore-orioles-authentic-collection-victory-performance-polo_ss5_p-201715922+u-jsvzvoznt7boaaoldadh+v-vejidpgsleg1zfmfutkf.jpeg" alt="Cat">
        <div class="content">
          <p>Black Baltimore Orioles Polo Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1153">
            <input type="hidden" name="product_name" value="Black Baltimore Orioles Polo Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-black-baltimore-orioles-cooperstown-collection-logo-club-pullover-hoodie_ss5_p-201733415+u-em2rynvww2pyc5h2douw+v-eljalbskniikkdqrzwvg.jpeg" alt="Cat">
        <div class="content">
          <p>Black Baltimore Orioles Cooperstown Collection Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1154">
            <input type="hidden" name="product_name" value="Black Baltimore Orioles Cooperstown Collection Pullover Hoodi">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/orioles/mens-nike-heather-gray-baltimore-orioles-arched-t-shirt_ss5_p-201734232+u-5ua5xj3grgque5atwuly+v-nkye1eb8sgufwuebdesa.jpeg" alt="Cat">
        <div class="content">
          <p>Heather Gray Baltimore Orioles Arched T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1155">
            <input type="hidden" name="product_name" value="Heather Gray Baltimore Orioles Arched T-Shirt">
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