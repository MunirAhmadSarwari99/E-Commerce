<x-guest-layout>
    <section class="masthead -type-1 js-mouse-move-container">
        <div class="masthead__bg">
            <img src="{{ asset('images/bg.png') }}" alt="image">
        </div>

        <div class="container">
            <div data-anim-wrap class="row y-gap-30 justify-between items-end">
                <div class="col-xl-6 col-lg-6 col-sm-10">
                    <div class="masthead__content">
                        <h1 data-anim-child="slide-up" class="masthead__title">
                            {{ config('app.name', 'Laravel') }}
                            with  <span class="text-green-1 underline">Laravel</span>
                        </h1>
                        <div data-anim-child="slide-up delay-2" class="masthead__buttons row x-gap-10 y-gap-10">
                            @if (Route::has('login'))
                                <div class="col-12 col-sm-auto">
                                    <a data-barba href="{{ route('login') }}" class="button -md -outline-green-1 text-green-1">Giriş Yap</a>
                                </div>
                                @if (Route::has('register'))
                                    <div class="col-12 col-sm-auto">
                                        <a data-barba href="{{ route('register') }}" class="button -md -purple-1 text-white">Ücretsiz katılın</a>
                                    </div>
                                @endif
                            @endif
                        </div>
                        <div data-anim-child="slide-up delay-3" class="masthead-info row y-gap-15 sm:d-none">

                            <div class="masthead-info__item d-flex items-center text-white">
                                <div class="masthead-info__title lh-1">12'den Fazla Müşteri</div>
                            </div>

                            <div class="masthead-info__item d-flex items-center text-white">
                                <div class="masthead-info__title lh-1">60.000'den Fazla Ürün</div>
                            </div>

                            <div class="masthead-info__item d-flex items-center text-white">
                                <div class="masthead-info__title lh-1">60.000'den Fazla Mağaza</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-anim-child="slide-up delay-5" class="col-xl-6 col-lg-6">
                    <div class="masthead-image">
                        <div class="masthead-image__el1">
                            <img class="js-mouse-move" data-move="40" src="{{ asset('images/1.png') }}" alt="image">

                            <div data-move="30" class="lg:d-none img-el -w-250 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                                <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                                    <img src="{{ asset('images/1.svg') }}" alt="icon">
                                </div>
                                <div class="ml-20">
                                    <div class="text-orange-1 text-16 fw-500 lh-1">3.000 +</div>
                                    <div class="mt-3">Free Courses</div>
                                </div>
                            </div>
                        </div>

                        <div class="masthead-image__el2">
                            <img class="js-mouse-move" data-move="70" src="{{ asset('images/2.png') }}" alt="image">

                            <div data-move="60" class="lg:d-none img-el -w-260 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                                <img src="{{ asset('images/4.png') }}" alt="icon">
                                <div class="ml-20">
                                    <div class="text-dark-1 text-16 fw-500 lh-1">Ali Tufan</div>
                                    <div class="mt-3">UX/UI Designer</div>
                                    <div class="d-flex x-gap-5 mt-3">
                                        <div>
                                            <div class="icon-star text-yellow-1 text-11"></div>
                                        </div>
                                        <div>
                                            <div class="icon-star text-yellow-1 text-11"></div>
                                        </div>
                                        <div>
                                            <div class="icon-star text-yellow-1 text-11"></div>
                                        </div>
                                        <div>
                                            <div class="icon-star text-yellow-1 text-11"></div>
                                        </div>
                                        <div>
                                            <div class="icon-star text-yellow-1 text-11"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="masthead-image__el3">
                            <img class="js-mouse-move" data-move="40" src="{{ asset('images/3.png') }}" alt="image">

                            <div data-move="30" class="shadow-4 img-el -w-260 px-30 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                                <div class="img-el__side">
                                    <div class="size-50 d-flex justify-center items-center bg-purple-1 rounded-full">
                                        <img src="{{ asset('images/2.svg') }}" alt="icon">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="text-purple-1 text-16 fw-500 lh-1">Congrats!</div>
                                    <div class="mt-3">Your Admission Completed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg class="svg-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="svg-waves__parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" />
                <use xlink:href="#gentle-wave" x="48" y="3" />
                <use xlink:href="#gentle-wave" x="48" y="5" />
                <use xlink:href="#gentle-wave" x="48" y="7" />
            </g>
        </svg>
    </section>
</x-guest-layout>
