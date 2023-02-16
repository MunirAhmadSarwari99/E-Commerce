<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> .:: {{ config('app.name', 'Laravel') }} ::. </title>
    <!-- ===== CSS STYLESHEET ===== -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="preloader-visible" data-barba="wrapper">
<!-- preloader start -->
<div class="preloader js-preloader">
    <div class="preloader__bg"></div>
</div>
<!-- preloader end -->
<main class="main-content bg-beige-1">
    <div class="content-wrapper  js-content-wrapper">
        <section class="form-page js-mouse-move-container">
            <div class="form-page__img bg-dark-1" style="background-image: url({{ asset('images/bg2.jpg') }}); background-repeat: repeat; background-size: cover; background-position: center;">

            </div>
            <div class="form-page__content lg:py-50">
                <div class="container">
                    <div class="row justify-center items-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                                <h3 class="text-30 lh-13">Giriş</h3>
                                <p class="mt-10">Henüz bir hesabınız yok mu?
                                    @if (Route::has('login'))
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="text-purple-1">Üye Ol</a>
                                            @endif
                                    @endif
                                </p>
                                <form class="contact-form respondForm__form row y-gap-20 pt-30" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">E-posta</label>
                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder="E-posta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-posta'"/>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Şifre</label>
                                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Şifre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre'"/>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <x-primary-button id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                                            {{ __('GİRİŞ YAP') }}
                                        </x-primary-button>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- JavaScript -->
<script src="{{ asset('js/leaflet.js') }}"></script>
<script src="{{ asset('js/vendors.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
