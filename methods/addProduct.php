<?php
include('./../config/core.php');

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$url = $_POST['url'];

$res = DB::run("INSERT INTO `products` (name, description, price, url_picture) VALUES ('{$name}', '{$description}', {$price}, '{$url}' )");
return $res;
