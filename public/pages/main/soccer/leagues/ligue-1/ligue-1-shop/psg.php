<?php
  
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/psg.css">
<script src="../../../../../../assets/js/search.js"></script>

<head>
  <title>Welcome!</title>
  <link rel="icon" type="image/x-icon" href="../../../../../top-of-home-page/icons/favicon.png">
</head>

<body>
    
  <div class="logo-container">
    <a href="../../../../../shop-now-redirection.php">
      <img class="main-logo" src="../../../../../top-of-home-page/icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" onkeyup="filterResults()">

        <ul id="searchResults" class="search-results">
          <!-- Search results will be displayed here -->
        </ul>
      </div> 
      
      <div class="icons-container">
        <a href="../../../../../top-of-home-page/wallet-page.php">
          <i class="shipping">
            <img src="../../../../../top-of-home-page/icons/truck-icon.png" alt="wallet">
          </i>
        </a>
        <a href="../../../../../top-of-home-page/cart-page.php">
          <i class="cart">
            <img src="../../../../../top-of-home-page/icons/shopping-cart.png" alt="cart">
          </i>
        </a>

        <?php
          if (isset($_SESSION["userid"])) {
            echo "<a href='../../../../../top-of-home-page/profile-page.php'><i class='login'><img src='../../../../../top-of-home-page/icons/user-icon.png' alt='user'></i></a>";
          }
          else {
            echo "<a href='../../../../../top-of-home-page/login-page.php'><i class='login'><img src='../../../../../top-of-home-page/icons/user-icon.svg' alt='user'></i></a>";
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
      <img src="../../../leagues/la-liga/la-liga-shop/merch/real-madrid/ucl-15-shirt.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="../../../leagues/la-liga/la-liga-shop/merch/real-madrid/ucl-15-shirt.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="../../../leagues/la-liga/la-liga-shop/merch/real-madrid/ucl-15-shirt.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="../../../leagues/la-liga/la-liga-shop/merch/real-madrid/ucl-15-shirt.webp" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src="../../../leagues/la-liga/la-liga-shop/merch/real-madrid/ucl-15-shirt.webp" alt="Shirt" class="shirt-img">
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
        <img src="merch/psg/mbappe-22-23-ligue-1-patch.webp" alt="Cat">
        <div class="content">
          <p>Kylian Mbappe 2022-23 Home Jersey w/ Ligue 1 Patch</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2146">
            <input type="hidden" name="product_name" value="Kylian Mbappe 2022-23 Home Jersey w/ Ligue 1 Patch">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/kvaratskhelia-pink.webp" alt="Cat">
        <div class="content">
          <p>Kvichka Kvaratskhelia Alternate Jersey (Pink)</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2147">
            <input type="hidden" name="product_name" value="Kvichka Kvaratskhelia Alternate Jersey (Pink)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/dembele-pink.webp" alt="Cat">
        <div class="content">
          <p>Ousmane Dembele Alternate Jersey (Pink)</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2148">
            <input type="hidden" name="product_name" value="Ousmane Dembele Alternate Jersey (Pink)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/marquinhos-pink.webp" alt="Cat">
        <div class="content">
          <p>Marquinhos Alternate Jersey (Pink)</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2149">
            <input type="hidden" name="product_name" value="Marquinhos Alternate Jersey (Pink)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/doue-pink.webp" alt="Cat">
        <div class="content">
          <p>Desire Doue Alternate Jersey (Pink)</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2150">
            <input type="hidden" name="product_name" value="Desire Doue Alternate Jersey (Pink)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/hakimi-pink.webp" alt="Cat">
        <div class="content">
          <p>Achraf Hakimi Alternate Jersey (Pink)</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2151">
            <input type="hidden" name="product_name" value="Achraf Hakimi Alternate Jersey (Pink)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/ramos-pink.webp" alt="Cat">
        <div class="content">
          <p>Goncalo Ramos Alternate Jersey (Pink)</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2152">
            <input type="hidden" name="product_name" value="Goncalo Ramos Alternate Jersey (Pink)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/vitinha-22-23-ligue-1-patch.webp" alt="Cat">
        <div class="content">
          <p>Vitinha 2022-23 Home Jersey w/ Ligue 1 Patch</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2153">
            <input type="hidden" name="product_name" value="Vitinha 2022-23 Home Jersey w/ Ligue 1 Patch">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/messi-22-23-home.webp" alt="Cat">
        <div class="content">
          <p>Lionel Messi 2022-23 Home Jersey</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2154">
            <input type="hidden" name="product_name" value="Lionel Messi 2022-23 Home Jersey">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/neymar-22-23-ucl-patch.webp" alt="Cat">
        <div class="content">
          <p>Neymar 2022-23 Home Jersey w/ Ligue 1 Patch</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2155">
            <input type="hidden" name="product_name" value="Neymar 2022-23 Home Jersey w/ Ligue 1 Patch">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/lucas-hernandez-pink].webp" alt="Cat">
        <div class="content">
          <p>Lucas Hernandez Alternate Jersey (Pink)</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2156">
            <input type="hidden" name="product_name" value="Lucas Hernandez Alternate Jersey (Pink)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/mendes-pink.webp" alt="Cat">
        <div class="content">
          <p>Nuno Mendes Alternate Jersey (Pink)</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2157">
            <input type="hidden" name="product_name" value="Nuno Mendes Alternate Jersey (Pink)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/custom-home.webp" alt="Cat">
        <div class="content">
          <p>Custom Home Jersey</p>
          <h3>109.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2158">
            <input type="hidden" name="product_name" value="Custom Home Jersey (PSG)">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/cavani-18-19.webp" alt="Cat">
        <div class="content">
          <p>Edinson Cavani 2018-19 Throwback Home Jersey</p>
          <h3>109.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2159">
            <input type="hidden" name="product_name" value="Edinson Cavani 2018-19 Throwback Home Jersey">
            <input type="hidden" name="product_price" value="109.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/psg/quarter-zip-pullover.webp" alt="Cat">
        <div class="content">
          <p>Paris Saint-Germain Quarter Zip Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post">
            <button formaction="../../../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2160">
            <input type="hidden" name="product_name" value="Paris Saint-Germain Quarter Zip Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>