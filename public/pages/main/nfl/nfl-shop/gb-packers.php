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
<link rel="stylesheet" href="css/gb-packers.css">
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
        <img src="merch/packers/aaron-rodgers-nike-green-game-player-jersey.avif" alt="Cat">
        <div class="content">
          <p>Aaron Rodgers Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="796">
            <input type="hidden" name="product_name" value="Aaron Rodgers Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/aj-dillon-green-green-bay-packers-team-game-jersey.avif" alt="Cat">
        <div class="content">
          <p>AJ Dillon Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="797">
            <input type="hidden" name="product_name" value="AJ Dillon Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/green-green-bay-packers-alternate-custom-jersey.avif" alt="Cat">
        <div class="content">
          <p>Custom Alternate Jersey</p>
          <h3>149.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="798">
            <input type="hidden" name="product_name" value="Custom Alternate Jersey (Packers)">
            <input type="hidden" name="product_price" value="149.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/green-green-bay-packers-custom-game-jersey.avif" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>149.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="799">
            <input type="hidden" name="product_name" value="Custom Home Jersey (Packers)">
            <input type="hidden" name="product_price" value="149.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/jaire-alexander-white-green-bay-packers-game-player-jersey.avif" alt="Cat">
        <div class="content">
          <p>Jaire Alexander Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="800">
            <input type="hidden" name="product_name" value="Jaire Alexander Away Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/jayden-reed-green-green-bay-packers-game-jersey.avif" alt="Cat">
        <div class="content">
          <p>Jayden Reed Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="801">
            <input type="hidden" name="product_name" value="Jayden Reed Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/jordan-love-green-green-bay-packers-player-game-jersey.avif" alt="Cat">
        <div class="content">
          <p>Jordan Love Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="802">
            <input type="hidden" name="product_name" value="Jordan Love Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/jordan-love-white-green-bay-packers-game-jersey.avif" alt="Cat">
        <div class="content">
          <p>Jordan Love Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="803">
            <input type="hidden" name="product_name" value="Jordan Love Away Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/josh-jacobs-green-green-bay-packers-team-game-jersey.avif" alt="Cat">
        <div class="content">
          <p>Josh Jacobs Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="804">
            <input type="hidden" name="product_name" value="Josh Jacobs Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/mens-nike-jaire-alexander-green-green-bay-packers-game-jersey.avif" alt="Cat">
        <div class="content">
          <p>Jaire Alexander Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="805">
            <input type="hidden" name="product_name" value="Jaire Alexander Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/mitchell-and-ness-brett-favre-green-green-bay-packers-big-and-tall-1996-retired-player-replica-jersey.avif" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Brett Favre 1996 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="806">
            <input type="hidden" name="product_name" value="Mitchell and Ness Brett Favre 1996 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/mitchell-and-ness-charles-woodson-green-green-bay-packers-2010-authentic-throwback-retired-player-jersey.avif" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Charles Woodson 2010 Throwback Home Jersey</p>
          <h3>169.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="807">
            <input type="hidden" name="product_name" value="Mitchell and Ness Charles Woodson 2010 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="169.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/mitchell-and-ness-heather-gray-green-bay-packers-head-coach-vintage-logo-pullover-hoodie.avif" alt="Cat">
        <div class="content">
          <p>Mitchell and Ness Heather Gray Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="808">
            <input type="hidden" name="product_name" value="Mitchell and Ness Heather Gray Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/white-green-bay-packers-2025-nfl-draft-t-shirt.avif" alt="Cat">
        <div class="content">
          <p>White Green Bay Packers 2025 NFL Draft T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="809">
            <input type="hidden" name="product_name" value="White Green Bay Packers 2025 NFL Draft T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/packers/white-green-bay-packers-custom-game-jersey.avif" alt="Cat">
        <div class="content">
          <p>Custom Away Jersey</p>
          <h3>149.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="810">
            <input type="hidden" name="product_name" value="Custom Away Jersey (Packers)">
            <input type="hidden" name="product_price" value="149.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>