<link rel='stylesheet' href='css/card.css' />
<script type="application/javascript">
    $(function(){
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        $.ajax({
            url: 'methods/getProduct.php',
            data: {
                id: urlParams.get('id')
            },
            method: 'POST',
        }).done(function(data) {
            if (data) {
                const dataValues = JSON.parse(data);
                $.ajax({
                    url: 'components/card.php',
                    data: {
                        mode: 'view',
                        name_value: dataValues['name'],
                        url_value: dataValues['url_picture'],
                        description_value: dataValues['description'],
                        price_value: dataValues['price'],
                    },
                    method: 'post'
                }).done(function(data) {
                    $('.body').append(data)
                });
            }
        });

        $('.body').on('click', '.edit', () => {
            const id = urlParams.get('id');

            const url = document.location.href.split('?')[0] + "?page=edit&id=" + id;
            document.location = url;
        });
    });
</script>

