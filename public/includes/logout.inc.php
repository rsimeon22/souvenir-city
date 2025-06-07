<?php

session_start();

// includes database handler and functions page
include "dbh.inc.php";
include "functions.inc.php";


// Delete the token from the database
if (!empty($_COOKIE['remember_token'])) {
    $token = $_COOKIE['remember_token'];
    //$pdo = $conn;
    if (deleteRememberToken($pdo, $token)) {
        echo "Token deleted from database.";
    }
}


// Destroy the session
session_unset();
session_destroy();


// Remove the cookie (set it to expire in the past)
setcookie('remember_token', '', time() - 3600, '/');

// Redirection
header("Location: ../pages/shop-now-redirection.php");
exit();

