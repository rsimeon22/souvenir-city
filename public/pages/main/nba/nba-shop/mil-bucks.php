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
<link rel="stylesheet" href="css/mil-bucks.css">
  

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
      <img src="merch/heat/heat-shirt.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/heat/heat-shirt.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/heat/heat-shirt.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/heat/heat-shirt.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="merch/heat/heat-shirt.avif" alt="Shirt" class="shirt-img">
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
        <img src="merch/bucks/giannis-black.avif" alt="Cat">
        <div class="content">
          <p>Giannis Antetokounmpo Statement Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="241">
            <input type="hidden" name="product_name" value="Giannis Antetokounmpo Statement Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/giannis-blue.avif" alt="Cat">
        <div class="content">
          <p>Giannis Antetokounmpo City Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="242">
            <input type="hidden" name="product_name" value="Giannis Antetokounmpo City Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/giannis-green.avif" alt="Cat">
        <div class="content">
          <p>Giannis Antetokounmpo Away Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="243">
            <input type="hidden" name="product_name" value="Giannis Antetokounmpo Away Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/giannis-white.avif" alt="Cat">
        <div class="content">
          <p>Giannis Antetokounmpo Home Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="244">
            <input type="hidden" name="product_name" value="Giannis Antetokounmpo Home Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/middleton-black.avif" alt="Cat">
        <div class="content">
          <p>Khris Middleton Statement Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="245">
            <input type="hidden" name="product_name" value="Khris Middleton Statement Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/ray-allen-2006.avif" alt="Cat">
        <div class="content">
          <p>Ray Allen 1998 Throwback Jersey</p>
          <h3>99.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="246">
            <input type="hidden" name="product_name" value="Ray Allen 1998 Throwback Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/dame-black.avif" alt="Cat">
        <div class="content">
          <p>Damian Lillard Statement Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="247">
            <input type="hidden" name="product_name" value="Damian Lillard Statement Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/dame-green.avif" alt="Cat">
        <div class="content">
          <p>Damian Lillard Away Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="248">
            <input type="hidden" name="product_name" value="Damian Lillard Away Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/dame-white.avif" alt="Cat">
        <div class="content">
          <p>Damian Lillard Home Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="249">
            <input type="hidden" name="product_name" value="Damian Lillard Home Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/purple-windbreaker.avif" alt="Cat">
        <div class="content">
          <p>Milwaukee Bucks 2006 Throwback Windbreaker</p>
          <h3>69.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="250">
            <input type="hidden" name="product_name" value="Milwaukee Bucks 2006 Throwback Windbreaker">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/bucks-blue-hoodie.avif" alt="Cat">
        <div class="content">
          <p>Milwaukee Bucks City Edition Hoodie</p>
          <h3>69.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="251">
            <input type="hidden" name="product_name" value="Milwaukee Bucks City Edition Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/varsity-jacket.avif" alt="Cat">
        <div class="content">
          <p>Milwaukee Bucks City Edition Varsity Jacket</p>
          <h3>69.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="252">
            <input type="hidden" name="product_name" value="Milwaukee Bucks City Edition Varsity Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/custom-black.avif" alt="Cat">
        <div class="content">
          <p>Custom Statement Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="253">
            <input type="hidden" name="product_name" value="Custom Statement Edition Jersey (Bucks)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/custom-green.webp" alt="Cat">
        <div class="content">
          <p>Custom Away Jersey</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="254">
            <input type="hidden" name="product_name" value="Custom Away Jersey (Bucks)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/bucks/bucks-hat-1.avif" alt="Cat">
        <div class="content">
          <p>Milwaukee Bucks City Editon Snapback</p>
          <h3>39.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="255">
            <input type="hidden" name="product_name" value="Milwaukee Bucks City Editon Snapbac">
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