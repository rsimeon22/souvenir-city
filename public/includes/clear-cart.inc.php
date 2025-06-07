<?php

session_start();


// Empties cart 

unset($_SESSION['cart_system']);
header("location: ../pages/top-of-home-page/cart-page.php");

exit();


