<?php
// Start session to access user data
session_start();


// Displays errors if there are any
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Includes database handler and functions page
include 'dbh.inc.php';
include 'functions.inc.php';


// Gets info from form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $address = $_POST['address'];
    $apartment_number = $_POST['apartment-number'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $postal_code = $_POST['postal-code'];
    $phone_number = $_POST['phone-number'];
    
    // Checks if the user selected the address as default
    $is_default = isset($_POST['is_default']) ? true : false; // If checked, true; else false

    $userId = $_SESSION['userid'] ?? null; // Use null if guest
    
    // If user wants this to be the default shipping address, set is_default to true
    if ($is_default && $userId) {
        // Unset any previous default shipping address
        $sql_default = "UPDATE ShippingInfo SET is_default = FALSE WHERE usersID = ?";
        $stmt_default = mysqli_prepare($conn, $sql_default);
        if ($stmt_default) {
            mysqli_stmt_bind_param($stmt_default, "i", $userId);
            mysqli_stmt_execute($stmt_default);
            mysqli_stmt_close($stmt_default);
        } else {
            echo "Error unsetting previous default address.";
        }
    }
       
    // Checks for empty inputs
    if (emptyInputShipping($first_name, $last_name, $address, $apartment_number, $city, $state, $postal_code, $country, $phone_number)) {
        header("Location: ../pages/top-of-home-page/checkout-page.php?error=emptyinput");
        exit();
    }
    
    // Check if the shipping address already exists
    if (!checkForExistingShippingAddress($conn, $userId, $first_name, $last_name, $address, $apartment_number, $city, $state, $postal_code, $country, $phone_number)) {
        // Address already exists, display a message to the user
        echo "<script>alert('This address already exists in our records.');</script>";
    } else {
        // Address does not exist, proceed with saving the new address
        createShippingAddress($conn, $userId, $first_name, $last_name, $address, $apartment_number, $city, $state, $postal_code, $country, $phone_number, $is_default);
        echo "<script>alert('Your shipping address has been successfully saved.');</script>";
    }

    $origin = $_POST['origin'] ?? null;

    if ($origin === 'checkout') {
        header("Location: ../pages/top-of-home-page/view-shipping-info.php?success=1");
        exit();
    }
}

else{
    header("location: ../pages/top-of-home-page/checkout-page.php?error=formerror");
    exit();
}

?>
