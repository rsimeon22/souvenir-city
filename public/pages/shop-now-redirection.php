<?php

// Takes current url, checks for session login based on the needle in the url that's set in session-init.inc.php
$current_url = $_SERVER['REQUEST_URI'];

if (strpos($current_url, 'nologin') !== false){
  // if no log in, do nothing
  // no presense of a session
}
elseif (strpos($current_url, 'none') !== false) {
  // if there's a log in, create the session via session-init.inc.php
  include "../includes/session-init.inc.php";
}
else {
  include "../includes/session-init.inc.php";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="shop-now-css/styles.css">
<script src="../assets/js/search.js"></script>

<head>
  <title>Souvenir City | Home</title>
  <link rel="icon" type="image/x-icon" href="top-of-home-page/icons/favicon.png">
</head>

<body>
    
  <div class="logo-container">
    <a href="shop-now-redirection.php">
      <img class="main-logo" src="top-of-home-page/icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" onkeyup="filterResults()">

        <ul id="searchResults" class="search-results">
          <!-- Search results will be displayed here -->
        </ul>
      </div> 
      
      <div class="icons-container">
        <a href="top-of-home-page/view-shipping-info.php">
          <i class="shipping">
            <img src="top-of-home-page/icons/truck-icon.png" alt="shipping">
          </i>
        </a>
        <a href="top-of-home-page/cart-page.php">
          <i class="cart">
            <img src="top-of-home-page/icons/shopping-cart.png" alt="cart">
          </i>
        </a>

        <?php
        // if condition checking for user sign in
        // if signed in, user can access their profile page; if not, the user is forced to the log in page
          if (isset($_SESSION["userid"])) {
            echo "<a href='top-of-home-page/profile-page.php'><i class='login'><img src='top-of-home-page/icons/user-icon.png' alt='user'></i></a>";
          }
          else {
            echo "<a href='top-of-home-page/login-page.php'><i class='login'><img src='top-of-home-page/icons/user-icon.svg' alt='user'></i></a>";
          }
        ?>
        
      </div>
  </div>

  <nav>
    <ul>
      <li><a href="main/nba/nba.php">NBA</a></li>
      <li><a href="main/nfl/nfl.php">NFL</a></li>
      <li><a href="main/mlb/mlb.php">MLB</a></li>
      <li><a href="main/nhl/nhl.php">NHL</a></li>
      <li>
        <a style="cursor: pointer;"><a href="main/soccer/soccer.php">Soccer</a></a>
        <div class="dropdown-content">
            <div class="dropdown-item"><a href="main/soccer/leagues/prem/prem.php">Premier League</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/la-liga/la-liga.php">La Liga</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/bundesliga/bundesliga.php">Bundesliga</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/serie-a/serie-a.php">Serie A</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/ligue-1/ligue-1.php">Ligue 1</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/liga-nos/liga-nos.php">Liga Nos</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/mls/mls.php">MLS</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/rest-of-the-world/row.php">Rest of the World</a></div>
        </div>
      </li>
      <li><a href="main/ncaa/ncaa.php">NCAA</a></li>
      <li><a href="main/wnba/wnba.php">WNBA</a></li>
      <li>
        <a style="cursor: pointer;">More</a>
        <div class="dropdown-content">
            <div class="dropdown-item"><a href="help-page.php">Help?</a></div>
            <div class="dropdown-item"><a href="contact-me.php">Contact Me</a></div>
        </div>
      </li>
    </ul>
  </nav>



  <section id="hero">
    <h2>Welcome to our premier online store for sports jerseys! Dive into our collection of high-quality jerseys that blend style, performance, and team spirit. Each jersey is crafted with care, using premium materials that ensure durability and comfort. Whether you're a fan, athlete, or collector, our jerseys are designed to meet your needs.

      Choose from a wide range of styles, from classic designs to modern interpretations, all featuring authentic team logos and colors. Our jerseys are perfect for game day, training sessions, or casual wear, providing a versatile and stylish addition to your wardrobe.
      
      With our commitment to quality and customer satisfaction, we guarantee a seamless shopping experience. Explore our collection today and find the perfect jersey to show your support for your favorite team or to enhance your athletic performance. Join the thousands of satisfied customers who trust us for their sports jersey needs!</h2>
    <br>
    <br>
    <div class="hero-items">
      <div class="grid-item">
        <img src="main/featured-merch/nfl-fans-packers-if.jpg" alt="">
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/osu-fans.webp" alt="">
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/colts-fans.webp" alt="">
      </div>
    </div>
  </section>



  <section id="featured-items">
    <h1>Featured Items!</h1>
    <div class="featured-items">
      <div class="grid-item">
        <img src="main/featured-merch/iowa-conf-chip-shirt.webp" alt="">
        <h3>Celebrate with the Iowa Hawkeyes as the newest Big 10 tourney champions...</h3>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/caitlin-clark-record-shirt.avif" alt="">
        <h3>...or you could rep Caitlin Clark! She is the all time leading scorer for college hoops, you know.</h3>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/south-carolina-chip-shirt.avif" alt="">
        <h3>Not an Iowa fan? That's fine, we have a bunch of other merch, like this Gamecocks' SEC championship tee!</h3>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/uconn-long-sleeve-tee.avif" alt="">
        <h3>Don't worry, we didn't forget about the mens' merch either. Meet the mens' number 1 team in the country.</h3>
      </div>
    </div>
  </section>


  <section id="call-to-action">
    <h1>Popular Teams!</h1>
    <div class="call-to-action-items">
      <div class="grid-item">
        <img src="main/featured-merch/logos/nba-logo.png" alt="nba-logo">
        <ul id="cta-list">
          <li><a href="main/nba/nba-shop/bos-celtics.php">Celtics</a></li>
          <li><a href="main/nba/nba-shop/la-lakers.php">Lakers</a></li>
          <li><a href="main/nba/nba-shop/gs-warriors.php">Warriors</a></li>
          <li><a href="main/nba/nba-shop/den-nuggets.php">Nuggets</a></li>
          <li><a href="main/nba/nba-shop/ny-knicks.php">Knicks</a></li>
          <li><a href="main/nba/nba-shop/nola-pelicans.php">Pelicans</a></li>
        </ul>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/logos/nfl-logo.png" alt="nfl-logo">
        <ul id="cta-list">
          <li><a href="main/nfl/nfl-shop/kc-chiefs.php">Chiefs</a></li>
          <li><a href="main/nfl/nfl-shop/sf-49ers.php">49ers</a></li>
          <li><a href="main/nfl/nfl-shop/phi-eagles.php">Eagles</a></li>
          <li><a href="main/nfl/nfl-shop/dal-cowboys.php">Cowboys</a></li>
          <li><a href="main/nfl/nfl-shop/bal-ravens.php">Ravens</a></li>
          <li><a href="main/nfl/nfl-shop/ny-jets.php">Jets</a></li>
        </ul>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/logos/nhl-logo.png" alt="nhl-logo">
        <ul id="cta-list">
          <li><a href="main/nhl/nhl-shop/ny-rangers.php">Rangers</a></li>
          <li><a href="main/nhl/nhl-shop/vgs-golden-knights.php">Golden Knights</a></li>
          <li><a href="main/nhl/nhl-shop/col-avalanche.php">Avalanche</a></li>
          <li><a href="main/nhl/nhl-shop/fla-panthers.php">Panthers</a></li>
          <li><a href="main/nhl/nhl-shop/nj-devils.php">Devils</a></li>
          <li><a href="main/nhl/nhl-shop/toronto-maple-leafs.php">Maple Leafs</a></li>
        </ul>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/logos/mlb-logo.png" alt="mlb-logo">
        <ul id="cta-list">
          <li><a href="main/mlb/mlb-shop/ny-yankees.php">Yankees</a></li>
          <li><a href="main/mlb/mlb-shop/la-dodgers.php">Dodgers</a></li>
          <li><a href="main/mlb/mlb-shop/bos-red-sox.php">Red Sox</a></li>
          <li><a href="main/mlb/mlb-shop/hou-astros.php">Astros</a></li>
          <li><a href="main/mlb/mlb-shop/atl-braves.php">Braves</a></li>
          <li><a href="main/mlb/mlb-shop/phi-phillies.php">Phillies</a></li>
        </ul>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/logos/ncaa-logo.png" alt="ncaa-logo">
        <ul id="cta-list">
          <li><a href="main/ncaa/ncaa-shop/big 10/iowa.html">Iowa</a></li>
          <li><a href="main/ncaa/ncaa-shop/big 10/michigan.html">Michigan</a></li>
          <li><a href="main/ncaa/ncaa-shop/big east/uconn.html">UConn</a></li>
          <li><a href="main/ncaa/ncaa-shop/acc/duke.html">Duke</a></li>
          <li><a href="main/ncaa/ncaa-shop/acc/unc.html">North Carolina</a></li>
          <li><a href="main/ncaa/ncaa-shop/sec/alabama.html">Alabama</a></li>
        </ul>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/logos/soccer-ball.png" alt="soccer-logo">
        <ul id="cta-list">
          <li><a href="main/soccer/leagues/ligue-1/ligue-1-shop/psg.php">Paris Saint-Germain</a></li>
          <li><a href="main/soccer/leagues/la-liga/la-liga-shop/fc-barcelona.html">FC Barcelona</a></li>
          <li><a href="main/soccer/leagues/la-liga/la-liga-shop/real-madrid.html">Real Madrid</a></li>
          <li><a href="main/soccer/leagues/bundesliga/bundesliga-shop/bayern-munich.html">Bayern Munich</a></li>
          <li><a href="main/soccer/leagues/prem/prem-shop/man-united.html">Manchester United</a></li>
          <li><a href="main/soccer/leagues/prem/prem-shop/man-city.html">Manchester City</a></li>
        </ul>
      </div>
    </div>
  </section>





  <section id="new-items">
    <h1>Newest Items!</h1>
    <div class="new-items">
      <div class="grid-item">
        <img src="main/featured-merch/chiefs-super-bowl-champs-gear-2024.webp" alt="">
        <h3>We have the newest Super Bowl merch from your back-to-back defending champions, Kansas City Chiefs!</h3>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/stadium-series.png" alt="">
        <h3>Here on our site, we even have the newest 2024 Outdoor Stadium Series jerseys for the Flyers, Devils, Islanders, and Rangers!</h3>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/yankees-fans.webp" alt="">
        <h3>You know baseball season is right around the corner, right? Don't miss out on a chance to rep your favorite team!</h3>
      </div>
      <div class="grid-item">
        <img src="main/featured-merch/nba-jersey-prop.jpg" alt="">
        <h3>With the NBA playoffs around the corner, you might as well get a jersey cheering on your favorite team for their playoff push!</h3>
      </div>
    </div>
  </section>

  
  <footer>
    <div class="footer-column">
      <h3>Other Projects</h3>
      <ul id="footer-list">
        <li id="footer-item"><a href="https://rsimeon22.github.io/personal-portfolio/">Personal Portfolio</a></li>
        <li id="footer-item"><a href="https://rsimeon22.github.io/hoops-hq/">"Hoops HQ"</a></li>
        <li id="footer-item"><a href="https://rsimeon22.github.io/outdoor-weather-tracker/">Outdoor Weather Tracker Web Design</a></li>
        <li id="footer-item"><a href="https://rsimeon22.github.io/gamepad-tester/">Gamepad Tester</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Social Media Links</h3>
      <ul id="footer-list">
        <li id="footer-item"><a href="https://www.linkedin.com/in/renauld-simeon-ab9a91283/">LinkedIn</a></li>
        <li id="footer-item"><a href="https://profile.indeed.com/?hl=en_US&co=US&from=gnav-homepage&_ga=2.47581671.1124914721.1710774570-923725716.1703013208">Indeed</a></li>
        <li id="footer-item"><a href="https://montclair.joinhandshake.com/stu/users/37672788">Handshake</a></li>
        <li id="footer-item"><a href="https://www.ziprecruiter.com/profile">ZipRecuiter</a></li>
        <li id="footer-item"><a href="https://github.com/rsimeon22">Github</a></li>
      </ul>
    </div>
  </footer>










</body>
</html>