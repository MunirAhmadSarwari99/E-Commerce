$(document).ready(function(){
    $("#image-view").click(function () {
        $('#image').trigger('click');
    });

    $('#image').change(function () {
        var forminput = document.getElementById('image');
        var fr = new FileReader();
        fr.readAsDataURL(forminput.files[0]);
        fr.onloadend = function (e) {
            var bin = e.target.result;
            var img = document.getElementById('image-view');
            img.src = bin;
        }
    });

    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img class="col-md-3 mt-3 img-thumbnail">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#images').on('change', function() {
        imagesPreview(this, 'div#preview');
    });

    $("#image-view").click(function () {
        $('#images').trigger('click');
    });

    $('#imagesColor').on('change', function() {
        imagesPreview(this, 'div#colorPreview');
    });

    $("#image-colorView").click(function () {
        $('#imagesColor').trigger('click');
    });

    $(".Select2").select2();

    $(document).on('click', 'button[id=btnEkle]', function () {
        $('.modal-body').append('<div class="form-floating mb-3"><input id="categoryName" name="categoryName[]" type="text" class="form-control" required/><label for="categoryName">Kategori İsmi</label></div>')
    });
});
