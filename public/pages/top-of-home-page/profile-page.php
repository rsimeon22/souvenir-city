<?php

// If there's a log in, continue the session via session-init.inc.php
include '../../includes/session-init.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Your Profile</title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.png">
</head>
<link rel="icon" href="icons/souvenir-city-logo.png">
<link rel="stylesheet" href="css/profile-page-2.css">
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
    </div>
</div>


<div class="columns-container">

    <div class="column1">
        <div class="block1">
            <img src="../top-of-home-page/icons/favicon-pp.png" style="border-radius: 50%;">
            <?php
                if (isset($_SESSION["userid"])) {
                    echo "<h2>Welcome, " . $_SESSION["userfirstname"] . " " . $_SESSION["userlastname"] . "!" . "</h2>";
                }
                else {
                    echo "<h2>You shouldn't even be here but since you are, you might as well sign in.</h2>
                    <br>
                    <div class= 'button-container'><a href='login-page.php' class='rounded-button'>Sign In!</a></div>";
                }
            ?>
        </div>

        <br>
        
        <div class="block2">
            <hr>
                
            <?php
                 if (isset($_SESSION["userid"])) {
                    echo "<h3>Username: " . $_SESSION["userusername"] ."</h3>";
                }
                else {
                    echo "N/A";
                }
            ?>

            <hr>

            
            <?php
                if (isset($_SESSION["userid"])) {
                    echo "<h3>Email: " . $_SESSION["useremail"] ."</h3>";
                }
                else {
                    echo "N/A";
                }
            ?>
        

            <hr>

            
            <a href="../../includes/logout.inc.php"><h3>Log Out</h3></a>

            <!--
            <h4>
                <?php
                    if (isset($_SESSION["userid"])){
                        $result = $conn->prepare("SELECT created_at FROM remember_tokens WHERE user_id = ? ORDER BY id DESC LIMIT 1");
                        $result->bind_param("i", $user_id);
                        $result->execute();
                        $latestLogin = $result->get_result();

                        if ($row = $latestLogin->fetch_assoc()){
                            echo "<h2>Logged In Since:" . htmlspecialchars($row['created_at']) ."</h2>";
                        }
                    }
                ?>
            </h4>
            -->

            <hr>
        </div>
    </div>

    <div class="column2">
        <a href="change-email.php"><h3 style="margin-top: 50px;">Change Email</h3></a>
        
        <hr>
        
        <a href="change-password.php"><h3>Change Password</h3></a>

        <hr>
        
        <a href="change-pin.php"><h3>Change PIN</h3></a>
        
        <hr>
        
        <a href="my-orders.php"><h3>Your Orders</h3></a>
        
        <hr>

        <a href="view-shipping-info.php"><h3>Edit/View Shipping Information</h3></a>
        
        <hr>

        <a href="returns.php"><h3>Returns</h3></a>
        
        <hr>

        <a href="../customer-service-chat.php"><h3>Customer Service Chat</h3></a>
        
        <hr>


    </div>
</div>

</body>