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

    $(".Select2").select2();

    $(document).on('click', 'button[id=btnEkle]', function () {
        $('.modal-body').append('<div class="form-floating mb-3"><input id="categoryName" name="categoryName[]" type="text" class="form-control" required/><label for="categoryName">Kategori İsmi</label></div>')
    });
});
