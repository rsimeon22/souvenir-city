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
<link rel="stylesheet" href="css/edm-oilers.css">
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
        <img src="merch/oilers/mens-fanatics-connor-mcdavid-royal-edmonton-oilers-home-breakaway-jersey_ss5_p-201333807+u-zecda1m0xwjr2fp9dx8q+v-w7rhryw9np3hg7eyx4lg.jpeg" alt="Cat">
        <div class="content">
          <p>Connor McDavid Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1711">
            <input type="hidden" name="product_name" value="Connor McDavid Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-mitchell-and-ness-connor-mcdavid-orange-edmonton-oilers-power-play-jersey_ss5_p-202675689+u-xiacidsmtqtyto35kwsi+v-6m4w3ld03yoiret8g4gw.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Connor McDavid 2017 Throwback Home Jersey</p>
          <h3>159.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1712">
            <input type="hidden" name="product_name" value="Mitchell and Ness Connor McDavid 2017 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="159.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/leon-draisaitl-edmonton-oilers-autographed-navy-fanatics-alternate-breakaway-jersey_pi4571000_ff_4571255-33dc0f174add0d35b92d_full.jpeg" alt="Cat">
        <div class="content">
          <p>Leon Draisaitl Alternate Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1713">
            <input type="hidden" name="product_name" value="Leon Draisaitl Alternate Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-fanatics-leon-draisaitl-royal-edmonton-oilers-home-premium-jersey_ss5_p-200899110+u-wknodcsi2gqoucmsh778+v-hfcmwv4ylcp5py65wh8r.jpeg" alt="Cat">
        <div class="content">
          <p>Leon Draisaitl Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1714">
            <input type="hidden" name="product_name" value="Leon Draisaitl Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-fanatics-zach-hyman-royal-edmonton-oilers-home-breakaway-player-jersey_ss5_p-5146733+u-8er4fmbrgbeeb2t38zne+v-ouilaiczbg5auxarxuto.avif" alt="Cat">
        <div class="content">
          <p>Zach Hyman Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1715">
            <input type="hidden" name="product_name" value="Zach Hyman Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-fanatics-evan-bouchard-royal-edmonton-oilers-home-breakaway-player-jersey_ss5_p-5146738+u-zc86bzdokdmbh3eadgcb+v-dbeevhwtndjnjhmjvuud.avif" alt="Cat">
        <div class="content">
          <p>Evan Bouchard Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1716">
            <input type="hidden" name="product_name" value="Evan Bouchard Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-black-edmonton-oilers-core-smoke-pullover-hoodie_pi3305000_altimages_ff_3305779-96864555f0afe5a05fe0alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black Edmonton Oilers Core Smoke Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1717">
            <input type="hidden" name="product_name" value="Black Edmonton Oilers Core Smoke Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-fanatics-royal-edmonton-oilers-home-breakaway-blank-jersey_ss5_p-5143783+u-vvbbjybmrsciruch8si8+v-s5kknzkskfpp22xuxotr.jpeg" alt="Cat">
        <div class="content">
          <p>Breakaway Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1718">
            <input type="hidden" name="product_name" value="Breakaway Home Jersey (Oilers)">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-fanatics-royal-edmonton-oilers-home-premium-custom-jersey_ss5_p-202055771+u-y4ofbn9g0aogt3l5jqmu+v-bjbl4gwubgyspqayckkr.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1719">
            <input type="hidden" name="product_name" value="Custom Home Jersey (Oilers)">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-fanatics-stuart-skinner-royal-edmonton-oilers-home-breakaway-player-jersey_ss5_p-5146743+u-wlmfy9m5vjp0flp3jwxd+v-pcflv020pzujzvjdnkqr.avif" alt="Cat">
        <div class="content">
          <p>Stuart Skinner Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1720">
            <input type="hidden" name="product_name" value="Stuart Skinner Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-fanatics-white-edmonton-oilers-away-premium-custom-jersey_ss5_p-202055769+u-sogq9xc0q2tpmmvvvvq1+v-7aembqm8fpuavfwstsgz.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1721">
            <input type="hidden" name="product_name" value="Custom Home Jersey (Oilers)">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/womens-47-royal-edmonton-oilers-miata-clean-up-adjustable-hat_ss5_p-200013277+u-6funw8rhlkvc4ysi6eg2+v-m5csc0jihghwcn3uojuh.jpeg" alt="Cat">
        <div class="content">
          <p>Royal Edmonton Oilers Adjustable Hat</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1722">
            <input type="hidden" name="product_name" value="Royal Edmonton Oilers Adjustable Hat">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-heather-gray-edmonton-oilers-primary-team-logo-fleece-fitted-pullover-hoodie_pi2770000_altimages_ff_2770648alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Heather Gray Edmonton Oilers Primary Team Logo Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1723">
            <input type="hidden" name="product_name" value="Heather Gray Edmonton Oilers Primary Team Logo Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-royal-edmonton-oilers-team-alternate-t-shirt_pi3309000_altimages_ff_3309952-1803f29ec0acbfd0b6ffalt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Royal Edmonton Oilers Team Alternate T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1724">
            <input type="hidden" name="product_name" value="Royal Edmonton Oilers Team Alternate T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/oilers/mens-wayne-gretzky-royal-edmonton-oilers-1979-80-power-play-jersey_ss5_p-201979061+u-qqqthzm05iymw3qdntd7+v-kuzjcpwfwqcef2lygrua.avif" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Wayne Gretzky 1980 Throwback Away Jersey</p>
          <h3>159.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1725">
            <input type="hidden" name="product_name" value="Mitchell and Ness Wayne Gretzky 1980 Throwback Away Jersey">
            <input type="hidden" name="product_price" value="159.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>