<x-guest-layout>
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Üye</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="ec-breadcrumb-item active">Üye Ol</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Üye Ol</h2>
                        <p class="sub-title mb-3">Dijital ürünleri alıp satmak için en iyi yer</p>
                    </div>
                </div>
                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Ad Soyad *</label>
                                    <x-text-input id="name"  type="text" name="name" :value="old('name')" required placeholder="Ad Soyad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ad Soyad'"/>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>E-posta *</label>
                                    <x-text-input id="email" type="email" name="email" :value="old('email')" required placeholder="E-posta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-posta'"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Hesap Türü  *</label>
                                    <span class="ec-rg-select-inner">
                                        <select id="ec-select-state"  name="level" class="ec-register-select">
                                            <option selected="" disabled="">Hesap Türünü Seç</option>
                                            @foreach($roles as $key)
                                                <option value="{{ $key->id }}">{{ $key->roleLabel }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('level')" class="mt-2" />
                                    </span>

                                </span>


                                <span class="ec-register-wrap ec-register-half">
                                    <label>Şifre *</label>
                                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Şifre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre'" autocomplete="new-password"/>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </span>
                                <span class="ec-register-wrap">
                                    <label>Şifre Onayı *</label>
                                    <x-text-input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Şifre Onayı" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre Onayı'"/>
                                </span>
                                <span class="ec-register-wrap ec-register-btn">
                                    <x-primary-button id="submit" class="btn btn-primary">
                                        {{ __('Üye Ol') }}
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
