<?php

// Gets items from form

if (isset($_POST['delete_address'])) {
    require_once 'dbh.inc.php';  // Database connection (Requires only once)

    // Get the address ID
    $addressId = $_POST['address_id'];

    // Delete the address from the database
    $sql = "DELETE FROM ShippingInfo WHERE shippingid = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $addressId);

    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../pages/top-of-home-page/view-shipping-info.php');
    } else {
        echo "Error deleting address: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
