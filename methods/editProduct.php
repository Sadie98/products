<?php
include('./../config/mysql.php');
include('./../config/redis.php');

$id = addslashes($_POST['id']);
$name = addslashes($_POST['name']);
$description = addslashes($_POST['description']);
$price = (int)$_POST['price'];
$url = addslashes($_POST['url']);

R::set('products', '');

$res = DB::exec("UPDATE `products` SET name = '{$name}', description = '{$description}', price = '{$price}', url_picture = '{$url}' WHERE id = {$id}");
echo $res ? DB::id() : -1;
