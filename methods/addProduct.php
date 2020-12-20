<?php
include('./../config/mysql.php');

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$url = $_POST['url'];

$res = DB::exec("INSERT INTO `products` (name, description, price, url_picture) VALUES ('{$name}', '{$description}', {$price}, '{$url}' )");
echo $res ? DB::id() : -1;
