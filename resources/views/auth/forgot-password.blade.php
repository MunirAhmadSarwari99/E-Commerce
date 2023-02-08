<x-guest-layout>
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Giriş Yapmak / Üye Olmak</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Anasayfa<span class="lnr lnr-arrow-right"></span></a>
                        <a href="javascript:void(0);">Parolanızı mı unuttunuz</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="{{ asset('img/login.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Parola Sıfırlama</h3>
                        <form class="row login_form" action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="col-md-12 form-group">
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder="E-posta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-posta'"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="col-md-12 form-group">
                                <x-primary-button class="primary-btn">
                                    {{ __('E-posta Şifre Sıfırlama Bağlantısı') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->


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
</x-guest-layout>
