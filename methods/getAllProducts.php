<?php
include('./../config/mysql.php');

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

$res = DB::fetchAll("SELECT * FROM `products` {$order} LIMIT 1000");
echo json_encode($res);
