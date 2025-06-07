<?php

// If there's a log in, continue the session
session_start();

if (!isset($_SESSION['cart_system'])) {
  $_SESSION['cart_system'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.png">
  <link rel="stylesheet" href="css/checkout-styles.css">
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

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
          <img src="icons/truck-icon.png" alt="shipping">
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
        } else {
          echo "<a href='login-page.php'><i class='login'><img src='icons/user-icon.svg' alt='user'></i></a>";
        }
      ?>
    </div>
  </div>

  <section class="checkout">
    <div class="row">
      <div class="column">
        <div class="cart-container">
          <div class="cart-item">
            <?php
              if (!empty($_SESSION['cart_system'])) {
                $cart_total = [];
                foreach ($_SESSION['cart_system'] as $product) { 
                  echo "<h3>{$product['name']} - {$product['price']} x {$product['quantity']}";
              
                  if (!empty($product['size'])) {
                    echo " - Size: {$product['size']}";
                  }
                  
                  $item_total = $product['price'] * $product['quantity'];
                  array_push($cart_total, $item_total);
                  $formattedPrice = number_format(array_sum($cart_total), 2); // Formats the total of cart with 2 decimal points
                }
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<h2 style='color: #762EEA;'>Your Total: " . $formattedPrice . "</h2>";
                echo '<a href="../../includes/checkout.inc.php" style="text-decoration: none;"><button>Clear Cart</button></a>';
              } else {
                echo "<h3>You have nothing in your cart! Keep shopping!</h3>";
              }
            ?>
          </div>

          <div class="cart-item">
            <?php
              if (isset($_SESSION["userid"])) {
                echo "<h2>Hello there, {$_SESSION["userusername"]}!</h2>";
                echo !empty($_SESSION['cart_system']) 
                  ? "<h2>Is that all?</h2>" 
                  : "<h2>That can't be all???</h2>";
              } else {
                echo "<h3>Continue as a guest? Proceed to the right!</h3>
                      <br>
                      <h3>If you want to sign in, you can right <a href='login-page.php'>here</a>!</h3>";
              }
            ?>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="checkout-container">
          <div class="checkout-form">
            <h2>Shipping Information</h2>
            <form id="checkout-form" method="post">
              <div class="form-group">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" placeholder="First Name..." required>
              </div>

              <div class="form-group">
                <label for="last-name">Last Name:</label>
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
                  <label for="country">Country:</label>
                  <input type="text" id="country" name="country" placeholder="Country..." required>
                </div>  
              </div>

              <div class="form-group">
                <label for="postal-code">Postal Code:</label>
                <input type="text" id="postal-code" name="postal-code" placeholder="Postal Code..." required>
              </div>

              <div class="form-group">
                <label for="phone-number">Phone Number:</label>
                <input type="tel" id="phone-number" name="phone-number" placeholder="Phone number..." required>
              </div>

              <div class="form-group">
                <label for="is_default">Make this my default shipping address:</label>
                <input type="checkbox" id="is_default" name="is_default">
              </div>

              <button id="checkout-button" type="submit">Continue to Payment Information</button> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stripe JS -->
  <script src="https://js.stripe.com/v3/"></script>
  <script>
    document.getElementById("checkout-form").addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(this);
      formData.set("is_default", document.getElementById("is_default").checked ? 1 : 0);

      fetch("../../includes/submit-shipping.inc.php", {
        method: "POST",
        body: formData
      })
      .then(response => {
        if (!response.ok) throw new Error("Failed to save shipping data.");
        proceedWithStripe();
      })
      .catch(error => console.error(error));
    });

    function proceedWithStripe() {
      const stripe = Stripe("pk_test_51RFgFoKjGiDAzShfmTO2BFFkDSsQ2TSextxdWUzk6XjALcPwWqQ6Ge2BuGA2ZH6IV6gNx58QD4JPcurXHxBowWFR00kYc1bzl7");

      fetch('../../includes/create-checkout-session.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(<?php echo json_encode($_SESSION['cart_system']); ?>)
      })
      .then(response => response.json())
      .then(data => {
        if (data.error) return alert("Error: " + data.error);
        if (data.id) {
          stripe.redirectToCheckout({ sessionId: data.id }).then(result => {
            if (result.error) alert(result.error.message);
          });
        }
      })
      .catch(error => {
        console.error("Stripe fetch failed:", error);
        alert("Could not initiate payment.");
      });
    }
  </script>

</body>
</html>
