$(document).ready(function(){

    $(document).on('change', 'select[id=mainCategoryName]', function () {
        const query = $(this).val();
        $.ajax({
            url: "GetCategoryChild",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                'data' : query,
            },
            success: function (data) {
                $('#childName').html(data);
            }
        });
    });

});
