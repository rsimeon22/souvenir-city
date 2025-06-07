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
<link rel="stylesheet" href="css/nj-devils.css">
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
        <img src="merch/devils/hguhes-home.webp" alt="Cat">
        <div class="content">
          <p>Jack Hughes Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1786">
            <input type="hidden" name="product_name" value="Jack Hughes Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/hughes-away.webp" alt="Cat">
        <div class="content">
          <p>Jack Hughes Away Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1787">
            <input type="hidden" name="product_name" value="Jack Hughes Away Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/huhges-alt.webp" alt="Cat">
        <div class="content">
          <p>Jack Hughes Alternate Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1788">
            <input type="hidden" name="product_name" value="Jack Hughes Alternate Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/hischier-away.webp" alt="Cat">
        <div class="content">
          <p>Nico Hischier Away Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1789">
            <input type="hidden" name="product_name" value="Nico Hischier Away Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/hischier-home.webp" alt="Cat">
        <div class="content">
          <p>Nico Hischier Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1790">
            <input type="hidden" name="product_name" value="Nico Hischier Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/dougie-hamilton-home.webp" alt="Cat">
        <div class="content">
          <p>Dougie Hamilton Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1791">
            <input type="hidden" name="product_name" value="Dougie Hamilton Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/bratt-away.webp" alt="Cat">
        <div class="content">
          <p>Jesper Bratt Away Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1792">
            <input type="hidden" name="product_name" value="Jesper Bratt Away Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/bratt-home.webp" alt="Cat">
        <div class="content">
          <p>Jesper Bratt Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1793">
            <input type="hidden" name="product_name" value="Jesper Bratt Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/luke-hughes-home.webp" alt="Cat">
        <div class="content">
          <p>Luke Hughes Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1794">
            <input type="hidden" name="product_name" value="Luke Hughes Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/markstrom-home.webp" alt="Cat">
        <div class="content">
          <p>Jacob Markstrom Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1795">
            <input type="hidden" name="product_name" value="Jacob Markstrom Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/elias-scf-2000-throwback-away.webp" alt="Cat">
        <div class="content">
          <p>Patrick Elias 2000 Stanley Cup Final Throwback Away Jersey</p>
          <h3>159.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1796">
            <input type="hidden" name="product_name" value="Patrick Elias 2000 Stanley Cup Final Throwback Away Jersey">
            <input type="hidden" name="product_price" value="159.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/scott-niedermayer-2000-scf-away.webp" alt="Cat">
        <div class="content">
          <p>Scott Niedermayer 2000 Stanley Cup Final Throwback Away Jersey</p>
          <h3>159.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1797">
            <input type="hidden" name="product_name" value="Scott Niedermayer 2000 Stanley Cup Final Throwback Away Jersey">
            <input type="hidden" name="product_price" value="159.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/blank-alt.webp" alt="Cat">
        <div class="content">
          <p>Breakaway Alternate Jersey</p>
          <h3>99.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1798">
            <input type="hidden" name="product_name" value="Breakaway Alternate Jersey (Devils)">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/mercer-home.webp" alt="Cat">
        <div class="content">
          <p>Dawson Mercer Home Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1799">
            <input type="hidden" name="product_name" value="Dawson Mercer Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/devils/jacob-markstrom-away.webp" alt="Cat">
        <div class="content">
          <p>Jacob Markstrom Away Jersey</p>
          <h3>109.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="1800">
            <input type="hidden" name="product_name" value="Jacob Markstrom Away Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>