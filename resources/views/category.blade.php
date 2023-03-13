<x-guest-layout>
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Kategoriler</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="ec-breadcrumb-item active">{{ $catgory->categoryName }}</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product tab Area Start -->
    <section class="sec-csc el-prod section-space-p">
        <div class="container">
            <div class="row">
                @foreach($catgory->products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- START single card -->
                        <div class="ec-product-csc">
                            <div class="ec-product-image">
                                <a href="{{ route('ProductDetails.show', $product->id) }}">
                                    <img src="{{ asset('images/Products/' . $product->GetOneImage($product->id) ) }}" class="img-center" alt="Product">
                                </a>
                            </div>
                            <div class="ec-product-body">
                                <p class="ec-description">
                                    {{ $product->productName }}
                                </p>
                                <ul class="ec-rating">
                                    <li class="ecicon">
                                        @if(\App\Models\Comment::average($product->id))
                                            <div class="rateYo-{{$product->id}}"></div>
                                            <script>
                                                $(function () {
                                                    $("div.rateYo-{{$product->id}}").rateYo({
                                                        rating: {{ \App\Models\Comment::average($product->id)}},
                                                        spacing: "5px",
                                                        readOnly: true
                                                    });
                                                });
                                            </script>
                                        @else
                                            <div class="rateYo"></div>
                                            <script>
                                                $(function () {
                                                    $("div.rateYo").rateYo({
                                                        rating: 0,
                                                        spacing: "5px",
                                                        readOnly: true
                                                    });
                                                });
                                            </script>
                                        @endif
                                    </li>
                                </ul>
                                <div class="ec-price">
                                    @if($product->discount != null)
                                        <span>{{ $product->oldPrice }} TL</span>
                                        {{ $product->price }} TL
                                    @else
                                        {{ $product->price }} TL
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 ec-link-icon">
                                        @auth
                                            <a data-tip="Add to Wishlist" data-target="wishlist" data-role="{{ $product->id }}">
                                                <i class="md md-favorite-outline"></i>
                                            </a>
                                        @else
                                            <a data-tip="Add to Wishlist" data-target="BtnWishlist">
                                                <i class="md md-favorite-outline"></i>
                                            </a>
                                        @endauth
                                        <a href="{{ route('ProductDetails.show', $product->id) }}" data-tip="Quick View">
                                            <i class="md md-visibility"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 ec-link-btn">
                                        @auth
                                            <button type="button" name="AddToCart" value="{{ $product->id }}" class=" ec-add-to-cart">Sepete Ekle</button>
                                        @else
                                            <button type="button" name="BtnAddToCart" class=" ec-add-to-cart">Sepete Ekle</button>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/END single card -->
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->
</x-guest-layout>
