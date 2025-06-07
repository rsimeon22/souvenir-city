<?php

session_start();


// Includes database handler and functions page

include 'dbh.inc.php';
include 'functions.inc.php';


// Gets items from form

if (isset($_POST["submit"])) {
    $PINOld = $_POST["old-pin"];
    $PINNew = $_POST["new-pin"];


    $userId = $_SESSION["userid"];

    if (invalidPIN1($PINOld) !== false) {
        header("location: ../pages/top-of-home-page/change-pin.php?error=invalidPIN");
        exit();  
    }

    if (invalidPIN2($PINNew) !== false) {
        header("location: ../pages/top-of-home-page/change-pin.php?error=invalidPIN");
        exit();  
    }

    if (PINMatch($PINOld, $PINNew) == true) {
        header("location: ../pages/top-of-home-page/change-pin.php?error=duplicateinput");
        exit();  
    }

    
    createNewPIN($conn, $userId, $PINNew);
    header("location: ../pages/shop-now-redirection.php?success=pinchanged");
    exit();
}