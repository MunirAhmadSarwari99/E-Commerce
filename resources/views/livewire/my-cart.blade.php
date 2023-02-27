<div>
    <div class="row">
        <div class="ec-cart-leftside col-lg-8 col-md-12 ">
            <!-- cart content Start -->
            <div class="ec-cart-content">
                <div class="ec-cart-inner">
                    <div class="row">
                        <form action="#">
                            <div class="table-content cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Ürün</th>
                                            <th colspan="2">Fiyat</th>
                                            <th style="text-align: center;" colspan="2">Miktar</th>
                                            <th colspan="2">Toplam</th>
                                            <th colspan="2"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($carts as $cart)
                                            <tr>
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
                                                        <input  type="text" name="cartqtybutton" wire:keydown="quantity({{$cart->product_id}})" value="1">
                                                    </div>
                                                </td>
{{--                                                <td data-label="Quantity" class="ec-cart-pro-qty" style="text-align: center;" colspan="2">--}}
{{--                                                    <span class="ec-cart-select-inner">--}}
{{--                                                        <input type="text" class="ec-cart-select" wire:change="quantity({{$cart->product_id}})" value="1">--}}
{{--                                                        <select name="ec_cart_country" id="ec-cart-select-country" class="ec-cart-select" wire:change="quantity({{$cart->product_id}})">--}}
{{--                                                            @for($i = 1; $i < 11; $i ++)--}}
{{--                                                                <option--}}
{{--                                                                    @if($i == $cart->quantity)--}}
{{--                                                                        selected--}}
{{--                                                                    @endif--}}
{{--                                                                    value="{{ $i }}">{{ $i }}</option>--}}
{{--                                                            @endfor--}}
{{--                                                        </select>--}}
{{--                                                    </span>--}}
{{--                                                </td>--}}
                                                <td data-label="Total" class="ec-cart-pro-subtotal" colspan="2">
{{--                                                    @if($productTotal )--}}
{{--                                                        {{ $cart->product->price * $cart->quantity }} TL--}}
{{--                                                    @else--}}
{{--                                                        {{ $productTotal }} TL--}}
{{--                                                    @endif--}}
                                                    {{ $productTotal }} TL
                                                    </td>
                                                <td data-label="Remove" class="ec-cart-pro-remove" colspan="2">
                                                    <a href="#">
                                                        <i class="ecicon eci-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ec-cart-update-bottom">
                                        <a href="#">Continue Shopping</a>
                                        <button class="btn btn-primary">Check Out</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                    <span class="text-right">{{ $SubTotal }} TL</span>
                                </div>
                                <div>
                                    <span class="text-left">KDV ({{ $key->product->tax }}%) :</span>
                                    <span class="text-right">{{ $kdv }} TL</span>
                                </div>
                                <div class="ec-cart-summary-total">
                                    <span class="text-left">Toplam tutar:</span>
                                    <span class="text-right">{{ $total }} TL</span>
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
