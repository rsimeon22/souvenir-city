<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Your Shipping Info</title>
<link rel="icon" type="image/x-icon" href="icons/favicon.png">
</head>
<link rel="stylesheet" href="css/view-shipping-info.css">
<script src="../../../../assets/js/search.js"></script>
<script src="../../../../assets/js/script.js"></script>




<body>

<div class="logo-container">
  <a href="../shop-now-redirection.php">
    <img class="main-logo" src="icons/souvenir-city-logo.png" alt="mylogo">
  </a>
    
  <div class="search-container">
    <input type="text" id="searchInput" placeholder="Search...">
    <div class="autocomplete-results" id="autocompleteResults"></div>
  </div>  
    
  <div class="icons-container">
    <a href="view-shipping-info.php">
      <i class="shipping">
        <img src="icons/truck-icon.png" alt="wallet">
      </i>
    </a>
    <a href="cart-page.php">
      <i class="cart">
        <img src="icons/shopping-cart.png" alt="cart">
      </i>
    </a>
    <?php
      if (isset($_SESSION["userid"])) {
        echo "<a href='profile-page.php'><i class='login'><img src='icons/user-icon.png' alt='user'></i></a>";
      }
      else {
        echo "<a href='login-page.php'><i class='login'><img src='icons/user-icon.svg' alt='user'></i></a>";
      }
    ?>  
  </div>
</div>
<section class="show-address">
<h1>Your Shipping Information</h1>
<?php
if (!empty($shippingAddresses)) {
    // Loop through and display the shipping info
    foreach ($shippingAddresses as $address) {
      echo "<div class='address'>";
        
      // Show if it's the default address
      if ($address['is_default'] == 1) {
          echo "<h3><strong>This is your default shipping address.</strong></h3>";
      }
      echo "<p><strong>Name:</strong> " . htmlspecialchars($address['first_name']) . " " . htmlspecialchars($address['last_name']) . "</p>";
      echo "<p><strong>Address:</strong> " . htmlspecialchars($address['address']) . "</p>";
      echo "<p><strong>Apartment Number:</strong> " . htmlspecialchars($address['apartment_number']) . "</p>";
      echo "<p><strong>City:</strong> " . htmlspecialchars($address['city']) . "</p>";
      echo "<p><strong>State:</strong> " . htmlspecialchars($address['state_or_province']) . "</p>";
      echo "<p><strong>Postal Code:</strong> " . htmlspecialchars($address['postal_code']) . "</p>";
      echo "<p><strong>Country:</strong> " . htmlspecialchars($address['country']) . "</p>";
      echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($address['phone_number']) . "</p>";

      echo "<form method='POST' action='../../includes/delete-address.inc.php' onsubmit='return confirmDelete();'>
              <input type='hidden' name='address_id' value='{$address['shippingid']}'>
              <button type='submit' name='delete_address'>Delete</button>
            </form>";

      echo "</div><hr>";  // Add a line break between entries
    }
} else {
  echo "<div class='address'>";
  echo "<p>You don't have any shipping information saved yet.</p>";
  echo "</div><hr>";
}
?>
</section>


<section class="add-address">
  <h2>Add New Shipping Address</h2>

  <?php if ($success): ?>
  <p class="success-message">Address added successfully!</p>
  <?php endif; ?>

  <form action="../../includes/submit-shipping.inc.php" method="POST">
    <div class="form-group">
      <label for="username">First Name:</label>
      <input type="text" id="first-name" name="first-name" placeholder="First Name..." required>
    </div>

    <div class="form-group">
      <label for="username">Last Name:</label>
      <input type="text" id="last-name" name="last-name" placeholder="Last Name..." required>
    </div>

    <div class="form-group-twins">
      
      <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Address..." required>
      </div>

      <div>
        <label for="apartment-number">Apartment #:</label>
        <input type="text" id="apartment-number" name="apartment-number" placeholder="Apartment...">
      </div>

    </div>

    <div class="form-group-combo">
      
      <div>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" placeholder="City..." required>
      </div>  
      
      <div>
        <label for="state">State or Province:</label>
        <input type="text" id="state" name="state" placeholder="State..." required>
      </div> 
    
      <div>
        <label for="country">County:</label>
        <input type="text" id="country" name="country" placeholder="Country..." required>
      </div>

    </div>

    <div>
      <label for="postal-code">Postal Code:</label>
      <input type="text" id="postal-code" name="postal-code" placeholder="Postal Code..." required>
    </div>
        
    <div class="form-group">
      <label for="phone-number">Phone Number:</label>
      <input type="tel" id="phone-number" name="phone-number" placeholder="Phone number..." required>
    </div>

    <div class="form-group">
      <label style="display: inline-flex;" for="is_default">Make this my default shipping address:</label>
      <input type="checkbox" id="is_default" name="is_default">
    </div>
    
    <input type="hidden" name="origin" value="checkout">
   
    <button type="submit">Add Address</button>
  </form>
</section>

</body>

</body>
</html>