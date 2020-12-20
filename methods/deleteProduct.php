<?php
include('./../config/mysql.php');
include('./../config/redis.php');

$id = (int)$_POST['id'];

R::flushAll();

$res = DB::exec("DELETE FROM `products` WHERE id = {$id}");
echo $res ? DB::id() : -1;
