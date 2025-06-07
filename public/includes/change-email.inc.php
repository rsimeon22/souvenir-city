<?php

session_start();


// includes database handler and functions page
include 'dbh.inc.php';
include 'functions.inc.php';


// Gets items from form
if (isset($_POST["submit"])) {
    $emailOld = $_POST["old-e-mail"];
    $emailNew = $_POST["new-e-mail"];


    $userId = $_SESSION["userid"];

    if (invalidEmail($emailOld) !== false) {
        header("location: ../pages/top-of-home-page/change-email.php?error=invalidemail");
        exit();  
    }

    if (invalidEmail($emailNew) !== false) {
        header("location: ../pages/top-of-home-page/change-email.php?error=invalidemail");
        exit();  
    }

    if (emailMatch($emailOld, $emailNew) == true) {
        header("location: ../pages/top-of-home-page/change-email.php?error=duplicateinput");
        exit();  
    }

    
    createNewEmail($conn, $userId, $emailNew);
    header("location: ../pages/shop-now-redirection.php?success=emailchanged");
    exit();
}