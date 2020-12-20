<?php
include('./../config/mysql.php');
include('./../config/redis.php');

$res = DB::fetch("SELECT COUNT(*) as `count` FROM `products`");

echo json_encode($res);
