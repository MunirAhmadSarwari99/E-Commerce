<x-guest-layout>
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Sepetim</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="ec-breadcrumb-item active">Sepete Ekle</li>
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
                    <div class="ec-cart-leftside col-lg-8 col-md-12 ">
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
                                                        <th>Seç</th>
                                                        <th>Ürün</th>
                                                        <th colspan="2">Fiyat</th>
                                                        <th style="text-align: center;" colspan="2">Miktar</th>
                                                        <th colspan="2">Toplam</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($carts as $cart)
                                                        <tr id="{{ $cart->id }}">
                                                            <td data-label="order" class="ec-cart-pro-order">
                                                                <input type="checkbox" name="order[]" value="{{ $cart->id }}" checked>
                                                            </td>
                                                            <td data-label="Product" class="ec-cart-pro-name">
                                                                <a href="product-left-sidebar.html">
                                                                    <img class="ec-cart-pro-img mr-4" src="{{ asset('images/Products/' . $cart->product->GetOneImage($cart->product_id)) }}" alt="Product">
                                                                    {{ $cart->product->productName }}
                                                                </a>
                                                            </td>
                                                            <td data-label="Price" class="ec-cart-pro-price" colspan="2">
                                                                <span class="amount">{{ $cart->product->price }} TL</span>
                                                            </td>
                                                            <td data-label="Quantity" class="ec-cart-pro-qty" style="text-align: center;">
                                                                <div class="cart-qty-plus-minus">
                                                                    <select name="quantity" data-id="{{ $cart->id }}" data-role="{{ $cart->product->price }}" required>
                                                                        @for($i = 1; $i < 11; $i ++)
                                                                            <option
                                                                                @if($cart->quantity == $i) selected @endif
                                                                                value="{{ $i }}">{{ $i }}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td id="Total{{ $cart->id }}" data-label="Total" class="ec-cart-pro-subtotal" colspan="2">
                                                                {{ $cart->product->price * $cart->quantity }} TL
                                                            </td>
                                                            <td data-label="Remove" class="ec-cart-pro-remove" colspan="2">
                                                                <button type="button" class="btn btn-primary  m-2"><i class="ecicon eci-trash-o"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <x-input-error :messages="$errors->get('order')" class="mt-2" />
                                                        <x-input-error :messages="$errors->get('inputToplam')" class="mt-2" />
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ec-cart-update-bottom">
                                                    <a href="#">Alışverişe Devam Et</a>
                                                    <button type="submit" class="btn btn-primary">Sepeti Onayla</button>
                                                    <input id="inputToplam" type="hidden" name="inputToplam" value="{{ $total }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--cart content End -->
                    </div>
                <!-- Sidebar Area Start -->
                    <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">
                                        Bilgiler
                                        <div class="ec-sidebar-res">
                                            <i class="ecicon eci-angle-down"></i>
                                        </div>
                                    </h3>
                                </div>
                                <div class="ec-sb-block-content ec-sidebar-dropdown">
                                    <div class="ec-cart-summary-bottom">
                                        <div class="ec-cart-summary">
                                            @foreach($carts as $key)@endforeach
                                        <div>
                                            <span class="text-left">Ara Toplam :</span>
                                            <span id="AraToplam" class="text-right">{{ $SubTotal }} TL</span>
                                        </div>
                                        <div>
                                            <span class="text-left">KDV ({{ $key->product->tax }}%) :</span>
                                            <span id="kdv" class="text-right">{{ $kdv }} TL</span>
                                        </div>
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Toplam tutar:</span>
                                            <span id="Toplam" class="text-right">{{ $total }} TL</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>



