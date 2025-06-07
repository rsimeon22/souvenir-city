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
  <title>Soccer League Selection</title>
  <link rel="icon" type="image/x-icon" href="../../top-of-home-page/icons/favicon.png">
</head>
<link rel="stylesheet" href="css/soccer.css">
  
<body>
    
  <div class="logo-container">
    <a href="../../shop-now-redirection.php">
      <img class="main-logo" src="../../top-of-home-page/icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" onkeyup="filterResults()">

        <ul id="searchResults" class="search-results">
          <!-- Search results will be displayed here -->
        </ul>
      </div> 
      
      <div class="icons-container">
        <a href="../../top-of-home-page/view-shipping-info.php">
          <i class="shipping">
            <img src="../../top-of-home-page/icons/truck-icon.png" alt="shipping">
          </i>
        </a>
        <a href="../../top-of-home-page/cart-page.php">
          <i class="cart">
            <img src="../../top-of-home-page/icons/shopping-cart.png" alt="cart">
          </i>
        </a>

        <?php
          if (isset($_SESSION["userid"])) {
            echo "<a href='../../top-of-home-page/profile-page.php'><i class='login'><img src='../../top-of-home-page/icons/user-icon.png' alt='user'></i></a>";
          }
          else {
            echo "<a href='../../top-of-home-page/login-page.php'><i class='login'><img src='../../top-of-home-page/icons/user-icon.svg' alt='user'></i></a>";
          }
        ?>
        
      </div>
</div>

  <div class="welcome-container">
    <h1>Select a league...</h1>
  </div>


  <div class="grid-container">
    <div class="grid-item"><a href="leagues/prem/prem.php"><img src="leagues/league-logos/prem.png"></a></div>
    <div class="grid-item"><a href="leagues/la-liga/la-liga.php"><img src="leagues/league-logos/la-liga.png"></a></div>
    <div class="grid-item"><a href="leagues/bundesliga/bundesliga.php"><img src="leagues/league-logos/bundesliga.png"></a></div>
    <div class="grid-item"><a href="leagues/ligue-1/ligue-1.php"><img src="leagues/league-logos/ligue-1.jpg"></a></div>
    <div class="grid-item"><a href="leagues/serie-a/serie-a.php"><img src="leagues/league-logos/serie-a.jpg"></a></div>
    <div class="grid-item"><a href="leagues/mls/mls.php"><img src="leagues/league-logos/mls.png"></a></div>
    <div class="grid-item"><a href="leagues/liga-nos/liga-nos.php"><img src="leagues/league-logos/liga-nos.png"></a></div>
    <div class="grid-item"><a href="leagues/rest-of-the-world/row.php"><img src="leagues/league-logos/row.jpg"></a></div>
  </div>
  
  <div class="welcome-container">
    <h1>...any league.</h1>
  </div>

</body>
</html>