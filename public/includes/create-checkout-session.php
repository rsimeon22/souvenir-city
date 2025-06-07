<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");


// Requires only once (Reload won't bring back)
require_once __DIR__ . '/../vendor/autoload.php';


// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


error_log("Stripe Key: " . $_ENV['CONF_KEY']);


$stripeSecretKey = $_ENV['CONF_KEY'] ?? null;


if (!$stripeSecretKey) {
    http_response_code(500);
    echo json_encode(['error' => 'Stripe secret key missing']);
    exit;
}

$stripe = new \Stripe\StripeClient($stripeSecretKey);

$YOUR_DOMAIN = 'http://localhost';

// Make sure cart data is passed correctly
$cartData = json_decode(file_get_contents('php://input'), true);

// (Debug) Check if cart data is received
if (empty($cartData)) {
    http_response_code(400);
    echo json_encode(['error' => 'Cart data required']);
    exit;
}

$line_items = [];
$total_amount = 0;

// Loop through cart data to build line items for Stripe
foreach ($cartData as $product) {
    $line_items[] = [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $product['name'],
            ],
            'unit_amount' => $product['price'] * 100, // in cents
        ],
        'quantity' => $product['quantity'],
    ];
}

$_SESSION['order_summary'] = [
    'items' => $line_items, 
    'total_amount' => array_reduce($line_items, function ($carry, $item) {
        return $carry + ($item['price_data']['unit_amount'] * $item['quantity']);
    }, 0) / 100 // Convert cents to dollars
];

try {
    $checkout_session = $stripe->checkout->sessions->create([
        'payment_method_types' => ['card'],
        'line_items' => $line_items,
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/pages/top-of-home-page/success.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => $YOUR_DOMAIN . '/pages/top-of-home-page/checkout-page.php?error=checkoutfail',
    ]);

    http_response_code(200);
    echo json_encode(['id' => $checkout_session->id]);

} catch (\Stripe\Exception\ApiErrorException $e) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Stripe error: ' . $e->getMessage(),
        'error_details' => $e->getError()->message  // Detailed error message from Stripe
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'General error: ' . $e->getMessage()]);
}

?>
