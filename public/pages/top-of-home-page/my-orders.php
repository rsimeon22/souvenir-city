<?php
include '../../includes/session-init.inc.php';

require_once '../../includes/dbh.inc.php';
require_once '../../includes/get-orders.inc.php';

$userId = $_SESSION['userid'] ?? null;

if (!$userId) {
  echo "Please log in to see your orders.";
  exit;
}

if (!isset($_SESSION['forward_order_summary'])) {
    $currentOrder = null;
} else {
    $currentOrder = $_SESSION['forward_order_summary'];
}

// Fetch all orders for this user
$currentOrders = fetchCurrentOrders($conn, $userId);
$pastOrders = fetchPastOrders($conn, $userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="icon" type="image/x-icon" href="icons/favicon.png">
    <link rel="stylesheet" href="css/top-of-home-styles.css">
    <script src="../../../../assets/js/search.js"></script>
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

<div class="order-confirmation">
  <?php if (!empty($currentOrders)): ?>
        <div class="order-item">
            <h1>Current Orders</h1>
            <?php foreach ($currentOrders as $order): ?>
                <h3>Order #<?= $order['order_id'] ?> - $<?= number_format($order['total_amount'], 2) ?></h3>
                <h4>
                    <?php foreach ($order['items'] as $item): ?>
                        <li><?= htmlspecialchars($item['product_name']) ?> x <?= $item['quantity'] ?> @ $<?= number_format($item['unit_price'], 2) ?></li>
                    <?php endforeach; ?>
                </h4>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
    <div class="order-item">
        <h2>Current Orders</h2>

        <p>No current orders.</p>
    <?php endif; ?>
    </div>
</div>

<hr>

<div class="order-confirmation">
    <?php if (!empty($pastOrders)): ?>
        <div class="order-item">
            <h1>Past Orders</h1>
            <?php foreach ($pastOrders as $order): ?>
                <h3>Order #<?= $order['order_id'] ?> - $<?= number_format($order['total_amount'], 2) ?></h3>
                <h4>
                    <?php foreach ($order['items'] as $item): ?>
                        <li><?= htmlspecialchars($item['product_name']) ?> x <?= $item['quantity'] ?> @ $<?= number_format($item['unit_price'], 2) ?></li>
                        
                    <?php endforeach; ?>
                </h4>
            <?php endforeach; ?>    
        </div>
        
        <?php else: ?> 
        <div class="order-item">
            <h2>Past Orders</h2>
            
            <p>No past orders yet.</p>
        <?php endif; ?>
        </div>
    </div>
    

</body>
</html>
