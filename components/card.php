<?php
    $id = $_POST['id'] ?? '';
    $mode = $_POST['mode'];
    $nameValue = $_POST['name_value'] ?? '';
    $urlValue = $_POST['url_value'] ?? '';
    $descriptionValue = $_POST['description_value'] ?? '';
    $priceValue = $_POST['price_value'] ?? '';

    include('./../templates/card.php')
?>
