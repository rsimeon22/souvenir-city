<?php

// If there's a log in, continue the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Help Page</title>
  <link rel="icon" type="image/x-icon" href="top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="shop-now-css/help-page.css">
<script src="../assets/js/search.js"></script>
<script src="../assets/js/help-page.js"></script>

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


<div class="welcome-container">
  <h1>Need help? We've got you covered!</h1>

  <p>
    Welcome to our Help Page! We’re here to ensure you have a seamless experience while shopping on our website. Our platform is designed to make browsing and purchasing products 
    as simple as possible. If you have any minor concerns, I hope you can find the help you need below!
  </p>
</div>

<hr>

<div class="virtual-assistant">
  <h1>Customer Service Virtual Assistant</h1>

  <p>
    Need help fast? Our <a href="customer-service-chat.php">Souvenir City Virtual Assistant</a> is available 24/7 to answer your questions about orders, shipping, returns, and more. Get instant support—no waiting, no hassle!
  </p>
</div>

<hr>

<section id="scroller">
  <h1>Help Page Scroller</h1>
  <div class="scroller-container">
    <div class="scroller-item">
      <p>
        If you ever need help finding anything, just find the menu to the right of your screen; you'll then see icons that will direct you the section you're looking for on the help page!
      </p>

      <p>
        (It'll probably be directly to the right of this step!)
      </p>
      <img src="shop-now-css/help-pics/side-menu.png" alt="menu">
  
    </div>

    <div class="scroller-item">
      <p>
        Don't miss the arrow at the bottom left side of your screen! If you don't feel like scrolling to the top of the page, we'll do the work for you!
      </p>
    
      <video class="scroller-demo" controls="controls autoplay">
        <source src="shop-now-css/help-pics/scroller-demo.mp4" alt="scroller"></source>
      </video>
  
    </div>
  </div>
</section>

<hr>

<section id="back-to-home">
  <h1>Back to Home</h1>
  <div class="back-to-home-container">
    <div class="back-to-home-item">
      <p>
        If you ever need help going back to the home page, just click the logo on the top left corner and you will be redirected to the main page!
      </p>

      <img src="shop-now-css/help-pics/direct-to-home.png" alt="direct-home">

    </div>
  </div>
</section>

<hr>

<section id="search-bar">
  <h1>Search Bar</h1>
  <div class="search-bar-container">
    <div class="search-bar-item">
      <p>
        This is what you see once you are on the main page of our "Souvenir City" website!
      </p>

      <p>
        You can notice a search bar at the top!
      </p>
          
      <img src="shop-now-css/help-pics/intro.png" alt="intro">
    </div>
        
    <div class="search-bar-item-2">
      <p>
        Our search bar allows users to input the team(s) they are looking for to find the specific page(s) for their teams' content. (As of, now you must start with the city's name. Sorry!)
      </p>

      <img src="shop-now-css/help-pics/displayed-results-1.png" alt="dispalyed-results-1">
      <img src="shop-now-css/help-pics/displayed-results-2.png" alt="dispalyed-results-2">
    </div>
        
    <div class="search-bar-item-3">
      <p>
        You can even click on the result of the team that you want, taking you to that teams' page directly!    
      </p>
    
      <video class="search-demo" controls="controls autoplay">
        <source src="shop-now-css/help-pics/search-demo.mp4" alt="video-demo">
      </video>
    </div>

    <div class="search-bar-item-4">
      <p>
        Our search bar won't show anything if you don't type valid input, however.  
      </p>

      <img src="shop-now-css/help-pics/no-results.png" alt="dispalyed-results-1">
    </div>
  </div>
</section>

<hr>

<section id="log-in">
  <h1>Logging In</h1>
  
  <div class="log-in-container">
    <div class="log-in-item">
      <p>
        This is what you see once you are on the main page of our "Souvenir City" website!
      </p>
  
      <p>
        You can notice three icons at the top right of your screen. The third of the three is a user icon, clicking that will take you to the login screen.
      </p>
            
      <img src="shop-now-css/help-pics/intro.png" alt="intro">

    </div>
          
    <div class="log-in-item-2">
      <p>
        You should be redirected to this screen shown below.  
      </p>
  
      <img src="shop-now-css/help-pics/log-in-page.png" alt="log-in-page">
  
    </div>
          
    <div class="log-in-item-3">
      <p>
        You now have the ability to log in...     
      </p>
      
      <img src="shop-now-css/help-pics/log-in-direct(1).png" alt="log-in-button-pic">

    </div>
  
    <div class="log-in-item-4">
      <p>
        ...or to register for an account if you're new!
      </p>

      <img src="shop-now-css/help-pics/register-direct(1).png" alt="register-button-pic">
    </div>
  </div>
  
</section>

<hr>

<section id="returns">
  <h1>Returns</h1>
  
  <div class="returns-container">
    <div class="returns-item">
      <p>
        This is what you see once you are on the returns page of our "Souvenir City" website!
      </p>
  
      <p>
        You can only access this page if you have an account with us (can be found on the profile page).
      </p>
            
      <img src="shop-now-css/help-pics/returns-standard.png" alt="intro">

    </div>
          
    <div class="returns-item-2">
      <p>
        Submitting a valid request for an order will prompt a success message saying that we will have your return processed in 3-10 days!  
      </p>
  
      <img src="shop-now-css/help-pics/returns-green.png" alt="returns-page">
  
    </div>
          
    <div class="returns-item-3">
      <p>
        If you don't select an order, you'll get a prompt telling you to choose one.    
      </p>
      
      <img src="shop-now-css/help-pics/returns-red.png" alt="returns-button-pic">

    </div>
  
    <div class="returns-item-4">
      <p>
        If we already have this request for a specific order item, we won't take it again to avoid confusion (and to practice patience).
      </p>

      <img src="shop-now-css/help-pics/returns-blue.png" alt="register-button-pic">
    </div>
  </div>  
</section>

<hr>

<div class="closing-container">
  <h1>Anything else?</h1>

  <p>
    If you ever run into any issues or have more questions, feel free to reach out to me via the “Contact Me” section. Dedication to providing you 
    with all the assistance you need to have a smooth shopping experience is priority #1. Thank you for choosing us, and happy shopping!
  </p>
</div>

<div class="side-menu">
  <a href="#scroller" class="nav-link">
    <img
      src="shop-now-css/icons/menu-icon.png"
      alt="back-to-home"
      loading="lazy"
      class="socicon"
      />
  </a>

  <a href="#back-to-home" class="nav-link">
    <img
      src="shop-now-css/icons/home-icon.png"
      alt="back-to-home"
      loading="lazy"
      class="socicon"
      />
  </a>

  <a href="#search-bar" class="nav-link">
    <img
      src="shop-now-css/icons/search-icon.png"
      alt="search"
      class="socicon"
      />
  </a>

  <a href="#log-in" class="nav-link">
    <img
      src="shop-now-css/icons/log-in-icon.png"
      alt="log-in"
      class="socicon"
      />
  </a>

  <a href="#returns" class="nav-link">
    <img
      src="shop-now-css/icons/returns-icon.png"
      alt="returns"
      class="socicon"
      />
  </a>
</div>

<i class="scroll-up" id="scroll-up" onclick="scrollUp()">
 
  <img
    src="shop-now-css/icons/white-arrow-png-41944.png"
    class="socicon up-arrow"
    alt="scroll-up"
  />

</i>



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