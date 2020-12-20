<?php
include('./../config/mysql.php');
include('./../config/redis.php');

$sorting = $_POST['sorting'];
$order = "";
switch($sorting){
    case '1':
        $order = 'ORDER BY `id` ASC';
        break;
    case '2':
        $order = 'ORDER BY `id` DESC';
        break;
    case '3':
        $order = 'ORDER BY `price` ASC';
        break;
    case '4':
        $order = 'ORDER BY `price` DESC';
        break;
}
$sorting = R::get('sorting');
$res = json_decode(R::get('products'));
if (!$res || $order != $sorting) {
    $res = DB::fetchAll("SELECT * FROM `products` {$order} LIMIT 1000");
    R::set('products', json_encode($res));
    R::set('sorting', $order);
}

echo json_encode($res);
