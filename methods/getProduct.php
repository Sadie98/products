<?php
include('./../config/core.php');

$id = $_POST['id'];

$res = DB::fetch("SELECT * FROM `products` WHERE `id` = '{$id}'");
echo json_encode($res);
