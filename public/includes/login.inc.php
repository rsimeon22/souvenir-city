<?php

// Gets items from form
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if (file_exists('functions.inc.php')) {
        include 'dbh.inc.php';
        include 'functions.inc.php';
        echo "We see you!!";
    } else {
        echo "File not found";
        die;
    }

    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../pages/top-of-home-page/login-page.php?error=emptyinput");
        exit();  
    }

    loginUser($conn, $username, $password);
}

else{
    header("location: ../pages/top-of-home-page/login-page.php");
    exit();
}