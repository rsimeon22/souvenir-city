<?php

// Start session to access user data
include 'session-init.inc.php';


// Displays errors if there are any
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Includes database handler and functions page
include 'dbh.inc.php';
include 'functions.inc.php';


// Gets data from form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $reason = $_POST['reason'];
    
    // Separates product name, product price, and order id into separate variables
    list($product_name, $product_price, $order_id) = explode('|', $_POST['dropdown']);

    $dropdown = $_POST['dropdown'];;

    $userId = $_SESSION['userid'] ?? null; // Use null if guest

    if (emptyReturnsForm($dropdown)) {
        header("Location: ../pages/top-of-home-page/returns.php?failure=2");
        exit();
    }

    // Check if the request for the returned item already exists
    if (!checkForExistingReturn($conn, $order_id, $product_name, $product_price)) {
        // Return request already exists, display a message to the user
        header("Location: ../pages/top-of-home-page/returns.php?wak=3");
    } else {
        // Return request does not exist, proceed with saving the new return request
        $status = 'Pending';
        createReturnRequest($conn, $order_id, $product_name, $product_price, $reason, $status);
        header("location: ../pages/top-of-home-page/returns.php?success=1");
        exit();
    }
}
    
else{
    header("location: ../pages/top-of-home-page/returns.php?error=formerror");
    exit();
}

