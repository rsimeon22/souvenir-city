<?php

// Requires database handler and function page only once
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

// Checks for a user login
if (!isset($_SESSION)) {
    session_start();
}

$userId = $_SESSION['userid'] ?? null;

// Kills if user isn't logged in
if (!$userId) {
    die("User not logged in.");
}

// Variables for each type of order
$currentOrder = fetchCurrentOrders($conn, $userId);
$pastOrders = fetchPastOrders($conn, $userId);
$pastOrdersReturns = fetchPastOrdersReturns($conn, $userId);
