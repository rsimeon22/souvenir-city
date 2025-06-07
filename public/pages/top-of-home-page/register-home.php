<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Join Us!</title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.png">
</head>
<link rel="stylesheet" href="css/top-of-home-styles.css">
<script src="../assets/js/script.js"></script>
  
<body>
    
  <div class="logo-container">
    <a href="../shop-now-redirection.php">
      <img class="main-logo" src="icons/souvenir-city-logo.png" alt="mylogo">
    </a>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off">

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


  <div class = "login-container">
    <div class = "login-form">
      <h2>Welcome to our Store!</h2>
      <form action="../../includes/register.inc.php" method="post">

      <!-- Error messages -->
      <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<h4>Fill in all the fields.<h4>";
          }
          else if ($_GET["error"] == "invalidfirstname"){
            echo "<h4>Invalid first name. Please try again.<h4>";
          }
          else if ($_GET["error"] == "invalidlastname"){
            echo "<h4>Invalid last name. Please try again.<h4>";
          }
          else if ($_GET["error"] == "invalidusername"){
            echo "<h4>Invalid username. Please try again.<h4>";
          }
          else if ($_GET["error"] == "invalidemail"){
            echo "<h4>Invalid email. Please try again.<h4>";
          }
          else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<h4>Passwords don't match. Please try again.<h4>";
          }
          else if ($_GET["error"] == "passwordtooshort"){
            echo "<h4>Your password is too short. Please try again.<h4>";
          }
          else if ($_GET["error"] == "incorrectpin"){
            echo "<h4>Invalid PIN, only numbers are allowed. Please try again.<h4>";
          }
          else if ($_GET["error"] == "usernametaken"){
            echo "<h4>Your username has already been taken. Please try another.<h4>";
          }
        }
      ?>

        <div class="form-group">
          <label for="username">First Name:</label>
          <input type="text" id="first-name" name="first-name" placeholder="First Name..." required>
        </div>

        <div class="form-group">
          <label for="username">Last Name:</label>
          <input type="text" id="last-name" name="last-name" placeholder="Last Name..." required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Email..." required>
        </div>

        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" placeholder="Username..." required>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <p>(Need a minimum 8 characters with at least 1 special character)</p>
          <input type="password" id="password" name="password" placeholder="Password..." required>
          <i class="bi bi-eye-slash" id="togglePassword"></i>
        </div>
        
        <div class="form-group">
          <label for="password-repeat">Re-enter Password:</label>
          <input type="password" id="password-repeat" name="password-repeat" placeholder="Just making sure..." required>
          <i class="bi bi-eye-slash" id="togglePassword2"></i>
        </div>

        <div class="form-group">
          <label for="PIN">PIN:</label>
          <p>(6 digit PIN for account recovery and purchase verification)</p>
          <input type="password" id="PIN" name="PIN" placeholder="PIN..." required>
          <i class="bi bi-eye-slash" id="togglePIN"></i>
        </div>
        
        <button type="submit" name="submit">Register</button>
         
      </form>
      </body>
      
    </div>
  </div>

</body>
</html>