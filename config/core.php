<?php

$username = "u228065_sadie";
$password = "avdeeva98";
$dbname = "b228065_products";
$host = "78.108.80.33";

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

?>
