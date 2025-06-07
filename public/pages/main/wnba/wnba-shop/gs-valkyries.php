<!--<?php

session_start();


if (empty($_SESSION['cart_system'])) {
    $_SESSION['cart_system'] = [];
}

?>
-->

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
<link rel="stylesheet" href="css/gs-valkyries.css">
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
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
      <h3>Get 20% off on all shirts</h3>
      <hr>
      <h1>NEW PROMO CODE</h1>
      <img src="" alt="">
      <h3>Use promo code <span class="promo-code">SHIRT20</span> at checkout</h3>
      <p>Promo code expires on **/**/****<p>
      <hr>

      <h1>Special Offer!</h1>
      <img src=" merch/fever/navy-caitlin-clark-roy-tee.avif" alt="Shirt" class="shirt-img">
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
        <img src="merch/valkyries/mens-new-era-black-golden-state-valkyries-old-school-sport-enzyme-wash-oversized-t-shirt_ss5_p-202223432+u-rlkrfvy7knx2qqhrkewo+v-mzh1skpijly8p2ry4bxx.jpeg" alt="Cat">
        <div class="content">
          <p>Black Golden State Valkyries Oversized T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2116">
            <input type="hidden" name="product_name" value="Black Golden State Valkyries Oversized T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/black-golden-state-valkyries-explorer-edition-fast-break-replica-jersey_ss5_p-203109923+u-cdi3a4egyjvrvdyrtsmx+v-tl6n5e3q8nj2oiys8d3m.jpeg" alt="Cat">
        <div class="content">
          <p>Juste Jocyte Explorer Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2117">
            <input type="hidden" name="product_name" value="Juste Jocyte Explorer Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/mens-new-era-eclipse-black-golden-state-valkyries-boxy-sport-classics-vintage-wash-t-shirt_ss5_p-202223449+u-dunplfpfvllpzsts5rku+v-6blbp2dpbfphkgffffrf.jpeg" alt="Cat">
        <div class="content">
          <p>Black Golden State Valkyries Classics T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2118">
            <input type="hidden" name="product_name" value="Black Golden State Valkyries Classics T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/stadium-essentials-heather-gray-golden-state-valkyries-cropped-pullover-sweatshirt_ss5_p-202741531+u-63wipxjyrs7tioyrmwnq+v-hm4avuymqhliwil7kg66.jpeg" alt="Cat">
        <div class="content">
          <p>Heather Gray Golden State Valkyries Pullover Sweatshirt</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2119">
            <input type="hidden" name="product_name" value="Heather Gray Golden State Valkyries Pullover Sweatshirt">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/unisex-fanatics-black-golden-state-valkyries-explorer-edition-fast-break-replica-custom-jersey_ss5_p-202927745+u-a8wvk6wjljmwityph263+v-vi3mooqxulvvyvx4aeou.jpeg" alt="Cat">
        <div class="content">
          <p>Custom Explorer Edition Jersey</p>
          <h3>89.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2120">
            <input type="hidden" name="product_name" value="Custom Exolorer Edition Jersey (Valkyries)">
            <input type="hidden" name="product_price" value="89.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/unisex-fanatics-kayla-thornton-eclipse-black-golden-state-valkyries-explorer-edition-fast-break-replica-jersey_ss5_p-203137251+u-twuu0adsy4joxwh4aqlc+v-e71so9mr0lfktksmvom7.jpeg" alt="Cat">
        <div class="content">
          <p>Kayla Thornton Explorer Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2121">
            <input type="hidden" name="product_name" value="Kayla Thornton Explorer Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/unisex-islide-eclipse-black-golden-state-valkyries-primary-logo-slide-sandals_ss5_p-201677118+u-mkevebejzlnmkjojcktd+v-ldvifrvu0arv4r9utdyq.jpeg" alt="Cat">
        <div class="content">
          <p>Black Golden State Valkyries Primary Logo Slides</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2122">
            <input type="hidden" name="product_name" value="Black Golden State Valkyries Primary Logo Slides">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/unisex-fanatics-natural-golden-state-valkyries-team-elite-t-shirt_ss5_p-202147134+u-gvg3hdavkmxnnwjmjp3x+v-vqzthy768nljoyk9esnv.jpeg" alt="Cat">
        <div class="content">
          <p>Tan Golden State Valkyries T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2123">
            <input type="hidden" name="product_name" value="Tan Golden State Valkyries T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/unisex-nike-kate-martin-black-golden-state-valkyries-explorer-edition-victory-jersey_ss5_p-203039990+u-nwgzzckzypzmpbbks6bf+v-onpwia4hsl63fuw2nzi5.jpeg" alt="Cat">
        <div class="content">
          <p>Kate Martin Explorer Edition Jersey</p>
          <h3>79.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2124">
            <input type="hidden" name="product_name" value="Kate Martin Explorer Edition Jersey">
            <input type="hidden" name="product_price" value="79.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/unisex-nike-violet-golden-state-valkyries-2025-inaugural-season-crest-pullover-hoodie_ss5_p-203139667+u-o2rmhw5cfl4v7wnsvppr+v-n4sw4l9jgd7bomeoqmnb.jpeg" alt="Cat">
        <div class="content">
          <p>Violet Golden State Valkyries 2025 Inaugural Season Crest Pullover Hoodie</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2125">
            <input type="hidden" name="product_name" value="Violet Golden State Valkyries 2025 Inaugural Season Crest Pullover Hoodie">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/unisex-stadium-essentials-violet-golden-state-valkyries-origins-homecourt-t-shirt_ss5_p-202867954+u-cphgwfl0mx01i2n2aqyi+v-yz3zil2oaxfpmptfi6js.jpeg" alt="Cat">
        <div class="content">
          <p>Violet Golden State Valkyries Origins Homecourt T-Shirt</p>
          <h3>39.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2126">
            <input type="hidden" name="product_name" value="Violet Golden State Valkyries Origins Homecourt T-Shirt">
            <input type="hidden" name="product_price" value="39.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/womens-antigua-charcoal-golden-state-valkyries-tribute-half-zip-top_ss5_p-202315031+u-sunafuirmlku93pm6wzr+v-yacmhe9iur5iiwjajuh8.jpeg" alt="Cat">
        <div class="content">
          <p>Black Golden State Valkyries Half Zip Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2127">
            <input type="hidden" name="product_name" value="Black Golden State Valkyries Half Zip Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/womens-antigua-gray-golden-state-valkyries-even-par-full-zip-jacket_ss5_p-202315102+u-jci9v9rsqeuaq46jtfdi+v-s3nax993wct7tmgkcdow.jpeg" alt="Cat">
        <div class="content">
          <p>Gray Golden State Valkyries Full Zip Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2128">
            <input type="hidden" name="product_name" value="Gray Golden State Valkyries Full Zip Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/womens-antigua-heather-gray-golden-state-valkyries-fortune-half-zip-pullover-jacket_ss5_p-202314747+u-ke1v58qyj54qfdc25stt+v-go0oxrrn1m4qt39ryzi3.jpeg" alt="Cat">
        <div class="content">
          <p>Heather Gray Golden State Valkyries Half Zip Jacket</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2129">
            <input type="hidden" name="product_name" value="Heather Gray Golden State Valkyries Half Zip Jacket">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>
      <div class="grid-item">
        <img src="merch/valkyries/womens-sportiqe-violet-golden-state-valkyries-ashlyn-raglan-sweatshirt_ss5_p-202987849+u-4bt4bwrgnjslfzdznb9f+v-niifnaitdnw7s89onduk.jpeg" alt="Cat">
        <div class="content">
          <p>Violet Golden State Valkyries Sweatshirt</p>
          <h3>69.99</h3>
          <form method="post"> 
            <button formaction="../../../../includes/buy-now.inc.php"  method="post" class="rounded-button">Buy Now</button>
            <input type="hidden" name="id" value="2130">
            <input type="hidden" name="product_name" value="Violet Golden State Valkyries Sweatshirt">
            <input type="hidden" name="product_price" value="69.99">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">    
            <button formaction="../../../../includes/add-to-cart.inc.php" class="rounded-button">Add to Cart</button>
          </form>
        </div>
      </div>

    </div>

  </div>


</body>
</html>