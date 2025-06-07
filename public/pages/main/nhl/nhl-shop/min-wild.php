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
<link rel="stylesheet" href="css/min-wild.css">
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
        <img src="merch/wild/mens-fanatics-kirill-kaprizov-green-minnesota-wild-alternate-premier-breakaway-player-jersey_ss5_p-5277934+u-6kau2twcymmdyn1uhv6g+v-gq8mkzejdiuxztbyktig.jpeg" alt="Cat">
        <div class="content">
          <p>Kirill Kaprizov Alternate Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1756">
            <input type="hidden" name="product_name" value="Kirill Kaprizov Alternate Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-fanatics-kirill-kaprizov-green-minnesota-wild-home-breakaway-replica-jersey_pi4274000_ff_4274577-af8f7c4c7e9e30282356_full.jpeg" alt="Cat">
        <div class="content">
          <p>Kirill Kaprizov Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1757">
            <input type="hidden" name="product_name" value="Kirill Kaprizov Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-fanatics-kirill-kaprizov-white-minnesota-wild-away-premium-jersey_ss5_p-200899092+u-flpo8tg4nqwitdvuajbm+v-z6bcwomxho2rvocflttq.jpeg" alt="Cat">
        <div class="content">
          <p>Kirill Kaprizov Away Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1758">
            <input type="hidden" name="product_name" value="Kirill Kaprizov Away Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/green-minnesota-wild-goal-zone-long-sleeve-lace-up-hoodie-t-shirt_ss5_p-201038241+u-zpjixcxj2oigtnnxzflt+v-mmzmjbha3hwwuxq1mfay.jpeg" alt="Cat">
        <div class="content">
          <p>Minnesota Wild Goal Zone Lace Up Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1759">
            <input type="hidden" name="product_name" value="Minnesota Wild Goal Zone Lace Up Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-black-minnesota-wild-personalized-midnight-mascot-logo-t-shirt_pi4444000_altimages_ff_4444420-6856ce6da0696794b72balt2_full.jpeg" alt="Cat">
        <div class="content">
          <p>Black Minnesota Wild Midnight Logo T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1760">
            <input type="hidden" name="product_name" value="Black Minnesota Wild Midnight Logo T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-fanatics-green-minnesota-wild-2025-stanley-cup-playoffs-breakout-t-shirt_ss5_p-202988579+u-0tgitsqiwqvmvwlj5vam+v-yrojel65lxz7n2bf0xxq.jpeg" alt="Cat">
        <div class="content">
          <p>Green Minnesota Wild 2025 Stanley Cup Playoffs T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1761">
            <input type="hidden" name="product_name" value="Green Minnesota Wild 2025 Stanley Cup Playoffs T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-fanatics-green-minnesota-wild-alternate-premium-custom-jersey_ss5_p-202055706+u-lamfiv5amutpsujro8le+v-gwn8qigsemm70kgzvg5q.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1762">
            <input type="hidden" name="product_name" value="Custom Alternate Jersey (Wild)">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-fanatics-green-minnesota-wild-breakaway-home-jersey_pi2793000_ff_2793235_full.jpeg" alt="Cat">
        <div class="content">
          <p>Breakaway Home Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1763">
            <input type="hidden" name="product_name" value="Breakaway Home Jersey (Wild)">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-fanatics-green-minnesota-wild-home-premium-custom-jersey_ss5_p-202055705+u-3mjnpr7c3i694si02jaa+v-o1w5iifhwm6ypugjtjaq.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1764">
            <input type="hidden" name="product_name" value="Custom Home Jersey (Wild)">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-fanatics-marc-andre-fleury-green-minnesota-wild-home-breakaway-player-jersey_pi4801000_altimages_ff_4801151-b583ef881e036147843falt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Marc-Andre Fleury Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1765">
            <input type="hidden" name="product_name" value="Marc-Andre Fleury Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-fanatics-matthew-boldy-green-minnesota-wild-home-breakaway-player-jersey_pi5146000_altimages_ff_5146639-189f246ae5fc85df2a3ealt1_full.jpeg" alt="Cat">
        <div class="content">
          <p>Matthew Boldy Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1766">
            <input type="hidden" name="product_name" value="Matthew Boldy Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-green-minnesota-wild-primary-logo-pullover-hoodie_pi5133000_ff_5133137-f1d899aeca5da5cd7b35_full.jpeg" alt="Cat">
        <div class="content">
          <p>Green Minnesota Wild Primary Logo Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1767">
            <input type="hidden" name="product_name" value="Green Minnesota Wild Primary Logo Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-new-era-green-minnesota-wild-core-59fifty-fitted-hat_ss5_p-202165697+u-0sf4elmmxf9vseiw7td0+v-cx5jfyg5jupqrdv5frle.jpeg" alt="Cat">
        <div class="content">
          <p>Green Minnesota Wild 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1768">
            <input type="hidden" name="product_name" value="Green Minnesota Wild 59FIFTY Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/mens-new-era-green-minnesota-wild-state-pride-9fifty-snapback-hat_ss5_p-202530010+u-r9ef8sshm9eapu6taphk+v-ieeoeajqmcjj7l0ax0jm.jpeg" alt="Cat">
        <div class="content">
          <p>Green Minnesota Wild State Pride 59FIFTY Snapback</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1769">
            <input type="hidden" name="product_name" value="Green Minnesota Wild State Pride 59FIFTY Snapback">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wild/youth-black-minnesota-wild-primary-logo-t-shirt_ss5_p-201535357+u-fi67gpqpiljd11hiry6u+v-sg7ttthwbwizrahxsiyg.jpeg" alt="Cat">
        <div class="content">
          <p>Black Minnesota Wild Primary Logo T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1770">
            <input type="hidden" name="product_name" value="Black Minnesota Wild Primary Logo T-Shirt">
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