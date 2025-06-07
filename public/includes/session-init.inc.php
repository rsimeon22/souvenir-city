<?php

// Gets database connection
include 'dbh.inc.php';

session_start();

// Check if the user is logged in via session
if (isset($_SESSION['userid'])) {
    $userId = $_SESSION['userid'];
}

elseif (isset($_COOKIE['remember_token'])) {
    // Check if the remember_token cookie exists
    $token = $_COOKIE['remember_token'];
    $tokenHash = hash('sha256', $token); // Hash the token to match the stored token hash in DB

    // Prepare the query to check if the token exists and is still valid
    $stmt = $pdo->prepare("SELECT user_id FROM remember_tokens WHERE token_hash = ? AND expires_at > NOW()");
    $stmt->execute([$tokenHash]);
    $user = $stmt->fetch();

    if ($user) {
        // If the token is valid, restore the session
        $_SESSION['userid'] = $user['user_id']; // Set user_id to session
        // Fetch more user info (e.g., username, email) if needed
        $stmt = $pdo->prepare("SELECT * FROM users WHERE usersID = ?");
        $stmt->execute([$user['user_id']]);
        $userInfo = $stmt->fetch();

        // Store user info in session
        $_SESSION['userusername'] = $userInfo['usersUsername'];
        $_SESSION['userfirstname'] = $userInfo['usersfirstName'];
        $_SESSION['userlastname'] = $userInfo['userslastName'];
        $_SESSION['useremail'] = $userInfo['usersEmail'];

    } else {
        // Token is invalid or expired, clear the cookie
        setcookie('remember_token', '', time() - 3600, '/'); // Expire the cookie
    }
} else {
    // No session and no remember_token cookie, user is not logged in
    header("Location: ../pages/shop-now-redirection.php?session=nologin");
}
