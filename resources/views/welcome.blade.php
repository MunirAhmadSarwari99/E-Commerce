<x-guest-layout>
    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                @foreach($slider as $key)
                        <div class="ec-slide-item swiper-slide d-flex ec-slide-1">
                            <img width="600" src="{{ asset('images/Products/' . $key->GetOneImage($key->id) ) }}" style="margin-left: 68%;">
                            <div class="container align-self-center">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                        <div class="ec-slide-content slider-animation">
                                            <h1 class="ec-slide-title">{{ $key->productName }}</h1>
                                            <h5 class="ec-slide-stitle" style="font-size: 25px;">
                                                {{ $key->category->categoryName .' / '. $key->chold->childName .' / '. $key->tag->tagName }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->
    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Öne Çıkanlar</h2>
                        <h2 class="ec-title">Öne Çıkanlar</h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                            <div class="row">
                                <!-- Product Content -->
                                @foreach($products as $product)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                        <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{ asset('images/Products/' . $product->GetOneImage($product->id) ) }}" alt="Product" />
                                                    <img class="hover-image" src="{{ asset('images/Products/' . $product->GetOneImage($product->id) ) }}" alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Hızlı Görünüm" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal{{ $product->id }}">
                                                    <img src="{{ asset('images/icons/quickview.svg') }}" class="svg_img pro_svg" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $product->productName }}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="new-price">{{ $product->price }} TL</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img" data-src="{{ asset('images/Products/' . $product->GetOneImage($product->id) ) }}" data-src-hover="{{ asset('images/Products/' . $product->GetOneImage($product->id) ) }}" data-tooltip="Gray">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img" data-src="{{ asset('images/Products/' . $product->GetOneImage($product->id) ) }}" data-src-hover="{{ asset('images/Products/' . $product->GetOneImage($product->id) ) }}" data-tooltip="Orange">

                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Modal -->
                                    <div class="modal fade" id="ec_quickview_modal{{ $product->id }}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                                            <!-- Swiper -->
                                                                <div class="qty-product-cover">
                                                                    @foreach($product->detail as $detail)
                                                                        <div class="qty-slide">
                                                                            <img class="img-responsive" src="{{ asset('images/Products/' . $detail->images) }}" alt="">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="qty-nav-thumb">
                                                                    @foreach($product->detail as $detail)
                                                                        <div class="qty-slide">
                                                                            <img class="img-responsive" src="{{ asset('images/Products/' . $detail->images) }}" alt="">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                        </div>
                                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                                            <div class="quickview-pro-content">
                                                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">{{ $product->productName }}</a>
                                                                </h5>
                                                                <div class="ec-quickview-rating">
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star"></i>
                                                                </div>

                                                                <div class="ec-quickview-desc">{{ $product->details }}</div>
                                                                <div class="ec-quickview-price">
                                                                    <span class="new-price">{{ $product->price }}</span>
                                                                </div>
                                                                <livewire:add-to-cart :product="$product->id">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Modal end -->
                                @endforeach
                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->
</x-guest-layout>
