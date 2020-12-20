<link rel='stylesheet' href='css/card.css'/>
<link rel='stylesheet' href='css/all.css'/>
<script type="application/javascript">
    $(function () {
        let sorting = '1';
        let offset = 0;
        let currentPage = 1;

        getAllProducts(offset, sorting, getPagesCount);

        function getAllProducts(offset, sorting, successCallback) {
            console.log(offset);
            $.ajax({
                url: 'methods/getAllProducts.php',
                method: 'POST',
                data: {sorting, offset}
            }).done((data) => {
                successCallback(data, insertValues);
            });
        }

        function getPagesCount(productsData, successCallback){
            $.ajax({
                url: 'methods/getCountProducts.php',
                method: 'POST',
            }).done((data) => {
                console.log(JSON.parse(data))
                successCallback(productsData, JSON.parse(data)['count']);
            });
        }

        async function insertValues(data, countPages) {
            $('.body').empty();
            let sortingPanel = '<div class="sorting-panel"> <p>Сортировка: </p>' +
                '<select class="sort">' +
                '<option value="1">id по возрастанию</option>' +
                '<option value="2">id по убыванию</option>' +
                '<option value="3">цена по возрастанию</option>' +
                '<option value="4">цена по убыванию</option>' +
                '</select>' +
                '<p class="page-select">Страница</p>' +
                '<select class="page">';
            let page = 1;

            for (let i = 1; i <= countPages; i += 10){
                sortingPanel += '<option value="' + page + '">' + page + '</option>'
                page += 1;
            }
            sortingPanel += '</select></div>';
            $('.body').append(sortingPanel);

            $("select.sort").val(sorting);
            $("select.page").val(currentPage);

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

        $('.body').on('change', 'select.sort', (event) => {
            sorting = $('select').val();
            offset = 0
            currentPage = 1
            getAllProducts(offset, sorting, getPagesCount);
        });

        $('.body').on('change', 'select.page', (event) => {
            let page = $('select.page').val();
            offset = (page - 1) * 10;
            currentPage = page;
            getAllProducts(offset, sorting, getPagesCount);
        });
    })
    ;
</script>

