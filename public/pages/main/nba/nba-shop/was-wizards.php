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
<link rel="stylesheet" href="css/was-wizards.css">
  

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
        <img src="merch/wizards/poole-away.avif" alt="Cat">
        <div class="content">
          <p>Jordan Poole Away Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="436">
            <input type="hidden" name="product_name" value="Jordan Poole Away Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/poole-home.avif" alt="Cat">
        <div class="content">
          <p>Jordan Poole Home Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="437">
            <input type="hidden" name="product_name" value="Jordan Poole Home Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/poole-statement.avif" alt="Cat">
        <div class="content">
          <p>Jordan Poole Statement Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="438">
            <input type="hidden" name="product_name" value="Jordan Poole Statement Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/kuz-away.avif" alt="Cat">
        <div class="content">
          <p>Kyle Kuzma Away Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="439">
            <input type="hidden" name="product_name" value="Kyle Kuzma Away Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/kuz-city.avif" alt="Cat">
        <div class="content">
          <p>Kyle Kuzma City Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="440">
            <input type="hidden" name="product_name" value="Kyle Kuzma City Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/kuz-statement.avif" alt="Cat">
        <div class="content">
          <p>Kyle Kuzma Statement Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="441">
            <input type="hidden" name="product_name" value="Kyle Kuzma Statement Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/deni-city.avif" alt="Cat">
        <div class="content">
          <p>Deni Avdija 2023 City Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="442">
            <input type="hidden" name="product_name" value="Deni Avdija 2023 City Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/deni-away.avif" alt="Cat">
        <div class="content">
          <p>Deni Avdija Away Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="443">
            <input type="hidden" name="product_name" value="Deni Avdija Away Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/m&n-hoodie-08.avif" alt="Cat">
        <div class="content">
          <p>Washington Wizards Mitchell and Ness Hoodie</p>
          <h3>69.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="444">
            <input type="hidden" name="product_name" value="Washington Wizards Mitchell and Ness Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/beal-away.jpg" alt="Cat">
        <div class="content">
          <p>Bradley Beal Away Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="445">
            <input type="hidden" name="product_name" value="Bradley Beal Away Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/city-beanie.avif" alt="Cat">
        <div class="content">
          <p>Deni Avdija Away Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="446">
            <input type="hidden" name="product_name" value="Deni Avdija Away Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/navy-hoodie.avif" alt="Cat">
        <div class="content">
          <p>Washington Wizards Navy Hoodie</p>
          <h3>69.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="447">
            <input type="hidden" name="product_name" value="Washington Wizards Navy Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/custom-city.avif" alt="Cat">
        <div class="content">
          <p>Custom City Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="448">
            <input type="hidden" name="product_name" value="Custom City Edition Jersey (Wizards)">
            <input type="hidden" name="product_price" value="49.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/custom-classic.avif" alt="Cat">
        <div class="content">
          <p>Custom 2023 City Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="449">
            <input type="hidden" name="product_name" value="Custom 2023 City Edition Jersey">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/wizards/kispert-city.avif" alt="Cat">
        <div class="content">
          <p>Corey Kispert City Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post">
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="450">
            <input type="hidden" name="product_name" value="Corey Kispert City Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>