<?php

// Checks for session
if (!isset($_SESSION)) {
    session_start();
}


// Requires database handler and function page only once
require_once 'dbh.inc.php';
require_once 'functions.inc.php';


// Checks for order and session id
if (!isset($_SESSION['order_summary']) || !isset($_GET['session_id'])) {
    return;
}

$order = $_SESSION['order_summary'];
$session_id = $_GET['session_id'];
$userId = $_SESSION['userid'] ?? null;



if (isset($_SESSION['userid'])){
    $order_id = saveOrderToDatabase($conn, $_SESSION['userid'], $_SESSION['order_summary']);

    // Save the order items
    if (!empty($_SESSION['cart_system'])) {
        saveOrderItems($conn, $order_id, $_SESSION['cart_system']);
    }

    $_SESSION['latest_order_id'] = $order_id;

    $_SESSION['forward_order_summary'] = $order;  // Save it for success page
    }
    
else {
    
}


unset($_SESSION['order_summary']);
unset($_SESSION['cart_system']);

