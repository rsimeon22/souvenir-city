<?php

// includes database handler and functions page
include 'dbh.inc.php';
include 'functions.inc.php';


// Gets items from form
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $PIN = $_POST["PIN"];

    if (emptyInputUsernamePIN($username, $PIN) !== false) {
        header("location: ../pages/top-of-home-page/forgot-password.php?error=emptyinput");
        exit();  
    }

    loginViaPIN($conn, $username, $PIN);
}

else{
    header("location: ../pages/top-of-home-page/login-page.html");
    exit();
}