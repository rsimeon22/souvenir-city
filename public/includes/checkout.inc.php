<?php

session_start();


// empties cart and redirects you to the cart page

unset($_SESSION['cart_system']);
header("location: ../pages/top-of-home-page/checkout-page.php");

exit();


