<?php
session_start();


// Includes database handler and functions page
include 'dbh.inc.php';
include 'functions.inc.php';


// Make sure the user is logged in
if (!isset($_SESSION['userid'])) {
    header("Location: login-page.php"); // Redirect to login page if not logged in
    exit();
}


// Get the user ID from the session
$userId = $_SESSION['userid']; 


// Fetch the shipping addresses from the database for the logged-in user
$sql = "SELECT * FROM ShippingInfo WHERE usersID = ?";
$stmt = mysqli_stmt_init($conn);


if (!mysqli_stmt_prepare($stmt, $sql)) {
    die("SQL query failed: " . mysqli_error($conn));
}


mysqli_stmt_bind_param($stmt, "i", $userId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Collect all addresses into an array for use in HTML
$shippingAddresses = [];
while ($row = mysqli_fetch_assoc($result)) {
    $shippingAddresses[] = $row;
}

mysqli_stmt_close($stmt);
?>
