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
<link rel="stylesheet" href="css/utah-jazz.css">
  

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
        <img src="merch/jazz/lauri-away.avif" alt="Cat">
        <div class="content">
          <p>Lauri Markkanen Away Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="421">
            <input type="hidden" name="product_name" value="Lauri Markkanen Away Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/lauri-classic.avif" alt="Cat">
        <div class="content">
          <p>Lauri Markkanen 1975 Throwback Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="422">
            <input type="hidden" name="product_name" value="Lauri Markkanen 1975 Throwback Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/m&n-jacket-97.avif" alt="Cat">
        <div class="content">
          <p>Utah Jazz Mitchell and Ness Jacket</p>
          <h3>69.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="423">
            <input type="hidden" name="product_name" value="Utah Jazz Mitchell and Ness Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/clarkson-city.avif" alt="Cat">
        <div class="content">
          <p>Jordan Clarkson City Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="424">
            <input type="hidden" name="product_name" value="Jordan Clarkson City Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/clarkson-classic.avif" alt="Cat">
        <div class="content">
          <p>Jordan Clarkson 1975 Throwback Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="425">
            <input type="hidden" name="product_name" value="Jordan Clarkson 1975 Throwback Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/22-city-shorts.avif" alt="Cat">
        <div class="content">
          <p>2022 City Edition Shorts</p>
          <h3>59.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="426">
            <input type="hidden" name="product_name" value="2022 City Edition Shorts">
            <input type="hidden" name="product_price" value="59.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/70's-throwback-jacket.avif" alt="Cat">
        <div class="content">
          <p>Utah Jazz Mitchell and Ness Jacket</p>
          <h3>69.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="427">
            <input type="hidden" name="product_name" value="Utah Jazz Mitchell and Ness Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/beanie-1.avif" alt="Cat">
        <div class="content">
          <p>Utah Jazz Beanie</p>
          <h3>39.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="428">
            <input type="hidden" name="product_name" value="Utah Jazz Beanie">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/custom-city.avif" alt="Cat">
        <div class="content">
          <p>Custom City Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="429">
            <input type="hidden" name="product_name" value="Custom City Edition Jerseyv (Jazz)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/custom-statement.avif" alt="Cat">
        <div class="content">
          <p>Custom Statement Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="430">
            <input type="hidden" name="product_name" value="Custom Statement Edition Jersey (Jazz)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/pistol-shirt.avif" alt="Cat">
        <div class="content">
          <p>"Pistol" Pete Maravich T-Shirt</p>
          <h3>59.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="431">
            <input type="hidden" name="product_name" value="'Pistol' Pete Maravich T-Shirt">
            <input type="hidden" name="product_price" value="59.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/sexton-city-22.avif" alt="Cat">
        <div class="content">
          <p>Colin Sexton 2022 City Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="432">
            <input type="hidden" name="product_name" value="Colin Sexton 2022 City Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/stockton-97.avif" alt="Cat">
        <div class="content">
          <p>John Stockton 1997 Throwback Away Jersey</p>
          <h3>99.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="433">
            <input type="hidden" name="product_name" value="John Stockton 1997 Throwback Away Jersey">
            <input type="hidden" name="product_price" value="99.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/jazz-hat-1.avif" alt="Cat">
        <div class="content">
          <p>Utah Jazz Snapback</p>
          <h3>39.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="434">
            <input type="hidden" name="product_name" value="Utah Jazz Snapback(Light Blue, 90's Logo)">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/jazz/jazz-hat-2.avif" alt="Cat">
        <div class="content">
          <p>Utah Jazz Snapback</p>
          <h3>39.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="435">
            <input type="hidden" name="product_name" value="Utah Jazz Snapback (Black, Standard Logo)">
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