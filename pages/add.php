<link rel='stylesheet' href='css/add.css' />
<link rel='stylesheet' href='css/card.css' />
<script type="application/javascript">
    $(function(){
        $.ajax({
            url: 'components/card.php',
            data: {
                mode: 'edit'
            }
        }).done(function(data) {
            $('.body').append(data)
        });

        $('.body').on('click', '.save', () => {
            const name = $('.edit-name-value').val();
            const url = $('.edit-url-value').val();
            const description = $('.edit-description-value').val();
            const price = $('.edit-price-value').val();

            $.ajax({
                url: 'methods/addProduct.php',
                data: {
                    name,
                    description,
                    price,
                    url,
                },
                method: 'POST',
            }).done(function(id) {
                if (id !== '-1') {
                    const url = document.location.href.split('?')[0] + "?page=one&id=" + id;
                    document.location = url;
                }
            });
        });
    });
</script>

