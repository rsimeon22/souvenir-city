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
<link rel="stylesheet" href="css/buf-sabres.css">
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
        <img src="merch/sabres/mens-fanatics-tage-thompson-royal-buffalo-sabres-home-breakaway-player-jersey_pi4564000_altimages_ff_4564002-c453c7f0c5a348e55cd2alt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Tage Thompson Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1591">
            <input type="hidden" name="product_name" value="Tage Thompson Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-fanatics-black-buffalo-sabres-alternate-premier-breakaway-blank-jersey_pi4635000_altimages_ff_4635834-c77a9b88bf84dc07020ealt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Breakaway Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1592">
            <input type="hidden" name="product_name" value="Breakaway Alternate Jersey (Sabres)">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-fanatics-rasmus-dahlin-black-buffalo-sabres-alternate-premier-breakaway-player-jersey_pi4635000_ff_4635524-c0e5f1c89c982b5f8549_full.jpeg" alt="Cat">
        <div class="content">
          <p>Rasmus Dahlin Alternate Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1593">
            <input type="hidden" name="product_name" value="Rasmus Dahlin Alternate Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/93-blue-line-player-jersey_ss5_p-5312710+u-xkyrfh70ofyaxk0syfqj+v-pkjjztjjis8ihbrbc8mi.jpeg" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Pat Lafontaine 1993 Throwback Away Jersey</p>
          <h3>159.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1594">
            <input type="hidden" name="product_name" value="Mitchell and Ness Pat Lafontaine 1993 Throwback Away Jersey">
            <input type="hidden" name="product_price" value="159.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/gold-buffalo-sabres-authentic-pro-rink-two-tone-flex-hat_ss5_p-200000463+u-fwbbvuseosdin0d3nawv+v-v6soqxvla09ccsjt5vy3.jpeg" alt="Cat">
        <div class="content">
          <p>Royal Blue and Gold Buffalo Sabres Cap</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1595">
            <input type="hidden" name="product_name" value="Royal Blue and Gold Buffalo Sabres Cap">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-black-buffalo-sabres-alternate-logo-pullover-hoodie_ss5_p-5197035+u-kug9f8uebskp7gdzcddg+v-fc3auigft0mtawb3fqei.jpeg" alt="Cat">
        <div class="content">
          <p>Black Buffalo Sabres Alternate Logo Pullover Hoodie</p>
          <h3>79.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1596">
            <input type="hidden" name="product_name" value="Atlanta Hawks Snapback (Red)">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-fanatics-tage-thompson-black-buffalo-sabres-alternate-premium-jersey_ss5_p-200899025+u-gpprbog1yyihqdam4ner+v-toiewlp66mgao6gki9iw.jpeg" alt="Cat">
        <div class="content">
          <p>Tage Thompson Alternate Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1597">
            <input type="hidden" name="product_name" value="Tage Thompson Alternate Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-fanatics-heather-royal-buffalo-sabres-sweep-iconic-synthetic-long-sleeve-t-shirt_ss5_p-202688591+u-mxiayfvsbpurydehfrqr+v-no7qzzbvagus06rljjjo.jpeg" alt="Cat">
        <div class="content">
          <p>Heather Royal Buffalo Sabres Long Sleeve T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1598">
            <input type="hidden" name="product_name" value="Heather Royal Buffalo Sabres Long Sleeve T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-fanatics-royal-buffalo-sabres-authentic-pro-rink-fleece-pullover-hoodie_ss5_p-200870226+u-mm6oinwbpkkrgl0nf1kw+v-fbifqtnpb6n2hmwf5udh.jpeg" alt="Cat">
        <div class="content">
          <p>Royal Buffalo Sabres Fleece Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1599">
            <input type="hidden" name="product_name" value="Royal Buffalo Sabres Fleece Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-fanatics-royal-buffalo-sabres-authentic-pro-rink-polo_ss5_p-200869868+u-bij4hfljktnfkg7fqi7j+v-dlk9lvrm3fw4y3jjqw47.jpeg" alt="Cat">
        <div class="content">
          <p>Royal Buffalo Sabres Polo Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1600">
            <input type="hidden" name="product_name" value="Royal Buffalo Sabres Polo Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-fanatics-royal-buffalo-sabres-home-breakaway-custom-jersey_pi4102000_ff_4102934-46bbdca6eefc2d6acc87_full.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1601">
            <input type="hidden" name="product_name" value="Custom Home Jersey (Sabres)">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-royal-buffalo-sabres-victory-arch-t-shirt_ss5_p-200131616+u-m1adqmfygdicskaf6mvq+v-xjsv5nyz3ipmrdyicziz.jpeg" alt="Cat">
        <div class="content">
          <p>Royal Buffalo Sabres Victory Arch T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1602">
            <input type="hidden" name="product_name" value="Royal Buffalo Sabres Victory Arch T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-new-era-black-buffalo-sabres-core-59fifty-fitted-hat_ss5_p-202165706+u-ujn5wcqee3jfzmhh9ifw+v-zskf0plbyyjcey3nsbcy.jpeg" alt="Cat">
        <div class="content">
          <p>Black Buffalo Sabres 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1603">
            <input type="hidden" name="product_name" value="Black Buffalo Sabres 59FIFTY Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-royal-buffalo-sabres-represent-t-shirt_pi5195000_ff_5195374-052925e4fbd0b8258030_full.jpeg" alt="Cat">
        <div class="content">
          <p>Royal Buffalo Sabres Represent T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1604">
            <input type="hidden" name="product_name" value="Royal Buffalo Sabres Represent T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/sabres/mens-heather-gray-buffalo-sabres-special-edition-secondary-logo-t-shirt_pi4153000_ff_4153910-5d83c91506842fe60bed_full.jpeg" alt="Cat">
        <div class="content">
          <p>Heather Gray Buffalo Sabres Secondary Logo T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1605">
            <input type="hidden" name="product_name" value="Heather Gray Buffalo Sabres Secondary Logo T-Shirt">
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