<?php

$products = $_POST['products'];

foreach ($products as $product) {
    $id = $product['id'] ?? '';
    $mode = 'view';
    $nameValue = $product['name'] ?? '';
    $urlValue = $product['url_picture'] ?? '';
    $descriptionValue = $product['description'] ?? '';
    $priceValue = $product['price'] ?? '';

    include './../templates/card.php';
}
