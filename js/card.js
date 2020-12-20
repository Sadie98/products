$(function () {
    $('.body').on('click', '.delete', (event) => {
        const id = $(event.target).data()['id'];

        $.ajax({
            url: 'methods/deleteProduct.php',
            data: { id },
            method: 'POST'
        }).done(() => {
            location.reload();
        });
    });
});
