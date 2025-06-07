<?php

// If there's a log in, continue the session via session-init.inc.php
include '../includes/session-init.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>UC</title>
  <link rel="icon" type="image/x-icon" href="top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="shop-now-css/styles.css">
<script src="../assets/js/search.js"></script>

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
        <a style="cursor: pointer;"><a href="main/soccer/soccer.html">Soccer</a></a>
        <div class="dropdown-content">
            <div class="dropdown-item"><a href="main/soccer/leagues/prem/prem.html">Premier League</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/la-liga/la-liga.html">La Liga</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/bundesliga/bundesliga.html">Bundesliga</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/serie-a/serie-a.html">Serie A</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/ligue-1/ligue-1.php">Ligue 1</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/liga-nos/liga-nos.html">Liga Nos</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/mls/mls.html">MLS</a></div>
            <div class="dropdown-item"><a href="main/soccer/leagues/rest-of-the-world/row.html">Rest of the World</a></div>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>Hey..... this page is under construction..</h2>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>The services to this page is coming soon. Meanwhile, pelase check out our other offers!</h2>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>Sorry about that...</h2>
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