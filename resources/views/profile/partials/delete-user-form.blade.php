<section class="space-y-6">
    <header>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Hesabınız silindikten sonra, tüm kaynakları ve verileri kalıcı olarak silinir.') }}
        </p>
    </header>

    <x-danger-button class="btn btn-danger" data-bs-target="#confirm-user-deletion" data-bs-toggle="modal">
        {{ __('Hesabı Sil') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion">
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')
            @section('Title')
                {{ __('Hesabınızı silmek istediğinizden emin misiniz?') }}
            @endsection
            <p class="p-3">
                {{ __('Hesabınız silindikten sonra, tüm kaynakları ve verileri kalıcı olarak silinir. Hesabınızı kalıcı olarak silmek istediğinizi onaylamak için lütfen şifrenizi girin.') }}
            </p>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <x-text-input id="password" name="password" type="password" class="form-control" required autocomplete="password_confirmation"/>
                    <x-input-label for="password_confirmation" :value="__('Şifre')" />
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-6">
                        <x-secondary-button data-bs-dismiss="modal">
                            {{ __('İptal') }}
                        </x-secondary-button>
                    </div>
                    <div class="col-md-6">
                        <x-danger-button class="btn btn-danger">
                            {{ __('silt') }}
                        </x-danger-button>
                    </div >
                </div>
            </div>



{{--            <h2 class="text-lg font-medium text-gray-900">--}}
{{--                {{ __('Are you sure you want to delete your account?') }}--}}
{{--            </h2>--}}

{{--            <p class="mt-1 text-sm text-gray-600">--}}
{{--                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}--}}
{{--            </p>--}}

{{--            <div class="mt-6">--}}
{{--                <x-input-label for="password" value="Password" class="sr-only" />--}}

{{--                <x-text-input--}}
{{--                    id="password"--}}
{{--                    name="password"--}}
{{--                    type="password"--}}
{{--                    class="mt-1 block w-3/4"--}}
{{--                    placeholder="Password"--}}
{{--                />--}}

{{--                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <div class="mt-6 flex justify-end">--}}
{{--                <x-secondary-button x-on:click="$dispatch('close')">--}}
{{--                    {{ __('Cancel') }}--}}
{{--                </x-secondary-button>--}}

{{--                <x-danger-button class="ml-3">--}}
{{--                    {{ __('Delete Account') }}--}}
{{--                </x-danger-button>--}}
{{--            </div>--}}
        </form>
    </x-modal>
</section>
