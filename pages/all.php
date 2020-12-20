<link rel='stylesheet' href='css/card.css'/>
<link rel='stylesheet' href='css/all.css'/>
<script type="application/javascript">
    $(function () {
        let sorting = '1';
        getAllProducts(sorting, insertValues);

        function getAllProducts(sorting, successCallback) {
            $.ajax({
                url: 'methods/getAllProducts.php',
                method: 'POST',
                data: {sorting}
            }).done((data) => {
                successCallback(data);
            });
        }

        async function insertValues(data) {
            $('.body').empty();
            const sortingPanel = '<div class="sorting-panel"> <p>Сортировка: </p>' +
                '<select>' +
                '<option value="1">id по возрастанию</option>' +
                '<option value="2">id по убыванию</option>' +
                '<option value="3">цена по возрастанию</option>' +
                '<option value="4">цена по убыванию</option>' +
                '</select>' +
                '</div>';
            $('.body').append(sortingPanel);
            $("select").val(sorting);

            const dataValues = JSON.parse(data);
            $.ajax({
                url: 'components/cards.php',
                data: {products: dataValues},
                method: 'post'
            }).then((dataResult) => {
                $('.body').append(dataResult)
            });
        }

        $('.body').on('click', '.edit', (event) => {
            const id = $(event.target).data()['id'];

            const url = document.location.href.split('?')[0] + "?page=edit&id=" + id;
            document.location = url;
        });

        $('.body').on('change', 'select', (event) => {
            sorting = $('select').val();
            getAllProducts(sorting, insertValues);
        });
    })
    ;
</script>

