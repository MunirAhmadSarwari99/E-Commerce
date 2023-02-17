<x-guest-layout>
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Giriş</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="ec-breadcrumb-item active">Giriş Yap</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec login page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Giriş Yap</h2>
                        <p class="sub-title mb-3">Dijital ürünleri alıp satmak için en iyi yer</p>
                    </div>
                </div>
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <div class="ec-login-form">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <span class="ec-login-wrap">
                                    <label>E-posta *</label>
                                    <x-text-input id="email" type="email" name="email" :value="old('email')" required placeholder="E-posta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-posta'"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Şifre *</label>
                                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Şifre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre'"/>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </span>
                                <span class="ec-login-wrap ec-login-fp">
                                    @if (Route::has('password.request'))
                                        <label><a href="{{ route('password.request') }}">{{ __('Parolanızı mı unuttunuz?') }}</a></label>
                                    @endif

                                </span>
                                <span class="ec-login-wrap ec-login-btn">
                                    <x-primary-button id="submit" class="btn btn-primary">
                                        {{ __('GİRİŞ YAP') }}
                                    </x-primary-button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
