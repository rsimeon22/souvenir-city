<?php
require_once '../includes/session-init.inc.php';

include '../includes/dbh.inc.php';
include '../includes/get-orders.inc.php';


$pastOrders = fetchPastOrders($conn, $userId);
$pastOrdersReturns = fetchPastOrdersReturns($conn, $userId);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Customer Service Chat</title>
  <link rel="icon" type="image/x-icon" href="top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="shop-now-css/styles.css">
<script src="../../../assets/js/script.js"></script>




<body>

  <div class="logo-container">
    <a href="shop-now-redirection.php">
      <img class="main-logo" src="top-of-home-page/icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <div class="autocomplete-results" id="autocompleteResults"></div>
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

<body>
    <div class="chat-box">
        <h2>Souvenir City Virtual Assistant</h2>
        <form action="../../includes/cs-chat.inc.php" method="post">
            <label for="message">Select a category:</label>
            <select class="dropdown" name="message" id="message" onchange="updateResponseOptions()" required>
                <option value="">-- Choose a category --</option>
                <option value="order">Order</option>
                <option value="shipping">Shipping</option>
                <option value="returns">Returns</option>
                <option value="products">Products</option>
            </select>
            <br>
            <br>
            <br>
            <br>

            <label for="response">Select your question:</label><br>
            <select class="response" name="response" id="response" style="display:none;" required>
              
            </select>
            <br><br>

            <input class="button" type="submit" value="Ask">


            <?php
            // get request to get the response code from url given via cs-chat.inc.php
              if (isset($_GET["response"])) {
                if ($_GET["response"] == "1") {
                  echo "<h3>Chat says: You can track your order in the 'My Orders' section after logging in on your profile page.</h3>";
                }
                else if ($_GET["response"] == "2"){
                  echo "<h3>Chat says: We’ll send you a tracking link via email once your order is shipped.</h3>";
                }
                else if ($_GET["response"] == "3"){
                  echo "<h3>Chat says: Orders can be canceled within 2 hours of placing them.</h3>";
                }
                else if ($_GET["response"] == "4"){
                  echo "<h3>Chat says: We only offer Standard shipping options currently.</h3>";
                }
                else if ($_GET["response"] == "5"){
                  echo "<h3>Chat says: Yes, we ship to over 50 countries worldwide!</h3>";
                }
                else if ($_GET["response"] == "6"){
                  echo "<h3>Chat says: Standard shipping takes 3–5 business days.</h3>";
                }
                else if ($_GET["response"] == "7"){
                  echo "<h3>Chat says: Visit our 'Returns' page (only accessable for logged in users) and follow the steps to create a return label.</h3>";
                }
                else if ($_GET["response"] == "8"){
                  echo "<h3>Chat says: You can return items within 30 days for a full refund.</h3>";
                }
                else if ($_GET["response"] == "9"){
                  echo "<h3>Chat says: Yes, exchanges are accepted for size issues within 30 days.</h3>";
                }
                else if ($_GET["response"] == "10"){
                  echo "<h3>Chat says: Yes! All jerseys are officially licensed and come with a certificate of authenticity.</h3>";
                }
                else if ($_GET["response"] == "11"){
                  echo "<h3>Chat says: Sizes range from XS to 3XL. Check our size guide for more info.</h3>";
                }
                else if ($_GET["response"] == "12"){
                  echo "<h3>Chat says: Popular items are often restocked. Join our waitlist to be notified.</h3>";
                }
                else if ($_GET["response"] == "13"){
                  echo "<h3>Chat says: The teams that you can see are the teams we have. We are striving to come up with a solution for all very soon!</h3>";
                }
                else if ($_GET["response"] == "14"){
                  echo "<h3>Chat says: We are striving to get products onto the site as soon as possible! We appreaciate your patience here at Souvenir City.</h3>";
                }
                else if ($_GET["response"] == "15"){
                  echo "<h3>Chat says: TEST!</h3>";
                }
              }
              ?>
        </form>
    </div>
</body>
</html>
