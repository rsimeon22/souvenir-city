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
<link rel="stylesheet" href="css/hou-texans.css">
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
        <img src="merch/texans/mens-nike-will-anderson-jr-navy-houston-texans-2nd-alternate-game-jersey_ss5_p-200430451+u-frvgvnkndmtbhzrqlarq+v-cgh9sqjgyqfwougkmawe.jpeg" alt="Cat">
        <div class="content">
          <p>Will Anderson Jr 2nd Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="811">
            <input type="hidden" name="product_name" value="Will Anderson Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/cj-stroud-navy-houston-texans-2nd-alternate-vapor-fuse-limited-jersey.jpg" alt="Cat">
        <div class="content">
          <p>CJ Stroud 2nd Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="812">
            <input type="hidden" name="product_name" value="CJ Stroud 2nd Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/cj-stroud-red-houston-texans-alternate-vapor-fuse-limited-jersey.jpg" alt="Cat">
        <div class="content">
          <p>CJ Stroud Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="813">
            <input type="hidden" name="product_name" value="CJ Stroud Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/cj-stroud-white-limited-jersey.avif" alt="Cat">
        <div class="content">
          <p>CJ Stroud Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="814">
            <input type="hidden" name="product_name" value="CJ Stroud Away Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/nico-collins-navy-houston-texans-team-vapor-fuse-limited-jersey.jpg" alt="Cat">
        <div class="content">
          <p>Nico Collins Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="815">
            <input type="hidden" name="product_name" value="Nico Collins Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-cj-stroud-navy-houston-texans-game-jersey_ss5_p-200041213+u-rcxmln1pii8fmjhlrror+v-nu3kyz7x3wgmm7e6tfb0.jpeg" alt="Cat">
        <div class="content">
          <p>CJ Stroud 2023 Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="816">
            <input type="hidden" name="product_name" value="CJ Stroud Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-derek-stingley-jr-navy-houston-texans-game-jersey_ss5_p-200422960+u-gpsz5qzwmewqaa74zqh6+v-kolcho4rwzlegtok95ll.jpeg" alt="Cat">
        <div class="content">
          <p>Derek Stingley Jr Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="817">
            <input type="hidden" name="product_name" value="Derek Stingley Jr Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-derek-stingley-jr-red-houston-texans-alternate-game-jersey_ss5_p-200422521+u-7ha14crtfhhmd4vajjtc+v-zquedtlc9gv1arnlgzh4.jpeg" alt="Cat">
        <div class="content">
          <p>Derek Stingley Jr Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="818">
            <input type="hidden" name="product_name" value="Derek Stingley Jr Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-will-anderson-jr-white-houston-texans-game-jersey_ss5_p-200422561+u-s0zbqwrw5kuxinostxlc+v-p0bvcktmbwdgfk1knqbx.jpeg" alt="Cat">
        <div class="content">
          <p>Will Anderson Jr Away Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="819">
            <input type="hidden" name="product_name" value="Will Anderson Jr Away Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-joe-mixon-navy-houston-texans-game-jersey_ss5_p-201540809+u-68eq7zhpezzjtbdqh4it+v-zo7ojq4nl7n7qwqeogh8.jpeg" alt="Cat">
        <div class="content">
          <p>Joe Mixon Home Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="820">
            <input type="hidden" name="product_name" value="Joe Mixon Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-laremy-tunsil-navy-houston-texans-2nd-alternate-game-jersey_ss5_p-201037485+u-xcymb3dmwrn9bqeqkl9h+v-z35uahhcj25ijw9mptpl.jpeg" alt="Cat">
        <div class="content">
          <p>Laremy Tunsil 2nd Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="821">
            <input type="hidden" name="product_name" value="Laremy Tunsil Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-laremy-tunsil-red-houston-texans-alternate-game-jersey_ss5_p-201037484+u-fzsjvl5hriin0rdxx8wj+v-x5euw3jsbzwnbt5pcetc.jpeg" alt="Cat">
        <div class="content">
          <p>Laremy Tunsil Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="822">
            <input type="hidden" name="product_name" value="Laremy Tunsil Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-will-anderson-jr-red-houston-texans-alternate-vapor-fuse-limited-jersey_ss5_p-200407736+u-d0lvitn34oczeaywlytc+v-aoia3dso3fyifgcggfcy.png" alt="Cat">
        <div class="content">
          <p>Will Anderson Jr Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="823">
            <input type="hidden" name="product_name" value="Will Anderson Jr Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-tank-dell-navy-houston-texans-2nd-alternate-game-jersey_ss5_p-201037493+u-takxkggliehrvoeldf30+v-vug0ulbxhzhcjbbf3qiz.jpeg" alt="Cat">
        <div class="content">
          <p>Tank Dell 2nd Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="824">
            <input type="hidden" name="product_name" value="Tank Dell Home Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/texans/mens-nike-tank-dell-red-houston-texans-alternate-game-jersey_ss5_p-201037492+u-7dfqwjx1lrxt9ewjrasm+v-iyhmvhbmplvedj0sfbml.jpeg" alt="Cat">
        <div class="content">
          <p>Tank Dell Alternate Jersey</p>
          <h3>119.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="825">
            <input type="hidden" name="product_name" value="Tank Dell Alternate Jersey">
            <input type="hidden" name="product_price" value="119.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>