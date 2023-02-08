<form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-floating mb-3">
        <fieldset class="row mb-3">
            <img id="image-view" style="width: 200px;" src="{{ asset('images/users/' . $user->image) }}" class="img-thumbnail cursor-pointer" alt="">
            <x-text-input id="image" name="image" type="file" class="hidden"/>
            <x-input-error :messages="$errors->get('image')" class="mt-2 text-uppercase" />
        </fieldset>
        <fieldset class="row mb-3">
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="0" {{ ($user->gender !== null & $user->gender == 0)? "checked" : "" }}>
                    <label class="form-check-label" for="gridRadios1">
                        Erkek
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="1" {{ ($user->gender !== null & $user->gender == 1)? "checked" : "" }}>
                    <label class="form-check-label" for="gridRadios2">
                        Kız
                    </label>
                </div>
                <x-input-error :messages="$errors->get('gender')" class="mt-2 text-uppercase" />
            </div>
        </fieldset>
    </div>
    <div class="form-floating mb-3">
        <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
        <x-input-label for="name" :value="__('Ad Soyad')" />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>
    <div class="form-floating mb-3">
        <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="email" />
        <x-input-label for="email" :value="__('E-posta')" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
    </div>
    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <div>
            <p class="text-sm mt-2 text-gray-800">
                {{ __('Your email address is unverified.') }}

                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </p>

            @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
            @endif
        </div>
    @endif
    <div class="form-floating mb-3">
        <x-text-input id="phone" name="phone" type="text" class="form-control" :value="old('phone', $user->phone)" required autofocus autocomplete="phone" />
        <x-input-label for="phone" :value="__('Telefon')" />
        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
    </div>
    <div class="form-floating mb-3">
        <x-text-input id="address" name="address" type="text" class="form-control" :value="old('address', $user->address)" required autofocus autocomplete="address" />
        <x-input-label for="address" :value="__('Adres')" />
        <x-input-error class="mt-2" :messages="$errors->get('address')" />
    </div>

    <div class="row">
        <div class="col-md-6">
            <x-primary-button class="btn btn-success">{{ __('Kayded') }}</x-primary-button>
        </div>
        <div class="col-md-6">
            @if (session('status') === 'profile-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="alert alert-success">
                    {{ __('Kaydedildi.') }}
                </div>
            @endif
        </div >
    </div>
    </form>
