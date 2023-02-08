<x-guest-layout>
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Giriş Yapmak / Üye Olmak</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Anasayfa<span class="lnr lnr-arrow-right"></span></a>
                        <a href="{{ route('login') }}">Giriş Yap</a>
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
                        <h3>ÜYE OLUN</h3>
                        <form class="row login_form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="col-md-12 form-group">
                                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required placeholder="Ad Soyad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ad Soyad'"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="col-md-12 form-group">
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder="E-posta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-posta'"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="col-md-12 form-group">
                                <select id="level" class="form-control"  name="level" required>
                                    @foreach($roles as $key)
                                        <option value="{{ $key->id }}">{{ $key->roleName }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('level')" class="mt-2" />
                            </div>
                            <div class="col-md-12 form-group">
                                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Şifre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre'" autocomplete="new-password"/>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="col-md-12 form-group">
                                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required placeholder="Şifre Onayı" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre Onayı'"/>
                            </div>

                            <div class="col-md-12 form-group">
                                <x-primary-button class="primary-btn">
                                    {{ __('GİRİŞ YAP') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->
</x-guest-layout>
