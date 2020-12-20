<?php
include('./../config/mysql.php');

$id = $_POST['id'];
echo $id;
$res = DB::exec("DELETE FROM `products` WHERE id = {$id}");
echo $res ? DB::id() : -1;
