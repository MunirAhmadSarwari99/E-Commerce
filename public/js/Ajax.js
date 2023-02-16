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

    $(document).on('change', 'select[id=CategoryName]', function () {
        const query = $(this).val();
        $.ajax({
            url: "GetSellerChildCategory",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                'data' : query,
            },
            success: function (data) {
                $('#child').html(data);
            }
        });
    });

    $(document).on('change', 'select[id=child]', function () {
        const query = $(this).val();
        $.ajax({
            url: "GetSellerChildToCategory",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                'data' : query,
            },
            success: function (data) {
                $('#childTo').html(data);
            }
        });
    });
});
