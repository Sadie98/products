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
                console.log(dataValues)
                dataValues.map((dataValue) => {
                    $.ajax({
                        url: 'components/card.php',
                        data: {
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

    // $('.body').on('click', '.edit', () => {
    //     const id = urlParams.get('id');
    //
    //     const url = document.location.href.split('?')[0] + "?page=edit&id=" + id;
    //     document.location = url;
    // });
    })
    ;
</script>

