<?php
include('./../config/mysql.php');
include('./../config/redis.php');

$sorting = (int)$_POST['sorting'];
$offset = (int)$_POST['offset'];

$order = "";
switch($sorting){
    case 1:
        $order = 'ORDER BY `id` ASC';
        break;
    case 2:
        $order = 'ORDER BY `id` DESC';
        break;
    case 3:
        $order = 'ORDER BY `price` ASC';
        break;
    case 4:
        $order = 'ORDER BY `price` DESC';
        break;
}
$res = json_decode(R::get('products-'.$order.'-'.$offset));
$res = [];
if (!$res) {
    $res = DB::fetchAll("SELECT * FROM `products` {$order} LIMIT 10 OFFSET {$offset}");
    R::set('products-'.$order.'-'.$offset, json_encode($res));
}

echo json_encode($res);
