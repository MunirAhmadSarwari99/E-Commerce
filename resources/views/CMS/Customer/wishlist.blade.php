<x-guest-layout>
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Favorilerim</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="ec-breadcrumb-item active">Favorilerim</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                    <div class="ec-cart-leftside col-lg-12 col-md-12 ">
                        <!-- cart content Start -->
                        <div class="ec-cart-content">
                            <div class="ec-cart-inner">
                                <form id="Order" method="POST" action="{{ route('Order.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="table-content cart-table-content">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <th>Ürün</th>
                                                        <th>Fiyat</th>
                                                        <th  colspan="2" style="text-align: right;">Aksiyon</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($wishlist as $key)
                                                        <tr>
                                                            <td data-label="Ürün" class="ec-cart-pro-name">
                                                                <a href="product-left-sidebar.html">
                                                                    <img class="ec-cart-pro-img mr-4" src="{{ asset('images/Products/' . $key->product->GetOneImage($key->product_id)) }}" alt="Product">
                                                                    {{ $key->product->productName }}
                                                                </a>
                                                            </td>
                                                            <td data-label="Fiyat" class="ec-cart-pro-price" colspan="2">
                                                                <span class="amount">{{ $key->product->price }} TL</span>
                                                            </td>
                                                            <td data-label="Aksiyon" class="ec-cart-pro-remove" colspan="2">
                                                                <button type="button" name="AddToCart" value="{{ $key->product_id }}" class="btn btn-primary">Sepete Ekle</button>
                                                                <button type="button" data-target="wishlist" data-role="{{ $key->product_id }}" class="btn btn-warning">Sil</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ec-cart-update-bottom">
                                                    <a href="{{ route('index') }}">Alışverişe Devam Et</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--cart content End -->
                    </div>

            </div>
        </div>
    </section>
</x-guest-layout>



