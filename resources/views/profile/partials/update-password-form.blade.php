<form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('put')
    <div class="form-floating mb-3">
        <x-text-input id="current_password" name="current_password" type="password" class="form-control" required autocomplete="current-password" />
        <x-input-label for="current_password" :value="__('Mevcut Şifre')" />
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <x-text-input id="password" name="password" type="password" class="form-control" required autocomplete="new-password"/>
        <x-input-label for="password" :value="__('Yeni Şifre')" />
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required autocomplete="password_confirmation"/>
        <x-input-label for="password_confirmation" :value="__('Yeni Şifre')" />
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
    </div>
    <div class="row">
        <div class="col-md-6">
            <x-primary-button class="btn btn-success">{{ __('Kayded') }}</x-primary-button>
        </div>
        <div class="col-md-6">
            @if (session('status') === 'password-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="alert alert-success">
                    {{ __('Kaydedildi.') }}
                </div>
            @endif
        </div >
    </div>
</form>
