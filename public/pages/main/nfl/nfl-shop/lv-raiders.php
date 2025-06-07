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
<link rel="stylesheet" href="css/oak-raiders.css">
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
        <img src="merch/raiders/mens-fanatics-black-las-vegas-raiders-front-runner-long-sleeve-hooded-t-shirt_pi4511000_altimages_ff_4511260-9cd896e70bc956f8d6d5alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black Las Vegas Raiders Front Runner Long Sleeve Hooded T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="901">
            <input type="hidden" name="product_name" value="Black Las Vegas Raiders Front Runner Long Sleeve Hooded T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-fanatics-cream-las-vegas-raiders-elements-weathered-tonal-future-ground-t-shirt_ss5_p-201723608+u-wh75ky2qcmqkmtdvcpea+v-h1pvfqchhoqly3aeqsde.jpeg" alt="Cat">
        <div class="content">
          <p>Cream Las Vegas Raiders Elements Weathered Tonal Future Ground T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="902">
            <input type="hidden" name="product_name" value="Cream Las Vegas Raiders Elements Weathered Tonal Future Ground T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-mitchell-and-ness-charles-woodson-black-las-vegas-raiders-2002-authentic-throwback-retired-player-jersey_pi3614000_altimages_ff_3614866-d91dc37dbe72d9d16ffealt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Charles Woodson 2002 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="903">
            <input type="hidden" name="product_name" value="Mitchell and Ness Charles Woodson 2002 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-black-las-vegas-raiders-primary-logo-t-shirt_pi3664000_ff_3664577-8c595260d210ade39de9_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black Las Vegas Raiders Primary Logo T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="904">
            <input type="hidden" name="product_name" value="Black Las Vegas Raiders Primary Logo T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-bo-jackson-black-las-vegas-raiders-game-retired-player-jersey_pi3974000_altimages_ff_3974185-7d649a886eda837a960aalt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Bo Jackson 1990 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="905">
            <input type="hidden" name="product_name" value="Bo Jackson 1990 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-darren-waller-black-las-vegas-raiders-team-legend-player-performance-top_pi4571000_altimages_ff_4571619-9fe26e697e3c71f2dfc4alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Darren Waller Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="906">
            <input type="hidden" name="product_name" value="Darren Waller Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-darren-waller-white-las-vegas-raiders-alternate-legend-player-performance-top_pi4571000_altimages_ff_4571620-672a21802fac00c92f24alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Darren Waller Color Rush Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="907">
            <input type="hidden" name="product_name" value="Darren Waller Color Rush Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-davante-adams-black-las-vegas-raiders-vapor-limited-jersey_pi4831000_altimages_ff_4831743-1409cdce073e025002ecalt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Davante Adams Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="908">
            <input type="hidden" name="product_name" value="Davante Adams Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-heathered-gray-las-vegas-raiders-icon-legend-performance-t-shirt_pi4478000_altimages_ff_4478104-ede59cb1d0b81ce58e3ealt2_full.jpeg" alt="Cat">
        <div class="content">
          <p>Heathered Gray Las Vegas Raiders Icon Legend Performance T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="909">
            <input type="hidden" name="product_name" value="Heathered Gray Las Vegas Raiders Icon Legend Performance T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-hunter-renfrow-black-las-vegas-raiders-player-jersey_pi3602000_ff_3602376-2c78fd62698cadb8002c_full.jpeg" alt="Cat">
        <div class="content">
          <p>Hunter Renfrow Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="910">
            <input type="hidden" name="product_name" value="Hunter Renfrow Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-ken-stabler-black-las-vegas-raiders-game-retired-player-jersey_pi3974000_ff_3974189-1c57ff9eda0c151987ed_full.jpeg" alt="Cat">
        <div class="content">
          <p>Ken Stabler 1974 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="911">
            <input type="hidden" name="product_name" value="Ken Stabler 1974 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-marcus-allen-black-las-vegas-raiders-game-retired-player-jersey_pi3974000_ff_3974183-1fd933553970d3dcb67c_full.jpeg" alt="Cat">
        <div class="content">
          <p>Marcus Allen 1985 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="912">
            <input type="hidden" name="product_name" value="Marcus Allen 1985 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-white-las-vegas-raiders-custom-game-jersey_pi3889000_altimages_ff_3889156-87bc6694491696c7315falt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Away Jersey</p>
          <h3>149.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="913">
            <input type="hidden" name="product_name" value="Custom Away Jersey (Raiders)">
            <input type="hidden" name="product_price" value="149.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/mens-nike-white-las-vegas-raiders-primary-logo-t-shirt_pi3664000_ff_3664619-ce7f33e16fd38e99ab5c_full.jpeg" alt="Cat">
        <div class="content">
          <p>White Las Vegas Raiders Primary Logo T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="914">
            <input type="hidden" name="product_name" value="White Las Vegas Raiders Primary Logo T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/raiders/white-las-vegas-raiders-hashmark-t-shirt.jpeg" alt="Cat">
        <div class="content">
          <p>White Las Vegas Raiders Hashmark T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="915">
            <input type="hidden" name="product_name" value="White Las Vegas Raiders Hashmark T-Shirt">
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