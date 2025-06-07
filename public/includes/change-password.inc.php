<?php

session_start();


// includes database handler and functions page

include 'dbh.inc.php';
include 'functions.inc.php';


// Gets items from form

if (isset($_POST["submit"])) {
    $passwordOld = $_POST["old-password"];
    $passwordNew = $_POST["new-password"];
    $passwordRepeat = $_POST["password-repeat"];


    $userId = $_SESSION["userid"];

    if (oldPasswordMatch($conn, $userId, $passwordOld)) {
        header("location: ../pages/top-of-home-page/change-password.php?error=incorrectoriginalpassword");
        exit();
    }

    if (emptyPasswordReset($passwordOld, $passwordNew, $passwordRepeat) !== false) {
        header("location: ../pages/top-of-home-page/change-password.php?error=emptyinput");
        exit();  
    }

    if (passwordMatch($passwordNew, $passwordRepeat) !== false) {
        header("location: ../pages/top-of-home-page/change-password.php?error=passwordsdontmatch");
        exit();  
    }

    if (passwordSame($passwordOld, $passwordNew) == true) {
        header("location: ../pages/top-of-home-page/change-password.php?error=passwordnochange");
        exit();  
    }

    if (invalidPassword($passwordNew) !== false) {
        header("location: ../pages/top-of-home-page/change-password.php?error=passwordtooshort");
        exit();
    }

    // Update password
    createNewPassword($conn, $userId, $passwordNew);
    header("location: ../pages/shop-now-redirection.php?success=passwordchanged");
    exit();
        
}