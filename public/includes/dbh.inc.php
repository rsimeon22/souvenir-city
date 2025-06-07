<?php


// connects to database
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "souvenir-city-project";


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=souvenir-city-project', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // For better error handling
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
