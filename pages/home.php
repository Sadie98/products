<link rel='stylesheet' href='css/home.css' />
<script type="application/javascript">
    $(function(){
        $('.body').append('<div class="button-container">' +
            '<button class="button button-blue see-products">Посмотреть товары</button> ' +
            '<button class="button button-pink right-button add-product">Добавить товар</button> ' +
            '</div>');

        $('.see-products').click(() => {
            const url = document.location.href.split('?')[0] + "?page=all";
            document.location = url;
        });

        $('.add-product').click(() => {
            const url = document.location.href.split('?')[0] + "?page=add";
            document.location = url;
        });
    });
</script>
