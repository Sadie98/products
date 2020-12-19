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
            $('.body').append(data);
        });
    });
</script>

