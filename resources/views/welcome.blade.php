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
    <section class="sec-csc el-prod section-space-p">
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
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- START single card -->
                        <div class="ec-product-csc">
                            <div class="ec-product-image">
                                <a href="{{ route('ProductDetails.show', $product->id) }}">
                                    <img src="{{ asset('images/Products/' . $product->GetOneImage($product->id) ) }}" class="img-center" alt="Product">
                                </a>
                                <span class="ec-product-ribbon">Yeni</span>
                            </div>
                            <div class="ec-product-body">
                                <p class="ec-description">
                                    {{ $product->productName }}
                                </p>
                                <ul class="ec-rating">
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star"></li>
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
                                        <a href="#" data-tip="Add to Wishlist">
                                            <svg viewBox="0 -28 512.001 512" src="{{ asset('images/icons/wishlist.svg') }}" class="svg_img header_svg pro_svg" alt="wishlist">
                                                <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('ProductDetails.show', $product->id) }}" data-tip="Quick View">
                                            <svg  id="Capa_1" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;"  src="{{ asset('images/icons/quickview.svg') }}" class="svg_img pro_svg" alt="quick view">
                                                <g>
                                                    <g>
                                                        <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418    C447.361,287.923,358.746,385.406,255.997,385.406z"></path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 ec-link-btn">
                                        <button type="button" name="AddToCart" value="{{ $product->id }}" class=" ec-add-to-cart">add to cart</button>
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
    <!-- START Product Swip Button Style -->
    <section class="sec-sdwn el-prod section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Ürünlerimiz</h2>
                        <h2 class="ec-title">Ürünlerimiz</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($allProduct as $key)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- START single card -->
                        <div class="ec-product-csc">
                            <div class="ec-product-image">
                                <a href="{{ route('ProductDetails.show', $key->id) }}">
                                    <img src="{{ asset('images/Products/' . $key->GetOneImage($key->id) ) }}" class="img-center" alt="Product">
                                </a>
                            </div>
                            <div class="ec-product-body">
                                <p class="ec-description">
                                    {{ $key->productName }}
                                </p>
                                <ul class="ec-rating">
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star fill"></li>
                                    <li class="ecicon eci-star"></li>
                                </ul>
                                <div class="ec-price">
                                    @if($key->discount != null)
                                        <span>{{ $key->oldPrice }} TL</span>
                                        {{ $key->price }} TL
                                    @else
                                        {{ $key->price }} TL
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 ec-link-icon">
                                        <a href="#" data-tip="Add to Wishlist">
                                            <svg viewBox="0 -28 512.001 512" src="{{ asset('images/icons/wishlist.svg') }}" class="svg_img header_svg pro_svg" alt="wishlist">
                                                <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('ProductDetails.show', $key->id) }}" data-tip="Quick View">
                                            <svg  id="Capa_1" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;"  src="{{ asset('images/icons/quickview.svg') }}" class="svg_img pro_svg" alt="quick view">
                                                <g>
                                                    <g>
                                                        <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418    C447.361,287.923,358.746,385.406,255.997,385.406z"></path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 ec-link-btn">
                                        <button type="button" name="AddToCart" value="{{ $key->id }}" class=" ec-add-to-cart">add to cart</button>
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
    <!--/END Product Swip Up Style -->
</x-guest-layout>
