$(document).ready(function(){
    $(document).on('click', 'button[name=BtnAddToCart]', function () {
        Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Önce Giriş Yapın...!',
            showConfirmButton: true,
        });
    });

    $(document).on('click', 'a[data-target=BtnWishlist]', function () {
        Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Önce Giriş Yapın...!',
            showConfirmButton: true,
        });
    });
});
