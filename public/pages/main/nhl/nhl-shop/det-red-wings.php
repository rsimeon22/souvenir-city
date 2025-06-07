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
<link rel="stylesheet" href="css/det-red-wings.css">
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
        <img src="merch/red wings/02-blue-line-player-jersey_ss5_p-200099743+u-xjgfbdijndighqbhfd8t+v-nrlti3hzbvm6oa3rstqi.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Nicholas Lidstrom Throwback 2002 Away Jersey</p>
          <h3>159.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1696">
            <input type="hidden" name="product_name" value="Mitchell and Ness Nicholas Lidstrom Throwback 2002 Away Jersey">
            <input type="hidden" name="product_price" value="159.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-47-red-detroit-red-wings-superior-lacer-pullover-hoodie_pi3996000_ff_3996202-bc0ba559543dcc41aba4_full.jpeg" alt="Cat">
        <div class="content">
          <p>Red Detroit Red Wings Superior Lacer Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1697">
            <input type="hidden" name="product_name" value="Red Detroit Red Wings Superior Lacer Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-fanatics-dylan-larkin-red-detroit-red-wings-home-premium-jersey_ss5_p-200899088+u-6mc9tquh8l28qhtfceva+v-pkjwuvfriuwm1wi7ymd2.jpeg" alt="Cat">
        <div class="content">
          <p>Dylan Larkin Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1698">
            <input type="hidden" name="product_name" value="Dylan Larkin Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-fanatics-dylan-larkin-white-detroit-red-wings-away-premium-jersey_ss5_p-200899077+u-bnhpfomboj9ycw54suqv+v-sftt1klonekvwf9mdlsy.jpeg" alt="Cat">
        <div class="content">
          <p>Dylan Larkin Away Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1699">
            <input type="hidden" name="product_name" value="Dylan Larkin Away Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-fanatics-moritz-seider-red-detroit-red-wings-home-breakaway-player-jersey_pi4564000_ff_4564175-8e435b0f778c24eaba2b_full.jpeg" alt="Cat">
        <div class="content">
          <p>Moritz Seider Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1700">
            <input type="hidden" name="product_name" value="Moritz Seider Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-fanatics-patrick-kane-red-detroit-red-wings-home-breakaway-player-jersey_ss5_p-201002804+u-bjnf3o8bmfolm9nwjhyr+v-h5oqonrmbme0vbh9hvnq.jpeg" alt="Cat">
        <div class="content">
          <p>Patrick Kane Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1701">
            <input type="hidden" name="product_name" value="Patrick Kane Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-fanatics-red-detroit-red-wings-breakaway-home-jersey_pi2793000_altimages_ff_2793231alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Breakaway Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1702">
            <input type="hidden" name="product_name" value="Breakaway Home Jersey (Red Wings)">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-fanatics-white-detroit-red-wings-away-premium-custom-jersey_ss5_p-202055766+u-2fy7epayl9yn6auqybx2+v-iembtlefkrtti3wqprf0.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1703">
            <input type="hidden" name="product_name" value="Custom Away Jersey (Red Wings)">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-gordie-howe-red-detroit-red-wings-1960-61-power-play-jersey_ss5_p-201979148+u-uyzyytodtinzfrhoiwt3+v-agbslowpibttbo4xcb53.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Gordie Howe Throwback 1961 Away Jersey</p>
          <h3>159.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1704">
            <input type="hidden" name="product_name" value="Mitchell and Ness Gordie Howe Throwback 1961 Away Jersey">
            <input type="hidden" name="product_price" value="159.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-heathered-gray-detroit-red-wings-victory-arch-ii-long-sleeve-t-shirt_pi2829000_ff_2829755c_full.jpeg" alt="Cat">
        <div class="content">
          <p>Heathered Gray Detroit Red Wings Long Sleeve T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1705">
            <input type="hidden" name="product_name" value="Heathered Gray Detroit Red Wings Long Sleeve T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-mitchell-and-ness-red-detroit-red-wings-playoff-win-fleece-pullover-sweatshirt_ss5_p-202679025+u-rhxvj7y9mw8rxqznejae+v-jfampqoopp1xw65zesui.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Red Detroit Red Wings Playoff Win Fleece Pullover Sweatshirt</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1706">
            <input type="hidden" name="product_name" value="Mitchell and Ness Red Detroit Red Wings Playoff Win Fleece Pullover Sweatshirt">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-new-era-black-detroit-red-wings-state-pride-9fifty-snapback-hat_ss5_p-202530025+u-hxo4axnyuczzstmpalnn+v-7zvjh11yf1ryqpk0budx.jpeg" alt="Cat">
        <div class="content">
          <p>Black Detroit Red Wings State Pride 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1707">
            <input type="hidden" name="product_name" value="Black Detroit Red Wings State Pride 59FIFTY Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-new-era-red-detroit-red-wings-core-59fifty-fitted-hat_ss5_p-202165717+u-ejo1onubvqyi2cxxhcgr+v-c3tiqaoce0irnnrekhyp.jpeg" alt="Cat">
        <div class="content">
          <p>Red Detroit Red Wings 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1708">
            <input type="hidden" name="product_name" value="Red Detroit Red Wings 59FIFTY Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/mens-steve-yzerman-scarlet-detroit-red-wings-1996-97-power-play-jersey_ss5_p-201979062+u-qvkrtj9ndyxhw7qx5zzc+v-kcfydxzhxnwk7cbohhco.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Steve Yzerman Throwback 1997 Away Jersey</p>
          <h3>159.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1709">
            <input type="hidden" name="product_name" value="Mitchell and Ness Steve Yzerman Throwback 1997 Away Jersey">
            <input type="hidden" name="product_price" value="159.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/red wings/white-detroit-red-wings-chrome-two-toned-59fifty-fitted-hat_ss5_p-201912167+u-kztice0pdtxloknwoqas+v-dahgoqhn5d6vcmynyjje.jpeg" alt="Cat">
        <div class="content">
          <p>White Detroit Red Wings Chrome Two Toned 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1710">
            <input type="hidden" name="product_name" value="White Detriot Red Wings Chrome Two Toned 59FIFTY Snapback">
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