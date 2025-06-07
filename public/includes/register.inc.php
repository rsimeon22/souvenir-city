<?php

if (isset($_POST["submit"])) {
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["password-repeat"];
    $PIN = $_POST["PIN"];

    // Checks if functions.inc.php exists
    if (file_exists('functions.inc.php')) {
        // Includes database handler and functions page
        include 'dbh.inc.php';
        include 'functions.inc.php';
        echo "We see you!!";
    } else {
        echo "File not found";
        die;
    }


    if (emptyInputSignup($firstName, $lastName, $email, $username, $password, $passwordRepeat) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=emptyinput");
        exit();  
    }
    
    if (invalidfirstName($firstName) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=invalidfirstname");
        exit();  
    }

    if (invalidlastName($lastName) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=invalidlastname");
        exit();  
    }

    if (invalidUsername($username) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=invalidusername");
        exit();  
    }

    if (invalidEmail($email) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=invalidemail");
        exit();  
    }

    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=passwordsdontmatch");
        exit();  
    }

    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=usernametaken");
        exit();  
    }

    if (invalidPassword($password) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=passwordtooshort");
        exit();
    }

    if (invalidPIN($PIN) !== false) {
        header("location: ../pages/top-of-home-page/register-home.php?error=incorrectpin");
        exit();
    }

    createUser($conn, $firstName, $lastName, $email, $username, $password, $PIN);
    header ("location: ../pages/shop-now-redirection.php");

} 

else {
    header("location: ../pages/top-of-home-page/register-home.php");
    exit();  
}