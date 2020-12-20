<link rel='stylesheet' href='css/commonTemplate.css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/card.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="common-container">
    <div class="header">
        <p> Система просмотра списка товаров </p>
        <div class="buttons">
            <button class="button button-blue button-thin to-all"> Все товары </button>
            <button class="button button-pink button-thin to-add"> Добавить товар </button>
        </div>
    </div>
    <div class="body">
        <?php echo $body; ?>
    </div>
</div>
<script type="application/javascript">
    $(function () {
        $('.to-all').click(() => {
            const url = document.location.href.split('?')[0] + "?page=all";
            document.location = url;
        })

        $('.to-add').click(() => {
            const url = document.location.href.split('?')[0] + "?page=add";
            document.location = url;
        })
    });
</script>
