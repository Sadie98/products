<?php
include('./../config/mysql.php');

$id = $_POST['id'];

$res = DB::fetch("SELECT * FROM `products` WHERE `id` = '{$id}'");
echo json_encode($res);
