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
                console.log(dataValues)
                $.ajax({
                    url: 'components/card.php',
                    data: {
                        mode: 'view',
                        name_value: dataValues['name'],
                        url_value: dataValues['url_picture'],
                        description_value: dataValues['description'],
                        price_value: dataValues['price'],
                    }
                }).done(function(data) {
                    $('.body').append(data)
                });
            }
            console.log()
        });
    });
</script>

