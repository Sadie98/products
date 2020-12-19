<link rel='stylesheet' href='css/add.css' />
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
                        mode: 'edit',
                        name_value: dataValues['name'],
                        url_value: dataValues['url_picture'],
                        description_value: dataValues['description'],
                        price_value: dataValues['price'],
                    },
                    method: 'POST'
                }).done(function(data) {
                    $('.body').append(data)
                });
            }
        });


        $('.body').on('click', '.save', () => {
            const id = urlParams.get('id');
            const name = $('.edit-name-value').val();
            const url = $('.edit-url-value').val();
            const description = $('.edit-description-value').val();
            const price = $('.edit-price-value').val();

            $.ajax({
                url: 'methods/editProduct.php',
                data: {
                    id,
                    name,
                    description,
                    price,
                    url,
                },
                method: 'POST',
            }).done(function(res) {
                if (res === '0') {
                    const url = document.location.href.split('?')[0] + "?page=one&id=" + id;
                    document.location = url;
                }
            });
        });
    });
</script>

