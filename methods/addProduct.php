<?php
include('./../config/mysql.php');
include('./../config/redis.php');

$name = addslashes($_POST['name']);
$description = addslashes($_POST['description']);
$price = (int)$_POST['price'];
$url = addslashes($_POST['url']);

R::set('products', '');

$res = DB::exec("INSERT INTO `products` (name, description, price, url_picture) VALUES ('{$name}', '{$description}', {$price}, '{$url}' )");
echo $res ? DB::id() : -1;
