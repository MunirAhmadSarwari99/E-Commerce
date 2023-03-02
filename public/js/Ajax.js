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

    $(document).on('change', 'input[type=checkbox]', function () {
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
                    $('span#AraToplam').text((data.SubTotal).toFixed(2) + ' TL');
                    $('span#kdv').text(data.kdv + ' TL');
                    $('span#Toplam').text((data.total).toFixed(2) + ' TL');
                    $('input#inputToplam').val((data.total).toFixed(2));
                }
            });
        }
    });

    $(document).on('change', 'select[name=CategoryName]', function () {
        var query = $(this).val();
        $.ajax({
            url: "CategoryChild",
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
            url: "CategoryTags",
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
});
