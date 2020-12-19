<?php
include('./../config/core.php');

$id = $_POST['id'];

$res = DB::fetchAll("SELECT * FROM `products` LIMIT 1000");
echo json_encode($res);
