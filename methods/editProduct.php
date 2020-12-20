<?php
include('./../config/core.php');

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$url = $_POST['url'];

$res = DB::exec("UPDATE `products` SET name = '{$name}', description = '{$description}', price = '{$price}', url_picture = '{$url}' WHERE id = {$id}");
echo $res ? DB::id() : -1;
