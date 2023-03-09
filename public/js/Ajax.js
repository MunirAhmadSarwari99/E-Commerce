$(document).ready(function(){
    $(document).on('change', 'select[name=quantity]', function () {
        var query = $(this).data('role');
        var query2 = $(this).data('id');

        $('td#Total'+query2).text((query * $(this).val()).toFixed(2));

        $.ajax({
            url: "QuantityUpdate",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                id:query2,
                quantity: $(this).val(),
            },
            success: function (data) {
                $.ajax({
                    url: "QuantityCart",
                    type: 'GET',
                    success: function (data) {
                        $('span#AraToplam').text((data.SubTotal).toFixed(2) + ' TL');
                        $('span#kdv').text(data.kdv + ' TL');
                        $('span#Toplam').text((data.total).toFixed(2) + ' TL');
                        $('input#inputToplam').val((data.total).toFixed(2));
                    }
                });
            }
        });
    });

    $(document).on('click', 'input[type=checkbox]', function () {
        var query = $(this).val();
        if(this.checked) {
            $.ajax({
                url: "IncrementCart",
                type: 'GET',
                data: {
                    _token:'{{ csrf_token() }}',
                    id:query,
                },
                success: function (data) {
                    $('span#AraToplam').text((data.SubTotal).toFixed(2) + ' TL');
                    $('span#kdv').text(data.kdv + ' TL');
                    $('span#Toplam').text((data.total).toFixed(2) + ' TL');
                    $('input#inputToplam').val((data.total).toFixed(2));
                }
            });
        } else {
            $.ajax({
                url: "DecrementCart",
                type: 'GET',
                data: {
                    _token:'{{ csrf_token() }}',
                    id:query,
                },
                success: function (data) {
                    if (data.SubTotal == 0){
                        $('span#AraToplam').text(0 + ' TL');
                    }else {
                        $('span#AraToplam').text((data.SubTotal).toFixed(2) + ' TL');
                    }
                    if (data.kdv == 0){
                        $('span#kdv').text(0 + ' TL');
                    }else {
                        $('span#kdv').text(data.kdv + ' TL');
                    }
                    if (data.total == 0){
                        $('span#Toplam').text(0 + ' TL');
                        $('input#inputToplam').val(0);
                    }else {
                        $('span#Toplam').text((data.total).toFixed(2) + ' TL');
                        $('input#inputToplam').val((data.total).toFixed(2));
                    }
                }
            });
        }
    });

    $(document).on('change', 'select[name=CategoryName]', function () {
        var query = $(this).val();
        $.ajax({
            url: "/CategoryChild",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                id:query,
            },
            success: function (data) {
                $('select[name=childName]').removeAttr('disabled');
                $('select[name=childName]').html(data);
            }
        });
    });

    $(document).on('change', 'select[name=childName]', function () {
        var query = $(this).val();
        $.ajax({
            url: "/CategoryTags",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                id:query,
            },
            success: function (data) {
                $('select[name=tagName]').removeAttr('disabled');
                $('select[name=tagName]').html(data);
            }
        });
    });

    $(document).on('click', 'button[name=AddToCart]', function () {
        var query = $(this).val();
        $.ajax({
            url: "/AddToCart",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                id:query,
            },
            success: function (data) {
                location.reload();
            }
        });
    });

    $(document).on('click', 'button[name=DeleteCart]', function () {
        var query = $(this).val();
        $.ajax({
            url: "DeleteCart",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                id:query,
            },
            success: function (data) {
                location.reload();
            }
        });
    });

    $(document).on('click', 'a[data-target=wishlist]', function () {
        var query = $(this).data('role');
        $.ajax({
            url: "/Favori",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                id:query,
            },
            success: function (data) {
                location.reload();
            }
        });
    });

    $(document).on('click', 'button[data-target=wishlist]', function () {
        var query = $(this).data('role');
        $.ajax({
            url: "/Favori",
            type: 'GET',
            data: {
                _token:'{{ csrf_token() }}',
                id:query,
            },
            success: function (data) {
                location.reload();
            }
        });
    });
});
