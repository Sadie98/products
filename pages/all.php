<link rel='stylesheet' href='css/add.css'/>
<link rel='stylesheet' href='css/card.css'/>
<script type="application/javascript">
    $(function () {
        $.ajax({
            url: 'methods/getAllProducts.php',
            method: 'POST',
        }).done( (data) => {
            if (data) {
                const dataValues = JSON.parse(data);
                dataValues.map((dataValue) => {
                    $.ajax({
                        url: 'components/card.php',
                        data: {
                            id: dataValue['id'],
                            mode: 'view',
                            name_value: dataValue['name'],
                            url_value: dataValue['url_picture'],
                            description_value: dataValue['description'],
                            price_value: dataValue['price'],
                        },
                        method: 'post'
                    }).done((data) => {
                        $('.body').append(data)
                    });
                });
            }
        });

    $('.body').on('click', '.edit', (event) => {
        const id = $(event.target).data()['id'];

        const url = document.location.href.split('?')[0] + "?page=edit&id=" + id;
        document.location = url;
    });
    })
    ;
</script>

