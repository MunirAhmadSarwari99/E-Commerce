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
                                <h3 class="text-30 lh-13">Parola Sıfırlama</h3>
                                <p class="mt-10">
                                    <a href="{{ route('index') }}" class="text-purple-1">Anasayfa</a> /
                                    <a class="text-purple-1">Parola Sıfırlama</a>
                                </p>
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form class="contact-form respondForm__form row y-gap-20 pt-30" action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">E-posta</label>
                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder="E-posta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-posta'"/>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                    <div class="col-12">
                                        <x-primary-button id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                                            {{ __('E-posta Şifre Sıfırlama Bağlantısı') }}
                                        </x-primary-button>
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






{{--<x-guest-layout>--}}
{{--    <!-- Start Banner Area -->--}}
{{--    <section class="banner-area organic-breadcrumb">--}}
{{--        <div class="container">--}}
{{--            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">--}}
{{--                <div class="col-first">--}}
{{--                    <h1>Giriş Yapmak / Üye Olmak</h1>--}}
{{--                    <nav class="d-flex align-items-center">--}}
{{--                        <a href="index.html">Anasayfa<span class="lnr lnr-arrow-right"></span></a>--}}
{{--                        <a href="javascript:void(0);">Parolanızı mı unuttunuz</a>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Banner Area -->--}}
{{--    <!--================Login Box Area =================-->--}}
{{--    <section class="login_box_area section_gap">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="login_box_img">--}}
{{--                        <img class="img-fluid" src="{{ asset('img/login.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="login_form_inner">--}}
{{--                        <h3>Parola Sıfırlama</h3>--}}
{{--                        <form class="row login_form" action="{{ route('password.email') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder="E-posta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-posta'"/>--}}
{{--                                <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <x-primary-button class="primary-btn">--}}
{{--                                    {{ __('E-posta Şifre Sıfırlama Bağlantısı') }}--}}
{{--                                </x-primary-button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!--================End Login Box Area =================-->--}}


{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
