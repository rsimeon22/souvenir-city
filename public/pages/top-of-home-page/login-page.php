<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Sign In!</title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.png">
</head>
<link rel="stylesheet" href="css/top-of-home-styles.css">
<script src="../../assets/js/script.js"></script>
  
<body>
    
  <div class="logo-container">
    <a href="../shop-now-redirection.php">
      <img class="main-logo" src="icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" onkeyup="filterResults()">

        <ul id="searchResults" class="search-results">
          <!-- Search results are diabled on this page, no search.js -->
        </ul>
      </div> 
      
      <div class="icons-container">
        <a href="view-shipping-info.php">
          <i class="shipping">
            <img src="icons/truck-icon.png" alt="shipping">
          </i>
        </a>
        <a href="cart-page.php">
          <i class="cart">
            <img src="icons/shopping-cart.png" alt="cart">
          </i>
        </a>
        <a href="login-page.php">
          <i class="login">
            <img src="icons/user-icon.svg" alt="user">
          </i>
        </a>
      </div>
  </div>


  <div class="login-container">
    <div class="login-form">
      <h2>Welcome Back!</h2>
      <form action="../../includes/login.inc.php" method="post"> 
        <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<h4>Fill in all the fields</h4>";
          }
          else if ($_GET["error"] == "wronglogin"){
            echo "<h4>Incorrect username. Please try again.</h4>";
          }
          else if ($_GET["error"] == "wrongpwlogin"){
            echo "<h4>Incorrect password. Please try again.</h4>";
          }
        }
      ?>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" placeholder="Username..." required>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Password..." required>
        </div>

        <button type="login-button" name="submit" id="submit">Login</button>
        <br>
        <br>
        <a href="forgot-password.php"><p>Forgot Password?</p></a>
        <br>
        <br>
        <a href="../shop-now-redirection.php?error=none"><p>Continue as Guest</p></a>
        <br>
        <br>
        <p>Don't have an account? Register here!</p>

        <button type="button" class="redirect-button" onclick="window.location.href='register-home.php'">Register</button>
        

      </form>
      
      
    
    </div>
  </div>

  

</body>
</html>