<x-guest-layout>
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Ürün Bilgileri</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="ec-breadcrumb-item active">Ürün Bilgileri</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img single-pro-img-no-sidebar">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            @foreach($product->detail as $key)
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="{{ asset('images/Products/' . $key->images) }}" alt="">
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="single-nav-thumb">
                                            @foreach($product->detail as $key)
                                            <div class="single-slide">
                                                <img class="img-responsive" src="{{ asset('images/Products/' . $key->images) }}" alt="">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc single-pro-desc-no-sidebar">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">{{ $product->productName }}</h5>
                                        <div class="ec-single-rating-wrap">
                                            <div class="ec-single-rating">
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
                                            </div>
                                        </div>
                                        <div class="ec-single-desc">{{ $product->details }}</div>
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                                <span class="ec-single-ps-title">Düşük fiyat</span>
                                                @if($product->discount != null)
                                                    <small class="new-price"><del>{{ $product->oldPrice }} TL</del></small>
                                                    <span class="new-price">{{ $product->price }} TL</span>
                                                @else
                                                    <span class="new-price">{{ $product->price }} TL</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="ec-single-qty">
                                            <div class="ec-single-cart ">
                                                <button type="button" class="btn btn-primary" name="AddToCart" value="{{ $product->id }}">Sepete Ekle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details" role="tablist">Detaylar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review" role="tablist">
                                            Yorumlar
                                            ({{ $product->comments->count()}})
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                        <p>{{ $product->details }}</p>
                                    </div>
                                </div>

                                <div id="ec-spt-nav-review" class="tab-pane fade">
                                    <div class="row">
                                        <div class="ec-t-review-wrapper">
                                            @foreach($product->comments as $comment)
                                                <div class="ec-t-review-item">
                                                    <div class="ec-t-review-avtar">
                                                        <img src="{{ asset('images/users/' . $comment->user->image) }}" alt="" />
                                                    </div>
                                                    <div class="ec-t-review-content">
                                                        <div class="ec-t-review-top">
                                                            <div class="ec-t-review-name">
                                                                {{ $comment->user->name }}
                                                            </div>
                                                            <div class="ec-t-review-rating">
                                                                <div class="rateYo-{{$comment->id}}"></div>
                                                                <script>
                                                                    $(function () {
                                                                        $("div.rateYo-{{$comment->id}}").rateYo({
                                                                            rating: {{$comment->rating}},
                                                                            spacing: "5px",
                                                                            readOnly: true
                                                                        });
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                        <div class="ec-t-review-bottom">
                                                            <p>{{ $comment->comment }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @if(Auth::check())
                                            @foreach(Auth::user()->roles as $role)
                                                @if($role->roleName == 'Customer')
                                                    <div class="ec-ratting-content">
                                                        <h3>Yorum Yaz</h3>
                                                        <div class="ec-ratting-form">
                                                            <form method="POST" action="{{ route('Comment.store') }}">
                                                                @csrf
                                                                <div class="ec-ratting-star">
                                                                    <span>Yıldız Ekle:</span>
                                                                    <div class="ec-t-review-rating">
                                                                        <div id="rateYo"></div>
                                                                    </div>
                                                                    <input type="hidden" name="rating" value="0" required/>
                                                                </div>
                                                                <div class="ec-ratting-input">
                                                                    <input name="name" placeholder="Ad Soyad" type="text" value="{{ Auth::user()->name }}" required/>
                                                                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-uppercase" />
                                                                </div>
                                                                <div class="ec-ratting-input">
                                                                    <input name="email" placeholder="E-posta*" type="email" value="{{ Auth::user()->email }}" required />
                                                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-uppercase" />
                                                                </div>
                                                                <div class="ec-ratting-input form-submit">
                                                                    <textarea name="comment" placeholder="Yorumunuzu Yazın" required></textarea>
                                                                    <x-input-error :messages="$errors->get('comment')" class="mt-2 text-uppercase" />
                                                                    <input type="hidden" name="product" value="{{ $product->id }}" required/>
                                                                    <button class="btn btn-primary" type="submit" value="Submit">Gönder</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>

            </div>
        </div>
    </section>
    <!-- End Single product -->
</x-guest-layout>
