<?php

session_start();


// Gets items from form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];
    $size = $_POST["size"];
}
    //include 'dbh.inc.php';
    
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
    

    // Redirect to the checkout page
    echo json_encode([
        'success' => true,
        'name' => $product_name
    ]);
    
    header('Location: ../pages/top-of-home-page/checkout-page.php');
    exit;