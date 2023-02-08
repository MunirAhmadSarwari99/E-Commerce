<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">{{ __('Rol ve Rol İznini Güncelle') }}</h6>
                    <form method="post" action="{{ route('Role.update', $role->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')
                        <div class="form-floating mb-3">
                        </div>
                        <div class="form-floating mb-3">
                            <x-text-input id="roleName" name="roleName" type="text" class="form-control"  autocomplete="roleName" value="{{ $role->roleLabel }}"/>
                            <x-input-label for="roleName" :value="__('Rol ismi')" />
                            <x-input-error :messages="$errors->get('roleName')" class="mt-2" />
                        </div>
                        <div class="form-floating mb-3">
                            <strong>{{ __('Rolun İzinleri') }}</strong>
                            <select id="levelPer" name="levelPer[]" class="form-control Select2" multiple>
                                @foreach($permissions as $per)
                                    <option
                                        @foreach($role->permissions as $permission)
                                            @if($per->id === $permission->id)
                                                selected
                                        @endif
                                        @endforeach
                                        value="{{ $per->id }}">{{ $per->perLabel }}</option>
                                @endforeach
                            </select>

                            <x-input-error class="mt-2" :messages="$errors->get('levelPer')" />
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('Role.index') }}" class="btn btn-secondary">İptal</a>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
