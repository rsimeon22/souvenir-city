<?php

session_start();


// Gets items from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];
    $size = isset($_POST["size"]) ? trim($_POST["size"]) : "";


    // Ensure cart session exists
    if (!isset($_SESSION['cart_system'])) {
        $_SESSION['cart_system'] = [];
        echo "we see the session";
    }
    else{
        echo "we don't see shit";
    }
    
    if (isset($_SESSION['cart_system'][$product_id])) {
        $_SESSION['cart_system'][$product_id]['quantity'] += $quantity;
    } 
    else {
        // Add new product to the cart
        $_SESSION['cart_system'][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => $quantity,
            'size' => $size
        ];
    }
    
    // Verify success and redirect back to the cart page
    echo json_encode([
        'success' => true,
        'name' => $product_name
    ]);
    
    header('Location: ../pages/top-of-home-page/cart-page.php');
    exit;
}
