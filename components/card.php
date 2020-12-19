<?php
    $mode = $_POST['mode'];
    $nameValue = $_POST['name_value'] ?? '';
    $urlValue = $_POST['url_value'] ?? '';
//    $urlValue = 'https://images.wbstatic.net/big/new/6210000/6212924-1.jpg';
    $descriptionValue = $_POST['description_value'] ?? '';
    $priceValue = $_POST['price_value'] ?? '';
?>
<div class="card-and-button">
    <div class="card">
        <div class="image">
            <img src="<?php echo $urlValue ?>">
        </div>
        <div class="info">
            <div class="name">
                <p>Название: </p>
                <?php if ($mode == 'edit') echo "
                    <input class='edit-name-value' value='{$nameValue}'>
                "; else echo "
                    <p class=\"name-value\">{$nameValue}</p>
                "?>
            </div>
            <div class="url">
                <p>URL картинки: </p>
                <?php if ($mode == 'edit') echo "
                    <input class='edit-url-value' value='{$urlValue}'>
                "; else echo "
                    <p class=\"url-value\">{$urlValue}</p>
                "?>
            </div>
            <div class="Описание">
                <p>Описание: </p>
                <?php if ($mode == 'edit') echo "
                    <textarea class='edit-description-value'>{$descriptionValue}</textarea>
                "; else echo "
                    <p class=\"description-value\">{$descriptionValue}</p>
                "?>
            </div>
            <div class="name">
                <p>Цена, рубли: </p>
                <?php if ($mode == 'edit') echo "
                    <input type='number' class='edit-price-value' value='{$priceValue}'>
                "; else echo "
                    <p class=\"name-price\">{$priceValue}</p>
                "?>
            </div>
        </div>
    </div>
    <? if ($mode == 'edit' || $mode == 'add') echo '
        <button class="button button-blue save">Сохранить</button>
    '; else if ($mode == 'view') echo '
        <button class="button button-pink edit">Изменить</button>
    '?>
</div>
